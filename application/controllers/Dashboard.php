<?php  

defined('BASEPATH') OR exit('No direct script access allowed');
    class Dashboard extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('User');
        }
        public function index() {
            $this->data['active'] = 'index';
            $data['user'] = $this->db->get_where('registrasi', ['id_role' => $this->session->userdata('id_role')])->row_array();  
            if($data['user']['id_role'] == 1) {
                $this->data['title'] = 'Admin Gandul';
                $this->data['data'] = $this->db->get('hero')->result();
                $this->template->load('admin/dashboard', $this->data);
            } else {
                $this->load->view('403');
            }   
        }

        public function hero() {
            $this->data['active'] = 'index';
            $data['user'] = $this->db->get_where('registrasi', ['id_role' => $this->session->userdata('id_role')])->row_array();  
            if($data['user']['id_role'] == 1) {
                $this->data['title'] = 'Tambah data Hero';
                $this->template->load('admin/hero', $this->data);
            } else {
                $this->load->view('403');
            }  
        }
        public function hero_hapus($id) {
            $this->data['active'] = 'index';
            $data['user'] = $this->db->get_where('registrasi', ['id_role' => $this->session->userdata('id_role')])->row_array();  
            if($data['user']['id_role'] == 1) {
                $this->db->where('id', $id);
                $data = $this->db->delete('hero');
                if($data) {
                    redirect('Dashboard');
                }
            } else {
                $this->load->view('403');
            }  
        }

        public function hero_save() {
            $this->data['active'] = 'index';
            $data['user'] = $this->db->get_where('registrasi', ['id_role' => $this->session->userdata('id_role')])->row_array();  
            if($data['user']['id_role'] == 1) {
                $config['upload_path']          = './assets/dataimg/';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg';
                    $config['max_size']             = 10000;
                    $config['max_width']            = 10000;
                    $config['max_height']           = 10000;
    
                    $this->upload->initialize($config);
                    $this->load->library('upload', $config);
    
                    if ( ! $this->upload->do_upload('image'))
                    {
                            // echo('ada yg error');
                            $error = array('error' => $this->upload->display_errors());
    
                            $this->load->view('upload_form', $error);
                    }
                    else
                    {
                        $gambar= $this->upload->data();
                        $gambar = $gambar['file_name'];
    
                        $data =array(
                            'judul' => $this->input->post('judul'),
                            'image' => $gambar,
                            'deskripsi' => $this->input->post('deskripsi'),
                            'action' => $this->input->post('action'),
                        );
                
                        $simpan = $this->db->insert('hero',$data);
                
                        if($simpan) {
                            redirect('Dashboard');
                        }else {
                            echo('data tidak dapat dimasukan');
                        }
                    }
            } else {
                $this->load->view('403');
            }  

        }
        
        public function datauser() {
            $this->data['active'] = 'user';
            $data['user'] = $this->db->get_where('registrasi', ['id_role' => $this->session->userdata('id_role')])->row_array();  
            if($data['user']['id_role'] == 1) {     
                $this->data['user'] = $this->User->getData();
                $this->data['title'] = 'Data User';
                $this->template->load('admin/user', $this->data);
            } else {
                $this->load->view('403');
            } 
        }

        public function dataPesanan() {
            $data['active'] = 'pesanan';
            $data['user'] = $this->db->get_where('registrasi', ['id_role' => $this->session->userdata('id_role')])->row_array();  
            if($data['user']['id_role'] == 1) {
                $data['title'] = 'Data Pesanan';
                $data['pesan'] = $this->db->get('checkout')->result();
                $this->template->load('admin/pesanan', $data);
            } else {
                $this->load->view('403');
            } 
        }
        
        public function detail_pesanan($id) {
            $data['user'] = $this->db->get_where('registrasi', ['id_role' => $this->session->userdata('id_role')])->row_array();  
            if($data['user']['id_role'] == 1) {
                $data['title'] = 'Edit Pesanan';
                $data['active'] = 'pesanan';
                $this->db->where('id', $id);
                $data['pesan'] = $this->db->get('checkout')->row();
                $this->template->load('admin/pesananDetail', $data);
            } else {
                $this->load->view('403');
            } 
        }

        public function siapkirim($id) {

            $data['user'] = $this->db->get_where('registrasi', ['id_role' => $this->session->userdata('id_role')])->row_array();  
            if($data['user']['id_role'] == 1) {
                $this->db->set('status_pengiriman', 2);
                $this->db->where('id', $id);
                $kirim = $this->db->update('checkout');
                if($kirim) {
                    redirect('Dashboard/datapesanan');
                }else {
                    redirect('Dashboard/detail_pesanan');
                }
            } else {
                $this->load->view('403');
            } 
        }
    }
?>