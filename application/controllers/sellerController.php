<?php

class sellerController extends CI_Controller {

public function insertSeller(){


 
        $this->load->model('model_seller');
        $response=$this->model_seller->insert_data();
        if($response){

           
            redirect('Home');

        }
        else{
           
            redirect('Home');
        }
    


}


public function get_data(){
    $this->load->model('model_seller');
    $response=$this->model_seller->get_data();
    if($response){
    
       
        redirect('Home');
    
    }
    else{
       
        redirect('Home');
    }

}

public function editSeller($id){

}
}
?>