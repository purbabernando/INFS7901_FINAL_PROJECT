<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Main extends CI_Controller {  
  	//functions  
   	public function index(){  
       	$this->load->model("Main_model");  
      	$data["fetch_data"] = $this->Main_model->fetch_data();  
     	//$this->load->view("main_view");  
      	$this->load->view("main_view", $data);  
  	}  
    public function form_validation()  
    {  
     	//echo 'OK';  
      	$this->load->library('form_validation');  
		$this->form_validation->set_rules("family_id", "Family ID", 'required');
        $this->form_validation->set_rules("family_cardinality", "Family Cardinality", 'required|alpha_numeric');  
        $this->form_validation->set_rules("card_number", "Card Number", 'required|alpha_numeric');  
      	if($this->form_validation->run())  
        {  
        	//true  
          	$this->load->model("Main_model");  
        	$data = array(  
        		"family_id"		     		=>$this->input->post("family_id"),
             	"family_cardinality"     	=>$this->input->post("family_cardinality"),  
              	"card_number"        		=>$this->input->post("card_number")  
           	);  
            	if($this->input->post("update"))  
              	{  
                 	$this->Main_model->update_data($data, $this->input->post("hidden_id"));  
                  	redirect(base_url() . "Main/updated");  
                }  
                if($this->input->post("insert"))  
                {  
                  	$this->Main_model->insert_data($data);  
                 	redirect(base_url() . "Main/inserted");  
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
     	$this->load->model("Main_model");  
       	$this->Main_model->delete_data($id);  
      	redirect(base_url() . "Main/deleted");  
  	}  
    public function deleted()  
   	{  
      	$this->index();  
  	}  
   	public function update_data(){  
      	$user_id = $this->uri->segment(3);  
      	$this->load->model("Main_model");  
       	$data["user_data"] = $this->Main_model->fetch_single_data($user_id);  
     	$data["fetch_data"] = $this->Main_model->fetch_data();  
      	$this->load->view("main_view", $data);  
   	}  
   	public function updated()  
   	{  
      	$this->index();  
   	}  
	
}  