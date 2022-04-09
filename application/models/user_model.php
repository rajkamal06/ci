<?PHP
class user_model extends CI_Model {

    public function _construct()
    {
        $this->load->database();
    }  
    public function insert_data($data)
    {
        
        $this->db->insert('abhi',$data);
    }

    public function check_login($email,$password)
    {
        
        $this->db->where('email',$email);
        $this->db->where('role',1);
        $this->db->where('password',$password);
        return $this->db->get('users')->row_array();

        
    }




    public function deleterecords($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('abhi');
        return true;
    }





    public function update_data($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('abhi',$data);
        return true;
    }



    // public function insert_index($data)
    // {
        
    //     $this->db->insert('category',$data);
    // }
}

?>