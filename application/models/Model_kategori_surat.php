<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kategori_surat extends CI_Model
{
    public function bacajenissurat()
    {
        return $this->db->get('kategori_surat')->result_array();
    }

    public function suratUndangan() {

    	$this->db->where('id_kategori_surat', 1);
    	$data = $this->db->get('kategori_surat');
    	return $data->result_array();
    }


    public function optionkategori()
    {
        return $this->db->get('kategori_surat');
    }
}
