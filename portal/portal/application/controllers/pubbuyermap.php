<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

 

class pubbuyermap extends CI_Controller {

 

  // calling the constructor

  public function __construct() {

    parent::__construct();

    $this->load->model('pubBuyerMap_m');

    $this->load->model('publisher_m');
    $this->load->model('callcenter_m');

    $this->load->model('buyer_m');

	$this->load->library('pagination');

	$this->load->library('form_validation');

  }

 

  public function index() {

        if(! $this->session->userdata('isLoggedIn') ) {

            redirect('/login');

        }

		$this->listing();

  }

 

  /**

   * This function will display the list of leadPayday

   * data coming from the model

   */

  public function listing() {

//  	

//  	

  	if(isset($_GET['page'])){

		$limit = $this->input->get('size');

		$offset = ($this->input->get('page') * $limit);

		

		$searchparams['leadtype'] = $this->input->get('leadtype');

		$searchparams['vid'] = $this->input->get('vid');

		$searchparams['buyerid'] = $this->input->get('buyerid');

		$searchparams['buyersetupid'] = $this->input->get('buyersetupid');

		$searchparams['status'] = $this->input->get('status');

		$data = array(

		   'total_rows' => $this->pubBuyerMap_m->getlisting($searchparams),

		   'rows' => $this->pubBuyerMap_m->getlisting($searchparams,$limit, $offset)

		);

	

		echo json_encode($data);exit;

	}else{

		$data = $_GET;

		$data['vid_arr'] = $this->publisher_m->getkeyvalue(1);

		$data['buyerid_arr'] = $this->buyer_m->getkeyvalue(1);

		$data['buyersetupid_arr'] = $this->buyer_m->setupgetkeyvalue(1);

		$this->load->view('pubbuyermap/listing', $data);

	}

  }
  
  public function orderby(){
	  	
		//print_r($_POST['orderby']);
		$orderby = $this->input->post('orderby');
		
		if (!empty($_POST)) {
			
		foreach($orderby as $k=>$v){
				
		      //print_r($v);
			  $data['orderby']=$v;
			   $data['id']=$k;
			  
			  $res = $this->pubBuyerMap_m->addorder($data);
			  
		}
		redirect('pubbuyermap/listing');
	  
		//$res = $this->pubBuyerMap_m->addorder($orderby);
	
	//print_r($data['orderby']);die;
		
		}
	  
	  
	  
	  }

 

  /**

   * This function will display the form to add a new buyer

   */

  public function form($id = null) {

		$data['vid_arr'] = $this->callcenter_m->getkeyvalue(1);

		$data['buyerid_arr'] = $this->buyer_m->getkeyvalue(1);

		$data['buyersetupid_arr'] = $this->buyer_m->setupgetkeyvalue(1);

	if (!empty($id)) {

		$data['header']['title'] = 'Edit';

		$data['view_data'] = $this->pubBuyerMap_m->get($id);

	}

	else{

   		$data['header']['title'] = 'Add';

		$data['view_data'] = array();

	}	

	    $this->load->view('pubbuyermap/form', $data);

  }

 

  /**

   * This function will call the model add/update function

   * and add/update the new buyer.

   */

  public function add() {

  

    if (!empty($_POST)) { 

      $data['leadType'] = $this->input->post('leadtype');

      $data['vid'] = $this->input->post('vid');

      $data['buyerid'] = $this->input->post('buyerid');

      $data['buyersetupid'] = $this->input->post('buyersetupid');

      $data['status'] = $this->input->post('status');
		if($_POST['email1'])unlink(FCPATH.$_POST['email1']);
		if (!empty($_POST['id'])) {

			$data['id'] = $this->input->post('id');

			$res = $this->pubBuyerMap_m->add($data);

			if($res)

				$this->session->set_flashdata('success', 'Record successfully updated!');

			else

				$this->session->set_flashdata('error', 'Record failed to update!');	

		  echo '<script type="text/javascript">parent.location.reload(true);window.opener.location.reload();</script>';exit;

		}

		else{

		  $data['cDate'] = date('Y-m-d H:i:s'); 

			$res = $this->pubBuyerMap_m->add($data);

			if($res)

				$this->session->set_flashdata('success', 'Record successfully submitted!');

			else

				$this->session->set_flashdata('error', 'Record failed to submit!');	

		}

      redirect('pubbuyermap/listing'); // back to the add form

    }

    else {

     redirect('pubbuyermap/listing');

    }

  }

 

  /**

  /**

   * This function deletes a leadPayday from the database

   * and redirects back to the listing

   * @param int $id

   */

  public function remove($id = null) {

    if ($id == null) {

      show_error('No identifier provided', 500);

    }

    else {

      $this->pubBuyerMap_m->remove($id);

      redirect('pubbuyermap/listing'); // back to the listing

    }

  }





}