<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Bank_query_controller extends CI_Controller {  
  	//fuctions  
   	public function index(){  
       	$this->load->model("bank_query_model");
		$rType = $this->input->post('rType');
		$data["fetch_data"] = null;
		if($rType){
   			$data["fetch_data"] = $this->bank_query_model->fetch_data($rType);
		}
		$this->load->view("bank_query_view", $data);
  		}  	
	 	
} 