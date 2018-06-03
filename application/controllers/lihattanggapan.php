<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lihattanggapan extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
        if($this->session->userdata('status') != "login"){
        	redirect(base_url("login"));
        }
        $this->load->model('lihattanggapanmodel');
        $this->load->helper('url');
    }

	public function index()
	{
			$data['tb_tanggapan'] = $this->lihattanggapanmodel->tampil_data()->result();
			$this->load->view('lihattanggapanview',$data);	
	}

}
