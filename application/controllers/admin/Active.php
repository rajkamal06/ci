<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Active extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('active_model'); //to call the model
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
		$this->load->library('session');
    }
  public function active()
	{
		// $this->load->view('admin/active/index.php');
        $list=array();
        $this->db->where('status',1); 
        $query = $this->db->get('product');
        $data = $query->result();
        $list['data']=$data; 
        $this->load->view('admin/active/index.php',$list);
    
    }
    function savingdata()  
    {  
        //this array is used to get fetch data from the view page.  
        $data = array(
                          
                        'name'  => $this->input->post('name'), 
                        'description'  => $this->input->post('description'),  
                        'file'   => $this->input->post('file'), 
                        'price'  => $this->input->post('price'), 
                        'sell_price'  => $this->input->post('sell_price'),  
                        'status' => $this->input->post('status')  
                        );              
        //insert data into database table. 
        $this->db->savingdata('active',$data);  
        print_r($data);
        redirect("admin/active/index.php");  
    } 
	
	public function test()
    {
		 $list=array();
		 $query = $this->db->get('product');
	     $data = $query->result();
         $list['data']=$data; 
         $this->load->view('admin/active/index.php',$list);
		 
    }

    function status($id)
    {
        $this->db->where('id',$id);
        $this->db->update('product',['status'=>1]);
        redirect('admin/active/active');
       
    }
    function status_inactive($id)
    {
        $this->db->where('id',$id);
        $this->db->update('product',['status'=>0]);
        redirect('admin/active/active');
       
    }


    public function delete()
    
    {
        $id=$this->input->post('id');
        $this->db->where('id',$id);
        $result = $this->db->delete('product');
       
        if($result){
            $this->session->set_flashdata('success_msg', 'Record deleted successfully');
        }else{
            $this->session->set_flashdata('error_msg', 'Faill to delete record');
        }
       
    }
    
        

}
    
  ?>