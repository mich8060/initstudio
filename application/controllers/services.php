<?php

class Services extends CI_Controller {

	function index() {
		$this->load->view('services/suggestqueries');
	}
	
}