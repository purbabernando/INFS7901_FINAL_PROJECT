<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Op_cost_controller extends CI_Controller {  
  	//functions  
   	public function index(){  
       	$this->load->model("Op_cost_model");  
      	$data["fetch_data"] = $this->Op_cost_model->fetch_data();  
     	//$this->load->view("main_view");  
      	$this->load->view("op_cost_view", $data);  
  	}  
    public function form_validation()  
    {  
     	//echo 'OK';  
      	$this->load->library('form_validation');  
		$this->form_validation->set_rules("longitude", "Longitude", 'required|alpha_numeric');
		$this->form_validation->set_rules("latitude", "Latitude", 'required|alpha_numeric');
        $this->form_validation->set_rules("type", "Type", 'required');  
        $this->form_validation->set_rules("amount", "Amount", 'required|alpha_numeric');
		
      	if($this->form_validation->run())  
        {  
        	//true  
          	$this->load->model("Op_cost_model");  
        	$data = array(  
        		"longitude"		    =>$this->input->post("longitude"),
        		"latitude"     		=>$this->input->post("latitude"),
             	"type"     			=>$this->input->post("type"),  
              	"amount"        	=>$this->input->post("amount"),
              	
           	);  
            	if($this->input->post("update"))  
              	{  
                 	$this->Op_cost_model->update_data($data, $this->input->post("hidden_id"));  
                  	redirect(base_url() . "Op_cost_controller/updated");  
                }  
                if($this->input->post("insert"))  
                {  
                  	$this->Op_cost_model->insert_data($data);  
                 	redirect(base_url() . "Op_cost_controller/inserted");  
                }  
           }  
           else  
           {  
                //false  
                $this->index();  
           }  
   	}  
   	public function inserted()  
   	{  
    	$this->index();  
   	}  
   	public function delete_data(){  
      	$id = $this->uri->segment(3);  
     	$this->load->model("Op_cost_model");  
       	$this->Op_cost_model->delete_data($id);  
      	redirect(base_url() . "Op_cost_controller/deleted");  
  	}  
    public function deleted()  
   	{  
      	$this->index();  
  	}  
   	public function update_data(){  
      	$user_id = $this->uri->segment(3);  
      	$this->load->model("Op_cost_model");  
       	$data["user_data"] = $this->Op_cost_model->fetch_single_data($user_id);  
     	$data["fetch_data"] = $this->Op_cost_model->fetch_data();  
      	$this->load->view("op_cost_view", $data);  
   	}  
   	public function updated()  
   	{  
      	$this->index();  
   	}  
	
}  