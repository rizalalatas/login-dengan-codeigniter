<?php

class Login_model extends CI_Model{
	public function check_login($username, $password)
	{
		return $this->db->query("SELECT * FROM login WHERE username = '$username' AND password = '$password'")->result();
	}
}