<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infomagang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->has_userdata('status')) {
			if(($this->session->userdata('role') =='admin') ||($this->session->userdata('role') =='superadmin') ){
				redirect('admin');
			}
		}
	}

	public function index()
	{
		$data['infokp'] = $this->infomagang_model->tampilKPinfo();
		$data['infota'] = $this->infomagang_model->tampilTAinfo();
		$this->load->view('home/infomagang',$data);
		$this->load->view('home/footer');
	} 

}

/* End of file Tentang.php */
/* Location: ./application/controllers/Tentang.php */