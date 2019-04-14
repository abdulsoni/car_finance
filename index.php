<?php
 //
 // if(empty($_GET['transaction_id'])) {
 //
 // //	print_r($_SERVER);die;
 	// $data = array(
 	// 		'vid' => $_GET['vid'],
 	// 		'http_referer' => $_SERVER['HTTP_REFERER'],
 	// 		'ipaddress' => ($_SERVER['REMOTE_ADDR'] == '127.0.0.1' ? $_SERVER['HTTP_X_REAL_IP'] : $_SERVER['REMOTE_ADDR']),
 	// 		'siteName' =>$_SERVER['SERVER_NAME'],
 	// 	);
 //
 // 	$post_data = http_build_query($data);
 //
 // 	$url = 'https://lms.quickcarfinance.co.uk/offer/addofferlog';
 //
 // 	$header = array();
 //
 // 	$res = curl_post($url , $post_data,$header );
	// //print_r($res);die;
 // 	//header('Location:https://'.$_SERVER['SERVER_NAME'].'/?transaction_id='.$res['res'].$vid);
 // 	if(empty($_SERVER['QUERY_STRING'])){
 // 		header('Location:https://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'].'?transaction_id='.$res['res']);exit;
 // 	}else{
 // 		header('Location:https://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'].'&transaction_id='.$res['res']);exit;
 // 	}
 // }
 //
 //
 // function curl_post($url , $fields_string , $header , $t1 = 60, $userpwd=''){
 // 	$response = array();
 //
 // 	$ch = curl_init();
 // 	curl_setopt($ch, CURLOPT_URL, $url);
 // 	if(!empty($fields_string)) curl_setopt($ch,CURLOPT_POST,1);
 // 	else curl_setopt($ch,CURLOPT_POST,0);
 // 	if(is_array($fields_string)) curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($fields_string));
 // 	else curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
 // 	curl_setopt($ch, CURLOPT_RETURNTRANSFER  ,1);
 // 	curl_setopt($ch, CURLOPT_TIMEOUT, $t1);
 // 	if(!empty($header))curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
 // 	if(!empty($userpwd))curl_setopt($ch, CURLOPT_USERPWD, $userpwd);
 // 	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 // 	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
 // 	$result = curl_exec($ch);
 // 	$p_time = curl_getinfo($ch);
 //
 // 	if (curl_errno($ch)) {
 // 		$result =  "CURL ERROR: ".curl_error($ch);
 // 	}
 // 	elseif(empty($result)){
 // 		$result =  "Time out - ($t1 secs)"; // Timeout in $t1 secs
 // 	}
 // 	curl_close($ch);
 // 	$response['res'] = $result;
 // 	$response['post_time'] = $p_time['total_time'];
 //
 // 	return $response;
 // }
?>
<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
