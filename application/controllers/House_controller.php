<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class House_controller extends CI_Controller {  
  	//functions  
   	public function index(){  
       	$this->load->model("The_house_model");  
      	$data["fetch_data"] = $this->The_house_model->fetch_data();   
      	$this->load->view("house_view", $data);  
  	}  
    public function form_validation()  
    {  
     	//echo 'OK';  
      	$this->load->library('form_validation');  
		$this->form_validation->set_rules("asset_id", "Asset ID", 'required');
        $this->form_validation->set_rules("wall_type", "Wall Type", 'required|alpha');  
        $this->form_validation->set_rules("floor_type", "Floor Type", 'required|alpha'); 
		$this->form_validation->set_rules("area", "Area", 'required|alpha_numeric');  
		$this->form_validation->set_rules("wc_type", "WC Type", 'required|alpha');  
		$this->form_validation->set_rules("energy_type", "Energy Type", 'required|alpha');  
		$this->form_validation->set_rules("roof_type", "Roof Type", 'required'); 
		$this->form_validation->set_rules("doc", "Date of Construction", 'required');
		$this->form_validation->set_rules("longitude", "Longitude", 'required|alpha_numeric');
		$this->form_validation->set_rules("latitude", "Latitude", 'required|alpha_numeric');
		$this->form_validation->set_rules("number", "Number", 'required|alpha_numeric');
		$this->form_validation->set_rules("drinking_water_source", "Drinking Water Source", 'required|alpha');  
      	if($this->form_validation->run())  
        {  
        	//true  
          	$this->load->model("The_house_model");  
        	$data = array(  
        		"asset_id"		     		=>$this->input->post("asset_id"),
             	"wall_type"     			=>$this->input->post("wall_type"),  
              	"floor_type"        		=>$this->input->post("floor_type"),
				"area"        				=>$this->input->post("area"),
				"wc_type"        			=>$this->input->post("wc_type"),
				"energy_type"        		=>$this->input->post("energy_type"),
				"roof_type"        			=>$this->input->post("roof_type"),
				"doc"        				=>$this->input->post("doc"),
				"longitude"        			=>$this->input->post("longitude"),
				"latitude"        			=>$this->input->post("latitude"),  
				"number"        			=>$this->input->post("number"),
				"drinking_water_source"    	=>$this->input->post("drinking_water_source")
           	);  
            	if($this->input->post("update"))  
              	{  
                 	$this->The_house_model->update_data($data, $this->input->post("hidden_id"));  
                  	redirect(base_url() . "House_controller/updated");  
                }  
                if($this->input->post("insert"))  
                {  
                  	$this->The_house_model->insert_data($data);  
                 	redirect(base_url() . "House_controller/inserted");  
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
     	$this->load->model("The_house_model");  
       	$this->The_house_model->delete_data($id);  
      	redirect(base_url() . "House_controller/deleted");  
  	}  
    public function deleted()  
   	{  
      	$this->index();  
  	}  
   	public function update_data(){  
      	$user_id = $this->uri->segment(3);  
      	$this->load->model("The_house_model");  
       	$data["user_data"] = $this->The_house_model->fetch_single_data($user_id);  
     	$data["fetch_data"] = $this->The_house_model->fetch_data();  
      	$this->load->view("house_view", $data);  
   	}  
   	public function updated()  
   	{  
      	$this->index();  
   	}  
	
}  