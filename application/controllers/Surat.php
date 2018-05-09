<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role') =='mahasiswa') {
			redirect('mahasiswa');
		}elseif(!$this->session->has_userdata('role')){
			redirect('login');
		}
	}

	
	public function ubahProsesKP($id_surat)
	{
		$data 			= $this->tampilsurat_model->detailKP($id_surat);

		$SelectSurat 	= $this->tampilsurat_model->SelectSurat($id_surat);
		$nomorsuratkp  	= $this->nomorsurat_model->NomorSuratKP($SelectSurat->prodi);

		$ceknomorsurat 	= $this->nomorsurat_model->CheckNoSrtExist($nomorsuratkp);

		$isi= html_entity_decode(
				"<p>Halo ".$data['nama_mahasiswa']." </p>,

Berdasarkan pengajuan surat Anda, kami TU ".$this->session->userdata('fakultas')." sedang memproses pembuatan dan pengesahan Surat Kerja Praktek yang Anda ajukan kepada Koodinator Kerja Praktek Jurusan ".$SelectSurat['prodi'].". Anda akan mendapatkan pemberitahuan melalui surel dan notifikasi di situs E-Surat kembali saat Surat Kerja Praktek Anda selesai dan di sahkan oleh Koordinator Kerja Praktek
Anda dapat mengecek status permohonan pembuatan Surat Kerja Praktek Anda melalui login di situs E-Surat: www.esurat.mercubuana.ac.id
<br><br>
Terima kasih.
<br><br>
Salam,
<br><br>
".$this->session->userdata('nama_lengkap')." - TU ".$this->session->userdata('fakultas')
			) ;

			$config = Array(  
		        'protocol' => 'smtp',  
		        'smtp_host' => 'https://www.mohagustiar.info/',  
		        'smtp_port' =>  465,  
		        'smtp_user' => 'contactme@mohagustiar.info',   
		        'smtp_pass' => 'project2m123!@#',  
		        'smtp_keepalive'=>'TRUE',
		        'mailtype' => 'html',   
		        'charset' => 'iso-8859-1'  
	        );

	        $this->load->library('email', $config);  
	        $this->email->set_newline("\r\n");  
		    $this->email->from('contactme@mohagustiar.info','Raka Hikmah');
			$this->email->to($data['email']); 
				
			$this->email->subject("[ESURAT - NOREPLY] Pengajuan Surat - ".$data['nim']." - ".$data['nama_mahasiswa']." - Diproses");
			$this->email->message($isi);
			$this->email->set_mailtype("html");
			$this->email->send();
			$ubahStatusToProses	= $this->statussurat_model->SuratKpToProses($id_surat,$nomorsuratkp);

			$this->session->set_flashdata('info','true');
			redirect('admin/waitingkp');	

	}

	public function ubahFinishKP($id_surat)
	{
		$this->statussurat_model->SuratKpToFinish($id_surat);
		$kirimemail = $this->tampilsurat_model->GetIdentitasMahasiswa($id_surat);

		$namafile 		= $kirimemail->id_surat;
		$emailmahasiswa	= $kirimemail->email;
		$isi       = html_entity_decode("
				<p>halo ".$kirimemail->nama_mahasiswa.",</p>

Berdasarkan pengajuan surat Anda, kami TU ".$this->session->userdata('fakultas')." ingin menginformasikan bahwa Surat Kerja Praktek yang Anda ajukan telah selesai. Anda dapat mengambil Surat Kerja Praktek yang Anda ajukan dengan datang ke TU ".$this->session->userdata('fakultas')." di jam operasional kami yaitu:
Senin – Sabtu dari jam 08:00 WIB hingga 16:00 WIB
Adapun yang dapat mengambil Surat Kerja Praktek yaitu Nama Mahasiswa yang mengajukan permohonan Surat Kerja Praktek dengan membawa Tanda Terima yang Anda bisa unduh di dalam lampiran surel ini.
Anda dapat mengecek status permohonan pembuatan Surat Kerja Praktek Anda melalui login di situs E-Surat: <a href='http://www.esurat.mercubuana.ac.id'>www.esurat.mercubuana.ac.id</a>
Terima kasih.
<br><br>
Salam,
<br><br>
".$this->session->userdata('nama_lengkap')." - TU ".$this->session->userdata('fakultas')
		);
		//Load the library
	    $this->load->library('html2pdf');
	    
	    $this->html2pdf->folder('./assets/pdfs/');
	    $this->html2pdf->filename($namafile.'.pdf');
	    $this->html2pdf->paper('a4', 'portrait');
	    
	    $data = array(
	    	'nama_mahasiswa' => $kirimemail->nama_mahasiswa,
	    	'jenis_surat' => $kirimemail->jenis_surat,
	    	'nim'		  => $kirimemail->nim,
	    	'tanggal_diajukan' =>$kirimemail->tanggal_diajukan,
	    	'no_surat'   => $kirimemail->no_surat
	    );
	    //Load html view
	    $this->html2pdf->html($this->load->view('tiket/pdf2', $data, true));
	    $subjek = "[ESURAT - NOREPLY] Pengajuan Surat - ".$kirimemail->nim." - ".$kirimemail->nama_mahasiswa." - Telah Selesai";
	    //Check that the PDF was created before we send it
	    if($path = $this->html2pdf->create('save')) {
	    	
	    	$config = Array(  
            'protocol' => 'smtp',  
            'smtp_host' => 'https://www.mohagustiar.info/',  
            'smtp_port' =>  465,  
            'smtp_user' => 'contactme@mohagustiar.info',   
            'smtp_pass' => 'project2m123!@#',  
            'smtp_keepalive'=>'TRUE',
            'mailtype' => 'html',   
            'charset' => 'iso-8859-1'  
          );  
	        $this->load->library('email', $config);  
	        $this->email->set_newline("\r\n");  
		    $this->email->from('contactme@mohagustiar.info','Raka Hikmah');
			$this->email->to($emailmahasiswa); 
				
			$this->email->subject($subjek);
			$this->email->message($isi);	
			$this->email->set_mailtype("html");
			$this->email->attach($path);
			$this->email->send();
			
			$this->session->set_flashdata('info','true');
			redirect('admin/proseskp');
		}
		
	}


	public function kirimpesantolakkp()
	{
		$idsurat = $this->input->post('id_surat');
		$data = $this->tampilsurat_model->detailKP($idsurat);

		$pesan = htmlentities($this->input->post('isipesantolak'));
		

		$isi= html_entity_decode(
			"<p>Halo ".$data['nama_mahasiswa'].",</p>

          Berdasarkan pengajuan surat Anda, kami TU ".$this->session->userdata('fakultas')." tidak dapat memproses Surat Kerja Praktek yang Anda ajukan karena terdapat kesalahan dalam proses pengisian data yaitu <B><font color='red'>". $pesan ."</font></B> pada saat Anda mengisi formulir pengajuan surat. Pastikan Anda mengisi data yang sesuai dengan kaidah penulisan alamat yang benar serta menuliskan nama jabatan yang sesuai dengan jabatan orang yang Anda tuju.
          Anda dapat mengajukan permohonan pembuatan Surat Kerja Praktek kembali melalui situs E-Surat: www.esurat.mercubuana.ac.id
          <br><br>
          Terima kasih.
          <br><br>
          Salam,
          <br><br>
          ".$this->session->userdata('nama_lengkap')." - TU ".$this->session->userdata('fakultas')

      ) ;
		
		$config = Array(  
	        'protocol' => 'smtp',  
	        'smtp_host' => 'https://www.mohagustiar.info/',  
	        'smtp_port' =>  465,  
	        'smtp_user' => 'contactme@mohagustiar.info',   
	        'smtp_pass' => 'project2m123!@#',  
	        'smtp_keepalive'=>'TRUE',
	        'mailtype' => 'html',   
	        'charset' => 'iso-8859-1'  
        );

        $this->load->library('email', $config);  
        $this->email->set_newline("\r\n");  
	    $this->email->from('contactme@mohagustiar.info','Raka Hikmah');
		$this->email->to($data['email']); 
			
		$this->email->subject($this->input->post('subject'));
		$this->email->message($isi);
		$this->email->set_mailtype("html");
		$this->email->send();

		$this->statussurat_model->SuratKpToTolak($data['id_surat']);

		$this->session->set_flashdata('infotolak','true');
	    redirect('admin/waitingkp');
	}

	public function ubahAmbilKP($id_surat)
	{
		$this->statussurat_model->SuratKpToTake($id_surat);

		$this->session->set_flashdata('info','true');
	    redirect('admin/finishkp');
	}


	public function ubahProsesta($id_surat)
	{
		$data = $this->tampilsurat_model->detailta($id_surat);
		

		$SelectSurat 		= $this->tampilsurat_model->SelectSurat($id_surat);
		
		if ($SelectSurat->prodi == "Sistem Informasi") {
			$nomorsuratta       = $this->nomorsurat_model->NomorSurattaSi($SelectSurat->prodi);
		}elseif($SelectSurat->prodi == "Teknik Informatika"){
			$nomorsuratta       = $this->nomorsurat_model->NomorSurattaTi($SelectSurat->prodi);
		}

		$isi= html_entity_decode(
				"<p>Halo ".$data['nama_mahasiswa']." </p>,

					Berdasarkan pengajuan surat Anda, kami TU FASILKOM sedang memproses pembuatan dan pengesahan Surat Penelitian Tugas Akhir yang Anda ajukan kepada Koodinator Penelitian Tugas Akhir Jurusan ".$SelectSurat->prodi.". Anda akan mendapatkan pemberitahuan melalui surel dan notifikasi di situs E-Surat kembali saat Surat Penelitian Tugas Akhir Anda selesai dan di sahkan oleh Koordinator Penelitian Tugas Akhir
					Anda dapat mengecek status permohonan pembuatan Surat Penelitian Tugas Akhir Anda melalui login di situs E-Surat: www.esurat.mercubuana.ac.id
					<br><br>
					Terima kasih.
					<br><br>
					Salam,
					<br><br>
					TU FASILKOM"
			) ;

			$config = Array(  
		        'protocol' => 'smtp',  
		        'smtp_host' => 'https://www.mohagustiar.info/',  
		        'smtp_port' =>  465,  
		        'smtp_user' => 'contactme@mohagustiar.info',   
		        'smtp_pass' => 'project2m123!@#',  
		        'smtp_keepalive'=>'TRUE',
		        'mailtype' => 'html',   
		        'charset' => 'iso-8859-1'  
	        );

	        $this->load->library('email', $config);  
	        $this->email->set_newline("\r\n");  
		    $this->email->from('contactme@mohagustiar.info','Raka Hikmah');
			$this->email->to($data['email']); 
				
			$this->email->subject("[E-SURAT] Pengajuan Surat - ".$data['nim']." - ".$data['nama_mahasiswa']." - Diproses");
			$this->email->message($isi);
			$this->email->set_mailtype("html");
			$this->email->send();
			$ubahStatusToProses	= $this->statussurat_model->SuratTAToProses($id_surat,$nomorsuratta);

			$this->session->set_flashdata('info','true');
			redirect('admin/waitingta');	

	}

}

/* End of file Surat.php */
/* Location: ./application/controllers/Surat.php */
