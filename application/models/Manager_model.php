<?php
class Manager_model extends CI_Model
{
    public function getAllMenu()
    {
        $this->db->order_by('menu_id asc');
        return $this->db->get('menu')->result_array();
    }

    public function getAllTransaksi()
    {
        $this->db->order_by('transaksi_id DESC');
        return $this->db->get('transaksi')->result();
    }

    public function getTahun(){
        $query = $this->db->query("SELECT YEAR(tanggal_transaksi) AS tahun FROM transaksi GROUP BY YEAR(tanggal_transaksi) ORDER BY YEAR(tanggal_transaksi) ASC");
        return $query->result();
    }
    public function filterByTanggal($tanggalAwal,$tanggalAkhir){
        $query = $this->db->query("SELECT * FROM transaksi WHERE tanggal_transaksi BETWEEN '$tanggalAwal' AND '$tanggalAkhir' GROUP BY tanggal_transaksi ASC");
        return $query->result();
    }

    public function tambahMenu($data, $table)
    {
        $this->db->insert($table, $data);
    }

    // public function editMenu($data, $table)
    // {
    //     $this->db->update($table, $data);
    // }

    // public function tambahMenu()
    // {
    //     $data = [
    //         'menu_id' => $this->input->post('menu_id', true),
    //         'nama' => $this->input->post('nama', true),
    //         'kategori' => $this->input->post('kategori', true),
    //         'harga' => $this->input->post('harga', true),
    //         'stok' => $this->input->post('stok', true),
    //         'stok' => $this->input->post('stok', true),
    //         'status' => $this->input->post('status', true)
    //     ];

    //     $this->db->insert('menu', $data);
    // }

    // public function editMenu()
    // {
    //     // $menu_id = $this->input->post('menu_id', true);
    //     // $nama = $this->input->post('nama', true);
    //     // $kategori = $this->input->post('kategori', true);
    //     // $harga = $this->input->post('harga', true);
    //     // $status = $this->input->post('status', true);

    //     // $data = [
    //     //     'menu_id' => $menu_id,
    //     //     'nama' => $nama,
    //     //     'kategori' => $kategori,
    //     //     'harga' => $harga,
    //     //     'status' => $status
    //     // ];
    //     // $this->db->where('menu_id', $menu_id);
    //     // $this->db->update('menu', $data);

    //     $data = [
    //         'nama' => $this->input->post('nama', true),
    //         'kategori' => $this->input->post('kategori', true),
    //         'harga' => $this->input->post('harga', true),
    //         'stok' => $this->input->post('stok', true),
    //         'status' => $this->input->post('status', true)
    //     ];

    //     $this->db->where('menu_id', $this->input->post('menu_id'));
    //     $this->db->update('menu', $data);
    // }
}
