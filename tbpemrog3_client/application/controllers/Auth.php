<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model'); 
        $this->load->library('form_validation'); //load fom validation
		$this->load->library('session');
    }

	public function index()
	{
		if ($this->session->userdata('KEY') == '') {
			$this->load->view('login');
		}
		else {
			redirect('dashboard');
		}
	}

	public function login() {
		$data = [
			"username" => $this->input->post('username'),
			"password" => $this->input->post('password'),
		];

		$insert = $this->Auth_model->loginAttempt($data);
		if($insert['status'] == 'Login Berhasil'){
			$this->session->set_flashdata('flash','Login Berhasil!');
			$this->session->set_userdata('KEY', $insert['data']['key']);
			redirect('dashboard');
		}elseif ($insert['status'] == 'Login Gagal') {
			$this->session->set_flashdata('message','Username atau Password Salah!');
			redirect('auth');
		}else{
			$this->session->set_flashdata('message', 'Login Error!');
			redirect('auth');
		}
	}

	public function logout() {
		$this->session->unset_userdata('KEY', $insert['data']['key']);
		redirect('auth');
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function registerAttempt()
	{
		$data = [
			"name" => $this->input->post('name'),
			"dob" => $this->input->post('dob'),
			"gender" => $this->input->post('gender'),
			"email" => $this->input->post('email'),
			"username" => $this->input->post('username'),
			"password" => $this->input->post('password'),
		];

		$insert = $this->Auth_model->registerAttempt($data);
		if($insert['status'] == 'Register Berhasil'){
			$this->session->set_flashdata('flash','Register Berhasil!');
			redirect('dashboard');
		}elseif ($insert['status'] == 'Register Gagal') {
			$this->session->set_flashdata('message','Inputan tidak boleh ada yang kosong!');
			redirect('auth/register');
		}else{
			$this->session->set_flashdata('message', 'Register Error!');
			redirect('auth/register');
		}
	}
}
