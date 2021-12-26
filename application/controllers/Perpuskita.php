<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perpuskita extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_perpuskita');
		$this->load->library('form_validation');
	}

	public function index()
	{
		if ($this->session->userdata('login') == '1') {
			$data['buku'] = $this->db_perpuskita->read();
			$this->load->view('header', $data);
			$this->load->view('home');
			$this->load->view('footer');
		} else {
			$this->session->set_flashdata('haveto_login', '2');
			redirect('perpuskita/login', 'refresh');
		}
	}

	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
		if (isset($_POST['login'])) {
			$this->get_in();
		}
	}

	public function get_in()
	{
		$username = $this->input->POST('username');
		$password = $this->input->POST('password');
		$user = $this->db->get_where('user', ['username' => $username])->row_array();

		if ($user) {
			if (password_verify($password, $user['password'])) {
				$this->session->set_userdata('login', '1');
				$this->session->set_userdata('username', $user['username']);
				redirect('', 'refresh');
			} else {
				$this->session->set_flashdata('wrong_password', '1');
				redirect('perpuskita/login', 'refresh');
			}
		}
	}

	public function signup()
	{
		$data['user'] = $this->db_perpuskita->read_user();
		$this->load->view('header', $data);
		$this->load->view('signup');
		$this->load->view('footer');
		if (isset($_POST['signup'])) {
			$this->validation();
		}
	}

	public function validation()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password]');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan', 'unmatching_password');
			redirect('perpuskita/signup', 'refresh');
		} else {
			$this->db_perpuskita->register();
		}
	}

	public function logout()
	{
		session_destroy();
		redirect('perpuskita/login', 'refresh');
	}

	public function add()
	{
		if ($this->session->userdata('login') == '1') {
			$data['buku'] = $this->db_perpuskita->read();
			$this->load->view('header', $data);
			$this->load->view('add');
			$this->load->view('footer');
			if (isset($_POST['add'])) {
				$this->db_perpuskita->create();
			}
		} else {
			$this->session->set_flashdata('haveto_login', '2');
			redirect('perpuskita/login', 'refresh');
		}
	}

	public function edit($id)
	{
		if ($this->session->userdata('login') == '1') {
			$data['buku'] = $this->db_perpuskita->get_row($id);
			$this->load->view('header', $data);
			$this->load->view('update');
			$this->load->view('footer');
			if (isset($_POST['edit'])) {
				$this->db_perpuskita->update();
			}
		} else {
			$this->session->set_flashdata('haveto_login', '2');
			redirect('perpuskita/login', 'refresh');
		}
	}

	public function remove($id)
	{
		if ($this->session->userdata('login') == '1') {
			$this->db_perpuskita->eliminate($id);
			redirect('perpuskita/', 'refresh');
		} else {
			$this->session->set_flashdata('haveto_login', '2');
			redirect('perpuskita/login', 'refresh');
		}
	}
}
