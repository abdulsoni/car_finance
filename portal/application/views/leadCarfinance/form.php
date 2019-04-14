<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Lead Car Finance Add -</title>
<?php $this->load->view('head'); ?>
</head>
<body>
<?php $this->load->view('header'); ?>
<div class="main-container container-fluid">
  <?php $this->load->view('leftside'); ?>
  <div class="main-content">
    <div class="page-content">
      <div class="page-header position-relative">
        <h1> Lead Payday UK <small> <i class="icon-double-angle-right"></i> <?php echo $header['title'];?> </small></h1>
      </div>
      <!--/.page-header-->
      <div class="row-fluid">
        <div class="span12">
          <!--PAGE CONTENT BEGINS-->
          <!--/row-->
          <!--<form id="publisher_add" action="" method="post">-->
		  <?php extract($view_data);?>
		  <?php $action = (isset($id) && !empty($id)) ? 'leadCarfinance/post/'.$id : 'leadPaydayuk/post/';?>
		  <?php echo form_open( $action,array('id' => 'leadCarfinance_add')); ?>
		  <?php //echo validation_errors(); extract($view_data);?>
        <!--<input type="hidden" name="vid" value="<?php if(isset($monthlimit)) echo (empty($_REQUEST['vid']) ? '1': $_REQUEST['vid']);?>">
        <input type="hidden" name="subid" value="<?php if(isset($monthlimit)) echo (empty($_REQUEST['sudid']) ? 'sub-1': $_REQUEST['subid']);?>">-->
            <div class="row-fluid">
        <div class="span4">
          <div class="widget-box">
            <div class="widget-header">
              <h4>Personal Information</h4>
            </div>
            <div class="widget-body">
              <div class="widget-main">
                <div class="row-fluid">
                  <input name="istest" type="checkbox" class="t3InputText" value="1" checked="checked" />
                 <span class="lbl">&nbsp;&nbsp;Is test lead?&nbsp;</span>
				  
                </div>
                <div class="row-fluid">
                  <label>VID</label>
                  <select class="t3InputText" name="vid">
                  <option value="">Select</option>
                  <? foreach($vid_arr as $k => $v){
						  		$selected = (isset($vid) && $k == $vid) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                </select>
                </div>
                <div class="row-fluid">
                  <label>Buyer</label>
                  <select class="t3InputText" name="buyerid">
                  <option value="">Select</option>
                  <? foreach($buyerid_arr as $k => $v){
						  		$selected = (isset($buyerid) && $k == $buyerid) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                </select>
                </div>
                <div class="row-fluid">
                  <label>Buyer Setup/tier</label>
                  <select class="t3InputText required" name="buyersetupid">
                  <option value="">Select</option>
                  <? foreach($buyersetupid_arr as $k => $v){
						  		$selected = (isset($buyersetupid) && $k == $buyersetupid) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                </select>
				<select class="t3InputText required" name="tier" id="tier">
                  <option value="">Select</option>
                  <? foreach($GLOBALS['PAYDAYUK_TIERS'] as $k => $v){
						  		$selected = (isset($tier) && $k == $tier) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                </select>
                </div>
                <div class="row-fluid">
                  <label>Request Your Loan Amount</label>
                  <select class="t3InputText required" name="loanAmount" id="loanAmount">
                  <option value="">Select</option>
                  <? foreach($GLOBALS['LOAN_AMOUNT_UK'] as $k => $v){
						  		$selected = (isset($loanAmount) && $k == $loanAmount) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                </select>
                </div>
                <div class="row-fluid">
                  <label>First Name</label>
                  <input name="firstName" id="firstName" value="<?php if(isset($firstName)) echo $firstName;?>" maxlength="128" class="t3InputText required" type="text">
                </div>
                <div class="row-fluid">
                  <label>Last Name</label>
                  <input name="lastName" id="lastName" value="<?php if(isset($lastName)) echo $lastName;?>" maxlength="128" class="t3InputText required" type="text">
                </div>
                <div class="row-fluid">
                  <label>Date of Birth</label>
                  <select class="t3InputText required" name="dob_month" id="dob_month" style="width:30%;display:inline;">
                    <option value="">Month</option>
                    <? foreach($GLOBALS['DOB_MONTH'] as $k => $v){
						  		$selected = ($k == $dob_month) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                  </select>
                  <select class="t3InputText required" name="dob_day" id="dob_day" style="width:30%;display:inline;">
                    <option value="">Day</option>
                    <? foreach($GLOBALS['DOB_DAY'] as $k => $v){
						  		$selected = ($k == $dob_day) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                  </select>
                  <select class="t3InputText required" name="dob_year" id="dob_year" style="width:30%;display:inline;">
                    <option value="">Year</option>
                    <? foreach($GLOBALS['DOB_YEAR'] as $k => $v){
						  		$selected = ($k == $dob_year) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                  </select>
                </div>
                <div class="row-fluid">
                  <label>Gender</label>
                  <select class="t3InputText required" name="gender">
                         <option value="">Select</option>
						  <? foreach($GLOBALS['GENDER'] as $k => $v){
						  		$selected = ($k == $gender) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>      
                        </select>
                </div>
                <div class="row-fluid">
                  <label>Email</label>
                  <input name="email" id="email" value="<?php if(isset($email)) echo $email;?>" maxlength="255" class="t3InputText required email" type="text">
                </div>
				<div class="row-fluid">
                  <label>Zip Code</label>
                  <input name="zip" id="zip" value="<?php if(isset($zip)) echo $zip;?>" maxlength="5" minlength="5" class="t3InputText required" type="text">
                </div>
				<div class="row-fluid">
                  <label>Street Address</label>
                  <input name="address" id="address" value="<?php if(isset($address)) echo $address;?>" maxlength="100" class="t3InputText required" type="text">
                </div>
                <div class="row-fluid">
                  <label>City</label>
                  <input name="city" id="city" value="<?php if(isset($city)) echo $city;?>" maxlength="255" class="t3InputText required" type="text">
                </div>
                <div class="row-fluid">
                  <label>Home Phone</label>
                  <input type="text" id="phone" name="phone" class="t3InputText required" value="<?php if(isset($phone)) echo $phone;?>">
                </div>
                <div class="row-fluid">
                  <label>Work Phone</label>
                  <input type="text" id="workPhone" name="workPhone" class="t3InputText required" value="<?php if(isset($workPhone)) echo $workPhone;?>">
                </div>
                <div class="row-fluid">
                  <label>Cell (Optional)</label>
                  <input type="text" id="mobile" name="mobile" class="t3InputText ui-mask" value="<?php if(isset($mobile)) echo $mobile;?>">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/span-->
        <div class="span4">
          <div class="widget-box">
            <div class="widget-header">
              <h4>Additional Information</h4>
            </div>
            <div class="widget-body">
              <div class="widget-main">
                <div class="row-fluid">
                  <label>Length at Address (Year - month)</label>
                  <select class="input-medium required" name="stayYear">
                          <option value="">Select Year</option>
						  <? foreach($GLOBALS['STAYYEAR'] as $k => $v){
						  		$selected = ($k == $stayYear) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                        </select>
                  &nbsp;&nbsp;<select class="input-medium required" name="stayMonth">
                          <option value="">Select Month</option>
						  <? foreach($GLOBALS['STAYMONTH'] as $k => $v){
						  		$selected = ($k == $stayMonth) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                        </select>
                </div>
                <div class="row-fluid">
                  <label>Residential Status</label>
                  <select class="t3InputText required" name="rentown" id="rentown">
                          <option value="">Select</option>
                          <? foreach($GLOBALS['RENT_OWN_PAYDAYUK'] as $k => $v){
						  		$selected = (isset($rentown) && $k == $rentown) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                        </select>
                </div>
                <div class="row-fluid">
                  <label>Income Source</label>
                  <select class="t3InputText required" name="incomeType" id="incomeType" >
                          <option value="">Select</option>
                          <? foreach($GLOBALS['INCOME_TYPE_UK'] as $k => $v){
						  		$selected = (isset($incomeType) && $k == $incomeType) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                        </select>
                </div>
				<div class="row-fluid">
                  <label>Job Industry</label>
                  <select class="t3InputText required" name="jobIndustry" id="jobIndustry" >
                          <option value="">Select</option>
                          <? foreach($GLOBALS['JOB_INDUSTRY'] as $k => $v){
						  		$selected = (isset($jobIndustry) && $k == $jobIndustry) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                        </select>
                </div>
                <div class="row-fluid">
                  <label>Monthly Net Income</label>
                  <select class="t3InputText required" name="monthlyIncome" id="monthlyIncome" >
                          <option value="">Select</option>
						  <? foreach($GLOBALS['MONTHLY_INCOME'] as $k => $v){
						  		$selected = (isset($monthlyIncome) && $k == $monthlyIncome) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>      
                        </select>
                </div>
                <div class="row-fluid">
                  <label>Employer Name</label>
                  <input name="employer" id="employer" value="<?php if(isset($employer)) echo $employer;?>" class="t3InputText required" maxlength="128" type="text">
                </div>
                <div class="row-fluid">
                  <label>Job Title</label>
                  <input name="jobTitle" id="jobTitle" value="<?php if(isset($jobTitle)) echo $jobTitle;?>" class="t3InputText required" maxlength="128" type="text">
                </div>
                <div class="row-fluid">
                  <label>Time Employed (Year - Month)</label>
                  <select class="input-medium required" name="employmentYear">
                          <option value="" selected="selected">Select Year</option>
						  <? foreach($GLOBALS['EMPLOYMENTYEAR'] as $k => $v){
						  		$selected = ($k == $employmentYear) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                        </select>
                  <select class="input-medium required" name="employmentMonth">
                          <option value="" selected="selected">Select Month</option>
						  <? foreach($GLOBALS['EMPLOYMENTMONTH'] as $k => $v){
						  		$selected = ($k == $employmentMonth) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                        </select>
                </div>
                <div class="row-fluid">
                  <!--<label>IP Address</label> -->
                  <input name="ipaddress" id="ipaddress" value="<?php if(isset($ipaddress)) echo $ipaddress;?>" class="t3InputText required" maxlength="128" type="hidden">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/span-->
        <div class="span4">
          <div class="widget-box">
            <div class="widget-header">
              <h4>Banking Information</h4>
               </div>
            <div class="widget-body">
              <div class="widget-main">
                <div class="row-fluid">
                  <label>Account Number</label>
                  <input name="bankAccountNumber" id="bankAccountNumber" value="<?php if(isset($bankAccountNumber)) echo $bankAccountNumber;?>" class="t3InputText required digits" maxlength="30"  type="text">
                </div>
                <div class="row-fluid">
                  <label>Bank Name</label>
                  <input name="bankName" id="bankName" class="t3InputText required" maxlength="128" type="text" value="<?php if(isset($bankName)) echo $bankName;?>">
                </div>
                <div class="row-fluid">
                  <label>Bank Phone</label>
                  <input name="bankPhone" id="bankPhone" class="t3InputText" maxlength="128" type="text" value="<?php if(isset($bankPhone)) echo $bankPhone;?>">
                </div>
				<div class="row-fluid">
                  <label>Bank Sort Code</label>
                  <input name="bankCode" id="bankCode" class="t3InputText" maxlength="128" type="text" value="<?php if(isset($bankCode)) echo $bankCode;?>">
                </div>
				<div class="row-fluid">
                  <label>Debit Card Type</label>
                  <select class="input-medium required" name="cardType">
                          <option value="" selected="selected">Select Month</option>
						  <? foreach($GLOBALS['CARD_TYPE'] as $k => $v){
						  		$selected = ($k == $cardType) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/span-->
      </div>
            <div class="form-actions">
              <button class="btn btn-info" type="submit"> <i class="icon-ok bigger-110"></i> Submit </button>
			  &nbsp; &nbsp; &nbsp;<button class="btn" type="button" onClick="history.go(-1);"><i class="icon-undo bigger-110"></i> cancel </button>
            </div>
			<input type="hidden" name="dob" value="">
			<input type="hidden" name="agreeCreditCheck" value="1">
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
<!--inline scripts related to this page-->
<script type="text/javascript">
	$(function() {
		$("#leadPaydayuk_add").validate({
			rules: {
				vid: {required: true},
				firstName: {required: true,	minlength: 2},
				lastName: {required: true,	minlength: 2},
				email: {required: true,	email: true},
				phone: {required: true,	digits: true,	minlength: 10},
				mobile: {digits: true,	minlength: 10},
				workPhone: {required: true,	digits: true,	minlength: 10},
				company: {required: true,	minlength: 3},
				status: {required: true}
			}
		});
	$("#incomeCycle").change(function(){
		$( "#nextPayDate1,#nextPayDate2" ).val('');
	});
	$( "#nextPayDate1" ).datepicker({ daysOfWeekDisabled:'0,6',startDate: '+1d',endDate: '+1m' });
	$( "#nextPayDate2" ).datepicker({ daysOfWeekDisabled:'0,6',startDate: '+1d',endDate: '+2m' });
	$("#leadPaydayuk_add").submit(function(){
		$("input[name=dob]").val($("select[name=dob_year]").val()+'-'+$("select[name=dob_month]").val()+'-'+$("select[name=dob_day]").val());
	})
	})
</script>
</body>
</html>
