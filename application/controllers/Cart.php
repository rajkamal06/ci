<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('cart_model'); //to call the model
        $this->load->model('inactive_model');
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
		$this->load->library('session');
        $this->load->library('cart');
    }



  

	public function store()
	{
        $array=array();
        $array['product_id']=$this->input->post('product_id');
        $array['user_id']=$this->session->userdata('id');
      
        
        $res=$this->inactive_model->get_product($array['product_id']);
        $cart=$this->inactive_model->get_cart($array['product_id']);
      
        if($cart)
        {
            // $user_id=get_current_user_id();
            // print_r($user_id);
            // die;
            $array1['quantity']=$cart['quantity'] +1;
            $this->cart_model->update_data($array1,$array['product_id']);
            
           
            
           
            
        }else{
         
        //$array['user_id']=$this->session->userdata('id');
        $array['product_image']=$res['file'];
        $array['product_name']=$res['name'];
        $array['quantity']=1;
        $array['amount']=$res['sell_price'];
     

        $this->cart_model->insert_data($array);
        }
        
       
        echo json_encode(array('status'=>1,"message"=>"Congratulations!! Added to cart successfully"));
       
	}





  


          //update query
        //   public function update($id)
        //   {
        //   $this->form_validation->set_rules('product_id', 'product_id', 'required');
        //   $this->form_validation->set_rules('user_id', 'user_id', 'required');
        //   $this->form_validation->set_rules('product_image', 'product_image', 'required');
        //   $this->form_validation->set_rules('quantity', 'quantity', 'required');
        //   $this->form_validation->set_rules('amount', 'amount', 'required');
      
        //   if ($this->form_validation->run() === FALSE)
        //   {
        //       $this->load->view('front/page/cart.php');
        //   }	
        //   else
        //   {    $array=array();
        //        $array['product_id']=$this->input->post('product_id');
        //        $array['user_id']=$this->input->post('user_id');
        //        $array['product_image']=$this->input->post('product_image');
        //        $array['quantity']=$this->input->post('quantity');
        //        $array['amount']=$this->input->post('amount');
              
        //        $this->inactive_model->update_data($id,$array);
        //        $this->session->set_flashdata('message', 'Updated Successfully');
        //   }
        //     //redirect("user/test");
        //   }
          

  
    


    





}
?>