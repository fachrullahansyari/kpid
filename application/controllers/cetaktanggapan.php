<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cetaktanggapan extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
        if($this->session->userdata('status') != "login"){
        	redirect(base_url("login"));
        }
        $this->load->model('cetaktanggapanmodel');
        $this->load->helper('url');
    }

	public function index()
	{
			$data['tb_tanggapan'] = $this->cetaktanggapanmodel->tampil_data()->result();
			$this->load->view('cetaktanggapanview',$data);
	
	}

	public function cetak(){

		$this->load->library('m_pdf');

        $data['tb_tanggapan'] = $this->cetaktanggapanmodel->tampil_data()->result();
        $sumber = $this->load->view('cetaktanggapanview', $data, TRUE);
        $html = $sumber;

        $this->pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822));
        $this->pdf->WriteHTML($html);
        $this->pdf->Output("output.pdf", 'I');
	}

}
