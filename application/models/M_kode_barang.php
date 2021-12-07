<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kode_barang extends CI_Model
{
    public function tampildata()
    {
        $this->db->get('tb_mufti_jaya');
    }
}
