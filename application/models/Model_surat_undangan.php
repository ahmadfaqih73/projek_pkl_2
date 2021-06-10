<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_surat_undangan extends CI_Model
{
    public function baca_undangan()
    {
        // $this->db->join('kategori_surat', 'kategori_surat.id_kategori_surat = surat_out.jenis_surat');
        $sql = $this->db->get('surat_out')->result_array();
        return $sql;
        // var_dump($sql);
        // die;
    }
   
}
