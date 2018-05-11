<?php 
   class Dosen_Model extends CI_Model {
	
      public function GetDataDosen(){
        $data =$this->db->query("SELECT * FROM dosen");
        return $data->result_array();
      }
      
      public function GetWhereDosen($where=""){
        $res=$this->db->query("SELECT * FROM dosen ".$where);
        return $res->result_array();
      }

      public function UpdateDataDosen($tableName,$data_update,$where){
        $res=$this->db->update($tableName,$data_update,$where);
        return $res;
      }

      public function GetTandaTangan($prodi,$jabatan)
      {
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->where('prodi',$prodi);
        $this->db->where('jabatan',$jabatan);
        $query = $this->db->get();

        return $query->row();
      }
}
