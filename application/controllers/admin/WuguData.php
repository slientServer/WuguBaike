<?php
//五谷百科页面数据存储
class WuguData extends CI_Controller{

	public function index(){

		$this->load->model('data_model');

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


		$data= array('baike_location'=> $wugu_location, 'baike_name'=> $wugu_name,
					'baike_alias'=> $wugu_alias, 'baike_position'=> $wugu_position, 'baike_method'=> $wugu_method,
					'baike_link'=> $wugu_link, 'baike_img'=> $wugu_img, 'baike_value'=> $wugu_value, 
					'baike_prescription'=> $wugu_prescription);
		$str=$this->data_model->updateData('baike', $data, 'baike_id='.$wugu_id);
		if($str==1){
			echo '保存成功！';
		}else{
			echo '保存失败！';
		}
	} 
}

?>

