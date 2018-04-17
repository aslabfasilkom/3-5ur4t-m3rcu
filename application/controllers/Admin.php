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

   public function index()
	{
		// Jumlah Surat Kerja Praktek
		$data['kpwaiting'] = $this->statussurat_model->JumlahSuratKpWaiting();
		$data['kpproses'] = $this->statussurat_model->JumlahSuratKpProses();
		$data['kpfinish']  = $this->statussurat_model->JumlahSuratKpFinish();
		$data['kptake']	   = $this->statussurat_model->JumlahSuratKpTake(); 
		$data['kptolak'] = $this->statussurat_model->JumlahSuratKpTolak();

		// Jumlah Surat Tugas Akhir
		$data['tawaiting'] = $this->statussurat_model->JumlahSuratTAWaiting();
		$data['taproses'] = $this->statussurat_model->JumlahSuratTAProses();
		$data['tafinish']  = $this->statussurat_model->JumlahSuratTAFinish();
		$data['tatake']	   = $this->statussurat_model->JumlahSuratTATake();
		$data['tatolak'] =$this->statussurat_model->JumlahSuratTATolak();	

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/dashboardadmin_v',$data);
		$this->load->view('admin/footer');
	}
  
	public function waitingkp()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$data['surat'] = $this->tampilsurat_model->tampil_datakp_waiting();
		$this->load->view('admin/waitingkp',$data);
		$this->load->view('admin/footer');
	}

	public function tolakemailta(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/tolakemailta_v');
		$this->load->view('admin/footer');
	}
	
    public function tolakemailkp($id_surat){
    	$data['detailkp'] = $this->tampilsurat_model->get_email_user_kp($id_surat);

    	$this->load->view('admin/header');
    	$this->load->view('admin/sidebar');
    	$this->load->view('admin/tolakemailkp_v',$data);
    	$this->load->view('admin/footer');
    }

	public function waitingta()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$data['surat'] = $this->tampilsurat_model->tampil_datata_waiting();		
		$this->load->view('admin/waitingta',$data);
		$this->load->view('admin/footer');
	}

	public function proseskp()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$data['surat'] = $this->tampilsurat_model->tampil_datakp_proses();
		$this->load->view('admin/proseskp',$data);
		$this->load->view('admin/footer');
	}

	public function prosesta()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/prosesta');
		$this->load->view('admin/footer');
	}

	public function finishkp()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$data['surat'] = $this->tampilsurat_model->tampil_datakp_finish();
		$this->load->view('admin/finishkp',$data);
		$this->load->view('admin/footer');
	}

	public function finishta()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$data['surat'] = $this->tampilsurat_model->tampil_datata_finish();
		$this->load->view('admin/finishta',$data);
		$this->load->view('admin/footer');
	}

	public function detailkp($idsurat)
	{

		$data['surat'] 		= $this->tampilsurat_model->detailKP($idsurat);
		$data['mahasiswa']	= $this->tampilsurat_model->PrintMahasiswaKP($idsurat);


		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/detailkp',$data);
		$this->load->view('admin/footer');
	}

	public function taketa()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/taketa');
		$this->load->view('admin/footer');
	}

	public function takekp()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$data['surat'] = $this->tampilsurat_model->tampil_datakp_ambil();
		$this->load->view('admin/takeKP',$data);
		$this->load->view('admin/footer');
	}

	public function tolakkp()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$data['surat'] = $this->tampilsurat_model->tampil_datakp_tolak();
		$this->load->view('admin/tolakkp',$data);
		$this->load->view('admin/footer');
	}
	public function tolakta()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/tolakta');
		$this->load->view('admin/footer');
	}

	public function koordinatorupdate($nik){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
    	$dosen = $this->dosen_model->GetWhereDosen("where nik ='$nik'");
    	$data = array(
    		"nik" =>$dosen[0]['nik'],
    		"nama_dosen" =>$dosen[0]['nama_dosen'],
    		"prodi" =>$dosen[0]['prodi'],
    		"jabatan" =>$dosen[0]['jabatan']
    	);
    	$this->load->view('admin/koordinatorupdate_v',$data);
		$this->load->view('admin/footer');
	}


	public function update_data_dosen(){

		$nik=$_POST['nik'];
		$nama_dosen=$_POST['nama_dosen'];
		$prodi=$_POST['prodi'];
		$jabatan=$_POST['jabatan'];
		$nikwhere = $_POST['nikwhere'];

		$data_update=array(
			'nik'=>$nik,
			'nama_dosen'=>$nama_dosen,
			'prodi'=>$prodi,
			'jabatan'=>$jabatan
		);
		$where=array('nik'=>$nikwhere);
		$result=$this->dosen_model->UpdateDataDosen('dosen',$data_update,$where);

		if($result>=1){
			$this->session->set_flashdata('berhasil','true');
			redirect('admin/koordinatorsetting');
		}else{
			$this->session->set_flashdata('gagal','true');
			redirect('admin/koordinatorsetting');
		}

	}

	public function koordinatorsetting(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$data=$this->dosen_model->GetDataDosen();
		$this->load->view('admin/koordinatorsetting',array('data'=>$data));
		$this->load->view('admin/footer');
	}

	public function printKP($idsurat){
		$data['surat'] 		= $this->tampilsurat_model->printKP($idsurat);
		$data['mahasiswa']	= $this->tampilsurat_model->PrintMahasiswaKP($idsurat);

		$this->load->view('admin/printKP',$data);
	}

	public function cetakLAP(){
		$startdate = $this->input->post('startdate');
		$enddate = $this->input->post('enddate');
		$jurusan = $this->input->post('jurusan');

		if ($startdate <= $enddate) {
			$data= $this->report_model->printLAPORAN($startdate,$enddate,$jurusan);
			$this->load->view('admin/cetaklaporan',array('data'=>$data));
		}else{
			$this->session->set_flashdata('gagal_tanggal','true');
			redirect('admin/takeTA');
		}
	}

	public function HapusSuratKP()
	{
		$startdate = date('Y-m-d',strtotime($this->input->post('startdate')));
		$finishdate = date('Y-m-d',strtotime($this->input->post('finishdate')));

		if ($startdate <= $finishdate) {
			$this->statussurat_model->HapusDataKP($startdate,$finishdate);
			$this->session->set_flashdata('berhasil_hapus','true');
			redirect('admin/report');
		}else{
			$this->session->set_flashdata('gagal_tanggal','true');
			redirect('admin/report');
		}
	}


	public function cetakLAPkp()
	{
		$startdate = date('Y-m-d',strtotime($this->input->post('startdate')));
		$finishdate = date('Y-m-d',strtotime($this->input->post('finishdate')));
		$jurusan = $this->input->post('jurusan');
		
		if ($startdate <= $finishdate) {
			$data['data']= $this->report_model->printLAPORANkp($startdate,$finishdate,$jurusan);
			$data['jurusan'] = $jurusan;
			$data['dari'] = $startdate;
			$data['sampai'] = $finishdate;

			$this->load->view('admin/cetaklaporankp',$data);	
		}else{
			$this->session->set_flashdata('gagal_tanggal','true');
			redirect('admin/report');
			
		}
		
	}

	public function teknikinfo()
	{
		$data['mhsti']    = $this->user_model->MahasiswaTeknikInformatika();
		$data['jmlmhsti'] = $this->user_model->JumlahMahasiswaTeknikInformatika();

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/teknikinfo',$data);
		$this->load->view('admin/footer');
	}

	public function sisteminfo()
	{
		$data['mhssi']    = $this->user_model->MahasiswaSistemInformasi();
		$data['jmlmhssi'] = $this->user_model->JumlahMahasiswaSistemInformasi();

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/sisteminfo',$data);
		$this->load->view('admin/footer');
	}

	public function tambahakun()
	{
		if ($this->uri->segment(2) == 'tambahakun') {
			if ($this->session->userdata('role')=='superadmin') {
						//form validasi
				$this->form_validation->set_rules('username','Username','trim|required|alpha_numeric');
				$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|alpha_numeric');
				$this->form_validation->set_rules('repassword', 'Re-Password', 'trim|required|matches[password]');

				if ($this->form_validation->run() == FALSE) {
					$this->load->view('admin/header');
					$this->load->view('admin/sidebar');
					$this->load->view('admin/tambahakun');
					$this->load->view('admin/footer');
				} else {
					$username = $this->input->post('username');
					$resultcheckusernameadmin = $this->daftar_model->cekusernameadmin($username);

					if($resultcheckusernameadmin > 0){
						$this->session->set_flashdata('usernamesudahada', 'true');
						redirect('admin/tambahakun');
					}else{
						$this->daftar_model->registerAdmin($data);
						$this->session->set_flashdata('info_berhasil', 'true');
						redirect('admin/tambahakun');
					}
				}
			}else{
				redirect('admin');
			}
		}
	}


	public function formperusahaan(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/formperusahaan');
		$this->load->view('admin/footer');
	}

	public function perusahaan()
	{
	  	$nama_perusahaan = $this->input->post('nama_perusahaan');
	  	$alamat_perusahaan = $this->input->post('alamat_perusahaan');
	  	$bagian = $this->input->post('bagian');
	  	$kota = $this->input->post('kota');
	  	$kodepos = $this->input->post('kodepos');
	  	$orang_yang_dihubungi = $this->input->post('orang_yang_dihubungi');

	  	$data = array(
            'nama_perusahaan'      	=> $nama_perusahaan,
            'alamat_perusahaan'   	=> $alamat_perusahaan,
            'bagian'   				=> $bagian,
            'kota'     				=> $kota,
            'kodepos'   			=> $kodepos,
            'orang_yang_dihubungi'  => $orang_yang_dihubungi
            );

		$this->daftar_model->formperusahaan($data);
		redirect('admin/formperusahaan');


	}



	public function report()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/report');
		$this->load->view('admin/footer');
	}


  public function reportchart()
  {
    $startdate = date('Y-m-d',strtotime($this->input->post('startdate')));
    $enddate = date('Y-m-d',strtotime($this->input->post('enddate')));

   if ($startdate <= $enddate) {
      //tanggal startdate and enddate
      $data['startdate']   = $startdate;
      $data['enddate']  = $enddate; 

      // Jumlah Surat Kerja Praktek
      $data['kpwaiting'] = $this->report_model->ReportJumlahSuratKpWaiting($startdate,$enddate);
      $data['kpproses']  = $this->report_model->ReportJumlahSuratKpProses($startdate,$enddate);
      $data['kpfinish']  = $this->report_model->ReportJumlahSuratKpFinish($startdate,$enddate);
      $data['kptake']    = $this->report_model->ReportJumlahSuratKpTake($startdate,$enddate); 
      $data['kptolak']   = $this->report_model->ReportJumlahSuratKpTolak($startdate,$enddate);

      // Data nama mahasiswa
      $data['suratwaiting'] = $this->report_model->SuratWaiting($startdate,$enddate);
      $data['suratproses']  = $this->report_model->SuratProses($startdate,$enddate);
      $data['suratfinish']  = $this->report_model->SuratFinish($startdate,$enddate);
      $data['surattake']    = $this->report_model->SuratTake($startdate,$enddate);
      $data['surattolak']    = $this->report_model->SuratTolak($startdate,$enddate);

      $this->load->view('admin/headerChart',$data);
      $this->load->view('admin/chartjs_v',$data);
    }else{
      $this->session->set_flasdata('gagal_tanggal','true');
      redirect('admin/takekp');
    }

  }

  public function reportperjurusan()
  {

    $startdate = date('Y-m-d',strtotime($this->input->post('startdate')));
    $enddate   = date('Y-m-d',strtotime($this->input->post('enddate')));

    if ($startdate <= $enddate) {
      //tanggal startdate and enddate
      $data['startdate']   = $startdate;
      $data['enddate']  = $enddate; 

      //Data mahasiswa yang daftar KP keseluruhan
      $data['mahasiswaTI']  = $this->report_model->SuratMahasiswaTI($startdate,$enddate);
      $data['mahasiswaSI']  = $this->report_model->SuratMahasiswaSI($startdate,$enddate);

      // Data Jumlah mahasiswa Sistem Informasi Kerja Praktek
      $data['siwaiting'] = $this->report_model->MahasiswaSIKpWaiting($startdate,$enddate);
      $data['siproses']  = $this->report_model->MahasiswaSIKpProses($startdate,$enddate);
      $data['sifinish']  = $this->report_model->MahasiswaSIKpFinish($startdate,$enddate);
      $data['sitake']    = $this->report_model->MahasiswaSIKpTake($startdate,$enddate);
      $data['sitolak']   = $this->report_model->MahasiswaSIKpTolak($startdate,$enddate);

      // Data Jumlah Mahasiswa Teknik Informatika Kerja Praktek
      $data['tiwaiting']    = $this->report_model->MahasiswaTIKpWaiting($startdate,$enddate);
      $data['tiproses']     = $this->report_model->MahasiswaTIKpProses($startdate,$enddate);
      $data['tifinish']     = $this->report_model->MahasiswaTIKpFinish($startdate,$enddate);
      $data['titake']       = $this->report_model->MahasiswaTIKpTake($startdate,$enddate);
      $data['titolak']      = $this->report_model->MahasiswaTIKpTolak($startdate,$enddate);


      $this->load->view('admin/headerChart',$data);
      $this->load->view('admin/laporanperjurusan_v',$data);
    }else{
      redirect('admin/takekp');
    }

  }


	public function magangti()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/magangti');
		$this->load->view('admin/footer');
	}

	public function magangsi()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/magangsi');
		$this->load->view('admin/footer');
	}

}