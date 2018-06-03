<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tescarimodel extends CI_Model {
	
	//function tampil_data(){
		//return $this->db->get('tb_pembinaan');
		//return $this->db->query("SELECT * FROM tb_pembinaan WHERE jenis_program = 'xxxx'");
	//}

	public function data(){
		return $this->db->get('tb_pembinaan')->result();
	}

	public function cari($keyword){
		$this->db->like('nama_program', $keyword)->or_like('jenis_program', $keyword); //mencari data yang serupa dengan keyword
  		return $this->db->get('tb_pembinaan')->result();
	}

}

