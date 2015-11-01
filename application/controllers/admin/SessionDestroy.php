<?php

class SessionDestroy extends CI_Controller{

	public function __construct(){
        parent::__construct();
    }

	public function index($page= 'Login/loginView'){

		$this->load->library('session');

		unset($_SESSION['username']);
		session_destroy();

		$this->load->helper('url');
		echo 'fadsssssssssssssss';
		redirect('admin/'.$page);
	}
}

?>