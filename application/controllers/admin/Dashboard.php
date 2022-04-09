<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
        parent::__construct();
		//$this->load->model('user_model'); //to call the model
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
		$this->load->library('session');
    }
    public function index()
	{
		
		$this->load->view('admin/dashboard/index.php');
	}
    // public function test()
	// {
	// 	$this->load->view('admin/dashboard/dashboard.php');
	// }
}