<?php
class agentlogin_m extends CI_Model {

    var $details;

    function validate_user( $email, $password ) {
        // Build a query to retrieve the user's details
        // based on the received username and password
        $this->db->from('agents');
        $this->db->where('email',$email );
        $this->db->where( 'password', $password);
        $login = $this->db->get()->result();
		//echo $this->db->last_query();exit;

        // The results of the query are stored in $login.
        // If a value exists, then the user account exists and is validated
        if ( is_array($login) && count($login) == 1 ) {
            // Set the agents details into the $details property of this class
            $this->details = $login[0];
            // Call set_session to set the user's session vars via CodeIgniter
            $this->set_session();
            return true;
        }

        return false;
    }
	 /**
   * This funtion takes id as a parameter and will fetch the record.
   * If id is not provided, then it will fetch all the records form the table.
   * @param int $id
   * @return mixed
   */
  public function getlisting($search=null,$limit =null, $offset =null) {
  
    $this->db->from('agents');
 	if(!empty($limit)){
		//$this->db->order_by('1 asc');
		//echo key($orderby);exit;
		$this->db->limit($limit,$offset);
		$fields = array("'check'","id", "company", "concat(firstName,' ',lastName) as name","email","userType","cDate","'act'");
		$this->db->select(implode(",",$fields), FALSE);
		$orderby = $this->input->get('column');
		if(is_array($orderby)){
			foreach($orderby as $k => $v){
				$ascdesc = ($v==1) ? 'Desc' : 'Asc';
				$this->db->order_by($fields[$k] , $ascdesc);
			}
		}else{
			$this->db->order_by('id' , 'Desc');
		}
	}else{
		return $this->db->count_all_results();
	}	
    $query = $this->db->get();
	//echo $this->db->last_query();exit;
	$rows = $query->result_array();
	foreach($rows as $k => $v){
		$rows[$k]['check']='<label><input name="id[]" type="checkbox" value="'.$v['id'].'"><span class="lbl"></span></label>';
		$rows[$k]['act']='<a href="'.base_url().'agents/form/'.$v['id'].'" class="tooltip-info blue" data-rel="tooltip" title="View Detail"> <i class="icon-pencil bigger-120"></i> </a>';
	}
	return $rows;
  }

	 public function get($id = null) {
    $this->db->select()->from('agents');
 
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
  public function getkeyvalue() {
		$this->db->select()->from('agents');
		$query = $this->db->get();
		// echo $this->db->last_query();exit;
		$return = array();
		if($query->num_rows() > 0) {
			foreach($query->result_array() as $row) {
				$return[$row['id']] = $row['name'];
			}
		}//print_r($return);
		return $return;
  }

    function set_session() {
        // session->set_userdata is a CodeIgniter function that
        // stores data in CodeIgniter's session storage.  Some of the values are built in
        // to CodeIgniter, others are added.  See CodeIgniter's documentation for details.
        $this->session->set_userdata( array(
                'id'=>$this->details->id,
                'name'=> $this->details->firstName . ' ' . $this->details->lastName,
                'email'=>$this->details->email,
				'userType'=>$this->details->userType,
				'buyerid'=>explode(",",$this->details->buyerid),
				'leadType'=>explode(",",$this->details->leadType),
               // 'avatar'=>$this->details->avatar,
               // 'tagline'=>$this->details->tagline,
               // 'isAdmin'=>$this->details->isAdmin,
               // 'teamId'=>$this->details->teamId,
                'isLoggedIn'=>true
            )
        );
    }

    function  create_new_user( $userData ) {
      $data['firstName'] = $userData['first_name'];
      $data['lastName'] = $userData['last_name'];
      //$data['teamId'] = (int) $userData['teamId'];
      //$data['isAdmin'] = (int) $userData['isAdmin'];
      //$data['avatar'] = $this->getAvatar();
      //$data['email'] = $userData['email'];
     // $data['tagline'] = "Click here to edit tagline.";
      $data['password'] = md5($userData['password']);

      return $this->db->insert('agents',$data);
    }

    public function update_tagline( $user_id, $tagline ) {
      $data = array('tagline'=>$tagline);
      $result = $this->db->update('agents', $data, array('id'=>$user_id));
      return $result;
    }

    private function getAvatar() {
      $avatar_names = array();

      foreach(glob('assets/img/avatars/*.png') as $avatar_filename){
        $avatar_filename =   str_replace("assets/img/avatars/","",$avatar_filename);
        array_push($avatar_names, str_replace(".png","",$avatar_filename));
      }

      return $avatar_names[array_rand($avatar_names)];
    }
	  /**
   * This function will take the post data passed from the controller
   * If id is present, then it will do an update
   * else an insert. One function doing both add and edit.
   * @param $data
   */
  public function add($data) {//print_r($data);exit;
    if (isset($data['id'])) {
      $this->db->where('id', $data['id']);
      $res = $this->db->update('agents',$data); // update the record
    }
    else {
      $res = $this->db->insert('agents', $data); // insert new record
    }
	//echo $this->db->last_query();exit;
	return $res;
  }
    /**
   * This function will delete the record based on the id
   * @param $id
   */
  public function remove($id) {
    $this->db->where('id', $id);
    $this->db->delete('agents');
  }


}
