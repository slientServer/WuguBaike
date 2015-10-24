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
}