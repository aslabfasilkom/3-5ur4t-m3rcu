
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tester extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('Recaptcha');
  }

  public function phpinfo()
  {
  	echo phpinfo();
  }

  public function captcha()
  {
     $data = array(
          'action' => site_url('tester/logintest'),
          'username' => set_value('username'),
          'password' => set_value('password'),
          'captcha' => $this->recaptcha->getWidget(), // menampilkan recaptcha
          'script_captcha' => $this->recaptcha->getScriptTag(), // javascript recaptcha ditaruh di head
      );

      $this->load->view('tester/welcome_message', $data);
  }

  public function logintest()
  {
     // validasi form
      $this->form_validation->set_rules('username', ' ', 'trim|required');
      $this->form_validation->set_rules('password', ' ', 'trim|required');
      
      $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

      $recaptcha = $this->input->post('g-recaptcha-response');
      $response = $this->recaptcha->verifyResponse($recaptcha);

      if ($this->form_validation->run() == FALSE || !isset($response['success']) || $response['success'] <> true) {
          echo "gagal";
      } else {
          // lakukan proses validasi login disini
          // pada contoh ini saya anggap login berhasil dan saya hanya menampilkan pesan berhasil
          // tapi ini jangan di contoh ya menulis echo di controller hahahaha
          echo 'Berhasil';
      }
  }

  public function chart()
  {
    $startdate = date('Y-m-d',strtotime($this->input->post('startdate')));
    $enddate = date('Y-m-d',strtotime($this->input->post('enddate')));
    // Jumlah Surat Kerja Praktek
    $data['kpwaiting'] = $this->report_model->ReportJumlahSuratKpWaiting($startdate,$enddate);
    $data['kpproses']  = $this->report_model->ReportJumlahSuratKpProses($startdate,$enddate);
    $data['kpfinish']  = $this->report_model->ReportJumlahSuratKpFinish($startdate,$enddate);
    $data['kptake']    = $this->report_model->ReportJumlahSuratKpTake($startdate,$enddate); 
    $data['kptolak']   = $this->report_model->ReportJumlahSuratKpTolak($startdate,$enddate);

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

    // Data nama mahasiswa
    $data['suratwaiting'] = $this->report_model->SuratWaiting($startdate,$enddate);
    $data['suratproses'] = $this->report_model->SuratProses($startdate,$enddate);
    $data['suratfinish'] = $this->report_model->SuratFinish($startdate,$enddate);
    $data['surattake'] = $this->report_model->SuratTake($startdate,$enddate);
    $data['suratolak'] = $this->report_model->SuratTolak($startdate,$enddate);

    $this->load->view('tester/headerChart');
    $this->load->view('tester/chartjs_v',$data);
    $this->load->view('tester/footerChart',$data);
  }

    


}

/* End of file Tester.php */
/* Location: ./application/controllers/Tester.php */