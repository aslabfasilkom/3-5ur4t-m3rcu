<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {

	public function index()
	{
		$this->load->view('prodi/header');
		$this->load->view('prodi/sidebar');
		$this->load->view('prodi/prodi_dashboard');
		$this->load->view('prodi/footer');
	}

	public function prodi_reportta()
	{
		$this->load->view('prodi/header');
		$this->load->view('prodi/sidebar');
		$this->load->view('prodi/prodi_reportta');
		$this->load->view('prodi/footer');
	}

	public function prodi_reportkp()
	{
		$this->load->view('prodi/header');
		$this->load->view('prodi/sidebar');
		$this->load->view('prodi/prodi_reportkp');
		$this->load->view('prodi/footer');
	}
}