<!DOCTYPE html>

<html lang="en">

<head><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


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

        <h1> Email  <small> <i class="icon-double-angle-right"></i> <?php echo $header['title'];?> </small></h1>

      </div>

      <!--/.page-header-->

      <div class="row-fluid">

        <div class="span12"> 

          <!--PAGE CONTENT BEGINS-->
		  <?php if($success = $this->session->flashdata('success')){ ?>
		  <div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
			<i class="icon-ok"></i>&nbsp;<?php echo $success;?>
		</div>
		<?php }?>
		  <?php if($error = $this->session->flashdata('error')){ ?>
		  <div class="alert alert-error">
			<button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
			<i class="icon-remove"></i>&nbsp;<?php echo $error;?>
		</div>
		<?php }?>

          <!--/row-->

          <!--<form id="publisher_add" action="" method="post">-->

          <?php extract($view_data);?>

          <?php $action = (isset($id) && !empty($id)) ? 'emaildata/sendsmtp/'.$id :'emaildata/sendsmtp	/';?>

          <?php echo form_open( $action,array('id' => 'user_add')); ?>

          <?php //echo validation_errors(); extract($view_data);?>

          <input type="hidden" name="id" value="<?php if(isset($id)) echo $id;?>" />

          <div class="row-fluid">

            <div class="span12">

              <div class="widget-box">

                <div class="widget-header">

                  <h4>Email Send Info</h4>

                  <span class="widget-toolbar"> <a href="#" data-action="collapse"> <i class="icon-chevron-up"></i> </a> </span> </div>

                <div class="widget-body">

                  <div class="widget-main">

                    <div class="row-fluid">	

                      <div class="span4">

                        <label>From Email Address:</label>

                        <span class="block input-icon input-icon-right">

	<input type="email" name="email" id="email" class="span12" placeholder="Email" value="<?php if(isset($email)) echo $email;?>" <?php if(isset($email)) echo "readonly";?> />
	
                    

                        <i class="icon-envelope"></i> </span> </div>

                      <div class="span4">

                        <label>From Name:</label> 

                        <span class="block input-icon input-icon-right">

                        <input type="text" name="fromName" id="password" class="span12" placeholder="Name" value="" />

                        <i class="icon-user"></i> </span> </div>

                 
					<?php //print_r($campaign); die ?>
					<div class="span4">

                        <label>Campaign :</label>

                        <span class="block input-icon input-icon-right">

                         

              <select  name="campaign" id="campaign">

                <option value="">Select</option>

                <?php  foreach($campaign as $k => $v){
								
								if( !empty($v['campaign'])) {
						  		$selected = ($k == $vid) ? ' selected' : '';

								echo '<option value="'.$v['campaign'].'" '.$selected.'>'.$v['campaign'].'</option>';

						 } }?>

              </select>

                        
				</span>
                    </div>

                    <div class="row-fluid">

                      <div class="span12">

                        <label>Text Area:</label>

                  <textarea  name="textarea" class="span12" cols="50" rows="4" placeholder="Text Area"></textarea>
                  <textarea name="url"  class="span12" cols="50" rows="1" placeholder="URL"></textarea>
						
                         </div>
                        </div>
                        
                        

                      <!--<div class="span6">

                        <label>Last Name:</label>

                        <span class="block input-icon input-icon-right">

                        <input type="text" name="lastName" class="span12" placeholder="Last Name" value="<?php ?>" />

                        <i class="icon-user"></i> </span> </div>

                    </div>

                    <div class="row-fluid">

                      <div class="span6">

                        <label>Company:</label>

                        <span class="block input-icon input-icon-right">

                        <input type="text" name="company" class="span12" placeholder="Company" value="<?php ?>" />

                        <i class="icon-user"></i> </span> </div>

                      <div class="span6">

                        <label>User Type:</label>

                        <select name="userType<?php ?>" class="span12 required" id="usertype">-->

                         <!-- <option value="">Select</option>-->

                          <?php ?>

                        </select>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>
          
		  <script type="text/javascript">
$('#usertype').on('change', function () {
    // if (this.value == '1'); 
    if (this.value === 'admin'){
        $("#usermenu").show();
    } else {
        $("#usermenu").hide();
    }
}); 

    </script>

		<div id="usermenu">
          <div class="row-fluid">

            <div class="span12">

              <div class="widget-box">

                <div class="widget-header">
				

                 <!-- <h4>Allow Buyer:</h4>

                  <span class="widget-toolbar"> <a href="#" data-action="collapse"> <i class="icon-chevron-up"></i> </a> </span> </div>

                <div class="widget-body">

                  <div class="widget-main">

                    <div class="row-fluid">

                      <?php	/*$buyerid = explode(",",$buyerid);

							foreach($buyerid_arr as $k => $v) {

							$chk = (isset($buyerid) && in_array($k,$buyerid)) ? ' checked' : '';

							$i++;*/ ?>

                      <div class="span2">

                        <label>

                        <input type="checkbox" name="buyerid[]"  value="<?php // echo $k; ?>" <?php echo $chk;?> />

                         <span class="lbl"> <?php // echo $v;?></span></label>

                      </div>

                      <?php // if($i%6==0) echo '</div><div class="row-fluid">'; }?>

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

                <div class="widget-header">-->

                  <h4>Select SMTP:</h4>

                  <span class="widget-toolbar"> <a href="#" data-action="collapse"> <i class="icon-chevron-up"></i> </a> </span> </div>

                <div class="widget-body">

                  <div class="widget-main">

                    <div class="row-fluid">

                      <?php /* $leadtype = explode(",",$leadtype);

							foreach($GLOBALS['LEADTYPE'] as $k => $v) { 

							$chk = (isset($leadtype) && in_array($k,$leadtype)) ? ' checked' : '';

							$i++;*/ ?>
                            
                            <?php  foreach($rows as $k=>$v ){ ?>

                      <div class="span2">

                        <label>

                        <input type="checkbox" name="leadtype[]"  checked="checked" value="<?php  echo $v['id']; ?>" />

                        <span class="lbl"> <?php echo $v['smtpFooter']; ?></span> </label>

                      </div>

                      <?php $i++; if($i%6==0) echo '</div><div class="row-fluid">';}?>

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

