<?php

class model_seller extends CI_Model{

    function insert_data(){

       $data = array(

        'name'=> $this->input->post('name',TRUE),
        'email'=>$this->input->post('email',TRUE),
        'status'=>$this->input->post('status',TRUE),
        
       );
      

      return $this->db->insert('seller', $data);
    //   return false;

    }

    
    public function get_data(){
      
        $this->db->from('seller');
        $this->db->where('status=1');
        $query = $this->db->get();
        // $query = $this->db->get('seller');  
        return $query;  
      
       
    }
}

?>