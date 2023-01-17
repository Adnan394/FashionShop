<?php

defined('BASEPATH') or exit('Not Allowed Doirect Access');

class Produk extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model('Barang_model');

    }
    public function index() {
        $this->data['title'] = 'Daftar Produk';
        $this->data['active'] = 'produk';
        $this->data['barang'] = $this->Barang_model->getData();
        $this->data['user'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row();  
        $this->main->load('home/produk', $this->data);
    }
    
    public function kategori($kategori) {
        $data['title'] = 'Daftar produk';
        $data['active'] = 'produk';
        $this->db->where('kategori', $kategori);
        $data['barang'] = $this->db->get('barang')->result();
        $data['user'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row();  
        $this->main->load('home/produk', $data);
    }
    
    public function detail_produk($id) {
        if($this->session->userdata('email')==null) {
            $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-danger" role="alert">
                        Please Login to continue!
                    </div>');
            redirect('Auth');
        }else {
            $this->data['user'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row();  
            $this->data['title'] = 'Detail Produk';
            $this->data['active'] = 'produk';
            $this->data['barang'] = $this->Barang_model->detail_brg($id);
            $this->main->load('home/detail-produk', $this->data);
        }
    }

    public function filter() {
        $data['title'] = 'Daftar produk';
        $data['active'] = 'produk';
        $data['user'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row();  
        $min = $this->input->post('min');
        $max = $this->input->post('max');

        // echo($min);

        $val = array('harga >=' => $min, 'harga <=' =>$max);
        $this->db->where($val);
        $data['barang'] = $this->db->get('barang')->result();
        $this->main->load('home/produk', $data);
    }
}