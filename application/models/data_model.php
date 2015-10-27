<?php
//数据库处理model

class data_model extends CI_Model{
	
	public function __construct(){
		//call the CI_Model constructor
		$this->load->database();
	}

	public function queryData($sql){
		$queryResult= $this->db->query($sql);
		return $queryResult;
	}

	public function insertData($table_name= 'baike', $data){
		$str= $this->db->insert($table_name, $data);
		return $str;
	}

	public function updateData($table_name= 'baike', $data, $id){
		$str= $this->db->update($table_name, $data, $id);
		return $str;
	}

	public function getWuguInfo($baike_id= FALSE){

		  if ($baike_id === FALSE){
		        $query = $this->db->get('baike');
		        return $query->result();
		   }

		  $query = $this->db->get_where('baike', array('baike_id' => $baike_id));
		  return $query->result();
	}
}