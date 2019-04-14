<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class pubBuyerMap_m extends CI_Model {
 
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
  
    $this->db->from('pubbuyermap');
    // where condition if id is present
    if (!empty($search['leadtype'])){
      $this->db->where('leadtype', $search['leadtype']);
    }
    if (!empty($search['vid'])){
      $this->db->where('vid', $search['vid']);
    }
    if (!empty($search['buyerid'])){
      $this->db->where('buyerid', $search['buyerid']);
    }
    if (!empty($search['buyersetupid'])){
      $this->db->where('buyersetupid', $search['buyersetupid']);
    }
    if (!empty($search['status'])){
	  	$this->db->where('status', $search['status']);
    }

 	if(!empty($limit)){
		//$this->db->order_by('1 asc');
		//echo key($orderby);exit;
		$this->db->limit($limit,$offset);
		$fields = array("'check'","id", "leadtype", "vid", "buyerid","buyersetupid","orderby","status","cDate","'act'");
		$this->db->select(implode(",",$fields), FALSE);
		$orderby = $this->input->get('column');
		if(is_array($orderby)){
			foreach($orderby as $k => $v){
				$ascdesc = ($v==1) ? 'Desc' : 'Asc';
				$this->db->order_by($fields[$k] , $ascdesc);
			}
		}else{
			//$this->db->order_by('id' , 'Desc');
			$this->db->order_by('orderby' , 'Asc');
		}
	}else{
		return $this->db->count_all_results();
	}	
    $query = $this->db->get();
	//echo $this->db->last_query();exit;
	$rows = $query->result_array();
	$buyerid_arr = $this->buyer_m->getkeyvalue();
	$vid_arr = $this->callcenter_m->getkeyvalue();
	$buyeridsetup_arr = $this->buyer_m->setupgetkeyvalue();
	foreach($rows as $k => $v){
		$rows[$k]['check']='<label><input name="id[]" type="checkbox" value="'.$v['id'].'"><span class="lbl"></span></label>';
		$rows[$k]['act']='<a href="'.base_url().'pubbuyermap/form/'.$v['id'].'" class="tooltip-info blue fancybox fancybox.iframe" data-rel="tooltip" title="View Lead"> <i class="icon-pencil bigger-120"></i> </a>
		<a href="'.base_url().'pubbuyermap/remove/'.$v['id'].'" class="tooltip-info red" data-rel="tooltip" title="Delete"> <i class="icon-trash bigger-130"></i> </a>';
		$rows[$k]['leadtype']= $GLOBALS['LEADTYPE'][$v['leadtype']];
		$rows[$k]['status']= $GLOBALS['STATUS'][$v['status']];
		$rows[$k]['vid']= $vid_arr[$v['vid']].' => '.$v['vid'];
		$rows[$k]['buyerid']= $buyerid_arr[$v['buyerid']];
		$rows[$k]['buyersetupid']= $buyeridsetup_arr[$v['buyersetupid']];
		
		$rows[$k]['orderby']='<input name="orderby['.$v['id'].']" type="input" style="width:30px" value="'.$v['orderby'].'"/>';
		if($v['mode'] == '2') $rows[$k]['buyersetupid']=  '<span class="label-important white">'.$rows[$k]['buyersetupid'].'</span>';
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
    $this->db->select()->from('pubbuyermap');
 
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
   * This function will delete the record based on the id
   * @param $id
   */
  public function remove($id) {
    $this->db->where('id', $id);
    $this->db->delete('pubbuyermap');
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
      $res = $this->db->update('pubbuyermap',$data); // update the record
    }
    else {
      $res = $this->db->insert('pubbuyermap', $data); // insert new record
    }
	return $res;
  }
  
  
   public function addorder($data){
	   
	   
	   if (isset($data['id'])) {

     
	  $this->db->where('id', $data['id']);

      $res = $this->db->update('pubbuyermap',$data); // update the record

    }
	   
	   return $res;
	   
	   
	   }

  /**
   * This funtion takes id as a parameter and will fetch the record.
   * If id is not provided, then it will fetch all the records form the table.
   * @param int $id
   * @return mixed
   */
  public function getbuyer($search=null) {
		$this->db->select('pb.*,bs.*,b.*');
		//$this->db->from('buyer as b');
		$this->db->from('pubbuyermap as pb');
		$this->db->join('buyersetup as bs', 'bs.id=pb.buyersetupid', 'left');
		$this->db->join('buyer as b', 'b.id=pb.buyerid', 'left');
		//$this->db->group_by('user.place_id');	
		
		$this->db->where('bs.status', 1);
		$this->db->where('pb.status', 1);
		$this->db->where('b.status', 1);
		$this->db->where('pb.leadtype', $search['leadtype']);
		$this->db->where('pb.vid', $search['vid']);
	if (!empty($search['id'])) {
		$this->db->where('b.id', $search['id']);
	}
    if (!empty($search['tier_price'])) 
		$this->db->where('bs.tier_price >=', $search['tier_price']);
    if (!empty($search['tier_price_max'])) 
		$this->db->where('bs.tier_price <', $search['tier_price_max']);
    if (!empty($search['mode'])) {
		$this->db->where('bs.mode', $search['mode']);
    }else
		$this->db->where('bs.mode', 1);
	
      // $this->db->order_by('bs.tier_price', 'DESC');
	   $this->db->order_by('pb.orderby', 'ASC');
   $query = $this->db->get();
 	//echo $this->db->last_query();exit;
   //print_r($query->result_array());exit;
      return $query->result_array(); // array of result
  }


}