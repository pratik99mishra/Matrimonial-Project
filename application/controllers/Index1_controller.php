<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index1_controller extends CI_Controller {

	public function index()
	{
		//$this->load->helper('url');
		$this->load->view('Index1');
	}

}
