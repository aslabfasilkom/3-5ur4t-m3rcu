	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		date_default_timezone_set("Asia/Jakarta");
		parent::__construct();
		if (!$this->session->has_userdata('status')) {
			redirect('login');
		}else if(($this->session->userdata('role') =='admin') || ($this->session->userdata('role') =='superadmin') ){
			redirect('admin');
		}
	}
	
	public function index()
	{
		$this->load->library('webservice');
		$data['checkmatkulkp'] 	= $this->webservice->CheckMatkulKp($this->session->userdata('nim'),$this->session->userdata('nama_mahasiswa'));


		$data['checkmatkulta']	= $this->webservice->CheckMatkulTA($this->session->userdata('nim'),$this->session->userdata('nama_mahasiswa'));

		$data['checktranskripkp'] = $this->webservice->CheckTranskripKp($this->session->userdata('nim')); 


		$data['checktranskripta'] = $this->webservice->CheckTranskripTA($this->session->userdata('nim'));

		// echo $data['checkmatkulkp'];
		// echo $data['checktranskripkp'];

		// echo 'Haekal Armandono'."<br>";
		// echo $this->session->userdata('nim');
		// echo $this->session->userdata('nama_mahasiswa');

		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/pilihan',$data);
		$this->load->view('home/footer');
	}

	public function formkp()
	{
		$data['provinsi']=$this->daerah_model->provinsi();
		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/formkp',$data);
		$this->load->view('home/footer');
	}


	public function select_daerah()
	{

		$modul=$this->input->post('modul');
		$id=$this->input->post('id');

		$this->security->get_csrf_token_name();
		$this->security->get_csrf_hash();

		if($modul=="kabupaten"){
			echo $this->daerah_model->kabupaten($id);
		}
		else if($modul=="kecamatan"){
			echo $this->daerah_model->kecamatan($id);

		}
		else if($modul=="kelurahan"){
			echo $this->daerah_model->kelurahan($id);
		}else if($modul=="kodepos"){
			echo $this->daerah_model->kodepos($id);
		}
	}

	
	public function daftarsuratkp()
	{
	  $this->load->library('webservice');	

	  $row 	   = $this->input->post('anggota');
	  $jumlahmahasiswa  = 0;
	  $nimnamavalid 	= 0;
	  $nimbolehjoinkp	= 0;

	 for ($y=1; $y <=$row ; $y++) { 
		$fnim 		  = $this->input->post("fnim$y");
  		$nim  		  = $this->input->post("nim$y");
  		$nimmahasiswa = $fnim.$nim;

  		$hasil = $this->daftarsurat_model->validasimahasiswa($nimmahasiswa);	
  		$jumlahmahasiswa = $hasil+$jumlahmahasiswa;
	 }

	 for ($x=1; $x<=$row ; $x++) { 
	 	 $fnim 		  = $this->input->post("fnim$x");
	  	 $nim  		  = $this->input->post("nim$x");
	  	 $nimmahasiswa = $fnim.$nim;
	  	 $namamahasiswa = $this->input->post("nama$x"); 	

	  	 $hasilnimnamavalid = $this->webservice->CheckMatkulKp($nimmahasiswa,$namamahasiswa);
	  	 $nimnamavalid = $hasilnimnamavalid+$nimnamavalid;
	 }

	 for ($z=1; $z<=$row ; $z++) { 
	 	 $fnim 		  = $this->input->post("fnim$z");
	  	 $nim  		  = $this->input->post("nim$z");
	  	 $nimmahasiswa = $fnim.$nim;
	  	 $namamahasiswa = $this->input->post("nama$z"); 	

	  	 $hasilnimbolehjoinkp = $this->webservice->CheckTranskripKp($nimmahasiswa);
	  	 $nimbolehjoinkp = $hasilnimbolehjoinkp+$nimbolehjoinkp;
	 }    

	
	  if ($jumlahmahasiswa > 0 ) {
	  	 	$this->session->set_flashdata('gagal', 'true');
		  	redirect('mahasiswa/formkp');
	  }elseif($nimnamavalid != $row){
	  		$this->session->set_flashdata('tidakvalid', 'true');
	  		redirect('mahasiswa/formkp');
	  }elseif($nimbolehjoinkp != 0){
	  		$this->session->set_flashdata('tidakbisajoin', 'true');
	  		redirect('mahasiswa/formkp');
	  }else{
	  			$prodi 			= $this->session->userdata('jurusan');
	  			$jenis 			= $this->uri->segment(2);
	  			$jenis_surat	="";
	  			$namekota		= $this->input->post('kota_kabupaten');
	  			$alamat_lengkap = $this->input->post('alamat').", ".$this->input->post('kelurahan').", ".$this->input->post('kecamatan');
				if ($jenis =='daftarsuratkp') {
	  				$jenissurat = "Kerja Praktek";
	  			}else{
	  				$jenissurat ="Tugas Akhir";
	  			}
	  			
	  			$data = array (
					'id_surat'			 => $this->nomorsurat_model->IDSurat(),
					'no_surat'  		 => '',
					'nama_perusahaan' 	 => $this->input->post('namaperusahaan'),
					'alamat_perusahaan'  => ucwords(strtolower($alamat_lengkap)),
					'orang_dituju'   	 => ucwords(strtolower($this->input->post('namefor'))),
					'jabatan_dituju'	 => ucwords($this->input->post('jabatan')),
					'kota'				 => ucwords(strtolower($namekota)),
					'kodepos'			 => $this->input->post('kodepos'),
					'jenis_surat'    	 => 'Kerja Praktek',
					'tanggal_diajukan'   => date('Y-m-d'),
					'tanggal_selesai'    => '0000-00-00',
					'tanggal_diambil'    => '0000-00-00',
					'status'         	 => 'Menunggu',
					'tahun'				 => date('Y'),	
					'prodi'				 => $prodi,
					'nim' 				 => $this->session->userdata('nim'),
					'nik'				 => $this->dosen_model->GetTandaTangan($this->session->userdata('jurusan'),$jenissurat)->nik
			   );

		  	  $this->daftarsurat_model->daftarsuratkp($data,'surat');
			  $idsurat = $this->daftarsurat_model->GetIdSuratToMahasiswa($this->session->userdata('nim'))->id_surat;
		  	  
		  	  for ($i=1; $i <=$row ; $i++) { 
			  		$fnim 		  = $this->input->post("fnim$i");
			  		$nim  		  = $this->input->post("nim$i");
			  		$nimmahasiswa = $fnim.$nim;
			  		$nama 		  = $this->input->post("nama$i");
			  		$nohp 		  = $this->input->post("nohp$i");

			  		$data = array(
			  			'id_surat'			=> $idsurat,
			  			'nim'	  			=> $nimmahasiswa,
			  			'nama_mahasiswa'	=> ucwords(strtolower($nama)),
			  			'nohp'				=> $nohp,
			  		);
					
					$this->daftarsurat_model->InsertMahasiswa($data);
				}

				$this->session->set_flashdata('berhasil', 'true');
				redirect('mahasiswa/lihat');
		}


	}
	
	
	public function lihat()
	{
		$nim = $this->session->userdata('nim');

		$data['statuskp'] = $this->statussurat_model->StatusKpSuratMahasiswa($nim);
		$data['statusta'] = $this->statussurat_model->StatusTASuratMahasiswa($nim);

		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/status',$data);
	    $this->load->view('home/footer');
	}

	public function formta()
	{
		$data['provinsi']=$this->daerah_model->provinsi();
		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/formta',$data);
		$this->load->view('home/footer');
	}

	public function daftarsuratta()
	{
	 $row 	   = $this->input->post('anggota');
	
	 
	 $jumlahmahasiswa = 0;

	 for ($y=1; $y <=$row ; $y++) { 
		$fnim 		  = $this->input->post("fnim$y");
  		$nim  		  = $this->input->post("nim$y");
  		$nimmahasiswa = $fnim.$nim;

  		$hasil = $this->daftarsurat_model->validasimahasiswa($nimmahasiswa);	
  		$jumlahmahasiswa = $hasil+$jumlahmahasiswa;
	 }


	  if ($jumlahmahasiswa > 0 ) {
		  	$this->session->set_flashdata('gagal', 'true');
		  	redirect('mahasiswa/formta');
	  }else{
		  		$prodi 			= $this->session->userdata('jurusan');
	  			$jenis 			= $this->uri->segment(2);
	  			$jenis_surat	="";
	  			$namekota		= $this->input->post('kota_kabupaten');
	  			$alamat_lengkap = $this->input->post('alamat').", ".$this->input->post('kelurahan').", ".$this->input->post('kecamatan');
				if ($jenis =='daftarsuratTA') {
	  				$jenissurat = "Tugas Akhir";
	  			}else{
	  				$jenissurat ="Kerja Praktek";
	  			}
	  			
	  			$data = array (
					'id_surat'			 => $this->nomorsurat_model->IDSurat(),
					'no_surat'  		 => '',
					'nama_perusahaan' 	 => $this->input->post('namaperusahaan'),
					'alamat_perusahaan'  => ucwords(strtolower($alamat_lengkap)),
					'orang_dituju'   	 => ucwords(strtolower($this->input->post('namefor'))),
					'jabatan_dituju'	 => ucwords($this->input->post('jabatan')),
					'kota'				 => ucwords(strtolower($namekota)),
					'kodepos'			 => $this->input->post('kodepos'),
					'jenis_surat'    	 => 'Tugas Akhir',
					'tanggal_diajukan'   => date('Y-m-d'),
					'tanggal_selesai'    => '0000-00-00',
					'tanggal_diambil'    => '0000-00-00',
					'status'         	 => 'Menunggu',
					'tahun'				 => date('Y'),	
					'prodi'				 => $prodi,
					'nim' 				 => $this->session->userdata('nim'),
					'nik'				 => $this->dosen_model->GetTandaTangan($this->session->userdata('jurusan'),$jenissurat)->nik
			   );

		  	  $this->daftarsurat_model->daftarsuratTA($data,'surat');
			  $idsurat = $this->daftarsurat_model->GetIdSuratToMahasiswa($this->session->userdata('nim'))->id_surat;
		  	  
		  	  for ($i=1; $i <=$row ; $i++) { 
			  		$fnim 		  = $this->input->post("fnim$i");
			  		$nim  		  = $this->input->post("nim$i");
			  		$nimmahasiswa = $fnim.$nim;
			  		$nama 		  = $this->input->post("nama$i");
			  		$nohp 		  = $this->input->post("nohp$i");

			  		$data = array(
			  			'id_surat'			=> $idsurat,
			  			'nim'	  			=> $nimmahasiswa,
			  			'nama_mahasiswa'	=> ucwords(strtolower($nama)),
			  			'nohp'				=> $nohp,
			  		);
					
					$this->daftarsurat_model->InsertMahasiswa($data);
				}

				$this->session->set_flashdata('berhasil', 'true');
				redirect('mahasiswa/lihat');
		}


	}

}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */