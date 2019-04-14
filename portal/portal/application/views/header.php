
<div class="navbar">
  <div class="navbar-inner">
    <div class="container-fluid"> <a href="#" class="brand"> <small> <i class="icon-leaf"></i> <?php echo $this->config->item('site_name');?> </small> </a>
      <!--/.brand-->
      <?php if($this->session->userdata('name')!=''){?>
      <ul class="nav ace-nav pull-right">
      <li class="light-black"><a data-toggle="dropdown" href="#" class="dropdown-toggle"> <div ><?php  echo date("D- M d, Y h:i A"); ?> </div></a></li>
      
        <li class="light-black"> <a data-toggle="dropdown" href="#" class="dropdown-toggle"> <img class="nav-user-photo" src="<?php echo base_url(); ?>assets/avatars/logo.png" alt="Jason's Photo" /> <span class="user-info"> <small>Welcome,</small> <?php echo $this->session->userdata('name');?> </span> <i class="icon-caret-down"></i> </a>
		
          <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
		  	
<!--		  	<li> <a href="<?php echo base_url(); ?>user/changepassword"> <i class="icon-user"></i> Profile </a> </li> -->
			<li> <a href="<?php echo base_url(); ?>user/changepassword"> <i class="icon-edit"></i> Change Password </a> </li>
            <li> <a href="<?php echo base_url(); ?>login/logout"> <i class="icon-off"></i> Logout </a> </li>
          </ul>
        </li>
      </ul>
      <?php }?>
      <!--/.ace-nav-->
    </div>
    <!--/.container-fluid-->
  </div>
  <!--/.navbar-inner-->
</div>
<?php /*?><script type= "text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"> </script>
    

	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function() {
			//alert('hello');
           // update();
						//function update() {
							  $.ajax({
							   type: 'POST',
							  //url: 'datetime.php',
							   url: "<?php echo base_url(); ?>user/datetime",
							  timeout: 1000,
							  success: function(data) {
								  //alert(data)
								  $("#timer").html(data); 
								//window.setTimeout(update, 1000);
							   },
							  });
							 //}
        })
  


</script><?php */?>



