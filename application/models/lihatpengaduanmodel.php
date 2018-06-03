<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class lihatpengaduanmodel extends CI_Model {
	
	function tampil_data(){
		return $this->db->get('tb_pengaduan');
		//return $this->db->query("SELECT * FROM tb_pengaduan WHERE jenis_program = 'xxxx'");
	}

}

