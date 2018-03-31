w<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->has_userdata('status')) {
			if ($this->session->userdata('role') == "mahasiswa") {
				redirect('mahasiswa');
			}else if(($this->session->userdata('role') =='admin') ||($this->session->userdata('role') =='superadmin') ){
				redirect('admin');
			}
		}
	}

	public function index()
	{
		$this->load->view('home/header');
		$this->load->view('home/content');
		$this->load->view('home/footer');
	}
	public function tentang(){
		$this->load->view('home/header');
		$this->load->view('home/tentang');
		$this->load->view('home/footer');
	}
}
