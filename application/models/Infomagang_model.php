<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infomagang_model extends CI_Model {

	public function tampil_info()
	{
		$hasil=$this->db->query("SELECT * FROM perusahaan");
		return $hasil; 
	}

	public function tampilKPinfo()
	{
		$hasil=$this->db->query("SELECT * FROM perusahaan WHERE jenis = 'Kerja Praktek' ");
		return $hasil; 
	}

	public function tampilTAinfo()
	{
		$hasil=$this->db->query("SELECT * FROM perusahaan WHERE jenis = 'Tugas Akhir' ");
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


	public function alamatmagang($kodepos){
        $res=$this->db->query("SELECT * FROM perusahaan p INNER JOIN tbl_kodepos k ON p.kodepos = k.kodepos INNER JOIN tbl_propinsi t ON k.id_propinsi = t.id WHERE p.kodepos ='$kodepos'");
        return $res->result_array();
      }

	public function cekjenis($jenis)
	{
	    $query=$this->db->query("SELECT * FROM perusahaan WHERE jenis='$jenis'");
		return $query->num_rows();
    }
}