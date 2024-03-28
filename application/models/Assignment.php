<?php

class Assignment extends CI_Model {
	public function all($rows = 5){
		$rows = (int) $rows;
		$sql = "SELECT * FROM assignments LIMIT ?;";
		$query = $this->db->query($sql, [$rows]);
		return $query->result_array();
	}

	public function count(){
		$sql = "SELECT COUNT(*) as total FROM assignments;";
		$query = $this->db->query($sql);
		return (int) $query->row()->total;
	}

	public function getRows($num){
		$count = $this->count();
		if($count > $num){
			return $num + 5;
		}
		else {
			return $count;
		}
	}
}
