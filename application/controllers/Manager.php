<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Manager extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
        $this->load->model('Manager_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $dat['title'] = 'Manager';
        $dat['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        
        $tanggalAwal = $this->input->post('tanggalAwal');
        $tanggalAkhir = $this->input->post('tanggalAkhir');

        $data['dataFilter'] = $this->Manager_model->getAllTransaksi();
        if ($tanggalAwal) {
            $data['dataFilter'] = $this->Manager_model->filterByTanggal($tanggalAwal, $tanggalAkhir);
        }
        
        $this->load->view('templates/header', $dat);
        $this->load->view('manager/index',$data);
        $this->load->view('templates/footer');
    }
    
    // public function tanggalfilter(){
    //     $data['title'] = 'Manager';
    //     $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    //     $tanggalAwal = $this->input->post('tanggalAwal');
    //     $tanggalAkhir = $this->input->post('tanggalAkhir');
    //     $data ['dataFilter'] = $this->Manager_model->filterByTanggal($tanggalAwal, $tanggalAkhir);
        
    //     // if ($tanggalAwal and $tanggalAkhir = null) {
    //     //     $data['dataFilter'] = 'null';
    //     // } else {
    //     // }
        
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('manager/index',$data);
    //     $this->load->view('templates/footer');
    // }

    public function menu()
    {
        $data['title'] = 'Menu';
        $data['data'] = $this->Manager_model->getAllMenu();

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('manager/menu', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'trim|required');
        $this->form_validation->set_rules('stok', 'Stok', 'trim|required');

        if ($this->form_validation->run() == TRUE) {
            $nama       = $this->input->post('nama');
            $kategori   = $this->input->post('kategori');
            $harga      = $this->input->post('harga');
            $stok       = $this->input->post('stok');
            $status     = $this->input->post('status');
            $gambar     = $_FILES['gambar']['name'];
            if ($gambar) {
                $config['upload_path']      = './assets/img/uploads';
                $config['allowed_types']    = 'jpg|jpeg|png';
                $config['max_size']         = 2048;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar')) {
                    $gambar = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Gagal DiUpload!</div>');
                }
            }

            $data = array(
                'nama' => $nama,
                'kategori' => $kategori,
                'harga' => $harga,
                'stok' => $stok,
                'status' => $status,
                'gambar' => $gambar

            );


            $this->Manager_model->tambahMenu($data, 'menu');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Berhasil menambah!</div>');
            redirect('manager/menu');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Gagal menambah!</div>');
            redirect('manager/menu');
        }
    }

    // public function edit()
    // {
    //     $this->form_validation->set_rules('nama', 'Nama', 'required');
    //     $this->form_validation->set_rules('harga', 'Harga', 'trim|required');
    //     $this->form_validation->set_rules('stok', 'Stok', 'trim|required');

    //     if ($this->form_validation->run() == TRUE) {
    //         $this->Manager_model->editMenu();
    //         $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Berhasil mengedit!</div>');
    //         redirect('manager/menu');
    //     } else {
    //         $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Gagal mengedit!</div>');
    //         redirect('manager/menu');
    //     }
    // }

    public function edit()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'trim|required');
        $this->form_validation->set_rules('stok', 'Stok', 'trim|required');


        if ($this->form_validation->run() == TRUE) {
            $menu_id    = $this->input->post('menu_id');
            $nama       = $this->input->post('nama');
            $kategori   = $this->input->post('kategori');
            $harga      = $this->input->post('harga');
            $stok       = $this->input->post('stok');
            $status     = $this->input->post('status');
            $gambar     = $_FILES['gambar']['name'];
            if ($gambar) {
                $config['upload_path']      = './assets/img/uploads/';
                $config['max_size']         = 2048;
                $config['allowed_types']    = 'jpg|jpeg|png';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar')) {
                    $item['data'] = $this->Manager_model->getAllMenu();
                    if ($item['gambar'] != null) {
                        $target_file = './assets/img/uploads/' . $item['gambar'];
                        unlink($target_file);
                    }
                    $gambar = $this->upload->data('file_name');
                    // $this->db->set('gambar', $gambar);
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Gagal DiUpload!</div>');
                }
            }

            // $this->db->set('nama', $nama);
            // $this->db->set('kategori', $kategori);
            // $this->db->set('harga', $harga);
            // $this->db->set('stok', $stok);
            // $this->db->set('status', $status);
            $data = array(
                'nama' => $nama,
                'kategori' => $kategori,
                'harga' => $harga,
                'stok' => $stok,
                'status' => $status,
                'gambar' => $gambar
            );

            $this->db->where('menu_id', $menu_id);
            $this->db->update('menu', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Berhasil mengedit!</div>');
            redirect('manager/menu');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Gagal mengedit!</div>');
            redirect('manager/menu');
        }
    }

    public function deleteMenu($menu_id)
    {
        $this->db->where('menu_id', $menu_id);
        $this->db->delete('menu');
        $this->session->set_flashdata('flash', 'Berhasil DiHapus');
        redirect('manager/menu');
    }
}
