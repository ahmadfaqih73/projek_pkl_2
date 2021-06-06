<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_Undangan extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Surat_keluar/Surat_undangan');
        $this->load->view('template/footer');
    }
}
