<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class errorapp extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
        if($this->session->userdata('status') != "login"){
        	redirect(base_url("login"));
        }
        //$this->load->model('errorappmodel');
        $this->load->helper('url');
    }

	public function index()
	{
			//$data['tb_pelanggaran'] = $this->errorappmodel->tampil_data()->result();
			$this->load->view('errorappview');	
	}

}
