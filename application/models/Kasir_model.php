<?php
class Kasir_model extends CI_Model
{
    public function getAllMenu()
    {
        $this->db->order_by('menu_id asc');
        return $this->db->get('menu')->result_array();
    }

    public function tambahMenu()
    {
        $data = [
            'menu_id' => $this->input->post('menu_id', true),
            'nama' => $this->input->post('nama', true),
            'kategori' => $this->input->post('kategori', true),
            'harga' => $this->input->post('harga', true),
            'status' => $this->input->post('status', true)
        ];

        $this->db->insert('menu', $data);
    }

    public function editMenu()
    {
        // $menu_id = $this->input->post('menu_id', true);
        // $nama = $this->input->post('nama', true);
        // $kategori = $this->input->post('kategori', true);
        // $harga = $this->input->post('harga', true);
        // $status = $this->input->post('status', true);

        // $data = [
        //     'menu_id' => $menu_id,
        //     'nama' => $nama,
        //     'kategori' => $kategori,
        //     'harga' => $harga,
        //     'status' => $status
        // ];
        // $this->db->where('menu_id', $menu_id);
        // $this->db->update('menu', $data);

        $data = [
            'nama' => $this->input->post('nama', true),
            'kategori' => $this->input->post('kategori', true),
            'harga' => $this->input->post('harga', true),
            'status' => $this->input->post('status', true)
        ];

        $this->db->where('menu_id', $this->input->post('menu_id'));
        $this->db->update('menu', $data);
    }

    public function find($id)
    {
        $result = $this->db->where('menu_id', $id)
            ->limit(1)
            ->get('menu');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function getTransaksi()
    {
        $this->db->order_by('transaksi_id desc');
        return $this->db->get('transaksi')->result_array();
    }

    public function bayar()
    {
        $name = $this->input->post('name', true);
        $no_meja = $this->input->post('no_meja', true);

        // $total = 0;
        // foreach ($this->cart->contents() as $item) {
        //     $subtotal = $item['qty'] * $item['price'];
        //     $me = $total + $subtotal;

            $tran = array(
                'name' => $name,
                'no_meja' => $no_meja,
                // 'total_pembayaran' => $me
            );
            $this->db->insert('transaksi', $tran);
        // }

        $id_pesan = $this->db->insert_id();

        foreach ($this->cart->contents() as $item) {
            $data = array(
                'id_pesan'   => $id_pesan,
                'menu_id'    => $item['id'],
                'nama'       => $item['name'],
                'jumlah'     => $item['qty'],
                'harga'      => $item['price']
            );

            $this->db->insert('pemesanan', $data);
        }
        return true;
    }

    public function ambil_id_tran($transaksi_id)
    {
        $result = $this->db->where('transaksi_id', $transaksi_id)->limit(1)->get('transaksi');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    public function ambil_id_pesan($transaksi_id)
    {
        $result = $this->db->where('id_pesan', $transaksi_id)->get('pemesanan');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
