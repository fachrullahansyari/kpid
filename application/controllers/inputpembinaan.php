<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inputpembinaan extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
        if($this->session->userdata('status') != "login"){
        	redirect(base_url("login"));
        }
        $this->load->model('inputpembinaanmodel');
        $this->load->helper('url');
    }

	public function index()
	{
			$this->load->view('inputpembinaanview');	
	}

	function tambah_aksi(){
		$nama_program = $this->input->post('nama_program');
		$jenis_program = $this->input->post('jenis_program');
		$pembinaan = $this->input->post('pembinaan');

		$data = array(
			'nama_program' => $nama_program,
			'jenis_program' => $jenis_program,
			'pembinaan' => $pembinaan
			);

		$this->inputpembinaanmodel->input_data($data, 'tb_pembinaan');
		redirect('lihatpembinaan');
	}

	function hapus($id_pembinaan){
		$where = array('id_pembinaan' => $id_pembinaan);
		$this->inputpembinaanmodel->hapus_data($where, 'tb_pembinaan');
		redirect('lihatpembinaan');
	}

	function edit($id_pembinaan){
		$where = array('id_pembinaan' => $id_pembinaan);
		$data['tb_pembinaan'] = $this->inputpembinaanmodel->edit_data($where, 'tb_pembinaan')->result();
		$this->load->view('inputpembinaanedit', $data);
	}

	function update(){
		$id_pembinaan = $this->input->post('id_pembinaan');
		$nama_program = $this->input->post('nama_program');
		$jenis_program = $this->input->post('jenis_program');
		$pembinaan = $this->input->post('pembinaan');

		$data = array(
			'nama_program' => $nama_program,
			'jenis_program' => $jenis_program,
			'pembinaan' => $pembinaan
			);

		$where = array(
			'id_pembinaan' => $id_pembinaan
			);

		$this->inputpembinaanmodel->update_data($where,$data,'tb_pembinaan');
		redirect('lihatpembinaan');
	}

}
