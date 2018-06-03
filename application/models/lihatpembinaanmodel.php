<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class lihatpembinaanmodel extends CI_Model {
	
	function tampil_data(){
		return $this->db->get('tb_pembinaan');
		//return $this->db->query("SELECT * FROM tb_pembinaan WHERE jenis_program = 'xxxx'");
	}

}

