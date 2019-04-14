<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

 

class smtp_m extends CI_Model {

 

  public function __construct() {

    parent::__construct();

  }

 

  /**

   * This funtion takes id as a parameter and will fetch the record.

   * If id is not provided, then it will fetch all the records form the table.

   * @param int $id

   * @return mixed

   */

  public function getlisting($search=null,$limit =null, $offset =null) {

  //echo"comes here"; die;

    $this->db->from('smtp');

    // where condition if id is present

 /*   if (!empty($search['id'])){

      $this->db->where('id', $search['id']);

    }

    if (!empty($search['vid'])){

      $this->db->where('vid', $search['vid']);

    }

    if (!empty($search['daterange'])){

		list($sdate, $edate) = explode(" - ",$search['daterange']);

	  	$this->db->where('cDate >=', $sdate);

		$this->db->where('cDate <=', $edate." 23:53:53");

    }

    if (!empty($search['status']) || $search['status'] == '0'){

	  	$this->db->where('status', $search['status']);

    }

	if(!empty($search['keyword']) &&is_numeric($search['keyword']) && strlen($search['keyword'])<9)

		$this->db->where('id', $search['keyword']);

	elseif(!empty($search['keyword']) &&is_numeric($search['keyword']) && strlen($search['keyword'])==10)

		$this->db->where('phone', $search['keyword']);

	elseif(!empty($search['keyword']) && filter_var($search['keyword'], FILTER_VALIDATE_EMAIL))

		$this->db->where('email', $search['keyword']);

	elseif(!empty($search['keyword']))

		$this->db->where("(firstName like '%".$search['keyword']."%' or lastName like '%".$search['keyword']."%')");*/



 	if(!empty($limit)){

		//$this->db->order_by('1 asc');

		//echo key($orderby);exit;

		$this->db->limit($limit,$offset);	
		

		$fields = array("'check',id,protocol,smtphost,smtpport,smtpuser,charset,smtpUser,smtpFooter");

		// print_r($fields);die;
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
	
	//print_r($query->result_array());
	//echo $this->db->last_query();exit;

	$rows = $query->result_array();
	//print_r($rows);die;

	foreach($rows as $k => $v){

		$rows[$k]['check']='<label><input name="id[]" type="checkbox" value="'.$v['id'].'"><span class="lbl"></span></label>';

		$rows[$k]['act']='<a href="'.base_url().'smtp/setupform/'.$v['id'].'" class="tooltip-info green" data-rel="tooltip" title="Edit"> <i class="icon-pencil bigger-130"></i> </a>&nbsp';
		
		/*<a href="<?php echo base_url(); ?>callcenter/form/<?php echo $v['id']; ?>" class="tooltip-info green" data-rel="tooltip" title="Edit"> <i class="icon-pencil bigger-130"></i> </a>*/

		//<a href="'.base_url().'buyer/remove/'.$v['id'].'" class="tooltip-info red" data-rel="tooltip" title="Delete"> <i class="icon-trash bigger-130"></i> </a>';

		//$rows[$k]['status']= $GLOBALS['STATUS'][$v['status']];
     //print_r($rows);exit;
	}

	return $rows;

  }

 

  /**

   * This funtion takes id as a parameter and will fetch the record.

   * If id is not provided, then it will fetch all the records form the table.

   * @param int $id

   * @return mixed

   */

  public function getsetuplisting($search=null,$limit =null, $offset =null) {

  

    $this->db->from('buyersetup bs');

	$this->db->join('buyer b', 'b.id = bs.buyerid', 'left');

    // where condition if id is present

    if (!empty($search['leadtype'])){

      $this->db->where('leadtype', $search['leadtype']);

    }

    if (!empty($search['buyerid'])){

      $this->db->where('buyerid', $search['buyerid']);

    }

    if (!empty($search['mode'])){

	  	$this->db->where('mode', $search['mode']);

    }

    if (!empty($search['status'])){

	  	$this->db->where('bs.status', $search['status']);

    }



 	if(!empty($limit)){

		//$this->db->order_by('1 asc');

		//echo key($orderby);exit;

		$this->db->limit($limit,$offset);

		$fields = array("'check'","bs.id","leadtype", "b.company", "name","tier_price","concat(post_url_live,' ',post_url_live) as url","parameter1","parameter2","mode","bs.status","bs.cDate","'act'");

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

		$rows[$k]['act']='<a href="'.base_url().'buyer/setupform/'.$v['id'].'" class="tooltip-info blue fancybox fancybox.iframe" data-rel="tooltip" title="View Lead"> <i class="icon-pencil bigger-120"></i> </a>&nbsp;

		<a href="'.base_url().'buyer/setupremove/'.$v['id'].'" class="tooltip-info red" data-rel="tooltip" title="Delete"> <i class="icon-trash bigger-130"></i> </a>';

		$rows[$k]['mode']= $GLOBALS['MODE'][$v['mode']];

		$rows[$k]['status']= $GLOBALS['STATUS'][$v['status']];

		$rows[$k]['leadtype']= $GLOBALS['LEADTYPE'][$v['leadtype']];

	}

	return $rows;

  }

 

  /**

   * This funtion takes id as a parameter and will fetch the record.

   * If id is not provided, then it will fetch all the records form the table.

   * @param int $id

   * @return mixed

   */

  public function get($id = null) {

    $this->db->select()->from('buyer');

 

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

  public function getsetup($id = null) {

    $this->db->select()->from('lms_smtp');

 

    // where condition if id is present

    if ($id != null) {

      $this->db->where('id', $id);

    }

    else {

      $this->db->order_by('id');

    }

 

    $query = $this->db->get();
//echo $this->db->last_query(); die;
 

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

  public function getkeyvalue($status=null) {

		$this->db->select()->from('smtp');

		if ($status != null) {

		  $this->db->where('status', $status);

		}

		$query = $this->db->get();

		 // echo $this->db->last_query();
			// print_r($query->result_array());exit;
		$return = array();

		if($query->num_rows() > 0) {

			foreach($query->result_array() as $row) {

				$return[$row['id']] = $row['company'];

			}

		}//print_r($return);

		return $return;

  }

  /**

   * This funtion takes id as a parameter and will fetch the record.

   * If id is not provided, then it will fetch all the records form the table.

   * @param int $id

   * @return mixed

   */

  public function setupgetkeyvalue($status=null, $id=null) {

		$this->db->select()->from('buyersetup');

		if ($status != null) {

		  $this->db->where('status', $status);

		}

		if ($id != null) {

		  $this->db->where('buyerid', $id);

		}

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

  /**

   * This function will delete the record based on the id

   * @param $id

   */

  public function remove($id) {

    $this->db->where('id', $id);

    $this->db->delete('buyer');

  }

 

  /**

   * This function will delete the record based on the id

   * @param $id

   */

  public function setupremove($id) {

    $this->db->where('id', $id);

    $this->db->delete('buyersetup');

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

      $res = $this->db->update('buyer',$data); // update the record

    }

    else {

      $res = $this->db->insert('buyer', $data); // insert new record

    }

	return $res;

  }



  /**

   * This function will take the post data passed from the controller

   * If id is present, then it will do an update

   * else an insert. One function doing both add and edit.

   * @param $data 

   */

  public function addsetup($data) {
	  //echo "addsetup m aaye";

    if (isset($data['id'])) {
		//echo "id h ander  m aaye";

      $this->db->where('id', $data['id']);

      $res = $this->db->update('lms_smtp',$data); // update the record

    }

    else {
		//echo "id  nhi h else k ander  m aaye";
		//print_r($data);die;

      $res = $this->db->insert('lms_smtp', $data); // insert new record

		//print_r($this->db->last_query());die;	
    }

	return $res;

  }



 

}