<?php

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
set_time_limit(210);
//error_reporting(E_ALL);

if(!empty($_POST))
	{
		$company = $_POST['qcf_companyName'];
		$job = $_POST['jobTitle'];
		if($_POST['cars'] == 'Car'){
			$vehicleType = 1;
		}elseif($_POST['cars'] == 'Van'){
			$vehicleType = 2;
		}elseif($_POST['cars'] == 'Motorbike'){
			$vehicleType = 3;
		}elseif($_POST['cars'] == 'Motorhome'){
			$vehicleType = 4;
		}elseif($_POST['cars'] == 'Caravan'){
			$vehicleType = 5;
		}elseif($_POST['cars'] == 'Static Caravan'){
			$vehicleType = 6;
		}

		if($_POST['budget'] == '1'){
			$monthlyBudget = 1;
		}elseif($_POST['budget'] == '2'){
			$monthlyBudget = 2;
		}elseif($_POST['budget'] == '3'){
			$monthlyBudget = 3;
		}elseif($_POST['budget'] == '4'){
			$monthlyBudget = 4;
		}elseif($_POST['budget'] == '5'){
			$monthlyBudget = 5;
		}elseif($_POST['budget'] == '6'){
			$monthlyBudget = 6;
		}

		if($_POST['licence'] == 'Full UK'){
			$licenceType = 1;
		}elseif($_POST['licence'] == 'Provisional UK'){
			$licenceType = 2;
		}elseif($_POST['licence'] == 'European'){
			$licenceType = 3;
		}elseif($_POST['licence'] == 'International'){
			$licenceType = 4;
		}elseif($_POST['licence'] == 'None'){
			$licenceType = 5;
		}

		if($_POST['marital'] == 'Single'){
			$maritalStatus = 1;
		}elseif($_POST['marital'] == 'Married'){
			$maritalStatus = 2;
		}elseif($_POST['marital'] == 'Cohabiting'){
			$maritalStatus = 3;
		}elseif($_POST['marital'] == 'Divorced'){
			$maritalStatus = 4;
		}elseif($_POST['marital'] == 'Separated'){
			$maritalStatus = 5;
		}elseif($_POST['marital'] == 'Widowed'){
			$maritalStatus = 6;
		}elseif($_POST['marital'] == 'Civil Partnership'){
			$maritalStatus = 7;
		}

		if($_POST['qcf_passport'] == 'yes'){
			$passport = 1;
		}elseif($_POST['qcf_passport'] == 'no'){
			$passport = 2;
		}

		$date = str_replace('/', '-', $_POST['qcf_dob']);
		$dob = date("Y-m-d", strtotime($date));

		if($_POST['qcf_employment'] == 'Full-Time Employment'){
			$employmentStatus = 1;
		}elseif($_POST['qcf_employment'] == 'Part-Time Employment'){
			$employmentStatus = 2;
		}elseif($_POST['qcf_employment'] == 'Self-Employment'){
			$employmentStatus = 3;
		}elseif($_POST['qcf_employment'] == 'Temporary/Contract'){
			$employmentStatus = 4;
		}elseif($_POST['qcf_employment'] == 'Retired'){
			$employmentStatus = 5;
			$company = 'Retired';
			$job = 'Retired';
		}elseif($_POST['qcf_employment'] == 'Homemaker/Carer'){
			$employmentStatus = 6;
		}elseif($_POST['qcf_employment'] == 'Education'){
			$employmentStatus = 7;
		}elseif($_POST['qcf_employment'] == 'Benefits'){
			$employmentStatus = 8;
			$company = 'Benefits';
			$job = 'Benefits';
		}elseif($_POST['qcf_employment'] == 'Armed Forces'){
			$employmentStatus = 9;
		}

		if($_POST['qcf_vehicleResidential'] == 'Homeowner'){
			$residentialStatus = 1;
		}elseif($_POST['qcf_vehicleResidential'] == 'Tenant-Private'){
			$residentialStatus = 2;
		}elseif($_POST['qcf_vehicleResidential'] == 'Tenant-Housing'){
			$residentialStatus = 3;
		}elseif($_POST['qcf_vehicleResidential'] == 'Tenant-Council'){
			$residentialStatus = 4;
		}elseif($_POST['qcf_vehicleResidential'] == 'Living With Family'){
			$residentialStatus = 5;
		}elseif($_POST['qcf_vehicleResidential'] == 'Military Accommodation'){
			$residentialStatus = 6;
		}elseif($_POST['qcf_vehicleResidential'] == 'Work Accommodation'){
			$residentialStatus = 7;
		}elseif($_POST['qcf_vehicleResidential'] == 'Student Accommodation'){
			$residentialStatus = 8;
		}elseif($_POST['qcf_vehicleResidential'] == 'Other'){
			$residentialStatus = 9;
		}

		if($_POST['prefixTitle'] == 'Mr'){
			$nameTitle = 1;
		}elseif($_POST['prefixTitle'] == 'Mrs'){
			$nameTitle = 2;
		}elseif($_POST['prefixTitle'] == 'Miss'){
			$nameTitle = 3;
		}elseif($_POST['prefixTitle'] == 'Ms'){
			$nameTitle = 4;
		}

		if($_POST['email'] == 'Yes'){
			$agreeEmail = 1;
		}elseif($_POST['email'] == 'No'){
			$agreeEmail = 2;
		}

		if($_POST['sms'] == 'Yes'){
			$agreeSms = 1;
		}elseif($_POST['sms'] == 'No'){
			$agreeSms = 2;
		}

		if($_POST['marketingOptions'] == 'Yes'){
			$marketingOptions = 1;
		}elseif($_POST['marketingOptions'] == 'No'){
			$marketingOptions = 2;
		}

		$cDate = date('Y-m-d H:i:s');

		/*$url = explode("?",$_SERVER['HTTP_REFERER']);
		$final_url = $url[0];*/

		$utmCampaign = str_replace('+',' ',$_POST['utmCampaign']);
		$utmContent = str_replace('+',' ',$_POST['utmContent']);
//		$utmTerm = str_replace('%20',' ',$_POST['utmTerm']);


//		print_r($_POST);die;

		$data = array(
					'istest' => (!empty($_POST['istest']) ? $_POST['istest'] : ''),
					'vid' => (!empty($_POST['vid']) ? $_POST['vid'] : 1),
					'tier' => 'all',
					'loanAmount' => $_POST['loanValue'],
					'vehicleType' => $vehicleType,
					'monthlyBudget' => $monthlyBudget,
					'licenceType' => $licenceType,
					'maritalStatus' => $maritalStatus,
					'passport' => $passport,
					'dob' => $dob,
					'employmentStatus' => $employmentStatus,
					'employer' => $company,
					'jobTitle' => $job,
					'employmentYear' => (!empty($_POST['employmentYears']) ? $_POST['employmentYears'] : '0'),
					'employmentMonth' => (!empty($_POST['employmentMonths']) ? $_POST['employmentMonths'] : '0'),
					'monthlyIncome' => $_POST['monthlyIncome'],
					'address' => $_POST['AddressNow'],
					'houseName' => $_POST['buildingName'],
					'houseNumber' => $_POST['buildingNumber'],
					'street' => $_POST['txtLine'],
					'locality' => $_POST['secondStreet'],
					'city' => $_POST['txtTown'],
					'county' => $_POST['county'],
					'zip' => $_POST['txtPostcode'],
					'residentialStatus' => $residentialStatus,
					'stayYear' => (!empty($_POST['qcf_currentAddressYears']) ? $_POST['qcf_currentAddressYears'] : '0'),
					'stayMonth' => (!empty($_POST['qcf_currentAddressMonths']) ? $_POST['qcf_currentAddressMonths'] : '0'),
					'nameTitle' => $nameTitle,
					'firstName' => $_POST['firstName'],
					'lastName' => $_POST['surName'],
					'phone' => $_POST['mobileNumber'],
					'email' => $_POST['emailAddress'],
					'bankAccountNumber' => $_POST['accountNumber'],
					'bankCode' => $_POST['sortCode'],
					'employer1' => $_POST['qcf_companyName1'],
					'jobTitle1' => $_POST['jobTitle1'],
					'employmentMonth1' => (!empty($_POST['employmentMonths1']) ? $_POST['employmentMonths1'] : '0'),
					'employmentYear1' => (!empty($_POST['employmentYears1']) ? $_POST['employmentYears1'] : '0'),
					'monthlyIncome1' => $_POST['monthlyIncome1'],
					'employer2' => $_POST['qcf_companyName2'],
					'jobTitle2' => $_POST['jobTitle2'],
					'employmentMonth2' => (!empty($_POST['employmentMonths2']) ? $_POST['employmentMonths2'] : '0'),
					'employmentYear2' => (!empty($_POST['employmentYears2']) ? $_POST['employmentYears2'] : '0'),
					'monthlyIncome2' => $_POST['monthlyIncome2'],
					'zip1' => $_POST['txtPostcode1'],
					'houseName1' => $_POST['buildingName1'],
					'houseNumber1' => $_POST['buildingNumber1'],
					'street1' => $_POST['txtLine1'],
					'locality1' => $_POST['secondStreet1'],
					'city1' => $_POST['txtTown1'],
					'county1' => $_POST['county1'],
					'stayMonth1' =>(!empty($_POST['qcf_currentAddressMonths1']) ? $_POST['qcf_currentAddressMonths1'] : '0'),
					'stayYear1' => (!empty($_POST['qcf_currentAddressYears1']) ? $_POST['qcf_currentAddressYears1'] : '0'),
					'zip2' => $_POST['txtPostcode2'],
					'houseName2' => $_POST['buildingName2'],
					'houseNumber2' => $_POST['buildingNumber2'],
					'street2' => $_POST['txtLine2'],
					'locality2' => $_POST['secondStreet2'],
					'city2' => $_POST['txtTown2'],
					'county2' => $_POST['county2'],
					'stayMonth2' =>(!empty($_POST['qcf_currentAddressMonths2']) ? $_POST['qcf_currentAddressMonths2'] : '0'),
					'stayYear2' => (!empty($_POST['qcf_currentAddressYears2']) ? $_POST['qcf_currentAddressYears2'] : '0'),
					'url' => $_SERVER['SERVER_NAME'],
					'ipaddress' => $_SERVER['HTTP_X_REAL_IP'],
					'agreeEmail' => $agreeEmail,
					'agreeSms' => $agreeSms,
					'marketingOptions' => $marketingOptions,
					'utmMedium' => $_POST['utmMedium'],
					'utmSource' => $_POST['utmSource'],
					'utmCampaign' => $utmCampaign,
					'utmContent' => $utmContent,
					'utmTerm' => $_POST['utmTerm'],
					'utmType' => $_POST['utmType'],
					'gclid' => $_POST['gclid'],
					'cDate' => $cDate,
					);
		$build_query = http_build_query($data);
		/* Mail Function Start here */
		mail('harry2712@gmail.com', 'quickcarfinance.co.uk form data submitted', json_encode($_POST)."\n\n".$build_query);
		/* Mail Function End here */

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// die;
//		print_r($build_query);exit;
		if($_SERVER['SERVER_NAME'] == "localhost" || $_SERVER['SERVER_NAME'] == "192.168.1.4") {
			$url = 'http://localhost/carfinance_local/leadCarfinance/post';
		}
		else {
			//$url = 'http://quickcarfinance.pingtreesystems.com/leadCarfinance/post';
			//$url = 'https://phpstack-227246-696630.cloudwaysapps.com/portal/leadCarfinance/post';
			$url = 'http://lms.quickcarfinance.co.uk/leadCarfinance/post';
		}
		$header = array();
//		echo $url;die;
		$res = curl_post($url,$build_query,$header);
//		print_r($res['res']);die;

		preg_match('/<Price>(.*?)<\/Price>/', $res['res'],$price);
		preg_match('/<Response>(.*?)<\/Response>/', $res['res'],$status);
		preg_match('/<Leadid>(.*?)<\/Leadid>/', $res['res'],$pingid);
		preg_match('/<RedirectURL>(.*?)<\/RedirectURL>/', $res['res'],$RedirectURL);
		preg_match('/<Descriptions>(.*?)<\/Descriptions>/', $res['res'],$Descriptions);

//		echo 'Vishw';

		if($_POST['vid']=='7'){
		//			file_get_contents("https://portgk.com/create-sale?client=img&MerchantID=1940&SaleID=".$pingid[1]."&OrderValue=[OrderValue]&VoucherCode=[VoucherUsed]&ExcludeVAT=NO");
					$url = "https://portgk.com/create-sale?client=img&MerchantID=1940&SaleID=".$pingid[1]."&OrderValue=&VoucherCode=&ExcludeVAT=NO";
					$res_pixel = file_get_contents($url);
					
					mail("harry2712@gmail.com,vishw@worldwidewebsolution.com", "QCF - Pixel Tracking Code - Paid On Results", $url."\n\n".$res_pixel);
		}


		if(isset($status[1]) && $status[1] == 'Accepted') {
			print_r($RedirectURL[1]);die;
		}
		else {
			echo 'https://phpstack-227246-696630.cloudwaysapps.com/';die;
		}

}

		function curl_post($url , $fields_string , $header , $t1 = 210, $userpwd=''){
			$response = array();

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			if(!empty($fields_string)) curl_setopt($ch,CURLOPT_POST,1);
			else curl_setopt($ch,CURLOPT_POST,0);
			if(is_array($fields_string)) curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($fields_string));
			else curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER  ,1);
			curl_setopt($ch, CURLOPT_TIMEOUT, $t1);
			if(!empty($header))curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
			if(!empty($userpwd))curl_setopt($ch, CURLOPT_USERPWD, $userpwd);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			$result = curl_exec($ch);
			$p_time = curl_getinfo($ch);

			if (curl_errno($ch)) {
				$result =  "CURL ERROR: ".curl_error($ch);
			}
			elseif(empty($result)){
				$result =  "Time out - ($t1 secs)"; // Timeout in $t1 secs
			}
			curl_close($ch);
			$response['res'] = $result;
			$response['post_time'] = $p_time['total_time'];

			return $response;
}

?>
