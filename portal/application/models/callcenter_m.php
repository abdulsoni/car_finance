<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class callcenter_m extends CI_Model {
 
  public function __construct() {
    parent::__construct();
  }
 
  /**
   * This funtion takes id as a parameter and will fetch the record.
   * If id is not provided, then it will fetch all the records form the table.
   * @param int $id
   * @return mixed
   */
  public function get($id = null) {
	  
    $this->db->select()->from('callcenter');
 
    // where condition if id is present
    if ($id != null) {
      $this->db->where('id', $id);
    }
    else {
      $this->db->order_by('id');
    }
 
    $query = $this->db->get();
 
    if ($id != null) {
      return $query->row_array(); // single row
    }
    else {
      return $query->result_array(); // array of result
    }
  }
 
  /**
   * This funtion takes id as a parameter and will fetch the record.
   * If id is not provided, then it will fetch all the records form the table.
   * @param int $id
   * @return mixed
   */
  public function get_publisher_fulldetail($id = null, $leadtype) {
  	$this->db->select('p.*,pd.*');
	$this->db->from('callcenter as p');
	$this->db->join('publisher_leadtype as pd', 'p.id=pd.vid', 'left');
    //$this->db->select()->from('publisher');
 
    // where condition if id is present
    if (!empty($leadtype)) {
      $this->db->where('pd.type', $leadtype);
    }
    if ($id != null) {
      $this->db->where('p.id', $id);
    }
    else {
      $this->db->order_by('p.id');
    }
 
    $query = $this->db->get();
	// echo 'mmmm'.$this->db->last_query();exit;
    if ($id != null) {
      return $query->row(); // single row
    }
    else {
      return $query->result_array(); // array of result
    }
  }
 
  /**
   * This funtion takes id as a parameter and will fetch the record.
   * If id is not provided, then it will fetch all the records form the table.
   * @param int $id
   * @return mixed
   */
  public function getkeyvalue() {
		$this->db->select()->from('callcenter');
		$query = $this->db->get();
	 //echo $this->db->last_query();exit;
		$return = array();
		if($query->num_rows() > 0) {
			foreach($query->result_array() as $row) {
				$return[$row['id']] = $row['company'];
			}
		}//print_r($return);
		return $return;
  }
  /**
   * This function will delete the record based on the id
   * @param $id
   */
  public function remove($id) {
    $this->db->where('id', $id);
    $this->db->delete('callcenter');
  }
 
  /**
   * This function will take the post data passed from the controller
   * If id is present, then it will do an update
   * else an insert. One function doing both add and edit.
   * @param $data
   */
  public function add($data) {
    if (isset($data['id'])) {
      $this->db->where('id', $data['id']);
      $res = $this->db->update('callcenter',$data); // update the record
    }
    else {
      $res = $this->db->insert('callcenter', $data); // insert new record
    }
	return $res;
  }

  /**
   * This funtion takes id as a parameter and will fetch the record.
   * If id is not provided, then it will fetch all the records form the table.
   * @param int $id
   * @return mixed
   */
  public function getleadtype($vid = null) {
    $this->db->select()->from('publisher_leadtype');
 
    // where condition if id is present
    if ($vid != null) {
      $this->db->where('vid', $vid);
      ///$this->db->order_by('vid');
      $query = $this->db->get();
	  $temp = $query->result_array();
	  //print_r($temp); die;
		$result = array();
		foreach($temp as $t) {
		  $result[$t['type']] = $t;
		} 
		//print_r($result); die;
      return $result; // array of result
	 // print_r ($result);
    } 
  }

public function getselectedleadtype($vid = null) {

		  $this->db->select('leadType')->from('callcenter');
		   if ($vid != null) {
      $this->db->where('id', $vid);
	  
	  }
			 $query = $this->db->get()->result_array();
			 return $query[0]['leadType'];
			//  $temp = $query

}
  /**
   * This function will take the post data passed from the controller
   * If id is present, then it will do an update
   * else an insert. One function doing both add and edit.
   * @param $data
   */
  public function addleadtype($data) {//print_r($data);exit;
    if (isset($data['id']) && !empty($data['id'])) {
      $this->db->where('id', $data['id']);
      $res = $this->db->update('publisher_leadtype',$data); // update the record
    }
    else {
      $res = $this->db->insert('publisher_leadtype', $data); // insert new record
    }//echo $this->db->last_query();exit;
	return $res;
  }

    function validate_user( $email, $password ) {
        // Build a query to retrieve the user's details
        // based on the received username and password
        $this->db->from('callcenter');
        $this->db->where('email',$email );
        $this->db->where( 'password', $password);
        $login = $this->db->get()->result();
		//echo $this->db->last_query();exit;
		
		

        // The results of the query are stored in $login.
        // If a value exists, then the user account exists and is validated
        if ( is_array($login) && count($login) == 1 ) {
            // Set the users details into the $details property of this class
            $this->details = $login[0];
            // Call set_session to set the user's session vars via CodeIgniter
            $this->set_session();
            return true;
        }

        return false;
    }
	
	 function  create_new_callcenter( $userData ) {

      $data['company'] = $userData['company'];

      $data['email'] = $userData['email'];


      $data['password'] = $userData['password'];



      return $this->db->insert('callcenter',$data);

    }
 
}