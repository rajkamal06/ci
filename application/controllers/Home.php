<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('home_model'); //to call the model
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
		$this->load->library('session');
    }

	public function index()
	{
		// $this->load->view('user/home.php');
		$list=array();
		$this->db->where('status',1);
		$query = $this->db->get('product');
		$data = $query->result();
		$list['data']=$data; 
		

		$this->load->view('user/home.php',$list);
		
		

	}
	public function product_details($id)
	{
	
		$list=array();
		$this->db->where('id',$id);
		$this->db->from('product');
		$query = $this->db->get()->row_array();
		$list['data']=$query;
		$this->load->view('front/page/shop.php',$list);
		
		

	}

	public function register()	{

		$this->load->view('front/page/register.php');
	}
	public function login()	{

		$this->load->view('front/page/register.php');
	}
	public function account()	{

		$this->load->view('front/page/account.php');
	}
	public function shop()	{

		$this->load->view('front/page/shop.php');
	}
	public function about_us()	{

		$this->load->view('front/page/about_us.php');
		
	}
	public function privacy_policy()	{

		$this->load->view('front/page/privacy_policy.php');
		
	}
	public function gallery()	{

		$this->load->view('front/page/gallery.php');
		
	}
	public function contact()	{

		$this->load->view('front/page/contact.php');
		
	}
	public function shop_2()	{

		$this->load->view('front/page/shop_2.php');
		
	}

	
     public function cart()	{

		$list=array();
		$user_id=$this->session->userdata('id');

		$this->db->where('user_id', $user_id);
		$query = $this->db->get('cart');
		$data=$query->result();
		$list['data']=$data; 
		$this->load->view('front/page/cart.php',$list);
		
	}
	public function checkout()	{

		$this->load->view('front/page/checkout.php');
		
	}
	public function delete($id)
	{
		$this->home_model->deleterecords($id);
		redirect("home/cart");
		
	}




}

?>






