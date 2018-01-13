<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if (isset($_GET['logout']) == 'signout') {
			$this->session->sess_destroy();
			redirect('home');
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
		$this->load->view('home/header');
		$this->load->view('login/login');
	}

	function ceklogin()
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

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */