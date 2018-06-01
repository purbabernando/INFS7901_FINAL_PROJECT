<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Bank_account_controller extends CI_Controller {  
  	//functions  
   	public function index(){  
       	$this->load->model("Bank_account_model");  
      	$data["fetch_data"] = $this->Bank_account_model->fetch_data();  
     	//$this->load->view("main_view");  
      	$this->load->view("bank_account_view", $data);  
  	}  
    public function form_validation()  
    {  
     	//echo 'OK';  
      	$this->load->library('form_validation');  
		$this->form_validation->set_rules("asset_id", "Asset ID", 'required');
        $this->form_validation->set_rules("account_id", "Account ID", 'required|alpha_numeric');  
        $this->form_validation->set_rules("bank_balance", "Account Balance", 'required|alpha_numeric');  
      	if($this->form_validation->run())  
        {  
        	//true  
          	$this->load->model("Bank_account_model");  
        	$data = array(  
        		"asset_id"		     		=>$this->input->post("asset_id"),
             	"account_id"     			=>$this->input->post("account_id"),  
              	"bank_balance"        		=>$this->input->post("bank_balance")  
           	);  
            	if($this->input->post("update"))  
              	{  
                 	$this->Bank_account_model->update_data($data, $this->input->post("hidden_id"));  
                  	redirect(base_url() . "Bank_account_controller/updated");  
                }  
                if($this->input->post("insert"))  
                {  
                  	$this->Bank_account_model->insert_data($data);  
                 	redirect(base_url() . "Bank_account_controller/inserted");  
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
     	$this->load->model("Bank_account_model");  
       	$this->Bank_account_model->delete_data($id);  
      	redirect(base_url() . "Bank_account_controller/deleted");  
  	}  
    public function deleted()  
   	{  
      	$this->index();  
  	}  
   	public function update_data(){  
      	$user_id = $this->uri->segment(3);  
      	$this->load->model("Bank_account_model");  
       	$data["user_data"] = $this->Bank_account_model->fetch_single_data($user_id);  
     	$data["fetch_data"] = $this->Bank_account_model->fetch_data();  
      	$this->load->view("bank_account_view", $data);  
   	}  
   	public function updated()  
   	{  
      	$this->index();  
   	}  
	
}  