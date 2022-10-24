<?php

class productController extends CI_Controller {




public function productdata($id){

    $this->load->model('model_product');
    $data['h']=$this->model_product->get_data($id);


        $this->load->view('product', $data);
    
   

}
}
?>