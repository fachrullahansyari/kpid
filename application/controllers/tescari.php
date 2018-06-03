<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tescari extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
        if($this->session->userdata('status') != "login"){
        	redirect(base_url("login"));
        }
        $this->load->model('tescarimodel');
        $this->load->helper('url');
    }

	public function index()
	{
			//$data['tb_pembinaan'] = $this->tescarimodel->tampil_data()->result();
			//$this->load->view('tescariview',$data);
			$data['tb_pembinaan'] = $this->tescarimodel->data(); //menampilkan seluruh data karyawan
  			$this->load->view('tescariview', $data);	
	}

	public function cari(){
		$keyword = $this->input->get('cari', TRUE); //mengambil nilai dari form input cari
  		$data['tb_pembinaan'] = $this->tescarimodel->cari($keyword); //mencari data karyawan berdasarkan inputan
  		$this->load->view('tescariview', $data); //menampilkan data yang sudah dicari
	}

}
