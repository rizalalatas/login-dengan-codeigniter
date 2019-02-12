<?php

class Administrator extends CI_Controller{
		public function __construct()
		{
			parent:: __construct();
			$this->load->model('Login_model');
		}


	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		if (isset($_POST['submit'])){
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$check = $this->Login_model->check_login($username, $password);
		
		if (!$check){
			redirect('Administrator');

		}else{
			$data = array (

				"username" => $username,
				"password" => $password,
				"is_login" => TRUE,

			);

			$this->session->set_userdata($data);
			redirect('Home');
		}

		}
	}
}