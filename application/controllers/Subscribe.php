<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('home_model'); //to call the model
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
		$this->load->library('session');
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
    }
	// public function registration()
	// {
    //     $this->load->view('front/include/footer.php');
    //   }


 public function store()
 {
   
         $array=array();
         $chek=$this->home_model->check_subscribe($this->input->post('email'));
         if(count((array)$chek)>0)
         {
             echo json_encode(array('status'=>0,"message"=>"Already exists"));
         } 
         else
         {
         $array['email']=$this->input->post('email');
         $this->home_model->insert_data($array);
         echo json_encode(array('status'=>1,"message"=>"Congratulations!! Subscribed Successfully"));
         }
}
 
 
}
?>