<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		date_default_timezone_set("Asia/Jakarta");
		parent::__construct();
		if (!$this->session->has_userdata('status')) {
			redirect('login');
		}else if(($this->session->userdata('role') =='admin') ||($this->session->userdata('role') =='superadmin') ){
			redirect('admin');
		}
	}
	

	public function index()
	{
		echo "berhasil login sebagai user ";
	    echo $this->session->userdata('nama_mahasiswa');
	    echo anchor('login?logout=signout', 'keluar');
	}

	public function formkp()
	{
		$data['nomorsuratkp'] = $this->nomorsurat_model->NomorSuratKP();

		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/formkp',$data);
		$this->load->view('home/footer');
	}

}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */