<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lihatmonitoring extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
        if($this->session->userdata('status') != "login"){
        	redirect(base_url("login"));
        }
        $this->load->model('lihatmonitoringmodel');
        $this->load->helper('url');
    }

	public function index()
	{
			$data['tb_pelanggaran'] = $this->lihatmonitoringmodel->tampil_data()->result();
			$this->load->view('lihatmonitoringview',$data);	
	}

}
