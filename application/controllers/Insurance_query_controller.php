<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Insurance_query_controller extends CI_Controller {  
  	//fuctions  
   	public function index(){  
       	$this->load->model("Insurance_query_model");  
      	$data["fetch_data"] = $this->Insurance_query_model->fetch_data();  
     	//$this->load->view("main_view");  
      	$this->load->view("insurance_query_view", $data);  
  	}  	
}  