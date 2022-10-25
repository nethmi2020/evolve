<?php

class model_product extends CI_Model{


    
    public function get_data($id){
      
        $this->db->from('products');
        $this->db->where('selled_by',$id);
        $q = $this->db->get();
        if($q->num_rows() > 0)
        {
            return $q->result();
        }
        return array();
      
       
    }
}

?>