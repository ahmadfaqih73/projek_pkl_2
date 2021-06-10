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


        $nama_surat         = $this->input->post('nama');
        $oldFile                = $this->input->post('oldFiles');
        $kategori = $this->input->post('kategori');
        $tanggal = $this->input->post('tanggal');

        if (!empty($_FILES['filename'])) {
            $filename  = $this->upload_file();
            unlink('./uploads/' . $oldFile);
        } else {
            $filename  = $this->input->post("filename");
        }


        $data = array(
            'Nama_surat'              => $nama_surat,
            'jenis_surat' => $kategori,
            'nama_file'      => $filename,
            'Tanggal_keluar' => $tanggal

        );
        var_dump($data);
        die;
        // $this->db->where('Id_mhs_tif', $id);
        // $this->db->update('mhs_tif', $data);
    }
}
