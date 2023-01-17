<?php
defined('BASEPATH') or exit('Not Allowed Direct Access');

class Transaksi extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model('Barang_model');
    }
    public function data_keranjang() {
        $data['title'] = 'Keranjang Saya';
        $data['user'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row();  
        if($data['user']==null) {
            $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-danger" role="alert">
                        Please Login to continue!
                    </div>');
            redirect('Auth');
        }else {
            $this->load->view('transaksi/keranjang', $data);
        }
    }
    public function keranjang_delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('keranjang');
        $data['user'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row();  
        $data['title'] = 'keranjang Saya';
        $this->load->view('transaksi/keranjang', $data);
    }
    public function keranjang() {
        $id = $this->input->post('id_user');
        $data = array(
            'id_user' => $id,
            'nama_user' => $this->input->post('name'),
            'nohp' => $this->input->post('nohp'),
            'alamat' => $this->input->post('alamat'),
            'id_barang' => $this->input->post('id_barang'),
            'gambar_barang' => $this->input->post('gambar_barang'),
            'judul' => $this->input->post('judul'),
            'harga' => $this->input->post('harga'),
            'ukuran' => $this->input->post('ukuran'),
            'warna' => $this->input->post('warna'),
        );

        $insert = $this->db->insert('keranjang', $data);
        if($insert) {
            redirect('Transaksi/data_keranjang');
        }else {
            echo('error');
        }
    }

    public function checkout($id) {
        if($this->session->userdata('email')==null) {
            $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-danger" role="alert">
                        Please Login to continue!
                    </div>');
            redirect('Auth');
        }else {
            $this->data['user'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row();  
            $this->data['active'] = 'produk';
            $this->data['barang'] = $this->Barang_model->detail_brg($id);
            $this->data['title'] = 'Checkout Pesanan';
            $this->load->view('transaksi/checkout', $this->data);
        }
    }

    public function checkout_save() {
        $id = $this->input->post('id_user');
        $data = array(
            'id_user' => $id,
            'nama_user' => $this->input->post('name'),
            'nohp' => $this->input->post('nohp'),
            'alamat' => $this->input->post('alamat'),
            'id_barang' => $this->input->post('id_barang'),
            'gambar_barang' => $this->input->post('gambar_barang'),
            'judul' => $this->input->post('judul'),
            'harga' => $this->input->post('harga'),
            'ukuran' => $this->input->post('ukuran'),
            'warna' => $this->input->post('warna'),
            'jasa_pengiriman' => $this->input->post('kirim'),
            'metode_bayar' => $this->input->post('bayar'),
            'total' => $this->input->post('harga')
        );

        $insert = $this->db->insert('checkout', $data);
        if($insert) {
            redirect('Transaksi/data_checkout');
        }else {
            echo('error');
        }
    }

    public function data_checkout() {
        $data['user'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row();  
        $this->db->where('id_user', $data['user']->id);
        $data['barang'] = $this->db->get('checkout')->result();
        if($data['user'] == null) {
            $this->session->set_flashdata('pesan', 
                        '<div class="alert alert-danger" role="alert">
                           Profile tidak tersedia, silakan Login/Sign up!
                        </div>');
            redirect('Auth');
        }else {
            $data['title'] = 'Pesanan anda';
        $this->load->view('transaksi/data_checkout', $data);
        }
    }

    public function checkout_delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('checkout');
        $data['user'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row();  
        $data['title'] = 'keranjang Saya';
        $this->load->view('transaksi/data_checkout', $data);
    }

}
?>