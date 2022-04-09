<?PHP
class home_model extends CI_Model {

    public function _construct()
    {
        $this->load->database();
    } 
    

   

       

    

        public function insert_data($data)
        {
            
            $this->db->insert('subscribe',$data);
        }
        //  public function checkEmail($email)
        // {
        //    $this -> db -> select('*');
        //    $this -> db -> from('subscribe');
        //    $this -> db -> where('email', $email);
        //    $query = $this -> db -> get();
         
        //    return $query->result_array();
        // }


        public function check_subscribe($email)
        {
            
            $this->db->where('email',$email);
            return $this->db->get('subscribe')->row_array();
    
            
        }

        public function deleterecords($id)
        {

            $this->db->where('id',$id);
            $this->db->delete('cart');
            return true;
        }
}
?>

