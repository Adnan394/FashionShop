<?php
defined('BASEPATH') or exit('Not Allowed Direct Access');

class Profile extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

    }
    public function index() {
        $data['user'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row();  
        if($data['user'] == null) {
            $this->session->set_flashdata('pesan', 
                        '<div class="alert alert-danger" role="alert">
                           Profile tidak tersedia, silakan Login/Sign up!
                        </div>');
            redirect('Auth');
        }else {
            $data['title'] = 'Profile';
            $this->load->view('user/profile', $data);
        }
    }
        
    public function update_profile() {
        $data['user'] = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row();  
        $data['title'] = 'Edit Profile';
        $this->load->view('user/edit_profile', $data);
    }
    public function update_profile_save($id) {
                // $data = $this->db->get_where('registrasi', ['email' => $this->session->userdata('email')])->row();
                // $foto = './assets/img/' . $data->image;

                    $config['upload_path']          = './assets/dataimg';
                    $config['allowed_types']        = 'gif|jpg|png';
                    $config['max_size']             = 10000;
                    $config['max_width']            = 10000;
                    $config['max_height']           = 10000;
    
                    $this->upload->initialize($config);
                    $this->load->library('upload', $config);
    
                    if ( ! $this->upload->do_upload('profile'))
                    {
                           echo('gagal update');
                    }
                    else
                    {
                        $gambar= $this->upload->data();
                        $gambar = $gambar['file_name'];
    
                        $data =array(
                            'name' => $this->input->post('name'),
                            'username' => $this->input->post('username'),
                            'email' => $this->input->post('email'),
                            'image' => $gambar,
                            'nohp' => $this->input->post('nohp'),
                            'tanggal_lahir' => $this->input->post('ttl'),
                            'jenis_kelamin' => $this->input->post('jk'),
                        );
                        $this->db->where('id', $id);
                        $update = $this->db->update('registrasi', $data);
                        if($update) {
                            $this->session->set_flashdata('pesan', 
                        '<div class="alert alert-success" role="alert">
                            Profil kaamu berhasil diiperbarui
                        </div>');
                            redirect('Profile');
                        }else {
                            redirect('Profile/update_profile');
                        }
                    }
                
    }

    public function edit_profile($id) {
        $data =array(
            'name' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'nohp' => $this->input->post('nohp'),
            'tanggal_lahir' => $this->input->post('ttl'),
            'jenis_kelamin' => $this->input->post('jk'),
        );

        $this->db->where('id', $id);
        $update = $this->db->update('registrasi', $data);
        if($update) {
            redirect('Profile');
        }else {
            $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-danger" role="alert">
                        Warning! Password wrong
                    </div>');
                    redirect('Profile');
        }
    }

}
?>