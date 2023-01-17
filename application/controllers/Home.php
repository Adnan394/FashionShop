<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Home extends CI_Controller {
        public function __construct() {
            parent:: __construct();
            $this->load->model('Barang_model');
        }
        public function index() {

            $data['user'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row_array();  
            if($data['user']==null) {
                $this->data['user'] = '';
                $this->data['title'] = 'Selamat datang!';
                $this->data['active'] = 'home';
                $this->data['barang'] = $this->Barang_model->getData();
                $this->main->load('home/index', $this->data);
            }else {
                $this->data['user'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row();  
                $this->data['title'] = 'Selamat datang!' . ' ' . $data['user']['name'];
                $this->data['active'] = 'home';
                $this->data['barang'] = $this->Barang_model->getData();
                $this->main->load('home/index', $this->data);
            }
    }
}
?>