<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kode_barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kode_barang');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "Kode Barang";
        $this->load->view('template/template_header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('Kode_barang/index', $data);
        $this->load->view('template/template_footer');
    }

    public function tampil()
    {
        $data = $this->M_kode_barang->tampildata()->result();
        echo json_encode($data);
    }
}
