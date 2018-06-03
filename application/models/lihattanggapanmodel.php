<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class lihattanggapanmodel extends CI_Model {
	
	function tampil_data(){
		return $this->db->get('tb_tanggapan');
		//return $this->db->query("SELECT * FROM tb_tanggapan WHERE jenis_program = 'xxxx'");
	}

}

