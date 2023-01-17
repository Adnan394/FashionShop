<?php

defined('BASEPATH') or exit('Not Allowed Doirect Access');

class Auth extends CI_Controller {
    public function __construct() {
        parent:: __construct();
    }
    public function index() {
        $this->data['title'] = "GANDL Login";
        $this->load->view('Auth/login', $this->data);
    }

    public function login_validation() {        
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if($this->form_validation->run()==false) {
            $this->data['title'] = "GANDL Login";
            $this->load->view('Auth/login', $this->data);
        }else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
        
            $user = $this->db->get_where('registrasi', ['username' => $username])->row_array();
            
            if($user) {
                if(password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'id_role' => $user['id_role'],
                    ];
                    
                    if($user['id_role'] == 1) {
                        $this->session->set_userdata($data);
                        redirect('Dashboard');
                    }else {
                        $this->session->set_userdata($data);
                        redirect('Home');
                    }
                }else {
                    $this->session->set_flashdata('pesan', 
                    '<div class="alert alert-danger" role="alert">
                        Warning! Password wrong
                    </div>');
                    redirect('Auth');
                }
            }else {
                $this->session->set_flashdata('pesan', 
                '<div class="alert alert-danger" role="alert">
                    Warning! Username not found
                </div>');
                redirect('Auth');
            }
    }
}

public function register() {
    $this->data['title'] = 'GANDL Registration';
    $this->load->view('Auth/register', $this->data);
}
public function register_validation() {
    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[6]|is_unique[registrasi.username]',[
    'is_unique' => 'this username has already exist!'
    ]);
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[registrasi.email]',[
    'is_unique' => 'this email has been registered!'
    ]);
    $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]');

    if($this->form_validation->run()==false) {
        $this->data['title'] = "GANDL Register";
        $this->load->view('Auth/register', $this->data);
    }else {
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'id_role' => 2,
        ];

        echo($data);
        $this->db->insert('registrasi',$data);
        $this->session->set_flashdata('pesan',
        '<div class="alert alert-success" role="alert">
            Congratulation! your account has been created
        </div>');
        redirect('Auth');
    }
}

public function logout() {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('is_role');

    $this->session->set_flashdata('pesan',
        '<div class="alert alert-success" role="alert">
           You has been logged out!
        </div>');
        redirect('Auth');
}

}