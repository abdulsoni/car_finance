 <?php

class forlogin extends CI_Controller {

	public function __construct(){
	  parent::__construct();
	  //$this->load->library('javascript');
	  //$this->load->library('form_validation');
	  //$this->load->library('email');
	  //$this->load->library('session');
	}  public function ForgotPassword()
   {
         $email = $this->input->post('email');      
         $findemail = $this->usermodel->ForgotPassword($email);  
         if($findemail){
          $this->usermodel->sendpassword($findemail);        
           }else{
          $this->session->set_flashdata('msg',' Email not found!');
          redirect(base_url().'user/Login','refresh');
      }
   }
   }
   ?>