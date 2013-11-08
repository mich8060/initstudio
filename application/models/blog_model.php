<?php

class Blog_model extends CI_Model {
	
	function read() {
		$query = $this->db->query('SELECT * FROM blog WHERE url = "'.$this->uri->segment(1).'"');
		if ($query->num_rows() > 0) {
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
	}
	
	function recent() {
		$query = $this->db->query('SELECT * FROM blog ORDER BY id DESC LIMIT 5');
		if ($query->num_rows() > 0) {
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}		
	}
	
}