<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inactive extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('inactive_model'); //to call the model
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
		$this->load->library('session');
    }
  public function inactive()
	{
		$this->load->view('admin/inactive/inactive.php');
    
    }
    public function store()

    {

$this->form_validation->set_rules('name', 'Name','required');
    $this->form_validation->set_rules('description', 'Description','required');
    $this->form_validation->set_rules('file', 'File','required');
    $this->form_validation->set_rules('price', 'Price','required');
    $this->form_validation->set_rules('sell_price', 'Sell_price','required');
    $this->form_validation->set_rules('status', 'Status','required');
    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('admin/inactive/inactive.php');
    }	
    
    else 
    {  
         $array=array();
   
          $array['name']=$this->input->post('name');
         $array['description']=$this->input->post('description');
         $array['file']=$this->input->post('file');
         $array['price']=$this->input->post('price');
         $array['sell_price']=$this->input->post('sell_price');
         $array['status']=$this->input->post('status');
         $this->inactive_model->insert_inactive($array);

        
         echo "inserted successfully";
    redirect("admin/inactive/index");

    

    }


}
public function index()
{
    // $this->load->view('admin/active/index.php');
    $list=array();
    $this->db->where('status',0);
    $query = $this->db->get('product');
    $data = $query->result();
    $list['data']=$data; 
    $this->load->view('admin/inactive/index.php',$list);

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
    $this->db->savingdata('inactive',$data);  
    print_r($data);
    redirect("admin/inactive/index.php");  
} 

public function test()
{
     $list=array();
     $query = $this->db->get('product');
     $data = $query->result();
     $list['data']=$data; 
     $this->load->view('admin/inactive/index.php',$list);
     
}
  }
  ?>