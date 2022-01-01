<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function login()
	{
        $this->form_validation->set_rules('email', 'Email', 'required', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('home/layouts/navbar.php', $data);
            $this->load->view('auth/login.php');
            $this->load->view('home/layouts/footer.php');
        } else {
            $this->_login();

        }
	}

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                $this->session->set_flashdata(
                'message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Login Berhasil!</strong> Selamat datang '.$data['nama'].
                '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
                redirect(base_url());
            } else {
                $this->session->set_flashdata(
                    'message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Login Gagal!</strong> Passwrod Anda salah
                    </div>'
                );
                redirect(base_url('index.php/auth/login'));
            }
        } else {
            $this->session->set_flashdata(
                'message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Login Gagal!</strong> User tidak terdaftar
                </div>'
            );
            redirect(base_url('index.php/auth/login'));
        }
    }

    public function registration()
	{
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]', [
            'is_unique' => "Username telah terdaftar"
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => "Email telah terdaftar"
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Passwordnya enggak sama nih',
            'min_length' => 'Passwordnya Pendek banget nih'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register';
            $this->load->view('home/layouts/navbar.php', $data);
            $this->load->view('auth/register.php');
            $this->load->view('home/layouts/footer.php');    
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata(
                'message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Registrasi Berhasil!</strong> '.
                '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect(base_url('index.php/auth/login'));
        }
        
	}

    public function logout()
    {
        session_destroy();
        $this->session->set_flashdata(
            'message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Logout Berhasil!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
        redirect(base_url() ,'refresh');
        
    }
}