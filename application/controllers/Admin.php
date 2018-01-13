<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		date_default_timezone_set("Asia/Jakarta");
		parent::__construct();
		if (!$this->session->has_userdata('status')) {
			redirect('home');

		}else if($this->session->userdata('role') =='mahasiswa'){
			redirect('mahasiswa');
		}
	}

	/*public function index()
	{
		echo "berhasil login sebagai admin ";
	    echo $this->session->userdata('username');
	    echo  anchor('login?logout=signout', 'keluar');
	}*/
  
  public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/dashboardadmin_v');
		$this->load->view('admin/footer');
	}
  
	public function waitingkp()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/waitingkp');
		$this->load->view('admin/footer');
	}
  
	public function waitingsidang()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/waitingsidang');
		$this->load->view('admin/footer');
	}
	public function finishkp()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/finishkp');
		$this->load->view('admin/footer');
	}
	public function finishsidang()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/finishsidang');
		$this->load->view('admin/footer');
	}
	public function koordinatorupdate(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/koordinatorupdate_v');
		$this->load->view('admin/footer');
	}
	public function koordinatorsetting(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/koordinatorsetting');
		$this->load->view('admin/footer');
	}
	public function printKPTA(){
		$this->load->view('admin/printKPTA');
	}
}

