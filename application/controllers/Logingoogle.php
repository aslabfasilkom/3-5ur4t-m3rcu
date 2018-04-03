<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logingoogle extends CI_Controller {

public function __construct()
{
	parent::__construct();
	require_once APPPATH.'third_party/src/Google_Client.php';
	require_once APPPATH.'third_party/src/contrib/Google_Oauth2Service.php';
}
	
	public function index()
	{
		$this->load->view('login');
	}
	
	public function google_login()
	{
		$clientId = '222256274677-4vvftitf9m0ko0e3ldsof4bua58e2b31.apps.googleusercontent.com'; //Google client ID
		$clientSecret = 'CK7dGRhhOsW69z5OIuDjM8rh'; //Google client secret
		$redirectURL = base_url() . 'Logingoogle/google_login/';
		
		//Call Google API
		$gClient = new Google_Client();
		$gClient->setApplicationName('Login');
		$gClient->setClientId($clientId);
		$gClient->setClientSecret($clientSecret);
		$gClient->setRedirectUri($redirectURL);
		$google_oauthV2 = new Google_Oauth2Service($gClient);
		
		if(isset($_GET['code']))
		{
			$gClient->authenticate($_GET['code']);
			$_SESSION['token'] = $gClient->getAccessToken();
			header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
		}

		if (isset($_SESSION['token'])) 
		{
			$gClient->setAccessToken($_SESSION['token']);
		}
		
		if ($gClient->getAccessToken()) {
            $userProfile = $google_oauthV2->userinfo->get();
			

			if (substr($userProfile['email'],12) == 'student.mercubuana.ac.id') {
				if (substr($userProfile['email'],0,3) =='418') {
					$jurusan = 'Sistem Informasi';
				}elseif(substr($userProfile['email'],0,3)=='415'){
					$jurusan = 'Teknik Informatika';
				}

				$data_session = array(
					'nim' => substr($userProfile['email'],0,11),
					'nama_mahasiswa'=> $userProfile['name'],
					'status'=>'login',
					'jurusan'=> $jurusan,
					'email'=>$userProfile['email'],
					'role'=>'mahasiswa'
				);
				$this->session->set_userdata($data_session);
				redirect('mahasiswa');
			}else{
				$this->session->sess_destroy();
			}
		}else{
            $url = $gClient->createAuthUrl();
		    header("Location: $url");
            exit;
        }
	}	
}
