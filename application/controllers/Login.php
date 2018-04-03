<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('Recaptcha');
		if (isset($_GET['logout']) == 'signout') {
			$this->session->sess_destroy();
			redirect('');
		}else{
			if ($this->session->has_userdata('status')) {
				if ($this->session->userdata('role') == "mahasiswa") {
					redirect('mahasiswa');
				}else if(($this->session->userdata('role') =='admin') ||($this->session->userdata('role') =='superadmin') ){
					redirect('admin');
				}
			}
		}
	}

	public function index()
	{
		$this->load->view('login/header');
		$this->load->view('login/login');
	}

	public function ceklogin()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$whereadmin = array(
	    					'username'=>$username,
	    					'password'=>$password
	    		);


		$hasiladmin = $this->login_model->cekloginadmin('admin',$whereadmin);
		
		$hasiluser = $this->login_model->cekloginuser('user',$username,$password);

	    if ($hasiladmin == 1) {
	    	 	$result=$this->db->get_where('admin',$whereadmin)->row_array();
	    	 	$data_session = array(
	    	 					'id_admin'=>$result['id_admin'],
	    	 					'username'=>$result['username'],
	    	 					'status'=>'login',
	    	 					'role'=>$result['role']
	    	 	);
	    	 	$this->session->set_userdata($data_session);
	    	 	redirect('admin');
	    	 	
	   	}elseif ($hasiluser == 1) {
	   			$result=$this->login_model->datauser('user',$username,$password);
	   			$data_session = array(
	   							'nim'=>$result['nim'],
	   							'nama_mahasiswa'=>$result['nama_mahasiswa'],
	   							'status'=>'login',
	   							'jurusan'=>$result['prodi'],
	   							'email'=>$result['email'],
	   							'role'=>'mahasiswa'
	   			);
	   			$this->session->set_userdata($data_session);
	   			redirect('mahasiswa');
	    	 	
	   	}else{
	   		$this->session->set_flashdata('info', 'true');
	   		redirect('login');
	   	}
	}
	public function resetpassword(){
		 $data = array(
            'captcha' => $this->recaptcha->getWidget(), // menampilkan recaptcha
            'script_captcha' => $this->recaptcha->getScriptTag(), // javascript recaptcha ditaruh di head
        );

		$this->load->view('login/header');
		$this->load->view('login/resetpassword',$data);
	}

	public function resetpassword1(){
		$this->load->view('login/header');
		$this->load->view('login/resetpassword-1');
	}

	public function kirim_email(){
      date_default_timezone_set("Asia/jakarta");
      $email = $this->input->post('email');
      $rs = $this->user_model->getByEmail($email);
     	
      $recaptcha = $this->input->post('g-recaptcha-response');
      $response = $this->recaptcha->verifyResponse($recaptcha);	

      // cek apakah ada email di mahasiswa
      if(!isset($response['success']) || $response['success'] <> true){
      	$this->session->set_flashdata('validasi_captcha','true');
      	redirect('login/resetpassword','refresh');
      }elseif (!$rs->num_rows() > 0){
        $this->session->set_flashdata('email_tidak_ada','true');
        redirect('login/resetpassword');
      }else{
          $user = $rs->row();
          // get nim mahasiswa
          $user_token = $user->nim;
          //buat umur token expirednya
          $date_create_token = date("Y-m-d H:i");
          $date_expired_token = date('Y-m-d H:i',strtotime('+2 hour',strtotime($date_create_token)));
          // membuat token string
          $tokenstring = md5(($user_token.$date_create_token));
          // simpan data token
          $data = array(
                        'token'=>$tokenstring,
                        'nim'=>$user_token,
                        'created'=>$date_create_token,
                        'expired'=>$date_expired_token
                  );
          $simpan = $this->user_model->simpanToken($data);
           if ($simpan > 0){

           	// localhost/surat-e-mercu/login
           	$isi= html_entity_decode(
					"Ini adalah link untuk reset password harap untuk segera untuk mereset password anda "."<a href='https://suratfasilkom.mohagustiar.info/login/reset/token/$tokenstring'>https://suratfasilkom.mohagustiar.info/login/reset/token/".$tokenstring."</a>"
			) ;

           	  $config = Array(  
		        'protocol' => 'smtp',  
		        'smtp_host' => 'https://www.mohagustiar.info/',  
		        'smtp_port' =>  465,  
		        'smtp_user' => 'contactme@mohagustiar.info',   
		        'smtp_pass' => 'project2m123!@#',  
		        'smtp_keepalive'=>'TRUE',
		        'mailtype' => 'html',   
		        'charset' => 'iso-8859-1'  
	         );

	         $this->load->library('email', $config);  
	         $this->email->set_newline("\r\n");  
		     $this->email->from('contactme@mohagustiar.info','Raka Hikmah');
			 $this->email->to($email); 
				
			 $this->email->subject("Reset Password Untuk Akun Anda");
			 $this->email->message($isi);
			 $this->email->set_mailtype("html");
			 $this->email->send();

			 $this->session->set_flashdata('cek_email','true');
			 redirect('login/resetpassword');
			 
		   }else{
             $this->session->set_flashdata('kesalahan','true');
             redirect('login/resetpassword');
           }
       }
    }

     public function reset(){
      date_default_timezone_set("Asia/jakarta");
      $token = $this->uri->segment(4);
     
      // get cek tokennya
      $cekToken = $this->user_model->cekToken($token);
      $rs = $cekToken->num_rows();
     
      // cek token ada atau engga
      if ($rs > 0){
     
        $data = $cekToken->row();
        $tokenExpired = $data->expired;
        $timenow = date("Y-m-d H:i:s");
     
        // cek token expired atau engga
        if ($timenow < $tokenExpired){
     
          // tampilkan form reset
          $datatoken['token'] = $token;
          $this->load->view('login/header');
          $this->load->view('login/resetpassword-1',$datatoken);
        }else{
          // redirect form forgot
          $this->load->view('errors/tokenexpired');
        }
      }else{
          $this->load->view('errors/tokennotfound');
      }
    }

    public function kirim_reset(){
 
      $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[8]|alpha_numeric');
      $this->form_validation->set_rules('confirmpassword','confirmpassword','required|matches[password]');

      if ($this->form_validation->run() == FALSE) {
      	  $data['token'] = $this->input->post('token');
	      $this->load->view('login/header');
	      $this->load->view('login/resetpassword-1',$data);
      }else{
	   	  $password = $this->input->post('password');
	      $token = $this->input->post('token');
	      $cekToken = $this->user_model->cekToken($token);
	      $data = $cekToken->row();
	      $nim = $data->nim;
	      
	      // ubah password
	      $data = array ('password'=>md5($password));
	      $simpan = $this->user_model->ResetPasswordMahasiswa($data,$nim);
	     
	      if ($simpan > 0){
	      	$this->session->set_flashdata('berhasil_reset','true');
	        redirect('login');
	      }else{
	       $this->session->set_flashdata('gagal_reset','true');
	       redirect('login');
	      }
      }

    }

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */