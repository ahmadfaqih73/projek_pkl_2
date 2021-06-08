<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Input_surat extends CI_Controller
{

    public function index()
    {
        $data['kategori_surat'] = $this->Model_kategori_surat->bacajenissurat();
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Surat_keluar/Tambah_surat', $data);
        $this->load->view('template/footer');
    }
}
