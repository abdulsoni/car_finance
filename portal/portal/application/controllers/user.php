<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

 

class user extends CI_Controller {



  // calling the constructor

  public function __construct() {

    parent::__construct();



    $this->load->model('user_m');

	$this->load->model('buyer_m');

	$this->load->library('pagination');

	$this->load->library('form_validation');

        if(! $this->session->userdata('isLoggedIn') ) {

            redirect('/login');

        }

		if($this->session->userdata('userType') != 'superadmin' )

		{

			$this->load->view('notallowed'); exit();

		}

		

  }

 

  public function index() {

		$this->listing();

  }
  
 /*public function datetime() {

		$msg = date('d/m/Y h:i:s');
 	   echo $msg;
	   //echo 'dinesh';

  }*/
 

  /**

   * This function will display the list of user

   * data coming from the model

   */

  public function listing() {

  	if(isset($_GET['page'])){

		$limit = $this->input->get('size');

		$offset = ($this->input->get('page') * $limit);

		

		$data = array(

		   'total_rows' => $this->user_m->getlisting($searchparams),

		   'rows' => $this->user_m->getlisting($searchparams,$limit, $offset)

		);
		
		

	

		echo json_encode($data);exit;

	}else{
//echo "else comes in";
		$data = $_GET;

		//$data['vid_arr'] = $this->buyer_m->getkeyvalue();

		//$data['buyerid'] = $this->buyer_m->getkeyvalue();

		$this->load->view('user/listing', $data);

	}

  }

  public function listing1() {

		

    //$data['header']['title'] = 'user listing';

    //$data['footer']['scripts']['homescript.js'] = 'home';

    //$data['view_name'] = 'publisher/listing';

    $data['rows'] = $this->user_m->get();

	

	$data['buyerid'] = $this->input->get('buyerid');

	$data['buyerid_arr'] = $this->buyer_m->getkeyvalue();

	

//	print_r ($data['buyerid_arr']);

	$config['total_rows'] = 200;

	$config['per_page'] = 20; 

 	$this->pagination->initialize($config); 

    $this->load->view('user/listing', $data);

  }

 

  /**

   * This function will display the form to add a new publisher

   */

  public function form($id = null) {

	$data['buyerid_arr'] = $this->buyer_m->getkeyvalue();

	if (!empty($id)) {

		$data['header']['title'] = 'Edit';

		$data['view_data'] = $this->user_m->get($id);

	}

	else{

   		$data['header']['title'] = 'Add';

		$data['view_data'] = array();

	}	
	
	
	    
		$this->load->view('user/form', $data);

  }

 







 

  /**

   * This function will call the model add/update function

   * and add/update the new publisher.

   */

  public function add() {

//	print_r($_POST);die;

    if (!empty($_POST)) {

 	  $data['email'] = $this->input->post('email');
	  
      $data['password'] = $this->input->post('password');
	  if(!empty($data['password'])) {
      	$data['password'] = md5($this->input->post('password'));
	  }

      $data['firstName'] = $this->input->post('firstName');

      $data['lastName'] = $this->input->post('lastName');

      $data['userType'] = $this->input->post('userType');

      $data['company'] = $this->input->post('company');
	 
	  //$data['new_database'] = $this->input->post('new_database');

 	  $data['buyerid'] = implode(",",$this->input->post('buyerid'));

      $data['leadtype'] = implode(",",$this->input->post('leadtype'));

      $data['cDate'] = date('Y-m-d H:i:s'); 

		if (!empty($_POST['id'])) { 
			if(empty($data['password'])) {
				unset($data['password']);
			}			
			unset($data['email']);

			$data['id'] = $this->input->post('id');

			$res = $this->user_m->add($data);

			if($res)

				$this->session->set_flashdata('success', 'Record successfully updated!');

			else 

				$this->session->set_flashdata('error', 'Record failed to update!');	

		}

		else{ //echo 'cloneDatabase';die;
			$res = $this->user_m->add($data);
			/*$clone  = $this->cloneDatabase($data);

			if($clone){
			$res = $this->user_m->add($data);
			}*/

			if($res){
				

				$this->session->set_flashdata('success', 'Record successfully submitted!');}

			else

				$this->session->set_flashdata('error', 'Record failed to submit!');	

		}

	   // first: toCopy, second: new database 

      redirect('user/listing'); // back to the add form

    }

    else {

     redirect('user/listing');

    }

  }

	 function cloneDatabase($data){
			$dbName = $this->db->database;
		$newDbName = $data['new_database'];
		// print_r($dbName);die;
		
	$tables  =  $this->db->list_tables();
     $createTable =mysql_query("CREATE DATABASE `$newDbName` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;") or die(mysql_error());
	 if(empty($createTable)){ echo 'Database not create '; return false;}
   
    if($tables){
	foreach($tables as $k =>$cTable){
        $db_check   =   mysql_select_db($newDbName);
        $create     =   $this->db->query("CREATE TABLE $cTable LIKE ".$dbName.".".$cTable);
		
		if($cTable == 'lms_zipcodes' || $cTable == 'zipcodes' ){
	mysql_query("INSERT INTO $cTable SELECT * FROM ".$dbName.".".$cTable);
			}
		if(empty($create)){ echo "Error find in table create "; exit ;}//print_r($create);die;
   	 }
	}
	$res = $this->user_m->add_new_admin($dbName,$newDbName,$data);
	if($res)
	return true;
	else 
	return false;	
   
}

  /**

  /**

   * This function deletes a user from the database

   * and redirects back to the listing

   * @param int $id

   */

  public function remove($id = null) {

    if ($id == null) {

      show_error('No identifier provided', 500);

    }

    else {

      $this->user_m->remove($id);

      redirect('user/listing'); // back to the listing

    }

  }
 
 
  function Changepassword()
        {  
		 if (!empty($_POST)) {
 
	
        $this->db->select('id');
        $this->db->where('email',$this->session->userdata('email'));
        $this->db->where('password',md5($this->input->post('old_password')));
        $query=$this->db->get('lms_users'); 
		
		
        if ($query->num_rows() > 0)
         {	
		   	

                
           //  $this->db->reset();   
                    $data = array(
                      'password' => md5($this->input->post('newpassword'))
                     );
					 
				
					 
					 
                  $this->db->where('email',$this->session->userdata('email'));
				$this->db->update('lms_users', $data);
                //  echo $this->db->last_query();exit;
                       if($this->db->affected_rows()) 
                       {
					   
					   
					   
					$this->session->set_flashdata('success', 'Password Sucessfully changed!');

                       }else{
					
					 
			$this->session->set_flashdata('error', 'Something Went Wrong, Password Not Changed!');
				

                       }
                


         }
		 
		 else{
         	 $this->session->set_flashdata('error', 'Wrong Old Password!');	
         }
		 	redirect('user/changepassword');

        }else{
			
			$this->load->view('user/changepw');
		}
}
}  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  









   



