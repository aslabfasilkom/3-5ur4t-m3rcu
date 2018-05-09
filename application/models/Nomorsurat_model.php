<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nomorsurat_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function NomorSuratKP($jurusan)
	{
		$bulan     = array ('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
        $tahun 	   = date('Y');

        if ($jurusan == 'Teknik Informatika') {
              $kodeprodi = "16-2-1";
        }elseif($jurusan == 'Sistem Informasi'){
              $kodeprodi = "16-2-2";
        }   

        
		$this->db->select("SUBSTRING(no_surat,8,3) AS nomorsuratkp ");
        $this->db->where('jenis_surat','Kerja Praktek');
		$this->db->where('prodi',$jurusan);
		$this->db->where('tahun',$tahun);
		$this->db->where('no_surat !=','');
        $this->db->order_by('id_surat', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('surat');

        if($query->num_rows()>0){
            $data = $query->row();
            $kode = intval($data->nomorsuratkp)+1;
        }else{
            $kode = 1;
		}
        $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
        $kodejadi  = $kodeprodi."/".$kodemax."/FSD/".$bulan[date('n')]."/".$tahun;
        return $kodejadi;
	}


   public function NomorSurattaTi($jurusan)
    {
        $bulan     = array ('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
        $tahun     = date('Y');

        $kodeprodi = "16-2-1";
           
        $this->db->select("SUBSTRING(no_surat,8,3) AS nomorsurattati ");
        $this->db->where('jenis_surat','Tugas Akhir');
        $this->db->where('prodi',$jurusan);
        $this->db->where('tahun',$tahun);
        $this->db->where('no_surat !=','');
        $this->db->order_by('id_surat', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('surat');

        if($query->num_rows()>0){
            $data = $query->row();
            $kode = intval($data->nomorsurattati)+1;
        }else{
            $kode = 1;
        }
        $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
        $kodejadi  = $kodeprodi."/".$kodemax."/FSD/".$bulan[date('n')]."/".$tahun;
        return $kodejadi;
    }

    public function NomorSurattaSi($jurusan)
    {
        $bulan     = array ('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
        $tahun     = date('Y');

        $kodeprodi = "16-2";
           
        $this->db->select("SUBSTRING(no_surat,6,3) AS nomorsurattasi ");
        $this->db->where('jenis_surat','Tugas Akhir');
        $this->db->where('prodi',$jurusan);
        $this->db->where('tahun',$tahun);
        $this->db->where('no_surat !=','');
        $this->db->order_by('id_surat', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('surat');

        if($query->num_rows()>0){
            $data = $query->row();
            $kode = intval($data->nomorsurattasi)+1;
        }else{
            $kode = 1;
        }
        $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
        $kodejadi  = $kodeprodi."/".$kodemax."/FSD/".$bulan[date('n')]."/".$tahun;
        return $kodejadi;
    }

	public function IDSurat()
	{
		$this->db->select("RIGHT(id_surat,4) AS kode ");
        $this->db->order_by('id_surat', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('surat');
        if($query->num_rows()>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }else{
            $kode = 1;

        }
        $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
        $kodejadi  = "SR".$kodemax;
        return $kodejadi;
	}

    public function CheckNoSrtExist($nosurat)
    {
        $this->db->select('*');
        $this->db->where('no_surat');
        $query = $this->db->get('surat');
        return $query->num_rows();
    }

    public function IDPerusahaan()
    {
        $this->db->select("RIGHT(id_perusahaan,4) AS kode ");
        $this->db->order_by('id_perusahaan', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('perusahaan');
        if($query->num_rows()>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }else{
            $kode = 1;

        }
        $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
        $kodejadi  = "PT".$kodemax;
        return $kodejadi;
    }


}

/* End of file Nomorsurat_model.php */
/* Location: ./application/models/Nomorsurat_model.php */
