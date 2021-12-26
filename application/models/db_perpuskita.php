<?php
defined('BASEPATH') or exit('No direct script access allowed');

class db_perpuskita extends CI_Model
{
    function read()
    {
        $this->db->order_by('nama_peminjam', 'asc');
        return $this->db->get('data_buku')->result_array();
    }

    function read_user()
    {
        return $this->db->get('user')->result_array();
    }

    function register()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            $this->session->set_flashdata('pesan', 'username_exist');
            redirect('perpuskita/signup', 'refresh');
        }

        $data = [
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT)

        ];

        $this->db->insert('user', $data);
        redirect('perpuskita/login', 'refresh');
    }

    function create()
    {
        $nama_peminjam = $this->input->post('name');
        $tgl_peminjam = $this->input->post('datestart');
        $nama_buku = $this->input->post('buku');
        $pengarang = $this->input->post('pengarang');
        $tgl_pengembalian = $this->input->post('dateend');
        $keterangan = $this->input->post('keterangan');

        $data = [
            'nama_peminjam' => $nama_peminjam,
            'tgl_peminjam' => $tgl_peminjam,
            'nama_buku' => $nama_buku,
            'pengarang' => $pengarang,
            'tgl_pengembalian' => $tgl_pengembalian,
            'keterangan' => $keterangan
        ];

        $this->db->insert('data_buku', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Ditambah');
            redirect('perpuskita/', 'refresh');
        }
    }

    function get_row($id)
    {
        return $this->db->get_where('data_buku', ['id' => $id])->row_array();
    }

    function update()
    {
        $nama_peminjam = $this->input->post('name');
        $tgl_peminjam = $this->input->post('datestart');
        $nama_buku = $this->input->post('buku');
        $pengarang = $this->input->post('pengarang');
        $tgl_pengembalian = $this->input->post('dateend');
        $keterangan = $this->input->post('keterangan');

        $data = [
            'nama_peminjam' => $nama_peminjam,
            'tgl_peminjam' => $tgl_peminjam,
            'nama_buku' => $nama_buku,
            'pengarang' => $pengarang,
            'tgl_pengembalian' => $tgl_pengembalian,
            'keterangan' => $keterangan
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('data_buku', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Diubah');
            redirect('perpuskita/', 'refresh');
        }
    }

    function eliminate($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('data_buku');
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Dihapus');
            redirect('perpuskita/', 'refresh');
        }
    }
}
