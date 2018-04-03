<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koordinator extends CI_Controller {

	public function index()
	{
		$this->load->view('koordinator/header');
		$this->load->view('koordinator/sidebar');
		$this->load->view('koordinator/report');
		$this->load->view('koordinator/footer');
	}

}

/* End of file Tentang.php */
/* Location: ./application/controllers/Tentang.php */