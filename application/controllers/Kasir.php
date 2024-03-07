<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kasir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
        $this->load->model('Kasir_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $dat['title'] = 'pelanggan';
        $dat['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $dat);
        $this->load->view('kasir/index');
        $this->load->view('templates/footer');
    }

    public function menu()
    {
        $data['title'] = 'Menu';
        $data['data'] = $this->Kasir_model->getAllMenu();

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('kasir/menu', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_ke_keranjang($id)
    {
        $menu = $this->Kasir_model->find($id);

        $data = array(
            'id'      => $menu->menu_id,
            'qty'     => 1,
            'price'   => $menu->harga,
            'name'    => $menu->nama
        );

        $this->cart->insert($data);
        redirect('kasir/menu');
    }

    public function detai_keranjang()
    {
        $data = [
            'title' => 'Detail Keranjang',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('kasir/keranjang', $data);
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('kasir/menu');
    }

    public function pembayaran()
    {
        $data = [
            'title' => 'Pembayaran',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('kasir/pembayaran', $data);
        $this->load->view('templates/footer');
    }

    public function proses_pemesanan()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');

        if ($this->form_validation->run() == true) {
            $this->Kasir_model->bayar();
            $this->cart->destroy();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Berhasil menambah!</div>');
            redirect('kasir/bayar');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Gagal menambah!</div>');
            redirect('kasir/pembayaran');
        }
    }

    public function bayar()
    {
        $data = [
            'title' => 'Pembayaran',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'pembayaran' => $this->Kasir_model->getTransaksi()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('kasir/bayar', $data);
        $this->load->view('templates/footer');
    }

    public function detail($transaksi_id)
    {
        $data = [
            'title' => 'Pembayaran',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
            'pembayaran' => $this->Kasir_model->ambil_id_tran($transaksi_id),
            'pesan' => $this->Kasir_model->ambil_id_pesan($transaksi_id)
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('kasir/detail_pemesanan', $data);
        $this->load->view('templates/footer');
    }
}
