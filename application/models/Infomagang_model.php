<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infomagang_model extends CI_Model {

	public function tampil_info()
	{
		$hasil=$this->db->query("SELECT * FROM perusahaan");
		return $hasil; 
	}

	public function hapus_info($id_perusahaan)
	{
		$this->db->where('id_perusahaan', $id_perusahaan);
		$this->db->delete('perusahaan');	
	}

	public function edit_info($id_perusahaan,$data,$table)
	{

		$this->db->where('id_perusahaan', $id_perusahaan);
		return $this->db->update($table,$data);
	}
}