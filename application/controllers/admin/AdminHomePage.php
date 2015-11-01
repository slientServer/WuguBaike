<?php
// 管理主页
class AdminHomePage extends CI_Controller{
	
	public function index($user_name= 'NaN', $show_text= 'NaN', $list_tab_id= ''){

		$this->load->library('session');
		$this->load->helper('url');

		if(isset($_SESSION['username'])){

			if($user_name){

				$this->load->model('data_model');
				$data['user_name']= $_SESSION['username'];
				$data['list_tab_id']= $list_tab_id;

				$data['wugu_info']= $this->data_model->getWuguInfo();
				$data['xiaofang_info']= $this->data_model->getXiaofangInfo();
				$data['baojianpin_info']= $this->data_model->getBaojianpinInfo();

				$this->load->view('templates/header');
				$this->load->view('pages/hint_handle', array('hintInfo'=> $show_text));
		        $this->load->view('pages/admin_home_page', $data);
		        $this->load->view('templates/footer');
			}
		}else{
			redirect('admin/Login/loginView');
		}

	}

	public function edit($item_id, $user_name, $list_tab_id, $prefix){

		$this->load->helper(array('url', 'form'));
		$this->load->model('data_model');
		if($prefix== 'baike'){
			$data['item']= $this->data_model->getWuguInfo($item_id);
		}else if($prefix== 'xiaofang'){
			$data['item']= $this->data_model->getXiaofangInfo($item_id);
		}else if($prefix== 'baojianpin'){
			$data['item']= $this->data_model->getBaojianpinInfo($item_id);
		}
		$data['user_name']= $user_name;
		$data['list_tab_id']= $list_tab_id;

		$this->load->view('templates/header');
		if($prefix== 'baike'){
			$this->load->view('pages/wugu_edit', $data);
		}else if($prefix== 'xiaofang'){
			$this->load->view('pages/wugu_xiaofang_edit', $data);
		}else if($prefix== 'baojianpin'){
			$this->load->view('pages/wugu_baojianpin_edit', $data);
		}
		$this->load->view('templates/footer');
	}


}

?>