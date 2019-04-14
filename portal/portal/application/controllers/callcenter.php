<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class callcenter extends CI_Controller {
 
  // calling the constructor
  public function __construct() {
    parent::__construct();
    $this->load->model('callcenter_m');
	$this->load->model('buyer_m');
	$this->load->library('pagination');
	$this->load->library('form_validation');
	
        //if(! $this->session->userdata('isLoggedIn') ) {
        //    redirect('/login');	
       // }
	   //echo "hello";
  }
 
  public function index() {
		//echo hello;
		$this->listing();
		//$this->getleadtype();
  }
 
  /**
   * This function will display the list of publisher
   * data coming from the model
   */
  public function listing() {
	  
    //$data['header']['title'] = 'Publisher listing';
    //$data['footer']['scripts']['homescript.js'] = 'home';
    //$data['view_name'] = 'publisher/listing';
	
    $data['rows'] = $this->callcenter_m->get();
	$config['total_rows'] = 200;
	$config['per_page'] = 20; 
 	$this->pagination->initialize($config); 
    $this->load->view('callcenter/listing', $data);
 	
  }
 
  /**
   * This function will display the form to add a new publisher
   */
  public function form($id = null) {
$data['buyerid_arr'] = $this->buyer_m->getkeyvalue();
	if (!empty($id)) {
		$data['header']['title'] = 'Edit';
		$data['view_data'] = $this->callcenter_m->get($id);
	}
	else{
   		$data['header']['title'] = 'Add';
		$data['view_data'] = array();
	}	
	//print_r($data); exit;
	    $this->load->view('callcenter/form', $data);
  }
 

 
  /**
   * This function will call the model add/update function
   * and add/update the new publisher.
   */
  public function add() {
  
    if (!empty($_POST)) { //print_r ($_POST); exit;
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
	  $data['leadType'] = implode(",",$this->input->post('leadType'));
	  $data['buyerid'] = implode(",",$this->input->post('buyerid'));
      $data['cDate'] = date('Y-m-d H:i:s'); 
		if (!empty($_POST['id'])) {
			unset($data['email']);
			$data['id'] = $this->input->post('id');
			$res = $this->callcenter_m->add($data);
			if($res)
			
				$this->session->set_flashdata('success', 'Record successfully updated!');
			else
				$this->session->set_flashdata('error', 'Record failed to update!');	
		}
		else{
			$res = $this->callcenter_m->add($data);
			if($res)
				$this->session->set_flashdata('success', 'Record successfully submitted!');
			else
				$this->session->set_flashdata('error', 'Record failed to submit!');	
		}
	  
      redirect('callcenter/listing'); // back to the add form
    }
    else {
     redirect('callcenter/listing');
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
      $this->callcenter_m->remove($id);
      redirect('callcenter/listing'); // back to the listing
    }
  }

  /**
   * This function will display the form to add a new publisher lead type
   */
  public function leadform($vid = null) {
	if (!empty($vid)) {
		$data['header']['title'] = 'Leadtype Edit';
		$data['vid'] = $vid;
		$data['selected_leadtype'] = explode(',',$this->callcenter_m->getselectedleadtype($vid));
		$data['view_data'] = $this->callcenter_m->getleadtype($vid);
		
	/*	echo '<pre>';
		print_r($data);exit;*/
	    $this->load->view('callcenter/leadform', $data);
	}else{
		redirect('callcenter/listing');
	}
  }
 
  /**
   * This function will call the model add/update function
   * and add/update the new publisher.
   */
  public function leadadd($vid) {
	// echo '<pre>';
	  //print_r($_POST);die;
  
    if (!empty($_POST)) {
		foreach($GLOBALS['LEADTYPE'] as $key =>$val){
      		$data['vid'] = $vid;
      		$data['type'] = $key;
			$data['status'] = $this->input->post('status_'.$key);
			if(empty($data['status'])) continue;
			$data['margin'] = $this->input->post('margin_'.$key);
			$data['duplicate'] = $this->input->post('duplicate_'.$key);
			$data['daytotal'] = $this->input->post('daytotal_'.$key);			
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
			//echo '<pre>';
			//print_r($data);die;
			$res = $this->callcenter_m->addleadtype($data);
			if($res)
				$this->session->set_flashdata('success', 'Leadtype successfully updated!');
			else
				$this->session->set_flashdata('error', 'Leadtype failed to update!');	
		}
	  
      redirect('callcenter/listing'); // back to the add form
    }
    else {
     $this->load->view('callcenter/leadform');
    }
  }
  
//for callcenter login
    function login_user() { 
        // Create an instance of the user model
        $this->load->model('callcenter_m');
		

        // Grab the email and password from the form POST
        $email = $this->input->post('email');
        $pass  = $this->input->post('password');
		//echo $pass; exit;

        //Ensure values exist for email and pass, and validate the user's credentials
        if( $email && $pass && $this->callcenter_m->validate_user($email,$pass)) { 
            // If the user is valid, redirect to the main view
            redirect('/dashboard');
        } else { 
		//echo hello; exit;
            // Otherwise show the login screen with an error message.
            $this->show_login(true);
        }
    }

    function show_login( $show_error = false ) { 
        $data['error'] = $show_error;

        $this->load->helper('form');
        $this->load->view('callcenter_login',$data); 
    }

    function logout() {
      $this->session->sess_destroy();
      $this->index();
    }

    function showphpinfo() {
        echo phpinfo();
    }
	
	function getleadtype()
	{
	  	    $data['rows'] = $this->callcenter_m->get();
	$config['total_rows'] = 200;
	$config['per_page'] = 20; 
 	$this->pagination->initialize($config); 
    $this->load->view('callcenter/listing', $data);

  	
//  	if(isset($_GET['page']) || $this->input->get('download')){
//		$limit = $this->input->get('size');
//		$offset = ($this->input->get('page') * $limit);
//		
//		$searchparams['id'] = $this->input->get('id');
//		$searchparams['daterange'] = $this->input->get('daterange');
//		$searchparams['keyword'] = $this->input->get('keyword');
//		$searchparams['leadStatus'] = $this->input->get('leadStatus');
//		$data = array(
//		   'total_rows' => $this->callcenter_m->getleadtype($searchparams),
//		   'rows' => $this->callcenter_m->getleadtype($searchparams,$limit, $offset)
//		);
//	
//		echo json_encode($data);exit;
//	}else{
//		$data = $_GET;
//		$this->load->view('callcenter/listing', $data);
//	}
  

	}
	     function register()
    { 
        //set validation rules
        $this->form_validation->set_rules('company', 'Company', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('cpassword', 'Confirm Password','trim|required|matches[password]');
        
       // validate form input
        if ($this->form_validation->run() == FALSE)
        { 
          //   fails
		  echo "please fill all the fields properly";
           // $this->load->view('login');
        }
        else {
     //  print_r($_POST); exit;
            //insert the user registration details into database
            $data = array(
                'company' => $this->input->post('company'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );
            
            // insert form data into database
            if ($this->callcenter_m->create_new_callcenter($data))
            {
				$this->load->view('login');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                $this->load->helper('form');
			}
        }
    }


}