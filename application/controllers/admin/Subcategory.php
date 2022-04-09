<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subcategory extends CI_Controller {

	public function __construct() {
      parent::__construct();
		  $this->load->model('sub_category_model'); //to call the model
      $this->load->helper('url', 'form');
      $this->load->library('form_validation');
	    $this->load->library('session');
    }



    public function sub_category()
	{
	   $data=array();	 
       $data['cat_List']=$this->sub_category_model->get_category();

        $this->load->view('admin/sub_category/sub_category.php',$data);
       

      }  


    

        public function store()

		{
   $this->form_validation->set_rules('category_id', 'category_id','required');
    $this->form_validation->set_rules('name', 'Name','required');
		$this->form_validation->set_rules('description', 'Description','required');
		$this->form_validation->set_rules('file', 'File','required');
	    $this->form_validation->set_rules('status', 'Status','required');
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('admin/sub_category/sub_category.php');
		}	
		
		else 
		{  
			 $array=array();
       $array['category_id']=$this->input->post('category_id');
       $array['name']=$this->input->post('name');
			 $array['description']=$this->input->post('description');
			 $array['file']=$this->input->post('file');
			 $array['status']=$this->input->post('status');
		     $this->sub_category_model->insert_index($array);
    
			
			 echo "inserted successfully";
       redirect("admin/subcategory/index");

        

		}


	}


      
    public function index()
    {




               //data from date to date  nikalne ka formula
		// $list=array();
		// $this->db->select('*');
		// 	$this->db->from('sub_category');
		// 	$this->db->where('created_at >=','2022-03-24 ');
		// 	$this->db->where('created_at <=','2022-03-26');
		// 	$query = $this->db->get();
		// 	$result = $query->result();
         



        $list=array();
        $query = $this->db->get('sub_category');
        $data = $query->result();
        $list['data']=$data; 
        $this->load->view('admin/sub_category/index.php',$list);
  }
  function savingdata()  
    {  
        //this array is used to get fetch data from the view page.  
        $data = array(
                        'category_id'  => $this->input->post('category_id'),   
                        'name'  => $this->input->post('name'), 
                        'description'  => $this->input->post('description'),  
                        'file'   => $this->input->post('file'),  
                        'status' => $this->input->post('status')  
                        );              
        //insert data into database table. 
        $this->db->savingdata('sub_category',$data);  
        print_r($data);
        redirect("admin/sub_category/index.php");  
    } 
	
	public function category()
    {
		 $list=array();
		 $query = $this->db->get('sub_category');
	     $data = $query->result();
         $list['data']=$data; 
         $this->load->view('admin/sub_category/index.php',$list);
		 
    }




    
    public function delete($id)
		{
			$this->sub_category_model->deleterecords($id);
			redirect("admin/subcategory/index");
		    
		}





    public function view($id)
		{
			$array=array();
			$this->db->where('id', $id);
			$query =$this->db->get('sub_category')->row_array();
       $array['data']=$query;
			$this->load->view('admin/sub_category/view.php',$array);
		
		}	
    




    public function update($id)
		{
      
   $this->form_validation->set_rules('category_id', 'Category_id','required');
      $this->form_validation->set_rules('name', 'Name','required');
      $this->form_validation->set_rules('description', 'Description','required');
      $this->form_validation->set_rules('file', 'File','required');
        $this->form_validation->set_rules('status', 'Status','required');
	
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('admin/sub_category/edit.php');
		}	
		else
		{    $array=array();
       $array['category_id']=$this->input->post('category_id');
       $array['name']=$this->input->post('name');
			 $array['description']=$this->input->post('description');
			 $array['file']=$this->input->post('file');
			 $array['status']=$this->input->post('status');
			
		     $this->sub_category_model->update_data($id,$array);
			 $this->session->set_flashdata('message', 'Updated Successfully');
        }
          redirect("admin/subcategory/index");
		}
         public function edit($id)
		{   
			$list=array();
			$this->db->where('id', $id);
			$query = $this->db->get('sub_category');
			$data=$query->row_array();
			$list['data']=$data; 
			$this->load->view('admin/sub_category/edit.php',$list);
		
		}

  }




    ?>