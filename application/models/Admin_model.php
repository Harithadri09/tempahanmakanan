<?php
class Admin_model extends CI_Model
{
    public function getAllUser()
    {
        $this->db->order_by('user_id ASC');
        return $this->db->get('user')->result_array();
    }

    public function getAllLog()
    {
        $this->db->order_by('tanggal DESC');
        $this->db->order_by('waktu DESC');
        $this->db->from('user');
        $this->db->join('log_aktifitas', 'log_aktifitas.user_id = user.user_id');
        return $this->db->get('')->result_array();
    }

    public function tambahUser()
    {
        $data = [
        'user_id' => $this->input->post('user_id', true),
        'nama' => $this->input->post('nama', true),
        'username' => $this->input->post('username', true),
        'password' => $this->input->post('password', true),
        'status' => $this->input->post('status', true),
        'user_role' => $this->input->post('user_role', true)
        ];
          
        $this->db->insert('user', $data);
    }

}
