<?php
$url = "https://www.quickcarfinance.co.uk/store/api-save-leads";
$header = array('Content-type: application/json');
$post_data = '{ "Resource": "Quickcarfinance", "ApiKey": "G0Rni-QM1CT-HDtTB-PzoDJ", "VehicleType":"Caravan", "MonthlyBudget":"251 - 350 / month", "DrivingLicence":"Provisional UK", "MaritalStatus":"Married", "UKPassport":"Yes", "DOB":"1981-06-01", "Employment":[{ "EmploymentStatus":"Full-Time Employment", "EmployerName":"HELLO", "JobTitle":"HELLO", "EmploymentYears":"1", "EmploymentMonths":"1", "MonthlyIncome":"8000" }], "Employment1":[{ "EmployerName":"HELLO", "JobTitle":"HELO", "EmploymentYears":"8", "EmploymentMonths":"8", "MonthlyIncome":"8000" }], "AddressDetails":[{ "Postcode":"BH6 5JB", "BuildingName":"70A", "BuildingNumber":"", "StreetAddress":"Stourvale Road", "SecondStreet":"", "Town":"Bournemouth", "County":"Dorset", "ResidentialStatus":"Homeowner", "AddressYears":"1", "AddressMonths":"1" }], "AddressDetails1":[{ "Postcode":"WV6 9DT", "BuildingName":"", "BuildingNumber":"23 ", "StreetAddress":"Coniston Road", "SecondStreet":"", "Town":"Wolverhampton", "County":"West Midlands", "AddressYears":"1", "AddressMonths":"1" }], "AddressDetails2":[{ "Postcode":"BH1 1BL", "BuildingName":"", "BuildingNumber":" 23 Bristol & West House", "StreetAddress":"Post Office Road", "SecondStreet":"", "Town":"Bournemouth", "County":"Dorset", "AddressYears":"3", "AddressMonths":"3" }], "PrefixTitle":"Mr", "FirstName":"PINGTREE TEST", "LastName":"TEST", "LoanAmount":"35500", "EmailConsent":"No", "SmsConsent":"No", "MarketingConsent":"No", "MobileNumber":"07590554474", "EmailAddress":"iainbeilliwm@gmail.com" }';
$res = curl_post($url , $post_data,$header );
//$row = json_decode($res['res']);
//print_r($row);exit;
echo '<br><br><b>URL:</b> '.$url."<br>\n\n<br/><b>DATA:</b> ".$post_data."<br>\n\n<br/><b>RES:</b> ".$res['res'];exit;

function curl_post($url , $fields_string , $header , $t1 = 60, $userpwd=''){
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
