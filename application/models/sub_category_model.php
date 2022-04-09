<?PHP
class sub_category_model extends CI_Model {

    public function _construct()
    {
        $this->load->database();
    } 

    function get_category()
    {
        return $this->db->get('category')->result();

    }

    public function insert_index($data)
    {
        
        $this->db->insert('sub_category',$data);
    }
    

    public function deleterecords($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('sub_category');
        return true;
        
		    
    }


    
    public function update_data($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('sub_category',$data);
        return true;
    }
}
    ?>