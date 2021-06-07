<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kategori_surat extends CI_Controller
{
    public function index()
    {
        $data['kategori_surat'] = $this->Model_kategori_surat->bacajenissurat();
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Kategori_surat/index', $data);
        $this->load->view('template/footer');
    }
}
