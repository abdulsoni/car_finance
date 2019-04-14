
<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />

<title>Dashboard - </title>

<?php $this->load->view('head'); ?>


</head>

<body>

<?php $this->load->view('header'); ?>


<div class="main-container container-fluid">
<?php $this->load->view('leftside'); ?>


<?php $this->load->view('footer'); ?>


  <div class="main-content">

    <div class="breadcrumbs" id="breadcrumbs">

      <ul class="breadcrumb">

        <li> <i class="icon-home home-icon"></i> <a href="#">Home</a> <span class="divider"> <i class="icon-angle-right arrow-icon"></i> </span> </li>

        <li class="active">User</li>

      </ul>

      <!--.breadcrumb-->

      <div class="nav-search" id="nav-search">

        <form class="form-search" />

        <span class="input-icon">

        <input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />

        <i class="icon-search nav-search-icon"></i> </span>

        </form>

      </div>
	  
	  <div class="page-content">
					<div class="page-header position-relative">
						<h1>
							Change Password
							<small>
								
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<div class="span12">
						
						
						
          <?php if($success = $this->session->flashdata('success')){ ?>

          <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>

            <i class="icon-ok"></i>&nbsp;<?php echo $success;?> </div>
			<?php
			}
			?>

          <?php if($error = $this->session->flashdata('error')){?>

          <div class="alert alert-error">

            <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>

            <i class="icon-remove"></i>&nbsp;<?php echo $error;?> </div>

          <?php }?>
						
						
						
						<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var newpassword = $("#newpassword").val();
            var rePassword = $("#repassword").val();
            if (newpassword != rePassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>
 
		  
						
						
							<!--PAGE CONTENT BEGINS-->

							
							   <form class="form-horizontal" action="<?php echo base_url().'user/changepassword'?>" method="post">
								<div class="control-group">
									<label class="control-label" for="form-field-1">old Password</label>

									<div class="controls">
										<input type="password" name="old_password" placeholder="Current Password: " class="form-control">
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="form-field-2">New Password</label>

									<div class="controls">
										<input type="password" name="newpassword" placeholder="New Password: " class="form-control" id="newpassword">
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="form-input-readonly">Reset New Password</label>

									<div class="controls">
										<input type="password" name="re_password" placeholder="Retype New Password: " class="form-control" id="repassword">
										&nbsp; &nbsp;
										<label class="lbl" for="id-disable-check"></label>
									</div>
								</div>

						
								

									
										
										 <span id="message"></span>
										 
										 <div class="form-actions">
										
     				 <input type="submit" value="change password" class="btn btn-primary"  id= "btnSubmit"/></div>
    					</form>
								</form>	

								</div>

								
								
                            


   
		  
		  		
		
	
  </div>

