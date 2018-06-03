<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inputtanggapan extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
        if($this->session->userdata('status') != "login"){
        	redirect(base_url("login"));
        }
        $this->load->model('inputtanggapanmodel');
        $this->load->helper('url');
    }

	public function index()
	{
			$this->load->view('inputtanggapanview');	
	}

	function tambah_aksi(){
		$nama_program = $this->input->post('nama_program');
		$jenis_program = $this->input->post('jenis_program');
		$isi = $this->input->post('isi');

		$data = array(
			'nama_program' => $nama_program,
			'jenis_program' => $jenis_program,
			'isi' => $isi
			);

		$this->inputtanggapanmodel->input_data($data, 'tb_tanggapan');
		redirect('lihattanggapan');
	}

	function hapus($id_tanggapan){
		$where = array('id_tanggapan' => $id_tanggapan);
		$this->inputtanggapanmodel->hapus_data($where, 'tb_tanggapan');
		redirect('lihattanggapan');
	}

	function edit($id_tanggapan){
		$where = array('id_tanggapan' => $id_tanggapan);
		$data['tb_tanggapan'] = $this->inputtanggapanmodel->edit_data($where, 'tb_tanggapan')->result();
		$this->load->view('inputtanggapanedit', $data);
	}

	function update(){
		$id_tanggapan = $this->input->post('id_tanggapan');
		$nama_program = $this->input->post('nama_program');
		$jenis_program = $this->input->post('jenis_program');
		$isi = $this->input->post('isi');

		$data = array(
			'nama_program' => $nama_program,
			'jenis_program' => $jenis_program,
			'isi' => $isi
			);

		$where = array(
			'id_tanggapan' => $id_tanggapan
			);

		$this->inputtanggapanmodel->update_data($where,$data,'tb_tanggapan');
		redirect('lihattanggapan');
	}

}
