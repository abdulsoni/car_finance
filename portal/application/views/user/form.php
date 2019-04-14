<!DOCTYPE html>

<html lang="en">

<head><script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


<meta charset="utf-8" />

<title>User Add -</title>

<?php $this->load->view('head'); ?>

</head>

<body>

<?php $this->load->view('header'); ?>

<div class="main-container container-fluid">

  <?php $this->load->view('leftside'); ?>

  <div class="main-content">

    <div class="page-content">

      <div class="page-header position-relative">

        <h1> User <small> <i class="icon-double-angle-right"></i> <?php echo $header['title'];?> </small></h1>

      </div>

      <!--/.page-header-->

      <div class="row-fluid">

        <div class="span12">

          <!--PAGE CONTENT BEGINS-->

          <!--/row-->

          <!--<form id="publisher_add" action="" method="post">-->

          <?php extract($view_data); //print_r($leadType);?>

          <?php $action = (isset($id) && !empty($id)) ? 'user/add/'.$id : 'user/add/';?>

          <?php echo form_open( $action,array('id' => 'user_add')); ?>

          <?php //echo validation_errors(); extract($view_data);?>

          <input type="hidden" name="id" value="<?php if(isset($id)) echo $id;?>" />

          <div class="row-fluid">

            <div class="span12">

              <div class="widget-box">

                <div class="widget-header">

                  <h4>Login Info</h4>

                  <span class="widget-toolbar"> <a href="#" data-action="collapse"> <i class="icon-chevron-up"></i> </a> </span> </div>

                <div class="widget-body">

                  <div class="widget-main">

                    <div class="row-fluid">

                      <div class="span6">

                        <label>Email Address:</label>

                        <span class="block input-icon input-icon-right">
						
			
				
				
				
				
	
	

	<input type="email" name="email" id="email" class="span12" placeholder="email" value="<?php if(isset($email)) echo $email;?>" <?php if(isset($email)) echo "readonly";?> />
	
						
					
				
					
	 
		
	
                    

                        <i class="icon-envelope"></i> </span> </div>

                      <div class="span6">

                        <label>Password:</label>

                        <span class="block input-icon input-icon-right">

                        <input type="password" name="password" id="password" class="span12" placeholder="Password" value="" />

                        <i class="icon-lock"></i> </span> </div>

                    </div>

                    <div class="row-fluid">

                      <div class="span6">

                        <label>First Name:</label>

                        <span class="block input-icon input-icon-right">

                        <input type="text" name="firstName" class="span12" placeholder="First Name" value="<?php if(isset($firstName)) echo $firstName;?>" />

                        <i class="icon-user"></i> </span> </div>

                      <div class="span6">

                        <label>Last Name:</label>

                        <span class="block input-icon input-icon-right">

                        <input type="text" name="lastName" class="span12" placeholder="Last Name" value="<?php if(isset($lastName)) echo $lastName;?>" />

                        <i class="icon-user"></i> </span> </div>

                    </div>

                    <div class="row-fluid">

                      <div class="span6">

                        <label>Company:</label>

                        <span class="block input-icon input-icon-right">

                        <input type="text" name="company" class="span12" placeholder="Company" value="<?php if(isset($company)) echo $company;?>" />

                        <i class="icon-user"></i> </span> </div>

                      <div class="span6">

                        <label>User Type:</label>

                        <select name="userType<?php if(isset($usertype))echo $key;?>" class="span12 required" id="usertype">

                          <option value="">Select</option>

                          <? foreach ($GLOBALS['USERTYPE'] as $k=> $v){

							$sel = (isset($userType) && $k ==$userType) ? ' selected' : '';

							echo '<option value="'.$k.'" '.$sel.'>'.$v.'</option>';

						}?>

                        </select>

                      </div>

                    </div>
                    <!--<div class="row-fluid">

                      <div class="span6">

                        <label>Database Name:</label>

                        <span class="block input-icon input-icon-right">

                        <input type="text" name="new_database" class="span12" placeholder="New Database Name" value="<?php if(isset($new_database)) echo $new_database;?>" />

                        <i class="icon-user"></i> </span> </div>

                      

                    </div> -->

                  </div>

                </div>

              </div>

            </div>

          </div>
		  <script type="text/javascript">
		  	$(window).load(function(){	
		var usertype = $('#usertype').val();
		if(usertype == 'superadmin') { 
			$("#usermenu").hide(); 
		}
	});		    
$('#usertype').on('change', function () {
    // if (this.value == '1'); 
    if (this.value === 'admin'){
        $("#usermenu").show();
    } else {
        $("#usermenu").hide();
    }
});</script>
		<div id="usermenu">
          <div class="row-fluid">

            <div class="span12">

              <div class="widget-box">

                <div class="widget-header">
				

                  <h4>Allow Buyer:</h4>

                  <span class="widget-toolbar"> <a href="#" data-action="collapse"> <i class="icon-chevron-up"></i> </a> </span> </div>

                <div class="widget-body">

                  <div class="widget-main">

                    <div class="row-fluid">

                      <?php	$buyerid = explode(",",$buyerid);

							foreach($buyerid_arr as $k => $v) {

							$chk = (isset($buyerid) && in_array($k,$buyerid)) ? ' checked' : '';

							$i++;?>

                      <div class="span2">

                        <label>

                        <input type="checkbox" name="buyerid[]" value="<?php echo $k; ?>" <?php echo $chk;?> />

                         <span class="lbl"> <?php echo $v;?></span></label>

                      </div>

                      <?php if($i%6==0) echo '</div><div class="row-fluid">'; }?>

                    </div>

					<?php unset($i);?>

                  </div>

                </div>

              </div>

            </div>

          </div>
		  

          <div class="row-fluid">

            <div class="span12">

              <div class="widget-box">

                <div class="widget-header">

                  <h4>Allow Lead Type:</h4>

                  <span class="widget-toolbar"> <a href="#" data-action="collapse"> <i class="icon-chevron-up"></i> </a> </span> </div>

                <div class="widget-body">

                  <div class="widget-main">

                    <div class="row-fluid">

                      <?php $leadtype = explode(",",$leadType);

							foreach($GLOBALS['LEADTYPE'] as $k => $v) { 
							
							$chk = (isset($leadtype) && in_array($k,$leadtype)) ? ' checked' : '';

							$i++;?>

                      <div class="span2">

                        <label>

                        <input type="checkbox" name="leadtype[]" value="<?php echo $k; ?>"<?php echo $chk;?> />

                        <span class="lbl"> <?php echo $v;?></span> </label>

                      </div>

                      <?php if($i%6==0) echo '</div><div class="row-fluid">';}?>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>
          
		  </div>
		  
		  <div class="form-actions">

            <button class="btn btn-info" type="submit"> <i class="icon-ok bigger-110"></i> Submit </button> 

            <button class="btn cancel" type="button" ><i class="icon-undo bigger-110"></i> cancel </button>

          </div>

          </form>

          <!--PAGE CONTENT ENDS-->

        </div>

        <!--/.span-->

      </div>

      <!--/.row-fluid-->

    </div>

    <!--/.page-content-->

    <!--/#ace-settings-container-->

  </div>

  <!--/.main-content-->

</div>

<!--/.main-container-->

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse"> <i class="icon-double-angle-up icon-only bigger-110"></i> </a>

<?php $this->load->view('footer'); ?>

<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>

<script src="<?php echo base_url();?>assets/js/jquery.dataTables.bootstrap.js"></script>

<!--inline scripts related to this page-->

<script type="text/javascript">

	$(function() {

		$("#user_add").validate({

			rules: {

				firstName: {required: true,	minlength: 2},

				lastName: {required: true,	minlength: 2},

				password: {required: function(element){return $("input[name=id]").val()=="";},	minlength: 3},

				confirmPassword: {	required: true,	minlength: 3,equalTo: "#password"},

				email: {required: true,	email: true},

				phone: {required: true,	digits: true,	minlength: 10},

				company: {required: true,	minlength: 3},

				status: {required: true}

			}

		});

	})

</script>

</body>

</html>

