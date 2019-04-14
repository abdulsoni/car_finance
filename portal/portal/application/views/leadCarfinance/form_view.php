<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Payday Car Finance View -</title>
<?php $this->load->view('head'); ?>
</head>
<body>
    <div class="page-content">
      <div class="page-header position-relative">
        <h1> Lead Payday Car Finance ID# <?php echo $row->id;?></h1>
      </div>
      <!--/.page-header-->
      <div class="row-fluid">
        <div class="span12">
          <!--PAGE CONTENT BEGINS-->
          <!--/row-->
          <!--<form id="publisher_add" action="" method="post">-->
		  <?php extract($view_data);?>
		  <?php $action = (isset($id) && !empty($id)) ? 'publisher/add/'.$id : 'publisher/add/';?>
		  <?php echo form_open( $action,array('id' => 'publisher_add')); ?>
		  <?php //echo validation_errors(); extract($view_data);?>
        <input type="hidden" name="vid" value="<?php if(isset($monthlimit)) echo (empty($_REQUEST['vid']) ? '1': $_REQUEST['vid']);?>">
        <input type="hidden" name="subid" value="<?php if(isset($monthlimit)) echo (empty($_REQUEST['sudid']) ? 'sub-1': $_REQUEST['subid']);?>">
            <div class="row-fluid">
        <div class="span4">
          <div class="widget-box">
            <div class="widget-header">
              <h4>Personal Information</h4>
            </div>
            <div class="widget-body">
              <div class="widget-main">
                
                
                <div class="row-fluid">
                  <label>Request Your Loan Amount</label>
                  <input name="loanAmount" id="loanAmount" value="<?php if(isset($row->loanAmount)) echo '&pound; '.$row->loanAmount;?>" maxlength="128" class="t3InputText required" type="text">
                </div>
				<div class="row-fluid">
                  <label>Vehicle Type</label>
                  <select class="t3InputText required" name="vehicleType" id="vehicleType">
                  <option value="">Select</option>
                  <? foreach($GLOBALS['VEHICLE_TYPE'] as $k => $v){
					  		$selected = (isset($row->vehicleType) && $k == $row->vehicleType) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                </select>
                </div>
				<div class="row-fluid">
                  <label>Name Title</label>
                  <select class="t3InputText required" name="nameTitle">
                         <option value="">Select</option>
						  <? foreach($GLOBALS['NAME_TITLE'] as $k => $v){
								$selected = (isset($row->nameTitle) && $k == $row->nameTitle) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>      
                        </select>
                </div>
                <div class="row-fluid">
                  <label>First Name</label>
                  <input name="firstName" id="firstName" value="<?php if(isset($row->firstName)) echo $row->firstName;?>" maxlength="128" class="t3InputText required" type="text">
                </div>
                <div class="row-fluid">
                  <label>Last Name</label>
                  <input name="lastName" id="lastName" value="<?php if(isset($row->lastName)) echo $row->lastName;?>" maxlength="128" class="t3InputText required" type="text">
                </div>
                <div class="row-fluid">
                  <label>Date of Birth</label>
                  <select class="t3InputText required" name="dob_month" id="dob_month" style="width:30%;display:inline;">
                    <option value="">Month</option>
                    <? foreach($GLOBALS['DOB_MONTH'] as $k => $v){
						  		$selected = ($k == $row->dob_month) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                  </select>
                  <select class="t3InputText required" name="dob_day" id="dob_day" style="width:30%;display:inline;">
                    <option value="">Day</option>
                    <? foreach($GLOBALS['DOB_DAY'] as $k => $v){
						  		$selected = ($k == $row->dob_day) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                  </select>
                  <select class="t3InputText required" name="dob_year" id="dob_year" style="width:30%;display:inline;">
                    <option value="">Year</option>
                    <? foreach($GLOBALS['DOB_YEAR'] as $k => $v){
						  		$selected = ($k == $row->dob_year) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                  </select>
                </div>
				
                <div class="row-fluid">
                  <label>Email</label>
                  <input name="email" id="email" value="<?php if(isset($row->email)) echo $row->email;?>" maxlength="255" class="t3InputText required email" type="text">
                </div>
				<div class="row-fluid">
				  <label>Home Phone</label>
				  <input type="text" id="phone" name="phone" class="t3InputText required" value="<?php if(isset($row->phone)) echo $row->phone;?>">
				</div>
				<div class="row-fluid">
				  <label>Marital Status</label>
				  <select class="t3InputText required" name="maritalStatus">
					<option value="">Select</option>
					<?php //print_r($GLOBALS['MARITAL_STATUS']);die;?>
					<? foreach($GLOBALS['MARITAL_STATUS'] as $k => $v){ //print_r($k);//die;
				$selected = (isset($row->maritalStatus) && $k == $row->maritalStatus) ? ' selected' : '';
				echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
				}?>
				  </select>
				</div>
				<div class="row-fluid">
                  <label>Monthly Budget</label>
                  <select class="t3InputText required" name="monthlyBudget" id="monthlyBudget">
                          <option value="">Select</option>
                          <? foreach($GLOBALS['MONTHLY_BUDGET'] as $k => $v){
						  		$selected = (isset($row->monthlyBudget) && $k == $row->monthlyBudget) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                  </select>
                </div>
				<div class="row-fluid">
                  <label>Licence Type</label>
                  <select class="t3InputText required" name="licenceType" id="licenceType">
                          <option value="">Select</option>
                          <? foreach($GLOBALS['INCOME_TYPE'] as $k => $v){
						  		$selected = (isset($row->licenceType) && $k == $row->licenceType) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                  </select>
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
				  <label>House Name</label>
				  <input name="houseName" id="houseName" value="<?php if(isset($row->houseName)) echo $row->houseName;?>" maxlength="5" minlength="5" class="t3InputText required" type="text">
				</div>
				<div class="row-fluid">
				  <label>House Number</label>
				  <input name="houseNumber" id="houseNumber" value="<?php if(isset($row->houseNumber)) echo $row->houseNumber;?>" maxlength="5" minlength="5" class="t3InputText required" type="text">
				</div>
				<div class="row-fluid">
				  <label>Street</label>
				  <input name="street" id="street" value="<?php if(isset($row->street)) echo $row->street;?>" maxlength="5" minlength="5" class="t3InputText required" type="text">
				</div>
				<div class="row-fluid">
				  <label>Locality</label>
				  <input name="locality" id="locality" value="<?php if(isset($row->locality)) echo $row->locality;?>" maxlength="5" minlength="5" class="t3InputText required" type="text">
				</div>
				<div class="row-fluid">
				  <label>City</label>
				  <input name="city" id="city" value="<?php if(isset($row->city)) echo $row->city;?>" maxlength="255" class="t3InputText required" type="text">
				</div>
				<div class="row-fluid">
				  <label>County</label>
				  <input name="county" id="county" value="<?php if(isset($row->county)) echo $row->county;?>" maxlength="255" class="t3InputText required" type="text">
				</div>
				<div class="row-fluid">
				  <label>Post Code</label>
				  <input name="zip" id="zip" value="<?php if(isset($row->zip)) echo $row->zip;?>" maxlength="255" class="t3InputText required" type="text">
				</div>			
				<div class="row-fluid">
                  <label>Employment Status</label>
                  <select class="t3InputText required" name="employmentStatus" id="employmentStatus" >
                          <option value="">Select</option>
                          <? foreach($GLOBALS['EMPLOYMENT_STATUS'] as $k => $v){
						  		$selected = (isset($row->employmentStatus) && $k == $row->employmentStatus) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                        </select>
                </div>
				<div class="row-fluid">
                  <label>Employer Name</label>
                  <input name="employer" id="employer" value="<?php if(isset($row->employer)) echo $row->employer;?>" class="t3InputText required" maxlength="128" type="text">
                </div>
                <div class="row-fluid">
                  <label>Job Title</label>
                  <input name="jobTitle" id="jobTitle" value="<?php if(isset($row->jobTitle)) echo $row->jobTitle;?>" class="t3InputText required" maxlength="128" type="text">
                </div>
				
                <div class="row-fluid">
                  <label>Time Employed (Year - Month)</label>
                  <select class="input-medium required" name="employmentYear">
                          <option value="" selected="selected">Select Year</option>
						  <? foreach($GLOBALS['EMPLOYMENTYEAR'] as $k => $v){
								$selected = (isset($row->employmentYear) && $k == $row->employmentYear) ? ' selected' : '';								
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                        </select>
                  <select class="input-medium required" name="employmentMonth">
                          <option value="" selected="selected">Select Month</option>
						  <? foreach($GLOBALS['EMPLOYMENTMONTH'] as $k => $v){
								$selected = (isset($row->employmentMonth) && $k == $row->employmentMonth) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                        </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/span-->
        <div class="span4">
          <div class="widget-box">
            <div class="widget-header">
              <h4>Other Information</h4>
               </div>
            <div class="widget-body">
              <div class="widget-main">
			   
			    <div class="row-fluid">
                  <label>Do You Have Passport?</label>
                  <select class="t3InputText required" name="passport" id="passport">
                          <option value="">Select</option>
                          <? foreach($GLOBALS['PASSPORT'] as $k => $v){
						  		$selected = (isset($row->passport) && $k == $row->passport) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                  </select>
                </div>			  
			    <div class="row-fluid">
                  <label>Monthly Net Income</label>
				  <input name="monthlyIncome" id="monthlyIncome" value="<?php if(isset($row->monthlyIncome)) echo $row->monthlyIncome;?>" maxlength="100" class="t3InputText required" type="text">
                </div>
				<div class="row-fluid">
                  <label>Residential Status</label>
                  <select class="t3InputText required" name="residentialStatus" id="residentialStatus" >
                          <option value="">Select</option>
                          <? foreach($GLOBALS['RESIDENTIAL_STATUS'] as $k => $v){
						  		$selected = (isset($row->residentialStatus) && $k == $row->residentialStatus) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                        </select>
                </div>
				<div class="row-fluid">
                  <label>Length at Address (Year - month)</label>
                  <select class="input-medium required" name="stayYear">
                          <option value="">Select Year</option>
						  <? foreach($GLOBALS['STAYYEAR'] as $k => $v){
						  		$selected = (isset($row->stayYear) && $k == $row->stayYear) ? ' selected' : '';								
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                        </select>
                  &nbsp;&nbsp;<select class="input-medium required" name="stayMonth">
                          <option value="">Select Month</option>
						  <? foreach($GLOBALS['STAYMONTH'] as $k => $v){
						  		$selected = (isset($row->stayMonth) && $k == $row->stayMonth) ? ' selected' : '';								
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                        </select>
                </div>
				<div class="row-fluid">
                  <label>IP Address</label>
                  <input name="ipaddress" id="ipaddress" value="<?php if(isset($row->ipaddress)) echo $row->ipaddress;?>" class="t3InputText required" maxlength="128" type="text">
                </div>	
				<div class="row-fluid">
                  <label>URL</label>
                  <input name="url" id="url" value="<?php if(isset($row->url)) echo $row->url;?>" class="t3InputText required" maxlength="128" type="text">
                </div>	
				<div class="row-fluid">
                  <label>Agree Email</label>
                  <select class="t3InputText required" name="agreeEmail" id="agreeEmail" >
                          <option value="">Select</option>
                          <? foreach($GLOBALS['YES_NO'] as $k => $v){
						  		$selected = (isset($row->agreeEmail) && $k == $row->agreeEmail) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                        </select>
                </div>
				<div class="row-fluid">
                  <label>Agree Sms</label>
                  <select class="t3InputText required" name="agreeSms" id="agreeSms" >
                          <option value="">Select</option>
                          <? foreach($GLOBALS['YES_NO'] as $k => $v){
						  		$selected = (isset($row->agreeSms) && $k == $row->agreeSms) ? ' selected' : '';
								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						  }?>
                        </select>
                </div>
				<div class="row-fluid">
                  <label>Marketing Options</label>
                  <select class="t3InputText required" name="marketingOptions" id="marketingOptions" >
                          <option value="">Select</option>
                          <? foreach($GLOBALS['YES_NO'] as $k => $v){
						  		$selected = (isset($row->marketingOptions) && $k == $row->marketingOptions) ? ' selected' : '';
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
	 
		<div class="row-fluid">
			<div class="span4">
				<div class="widget-box">
					<div class="widget-header">
						<h4>Other Employer Information</h4>
					</div>
					<div class="widget-body">
						<div class="widget-main">
							<div class="row-fluid">
								<label>Employer Name 1</label>
								<input name="employer1" id="employer1" value="<?php if(isset($row->employer1)) echo $row->employer1;?>" class="t3InputText required" maxlength="128" type="text">
							</div>
							<div class="row-fluid">
								<label>Job Title 1</label>
								<input name="jobTitle1" id="jobTitle1" value="<?php if(isset($row->jobTitle1)) echo $row->jobTitle1;?>" class="t3InputText required" maxlength="128" type="text">
							</div>
							<div class="row-fluid">
								<label>Monthly Income 1</label>
								<input name="monthlyIncome1" id="monthlyIncome1" value="<?php if(isset($row->monthlyIncome1)) echo $row->monthlyIncome1;?>" class="t3InputText required" maxlength="128" type="text">
							</div>
							<div class="row-fluid">
								<label>Time Employed (Year - Month)</label>
								<select class="input-medium required" name="employmentYear1">
									<option value="" selected="selected">Select Year</option>
									<? foreach($GLOBALS['EMPLOYMENTYEAR'] as $k => $v){
									$selected = (isset($row->employmentYear1) && $k == $row->employmentYear1) ? ' selected' : '';								
									echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
									}?>
								</select>
								<select class="input-medium required" name="employmentMonth1">
									<option value="" selected="selected">Select Month</option>
									<? foreach($GLOBALS['EMPLOYMENTMONTH'] as $k => $v){
									$selected = (isset($row->employmentMonth1) && $k == $row->employmentMonth1) ? ' selected' : '';
									echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
									}?>
								</select>
							</div>
							<div class="row-fluid">
								<label>Employer Name 2</label>
								<input name="employer2" id="employer2" value="<?php if(isset($row->employer2)) echo $row->employer2;?>" class="t3InputText required" maxlength="128" type="text">
							</div>
							<div class="row-fluid">
								<label>Job Title 2</label>
								<input name="jobTitle2" id="jobTitle2" value="<?php if(isset($row->jobTitle2)) echo $row->jobTitle2;?>" class="t3InputText required" maxlength="128" type="text">
							</div>
							<div class="row-fluid">
								<label>Monthly Income 2</label>
								<input name="monthlyIncome2" id="monthlyIncome2" value="<?php if(isset($row->monthlyIncome2)) echo $row->monthlyIncome2;?>" class="t3InputText required" maxlength="128" type="text">
							</div>
							<div class="row-fluid">
								<label>Time Employed (Year - Month)</label>
								<select class="input-medium required" name="employmentYear2">
									<option value="" selected="selected">Select Year</option>
									<? foreach($GLOBALS['EMPLOYMENTYEAR'] as $k => $v){
									$selected = (isset($row->employmentYear2) && $k == $row->employmentYear2) ? ' selected' : '';								
									echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
									}?>
								</select>
								<select class="input-medium required" name="employmentMonth2">
									<option value="" selected="selected">Select Month</option>
									<? foreach($GLOBALS['EMPLOYMENTMONTH'] as $k => $v){
									$selected = (isset($row->employmentMonth2) && $k == $row->employmentMonth2) ? ' selected' : '';
									echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
									}?>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="span4">
				<div class="widget-box">
					<div class="widget-header">
						<h4>Other Address Information</h4>
					</div>
					<div class="widget-body">
						<div class="widget-main">
							<div class="row-fluid">
								<label>Post Code 1</label>
								<input name="zip1" id="zip1" value="<?php if(isset($row->zip1)) echo $row->zip1;?>" class="t3InputText required" maxlength="128" type="text">
							</div>
							<div class="row-fluid">
								<label>House Name 1</label>
								<input name="houseName1" id="houseName1" value="<?php if(isset($row->houseName1)) echo $row->houseName1;?>" class="t3InputText required" maxlength="128" type="text">
							</div>
							<div class="row-fluid">
								<label>House Number 1</label>
								<input name="houseNumber1" id="houseNumber1" value="<?php if(isset($row->houseNumber1)) echo $row->houseNumber1;?>" class="t3InputText required" maxlength="128" type="text">
							</div>
							<div class="row-fluid">
								<label>Street 1</label>
								<input name="street1" id="street1" value="<?php if(isset($row->street1)) echo $row->street1;?>" class="t3InputText required" maxlength="128" type="text">
							</div>
							<div class="row-fluid">
								<label>Locality 1</label>
								<input name="locality1" id="locality1" value="<?php if(isset($row->locality1)) echo $row->locality1;?>" class="t3InputText required" maxlength="128" type="text">
							</div>
							<div class="row-fluid">
								<label>City 1</label>
								<input name="city1" id="city1" value="<?php if(isset($row->city1)) echo $row->city1;?>" class="t3InputText required" maxlength="128" type="text">
							</div>
							<div class="row-fluid">
								<label>County 1</label>
								<input name="county1" id="county1" value="<?php if(isset($row->county1)) echo $row->county1;?>" class="t3InputText required" maxlength="128" type="text">
							</div>
							<div class="row-fluid">
								<label>Length at Address (Year - month)</label>
								<select class="input-medium required" name="stayYear1">
									<option value="">Select Year</option>
									<? foreach($GLOBALS['STAYYEAR'] as $k => $v){
									$selected = (isset($row->stayYear1) && $k == $row->stayYear1) ? ' selected' : '';								
									echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
									}?>
								</select>
								&nbsp;&nbsp;<select class="input-medium required" name="stayMonth1">
									<option value="">Select Month</option>
									<? foreach($GLOBALS['STAYMONTH'] as $k => $v){
									$selected = (isset($row->stayMonth1) && $k == $row->stayMonth1) ? ' selected' : '';								
									echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
									}?>
								</select>
							</div>
							
							
							<div class="row-fluid">
								<label>Post Code 2</label>
								<input name="zip2" id="zip2" value="<?php if(isset($row->zip2)) echo $row->zip2;?>" class="t3InputText required" maxlength="128" type="text">
							</div>
							<div class="row-fluid">
								<label>House Name 2</label>
								<input name="houseName2" id="houseName2" value="<?php if(isset($row->houseName2)) echo $row->houseName2;?>" class="t3InputText required" maxlength="128" type="text">
							</div>
							<div class="row-fluid">
								<label>House Number 2</label>
								<input name="houseNumber2" id="houseNumber2" value="<?php if(isset($row->houseNumber2)) echo $row->houseNumber2;?>" class="t3InputText required" maxlength="128" type="text">
							</div>
							<div class="row-fluid">
								<label>Street 2</label>
								<input name="street2" id="street2" value="<?php if(isset($row->street2)) echo $row->street2;?>" class="t3InputText required" maxlength="128" type="text">
							</div>
							<div class="row-fluid">
								<label>Locality 2</label>
								<input name="locality2" id="locality2" value="<?php if(isset($row->locality2)) echo $row->locality2;?>" class="t3InputText required" maxlength="128" type="text">
							</div>
							<div class="row-fluid">
								<label>City 2</label>
								<input name="city2" id="city2" value="<?php if(isset($row->city2)) echo $row->city2;?>" class="t3InputText required" maxlength="128" type="text">
							</div>
							<div class="row-fluid">
								<label>County 2</label>
								<input name="county2" id="county2" value="<?php if(isset($row->county2)) echo $row->county2;?>" class="t3InputText required" maxlength="128" type="text">
							</div>
							<div class="row-fluid">
								<label>Length at Address (Year - month)</label>
								<select class="input-medium required" name="stayYear2">
									<option value="">Select Year</option>
									<? foreach($GLOBALS['STAYYEAR'] as $k => $v){
									$selected = (isset($row->stayYear2) && $k == $row->stayYear2) ? ' selected' : '';								
									echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
									}?>
								</select>
								&nbsp;&nbsp;<select class="input-medium required" name="stayMonth2">
									<option value="">Select Month</option>
									<? foreach($GLOBALS['STAYMONTH'] as $k => $v){
									$selected = (isset($row->stayMonth2) && $k == $row->stayMonth2) ? ' selected' : '';								
									echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
									}?>
								</select>
							</div>
						</div>
					</div>
				</div>
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
</body>
</html>
