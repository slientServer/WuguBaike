<?php
//五谷百科页面数据存储
//redirect url 第二个参数代表alert文本
class BaojianpinData extends CI_Controller{

	public function index(){

		$this->load->helper('url');
		$this->load->model('data_model');

		$baojianpin_id= $_POST["baojianpin_id"];
		$baojianpin_name= $_POST["baojianpin_name"];
		$baojianpin_enname= $_POST["baojianpin_enname"];
		$baojianpin_position= $_POST["baojianpin_position"];
		$baojianpin_tiaoma= $_POST["baojianpin_tiaoma"];
		$baojianpin_pinpai= $_POST["baojianpin_pinpai"];
		$baojianpin_value= $_POST["baojianpin_value"];
		$baojianpin_buy= $_POST["baojianpin_buy"];
		$user_name= $_POST["user_name"];
		$list_tab_id= $_POST['list_tab_id'];


		$data= array('baojianpin_name'=> $baojianpin_name, 'baojianpin_position'=> $baojianpin_position,
			'baojianpin_tiaoma'=> $baojianpin_tiaoma, 'baojianpin_pinpai'=> $baojianpin_pinpai, 
			'baojianpin_value'=> $baojianpin_value, 'baojianpin_buy'=> $baojianpin_buy,
			'baojianpin_enname'=> $baojianpin_enname);
		$str=$this->data_model->updateData('baojianpin', $data, 'baojianpin_id="'.$baojianpin_id.'"');
		if($str==1){
			redirect('admin/AdminHomePage/index/'.$user_name.'/Saved/'.$list_tab_id);
		}else{
			redirect('admin/AdminHomePage/index/'.$user_name.'/Failed/'.$list_tab_id);
		}
	}

	public function delete($item_id, $user_name, $list_tab_id){

		$this->load->helper('url');
		$this->load->model('data_model');
		$res=$this->data_model->deleteData('baojianpin', 'baojianpin_id="'.$item_id.'"');
		if($res){
			redirect('admin/AdminHomePage/index/'.$user_name.'/Deleted/'.$list_tab_id);
		}else{
			redirect('admin/AdminHomePage/index/'.$user_name.'/Failed/'.$list_tab_id);
		}
	}

	public function add(){
		$this->load->helper('url');
		$this->load->model('data_model');

		$baojianpin_id= $_POST["baojianpin_id"];
		$baojianpin_name= $_POST["baojianpin_name"];
		$baojianpin_enname= $_POST["baojianpin_enname"];
		$baojianpin_position= $_POST["baojianpin_position"];
		$baojianpin_tiaoma= $_POST["baojianpin_tiaoma"];
		$baojianpin_pinpai= $_POST["baojianpin_pinpai"];
		$baojianpin_value= $_POST["baojianpin_value"];
		$baojianpin_buy= $_POST["baojianpin_buy"];
		$user_name= $_POST["user_name"];
		$list_tab_id= $_POST['list_tab_id'];

		$data= array('baojianpin_id' => $baojianpin_id, 'baojianpin_name'=> $baojianpin_name, 
			'baojianpin_tiaoma'=> $baojianpin_tiaoma, 'baojianpin_pinpai'=> $baojianpin_pinpai, 
			'baojianpin_value'=> $baojianpin_value, 'baojianpin_buy'=> $baojianpin_buy,
			'baojianpin_position'=> $baojianpin_position, 'baojianpin_enname'=> $baojianpin_enname);
		$str=$this->data_model->insertData('baojianpin', $data);
		if($str==1){
			redirect('admin/AdminHomePage/index/'.$user_name.'/Saved/'.$list_tab_id);
		}else{
			redirect('admin/AdminHomePage/index/'.$user_name.'/Failed/'.$list_tab_id);
		}
	} 
}

?>

