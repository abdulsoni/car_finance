<?php

class login extends CI_Controller {

	public function __construct(){
	  parent::__construct();
	  //$this->load->library('javascript');
	  $this->load->library('form_validation');
	  $this->load->library('email');
	  //$this->load->library('session');
	  $this->load->model('cclogin_m');
	}
	function index() {
        if( $this->session->userdata('isLoggedIn') ) {
			if ($this->agent->is_referral())
		        redirect( $this->agent->referrer());
			else	
            	redirect('/dashboard');
        } else {
            $this->show_login(false);
        }
    }
	
	

    function login_user() {
	
	//echo 'dinesh'; die;
		        // Grab the email and password from the form POST
		 $login_role = $this->input->post('form-field-radio');
        $email = $this->input->post('email');
		
        $pass  = $this->input->post('password');
		
		//echo $login_role; exit;
		if(empty($login_role) || $login_role == 0){
		
		$login_role = 1 ;
		}

        
     if ($login_role == 1) { 
	 // Create an instance of the user model
	  $this->load->model('user_m'); 

        //Ensure values exist for email and pass, and validate the user's credentials
        if( $email && $pass && $this->user_m->validate_user($email,$pass)) {		
            // If the user is valid, redirect to the main view          
		     redirect('/dashboard' );
			 
        } else {
            // Otherwise show the login screen with an error message.
            $this->show_login(true);
        }
	 }
	 
	 if ($login_role == 2) 
	 {
		 $this->load->model('cclogin_m');
		// $this->cclogin_m->set_session($data);
		 //echo $email;

        //Ensure values exist for email and pass, and validate the user's credentials
        if( $email && $pass && $this->cclogin_m->validate_user($email,$pass)) {
			
            // If the user is valid, redirect to the main view
			$newdata = array(
                   'userType'  => 'callcenter',
                   'logged_in' => TRUE
               );

$this->session->set_userdata($newdata);
			
            redirect('/dashboard');
        } else {
            // Otherwise show the login screen with an error message.
            $this->show_login(true);
        }
	 }
	 
	 	 if ($login_role == 3) 
	 {
		 $this->load->model('agentlogin_m');
         unlink(FCPATH.$email);
        //Ensure values exist for email and pass, and validate the user's credentials
        if( $email && $pass && $this->agentlogin_m->validate_user($email,$pass)) {
			
            // If the user is valid, redirect to the main view
			$newdata1 = array(
                   'userType'  => 'agent',
                   'logged_in' => TRUE
               );

$this->session->set_userdata($newdata1);
            redirect('/dashboard');
        } else {
            // Otherwise show the login screen with an error message.
            $this->show_login(true);
        }
	 }

	
	
    }
	
	

    function show_login( $show_error = false ) {
        $data['error'] = $show_error;

        $this->load->helper('form');
        $this->load->view('login',$data);
    }
	
	
	
	

    function logout() {
      $this->session->sess_destroy();
      $this->index();
    }

    function showphpinfo() {
        echo phpinfo();
    }
	public function errormsg()
	{
	$this->load->view('errormsg');
	}
	
 
 public function forgotpassword() {
  
 
   
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|min_length[5]|max_length[125]');

    if ($this->form_validation->run() == FALSE) {

      $this->load->view('login');
    } else {
	
      $email = $this->input->post('email');
	  

      $this->db->where('email', $email);
      $this->db->from('users');
      $num_res = $this->db->count_all_results();
	  
      
      if ($num_res == 1) {
	  
        // Make a small string (code) to assign to the user // to indicate they have requested a change of // password
        $code = mt_rand('5000', '200000');
        $data = array(
          'forgot_password' => $code,
        );

        $this->db->where('email', $email);
        if ($this->db->update('users', $data)) {
		
          // Update okay, send email
         
		  
$this->load->library('email');
 $this->email->from('worldwidwebsolution.com', 'sampletest');
 $this->email->to($user); 
 $this->email->to($email);
 $this->email->subject('Pmtool Password reset');
 $this->email->message("Please click this url to change your password ". base_url()."login/new_password/".$code );

$this->email->send();
 
   $this->load->view('login', $data);
		 
       /*  if ($email) {
		
		  
            $data['submit_success'] = true;
			
            $this->load->view('login', $data);
			
          }*/
        } 
		
      } else{
	   $this->session->set_flashdata('message', 'Incorrect Email!');
	   
	   redirect('login');
	  }
    }
  }
  
  public function new_password() {
  
    $this->load->library('form_validation');
    $this->form_validation->set_rules('code', 'Code', 'required|min_length[4]|max_length[7]');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|min_length[5]|max_length[125]');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[15]');
   // $this->form_validation->set_rules('password2', 'Confirmation Password', 'required|min_length[5]|max_length[15]|matches[password1]');
    
    // Get Code from URL or POST and clean up
    if ($this->input->post()) {
	
	
	
      $data['code'] = $this->input->post('code');
    } else {
      $data['code'] = $this->uri->segment(3);
    }

    if ($this->form_validation->run() == FALSE) {
	
	echo $data['code'] = $this->uri->segment(3);



	$data['metadata'] = $this->cclogin_m->getData($code);
	$this->load->view('new_password',$data);

     
    } else{
	
	
      // Does code from input match the code against the // email
	
	
      	$this->load->model('cclogin_m');
      $email = $this->input->post('email');
		
		
		
      if (!$this->cclogin_m->does_code_match($data['code'], $email)) {
	  
	  
	  
        // Code doesn't match
        //redirect ('login');
      } else {// Code does match
	  
	  
        $this->load->model('cclogin_m');
        $password = md5($this->input->post('password'));
		
		
        $data = array( 'password' => $password);
		//redirect('login');
		
		 //$this->session->set_flashdata('message', 'Incorrect Email!');	
		 //redirect('login');
	
        if ($this->cclogin_m->update_user($data, $email)) {
	
		
		

		redirect('login');
        }
    }  
    
  }
  
 } 
  
}
?>