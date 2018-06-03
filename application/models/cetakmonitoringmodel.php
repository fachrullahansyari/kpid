<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cetakmonitoringmodel extends CI_Model {
	
	function tampil_data(){
		return $this->db->get('tb_pelanggaran');
		//return $this->db->query("SELECT * FROM tb_pelanggaran WHERE jenis_program = 'xxxx'");
	}

}

