<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Farm_controller extends CI_Controller {  
  	//functions  
   	public function index(){  
       	$this->load->model("Farm_model");  
      	$data["fetch_data"] = $this->Farm_model->fetch_data();  
     	//$this->load->view("main_view");  
      	$this->load->view("farm_view", $data);  
  	}  
    public function form_validation()  
    {  
     	//echo 'OK';  
      	$this->load->library('form_validation');  
		$this->form_validation->set_rules("longitude", "Longitude", 'required');
		$this->form_validation->set_rules("latitude", "Latitude", 'required');
        $this->form_validation->set_rules("labour_type", "Labour Type", 'required');  
        $this->form_validation->set_rules("area", "Area", 'required');
		$this->form_validation->set_rules("location", "Location", 'required');
		$this->form_validation->set_rules("production", "Production", 'required');
		$this->form_validation->set_rules("certification_status", "Certification Status", 'required');
		$this->form_validation->set_rules("point_of_sales", "Point of Sales", 'required');
		$this->form_validation->set_rules("family_id", "Family ID", 'required');
      	if($this->form_validation->run())  
        {  
        	//true  
          	$this->load->model("Farm_model");  
        	$data = array(  
        		"longitude"		     	=>$this->input->post("longitude"),
        		"latitude"     					=>$this->input->post("latitude"),
             	"labour_type"     				=>$this->input->post("labour_type"),  
              	"area"        	=>$this->input->post("area"),
              	"location"     					=>$this->input->post("location"),
              	"production"     					=>$this->input->post("production"),
              	"certification_status"     			=>$this->input->post("certification_status"),
              	"point_of_sales"     			=>$this->input->post("point_of_sales"),
              	"family_id"     		=>$this->input->post("family_id"),
             
           	);  
            	if($this->input->post("update"))  
              	{  
                 	$this->Farm_model->update_data($data, $this->input->post("hidden_id"));  
                  	redirect(base_url() . "Farm_controller/updated");  
                }  
                if($this->input->post("insert"))  
                {  
                  	$this->Farm_model->insert_data($data);  
                 	redirect(base_url() . "Farm_controller/inserted");  
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
     	$this->load->model("Farm_model");  
       	$this->Farm_model->delete_data($id);  
      	redirect(base_url() . "Farm_controller/deleted");  
  	}  
    public function deleted()  
   	{  
      	$this->index();  
  	}  
   	public function update_data(){  
      	$user_id = $this->uri->segment(3);  
      	$this->load->model("Farm_model");  
       	$data["user_data"] = $this->Farm_model->fetch_single_data($user_id);  
     	$data["fetch_data"] = $this->Farm_model->fetch_data();  
      	$this->load->view("farm_view", $data);  
   	}  
   	public function updated()  
   	{  
      	$this->index();  
   	}  
	
}  