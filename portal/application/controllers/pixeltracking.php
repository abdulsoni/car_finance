<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

 

class pixeltracking extends CI_Controller {



  // calling the constructor

  public function __construct() {

    parent::__construct();
    $this->load->model('pixeltracking_m');
	
  }

  public function index() {
	 // print_r('yha comes');die;
           /* $my_img = imagecreate( 200, 80 );
			$background = imagecolorallocate( $my_img, 0, 0, 255 );
			$text_colour = imagecolorallocate( $my_img, 255, 255, 0 );
			$line_colour = imagecolorallocate( $my_img, 128, 255, 0 );
			imagestring( $my_img, 4, 30, 25, "thesitewizard.com", $text_colour );
			imagesetthickness ( $my_img, 5 );
			imageline( $my_img, 30, 45, 165, 45, $line_colour );
			
			header( "Content-type: image/png" );
			imagepng( $my_img );
			imagecolordeallocate( $line_color );
			imagecolordeallocate( $text_color );
			imagecolordeallocate( $background );
			imagedestroy( $my_img );*/
	$this->pixelfire();

  }
  
  public function pixelfire(){
		   
				$email  = $_GET['email'];
			 // print_r($email);die;
	     
		    $emailupdate = $this->pixeltracking_m->pixelfire($email);
			/*
		    $my_img = imagecreate( 200, 80 );
			$background = imagecolorallocate( $my_img, 0, 0, 255 );
			$text_colour = imagecolorallocate( $my_img, 255, 255, 0 );
			$line_colour = imagecolorallocate( $my_img, 128, 255, 0 );
			imagestring( $my_img, 4, 30, 25, "thesitewizard.com", $text_colour );
			imagesetthickness ( $my_img, 5 );
			imageline( $my_img, 30, 45, 165, 45, $line_colour );
			
			header( "Content-type: image/png" );
			imagepng( $my_img );
			imagecolordeallocate( $line_color );
			imagecolordeallocate( $text_color );
			imagecolordeallocate( $background );
			imagedestroy( $my_img );*/
		  
	   
	   }

}
 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  









   



