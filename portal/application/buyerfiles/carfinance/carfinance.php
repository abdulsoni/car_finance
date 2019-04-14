<?php

class carfinance
{
    var $response = array();
   
    function __construct($client_detail)
    {
	
//		print_r($_POST);echo '<br/><br/>';//die;
//		print_r($client_detail);die;

//header('Content-Type: application/json; charset=utf-8;');

		if($_POST['vehicleType'] == 1){
			$vehicleType = 'Car';
		}elseif($_POST['vehicleType'] == 2){
			$vehicleType = 'Van';
		}elseif($_POST['vehicleType'] == 3){
			$vehicleType = 'Bike';
		}elseif($_POST['vehicleType'] == 4){
			$vehicleType = 'Motorhome';
		}elseif($_POST['vehicleType'] == 5){
			$vehicleType = 'Caravan';
		}elseif($_POST['vehicleType'] == 6){
			$vehicleType = 'Static Caravan';
		}
		
		if($_POST['monthlyBudget'] == 1){
			$monthlyBudget = 'Under 150 / month';
		}elseif($_POST['monthlyBudget'] == 2){
			$monthlyBudget = '150 - 250 / month';
		}elseif($_POST['monthlyBudget'] == 3){
			$monthlyBudget = '251 - 350 / month';
		}elseif($_POST['monthlyBudget'] == 4){
			$monthlyBudget = '351 - 450 / month';
		}elseif($_POST['monthlyBudget'] == 5){
			$monthlyBudget = '451 - 550 / month';
		}elseif($_POST['monthlyBudget'] == 6){
			$monthlyBudget = 'Over 550 / month';
		}
		
		if($_POST['licenceType'] == 1){
			$licenceType = 'Full Uk';
		}elseif($_POST['licenceType'] == 2){
			$licenceType = 'Provisional UK';
		}elseif($_POST['licenceType'] == 3){
			$licenceType = 'European';
		}elseif($_POST['licenceType'] == 4){
			$licenceType = 'International';
		}elseif($_POST['licenceType'] == 5){
			$licenceType = 'No Licence';
		}
		
		if($_POST['maritalStatus'] == 1){
			$maritalStatus = 'Single';
		}elseif($_POST['maritalStatus'] == 2){
			$maritalStatus = 'Married';
		}elseif($_POST['maritalStatus'] == 3){
			$maritalStatus = 'Cohabiting';
		}elseif($_POST['maritalStatus'] == 4){
			$maritalStatus = 'Divorced';
		}elseif($_POST['maritalStatus'] == 5){
			$maritalStatus = 'Separated';
		}elseif($_POST['maritalStatus'] == 6){
			$maritalStatus = 'Widowed';
		}elseif($_POST['maritalStatus'] == 7){
			$maritalStatus = 'Civil Partnership';
		}
		
		if($_POST['passport'] == 1){
			$passport = 'Yes';
		}else {
			$passport = 'No';
		}
		
		if($_POST['employmentStatus'] == 1){
			$employmentStatus = 'Full-Time Employment';
		}elseif($_POST['employmentStatus'] == 2){
			$employmentStatus = 'Part-Time Employment';
		}elseif($_POST['employmentStatus'] == 3){
			$employmentStatus = 'Self-Employment';
		}elseif($_POST['employmentStatus'] == 4){
			$employmentStatus = 'Temporary/Contract';
		}elseif($_POST['employmentStatus'] == 5){
			$employmentStatus = 'Retired';
		}elseif($_POST['employmentStatus'] == 6){
			$employmentStatus = 'Homemaker/Carer';
		}elseif($_POST['employmentStatus'] == 7){
			$employmentStatus = 'Education';
		}elseif($_POST['employmentStatus'] == 8){
			$employmentStatus = 'Benefits';
		}elseif($_POST['employmentStatus'] == 9){
			$employmentStatus = 'Armed Forces';
		}
		
		if($_POST['residentialStatus'] == 1){
			$residentialStatus = 'Homeowner';
		}elseif($_POST['residentialStatus'] == 2){
			$residentialStatus = 'Tenant - Private';
		}elseif($_POST['residentialStatus'] == 3){
			$residentialStatus = 'Tenant - Housing';
		}elseif($_POST['residentialStatus'] == 4){
			$residentialStatus = 'Tenant - Council';
		}elseif($_POST['residentialStatus'] == 5){
			$residentialStatus = 'Living With Family';
		}elseif($_POST['residentialStatus'] == 6){
			$residentialStatus = 'Military Accommodation';
		}elseif($_POST['residentialStatus'] == 7){
			$residentialStatus = 'Work Accommodation';
		}elseif($_POST['residentialStatus'] == 8){
			$residentialStatus = 'Student Accommodation';
		}elseif($_POST['residentialStatus'] == 9){
			$residentialStatus = 'Other';
		}
		
		if($_POST['nameTitle'] == 1){
			$nameTitle = 'Mr';
		}elseif($_POST['nameTitle'] == 2){
			$nameTitle = 'Mrs';
		}elseif($_POST['nameTitle'] == 3){
			$nameTitle = 'Miss';
		}elseif($_POST['nameTitle'] == 4){
			$nameTitle = 'Ms';
		}
		
		if($_POST['agreeEmail'] == 1){
			$agreeEmail = 'Yes';
		}else {
			$agreeEmail = 'No';
		}
		if($_POST['agreeSms'] == 1){
			$agreeSms = 'Yes';
		}else {
			$agreeSms = 'No';
		}
		if($_POST['marketingOptions'] == 1){
			$marketingOptions = 'Yes';
		}else {
			$marketingOptions = 'No';
		}
		
		if(!empty($_POST['employer1'])) {
			$employer1 = '"Employment1":[{
							"EmployerName":"'.$_POST['employer1'].'",
							"JobTitle":"'.$_POST['jobTitle1'].'",
							"EmploymentYears":"'.$_POST['employmentYear1'].'",
							"EmploymentMonths":"'.$_POST['employmentMonth1'].'",
							"MonthlyIncome":"'.$_POST['monthlyIncome1'].'"
						}],';
		}
		if(!empty($_POST['employer2'])) {
			$employer2 = '"Employment2":[{
							"EmployerName":"'.$_POST['employer2'].'",
							"JobTitle":"'.$_POST['jobTitle2'].'",
							"EmploymentYears":"'.$_POST['employmentYear2'].'",
							"EmploymentMonths":"'.$_POST['employmentMonth2'].'",
							"MonthlyIncome":"'.$_POST['monthlyIncome2'].'"
						}],';
		}
		
		if(!empty($_POST['zip1'])) {
			$AddressDetails1 = '"AddressDetails1":[{
							"Postcode":"'.$_POST['zip1'].'",
							"BuildingName":"'.$_POST['houseName1'].'",
							"BuildingNumber":"'.$_POST['houseNumber1'].'",
							"StreetAddress":"'.$_POST['street1'].'",
							"SecondStreet":"'.$_POST['locality1'].'",
							"Town":"'.$_POST['city1'].'",
							"County":"'.$_POST['county1'].'",
							"AddressYears":"'.$_POST['stayYear1'].'",
							"AddressMonths":"'.$_POST['stayMonth1'].'"
						}],';
		}
		
		if(!empty($_POST['zip2'])) {
			$AddressDetails2 = '"AddressDetails2":[{
							"Postcode":"'.$_POST['zip2'].'",
							"BuildingName":"'.$_POST['houseName2'].'",
							"BuildingNumber":"'.$_POST['houseNumber2'].'",
							"StreetAddress":"'.$_POST['street2'].'",
							"SecondStreet":"'.$_POST['locality2'].'",
							"Town":"'.$_POST['city2'].'",
							"County":"'.$_POST['county2'].'",
							"AddressYears":"'.$_POST['stayYear2'].'",
							"AddressMonths":"'.$_POST['stayMonth2'].'"
							}],';
		}
		
		//echo $monthlyBudget;die;
		$postdata = '{
						"Resource": "'.$client_detail->parameter1.'",
						"ApiKey": "'.$client_detail->parameter2.'",
						"VehicleType":"'.$vehicleType.'",
						"MonthlyBudget":"'.$monthlyBudget.'",
						"DrivingLicence":"'.$licenceType.'",
						"MaritalStatus":"'.$maritalStatus.'",
						"UKPassport":"'.$passport.'",
						"DOB":"'.$_POST['dob'].'",
						"Employment":[{
							"EmploymentStatus":"'.$employmentStatus.'",
							"EmployerName":"'.$_POST['employer'].'",
							"JobTitle":"'.$_POST['jobTitle'].'",
							"EmploymentYears":"'.$_POST['employmentYear'].'",
							"EmploymentMonths":"'.$_POST['employmentMonth'].'",
							"MonthlyIncome":"'.$_POST['monthlyIncome'].'"
						}],
						'.$employer1.'
						'.$employer2.'
						"AddressDetails":[{
							"Postcode":"'.$_POST['zip'].'",
							"BuildingName":"'.$_POST['houseName'].'",
							"BuildingNumber":"'.$_POST['houseNumber'].'",
							"StreetAddress":"'.$_POST['street'].'",
							"SecondStreet":"'.$_POST['locality'].'",
							"Town":"'.$_POST['city'].'",
							"County":"'.$_POST['county'].'",
							"ResidentialStatus":"'.$residentialStatus.'",
							"AddressYears":"'.$_POST['stayYear'].'",
							"AddressMonths":"'.$_POST['stayMonth'].'"
						}],
						'.$AddressDetails1.'
						'.$AddressDetails2.'
						"PrefixTitle":"'.$nameTitle.'",
						"FirstName":"'.$_POST['firstName'].'",
						"LastName":"'.$_POST['lastName'].'",
						"LoanAmount":"'.$_POST['loanAmount'].'",
						"EmailConsent":"'.$agreeEmail.'",
						"SmsConsent":"'.$agreeSms.'",
						"MarketingConsent":"'.$marketingOptions.'",
						"MobileNumber":"'.$_POST['phone'].'",
						"EmailAddress":"'.$_POST['email'].'"
					}';
		
//		$monthlyBudget = 'Under 150 / month';
//		$postdata = '{"MonthlyBudget":"'.$monthlyBudget.'"}';		
								 
//		print_r($postdata);	die;
//		print_r(http_build_query($postdata));die;
		$this->response['post_url'] = ($client_detail->mode == '2') ? $client_detail->post_url_test : $client_detail->post_url_live;						 
		$this->response['post_data'] = $postdata;
//		$this->response['header'] = array('Content-type: text/xml; charset=utf-8');
		$this->response['header'] = array('Content-Type: application/json; charset=utf-8;');
		
		$this->response['timeout'] = $client_detail->timeout;
		
		$this->response['tier_price'] = $client_detail->tier_price;

//		print_r($this->response['post_url']);echo '<br/>';
//		print_r($this->response['post_data']);echo '<br/>';die;
//		print_r($this->response);die;
    }


    public function returnresponse()
    {		
		$result = curl_post($this->response['post_url'], $this->response['post_data'], $this->response['header'], $this->response['timeout']);  
		
//echo '<b>POST URL: </b>';print_r($this->response['post_url']);echo '<br/><br/>';
//echo '<b>POST DATA: </b>';print_r($this->response['post_data']);echo '<br/><br/>';
//echo '<b>POST RESPONSE: </b>';print_r($result['res']);echo '<br/><br/>';die;

		$this->response['post_res'] = $result['res'];
		$this->response['post_time'] = $result['post_time'];
		
		$response = json_decode($result['res']);
		
//		$response1 = '{"code": "Success","message": "Application processing.","url":"https://www.quickcarfinance.co.uk/redirect-users/aFwGryGcxdMsnAePwsdV0oHRu0uxLnkkMYnutwNLahEN-4551"}';
//		$response = json_decode($response1);
//		print_r($response);die;
		
		$Status = $response->code;
		$Redirect_url = $response->url;
		$Message = $response->message;
		
		
//		print_r($Redirect_url);
//		print_r($Status);
//		print_r($Amount);die;
//		$Status[1] = 1;
		$Amount = $this->response['tier_price'];
//		$Redirect_url[1] = 'https://www.google.com/';
		if ($Status == 'Success') { 
			$this->response['accept'] = 'ACCEPTED';
			$this->response['post_price'] = $Amount;
			$this->response['post_status'] = '1';
			$this->response['redirect_url'] = $Redirect_url;

		} else {
			$this->response['accept'] = 'REJECTED';
			$this->response['post_status'] = '0';
			$this->response['post_price'] = '0';
		}
//		print_r($this->response);exit;
		return $this->response;

    }
}