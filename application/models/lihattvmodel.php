<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class lihattvmodel extends CI_Model {
	
	function tampil_data(){
		//return $this->db->get('tb_pelanggaran');
		return $this->db->query("SELECT * FROM tb_pelanggaran WHERE pelanggaran not in ('')");
	}

	function tampil_data2(){
		//return $this->db->get('tb_pelanggaran');
		return $this->db->query("SELECT COUNT(id_pelanggaran) as JML FROM tb_pelanggaran WHERE pelanggaran not in ('')");
	}

}

