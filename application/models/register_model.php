<?PHP
class register_model extends CI_Model {

    public function _construct()
    {
        $this->load->database();
    } 
    public function insert_data($data)
    {
        
        $this->db->insert('users',$data);
    }

    
    public function check_login($email,$password)
    {
        
        $this->db->where('email',$email);
        $this->db->where('role',2);
        $this->db->where('password',$password);
        return $this->db->get('users')->row_array();

        
    }
}
?>