<?php

class testcar
{
    var $response = array();
   
    function __construct($client_detail)
    {
	
//		print_r($_POST);echo '<br/><br/>';//die;
//		print_r($client_detail);die;

		
		$postdata = '';
		
								 
//		print_r($postdata);	die;
//		print_r(http_build_query($postdata));die;
		$this->response['post_url'] = ($client_detail->mode == '2') ? $client_detail->post_url_test : $client_detail->post_url_live;						 
		$this->response['post_data'] = $postdata;
		$this->response['header'] = array();
//		$this->response['header'] = array('Content-Type: application/json; charset=utf-8;');
		
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
		
		$Status = 'Success';
		$Amount = $this->response['tier_price'];
		$Redirect_url = 'https://www.google.com/';

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