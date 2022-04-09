<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('category_model'); //to call the model
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('upload');
    }
  public function index()
	{
		$this->load->view('admin/category/index.php');
    

  }
    public function store()
		{
        $this->form_validation->set_rules('name', 'Name','required');
		$this->form_validation->set_rules('description', 'Description','required');
		//$this->form_validation->set_rules('file', 'File','required');
    

	    $this->form_validation->set_rules('status', 'Status','required');
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('admin/category/index.php');
		}	
		
		else 
		{  
			
			 $array=array();
			 $config=array();
             $array['name']=$this->input->post('name');
			 $array['description']=$this->input->post('description');
			 //$array['file']=$this->input->post('file');
			 $config['upload_path'] = FCPATH.'uploads/category/';
			  //print_r($config['upload_path']);  die;
			 $config['allowed_types'] = 'gif|jpg|png';
			 $config['overwrite'] = false;
			 $this->upload->initialize($config);
			 if (!$this->upload->do_upload('userfile')) {
				 $error = array('error' => $this->upload->display_errors());
				 $this->load->view('admin/category/index.php',$error);
				 
			 } else {
				 $data = $this->upload->data();
				 $array['file']=$data['file_name'];
                 //print_r($data); die;

			 }



			 $array['status']=$this->input->post('status');
		     $this->category_model-> insert_index($array);
    
			
			 echo "inserted successfully";
             redirect("admin/category/category");  

		}


	}
	




  function savingdata()  
    {  
        //this array is used to get fetch data from the view page.  
        $data = array(  
                        'name'  => $this->input->post('name'), 
                        'description'  => $this->input->post('description'),  
                        'file'   => $this->input->post('file'),  
                        'status' => $this->input->post('status')  
                        );  
                       
        //insert data into database table.  
        $this->db->savingdata('category',$data);  
        print_r($data);
        redirect("admin/category/category.php");  
    } 
	
	public function category()
    {
		 $list=array();
		 $query = $this->db->get('category');
	     $data = $query->result();
         $list['data']=$data; 
         $this->load->view('admin/category/category.php',$list);
		 
    }





       //delete query
		public function delete($id)
		{
			$this->category_model->deleterecords($id);
			redirect("admin/category/category");
		    
		}








        //view query
		public function view($id)
		{  
			$array=array();
			$this->db->where('id', $id);       
			$query =$this->db->get('category')->row_array();
            $array['data']=$query;
			$this->load->view('admin/category/view.php',$array);
		
		}	










    public function update($id)
		{
           $this->form_validation->set_rules('name', 'Name','required');
           $this->form_validation->set_rules('description', 'Description','required');
           $this->form_validation->set_rules('file', 'File','required');
           $this->form_validation->set_rules('status', 'Status','required');
	
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('admin/category/edit.php');
		}	
		else
		{    $array=array();
             $array['name']=$this->input->post('name');
			 $array['description']=$this->input->post('description');
			 $array['file']=$this->input->post('file');
			 $array['status']=$this->input->post('status');
			
		     $this->category_model->update_data($id,$array);
			 $this->session->set_flashdata('message', 'Updated Successfully');
        }
          redirect("admin/category/category");
		}
         public function edit($id)
		{   
			$list=array();
			$this->db->where('id', $id);
			$query = $this->db->get('category');
			$data=$query->row_array();
			$list['data']=$data; 
			$this->load->view('admin/category/edit.php',$list);
		
		}





	
		
	
	
		
		

 
}

?>