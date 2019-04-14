<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class postingspecs extends CI_Controller {
 
  // calling the constructor
  public function __construct() {
    parent::__construct();
  }
 
  public function index() {
  }
 
  /**
   * This function will display the list of leadPayday
   * data coming from the model
   */
  public function carfinance() {  
		$this->load->view('postingspecs/carfinance');
  }
}