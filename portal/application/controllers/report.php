<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

 

class report extends CI_Controller {

 

  // calling the constructor

  public function __construct() {

    parent::__construct();       

    $this->load->model('leadCarfinance_m');

    $this->load->model('publisher_m');

    $this->load->model('buyer_m');

    $this->load->model('pubbuyermap_m');


  }

 

  public function index() { 

        if(! $this->session->userdata('isLoggedIn') ) {

            redirect('/login');

        }

  }
  /**

   * This function will display the list of report

   * data coming from the model

   */

  public function carfinance() {
  

	$searchparams['vid'] = $this->input->get('vid');

	$searchparams['buyerid'] = $this->input->get('buyerid');

	$searchparams['daterange'] = $this->input->get('daterange');

  	$data['rows'] = $this->leadCarfinance_m->getreport($searchparams);

  	$data['rows_revenue'] = $this->leadCarfinance_m->getreport_revenue($searchparams);

	$data['daterange'] = $this->input->get('daterange');

	$data['vid'] = $this->input->get('vid');

	$data['buyerid'] = $this->input->get('buyerid');

	$data['vid_arr'] = $this->publisher_m->getkeyvalue();

	$data['buyerid_arr'] = $this->buyer_m->getkeyvalue();

	$data['buyersetupid_arr'] = $this->buyer_m->setupgetkeyvalue();

    $this->load->view('report/carfinance', $data);

  } 

}