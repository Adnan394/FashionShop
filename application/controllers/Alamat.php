<?php
defined('BASEPATH') or exit('Not Allowed Direct Access');

class Alamat extends CI_Controller {
    public function index() {
        $data['user'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row();  
        if($data['user'] == null) {
            $this->session->set_flashdata('pesan', 
                        '<div class="alert alert-danger" role="alert">
                           Profile tidak tersedia, silakan Login/Sign up!
                        </div>');
            redirect('Auth');
        }else {
            $data['title'] = 'edit alamat saya';
            $this->load->view('user/edit_alamat', $data);
        }
       
    }

    public function alamat_save() {
        $id = $this->input->post('id');
        $alamat_list = $this->input->post('alamat');
        $alamat = implode(",", $alamat_list);
        $data = array(
            'alamat' => $alamat,
        );

        $this->db->set('alamat', $alamat);
        $this->db->where('id', $id);
        $update = $this->db->update('registrasi',$data);

        if($update) {
            $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-success" role="alert">
                        Alamat Kamu sudah Diperbarui
                    </div>');
            redirect('Profile');
        }else {
            redirect('Alamat');
        }
    }

}
?>