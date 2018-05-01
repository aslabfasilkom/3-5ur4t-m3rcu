<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Daftar_model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
		}

		public function registerMahasiswa(){
			// INSERT DATA / REGISTER
			$nim 			= $this->input->post('kodenim').$this->input->post('nimmhs');
			$nama_mahasiswa = $this->input->post('nama');
			$email			= $this->input->post('email');
			$password		= md5($this->input->post('password'));
			$prodi			= $this->input->post('prodi');

			if($prodi == 418){
				$prodi = "Sistem Informasi";
			}else{
				$prodi = "Teknik Informatika";
			}

			$data = array(
				"nim" 			 => $nim,
				"nama_mahasiswa" => ucwords(strtolower($nama_mahasiswa)),
				"email" 		 => $email,
				"password" 		 => $password,
				"prodi" 	     => $prodi
			);
				return $this->db->insert('user',$data);
		}

		public function ceknimmahasiswa($nimlengkap)
		{
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('nim',$nimlengkap);
			$query = $this->db->get();
			return $query->num_rows();
		}

		public function registerAdmin(){
			// INSERT DATA / REGISTER
			$username 		= $this->input->post('username');
			$password		= md5($this->input->post('password'));
			$nama_lengkap 	= $this->input->post('nama_lengkap');
			$fakultas 		= $this->input->post('fakultas');

			$data = array(
				"username" 		=> $username,
				"role"			=> "admin",
				"password" 		=> $password,
				"nama_lengkap" 	=> ucwords($nama_lengkap),
				"fakultas" 		=> $fakultas
				
			);
				return $this->db->insert('admin',$data);
		}

		public function cekusernameadmin($username)
		{
			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where('username',$username);
			$query = $this->db->get();
			return $query->num_rows();
		}

		public function formperusahaan($data)
		{
			$this->db->insert('perusahaan',$data);
		}

	}
?>

