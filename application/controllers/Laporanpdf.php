<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('Lapor_model');
        if($this->session->userdata('level')== NULL) { 
            redirect('auth');
        }
    }
    
    function index(){
        $pdf = new FPDF('P','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan

        //$pdf->Image('http://localhost/liquid/assets/img/logo/telkom.png',10,2,30,0,'PNG');
        $pdf->Image('http://localhost/liquid/assets/img/logo/icon.png',10,4,40,0,'PNG');
        $pdf->Image('http://localhost/liquid/assets/img/logo/icon.png',165,4,40,0,'PNG');
        $pdf->Cell(10,30,'',0,1);
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'Laporan Data Liquid Laundry',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'APLIKASI Liquid-Laundry.com',0,1,'C');
        $pdf->Cell(10,7,'',0,1);

        // Memberikan space kebawah agar tidak terlalu rapat

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0,'C');
        $pdf->Cell(30,6,'Nota',1,0,'C');
        $pdf->Cell(30,6,'Nama Barang',1,0,'C');
        $pdf->Cell(30,6,'Kode Cabang',1,0,'C');
        $pdf->Cell(30,6,'Tanggal Masuk',1,0,'C');
        $pdf->Cell(30,6,'Tanggal Keluar',1,0,'C');
        $pdf->Cell(30,6,'Status',1,1,'C');

        $pdf->SetFont('Arial','',10);

        $pelanggan = $this->db->get('pelanggan')->result();
        $no=1;
        foreach ($pelanggan as $row){
            
            $pdf->Cell(10,6,$no++,1,0,'C');
            $pdf->Cell(30,6,$row->nota,1,0,'C');
            $pdf->Cell(30,6,$row->nama_barang,1,0,'C');
            $pdf->Cell(30,6,$row->id_cabang,1,0,'C');
            $pdf->Cell(30,6,$row->tgl_masuk,1,0,'C');
            $pdf->Cell(30,6,$row->tgl_keluar,1,0,'C');
            $pdf->Cell(30,6,$row->status,1,1,'C');
        }

        $pdf->Output();
    }
}