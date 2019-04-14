<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

 

class leadCarfinance extends CI_Controller {

 

    var $leadtype='carfinance';

	var $publisher_detail ='';

	//var $pub_detail ='';

  // calling the constructor

  public function __construct() {

    parent::__construct();

    $this->load->model('leadCarfinance_m');

    $this->load->model('publisher_m');

    $this->load->model('buyer_m');

    $this->load->model('pubbuyermap_m');

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

   * This function will display the list of leadCarfinance

   * data coming from the model

   */

  public function listing() {	
  //print_r('dinesh');die;

//  	

//  	
	if(isset($_GET['page']) || $this->input->get('download')){
  	

		$limit = $this->input->get('size');

		$offset = ($this->input->get('page') * $limit);

		

		$searchparams['id'] = $this->input->get('id');

		$searchparams['vid'] = $this->input->get('vid');

		$searchparams['buyerid'] = $this->input->get('buyerid');

		$searchparams['daterange'] = $this->input->get('daterange');

		$searchparams['keyword'] = $this->input->get('keyword');

		$searchparams['leadStatus'] = $this->input->get('leadStatus');
		
		$searchparams['utmMedium'] = $this->input->get('utmMedium');
		$searchparams['utmSource'] = $this->input->get('utmSource');
		$searchparams['utmCampaign'] = $this->input->get('utmCampaign');
		$searchparams['utmContent'] = $this->input->get('utmContent');
		$searchparams['utmTerm'] = $this->input->get('utmTerm');
		$searchparams['utmType'] = $this->input->get('utmType');

		$data = array(

		   'total_rows' => $this->leadCarfinance_m->getlisting($searchparams),

		   'rows' => $this->leadCarfinance_m->getlisting($searchparams,$limit, $offset)

		);

		//print_r(json_encode($data));die;

		echo json_encode($data);exit;

	}else{

		$data = $_GET;

		$data['vid_arr'] = $this->publisher_m->getkeyvalue();

		$data['buyerid_arr'] = $this->buyer_m->getkeyvalue();

		$this->load->view('leadCarfinance/listing', $data);

	}

  }

 

  /**

   * This function will display the list of leadAutoInsurance

   * data coming from the model

   */

  public function leadlog($id) {  	  	

		//$id = $this->input->get('id');

		$data['rows'] = $this->leadCarfinance_m->getlog($id);

		$data['row_v'] = $this->leadCarfinance_m->getvendorlog($id);

		$data['row_user'] = $this->publisher_m->getkeyvalue();

		$data['row_buyersetup'] = $this->buyer_m->setupgetkeyvalue();

		$this->load->view('leadCarfinance/leadlog', $data);

  }

 

  /**

   * This function will display the list of leadAutoInsurance

   * data coming from the model

   */

  public function viewedit($id) {  	  	

		$data['row'] = $this->leadCarfinance_m->get($id);

		list($data['row']->dob_year,$data['row']->dob_month, $data['row']->dob_day) = explode("-",$data['row']->dob);

		$data['row']->stay_in_month_year = $data['row']->stayMonth;

		$data['row']->employment_in_month_year = $data['row']->employmentMonth;

		$this->load->view('leadCarfinance/form_view', $data);

  }

  /**

   * This function will fetch the list of CarFinance leads

   * data coming from the model

   */

  public function getlead() {

	print_r($_GET);

    $data['rows'] = $this->leadCarfinance_m->get();

	$config['total_rows'] = 200;

	$config['per_page'] = 20; 

  }

 

  /**

   * This function will display the form to add a new leadCarfinance

   */

  public function form($id = null) {
	 

		$data['vid_arr'] = $this->publisher_m->getkeyvalue(1);

		$data['buyerid_arr'] = $this->buyer_m->getkeyvalue(1);

		$data['buyersetupid_arr'] = $this->buyer_m->setupgetkeyvalue(1);

	if (!empty($id)) {

		$data['header']['title'] = 'View Lead';

		$data['view_data'] = $this->leadCarfinance_m->get($id);

	}

	else{

   		$data['header']['title'] = 'Test Form';

		$data['view_data'] = array('vid'=>'22','buyerid'=>'74','buyersetupid'=>'56','tier'=>'tierE','firstName'=>'testfirst', 'lastName'=>'testlast', 'email'=>'carfinancewwws'.rand(1,9999).'@yahoo.com', 'phone'=>'8646213341', 'address'=>'14 M1 chawl', 'city'=>'jaipur', 'state'=>'AL', 'zip'=>'26185', 'dob_month'=>'03', 'dob_day'=>'15', 'dob_year'=>'1980', 'gender'=>'2', 'mobile'=>'', 'ssn'=>'250891040', 'rentown'=>'1', 'stayMonth'=>'10', 'stayYear'=>'18', 'licenseNumber'=>'101794698', 'licenseState'=>'SC', 'bestTimeContact'=>'1', 'employer'=>'Datacentric', 'jobTitle'=>'Chef', 'workPhone'=>'6465551212', 'employmentMonth'=>'8', 'employmentYear'=>'12', 'incomeType'=>'1', 'incomePaymentType'=>'2', 'incomeCycle'=>'1', 'monthlyIncome'=>'1876', 'nextPayDate1'=>date('m/d/Y'), 'nextPayDate2'=>date('m/d/Y', strtotime('+1 week')), 'inMilitary'=>'2', 'bankName'=>'Bank of Perth', 'bankAccountNumber'=>'45212563585', 'bankRoutingNumber'=>'261170876', 'bankPhone'=>'', 'bank_in_month_year'=>'10', 'accountType'=>'2', 'loanAmount'=>'400', 'agreeCreditCheck'=>'1', 'ref_first_name_1'=>'', 'ref_last_name_1'=>'', 'ref_phone_1'=>'', 'ref_relation_1'=>'', 'ref_first_name_2'=>'', 'ref_last_name_2'=>'NULL', 'ref_phone_2'=>'NULL', 'ref_relation_2'=>'NULL', 'ipaddress'=>'127.0.0.1', 'url'=>'localhost', 'bankruptcy'=>'2', 'cosigner'=>'2','bankCode'=>'12S65FF','cardType' =>'6','jobIndustry' => '3');

	}	

	    $this->load->view('leadCarfinance/form', $data);

  }

 

  /**

   * This function will fetch the list of CarFinance leads

   * data coming from the model

   */

  public function post() {

	$stime = explode(' ', microtime());
	$stime = $stime[1] + $stime[0];

//echo 'mahesh';print_r($this->publisher_detail);exit;
	$this->publisher_detail = $this->publisher_m->get_callcenter_fulldetail($this->input->post('vid'), $this->leadtype);
  	$errors = $this->validate();
	$duplicate = $this->isduplicate();
	//print_r($duplicate);die;
	$limit_errors = $this->limit();
	//print_r('vishw '.$errors);die;
	//$errors = '';
	if(!empty($errors)){
		$res = array('status'=>'2','Descriptions'=>$errors);
		echo $this->curl_response_post($res);exit;
	}
	/*elseif($this->isduplicate()){
		$res = array('status'=>'2','Descriptions'=>'The '.$this->publisher_detail->duplicate.' is Duplicate in last '.$this->publisher_detail->daytotal.' days');
		echo $this->curl_response_post($res);exit;
	}
	elseif(!empty($limit_errors)){
		     $res = array('status'=>'2','Descriptions'=>' Your '.$limit_errors['limit_type'].' limit Exeeded');
			echo $this->curl_response_post($res);exit;	
	}*/
	else{
			//echo 'Vishw';
			
		$data['vid'] = $this->input->post('vid');
		$data['post_data'] = http_build_query($_POST); 	 
		$data['cDate'] = date('Y-m-d H:i:s'); 

		$res = $this->leadCarfinance_m->add_log_publisher($data);
		$publisherlogid = $this->db->insert_id();
		$res = $this->add();
		$post = $this->input->post(NULL, TRUE);
		$post['leadid'] = $this->db->insert_id();
		//print_r($this->input->post('tier'));die;
		
		//print_r($post);die;
		$res = $this->buyerpost($post);
		//print_r($res);die;
		//print_r($res['leadStatus']);die;
		if($res['leadStatus']==1)
			$res = array('status'=>1, 'price'=>$res['price'], 'leadid'=>$res['id']);
		else
			$res = array('status'=>2);
		//print_r($res);die;
		$post_response = $this->curl_response_post($res);

		$etime = explode(' ', microtime());
		$etime = $etime[1] + $etime[0];
  		$post_time = $etime - $stime;

		$data = array('id'=>$publisherlogid , 'leadid'=>$post['leadid'], 'post_response'=> $post_response, 'post_status'=> $res['status'], 'post_time'=> $post_time);

		$res = $this->leadCarfinance_m->add_log_publisher($data);
        echo $post_response;exit;

	}	

  }

public function  limit() 
  {
	  	$daylimit=  $this->publisher_detail->daylimit;
	  	$weeklimit =  $this->publisher_detail->weeklimit;
	  	$monthlimit=  $this->publisher_detail->monthlimit;
	  	$search['vid'] = $this->input->post('vid');	
	  	$search['cDate_daylimit'] = date('Y-m-d');
	  	$search['cDate_weeklimit'] =  date('Y-m-d', strtotime('-7days'));
	  	$search['cDate_monthlimit'] = date('Y-m-d', strtotime('-30days'));
	  	$result = $this->leadCarfinance_m->post_limit($search);
	  	/* echo 'vid='.$search['vid'] ; echo '';			
	  	echo 'daylimit='; print_r($daylimit); echo '';			
	  	echo 'weeklimit=';print_r($weeklimit); echo '';			
	  	echo 'monthlimit=';print_r($monthlimit); echo '';			
	  	print_r($result); die;*/	  	  

	  	if($result['dayTotal']  >= $daylimit )
	  	{	  	    
	  		$error['limit_type']  = 'Day';  		 
	  		return $error ; 	  
	  	}
	  	elseif($result['WeekTotal']  >= $weeklimit )
	  	{	     
	  		$error['limit_type']  = 'Week';  		 
	  		return $error ; 	  
	  	}
	  	elseif($result['MonthTotal']  >= $monthlimit)
	  	{	  	  	  	 
	  		$error['limit_type']  = 'Month';  		 
	  		return $error ; 	  
	  	}
	  	else
	  	{	              
	  		$error = false; 	  
	  		return    $error;	 
	  	}						    
	 }


  /**

   * This function will fetch the list of CarFinance leads

   * data coming from the model

   */

  public function buyerpost($post) {
	 
	//print_r($post);die;
		
	if($post['istest'] ==1) $search['mode'] = 2;
	
	$search['vid'] = $post['vid'];

	$search['leadtype'] = $this->leadtype;
	
	
//echo 'Patel'; print_r($this->publisher_detail->margin);die;
//print_r($post);die;
	if(!empty($this->publisher_detail->margin) && $post['tier'] !='all'){
		//echo 'Vishw'; print_r($post['tier']);die;
		$tiers = $GLOBALS['CARFINANCE_TIERS'];
//		print_r($tiers);die;
		$search['tier_price'] = $tiers[$post['tier']] + ($tiers[$post['tier']] * ($this->publisher_detail->margin/100));
//		$search['tier_price'] = $tiers[$post['tier']];
		//print_r($tiers[$post['tier']]);
		//print_r($search['tier_price']);die;
		while(key($tiers) !== $post['tier']) next($tiers);
		$tier_price_max = prev($tiers);
		//echo $tier_price_max;die;
		if($tier_price_max > $tiers[$post['tier']]){
			$search['tier_price_max'] = $tier_price_max + ($tier_price_max *($this->publisher_detail->margin/100));
		}	
	}
	//print_r($search);die;
	$buyer_list['row'] = $this->pubbuyermap_m->getbuyer($search);

//	echo 'Vishw';print_r($buyer_list['row']);//die;

	if(is_array($buyer_list['row']) && !empty($buyer_list['row'])){
//	print_r($buyer_list['row']);
		foreach($buyer_list['row'] as $k => $v){
			//print_r($v);
			$row = (object) $v;
//			print_r($row);//exit;

			$filename = APPPATH."buyerfiles/".$this->leadtype.'/'.strtolower($row->company).".php";
//echo $filename;//die;
			if(file_exists($filename)){

				require_once($filename);

				$classname = strtolower($row->company);
				
				/*print_r($row);
				print_r($post) ;die;*/

				$obj = new $classname($row, $post);

				$lender_response = $obj->returnresponse();
				
//				print_r($lender_response);die;

				$datalogo = array('leadid' => $post['leadid'],

								'vid' => $post['vid'],

								'buyerid' => $row->buyerid,

								'buyersetupid' => $row->buyersetupid,

								'post_price' => $lender_response['post_price'],

								'post_url' => $lender_response['post_url'],

								'post_data' => trim(preg_replace('/\s+/', ' ', $lender_response['post_data'])),

								'post_response' => trim(preg_replace('/\s+/', ' ',  $lender_response['post_res'])),

								'post_status' => $lender_response['post_status'],

								'post_time' => $lender_response['post_time'],

								'cDate' => date('Y-m-d H:i:s')

					);
//				print_r($datalogo);exit;
				$res = $this->leadCarfinance_m->add_log($datalogo);

				
//print_r($lender_response);//die;


				if($lender_response['accept'] == 'ACCEPTED'){

					if($post['tier'] =='all'){

						$price = $lender_response['post_price'] - ($lender_response['post_price'] * ($this->publisher_detail->margin/100));

					}else{

						$price = $GLOBALS['CARFINANCE_TIERS'][$post['tier']];

					}
//					echo $price;die;
					$data = array('buyerLeadPrice'=>$lender_response['post_price'],

									'vidLeadPrice'=>$price,

									'buyerid'=>$row->buyerid,

									'buyertierid'=>$row->buyersetupid,

									'redirecturl'=>$lender_response['redirect_url'],

									'leadStatus'=>'1',

									'id'=>$post['leadid']

								);
						
					$res = $this->leadCarfinance_m->add($data);

					$data = array('price'=>$price,'leadStatus'=>'1','id'=>$post['leadid']);

					return $data;

				}else{
					

					$res = $this->leadCarfinance_m->add(array('leadStatus'=>'2','id'=>$post['leadid']));

				}

			}		

		}//print_r($lendertier);exit;

	}

  }

 

  /**

   * This function will call the model add/update function

   * and add/update the new leadCarfinance.

   */

  public function add() {

		$data['tier'] = $this->input->post('tier');
		$data['vid'] = $this->input->post('vid');
		$data['subid'] = $this->input->post('subid');
		$data['loanAmount'] = $this->input->post('loanAmount');
		$data['vehicleType'] = $this->input->post('vehicleType');
		$data['monthlyBudget'] = $this->input->post('monthlyBudget');
		$data['licenceType'] = $this->input->post('licenceType');
		$data['maritalStatus'] = $this->input->post('maritalStatus');
		$data['passport'] = $this->input->post('passport');
		$data['dob'] = $this->input->post('dob');
		$data['employmentStatus'] = $this->input->post('employmentStatus');
		$data['employer'] = $this->input->post('employer');
		$data['jobTitle'] = $this->input->post('jobTitle');
		$data['employmentMonth'] = $this->input->post('employmentMonth');
		$data['employmentYear'] = $this->input->post('employmentYear');
		$data['monthlyIncome'] = $this->input->post('monthlyIncome');
		$data['address'] = $this->input->post('address');
		$data['zip'] = $this->input->post('zip');
		$data['houseName'] = $this->input->post('houseName');
		$data['houseNumber'] = $this->input->post('houseNumber');
		$data['street'] = $this->input->post('street');
		$data['locality'] = $this->input->post('locality');
		$data['city'] = $this->input->post('city');
		$data['county'] = $this->input->post('county');
		$data['residentialStatus'] = $this->input->post('residentialStatus');
		$data['stayMonth'] = $this->input->post('stayMonth');
		$data['stayYear'] = $this->input->post('stayYear');
		$data['nameTitle'] = $this->input->post('nameTitle');
		$data['firstName'] = $this->input->post('firstName'); 
		$data['lastName'] = $this->input->post('lastName');
		$data['phone'] = $this->input->post('phone');
		$data['email'] = $this->input->post('email');
		$data['employer1'] = $this->input->post('employer1');
		$data['jobTitle1'] = $this->input->post('jobTitle1');
		$data['employmentMonth1'] = $this->input->post('employmentMonth1');
		$data['employmentYear1'] = $this->input->post('employmentYear1');
		$data['monthlyIncome1'] = $this->input->post('monthlyIncome1');
		$data['employer2'] = $this->input->post('employer2');
		$data['jobTitle2'] = $this->input->post('jobTitle2');
		$data['employmentMonth2'] = $this->input->post('employmentMonth2');
		$data['employmentYear2'] = $this->input->post('employmentYear2');
		$data['monthlyIncome2'] = $this->input->post('monthlyIncome2');
		$data['zip1'] = $this->input->post('zip1');
		$data['houseName1'] = $this->input->post('houseName1');
		$data['houseNumber1'] = $this->input->post('houseNumber1');
		$data['street1'] = $this->input->post('street1');
		$data['locality1'] = $this->input->post('locality1');
		$data['city1'] = $this->input->post('city1');
		$data['county1'] = $this->input->post('county1');
		$data['stayMonth1'] = $this->input->post('stayMonth1');
		$data['stayYear1'] = $this->input->post('stayYear1');
		$data['zip2'] = $this->input->post('zip2');
		$data['houseName2'] = $this->input->post('houseName2');
		$data['houseNumber2'] = $this->input->post('houseNumber2');
		$data['street2'] = $this->input->post('street2');
		$data['locality2'] = $this->input->post('locality2');
		$data['city2'] = $this->input->post('city2');
		$data['county2'] = $this->input->post('county2');
		$data['stayMonth2'] = $this->input->post('stayMonth2');
		$data['stayYear2'] = $this->input->post('stayYear2');
		$data['agreeEmail'] = $this->input->post('agreeEmail');
		$data['agreeSms'] = $this->input->post('agreeSms');
		$data['marketingOptions'] = $this->input->post('marketingOptions');
		$data['url'] = $this->input->post('url');
		$data['ipaddress'] = $this->input->post('ipaddress');
		$data['utmMedium'] = $this->input->post('utmMedium');
		$data['utmSource'] = $this->input->post('utmSource');
		$data['utmCampaign'] = $this->input->post('utmCampaign');
		$data['utmContent'] = $this->input->post('utmContent');
		$data['utmTerm'] = $this->input->post('utmTerm');
		$data['utmType'] = $this->input->post('utmType');
		$data['gclid'] = $this->input->post('gclid');
		$data['cDate'] = date('Y-m-d H:i:s'); 

		$res = $this->leadCarfinance_m->add($data);
    }

 

  /**

   * This function will call the model add/update function

   * and add/update the new leadCarfinance.

   */

  public function validate() {
	 //print_r($post['tier']);die;

		$this->form_validation->set_rules('tier', 'tier', 'callback_tier_check');

		$this->form_validation->set_rules('vid', 'vid', 'required');

		$this->form_validation->set_rules('firstName', 'firstName', 'required');

		$this->form_validation->set_rules('lastName', 'lastName', 'required');

		$this->form_validation->set_rules('email', 'Email', 'required');

		$this->form_validation->set_rules('phone', 'phone', 'required');

		$this->form_validation->set_rules('dob', 'dob', 'required');

		$this->form_validation->set_rules('stayMonth', 'stayMonth', 'required');

		$this->form_validation->set_rules('stayYear', 'stayYear', 'required');

/*		$this->form_validation->set_rules('employer', 'employer', 'required');

		$this->form_validation->set_rules('jobTitle', 'jobTitle', 'required');

		$this->form_validation->set_rules('employmentMonth', 'employmentMonth', 'required');

		$this->form_validation->set_rules('employmentYear', 'employmentYear', 'required');
*/
		$this->form_validation->set_rules('monthlyIncome', 'monthlyIncome', 'required');

		$this->form_validation->set_rules('loanAmount', 'loanAmount', 'required');

		$this->form_validation->set_rules('ipaddress', 'ipaddress', 'valid_ip|required');

    	if ($this->form_validation->run() == FALSE) {	
			if($errors = validation_errors())
				return $errors;
		else
			return 'HTTP POST is empty';	
			//return validation_errors();
		}
  }

 

 	function tier_check($str){
		
		
		

		if(!array_key_exists($str, $GLOBALS['CARFINANCE_TIERS'])){
			
			

			$this->form_validation->set_message('tier_check', 'The %s field value is out of given list');

			return false;

		}	

		else{ 

			return true;	

		}

	}



 	function isduplicate(){
		//print_r($str);die;
		//print_r($this->publisher_detail->duplicate);die;
		$search['daylimit'] = $this->publisher_detail->duplicate;
		$days = $this->publisher_detail->daytotal;
	  	//print_r($day);die;
		
	if(!empty($days))
	{

      $search['tier'] = $this->input->post('tier');

      $search['email'] = $this->input->post('email');

      $search['cDate'] = date('Y-m-d', strtotime('-'.$days.' days'));

      $search['phone'] = $this->input->post('phone');
		//print_r($search);die;
	  $row = $this->leadCarfinance_m->getlist($search);
	}
	  //print_r(count($row));die;

	  if(count($row)>0) return true;

	  else return false;

	}

  /**

  /**

   * This function deletes a leadCarfinance from the database

   * and redirects back to the listing

   * @param int $id

   */

  public function remove($id = null) {

    if ($id == null) {

      show_error('No identifier provided', 500);

    }

    else {

      $this->leadCarfinance_m->remove($id);

      redirect('leadCarfinance/listing'); // back to the listing

    }

  }



  /**

   * This function will display the form to add a new leadCarfinance lead type

   */

  public function leadform($vid = null) {

	if (!empty($vid)) {

		$data['header']['title'] = 'Leadtype Edit';

		$data['vid'] = $vid;

		$data['view_data'] = $this->leadCarfinance_m->getleadtype($vid);

		//print_r($data['view_data']);exit;

	    $this->load->view('leadCarfinance/leadform', $data);

	}else{

		redirect('leadCarfinance/listing');

	}

  }

 

  /**

   * This function will call the model add/update function

   * and add/update the new leadCarfinance.

   */

  public function leadadd($vid) {

  

    if (!empty($_POST)) {

		foreach($GLOBALS['LEADTYPE'] as $key =>$val){

      		$data['vid'] = $vid;

      		$data['type'] = $key;

			$data['status'] = $this->input->post('status_'.$key);

			$data['margin'] = $this->input->post('margin_'.$key);

			$data['daylimit'] = $this->input->post('daylimit_'.$key);

			$data['weeklimit'] = $this->input->post('weeklimit_'.$key);

			$data['monthlimit'] = $this->input->post('monthlimit_'.$key);

			$data['daycredit'] = $this->input->post('daycredit_'.$key);

			$data['weekcredit'] = $this->input->post('weekcredit_'.$key);

			$data['monthcredit'] = $this->input->post('monthcredit_'.$key);

			$data['mDate'] = date('Y-m-d H:i:s'); 

			$data['cDate'] = date('Y-m-d H:i:s'); 

			$data['id'] = $this->input->post('id_'.$key);

			if ( !empty($data['id'])) {

				unset($data['vid'],$data['type']);				

			}

			$res = $this->leadCarfinance_m->addleadtype($data);

			if($res)

				$this->session->set_flashdata('success', 'Leadtype successfully updated!');

			else

				$this->session->set_flashdata('error', 'Leadtype failed to update!');	

		}

	  

      redirect('leadCarfinance/listing'); // back to the add form

    }

    else {

     $this->load->view('leadCarfinance/leadform');

    }

  }

 

	function redirecturl($id){ //echo 'Vishw';die;

		$data['id'] = $this->redirecturl_decrypt($id);

		$data['cDate'] =  date('Y-m-d H:i:s', strtotime('-15 minutes'));
		//print_r($data); echo '-----';die;
		$redirecturl = $this->leadCarfinance_m->update_redirecturl($data);
		//print_r($redirecturl);die;
		if($redirecturl){

			header("location: ".$redirecturl);exit;

		}else{

			echo 'Invalid/Expired Redirect URL';exit;

		}

	}

	function curl_response_post($client_response){
		
		//print_r($client_response);die;
		header("Content-type: text/xml; charset=utf-8");

		$res = '<?xml version="1.0"?>';

		$res .= '<PostResponse>';

		$res .= ($client_response['status'] == '1') ? '<Response>Accepted</Response>' :'<Response>Rejected</Response>';

		$res .= ($client_response['status'] == '1') ? '<Leadid>'.$client_response['leadid'].'</Leadid>' :'';

		$res .= ($client_response['status'] == '1') ? '<Price>'.$client_response['price'].'</Price>' :'';

		$res .= ($client_response['status'] == '1') ? '<RedirectURL>'.base_url().'leadCarfinance/redirecturl/'.$this->redirecturl_encrypt($client_response['leadid']).'</RedirectURL>' :'';

		$res .= ($client_response['status'] == '2') ? '<Descriptions>'.$client_response['Descriptions'].'</Descriptions>' :'';

		$res .= '</PostResponse>';

		return $res;

	}



	function redirecturl_encrypt($id){
		return $secure = rand(10,99).$id.rand(10,99);
	}
	

	function redirecturl_decrypt($id){
		return $unsecure =substr(substr($id,2),0,-2);
	}



}