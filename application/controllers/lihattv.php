<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lihattv extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
        if($this->session->userdata('status') != "login"){
        	redirect(base_url("login"));
        }
        $this->load->model('lihattvmodel');
        $this->load->helper('url');
    }

	public function index()
	{
			$data['tb_pelanggaran'] = $this->lihattvmodel->tampil_data()->result();
			$data['tb_pelanggaran1'] = $this->lihattvmodel->tampil_data2()->result();
			$this->load->view('lihattvview',$data);	
	}

}
