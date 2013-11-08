<?php

class Collections_model extends CI_Model {
	
	function read() {
		$query = $this->db->query('SELECT * FROM collection ORDER BY id DESC LIMIT 60'); 
		if ($query->num_rows() > 0) {
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
		
	}
	
}