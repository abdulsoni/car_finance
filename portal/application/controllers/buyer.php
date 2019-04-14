<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class buyer extends CI_Controller {
 
  // calling the constructor
  public function __construct() {
    parent::__construct();
    $this->load->model('buyer_m');
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
   * This function will display the list of buyer
   * data coming from the model
   */
  public function listing() {
  	if(isset($_GET['page'])){
		$limit = $this->input->get('size');
		$offset = ($this->input->get('page') * $limit);
		
		$searchparams['id'] = $this->input->get('id');
		$searchparams['vid'] = $this->input->get('vid');
		$searchparams['daterange'] = $this->input->get('daterange');
		$searchparams['keyword'] = $this->input->get('keyword');
		$searchparams['leadStatus'] = $this->input->get('leadStatus');
		$data = array(
		   'total_rows' => $this->buyer_m->getlisting($searchparams),
		   'rows' => $this->buyer_m->getlisting($searchparams,$limit, $offset)
		);
	
		echo json_encode($data);exit;
	}else{
		$data = $_GET;
		$data['vid_arr'] = $this->buyer_m->getkeyvalue();
		//$data['buyerid'] = $this->buyer_m->getkeyvalue();
		$this->load->view('buyer/listing', $data);
	}
  }
 
  /**
   * This function will display the list of buyer
   * data coming from the model
   */
  public function setup()
   {
   
  	if(isset($_GET['page'])){
		$limit = $this->input->get('size');
		$offset = ($this->input->get('page') * $limit);
		
		$searchparams['leadtype'] = $this->input->get('leadtype');
		$searchparams['buyerid'] = $this->input->get('buyerid');
		$searchparams['mode'] = $this->input->get('mode');
		$searchparams['status'] = $this->input->get('status');
		$data = array(
		   'total_rows' => $this->buyer_m->getsetuplisting($searchparams),
		   'rows' => $this->buyer_m->getsetuplisting($searchparams,$limit, $offset)
		);
	
		echo json_encode($data);exit;
	}else{
	
		$data = $_GET;
		$data['buyer_arr'] = $this->buyer_m->getkeyvalue();
		$data['leadtype'] = $this->input->get('leadtype');
		$data['buyerid'] = $this->input->get('buyerid');
		$data['mode'] = $this->input->get('mode');
		$data['status'] = $this->input->get('status');
		$this->load->view('buyer/setuplisting', $data);
	}
  }
 
  /**
   * This function will display the form to add a new buyer
   */
  public function form($id = null) {
	if (!empty($id)) {
		$data['header']['title'] = 'Edit';
		$data['view_data'] = $this->buyer_m->get($id);
	}
	else{
   		$data['header']['title'] = 'Add';
		$data['view_data'] = array();
	}	
	    $this->load->view('buyer/form', $data);
  }
 

  /**
   * This function will display the form to  a buyer setup
   */
  public function setupform($id = null) {
	$data['buyers'] = $this->buyer_m->getkeyvalue(1);
	if (!empty($id)) {
		$data['header']['title'] = 'Edit';
		$data['view_data'] = $this->buyer_m->getsetup($id);
	}
	else{
   		$data['header']['title'] = 'Add';
		$data['view_data'] = array();
	}	
	    $this->load->view('buyer/setupform', $data);
  }
 

 
  /**
   * This function will call the model add/update function
   * and add/update the new buyer.
   */
  public function add() {
  
    if (!empty($_POST)) {
      $data['email'] = $this->input->post('email');
      if($this->input->post('password') !='' ) $data['password'] = $this->input->post('password');
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
			$res = $this->buyer_m->add($data);
			if($res)
				$this->session->set_flashdata('success', 'Record successfully updated!');
			else
				$this->session->set_flashdata('error', 'Record failed to update!');	
		  echo '<script type="text/javascript">parent.location.reload(true);window.opener.location.reload();</script>';exit;
		}
		else{
			$res = $this->buyer_m->add($data);
			if($res)
				$this->session->set_flashdata('success', 'Record successfully submitted!');
			else
				$this->session->set_flashdata('error', 'Record failed to submit!');	
		}
      redirect('buyer/listing'); // back to the add form
    }
    else {
     redirect('buyer/listing');
    }
  }
 
  /**
   * This function will call the model add/update function
   * and add/update the new buyer.
   */
  public function addsetup() {
  
    if (!empty($_POST)) {
      $data['leadtype'] = $this->input->post('leadtype');
      $data['buyerid'] = $this->input->post('buyerid');
      $data['name'] = $this->input->post('name');
      $data['tier_price'] = $this->input->post('tier_price');
      $data['parameter1'] = $this->input->post('parameter1');
      $data['parameter2'] = $this->input->post('parameter2');
      $data['parameter3'] = $this->input->post('parameter3');
      $data['ping_url_test'] = $this->input->post('ping_url_test');
      $data['ping_url_live'] = $this->input->post('ping_url_live');
      $data['post_url_test'] = $this->input->post('post_url_test');
      $data['post_url_live'] = $this->input->post('post_url_live');
      $data['timeout'] = $this->input->post('timeout');
      $data['mode'] = $this->input->post('mode');
      $data['notes'] = $this->input->post('notes');
      $data['status'] = $this->input->post('status');
		if (!empty($_POST['id'])) {
			$data['id'] = $this->input->post('id');
			$res = $this->buyer_m->addsetup($data);
			if($res)
				$this->session->set_flashdata('success', 'Record successfully updated!');
			else
				$this->session->set_flashdata('error', 'Record failed to update!');	
		  echo '<script type="text/javascript">parent.location.reload(true);window.opener.location.reload();</script>';exit;
		}
		else{
		  $data['cDate'] = date('Y-m-d H:i:s'); 
			$res = $this->buyer_m->addsetup($data);
			if($res)
				$this->session->set_flashdata('success', 'Record successfully submitted!');
			else
				$this->session->set_flashdata('error', 'Record failed to submit!');	
		}
      redirect('buyer/setup'); // back to the add form
    }
    else {
     redirect('buyer/setup');
    }
  }
 
  /**
  /**
   * This function deletes a buyer from the database
   * and redirects back to the listing
   * @param int $id
   */
  public function remove($id = null) {
    if ($id == null) {
      show_error('No identifier provided', 500);
    }
    else {
      $this->buyer_m->remove($id);
      redirect('buyer/listing'); // back to the listing
    }
  }

  /**
  /**
   * This function deletes a buyer from the database
   * and redirects back to the listing
   * @param int $id
   */
  public function setupremove($id = null) {
    if ($id == null) {
      show_error('No identifier provided', 500);
    }
    else {
      $this->buyer_m->setupremove($id);
      redirect('buyer/setup'); // back to the listing
    }
  }

  /**
   * This function will display the list of buyer
   * data coming from the model
   */
  public function getbuyersetup($id) {
		$data =  $this->buyer_m->setupgetkeyvalue(1,$id);	
		foreach($data as $k=>$v){
			echo $dropdown = '<option value="'.$k.'">'.$v.'</option>';
		}
		exit;	
  }
 


}