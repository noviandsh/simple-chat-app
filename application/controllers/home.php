<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function __construct(){
		parent::__construct();
	 	$this->load->helper('url');
	 	$this->load->helper('form');
	 	$this->load->model('crud_model');
	 	if (isset($_SESSION['username'])) {
	 		redirect(base_url('room'));
	 	}
 	}
	public function index()
	{
		$this->load->view('home');
	}
	public function login()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$data = $this->crud_model->GetWhere("akun", array('username' => $username, 'password' => $password));
		if (count($data) == 1) {
			$this->session->set_userdata('username', $data[0]['username']);
        	redirect(base_url('room'));
		}else{
			$this->session->set_flashdata('error', 'Username dan Password salah');
        	redirect(base_url());
		}
	}
	public function daftar()
	{
		$akun = array(
			'username' => $_POST['username'],
			'password' => $_POST['password']
		);
		$daftar = $this->crud_model->Insert('akun', $akun);
		if ($daftar) {
			redirect(base_url('room'));
		}else{
			$this->session->set_flashdata('error', 'Username telah terpakai');
        	redirect(base_url());
		}
	}
}
