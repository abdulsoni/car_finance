<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Affiliates Add -</title>
<?php $this->load->view('head'); ?>
</head>
<body>
<?php $this->load->view('header'); ?>
<div class="main-container container-fluid">
  <?php $this->load->view('leftside'); ?>
  <div class="main-content">
    <div class="page-content">
      <div class="page-header position-relative">
        <h1> Affiliates <small> <i class="icon-double-angle-right"></i> <?php echo $header['title'];?> </small></h1>
      </div>
      <!--/.page-header-->
      <div class="row-fluid">
        <div class="span12">
          <!--PAGE CONTENT BEGINS-->
          <!--/row-->
          <!--<form id="publisher_add" action="" method="post">-->
		  <?php extract($view_data);?>
		  <?php $action = (isset($id) && !empty($id)) ? 'callcenter/add/'.$id : 'callcenter/add/';?>
		  <?php echo form_open( $action,array('id' => 'publisher_add')); ?>
		  <?php //echo validation_errors(); extract($view_data);?>
		  <input type="hidden" name="id" value="<?php if(isset($id)) echo $id;?>" />
            <div class="row-fluid">
              <div class="span6">
                <div class="widget-box">
                  <div class="widget-header">
                    <h4>Personal Info</h4>
                    <span class="widget-toolbar"> <a href="#" data-action="collapse"> <i class="icon-chevron-up"></i> </a> </span> </div>
                  <div class="widget-body">
                    <div class="widget-main">
                      <div class="row-fluid">
                        <label>Email Address:</label>
                        <span class="block input-icon input-icon-right">
                        <input type="email" name="email" class="span12" placeholder="Email" value="<?php if(isset($email)) echo $email;?>" <?php if(isset($id)) echo 'readonly="" ';?> />
                        <i class="icon-envelope"></i> </span> </div>
                      <div class="row-fluid">
                        <label>Password:</label>
                        <span class="block input-icon input-icon-right">
                        <input type="password" name="password" id="password" class="span12" placeholder="Password" value="<?php if(isset($password)) echo $password;?>" />
                        <i class="icon-lock"></i> </span> </div>
                      <div class="row-fluid">
                        <label>Repeat password:</label>
                        <span class="block input-icon input-icon-right">
                        <input type="password" name="confirmPassword" class="span12" placeholder="Repeat password" value="<?php if(isset($password)) echo $password;?>" />
                        <i class="icon-retweet"></i> </span> </div>
                      <div class="row-fluid">
                        <label>First Name:</label>
                        <span class="block input-icon input-icon-right">
                        <input type="text" name="firstName" class="span12" placeholder="First Name" value="<?php if(isset($firstName)) echo $firstName;?>" />
                        <i class="icon-user"></i> </span> </div>
                      <div class="row-fluid">
                        <label>Last Name:</label>
                        <span class="block input-icon input-icon-right">
                        <input type="text" name="lastName" class="span12" placeholder="Last Name" value="<?php if(isset($lastName)) echo $lastName;?>" />
                        <i class="icon-user"></i> </span> </div>
                      <div class="row-fluid">
                        <label>Phone Number:</label>
                        <span class="block input-icon input-icon-right">
                        <input type="text" name="phone" class="span12" placeholder="Phone Number" value="<?php if(isset($phone)) echo $phone;?>" />
                        <i class="icon-phone"></i> </span> </div>
                        

                       </div>
                  </div>
                </div>
              </div>
              <div class="span6">
                <div class="widget-box">
                  <div class="widget-header">
                    <h4>Additional Info</h4>
                    <span class="widget-toolbar"> <a href="#" data-action="collapse"> <i class="icon-chevron-up"></i> </a> </span> </div>
                  <div class="widget-body">
                    <div class="widget-main">
                      <div class="row-fluid">
                        <label>Company Name:</label>
                        <span class="block input-icon input-icon-right">
                        <input type="text" name="company" class="span12" placeholder="Company Name" value="<?php if(isset($company)) echo $company;?>" />
                        <i class="icon-building"></i> </span> </div>
                      <div class="row-fluid">
                        <label>Address:</label>
                        <input type="text" name="address" class="span12" placeholder="Address" value="<?php if(isset($address)) echo $address;?>" />
                      </div>
                      <div class="row-fluid">
                        <label>City:</label>
                        <input type="text" name="city" class="span12" placeholder="City" value="<?php if(isset($city)) echo $city;?>" />
                      </div>
                      <div class="row-fluid">
                        <label>State:</label>
                        <input type="text" name="state" class="span12" placeholder="State" value="<?php if(isset($state)) echo $state;?>" />
                      </div>
                      <div class="row-fluid">
                        <label>Country:</label>
                        <input type="text" name="country" class="span12" placeholder="Country" value="<?php if(isset($country)) echo $country;?>" />
                      </div>
                      <div class="row-fluid">
                        <label>Zipcode:</label>
                        <input type="text" name="zipcode" class="span12" placeholder="Zipcode" value="<?php if(isset($zipcode)) echo $zipcode;?>" />
                      </div>
                      <div class="row-fluid">
                        <label>Status:</label>
                        <select id="status" name="status" class="span12">
                          <option value="">Select</option>
                          <? foreach ($GLOBALS['STATUS'] as $k=> $v){
							$sel = (isset($status) && $k ==$status) ? ' selected' : '';
							echo '<option value="'.$k.'" '.$sel.'>'.$v.'</option>';
						}?>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
               <?php if($this->session->userdata('userType')=='superadmin'){?>
              <div  class="row-fluid">
              <div class="span12">
              <div class="widget-box">
              <div class="widget-header">
                    <h4>LEAD TYPE</h4>
                    <span class="widget-toolbar"> <a href="#" data-action="collapse"> <i class="icon-chevron-up"></i> </a> </span> </div>
                    <div class="widget-body">
                    <div class="widget-main">
                    <div class="row-fluid"> 
                      <?php 
//					 echo "hoooo";print_r($leadType);
					 // $leadtype = explode(",",$leadType);
					foreach($GLOBALS['LEADTYPE'] as $k => $v) {
//						print_r($leadType);
						$chk = (isset($leadType) || in_array($k,$leadType)) ? 'checked' : '';
						$i++;?>
						<div class="span2">
							<label>
								<input type="checkbox" name="leadType[]" value="<?php echo $k; ?>"<?php echo $chk;?> />
								<span class="lbl"> <?php echo $v;?></span>
							</label>
						</div>
					<?php if($i%6==0) echo '</div><div class="row-fluid">';
					}?>
                    </div></div>
                    </div></div>
                    </div>
                    </div>
                  <?php }?>  
                    <div class="row-fluid">
            <?php /*?><div class="span12">
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
            </div><?php */?>
          </div>
            </div>
            <div class="form-actions">
              <button class="btn btn-info" type="submit"> <i class="icon-ok bigger-110"></i> Submit </button>
			  &nbsp; &nbsp; &nbsp;<button class="btn cancel" type="button" ><i class="icon-undo bigger-110"></i> cancel </button>
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
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/jquery.dataTables.bootstrap.js"></script>
<!--inline scripts related to this page-->
<script type="text/javascript">
	$(function() {
		$("#publisher_add").validate({
			rules: {
				firstName: {required: true,	minlength: 2},
				lastName: {required: true,	minlength: 2},
				password: {required: true,	minlength: 3},
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
