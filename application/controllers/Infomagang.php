<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infomagang extends CI_Controller {

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
		$data['info'] = $this->infomagang_model->tampil_info();
		$this->load->view('home/infomagang',$data);
		$this->load->view('home/footer');
	} 

}

/* End of file Tentang.php */
/* Location: ./application/controllers/Tentang.php */