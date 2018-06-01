<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Other_asset_controller extends CI_Controller {  
  	//functions  
   	public function index(){  
       	$this->load->model("Other_asset_model");  
      	$data["fetch_data"] = $this->Other_asset_model->fetch_data();  
     	//$this->load->view("Other_asset_controller_view");  
      	$this->load->view("other_asset_view", $data);  
  	}  
    public function form_validation()  
    {  
     	//echo 'OK';  
      	$this->load->library('form_validation');  
		$this->form_validation->set_rules("asset_id", "Asset ID", 'required');
        $this->form_validation->set_rules("type", "Type", 'required|alpha');  
        $this->form_validation->set_rules("asset_cardinality", "Asset Cardinality", 'required|alpha_numeric');  
      	if($this->form_validation->run())  
        {  
        	//true  
          	$this->load->model("Other_asset_model");  
        	$data = array(  
        		"asset_id"		     		=>$this->input->post("asset_id"),
             	"type"     	=>$this->input->post("type"),  
              	"asset_cardinality"        		=>$this->input->post("asset_cardinality")  
           	);  
            	if($this->input->post("update"))  
              	{  
                 	$this->Other_asset_model->update_data($data, $this->input->post("hidden_id"));  
                  	redirect(base_url() . "Other_asset_controller/updated");  
                }  
                if($this->input->post("insert"))  
                {  
                  	$this->Other_asset_model->insert_data($data);  
                 	redirect(base_url() . "Other_asset_controller/inserted");  
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
     	$this->load->model("Other_asset_model");  
       	$this->Other_asset_model->delete_data($id);  
      	redirect(base_url() . "Other_asset_controller/deleted");  
  	}  
    public function deleted()  
   	{  
      	$this->index();  
  	}  
   	public function update_data(){  
      	$user_id = $this->uri->segment(3);  
      	$this->load->model("Other_asset_model");  
       	$data["user_data"] = $this->Other_asset_model->fetch_single_data($user_id);  
     	$data["fetch_data"] = $this->Other_asset_model->fetch_data();  
      	$this->load->view("other_asset_view", $data);  
   	}  
   	public function updated()  
   	{  
      	$this->index();  
   	}  
	
}  