<?php
//登录表单验证

class FormValidation extends CI_Controller{

    public function index(){
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        if(!$this->userValidation()){
            global $errorInfo;
            $GLOBALS['errorInfo']='用户名或密码错误！';
            $this->load->view('templates/header');
            $this->load->view('pages/login');
            $this->load->view('templates/footer');
        }else{
            $this->load->view('pages/validationSuccess');
        }
    }

    private function userValidation(){
        $username= trim($_POST['username']);
        $pwd= trim($_POST['password']);
        $this->load->model('data_model');
        $res= $this->data_model->queryData('select * from user;');
        foreach ($res->result() as $row) {
            if($row->user_name== $username && $row->user_pwd== $pwd){
                return true;
            }
        }
        return false;
    }

}

?>