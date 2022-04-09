 <?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller {
 
     public function __construct() {
         parent::__construct();
         $this->load->model('register_model'); //to call the model
         $this->load->helper('url', 'form');
         $this->load->library('form_validation');
         $this->load->library('session');
     }


     public function index()
     {
         $this->load->view('front/page/register.php');
     }
 
     public function store()
     {
         $this->form_validation->set_rules('name', 'Name', 'required');
         $this->form_validation->set_rules('email', 'Email', 'required');
         $this->form_validation->set_rules('mobile', 'Mobile', 'required');
         $this->form_validation->set_rules('password', 'Password', 'required');
        
 
     
 
         if ($this->form_validation->run() === FALSE)
         {
             $this->load->view('front/page/register.php');
         }	
         
         else
         {  
              $array=array();
              $array['name']=$this->input->post('name');
              $array['email']=$this->input->post('email');
              $array['mobile']=$this->input->post('mobile');
              $array['password']=$this->input->post('password');
              $this->register_model->insert_data($array);
              
              echo "inserted successfully";
              redirect('front/register/login');
                
 
         }
 
        }

     
		public function login(){
			$email= $this->input->post('email');
			$password= $this->input->post('password');
			
			$res=$this->register_model->check_login($email,$password);
            if(count((array)$res)>0)
			{
				$this->session->set_userdata('name',$res['name']);
                $this->session->set_userdata('id',$res['id']);
                  redirect('home');
			}
			else
			{
				$this->load->view('front/page/login.php');
			}
        }


        public function logout()  
        {  
            $this->session->sess_destroy();  
            redirect('front/register/login');  
        } 
    
}

?> 