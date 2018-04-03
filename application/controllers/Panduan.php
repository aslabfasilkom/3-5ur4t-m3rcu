<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panduan extends CI_Controller {

	public function index()
	{
		$this->load->view('home/header');
		$this->load->view('home/panduan');
		$this->load->view('home/footer');
	}

}

/* End of file Tentang.php */
/* Location: ./application/controllers/Tentang.php */