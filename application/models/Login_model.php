<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function cek_pegawai($nohp,$password){
		$this->db->where('nohp',$nohp);
		$this->db->where('password',$password);
		return $this->db->get('pegawai')->row_array();
	}

}