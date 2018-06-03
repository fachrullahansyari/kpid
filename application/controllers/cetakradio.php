<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cetakradio extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
        if($this->session->userdata('status') != "login"){
        	redirect(base_url("login"));
        }
        $this->load->model('cetakradiomodel');
        $this->load->helper('url');
    }

	public function index()
	{
			$data['tb_pelanggaran'] = $this->cetakradiomodel->tampil_data()->result();
            $data['tb_pelanggaran1'] = $this->cetakradiomodel->tampil_data2()->result();
			$this->load->view('cetakradioview',$data);
	
	}

	public function cetak(){

		$this->load->library('m_pdf');

        $data['tb_pelanggaran'] = $this->cetakradiomodel->tampil_data()->result();
        $data['tb_pelanggaran1'] = $this->cetakradiomodel->tampil_data2()->result();
        $sumber = $this->load->view('cetakradioview', $data, TRUE);
        $html = $sumber;

        $this->pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822));
        $this->pdf->WriteHTML($html);
        $this->pdf->Output("output.pdf", 'I');
	}

}
