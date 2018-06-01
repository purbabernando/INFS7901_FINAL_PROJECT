<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Hh_spending_controller extends CI_Controller {  
  	//functions  
   	public function index(){  
       	$this->load->model("Hh_spending_model");  
      	$data["fetch_data"] = $this->Hh_spending_model->fetch_data();  
     	//$this->load->view("hh_spending_view");  
      	$this->load->view("hh_spending_view", $data);  
  	}  
    public function form_validation()  
    {  
     	//echo 'OK';  
      	$this->load->library('form_validation');  
		$this->form_validation->set_rules("family_id", "Family ID", 'required');
        $this->form_validation->set_rules("type", "Type", 'required|alpha');  
        $this->form_validation->set_rules("amount", "Amount", 'required|alpha_numeric');  
      	if($this->form_validation->run())  
        {  
        	//true  
          	$this->load->model("Hh_spending_model");  
        	$data = array(  
        		"family_id"		     	=>$this->input->post("family_id"),
             	"type"     				=>$this->input->post("type"),  
              	"amount"        		=>$this->input->post("amount")  
           	);  
            	if($this->input->post("update"))  
              	{  
                 	$this->Hh_spending_model->update_data($data, $this->input->post("hidden_id"));  
                  	redirect(base_url() . "Hh_spending_controller/updated");  
                }  
                if($this->input->post("insert"))  
                {  
                  	$this->Hh_spending_model->insert_data($data);  
                 	redirect(base_url() . "Hh_spending_controller/inserted");  
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
     	$this->load->model("Hh_spending_model");  
       	$this->Hh_spending_model->delete_data($id);  
      	redirect(base_url() . "Hh_spending_controller/deleted");  
  	}  
    public function deleted()  
   	{  
      	$this->index();  
  	}  
   	public function update_data(){  
      	$user_id = $this->uri->segment(3);  
      	$this->load->model("Hh_spending_model");  
       	$data["user_data"] = $this->Hh_spending_model->fetch_single_data($user_id);  
     	$data["fetch_data"] = $this->Hh_spending_model->fetch_data();  
      	$this->load->view("hh_spending_view", $data);  
   	}  
   	public function updated()  
   	{  
      	$this->index();  
   	}  
	
}  