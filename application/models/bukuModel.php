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

    public function get_keyword($keyword, $data)
    {
        $this->db->select('*');
        $this->db->from('buku');
        if(!empty($keyword)) {
            $this->db->like('nama', $keyword);
            $this->db->or_like('penulis', $keyword);
            $this->db->or_like('penerbit', $keyword);    
        }elseif($keyword != $data){
            return "oke";

        }
        return $this->db->get()->result_array();
    }

}