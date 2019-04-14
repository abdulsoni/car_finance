<?php defined('BASEPATH') OR exit('No direct script access allowed');

   class demo extends CI_Controller {
	
      function __construct() { 
         parent::__construct(); 
		 $this->load->helper('url','form');
		 $this->load->database();
		 $this->load->view('demo_view');
		 $this->load->model('demo_model');
		 
		 }
		 
		 public function insert()
		 {
		  $data=array('firstname'=>$this->input->post('firstName'),
		  			  'lastName'=>$this->input->post('lastName'),
					  'email'=>$this->input->post('email'),
					  'gender'=>$this->input->post('gender'),
					  'birthdate'=>$this->input->post('birthdate'),
					  'cellNO'=>$this->input->post('cellNo'),
					  'password'=>$this->input->post('password'));
					  
		$this->demo_model->insert($data);
		
		}
		
		
		}
		?>
		
		 
		 