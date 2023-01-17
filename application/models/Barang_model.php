<?php
defined('BASEPATH') or exit('Not Allowed Direct Access');

class Barang_model extends CI_Model {

    public function getData() {
        $data = $this->db->get('barang')->result();
        return $data;
    }

    public function edit($id){
        $this->db->where('id', $id);
        $data = $this->db->get('barang')->row();
        return $data;
    }

    public function edit_save($data, $id) {
        $this->db->where('id', $id);
        $update = $this->db->update('barang', $data);
        return $update;
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $delete = $this->db->delete('barang');
        return $delete;
    }

    public function detail_brg($id){
        $this->db->where('id', $id);
        $data = $this->db->get('barang')->row();
        return $data;
    }
}
?>