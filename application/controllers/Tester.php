
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tester extends CI_Controller {
// CONTROLLER INI HANYA UNTUK CONTROLLER TESTER SEBELUM DIMASUKAN KE CONTROLLER YANG AKAN DI DEPLOY
  public function __construct()
  {
    parent::__construct();
    $this->load->library('Recaptcha');
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

  public function manipulasinim()
  {
    $nim = '41814010066@student.mercubuana.ac.id';
    echo substr($nim,0,3)."<br>";
    echo substr($nim,0,11)."<br>";
    echo substr($nim,12);
    $this->session->sess_destroy();
  }

  public function testhtml()
  {
    $string = "<h1>halooaa</h1>";
    $string2 = htmlentities($string);
    echo html_entity_decode($string2);
  }





}

/* End of file Tester.php */
/* Location: ./application/controllers/Tester.php */