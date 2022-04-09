<?PHP
class active_model extends CI_Model {

    public function _construct()
    {
        $this->load->database();
    } 



       
    public function  delete($id){

        $this->db->where('id', $id);
        $this->db->delete('product');
        if($this->db->affected_rows( $id) >0){
            return true;
        }else{
            return false;
        }
    


   
    }



}
    ?>