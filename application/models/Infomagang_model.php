<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infomagang_model extends CI_Model {

	public function tampil_info()
	{
		$hasil=$this->db->query("SELECT * FROM perusahaan");
		return $hasil; 
	}
}