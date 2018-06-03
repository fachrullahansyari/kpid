<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cetakmonitoring extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
        if($this->session->userdata('status') != "login"){
        	redirect(base_url("login"));
        }
        $this->load->model('cetakmonitoringmodel');
        $this->load->helper('url');
    }

	public function index()
	{
			$data['tb_pelanggaran'] = $this->cetakmonitoringmodel->tampil_data()->result();
			$this->load->view('cetakmonitoringview',$data);
	
	}

	public function cetak(){

		$this->load->library('m_pdf');

        $data['tb_pelanggaran'] = $this->cetakmonitoringmodel->tampil_data()->result();
        $sumber = $this->load->view('cetakmonitoringview', $data, TRUE);
        $html = $sumber;

        $this->pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822));
        $this->pdf->WriteHTML($html);
        $this->pdf->Output("output.pdf", 'I');
	}

}
