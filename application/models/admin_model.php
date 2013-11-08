<?php

class Admin_model extends CI_Model {
	
	function read() {
		$query = $this->db->query('SELECT * FROM simpleurl');
		if ($query->num_rows() > 0) {
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
	}
	
}