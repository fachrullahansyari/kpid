<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lihatpengaduan extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
        if($this->session->userdata('status') != "login"){
        	redirect(base_url("login"));
        }
        $this->load->model('lihatpengaduanmodel');
        $this->load->helper('url');
    }

	public function index()
	{
			$data['tb_pengaduan'] = $this->lihatpengaduanmodel->tampil_data()->result();
			$this->load->view('lihatpengaduanview',$data);	
	}

}
