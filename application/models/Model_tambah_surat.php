<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_tambah_surat extends CI_Model
{

    public function upload_file()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'pdf|jpg|png';
        $config['max_size']             = 0;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('filename')) {
            return $this->upload->data("file_name");
        }
    }
    public function insert_surat_out()
    {
        $nim         = $this->input->post('Nama');
        $kategori         = $this->input->post('kategori');
        $filename  = $this->upload_file();
        $tanggal = $this->input->post('tanggal');

        $data = array(
            'Nama_surat' => $nim,
            'Jenis_surat' => $kategori,
            'nama_file' => $filename,
            'Tanggal_keluar' => $tanggal
        );
        // var_dump($data);
        // die;

        $this->db->insert('surat_out', $data);
    }
    public function updateSurat_Undangan()
    {


        $nama_surat       = $this->input->post('nama');
        $oldFile          = $this->input->post('oldFiles');
        $kategori = $this->input->post('kategori_surat');
        $tanggal = $this->input->post('tanggal');

        if( empty($_FILES['filename'])) {
            $filename = $oldFile;
        }
        else {
            $filename  = $this->upload_file();
            unlink('./uploads/' . $oldFile);
        }

        $data = array(
            'Nama_surat'              => $nama_surat,
            'jenis_surat'       => $kategori,
            'nama_file'         => $filename,
            'Tanggal_keluar' => $tanggal

        );
        // var_dump($data);
        // die;
        $this->db->where('id_surat_keluar', $this->input->post('id'));
        $this->db->update('surat_out', $data);
        redirect('Surat_Undangan','refresh');
    }
}
