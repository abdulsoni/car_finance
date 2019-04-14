<?php

class pixeltracking_m extends CI_Model {
	
  public function pixelfire($email=null){
	  //print_r($email);die;
	  
		    $data=array('sentdone'=>'1');
			$this->db->where('email',$email);
			$this->db->update('lms_emaildata',$data);
	 // print_r('after comes');
	  }
 
}
?>