<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Asset_controller extends CI_Controller {  
  	//functions  
   	public function index(){  
       	$this->load->model("Asset_model");  
      	$data["fetch_data"] = $this->Asset_model->fetch_data();  
     	//$this->load->view("asset_view");  
      	$this->load->view("asset_view", $data);  
  	}  
    public function form_validation()  
    {  
     	//echo 'OK';  
      	$this->load->library('form_validation');  
		$this->form_validation->set_rules("asset_id", "Asset ID", 'required');
        $this->form_validation->set_rules("family_id", "Family ID", 'required');   
      	if($this->form_validation->run())  
        {  
        	//true  
          	$this->load->model("Asset_model");  
        	$data = array(  
        		"asset_id"		     		=>$this->input->post("asset_id"),
             	"family_id"     	=>$this->input->post("family_id")  
		);
            	if($this->input->post("update"))  
              	{  
                 	$this->Asset_model->update_data($data, $this->input->post("hidden_id"));  
                  	redirect(base_url() . "Asset_controller/updated");  
                }  
                if($this->input->post("insert"))  
                {  
                  	$this->Asset_model->insert_data($data);  
                 	redirect(base_url() . "Asset_controller/inserted");  
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
     	$this->load->model("Asset_model");  
       	$this->Asset_model->delete_data($id);  
      	redirect(base_url() . "Asset_controller/deleted");  
  	}  
    public function deleted()  
   	{  
      	$this->index();  
  	}  
   	public function update_data(){  
      	$user_id = $this->uri->segment(3);  
      	$this->load->model("Asset_model");  
       	$data["user_data"] = $this->Asset_model->fetch_single_data($user_id);  
     	$data["fetch_data"] = $this->Asset_model->fetch_data();  
      	$this->load->view("asset_view", $data);  
   	}  
   	public function updated()  
   	{  
      	$this->index();  
   	}  
	
}  