<?php
// 管理主页
class AdminHomePage extends CI_Controller{
	
	public function index($user_name= 'NaN', $show_text= 'NaN', $list_tab_id= ''){

		session_start();
		$this->load->helper('url');

		// if(isset($_SESSION['username'])){
		//虚拟云系统session无效
		if($user_name){

			if($user_name){

				$this->load->model('Data_model');
				$data['user_name']= $user_name;
				$data['list_tab_id']= $list_tab_id;

				$data['wugu_info']= $this->Data_model->getWuguInfo();
				$data['xiaofang_info']= $this->Data_model->getXiaofangInfo();
				$data['baojianpin_info']= $this->Data_model->getBaojianpinInfo();

				$this->load->view('templates/header');
				$this->load->view('pages/hint_handle', array('hintInfo'=> $show_text));
		        $this->load->view('pages/admin_home_page', $data);
		        $this->load->view('templates/footer');
			}
		}else{
			echo '1231';
			// redirect('admin/Login/loginView');
		}

	}

	public function edit($item_id, $user_name, $list_tab_id, $prefix){

		$this->load->helper(array('url', 'form'));
		$this->load->model('Data_model');
		if($prefix== 'baike'){
			$data['item']= $this->Data_model->getWuguInfo($item_id);
		}else if($prefix== 'xiaofang'){
			$data['item']= $this->Data_model->getXiaofangInfo($item_id);
		}else if($prefix== 'baojianpin'){
			$data['item']= $this->Data_model->getBaojianpinInfo($item_id);
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