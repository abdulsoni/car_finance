<?php

class forlogin_m extends CI_Controller {

	public function __construct(){
	  parent::__construct();
	  //$this->load->library('javascript');
	  //$this->load->library('form_validation');
	  //$this->load->library('email');
	  //$this->load->library('session');
	}public function ForgotPassword($email)
 {
        $this->db->select('email');
        $this->db->from('user_registrations'); 
        $this->db->where('email', $email); 
        $query=$this->db->get();
        return $query->row_array();
 }
 public function sendpassword($data)
{
        $email = $data['email'];
        $query1=$this->db->query("SELECT *  from user_registrations where email = '".$email."' ");
        $row=$query1->result_array();
        if ($query1->num_rows()>0)
      
{
        $passwordplain = "";
        $passwordplain  = rand(999999999,9999999999);
        $newpass['password'] = md5($passwordplain);
        $this->db->where('email', $email);
        $this->db->update('user_registrations', $newpass); 
        $mail_message='Dear '.$row[0]['first_name'].','. "\r\n";
        $mail_message.='Thanks for contacting regarding to forgot password,<br> Your <b>Password</b> is <b>'.$passwordplain.'</b>'."\r\n";
        $mail_message.='<br>Please Update your password.';
        $mail_message.='<br>Thanks & Regards';
        $mail_message.='<br>Your company name';        
        date_default_timezone_set('Etc/UTC');
        require FCPATH.'assets/PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPSecure = "tls"; 
        $mail->Debugoutput = 'html';
        $mail->Host = "yooursmtp";
        $mail->Port = 587;
        $mail->SMTPAuth = true;   
        $mail->Username = "your@email.com";    
        $mail->Password = "password";
        $mail->setFrom('admin@site', 'admin');
        $mail->IsHTML(true);
        $mail->addAddress($email);
        $mail->Subject = 'OTP from company';
        $mail->Body    = $mail_message;
        $mail->AltBody = $mail_message;
if (!$mail->send()) {
     $this->session->set_flashdata('msg','Failed to send password, please try again!');
} else {
   $this->session->set_flashdata('msg','Password sent to your email!');
}
 // redirect(base_url().'user/Login','refresh');        
}
else
{  
 $this->session->set_flashdata('msg','Email not found try again!');
 //redirect(base_url().'user/Login','refresh');
}
}
}
?>