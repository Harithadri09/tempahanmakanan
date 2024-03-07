<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_cont extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login | Dulu';
            $this->load->view('templates/header_login', $data);
            $this->load->view('login/index');
            $this->load->view('templates/footer_login');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if ($user['status'] == 'Aktif') {
                if ($password == $user['password']) {
                    $data = [
                        'username' => $user['username'],
                        'user_role' => $user['user_role']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['user_role'] == 'Admin') {
                        redirect('admin');
                    } elseif ($user['user_role'] == 'Manager') {
                        redirect('manager');
                    } elseif ($user['user_role'] == 'Kasir') {
                        redirect('kasir');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Password salah! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Username tidak aktif! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Username tidak terdaftar! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect('login');
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('user_role');

        // $this->session->sess_destroy();

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert"> You Have Logout!</div>');
        redirect('login');
    }
}
