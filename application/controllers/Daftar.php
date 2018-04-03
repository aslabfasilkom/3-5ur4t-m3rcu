<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		 $this->load->library('Recaptcha');
		if ($this->session->has_userdata('status')) {
			if ($this->session->userdata('role')=='mahasiswa') {
				redirect('mahasiswa');
			}elseif($this->session->userdata('role')=='admin' || $this->session->userdata('role')=='superadmin'){
				redirect('admin');
			}
		}
	}

	function validate_captcha() {
        $recaptcha = trim($this->input->post('g-recaptcha-response'));
        $userIp= $this->input->ip_address();
        // localhost
		// secret key = 6Lc5kEYUAAAAAMSq4Kvz3k1IGKmDNIKaN_X9EhxH

		// deploy hosting 
		// secret key = 6Lc-xkYUAAAAAOjTXeEoqEkRGpHivYcco8kBXg8G
        
        $secret='6Lc5kEYUAAAAAMSq4Kvz3k1IGKmDNIKaN_X9EhxH';
        $data = array(
            'secret' => "$secret",
            'response' => "$recaptcha",
            'remoteip' =>"$userIp"
        );

        $verify = curl_init();
        curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($verify, CURLOPT_POST, true);
        curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($verify);
        $status= json_decode($response, true);
        if(empty($status['success'])){
            return FALSE;
        }else{
            return TRUE;
        }
    }

	public function index()
	{
		
		//form validasi
		$this->form_validation->set_rules('nama','Nama','trim|required');
		$this->form_validation->set_rules('nimmhs','NIM', 'trim|required|exact_length[8]|numeric');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|alpha_numeric');
		$this->form_validation->set_rules('repassword', 'Re-Password', 'trim|required|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('reemail', 'Re-Email', 'trim|required|matches[email]');
		$this->form_validation->set_rules('kodenim', 'Program Studi', 'required');
		$this->form_validation->set_rules('prodi', 'Program Studi', 'required');
		$this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
		$this->form_validation->set_message('validate_captcha', 'Mohon di check pada captcha');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
	            'captcha' => $this->recaptcha->getWidget(), 
	            'script_captcha' => $this->recaptcha->getScriptTag(), 
            );
			$this->load->view('daftar/header');
			$this->load->view('daftar/daftar',$data);
			$this->load->view('home/footer');
		} else {
			$nimmhs  =$this->input->post('nimmhs');
			$kodemhs =$this->input->post('kodenim');
			$nimlengkap =$kodemhs.$nimmhs;
			$validasiemail = substr($this->input->post('email'),11);
			$validasiemailnim = substr($this->input->post('email'),0,11);
			$resultchecknim = $this->daftar_model->ceknimmahasiswa($nimlengkap);

			if ($validasiemail != "@student.mercubuana.ac.id") {
				$this->session->set_flashdata('emailmercu', 'true');
				redirect('daftar');
			}elseif($nimlengkap != $validasiemailnim ){
				$this->session->set_flashdata('emailmhs','true');
				redirect('daftar');
			}elseif($resultchecknim > 0){
				$this->session->set_flashdata('nimsudahada', 'true');
				redirect('daftar');
			}else{
				$this->load->library('webservice');
				$cekmatakuliah = $this->webservice->CheckMatkulKeseluruhan($nimlengkap,$this->input->post('nama'));
				if ($cekmatakuliah == 1) {
					$this->daftar_model->registerMahasiswa();
					$this->session->set_flashdata('info_berhasil', 'true');
					redirect('login');
				}else{
					$this->session->set_flashdata('tidak_bisa','true');
					redirect('daftar');
				}
				
			}
		}
	}

	public function test()
	{
		$this->load->library('webservice');
		
		echo $this->webservice->CheckMatkulKP('4181401204');
		echo $this->webservice->CheckSKSKp('41814010204');
		
	}
}

