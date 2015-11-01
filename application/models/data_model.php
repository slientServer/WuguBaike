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

	public function updateData($table_name= 'baike', $data, $statement){
		$str= $this->db->update($table_name, $data, $statement);
		return $str;
	}

	public function deleteData($table_name= 'baike', $statement){

		$count_pre= $this->db->count_all($table_name);

		$this->db->delete($table_name, $statement);

		$count_aft= $this->db->count_all($table_name);

		return $count_pre> $count_aft;
	}

	public function getWuguInfo($baike_id= FALSE){

		  if ($baike_id === FALSE){
		        $query = $this->db->get('baike');
		        return $query->result();
		   }

		  $query = $this->db->get_where('baike', array('baike_id' => $baike_id));
		  return $query->result();
	}

	public function getXiaofangInfo($xiaofang_id= FALSE){
		 if ($xiaofang_id === FALSE){
		        $query = $this->db->get('xiaofang');
		        return $query->result();
		   }

		  $query = $this->db->get_where('xiaofang', array('xiaofang_id' => $xiaofang_id));
		  return $query->result();
	}

	public function getBaojianpinInfo($baojianpin_id= FALSE){
		 if ($baojianpin_id === FALSE){
		        $query = $this->db->get('baojianpin');
		        return $query->result();
		   }

		  $query = $this->db->get_where('baojianpin', array('baojianpin_id' => $baojianpin_id));
		  return $query->result();
	}
}