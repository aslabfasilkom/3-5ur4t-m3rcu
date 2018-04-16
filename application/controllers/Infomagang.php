<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infomagang extends CI_Controller {

	public function index()
	{
		$data['info'] = $this->infomagang_model->tampil_info();
		$this->load->view('home/infomagang',$data);
		$this->load->view('home/footer');
	} 

}

/* End of file Tentang.php */
/* Location: ./application/controllers/Tentang.php */