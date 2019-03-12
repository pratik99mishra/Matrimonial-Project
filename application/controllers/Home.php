<?php

class Home extends CI_Controller{

	public function index()
	{
		$this->load->view('Home-index');
	}

	public function add()
	{
		echo "Add function of Blog controller";
	}
}