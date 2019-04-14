<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class agents extends CI_Controller {
 
  // calling the constructor
  public function __construct() {
    parent::__construct();
    $this->load->model('agents_m');
	$this->load->model('callcenter_m');
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
	$data['vid_arr'] = $this->callcenter_m->getkeyvalue();
    $data['rows'] = $this->agents_m->get();
	$config['total_rows'] = 200;
	$config['per_page'] = 20; 
 	$this->pagination->initialize($config); 
    $this->load->view('agents/listing', $data);
  }
 
  /**
   * This function will display the form to add a new publisher
   */
  public function form($id = null) {
	  $this->session->userdata('id')==$id;
	  		$data['vid_arr'] = $this->callcenter_m->getkeyvalue($id);
	if (!empty($id)) {
		$data['header']['title'] = 'Edit';
		$data['view_data'] = $this->agents_m->get($id);
	}
	else{
   		$data['header']['title'] = 'Add';
		$data['view_data'] = $this->agents_m->get($id);
		
	}	
	//print_r($data); exit;
	    $this->load->view('agents/form', $data);
		
  }
 

 
  /**
   * This function will call the model add/update function
   * and add/update the new Agents.
   */
  public function add() {
  
    if (!empty($_POST)) { //print_r($_POST); exit;
      $data['email'] = $this->input->post('email');
      $data['password'] = $this->input->post('password');
      $data['firstName'] = $this->input->post('firstName');
      $data['lastName'] = $this->input->post('lastName');
      $data['phone'] = $this->input->post('phone');
	  $data['email'] = $this->input->post('email');
	   $data['vid'] = $this->input->post('vid');
      $data['address'] = $this->input->post('address');
      $data['city'] = $this->input->post('city');
      $data['state'] = $this->input->post('state');
      $data['country'] = $this->input->post('country');
      $data['zipcode'] = $this->input->post('zipcode');
      $data['status'] = $this->input->post('status');
	  $data['leadType'] = implode(",",$this->input->post('leadType'));
      $data['cDate'] = date('Y-m-d H:i:s'); 
		if (!empty($_POST['id'])) {
			unset($data['email']);
			$data['id'] = $this->input->post('id');
			$res = $this->agents_m->add($data);
			if($res)
				$this->session->set_flashdata('success', 'Record successfully updated!');
			else
				$this->session->set_flashdata('error', 'Record failed to update!');	
		}
		else{
			$res = $this->agents_m->add($data);
			if($res)
				$this->session->set_flashdata('success', 'Record successfully submitted!');
			else
				$this->session->set_flashdata('error', 'Record failed to submit!');	
		}
	  
      redirect('agents/listing'); // back to the add form
    }
    else {
     redirect('agents/listing');
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
      $this->agents_m->remove($id);
      redirect('agents/listing'); // back to the listing
    }
  }

  /**
   * This function will display the form to add a new publisher lead type
   */
  public function leadform($vid = null) {
	if (!empty($vid)) {
		$data['header']['title'] = 'Leadtype Edit';
		$data['vid'] = $vid;
		$data['view_data'] = $this->agents_m->getleadtype($vid);
		//print_r($data['view_data']);exit;
	    $this->load->view('agents/leadform', $data);
	}else{
		redirect('agents/listing');
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
			$res = $this->agents_m->addleadtype($data);
			if($res)
				$this->session->set_flashdata('success', 'Leadtype successfully updated!');
			else
				$this->session->set_flashdata('error', 'Leadtype failed to update!');	
		}
	  
      redirect('agents/listing'); // back to the add form
    }
    else {
     $this->load->view('agents/leadform');
    }
  }
 
 public function viewedit($id) {  	  	
		$data['row'] = $this->agents_m->get($id);
		$this->load->view('agents/form', $data);
  }
 

}