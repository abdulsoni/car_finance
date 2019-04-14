<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
 <script type="text/javascript">

var check = function() {
  if (document.getElementById('newpassword').value == document.getElementById('repassword').value) 
  {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
</script>	

   <form action="" method="post">
   

	 
		  
      <p><input type="password" name="old_password" placeholder="Current Password: " class="form-control" ></p><br />
      <p><input type="password" name="newpassword" placeholder="New Password: " class="form-control" id="newpassword" onkeyup="check();"></p><br />
      <p><input type="password" name="repassword" placeholder="Retype New Password: " class="form-control" id="repassword" onkeyup="check();"></p><br/>
	<span id="message"></span>
      <input type="submit" value="change password" />
	  
	  
	  
	   <script type="text/javascript">

$('input').blur(function() {
if ( $("input[name=newpassword]").val() == $("input[name=re_password]").val()) {
alert('Same Value');
return false;
} else {alert('Same 474694191');}
});
</script>	
	  
    </form>
</body>
</html>
