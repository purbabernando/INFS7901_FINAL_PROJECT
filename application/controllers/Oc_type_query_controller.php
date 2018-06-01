<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Oc_type_query_controller extends CI_Controller {  
  	//fuctions  
   	public function index(){  
       	$this->load->model("Oc_type_query_model");
		$rType = $this->input->post('rType');
		$data["fetch_data"] = null;
		if($rType){
   			$data["fetch_data"] = $this->Oc_type_query_model->fetch_data($rType);
		}
		$this->load->view("oc_type_query_view", $data);
  		}  	
	 	
} 