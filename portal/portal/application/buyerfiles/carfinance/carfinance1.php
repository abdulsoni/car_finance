<?php

class carfinance
{
    var $response = array();
   
    function __construct($client_detail)
    {
	
//		print_r($_POST);echo '<br/><br/>';//die;
//		print_r($client_detail);die;

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
			$monthlyBudget = 'Under &pound;150 / month';
		}elseif($_POST['monthlyBudget'] == 2){
			$monthlyBudget = '&pound;150 - &pound;250 / month';
		}elseif($_POST['monthlyBudget'] == 3){
			$monthlyBudget = '&pound;251 - &pound;350 / month';
		}elseif($_POST['monthlyBudget'] == 4){
			$monthlyBudget = '&pound;351 - &pound;450 / month';
		}elseif($_POST['monthlyBudget'] == 5){
			$monthlyBudget = '&pound;451 - &pound;550 / month';
		}elseif($_POST['monthlyBudget'] == 6){
			$monthlyBudget = 'Over &pound;550 / month';
		}
		
		if($_POST['licenceType'] == 1){
			$licenceType = 'Full Uk';
		}elseif($_POST['licenceType'] == 2){
			$licenceType = 'Provisional Uk';
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
						"Employment1":[{
							"EmployerName":"",
							"JobTitle":"",
							"EmploymentYears":"",
							"EmploymentMonths":"",
							"MonthlyIncome":""
						}],
						"Employment2":[{
							"EmployerName":"",
							"JobTitle":"",
							"EmploymentYears":"",
							"EmploymentMonths":"",
							"MonthlyIncome":""
						}],
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
						"AddressDetails1":[{
							"Postcode":"",
							"BuildingName":"",
							"BuildingNumber":"",
							"StreetAddress":"",
							"SecondStreet":"",
							"Town":"",
							"County":"",
							"AddressYears":"",
							"AddressMonths":""
						}],
						"AddressDetails2":[{
							"Postcode":"",
							"BuildingName":"",
							"BuildingNumber":"",
							"StreetAddress":"",
							"SecondStreet":"",
							"Town":"",
							"County":"",
							"AddressYears":"",
							"AddressMonths":""
						}],
						"PrefixTitle":"'.$nameTitle.'",
						"FirstName":"'.$_POST['firstName'].'",
						"LastName":"'.$_POST['lastName'].'",
						"LoanAmount":"'.$_POST['loanAmount'].'",
						"EmailConsent":"'.$agreeEmail.'",
						"SmsConsent":"'.$agreeSms.'",
						"MarketingConsent":"'.$MarketingConsent.'",
						"MobileNumber":"'.$_POST['phone'].'",
						"EmailAddress":"'.$_POST['email'].'"
					}';
						 
//		print_r($postdata);	die;
//		print_r(http_build_query($postdata));die;
		$this->response['post_url'] = ($client_detail->mode == '2') ? $client_detail->post_url_test : $client_detail->post_url_live;						 
		$this->response['post_data'] = $postdata;
//		$this->response['header'] = 'Content-type: text/xml; charset=utf-8';
		$this->response['header'] = array('Content-Type: application/json');
		
		$this->response['timeout'] = $client_detail->timeout;
		
//		print_r($this->response['post_url']);echo '<br/>';
//		print_r($this->response['post_data']);echo '<br/>';die;
//		print_r($this->response);die;
    }


    public function returnresponse()
    {		
		$result = curl_post($this->response['post_url'], $this->response['post_data'], $this->response['header'], $this->response['timeout']);  
		
//		print_r($result['res']);die;

echo '<b>POST URL: </b>';print_r($this->response['post_url']);echo '<br/><br/>';
echo '<b>POST DATA: </b>';print_r($this->response['post_data']);echo '<br/><br/>';
echo '<b>POST RESPONSE: </b>';print_r($result['res']);echo '<br/><br/>';die;

		$this->response['post_res'] = $result['res'];
		$this->response['post_time'] = $result['post_time'];
		
		$response1 = '{"code": "Success","message": "Application processing.","url":"https://www.quickcarfinance.co.uk/redirect-users/aFwGryGcxdMsnAePwsdV0oHRu0uxLnkkMYnutwNLahEN-4551"}';
		$response = json_decode($response1);
//		print_r($response);die;
		
		$Status = $response->code;
		$Redirect_url = $response->url;
		$Message = $response->message;
		
		
//		print_r($Redirect_url);
//		print_r($Status);
//		print_r($Amount);die;
//		$Status[1] = 1;
		$Amount = 20;
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