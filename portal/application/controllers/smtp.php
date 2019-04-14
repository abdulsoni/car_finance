<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

 

class smtp extends CI_Controller {

 

  // calling the constructor

  public function __construct() {

    parent::__construct();

    $this->load->model('smtp_m');

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
	 //echo "comes listing";die;

  	if(isset($_GET['page'])){
		// echo "now to comes";die;
      // print_r($data);
		
		$limit = $this->input->get('size');

		$offset = ($this->input->get('page') * $limit);

		

		/*$searchparams['id'] = $this->input->get('id');

		$searchparams['vid'] = $this->input->get('vid');

		$searchparams['daterange'] = $this->input->get('daterange');

		$searchparams['keyword'] = $this->input->get('keyword');

		$searchparams['leadStatus'] = $this->input->get('leadStatus');*/

		$data = array(

		  'total_rows' => $this->smtp_m->getlisting($searchparams),

		   'rows' => $this->smtp_m->getlisting($searchparams,$limit, $offset)

		);

	

		echo json_encode($data);exit;

	}else{
		

		$data = $_GET;

		$data['vid_arr'] = $this->smtp_m->getkeyvalue();

		//echo "comes in else " ; die;
		
		//$data['buyerid'] = $this->buyer_m->getkeyvalue();

	//print_r($data);die;

		$this->load->view('smtp/listing',$data);

	}

  }
  

 

  /**

   * This function will display the list of buyer

   * data coming from the model

   */

  public function setup() {

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

  /*public function form($id = null) {

	if (!empty($id)) {

		$data['header']['title'] = 'Edit';

		$data['view_data'] = $this->buyer_m->get($id);

	}

	else{

   		$data['header']['title'] = 'Add';

		$data['view_data'] = array();

	}	

	    $this->load->view('buyer/form', $data);

  }*/

 



  /**

   * This function will display the form to  a buyer setup

   */

  public function setupform($id = null) {
	  //echo $id;die;

	//$data['buyers'] = $this->smtp_m->getkeyvalue();

	if (!empty($id)) {

		$data['header']['title'] = 'Edit';

		$data['view_data'] = $this->smtp_m->getsetup($id);

	}

	else{

   		$data['header']['title'] = 'Add';

		$data['view_data'] = array();

	}	
//print_r( $data) ; die;
	    $this->load->view('smtp/setupform', $data);

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

 // echo "aaya aaya";die;

    if (!empty($_POST)) {

      $data['protocol'] = $this->input->post('protocol');

      $data['smtphost'] = $this->input->post('smtphost');

      $data['smtpport'] = $this->input->post('smtpport');

      $data['smtpuser'] = $this->input->post('smtpuser');

      $data['smtppass'] = $this->input->post('smtppass');

      $data['charset'] = $this->input->post('charset');

      $data['mailtype'] = $this->input->post('mailtype');

      $data['newline'] = $this->input->post('newline');
	  $data['smtpFooter'] = $this->input->post('smtpFooter');

		if (!empty($_POST['id'])) { 

			$data['id'] = $this->input->post('id');

			$res = $this->smtp_m->addsetup($data);

			if($res)

				$this->session->set_flashdata('success', 'Record successfully updated!');

			else

				$this->session->set_flashdata('error', 'Record failed to update!');	

		}

		else{

		  $data['cDate'] = date('Y-m-d H:i:s');  

			$res = $this->smtp_m->addsetup($data);
			//print_r("result aa gya");die;

			if($res)

				$this->session->set_flashdata('success', 'Record successfully submitted!');

			else

				$this->session->set_flashdata('error', 'Record failed to submit!');	

		}

      redirect('smtp/listing'); // back to the add form

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