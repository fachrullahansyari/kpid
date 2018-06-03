<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cetakiklan extends CI_Controller {
	
	function __construct()
	{
        parent::__construct();
        if($this->session->userdata('status') != "login"){
        	redirect(base_url("login"));
        }
        $this->load->model('cetakiklanmodel');
        $this->load->helper('url');
    }

	public function index()
	{
			$data['tb_pelanggaran'] = $this->cetakiklanmodel->tampil_data()->result();
            $data['tb_pelanggaran1'] = $this->cetakiklanmodel->tampil_data2()->result();
			$this->load->view('cetakiklanview',$data);
	
	}

	public function cetak(){

		$this->load->library('m_pdf');

        $data['tb_pelanggaran'] = $this->cetakiklanmodel->tampil_data()->result();
        $data['tb_pelanggaran1'] = $this->cetakiklanmodel->tampil_data2()->result();
        $sumber = $this->load->view('cetakiklanview', $data, TRUE);
        $html = $sumber;

        $this->pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822));
        $this->pdf->WriteHTML($html);
        $this->pdf->Output("output.pdf", 'I');
	}

}
