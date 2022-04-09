<?PHP
class cart_model extends CI_Model {

    public function _construct()
    {
        $this->load->database();
    } 
    public function insert_data($data)
    {
        
        $this->db->insert('cart',$data);
    }
    public function update_data($data,$product_id)
    {
        
        $this->db->where('product_id',$product_id)->update('cart',$data);
    }

 
    
}
?>