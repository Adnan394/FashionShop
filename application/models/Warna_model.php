<?php
defined('BASEPATH') or exit('Not Allowed Direct Access');

class Warna_model extends CI_Model {

    public function getData() {
        $data = $this->db->get('warna')->result();
        return $data;
    }
}