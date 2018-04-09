<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infomagang extends CI_Controller {

	public function index()
	{
		$this->load->view('home/infomagang');
		$this->load->view('home/footer');
	}

}

/* End of file Tentang.php */
/* Location: ./application/controllers/Tentang.php */