<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {




	public function index()
	{
		$this->load->database();  
	 
		$this->load->model('model_seller');  
	
		$data['h']=$this->model_seller->get_data();  
	
		$this->load->view('home', $data);
		
		
	}

	
	
	
	
}
