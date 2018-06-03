<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inputmonitoring extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
        if($this->session->userdata('status') != "login"){
        	redirect(base_url("login"));
        }
        $this->load->model('inputmonitoringmodel');
        $this->load->helper('url');
    }

	public function index()
	{
			$this->load->view('inputmonitoringview');	
	}

	function tambah_aksi(){
		$tgl_pelanggaran = $this->input->post('tgl_pelanggaran');
		$jenis_pelanggaran = $this->input->post('jenis_pelanggaran');
		$uraian_pelanggaran = $this->input->post('uraian_pelanggaran');
		$station_tv = $this->input->post('station_tv');
		$nama_acara = $this->input->post('nama_acara');
		$station_tv1 = $this->input->post('station_tv1');
		$nama_iklan = $this->input->post('nama_iklan');
		$station_tv2 = $this->input->post('station_tv2');
		$pelanggaran = $this->input->post('pelanggaran');
		$nama_radio = $this->input->post('nama_radio');
		$acara_radio = $this->input->post('acara_radio');


		$data = array(
			'tgl_pelanggaran' => $tgl_pelanggaran,
			'jenis_pelanggaran' => $jenis_pelanggaran,
			'uraian_pelanggaran' => $uraian_pelanggaran,
			'station_tv' => $station_tv,
			'nama_acara' => $nama_acara,
			'station_tv1' => $station_tv1,
			'nama_iklan' => $nama_iklan,
			'station_tv2' => $station_tv2,
			'pelanggaran' => $pelanggaran,
			'nama_radio' => $nama_radio,
			'acara_radio' => $acara_radio
			);

		$this->inputmonitoringmodel->input_data($data, 'tb_pelanggaran');
		redirect('lihatmonitoring');
	}

	function hapus($id_pelanggaran){
		$where = array('id_pelanggaran' => $id_pelanggaran);
		$this->inputmonitoringmodel->hapus_data($where, 'tb_pelanggaran');
		redirect('lihatmonitoring');
	}

	function edit($id_pelanggaran){
		$where = array('id_pelanggaran' => $id_pelanggaran);
		$data['tb_pelanggaran'] = $this->inputmonitoringmodel->edit_data($where, 'tb_pelanggaran')->result();
		$this->load->view('inputmonitoringedit', $data);
	}

	function update(){
		$id_pelanggaran = $this->input->post('id_pelanggaran');
		$tgl_pelanggaran = $this->input->post('tgl_pelanggaran');
		$uraian_pelanggaran = $this->input->post('uraian_pelanggaran');

		$data = array(
			'tgl_pelanggaran' => $tgl_pelanggaran,
			'uraian_pelanggaran' => $uraian_pelanggaran
			);

		$where = array(
			'id_pelanggaran' => $id_pelanggaran
			);

		$this->inputmonitoringmodel->update_data($where,$data,'tb_pelanggaran');
		redirect('lihatmonitoring');
	}

	function hapusrkp($id_pelanggaran){
		$where = array('id_pelanggaran' => $id_pelanggaran);
		$this->inputmonitoringmodel->hapus_data($where, 'tb_pelanggaran');
		redirect('lihatpelanggaran');
	}

	function editrkp($id_pelanggaran){
		$where = array('id_pelanggaran' => $id_pelanggaran);
		$data['tb_pelanggaran'] = $this->inputmonitoringmodel->edit_data($where, 'tb_pelanggaran')->result();
		$this->load->view('inputmonitoringeditrkp', $data);
	}

	function updaterkp(){
		$id_pelanggaran = $this->input->post('id_pelanggaran');
		$tgl_pelanggaran = $this->input->post('tgl_pelanggaran');
		$station_tv = $this->input->post('station_tv');
		$nama_acara = $this->input->post('nama_acara');

		$data = array(
			'tgl_pelanggaran' => $tgl_pelanggaran,
			'station_tv' => $station_tv,
			'nama_acara' => $nama_acara
			);

		$where = array(
			'id_pelanggaran' => $id_pelanggaran
			);

		$this->inputmonitoringmodel->update_data($where,$data,'tb_pelanggaran');
		redirect('lihatpelanggaran');
	}

	function hapusikl($id_pelanggaran){
		$where = array('id_pelanggaran' => $id_pelanggaran);
		$this->inputmonitoringmodel->hapus_data($where, 'tb_pelanggaran');
		redirect('lihatiklan');
	}

	function editikl($id_pelanggaran){
		$where = array('id_pelanggaran' => $id_pelanggaran);
		$data['tb_pelanggaran'] = $this->inputmonitoringmodel->edit_data($where, 'tb_pelanggaran')->result();
		$this->load->view('inputmonitoringeditikl', $data);
	}

	function updateikl(){
		$id_pelanggaran = $this->input->post('id_pelanggaran');
		$tgl_pelanggaran = $this->input->post('tgl_pelanggaran');
		$station_tv1 = $this->input->post('station_tv1');
		$nama_iklan = $this->input->post('nama_iklan');

		$data = array(
			'tgl_pelanggaran' => $tgl_pelanggaran,
			'station_tv1' => $station_tv1,
			'nama_iklan' => $nama_iklan
			);

		$where = array(
			'id_pelanggaran' => $id_pelanggaran
			);

		$this->inputmonitoringmodel->update_data($where,$data,'tb_pelanggaran');
		redirect('lihatiklan');
	}

	function hapustv($id_pelanggaran){
		$where = array('id_pelanggaran' => $id_pelanggaran);
		$this->inputmonitoringmodel->hapus_data($where, 'tb_pelanggaran');
		redirect('lihattv');
	}

	function edittv($id_pelanggaran){
		$where = array('id_pelanggaran' => $id_pelanggaran);
		$data['tb_pelanggaran'] = $this->inputmonitoringmodel->edit_data($where, 'tb_pelanggaran')->result();
		$this->load->view('inputmonitoringedittv', $data);
	}

	function updatetv(){
		$id_pelanggaran = $this->input->post('id_pelanggaran');
		$tgl_pelanggaran = $this->input->post('tgl_pelanggaran');
		$station_tv2 = $this->input->post('station_tv2');
		$pelanggaran = $this->input->post('pelanggaran');

		$data = array(
			'tgl_pelanggaran' => $tgl_pelanggaran,
			'station_tv2' => $station_tv2,
			'pelanggaran' => $pelanggaran
			);

		$where = array(
			'id_pelanggaran' => $id_pelanggaran
			);

		$this->inputmonitoringmodel->update_data($where,$data,'tb_pelanggaran');
		redirect('lihattv');
	}

	function hapusradio($id_pelanggaran){
		$where = array('id_pelanggaran' => $id_pelanggaran);
		$this->inputmonitoringmodel->hapus_data($where, 'tb_pelanggaran');
		redirect('lihatradio');
	}

	function editradio($id_pelanggaran){
		$where = array('id_pelanggaran' => $id_pelanggaran);
		$data['tb_pelanggaran'] = $this->inputmonitoringmodel->edit_data($where, 'tb_pelanggaran')->result();
		$this->load->view('inputmonitoringeditradio', $data);
	}

	function updateradio(){
		$id_pelanggaran = $this->input->post('id_pelanggaran');
		$tgl_pelanggaran = $this->input->post('tgl_pelanggaran');
		$nama_radio = $this->input->post('nama_radio');
		$acara_radio = $this->input->post('acara_radio');

		$data = array(
			'tgl_pelanggaran' => $tgl_pelanggaran,
			'nama_radio' => $nama_radio,
			'acara_radio' => $acara_radio
			);

		$where = array(
			'id_pelanggaran' => $id_pelanggaran
			);

		$this->inputmonitoringmodel->update_data($where,$data,'tb_pelanggaran');
		redirect('lihatradio');
	}

}
