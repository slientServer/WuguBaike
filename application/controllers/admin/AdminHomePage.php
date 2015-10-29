<?php
// 管理主页
class AdminHomePage extends CI_Controller{
	
	public function index($user_name= 'NaN', $show_text= ''){

		if($user_name){

			$this->load->helper('url');
			$this->load->model('data_model');
			$data['user_name']= $user_name;

			$data['wugu_info']= $this->data_model->getWuguInfo();

			$this->load->view('templates/header');
	        $this->load->view('pages/admin_home_page', $data);
	        $this->load->view('templates/footer');
		}

		if($show_text){
			echo '<script type="text/javascript">alert("'.$show_text.'");</script>';
		}
		
	}

	public function edit($item_id, $user_name){

		$this->load->helper(array('url', 'form'));
		$this->load->model('data_model');
		$data['item']= $this->data_model->getWuguInfo($item_id);
		$data['user_name']= $user_name;

		$this->load->view('templates/header');
		$this->load->view('pages/wugu_edit', $data);
		$this->load->view('templates/footer');
	}


}

?>