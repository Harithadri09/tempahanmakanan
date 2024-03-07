<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $dat['title'] = 'Admin';
        $dat['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $dat);
        $this->load->view('admin/index');
        $this->load->view('templates/footer');
    }

    public function user()
    {
        $data['title'] = 'Admin';

        $data['data'] = $this->Admin_model->getAllUser();

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/user', $data);
        $this->load->view('templates/footer');
    }

    public function table()
    {
        $data['title'] = 'Admin';
        $data['data'] = $this->Admin_model->getAllUser();

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/table', $data);
        $this->load->view('templates/footer');
    }

    public function log()
    {
        $data['title'] = 'Admin';
        $data['data'] = $this->Admin_model->getAllLog();

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/log', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == true) {
            $this->Admin_model->tambahUser();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Berhasil menambah!</div>');
            redirect('admin/table');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Gagal menambah!</div>');
            redirect('admin/table');
        }
    }



    public function update()
    {
        if ($this->form_validation->run() == FALSE) {
            $user_id = $this->input->post('user_id', true);
            $nama = $this->input->post('nama', true);
            $username = $this->input->post('username', true);
            $password = $this->input->post('password', true);
            $status = $this->input->post('status', true);
            $user_role = $this->input->post('user_role', true);

            $data = array(
                'user_id' => $user_id,
                'nama' => $nama,
                'username' => $username,
                'password' => $password,
                'status' => $status,
                'user_role' => $user_role
            );
            $this->db->where('user_id', $user_id);
            $this->db->update('user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Berhasil mengedit!</div>');
            redirect('admin/table');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Gagal mengedit!</div>');
            redirect('admin/table');
        }
    }

    public function delete()
    {
        if ($this->form_validation->run() == FALSE) {
            $user_id = $this->input->post('user_id');

            $this->db->where('user_id', $user_id);
            $this->db->delete('user');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Berhasil menghapus !</div>');
            redirect('admin/table');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Gagal menghapus !</div>');
            redirect('admin/table');
        }
    }
}
