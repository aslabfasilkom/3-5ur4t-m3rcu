
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tester extends CI_Controller {

	public function index()
	{
		$kodesurat = $this->nomorsurat_model->NomorSuratKP();
		echo $kodesurat;		
	}

}

/* End of file Tester.php */
/* Location: ./application/controllers/Tester.php */