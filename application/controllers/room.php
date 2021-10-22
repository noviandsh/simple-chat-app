<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class room extends CI_Controller {
	public function __construct(){
		parent::__construct();
	 	$this->load->helper('url');
	 	$this->load->helper('form');
	 	$this->load->model('crud_model');
	 	date_default_timezone_set('Asia/Jakarta');
	 	if (!isset($_SESSION['username'])) {
			redirect(base_url(''));
		}
 	}
	public function index()
	{
		
		$chat = $this->crud_model->Get('obrolan');
		$data = array('chat' => $chat );
		$this->load->view('room', $data);
	}
	public function kirim()
	{
		$pesan = str_replace("\n", "<br />", $_POST['pesan']);
		$data = array(
			'username' => 'coba', 
			'pesan' => $pesan, 
			'tgl' => date("Y-m-d H:i:s")
		);
		$baru = $this->crud_model->Insert('obrolan', $data);
		redirect(base_url('room'));
	}
	public function logout() {
//        destroy session
        $this->session->sess_destroy();
//        redirect ke halaman login
        redirect(base_url());
    }
}
