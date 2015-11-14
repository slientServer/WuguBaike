<?php

class SessionDestroy extends CI_Controller{

	public function __construct(){
        parent::__construct();
    }

	public function index($page= 'Login/loginView'){
		
		session_start();
		unset($_SESSION['username']);
		session_destroy();

		$this->load->helper('url');
		redirect('admin/'.$page);
	}
}

?>