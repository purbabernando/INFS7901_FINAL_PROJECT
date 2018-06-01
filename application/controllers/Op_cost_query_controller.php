<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Op_cost_query_controller extends CI_Controller {  
  	//fuctions  
   	public function index(){  
       	$this->load->model("Op_cost_query_model");  
      	$data["fetch_data"] = $this->Op_cost_query_model->fetch_data();  
     	//$this->load->view("main_view");  
      	$this->load->view("op_cost_query_view", $data);  
  	}  	
}  