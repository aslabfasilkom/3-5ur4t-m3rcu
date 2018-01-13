<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{
	function cekloginuser($table,$username,$password)
	{
		
	    $query=$this->db->query("SELECT * FROM user WHERE nim='$username' AND
		 					     password='$password' OR email='$username' AND password='$password'  
		 					    ");
		return $query->num_rows();
    }

	function cekloginadmin($table,$whereadmin)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($whereadmin);
		$query=$this->db->get();
		return $query->num_rows();
	}

	function datauser($table,$username,$password)
	{
		$query=$this->db->query("SELECT * FROM user WHERE nim='$username' AND
		 					     password='$password' OR email='$username' AND password='$password'  
		 					    ");
		return $query->row_array();
	}
}