<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('user_model'); //to call the model
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
		$this->load->library('session');
    }

	public function index()
	{
		$this->load->view('user/registration.php');
	}

	public function store()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required');
	    $this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]');

	

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('user/registration.php');
		}	
		
		else
		{  
			 $array=array();
             $array['name']=$this->input->post('name');
			 $array['email']=$this->input->post('email');
			 $array['mobile']=$this->input->post('mobile');
			 $array['password']=$this->input->post('password');
		     $this->user_model->insert_data($array);
			 
			 echo "inserted successfully";

		}

	}




     //leasting   data 
	function savingdata()  
    {  
        //this array is used to get fetch data from the view page.  
        $data = array(  
                        'name'  => $this->input->post('name'),  
                        'email'  => $this->input->post('email'),  
                        'mobile'   => $this->input->post('mobile'),  
                        'password' => $this->input->post('password')  
                        );  
        //insert data into database table.  
        $this->db->savingdata('abhi',$data);  
  
        redirect("read_data/index");  
    } 
	
	public function test()
    {
		 $list=array();
		 $query = $this->db->get('abhi');
	     $data = $query->result();
         $list['data']=$data; 
         $this->load->view('user/user_view.php',$list);
		 
    }
	

        //delete query
		public function delete($id)
		{
			$this->user_model->deleterecords($id);
			redirect("user/test");
		    
		}




          //update query
		public function update($id)
		{
        $this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required');
	    $this->form_validation->set_rules('password', 'Password', 'trim|required');
	
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('user/edit.php');
		}	
		else
		{    $array=array();
             $array['name']=$this->input->post('name');
			 $array['email']=$this->input->post('email');
			 $array['mobile']=$this->input->post('mobile');
			 $array['password']=$this->input->post('password');
			
		     $this->user_model->update_data($id,$array);
			 $this->session->set_flashdata('message', 'Updated Successfully');
        }
          redirect("user/test");
		}
         public function edit($id)
		{   
			$list=array();
			$this->db->where('id', $id);
			$query = $this->db->get('abhi');
			$data=$query->row_array();
			$list['data']=$data; 
			$this->load->view('user/edit.php',$list);
		
		}

      //view query
		public function view($id)
		{
			$array=array();
			$this->db->where('id', $id);
			$query =$this->db->get('abhi')->row_array();
            $array['data']=$query;
			$this->load->view('user/view.php',$array);
		
		}	



		
		
		public function login(){
			$email= $this->input->post('email');
			$password= $this->input->post('password');
			
			$res=$this->user_model->check_login($email,$password);
            if(count((array)$res)>0)
			{
				$this->session->set_userdata('name',$res['name']);
               redirect('admin/dashboard');
			}
			else
			{
				$this->load->view('admin/login.php');
			}

			//$this->load->view('login');
		}
		public function logout()  
		{  
			$this->session->sess_destroy();  
			redirect('user/login');  
		} 
		

	   	 
    
	
	}




?>