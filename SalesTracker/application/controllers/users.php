<?php

class Users extends CI_Controller {	

	public function view($page = 'home') {
		$data['title'] = "Login Page";
		
		$this->load->view('templates/header', $data);
		$this->load->view('users/login', $data);
		$this->load->view('templates/footer', $data);
	}
}