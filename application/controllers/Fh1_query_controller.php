<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Fh1_query_controller extends CI_Controller {  
  	//fuctions  
   	public function index(){  
       	$this->load->model("Fh1_query_model");  
      	$data["fetch_data"] = $this->Fh1_query_model->fetch_data();  
     	//$this->load->view("main_view");  
      	$this->load->view("fh1_query_view", $data);  
  	}  	
}  