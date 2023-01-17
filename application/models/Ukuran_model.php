<?php
defined('BASEPATH') or exit('Not Allowed Direct Access');

class Ukuran_model extends CI_Model {

    public function getData() {
        $data = $this->db->get('ukuran')->result();
        return $data;
    }
}