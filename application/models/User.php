<?php
defined('BASEPATH') or exit('Not Allowed Direct Access');

class User extends CI_Model {
    public function getData() {
        $data = $this->db->get('registrasi')->result();
        return $data;
    }
}
?>