<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class publisher_m extends CI_Model {
 
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
    $this->db->select()->from('publisher');
 
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
	$this->db->from('publisher as p');
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
	//echo 'mmmm'.$this->db->last_query();exit;
    if ($id != null) {
      return $query->row(); // single row
    }
    else {
      return $query->result_array(); // array of result
    }
  }
  
  public function get_callcenter_fulldetail($id = null, $leadtype) {
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
	//echo 'mmmm'.$this->db->last_query();exit;
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
	//	$this->db->select()->from('publisher');
	$this->db->select()->from('callcenter');
		$query = $this->db->get();
		// echo $this->db->last_query();exit;
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
    $this->db->delete('publisher');
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
      $res = $this->db->update('publisher',$data); // update the record
    }
    else {
      $res = $this->db->insert('publisher', $data); // insert new record
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
		$result = array();
		foreach($temp as $t) {
		  $result[$t['type']] = $t;
		} 
      return $result; // array of result
    } 
  }
  /*
		get margin from publisher leadtype table that is set in  interface in calllcenter   
  */
  
  
   public function profit_margin($vid =null , $leadtype =null) {
	 
	 
	  $this->db->select('margin')->from('publisher_leadtype'); 	 
	   $this->db->where('vid', $vid);
	    $this->db->where('type', $leadtype);
		$this->db->where('status', '1');
		$query = $this->db->get()->result_array();
		//echo $this->db->last_query();exit;
		//print_r( $query[0]['margin']); die;
		return   $query[0]['margin']; 
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

 
}