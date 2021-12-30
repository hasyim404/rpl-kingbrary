<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bukuModel extends CI_Model {

    public function get_all()
    {
        return $this->db->get('buku')->result_array();
    }

    public function get_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('buku');
        return $query->row();
    }

}