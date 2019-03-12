<?php

class Blog extends CI_Controller
{

	public function index()
	{
		$this->load->model('authentication');
		$data = $this->authentication->getData();

		print_r($data);

		$this->load->view('Blog-index');
	}

	public function add()
	{
		echo "Add function of Blog controller";
	}
}