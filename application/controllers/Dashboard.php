<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {

        $data['title'] = "Dashboard";
        $this->load->view('template/template_header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/index', $data);
        $this->load->view('template/template_footer');
    }
}
