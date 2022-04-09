<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
    }


	public function index()
	{
		$this->load->view('home/user.php');
	}

	public function store()
	{
		// $this->form_validation->set_rules('name', 'Name', 'required');
		// $this->form_validation->set_rules('email', 'Email', 'required');
		// $this->form_validation->set_rules('mobile', 'Mobile', 'required');
		// $this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('registration/user.php');
		}	
		
		else
		{

		}

	}
}
?>