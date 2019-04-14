<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class leadCarfinance_m extends CI_Model {
 
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
  
    $this->db->from('lead_carfinance');
    // where condition if id is present
		if($this->session->userdata('userType')=='callcenter')
		{
     		 $this->db->where('vid', $this->session->userdata('id'));
		}
    if (!empty($search['id'])){
      //$this->db->where('id', $search['id']);
    }
	 
    if (!empty($search['vid'])){ 
      $this->db->where('vid', $search['vid']);
    }
    if (!empty($search['daterange'])){
		list($sdate, $edate) = explode(" - ",$search['daterange']);
	  	$this->db->where('cDate >=', $sdate);
		$this->db->where('cDate <=', $edate." 23:53:53");
    }
    if (!empty($search['leadStatus'])){
	  	$this->db->where('leadStatus', $search['leadStatus']);
    }
	
	if(!empty($search['keyword']) &&is_numeric($search['keyword']) && strlen($search['keyword'])<9)
		$this->db->where('id', $search['keyword']);
	elseif(!empty($search['keyword']) &&is_numeric($search['keyword']) && strlen($search['keyword'])==10)
		$this->db->where('phone', $search['keyword']);
	elseif(!empty($search['keyword']) && filter_var($search['keyword'], FILTER_VALIDATE_EMAIL))
		$this->db->where('email', $search['keyword']);
	elseif(preg_match('/^[a-zA-Z]{1,2}([0-9]{1,2}|[0-9][a-zA-Z])\s*[0-9][a-zA-Z]{2}$/',$search['keyword'])) {
		$this->db->where('zip', $search['keyword']);			
		}
	elseif(!empty($search['keyword']) && strlen($search['keyword'])<15 )
		$this->db->where("(firstName like '%".$search['keyword']."%' or lastName like '%".$search['keyword']."%')");	
	elseif(!empty($search['keyword']))
		$this->db->where('gclid', $search['keyword']);
		
	if(!empty($search['utmMedium'])) {
		$this->db->where('utmMedium', $search['utmMedium']); }
	if(!empty($search['utmSource'])) {
		$this->db->where('utmSource', $search['utmSource']); }
	if(!empty($search['utmCampaign'])) {
		$this->db->where('utmCampaign', $search['utmCampaign']); }
	if(!empty($search['utmContent'])) {
		$this->db->where('utmContent', $search['utmContent']); }
	if(!empty($search['utmTerm'])) {
		$this->db->where('utmTerm', $search['utmTerm']); }
	if(!empty($search['utmType'])) {
		$this->db->where('utmType', $search['utmType']); }


 	if($this->input->get('download')){
    if (!empty($search['id'])){
      $this->db->where_in('id', $search['id']); 
    }
	
	

		$this->db->order_by('id' , 'Desc');
		$this->db->select('*');
		//$sql = $this->db->get_compiled_select();
		$this->db->get();
		$sql = $this->db->last_query();
		
		//echo $sql; exit;
		$filename = 'lead_carfinance_'.date('Y-m-d H:i:s').'.csv';
		header('Content-Type: "application/octet-stream"');
		header('Content-Type: application/download');
		header('Content-Disposition: attachment; filename="'.$filename.'"');
		//header("Content-Length: " . filesize($filename));
	
		echo 'firstName,lastName,dob,email,phone,address,zip,city,state,rentown,stayMonth,stayYear,employer,jobTitle,employmentMonth,employmentYear,workPhone,monthlyIncome,incomeType,incomePaymentType,incomeCycle,nextPayDate1,nextPayDate2,ssn,inMilitary,bankName,accountType,bankAccountNumber,licenseNumber,bankRoutingNumber,bankPhone,licenseState,loanAmount,bestTimeContact,ipaddress,Date'."\n"; 
		$res = mysql_query($sql);
		
		if(mysql_num_rows($res)>0){
			while($row = mysql_fetch_assoc($res)){
			
				echo $row['firstName'].',';
				echo $row['lastName'].',';
				//echo $GLOBALS['GENDER'][$row['gender']].',';
				echo $row['dob'].',';
				echo $row['email'].',';
				echo $row['phone'].',';
				echo str_replace(",",";",$row['address']).',';
				echo $row['zip'].',';
				echo $row['city'].',';
				echo $row['state'].',';
				echo $GLOBALS['RENT_OWN'][$row['rentown']].',';
				echo $row['stayMonth'].',';
				echo $row['stayYear'].',';
				echo $row['employer'].',';
				echo $row['jobTitle'].',';
				echo $row['employmentMonth'].',';
				echo $row['employmentYear'].',';
				echo $row['workPhone'].',';
				echo str_replace(",","",$row['monthlyIncome']).',';
				echo $GLOBALS['INCOME_TYPE'][$row['incomeType']].',';
				echo $GLOBALS['INCOME_PAYMENT_TYPE'][$row['incomePaymentType']].',';
				echo $GLOBALS['INCOME_CYCLE'][$row['incomeCycle']].',';
				echo $row['nextPayDate1'].',';
				echo $row['nextPayDate2'].',';
				echo $row['ssn'].',';
				echo $GLOBALS['BOOLEAN'][$row['inMilitary']].',';
				echo str_replace(",","",$row['bankName']).',';
				echo $GLOBALS['ACCOUNT_TYPE'][$row['accountType']].',';
				echo $row['bankAccountNumber'].',';
				echo $row['licenseNumber'].',';
				echo $row['bankRoutingNumber'].',';
				echo $row['bankPhone'].',';
				echo $row['licenseState'].',';
				echo str_replace(",","",$row['loanAmount']).',';
				echo $GLOBALS['BEST_TIME_CONTACT'][$row['bestTimeContact']].',';
				echo $row['ipaddress'].",";				
				echo $row['cDate']."\n";				
			}
		}//print_r($rows);
		exit;
	}
	elseif(!empty($limit)){
		//$this->db->order_by('1 asc');
		//echo key($orderby);exit;
		$this->db->limit($limit,$offset);
		
		if($this->session->userdata('userType')=='superadmin'){
		$fields = array("'check'","id", "vid", "subid","buyerid","buyertierid","buyerLeadPrice","tier","firstName","email","leadStatus","isredirected","cDate","'act'");}
		else
		$fields = array("'check'","id", "subid","tier","firstName","email","leadStatus","isredirected","cDate","'act'");
		
		
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
	//echo $this->db->last_query();//exit;	
	$buyertierids = $this->buyer_m->setupgetkeyvalue();
	$buyerids = $this->buyer_m->getkeyvalue();
//	echo $this->db->last_query();exit;
	$rows = $query->result_array();
	foreach($rows as $k => $v){
		$rows[$k]['check']='<label><input name="id[]" type="checkbox" value="'.$v['id'].'"><span class="lbl"></span></label>';
				
		if($this->session->userdata('userType')=='superadmin'){
			
		$rows[$k]['act']='<a href="'.base_url().'leadCarfinance/leadlog/'.$v['id'].'" class="tooltip-info blue fancybox fancybox.iframe" data-rel="tooltip" title="View Log"><i class="icon-zoom-in bigger-130"></i></a>
					<a href="'.base_url().'leadCarfinance/viewedit/'.$v['id'].'" class="tooltip-info blue fancybox fancybox.iframe" data-rel="tooltip" title="View Lead"> <i class="icon-pencil bigger-120"></i> </a>';
		
		}
		
		if($this->session->userdata('userType')=='callcenter'){
			
		$rows[$k]['act']='<a href="'.base_url().'leadCarfinance/viewedit/'.$v['id'].'" class="tooltip-info blue fancybox fancybox.iframe" data-rel="tooltip" title="View Lead"> <i class="icon-pencil bigger-120"></i> </a>';
			
			}
			
		$rows[$k]['leadStatus']= $GLOBALS['LEAD_STATUS'][$v['leadStatus']];
		$rows[$k]['isredirected']= ($v['isredirected']==1)? 'Yes' : 'No';
		
		if($this->session->userdata('userType')=='superadmin'){
		$rows[$k]['buyertierid']= $buyertierids[$rows[$k]['buyertierid']];
		$rows[$k]['buyerid']= $buyerids[$rows[$k]['buyerid']];
		}
	}
	return $rows;
  }
 
  /**
   * This funtion takes id as a parameter and will fetch the record.
   * If id is not provided, then it will fetch all the records form the table.
   * @param int $id
   * @return mixed
   */
 public function getlist($search=null) {
  
    $this->db->from('lead_carfinance');
    // where condition if id is present
		if($this->session->userdata('userType')=='callcenter')
		{
     		 $this->db->where('vid', $this->session->userdata('id'));
		}
			 if($search['daylimit'] == 'email'){
					if (!empty($search['email']))
					{
					  $this->db->where('email', $search['email']);
					}       
			 }
			elseif($search['daylimit'] == 'phone'){
					if (!empty($search['phone']))
					{
					  $this->db->where('phone', $search['phone']);
					}
			}
    if (!empty($search['tier'])){
      $this->db->where('tier', $search['tier']);
    }
    if (!empty($search['cDate'])){
      $this->db->where('cDate >', $search['cDate']);
    }
    $query = $this->db->get();
	//echo $this->db->last_query();exit;
	$rows = $query->result();
	//print_r($rows);die;
	return $rows;
  }
  /**
   * This funtion takes id as a parameter and will fetch the record.
   * If id is not provided, then it will fetch all the records form the table.
   * @param int $id
   * @return mixed
   */
  public function get($id) {
  
    $this->db->from('lead_carfinance');
    // where condition if id is present
		if($this->session->userdata('userType')=='callcenter')
		{
     		 $this->db->where('vid', $this->session->userdata('id'));
		}
    if (!empty($id)){
      $this->db->where('id', $id);
    }

    $query = $this->db->get();
	//echo $this->db->last_query();exit;
	//$rows = $query->result_array();
	$rows = $query->row();
	return $rows;
  }
  

  
  /**
   * This funtion takes id as a parameter and will fetch the record.
   * If id is not provided, then it will fetch all the records form the table.
   * @param int $id
   * @return mixed
   */
  public function getlog($id) {
  
    $this->db->from('lead_carfinance_log');
		if($this->session->userdata('userType')=='callcenter')
		{
     		 $this->db->where('vid', $this->session->userdata('id'));
		}
    // where condition if id is present
    if (!empty($id)){
      $this->db->where('leadid', $id);
	  $this->db->order_by("cDate", "desc"); 
    }

    $query = $this->db->get();
	//echo $this->db->last_query();exit;
	$rows = $query->result_array();
	return $rows;
  }
 
  /**
   * This funtion takes id as a parameter and will fetch the record.
   * If id is not provided, then it will fetch all the records form the table.
   * @param int $id
   * @return mixed
   */
  public function getvendorlog($id) {
  
    $this->db->from('lead_carfinance_publisher');
    // where condition if id is present
		if($this->session->userdata('userType')=='callcenter')
		{
     		 $this->db->where('vid', $this->session->userdata('id'));
		}
    if (!empty($id)){
      $this->db->where('leadid', $id);
    }

    $query = $this->db->get();
	//echo $this->db->last_query();exit;
	$rows = $query->row_array();
	return $rows;
  }
  /**
   * This function will delete the record based on the id
   * @param $id
   */
  public function remove($id) {
    $this->db->where('id', $id);
		if($this->session->userdata('userType')=='callcenter')
		{
     		 $this->db->where('vid', $this->session->userdata('id'));
		}
    $this->db->delete('lead_carfinance');
  }

  public function post_limit($search=null) {
  
  		$this->db->from('lead_carfinance');
		$this->db->select('count(cDate)as  Total'  );
		$this->db->where('vid', $search['vid']);
		$this->db->where('cDate >', $search['cDate_monthlimit']);
		 $query['MonthTotal'] = $this->db->get()->result_array();
		 
		 $this->db->from('lead_carfinance');
		$this->db->select('count(cDate)as  Total'  );
		$this->db->where('vid', $search['vid']);
		$this->db->where('cDate >', $search['cDate_weeklimit']);
		 $query['WeekTotal'] = $this->db->get()->result_array();
		 
		 
		 $this->db->from('lead_carfinance');
		$this->db->select('count(cDate) as  Total'  );
		$this->db->where('vid', $search['vid']);
		$this->db->where('cDate >', $search['cDate_daylimit']);
		 $query['dayTotal'] = $this->db->get()->result_array();
	//echo $this->db->last_query();exit;
	//print_r($query) ; die;
	foreach(  $query as  $k=>$v ){
	
				$result[$k] = $v[0]['Total']; 
	
	}
		//print_r($result) ; die;
		return $result; 
		
  
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
	 
	  
		if($this->session->userdata('userType')=='callcenter')
		{
     		 $this->db->where('vid', $this->session->userdata('id'));
		}
      $res = $this->db->update('lead_carfinance',$data); // update the record
    }
    else {
      $res = $this->db->insert('lead_carfinance', $data); // insert new record
    }
	return $res;
  }
   /**
   * This function will take the post data passed from the controller
   * If id is present, then it will do an update
   * else an insert. One function doing both add and edit.
   * @param $data
   */
  public function add_log_publisher($data) {
     if (isset($data['id'])) {
      $this->db->where('id', $data['id']);
	
		if($this->session->userdata('userType')=='callcenter')
		{
     		 $this->db->where('vid', $this->session->userdata('id'));
		}
      $res = $this->db->update('lead_carfinance_publisher',$data); // update the record
    }
    else {
      $res = $this->db->insert('lead_carfinance_publisher',$data); // update the record
	  //echo $this->db->last_query();exit;
	 } 
	return $res;
  }
   /**
   * This function will take the post data passed from the controller
   * If id is present, then it will do an update
   * else an insert. One function doing both add and edit.
   * @param $data
   */
  public function add_log($data) {
  	if(!empty($data)){
      $res = $this->db->insert('lead_carfinance_log',$data); // update the record
	  //echo $this->db->last_query();exit;
	 } 
	return $res;
  }
    /**
   * This function will pull report data
   * If id is present, then it will do an update
   * else an insert. One function doing both add and edit.
   * @param $data
   */
   public function getreport($search=null) {
	  // print_r($search['buyerid']);die;
	 // print_r($search['vid']);die;
 if($this->session->userdata('userType')=='superadmin'){
    if (!empty($search['buyerid'])){
		$this->db->from('lead_carfinance_log as l');
		 //  $this->db->group_by("l.leadid"); 
		
		if($search['buyerid'] == 'all'){
			$this->db->group_by("buyerid"); 
			$this->db->group_by("buyersetupid");  
		}else{
	      $this->db->where('buyerid', $search['buyerid']);
			$this->db->group_by("buyersetupid");  
		 } 
		 if (!empty($search['daterange']))
		   $this->db->group_by("DATE(l.cDate)"); 
		$this->db->join('buyer', 'buyer.id = l.buyerid', 'left');
		
		 $this->db->select("company,buyersetupid,DATE(l.cDate) as cDate,count(l.id) as total, sum(if(post_status=1,1,0)) as accepted, sum(if(post_status=0,1,0)) as rejected, sum(if(isredirected='1',1,0)) as redirected",false); 
		
    }
    else{
		if (!empty($search['vid'])){
		  $this->db->where('vid', $search['vid']);
		  $this->db->group_by("DATE(l.cDate)"); 
		}else{
			$this->db->group_by("company"); 
		}
		$this->db->from('lead_carfinance as l');
		$this->db->join('callcenter', 'callcenter.id = l.vid', 'left');
		$this->db->select("vid,company,DATE(l.cDate) as cDate,count(l.id) as total, sum(if(isredirected='1',1,0)) as redirected,sum(if(leadStatus=1,1,0)) as accepted, sum(if(leadStatus=2,1,0)) as rejected, sum(if(leadStatus=3,1,0)) as pending",false);
		/*$this->db->select("company,DATE(l.cDate) as cDate,count(l.id) as total, sum(if(isredirected='1',1,0)) as redirected,sum(if(leadStatus=1,1,0)) as accepted, sum(if(leadStatus=2,1,0)) as rejected, sum(if(leadStatus=3,1,0)) as pending",false);*/
	}
	
    if (!empty($search['daterange'])){
		list($sdate, $edate) = explode(" - ",$search['daterange']);
	  	$this->db->where('l.cDate >=', $sdate);
		$this->db->where('l.cDate <=', $edate." 23:53:53");
    }
	
	
		
    $query = $this->db->get();
	$rows = $query->result_array();
	//echo '<pre>';
	//print_r($rows);die;
//	echo $this->db->last_query();//exit;
//	$buyerid_arr = $this->buyer_m->getkeyvalue();
//	$buyeridsetup_arr = $this->buyer_m->setupgetkeyvalue();
	return $rows;
 }
 else
 {
	 
	 
	 
	 
	 
	 
	 if($this->session->userdata('userType')=='callcenter')
		{
			//print_r('dinesh');die;
     	if (!empty($search['buyerid'])){
				//print_r('searchbuyer k ander gyr');
		$this->db->from('lead_carfinance_log as l');
		 //  $this->db->group_by("l.leadid"); 
		
		if($search['buyerid'] == 'all'){
			$this->db->group_by("buyerid"); 
			$this->db->group_by("buyersetupid");  
		}else{
	      $this->db->where('buyerid', $search['buyerid']);
			$this->db->group_by("buyersetupid");  
		 } 
		 if (!empty($search['daterange']))
		   $this->db->group_by("DATE(l.cDate)"); 
		$this->db->join('buyer', 'buyer.id = l.buyerid', 'left');
		
		 $this->db->select("company,buyersetupid,DATE(l.cDate) as cDate,count(l.id) as total, sum(if(post_status=1,1,0)) as accepted, sum(if(post_status=0,1,0)) as rejected, sum(if(isredirected='1',1,0)) as redirected",false); 
		
    }
    else{
		//print_r('else k ander gyr');
		if (!empty($search['vid'])){
		  $this->db->where('vid', $search['vid']);
		  $this->db->group_by("DATE(l.cDate)"); 
		}else{
			//print_r('vid k pas aaya');
			$this->db->where('vid',$this->session->userdata('id'));
			$this->db->group_by("vid"); 
		}
		$this->db->from('lead_carfinance as l');
		$this->db->join('publisher', 'publisher.id = l.vid', 'left');
		$this->db->select("company,DATE(l.cDate) as cDate,count(l.id) as total, sum(if(isredirected='1',1,0)) as redirected,sum(if(leadStatus=1,1,0)) as accepted, sum(if(leadStatus=2,1,0)) as rejected, sum(if(leadStatus=3,1,0)) as pending",false);
	}
    if (!empty($search['daterange'])){
		list($sdate, $edate) = explode(" - ",$search['daterange']);
	  	$this->db->where('l.cDate >=', $sdate);
		$this->db->where('l.cDate <=', $edate." 23:53:53");
    }
	
	
		
    $query = $this->db->get();
	$rows = $query->result_array();
	//echo '<pre>';
	//print_r($rows);die;
	//echo $this->db->last_query();//exit;
//	$buyerid_arr = $this->buyer_m->getkeyvalue();
//	$buyeridsetup_arr = $this->buyer_m->setupgetkeyvalue();
	return $rows; 
			 
			 
			 
		}
	 
	 
	 
	 }
  
  }
  
  
  
  
  
  
    /**
   * This function will pull report data
   * If id is present, then it will do an update
   * else an insert. One function doing both add and edit.
   * @param $data
   */
   public function getreport_revenue($search=null) {
   
  
  
  if($this->session->userdata('userType')=='superadmin'){
    if (!empty($search['buyerid'])){
		$this->db->from('lead_carfinance_log as l');
		 //  $this->db->group_by("l.leadid"); 
		if($search['buyerid'] == 'all'){
			$this->db->group_by("buyerid"); 
			$this->db->group_by("buyersetupid"); 
		}else{
	      $this->db->where('buyerid', $search['buyerid']);
			$this->db->group_by("buyersetupid"); 
		 } 
		 if (!empty($search['daterange']))
		   $this->db->group_by("DATE(l.cDate)"); 
		$this->db->join('buyer', 'buyer.id = l.buyerid', 'left');
		$this->db->select("company,buyersetupid,DATE(l.cDate) as cDate, sum(l.post_price) as sold,sum(if(isredirected='0',l.post_price,0)) as return_buyer,sum(if(isredirected='1',l.post_price,0)) as profit",false);
    }
    else{
		if (!empty($search['vid'])){
		  $this->db->where('vid', $search['vid']);
		  $this->db->group_by("DATE(l.cDate)"); 
		}else{
			$this->db->group_by("vid"); 
		}
		$this->db->from('lead_carfinance as l');
		$this->db->join('callcenter', 'callcenter.id = l.vid', 'left');
		$this->db->select("vid,company,DATE(l.cDate) as cDate,sum(l.vidLeadPrice) as purchased, sum(l.buyerLeadPrice) as sold,sum(if(isredirected='0',l.buyerLeadPrice,0)) as return_buyer,sum(if(isredirected='0',l.vidLeadPrice,0)) as return_vid,sum(if(isredirected='1',l.buyerLeadPrice-l.vidLeadPrice,0)) as profit",false);
	}
		/*echo '<pre>';
		echo $this->db->last_query();exit;*/
		
    if (!empty($search['daterange'])){
		list($sdate, $edate) = explode(" - ",$search['daterange']);
	  	$this->db->where('l.cDate >=', $sdate);
		$this->db->where('l.cDate <=', $edate." 23:53:53");
    }
    $query = $this->db->get();
	$rows = $query->result_array();
	//echo $this->db->last_query();//exit;
//	$buyerid_arr = $this->buyer_m->getkeyvalue();
//	$buyeridsetup_arr = $this->buyer_m->setupgetkeyvalue();
	/*echo '<pre>';
	print_r($rows);die;*/
	return $rows;
  }
else{
	if($this->session->userdata('userType')=='callcenter')
		{
	
	if (!empty($search['buyerid'])){
		$this->db->from('lead_carfinance_log as l');
		 //  $this->db->group_by("l.leadid"); 
		if($search['buyerid'] == 'all'){
			$this->db->group_by("buyerid"); 
			$this->db->group_by("buyersetupid"); 
		}else{
	      $this->db->where('buyerid', $search['buyerid']);
			$this->db->group_by("buyersetupid"); 
		 } 
		 if (!empty($search['daterange']))
		   $this->db->group_by("DATE(l.cDate)"); 
		$this->db->join('buyer', 'buyer.id = l.buyerid', 'left');
		$this->db->select("company,buyersetupid,DATE(l.cDate) as cDate, sum(l.post_price) as sold,sum(if(isredirected='0',l.post_price,0)) as return_buyer,sum(if(isredirected='1',l.post_price,0)) as profit",false);
    }
    else{
		
		
		if (!empty($search['vid'])){
		  $this->db->where('vid', $search['vid']);
		  $this->db->group_by("DATE(l.cDate)"); 
		}else{
			$this->db->where('vid',$this->session->userdata('id'));
			$this->db->group_by("vid"); 
			
		}
		$this->db->from('lead_carfinance as l');
		$this->db->join('publisher', 'publisher.id = l.vid', 'left');
		$this->db->select("company,DATE(l.cDate) as cDate,sum(l.vidLeadPrice) as purchased, sum(l.buyerLeadPrice) as sold,sum(if(isredirected='0',l.buyerLeadPrice,0)) as return_buyer,sum(if(isredirected='0',l.vidLeadPrice,0)) as return_vid,sum(if(isredirected='1',l.buyerLeadPrice-l.vidLeadPrice,0)) as profit",false);
	}
		/*echo '<pre>';
		echo $this->db->last_query();exit;*/
		
    if (!empty($search['daterange'])){
		list($sdate, $edate) = explode(" - ",$search['daterange']);
	  	$this->db->where('l.cDate >=', $sdate);
		$this->db->where('l.cDate <=', $edate." 23:53:53");
    }
    $query = $this->db->get();
	$rows = $query->result_array();
	//echo $this->db->last_query();//exit;
//	$buyerid_arr = $this->buyer_m->getkeyvalue();
//	$buyeridsetup_arr = $this->buyer_m->setupgetkeyvalue();
	/*echo '<pre>';
	print_r($rows);die;*/
	return $rows;
  }
}
}
  /**
   * This funtion takes id as a parameter and will fetch the record.
   * If id is not provided, then it will fetch all the records form the table.
   * @param int $id
   * @return mixed
   */
/*<!-------------- below is for autofinance ----------------------------------------->*/
 public function getreport_autofinance($search=null) {
  
    if (!empty($search['buyerid'])){
		$this->db->from('lead_autofinance as l');
		 	//	print_r('hello');die;
		 //  $this->db->group_by("l.leadid"); 
		if($search['buyerid'] == 'all'){
			$this->db->group_by("buyerid"); 
			$this->db->group_by("buyersetupid");  
		}else{
	      $this->db->where('buyerid', $search['buyerid']);
			$this->db->group_by("buyersetupid"); 
		 } 
		 if (!empty($search['daterange']))
		   $this->db->group_by("DATE(l.cDate)"); 
		$this->db->join('buyer', 'buyer.id = l.buyerid', 'left');
		$this->db->select("company,buyersetupid,DATE(l.cDate) as cDate,count(l.id) as total, sum(if(post_status=1,1,0)) as accepted, sum(if(post_status=0,1,0)) as rejected",false); 
    }
    else{
		if (!empty($search['vid'])){
			//print_r('hello');die;
		  $this->db->where('vid', $search['vid']);
		  $this->db->group_by("DATE(l.cDate)"); 
		}else{
			$this->db->group_by("vid"); 
		}
		
		
		$this->db->from('lead_autofinance as l');
		
		
		//print_r('ha bhai aa rha h ');die;
		$this->db->join('publisher', 'publisher.id = l.vid', 'left');
		//print_r('mtlb join to ho gya');die;
		$this->db->select("company,DATE(l.cDate) as cDate,count(l.id) as total,sum(if(leadStatus=1,1,0)) as accepted, sum(if(leadStatus=2,1,0)) as rejected, sum(if(leadStatus=3,1,0)) as pending",false);
	}
	//echo $this->db->last_query();exit;
    if (!empty($search['daterange'])){
		list($sdate, $edate) = explode(" - ",$search['daterange']);
	  	$this->db->where('l.cDate >=', $sdate);
		$this->db->where('l.cDate <=', $edate." 23:53:53");
    }
    $query = $this->db->get();
	$rows = $query->result_array();
	//echo $this->db->last_query();//exit;
//	$buyerid_arr = $this->buyer_m->getkeyvalue();
//	$buyeridsetup_arr = $this->buyer_m->setupgetkeyvalue();
	return $rows;
  }
    /**
   * This function will pull report data
   * If id is present, then it will do an update
   * else an insert. One function doing both add and edit.
   * @param $data
   */
   public function getreport_revenue_autofinance($search=null) {
   
  
    if (!empty($search['buyerid'])){
		$this->db->from('lead_carfinance_log as l');
		 //  $this->db->group_by("l.leadid"); 
		if($search['buyerid'] == 'all'){
			$this->db->group_by("buyerid"); 
			$this->db->group_by("buyersetupid"); 
		}else{
	      $this->db->where('buyerid', $search['buyerid']);
			$this->db->group_by("buyersetupid"); 
		 } 
		 if (!empty($search['daterange']))
		   $this->db->group_by("DATE(l.cDate)"); 
		$this->db->join('buyer', 'buyer.id = l.buyerid', 'left');
		$this->db->select("company,buyersetupid,DATE(l.cDate) as cDate, sum(l.post_price) as sold,sum(if(isredirected='0',l.post_price,0)) as return_buyer,sum(if(isredirected='1',l.post_price,0)) as profit",false);
    }
    else{
		if (!empty($search['vid'])){
		  $this->db->where('vid', $search['vid']);
		  $this->db->group_by("DATE(l.cDate)"); 
		}else{
			$this->db->group_by("vid"); 
		}
		$this->db->from('lead_carfinance as l');
		$this->db->join('publisher', 'publisher.id = l.vid', 'left');
		$this->db->select("company,DATE(l.cDate) as cDate,sum(l.vidLeadPrice) as purchased, sum(l.buyerLeadPrice) as sold,sum(if(isredirected='0',l.buyerLeadPrice,0)) as return_buyer,sum(if(isredirected='0',l.vidLeadPrice,0)) as return_vid,sum(if(isredirected='1',l.buyerLeadPrice-l.vidLeadPrice,0)) as profit",false);
	}
    if (!empty($search['daterange'])){
		list($sdate, $edate) = explode(" - ",$search['daterange']);
	  	$this->db->where('l.cDate >=', $sdate);
		$this->db->where('l.cDate <=', $edate." 23:53:53");
    }
    $query = $this->db->get();
	$rows = $query->result_array();
	
	//echo $this->db->last_query();//exit;
//	$buyerid_arr = $this->buyer_m->getkeyvalue();
//	$buyeridsetup_arr = $this->buyer_m->setupgetkeyvalue();
	return $rows;
  }

  /**
   * This funtion takes id as a parameter and will fetch the record.
   * If id is not provided, then it will fetch all the records form the table.
   * @param int $id
   * @return mixed
   */  
   
   
   
   
  public function update_redirecturl($search) {
  
     if (isset($search['id']) && !empty($search['id'])) {
      $this->db->where('id', $search['id']);
      $this->db->where('cDate >', $search['cDate']);
	  $this->db->from('lead_carfinance');
	  $this->db->select('redirecturl,buyertierid');
	  $query = $this->db->get();
	  $row = $query->row();
	  if(!empty($row->redirecturl)){
	  	$data['id'] = $search['id'];
	  	$data['isredirected'] = '1';
		$this->db->where('id', $data['id']);
		$res = $this->db->update('lead_carfinance',$data); // update the record
		
	  	$data_carfinance_log['isredirected'] = '1';
		$this->db->where('leadid', $search['id']);
		$this->db->where('buyersetupid', $row->buyertierid);
		$res = $this->db->update('lead_carfinance_log',$data_carfinance_log); // update the record
		//echo $this->db->last_query();exit;
		return $row->redirecturl;
	  }
    }
	return false;
  }
  


}