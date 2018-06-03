<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lihatradio extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
        if($this->session->userdata('status') != "login"){
        	redirect(base_url("login"));
        }
        $this->load->model('lihatradiomodel');
        $this->load->helper('url');
    }

	public function index()
	{
			$data['tb_pelanggaran'] = $this->lihatradiomodel->tampil_data()->result();
			$data['tb_pelanggaran1'] = $this->lihatradiomodel->tampil_data2()->result();
			$this->load->view('lihatradioview',$data);	
	}

}
