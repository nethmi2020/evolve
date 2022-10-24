<?php

class model_product extends CI_Model{

    // function insert_data(){

    //    $data = array(

    //     'name'=> $this->input->post('name',TRUE),
    //     'email'=>$this->input->post('email',TRUE),
    //     'status'=>$this->input->post('status',TRUE),
        
    //    );
      

    //   return $this->db->insert('seller', $data);
    // //   return false;

    // }

    
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