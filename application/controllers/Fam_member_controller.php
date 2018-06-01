<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Fam_member_controller extends CI_Controller {  
  	//functions  
   	public function index(){  
       	$this->load->model("Fam_member_model");  
      	$data["fetch_data"] = $this->Fam_member_model->fetch_data();  
     	//$this->load->view("main_view");  
      	$this->load->view("fam_member_view", $data);  
  	}  
    public function form_validation()  
    {  
     	//echo 'OK';  
      	$this->load->library('form_validation');  
		$this->form_validation->set_rules("card_number", "Card Number", 'required');
		$this->form_validation->set_rules("name", "Name", 'required');
        $this->form_validation->set_rules("gender", "Gender", 'required|alpha');  
        $this->form_validation->set_rules("insurance_status", "Insurance Status", 'required');
		$this->form_validation->set_rules("job", "Job", 'required');
		$this->form_validation->set_rules("dob", "Date of Birth", 'required');
		$this->form_validation->set_rules("education", "Education", 'required');
		$this->form_validation->set_rules("blood_type", "Blood Type", 'required');
		$this->form_validation->set_rules("family_function", "Family Function", 'required');
		$this->form_validation->set_rules("religion", "Religion", 'required');
		$this->form_validation->set_rules("marital_status", "Marital Status", 'required'); 
		$this->form_validation->set_rules("family_id", "Family ID", 'required'); 
      	if($this->form_validation->run())  
        {  
        	//true  
          	$this->load->model("Fam_member_model");  
        	$data = array(  
        		"card_number"		     	=>$this->input->post("card_number"),
        		"name"     					=>$this->input->post("name"),
             	"gender"     				=>$this->input->post("gender"),  
              	"insurance_status"        	=>$this->input->post("insurance_status"),
              	"job"     					=>$this->input->post("job"),
              	"dob"     					=>$this->input->post("dob"),
              	"education"     			=>$this->input->post("education"),
              	"blood_type"     			=>$this->input->post("blood_type"),
              	"family_function"     		=>$this->input->post("family_function"),
              	"religion"     				=>$this->input->post("religion"),
              	"marital_status"     		=>$this->input->post("marital_status"),
              	"family_id"     			=>$this->input->post("family_id"),
           	);  
            	if($this->input->post("update"))  
              	{  
                 	$this->Fam_member_model->update_data($data, $this->input->post("hidden_id"));  
                  	redirect(base_url() . "Fam_member_controller/updated");  
                }  
                if($this->input->post("insert"))  
                {  
                  	$this->Fam_member_model->insert_data($data);  
                 	redirect(base_url() . "Fam_member_controller/inserted");  
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
     	$this->load->model("Fam_member_model");  
       	$this->Fam_member_model->delete_data($id);  
      	redirect(base_url() . "Fam_member_controller/deleted");  
  	}  
    public function deleted()  
   	{  
      	$this->index();  
  	}  
   	public function update_data(){  
      	$user_id = $this->uri->segment(3);  
      	$this->load->model("Fam_member_model");  
       	$data["user_data"] = $this->Fam_member_model->fetch_single_data($user_id);  
     	$data["fetch_data"] = $this->Fam_member_model->fetch_data();  
      	$this->load->view("fam_member_view", $data);  
   	}  
   	public function updated()  
   	{  
      	$this->index();  
   	}  
	
}  