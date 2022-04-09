<?PHP
class category_model extends CI_Model {

    public function _construct()
    {
        $this->load->database();
    } 


    

    public function insert_index($data)
    {
        
        $this->db->insert('category',$data);
    }




    public function deleterecords($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('category');
        return true;
    }


    
    public function update_data($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('category',$data);
        return true;
    }

}
?>