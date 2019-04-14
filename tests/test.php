<?php

$url = "https://www.quickcarfinance.co.uk/store/api-save-leads";
$header = array('Content-type: application/json');
$post_data = '{ "Resource": "Quickcarfinance", "ApiKey": "G0Rni-QM1CT-HDtTB-PzoDJ", "VehicleType":"Bike", "MonthlyBudget":"Under 150 / month", "DrivingLicence":"Full UK", "MaritalStatus":"Single", "UKPassport":"Yes", "DOB":"1994-10-22", "Employment":[{ "EmploymentStatus":"Full-Time Employment", "EmployerName":"Yash", "JobTitle":"Test", "EmploymentYears":"3", "EmploymentMonths":"1", "MonthlyIncome":"2000" }], "AddressDetails":[{ "Postcode":"YO42 1NS", "BuildingName":"bname", "BuildingNumber":"15", "StreetAddress":"York Road", "SecondStreet":"Queen", "Town":"York", "County":"East Riding of Yorkshire", "ResidentialStatus":"Homeowner", "AddressYears":"5", "AddressMonths":"1" }], "PrefixTitle":"Mr", "FirstName":"Vishw", "LastName":"Test", "LoanAmount":"7500", "EmailConsent":"Yes", "SmsConsent":"Yes", "MarketingConsent":"Yes", "MobileNumber":"07365412585", "EmailAddress":"vishwtest321@gmail.com" }';
$res = curl_post($url , $post_data,$header ,10);
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
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);

	$result = curl_exec($ch);
	$p_time = curl_getinfo($ch);

	if (curl_errno($ch)) {
		$result .=  "CURL ERROR: ".curl_error($ch);
	}
	if(empty($result)){
		$result .=  "<br>\nTime out - ($t1 secs)"; // Timeout in $t1 secs
	}
	curl_close($ch);
	$response['res'] = $result;
	$response['post_time'] = $p_time['total_time'];

	return $response;
}
exit;
$url = "https://www.quickcarfinance.co.uk/store/api-save-leads";

$ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
  $response = curl_exec($ch);
  
  // Retudn headers seperatly from the Response Body
  $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
  $headers = substr($response, 0, $header_size);
  $body = substr($response, $header_size);
  
curl_close($ch);

header("Content-Type:text/plain; charset=UTF-8");
echo $headers;
echo $body;

exit;
?>
