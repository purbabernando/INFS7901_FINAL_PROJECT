<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Login_controller extends CI_Controller {  
      public function index()  
      {  
           //http://localhost/tutorial/codeigniter/Login_controller/login  
           $data['title'] = 'CodeIgniter Simple Login Form With Sessions';  
           $this->load->view("login", $data);  
      }  
      function login_validation()  
      {  
           $this->load->library('form_validation');  
           $this->form_validation->set_rules('username', 'Username', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           if($this->form_validation->run())  
           {  
                //true  
                $username = $this->input->post('username');  
                $password = $this->input->post('password');  
                //model function  
                $this->load->model('login_model');  
                if($this->login_model->can_login($username, $password))  
                {  
                     $session_data = array(  
                          'username'     =>     $username  
                     );  
                     $this->session->set_userdata($session_data);  
                     redirect(base_url() . 'Login_controller/enter');  
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Invalid Username and Password');  
                     redirect(base_url() . 'Login_controller/index');  
                }  
           }  
           else  
           {  
                //false  
                $this->index();  
           }  
      }  
      function enter(){  
           if($this->session->userdata('username') != '')  
           {  
                /*echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';  
                echo '<label><a href="'.base_url().'Login_controller/logout">Logout</a></label>';*/
                redirect(base_url() . 'homepage');
           }  
           else  
           {
                redirect(base_url() . 'Login_controller/index');  
           }  
      }  
      public function logout()  
      {  
           $this->session->unset_userdata('username');  
           redirect(base_url() . 'Login_controller/index');  
      }  
 }  