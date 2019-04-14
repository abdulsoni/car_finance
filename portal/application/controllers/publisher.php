<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class publisher extends CI_Controller {
 
  // calling the constructor
  public function __construct() {
    parent::__construct();
    $this->load->model('publisher_m');
	$this->load->library('pagination');
	$this->load->library('form_validation');
        if(! $this->session->userdata('isLoggedIn') ) {
            redirect('/login');
        }
  }
 
  public function index() {
		$this->listing();
  }
 
  /**
   * This function will display the list of publisher
   * data coming from the model
   */
  public function listing() {
    //$data['header']['title'] = 'Publisher listing';
    //$data['footer']['scripts']['homescript.js'] = 'home';
    //$data['view_name'] = 'publisher/listing';
    $data['rows'] = $this->publisher_m->get();
	$config['total_rows'] = 200;
	$config['per_page'] = 20; 
 	$this->pagination->initialize($config); 
    $this->load->view('publisher/listing', $data);
  }
 
  /**
   * This function will display the form to add a new publisher
   */
  public function form($id = null) {
	if (!empty($id)) {
		$data['header']['title'] = 'Edit';
		$data['view_data'] = $this->publisher_m->get($id);
	}
	else{
   		$data['header']['title'] = 'Add';
		$data['view_data'] = array();
	}	
	    $this->load->view('publisher/form', $data);
  }
 

 
  /**
   * This function will call the model add/update function
   * and add/update the new publisher.
   */
  public function add() {
  
    if (!empty($_POST)) {
      $data['email'] = $this->input->post('email');
      $data['password'] = $this->input->post('password');
      $data['firstName'] = $this->input->post('firstName');
      $data['lastName'] = $this->input->post('lastName');
      $data['phone'] = $this->input->post('phone');
      $data['company'] = $this->input->post('company');
      $data['address'] = $this->input->post('address');
      $data['city'] = $this->input->post('city');
      $data['state'] = $this->input->post('state');
      $data['country'] = $this->input->post('country');
      $data['zipcode'] = $this->input->post('zipcode');
      $data['status'] = $this->input->post('status');
      $data['cDate'] = date('Y-m-d H:i:s'); 
		
		if (!empty($_POST['id'])) {
			unset($data['email']);
			$data['id'] = $this->input->post('id');
			$res = $this->publisher_m->add($data);
			if($res)
				$this->session->set_flashdata('success', 'Record successfully updated!');
			else
				$this->session->set_flashdata('error', 'Record failed to update!');	
		}
		else{
			$res = $this->publisher_m->add($data);
			if($res)
				$this->session->set_flashdata('success', 'Record successfully submitted!');
			else
				$this->session->set_flashdata('error', 'Record failed to submit!');	
		}
	  
      redirect('publisher/listing'); // back to the add form
    }
    else {
     redirect('publisher/listing');
    }
  }
 
  /**
  /**
   * This function deletes a publisher from the database
   * and redirects back to the listing
   * @param int $id
   */
  public function remove($id = null) {
    if ($id == null) {
      show_error('No identifier provided', 500);
    }
    else {
      $this->publisher_m->remove($id);
      redirect('publisher/listing'); // back to the listing
    }
  }

  /**
   * This function will display the form to add a new publisher lead type
   */
  public function leadform($vid = null) {
	if (!empty($vid)) {
		$data['header']['title'] = 'Leadtype Edit';
		$data['vid'] = $vid;
		$data['view_data'] = $this->publisher_m->getleadtype($vid);
		//print_r($data['view_data']);exit;
	    $this->load->view('publisher/leadform', $data);
	}else{
		redirect('publisher/listing');
	}
  }
 
  /**
   * This function will call the model add/update function
   * and add/update the new publisher.
   */
  public function leadadd($vid) {
  
    if (!empty($_POST)) {
		foreach($GLOBALS['LEADTYPE'] as $key =>$val){
      		$data['vid'] = $vid;
      		$data['type'] = $key;
			$data['status'] = $this->input->post('status_'.$key);
			if(empty($data['status'])) continue;
			$data['margin'] = $this->input->post('margin_'.$key);
			$data['daylimit'] = $this->input->post('daylimit_'.$key);
			$data['weeklimit'] = $this->input->post('weeklimit_'.$key);
			$data['monthlimit'] = $this->input->post('monthlimit_'.$key);
			$data['daycredit'] = $this->input->post('daycredit_'.$key);
			$data['weekcredit'] = $this->input->post('weekcredit_'.$key);
			$data['monthcredit'] = $this->input->post('monthcredit_'.$key);
			$data['mDate'] = date('Y-m-d H:i:s'); 
			$data['cDate'] = date('Y-m-d H:i:s'); 
			$data['id'] = $this->input->post('id_'.$key);
			if ( !empty($data['id'])) {
				unset($data['vid'],$data['type']);				
			}
			$res = $this->publisher_m->addleadtype($data);
			if($res)
				$this->session->set_flashdata('success', 'Leadtype successfully updated!');
			else
				$this->session->set_flashdata('error', 'Leadtype failed to update!');	
		}
	  
      redirect('publisher/listing'); // back to the add form
    }
    else {
     $this->load->view('publisher/leadform');
    }
  }
 

}