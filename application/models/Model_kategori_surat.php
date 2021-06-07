<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kategori_surat extends CI_Model
{
    public function bacajenissurat()
    {
        return $this->db->get('kategori_surat')->result_array();
    }
}
