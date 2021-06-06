<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Input_surat extends CI_Controller{

    public function index(){
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Surat_keluar/Tambah_surat');
        $this->load->view('template/footer');
    }
}