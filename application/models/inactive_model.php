<?PHP
class inactive_model extends CI_Model {

    public function _construct()
    {
        $this->load->database();
    } 
    public function insert_inactive($data)
    {
        
        $this->db->insert('product',$data);
    }

    public function get_product($id)
    {
        
        $this->db->where('id',$id);
        return $this->db->get('product')->row_array();


 }
    
    public function get_cart($id)
    {
        
        $this->db->where('product_id',$id);
        return $this->db->get('cart')->row_array();

        

    }
    
    public function get_users($id)
    {
        
        $this->db->where('user_id',$id);
        return $this->db->get('users')->row_array();


 }

    
 public function update_data($id,$data)
 {
     $this->db->where('id',$id);
     $this->db->update('cart',$data);
     return true;
 }

}
    ?>