<?php
defined('BASEPATH') or exit('No direct script acces allowed');
class login extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function yuk_login()
	{
		$username = $this->input->post('username');
		$password  = $this->input->post('password');

		$pelajar = array("burhan@gmail.com", "amaw@gmail.com", "alvin@gmail.com");

		if (in_array($username, $pelajar)) {
			$this->session->set_userdata('username'.$username);
			redirect('login/hasil');
		}else {
			$this->load->view('login');
		}
		 }
		 public function hasil()
		 {
		 	$this->load->view('hasil');
		 }
		 public function logout()
		 {
		 $this->session->unset_userdata(array('username' =>''));
		 redirect('login');
		}
	}

 ?>