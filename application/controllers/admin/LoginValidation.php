<?php
	// 登录验证
	
class LoginValidation extends CI_Controller{

	public function index(){

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', '用户名', 'required|max_length[12]|callback_login_validation['.$_POST['userpwd'].']', 
										 array('required'=> '请输入%s！', 'max_length'=> '最大字符长度{param}！'));
		$this->form_validation->set_rules('userpwd', '密码', 'required', array('required'=>'请输入%s！'));

		if($this->form_validation->run()== TRUE){
			
			echo '验证成功！';

		}else{

			$this->load->view('templates/header');
	        $this->load->view('pages/login');
	        $this->load->view('templates/footer');

		}
	}

	public function login_validation($username, $userpwd){

		if($this->form_validation->required($userpwd)){
			
			$this->load->model('data_model');
			$res= $this->data_model->queryData('select * from user');
			foreach ($res->result() as $row) {
				if($row-> user_name== $username && $row->user_pwd== $userpwd){
					return TRUE;
				}
			}
			$this->form_validation->set_message('login_validation', '用户名或密码错误！');
			return FALSE;

		}else{
			$this->form_validation->set_message('login_validation', '');
			return FALSE;
		}
	}
}


?>
