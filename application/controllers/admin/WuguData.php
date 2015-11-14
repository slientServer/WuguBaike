<?php
//五谷百科页面数据存储
//redirect url 第二个参数代表alert文本
class WuguData extends CI_Controller{

	public function index(){

		$this->load->helper('url');
		$this->load->model('Data_model');

		$wugu_id= $_POST["wugu_id"];
		$wugu_position= $_POST["wugu_position"];
		$wugu_name= $_POST["wugu_name"];
		$wugu_alias= $_POST["wugu_alias"];
		$wugu_location= $_POST["wugu_location"];
		$wugu_method= $_POST["wugu_method"];
		$wugu_link= $_POST["wugu_link"];
		$wugu_img= $_POST["wugu_img"];
		$wugu_value= $_POST["wugu_value"];
		$wugu_prescription= $_POST["wugu_prescription"];
		$user_name= $_POST["user_name"];
		$list_tab_id= $_POST["list_tab_id"];


		$data= array('baike_location'=> $wugu_location, 'baike_name'=> $wugu_name,
					'baike_alias'=> $wugu_alias, 'baike_position'=> $wugu_position, 'baike_method'=> $wugu_method,
					'baike_link'=> $wugu_link, 'baike_img'=> $wugu_img, 'baike_value'=> $wugu_value, 
					'baike_prescription'=> $wugu_prescription);
		$str=$this->Data_model->updateData('baike', $data, 'baike_id="'.$wugu_id.'"');
		if($str==1){
			redirect('admin/AdminHomePage/index/'.$user_name.'/Saved/'.$list_tab_id);
		}else{
			redirect('admin/AdminHomePage/index/'.$user_name.'/Failed/'.$list_tab_id);
		}
	}

	public function delete($item_id, $user_name, $list_tab_id){

		$this->load->helper('url');
		$this->load->model('Data_model');
		$res=$this->Data_model->deleteData('baike', 'baike_id="'.$item_id.'"');
		if($res){
			redirect('admin/AdminHomePage/index/'.$user_name.'/Deleted/'.$list_tab_id);
		}else{
			redirect('admin/AdminHomePage/index/'.$user_name.'/Failed/'.$list_tab_id);
		}
	}

	public function add(){
		$this->load->helper('url');
		$this->load->model('Data_model');

		$wugu_id= $_POST["wugu_id"];
		$wugu_position= $_POST["wugu_position"];
		$wugu_name= $_POST["wugu_name"];
		$wugu_alias= $_POST["wugu_alias"];
		$wugu_location= $_POST["wugu_location"];
		$wugu_method= $_POST["wugu_method"];
		$wugu_link= $_POST["wugu_link"];
		$wugu_img= $_POST["wugu_img"];
		$wugu_value= $_POST["wugu_value"];
		$wugu_prescription= $_POST["wugu_prescription"];
		$user_name= $_POST["user_name"];
		$list_tab_id= $_POST["list_tab_id"];

		$data= array('baike_id' => $wugu_id, 'baike_location'=> $wugu_location, 'baike_name'=> $wugu_name,
					'baike_alias'=> $wugu_alias, 'baike_position'=> $wugu_position, 'baike_method'=> $wugu_method,
					'baike_link'=> $wugu_link, 'baike_img'=> $wugu_img, 'baike_value'=> $wugu_value, 
					'baike_prescription'=> $wugu_prescription);
		$str=$this->Data_model->insertData('baike', $data);
		if($str==1){
			redirect('admin/AdminHomePage/index/'.$user_name.'/Saved/'.$list_tab_id);
		}else{
			redirect('admin/AdminHomePage/index/'.$user_name.'/Failed/'.$list_tab_id);
		}
	} 
}

?>

