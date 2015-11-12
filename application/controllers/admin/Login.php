<?php
// Login Page

class Login extends CI_Controller{

    public function __construct(){
        parent::__construct();
    } 
    
    public function loginView($page = 'login'){

        $this->load->library('session');

        if(isset($_SESSION['username'])){
            
            redirect('admin/AdminHomePage/index/'.$_SESSION['username']);

        }else{
            
            if( ! file_exists(APPPATH.'/views/pages/'.$page.'.php')){
                show_404();
            }
            $this->load->helper('url');
            $this->load->helper('form');
           
            $this->load->view('templates/header');
            $this->load->view('pages/'.$page);
            $this->load->view('templates/footer');

        }
    }
}

?>