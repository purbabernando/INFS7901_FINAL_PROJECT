<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Family_strata_query_controller extends CI_Controller {  
  	//fuctions  
   	public function index(){  
       	$this->load->model("Family_strata_query_model");
		$rType = $this->input->post('rType');
		$data["fetch_data"] = null;
		if($rType){
   			$data["fetch_data"] = $this->Family_strata_query_model->fetch_data($rType);
		}
		$this->load->view("family_strata_query_view", $data);
  		}  	
	 	
} 