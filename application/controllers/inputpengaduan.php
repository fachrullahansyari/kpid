<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inputpengaduan extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
        if($this->session->userdata('status') != "login"){
        	redirect(base_url("login"));
        }
        $this->load->model('inputpengaduanmodel');
        $this->load->helper('url');
    }

	public function index()
	{
			$this->load->view('inputpengaduanview');	
	}

	function tambah_aksi(){
		$tgl_pengaduan = $this->input->post('tgl_pengaduan');
		$nama_program = $this->input->post('nama_program');
		$jenis_program = $this->input->post('jenis_program');

		$data = array(
			'tgl_pengaduan' => $tgl_pengaduan,
			'nama_program' => $nama_program,
			'jenis_program' => $jenis_program
			);

		$this->inputpengaduanmodel->input_data($data, 'tb_pengaduan');
		redirect('lihatpengaduan');
	}

	function hapus($id_pengaduan){
		$where = array('id_pengaduan' => $id_pengaduan);
		$this->inputpengaduanmodel->hapus_data($where, 'tb_pengaduan');
		redirect('lihatpengaduan');
	}

	function edit($id_pengaduan){
		$where = array('id_pengaduan' => $id_pengaduan);
		$data['tb_pengaduan'] = $this->inputpengaduanmodel->edit_data($where, 'tb_pengaduan')->result();
		$this->load->view('inputpengaduanedit', $data);
	}

	function update(){
		$id_pengaduan = $this->input->post('id_pengaduan');
		$tgl_pengaduan = $this->input->post('tgl_pengaduan');
		$nama_program = $this->input->post('nama_program');
		$jenis_program = $this->input->post('jenis_program');

		$data = array(
			'tgl_pengaduan' => $tgl_pengaduan,
			'nama_program' => $nama_program,
			'jenis_program' => $jenis_program
			);

		$where = array(
			'id_pengaduan' => $id_pengaduan
			);

		$this->inputpengaduanmodel->update_data($where,$data,'tb_pengaduan');
		redirect('lihatpengaduan');
	}

}
