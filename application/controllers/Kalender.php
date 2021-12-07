<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kalender extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Calender";
        $this->load->view('template/template_header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('calender/index');
        $this->load->view('template/template_footer');
    }
}
