<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Posting Specs Car Finance -</title>
<?php $this->load->view('head'); ?>
</head>
<body>
<?php $this->load->view('header'); ?>
<div class="main-container container-fluid postingspecs">
  <div class="page-content">
    <div class="page-header position-relative">
      <h1>Posting Specs <small> <i class="icon-double-angle-right"></i> Car Finance</small> </h1>
    </div>
    <!--/.page-header-->
    <div class="row-fluid">
      <div class="span12">
        <!--/row-->
        <div class="row-fluid">
          <h3 class="header smaller lighter blue"> Overview </h3>
          <p>This document is intended to provide a general overview of interactions with the Whitebox Application for users wishing to sell leads to PPS. The following information describes the available integration techniques, required parameters, and acceptable values for those parameters. After reviewing this document, users shall able to successfully compile lead data, send test leads to Whitebox and understand the received response.</p>
          <h3 class="header smaller lighter blue"> Integration Techniques </h3>
          <p>PPS provides only one methods for integrating with Whitebox<br>
            1) HTTP Post</p>
          <h3 class="header smaller lighter blue">HTTP Posting URL</h3>
          <p><?php echo base_url(); ?>leadCarfinance/post/</p>
          <h3 class="header smaller lighter blue">HTTP Field Names and Allowable Values</h3>
          <p>The following table describes the list of form fields that will be accepted by Whitebox. Required fields are shaded with light blue. Examples of allowable values are highlighted in blue font.</p>
          <p>Note: Vendor is the only value provided by QCF.</p>
          <br>
          <br>
          <table border="1" cellspacing="0" cellpadding="0">
            <tr>
              <td width="148" valign="top"><p><strong>Field Name </strong> </p></td>
              <td width="491" valign="top"><p><strong>Allowable values </strong> </p></td>
              <td width="89" valign="top"><p><strong>Field Type </strong> </p></td>
              <td width="70" valign="top"><p><strong>Flag </strong> </p></td>
            </tr>
            <tr>
              <td width="148" valign="top"><p>tier </p></td>
              <td width="491" valign="top"><p>Below are the tiers from $230 to $2 and you will get an acceptance on whatever tier it may get approved. <br />
                  (ex. tierF) from tierF=&pound;230.00, tierE=&pound;200.00, tierD=&pound;150.00, tierC=&pound;120.00, tierB=&pound;100.00, tierA=&pound;50.00, tier1=&pound;25.00, tier2=&pound;5.00, tier3=&pound;3.00, tier4=&pound;2.00 and all </p></td>
              <td width="89" valign="top"><p>Text(5) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
            <tr>
              <td width="148" valign="top"><p>istest </p></td>
              <td width="491" valign="top"><p>You can pass this parameter for only test lead. <br />
                  (ex. 1) </p></td>
              <td width="89" valign="top"><p>Boolean </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
            <tr>
              <td width="148" valign="top"><p>vid </p></td>
              <td width="491" valign="top"><p>Your Vendor ID provided by    PPS. Must be added prior to receiving queries. <br />
                  (ex. BLZ-WB-VID) </p></td>
              <td width="89" valign="top"><p>Text(4) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
            <tr>
              <td width="148" valign="top"><p>subid </p></td>
              <td width="491" valign="top"><p>Source of lead provided by    vendor <br />
                  (ex. ABC-123, 4410, BPO) </p></td>
              <td width="89" valign="top"><p>Text(20) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>loanAmount </p></td>
              <td width="491" valign="top"><p>Requested Loan amount <br />
                  (ex. 400) </p></td>
              <td width="89" valign="top"><p>Number(10) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>vehicleType</p></td>
              <td width="491" valign="top"><p>Select Vehicle Type <br />
                 1 For Car <br/>
				 2 For Van<br/>
				 3 For Bike<br/>
				 4 For Motorhome<br/>
				 5 For Caravan<br/>
				 6 For Static Caravan<br/> </p></td>
              <td width="89" valign="top"><p>Number(10) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>monthlyBudget</p></td>
              <td width="491" valign="top"><p>Your Monthly Budget<br />
                 1 For Under £150 / month<br/>
				 2 For £150 - £250 / month<br/>
				 3 For £251 - £350 / month<br/>
				 4 For £351 - £450 / month<br/>
				 5 For £451 - £550 / month<br/>
				 6 For Over £550 / month<br/> </p></td>
              <td width="89" valign="top"><p>Number(10) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>licenceType</p></td>
              <td width="491" valign="top"><p>Select Licence Type <br />
                 1 For Full UK<br/>
				 2 For Provisional UK<br/>
				 3 For European<br/>
				 4 For International<br/>
				 5 For No Licence<br/> </p></td>
              <td width="89" valign="top"><p>Number(10) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>maritalStatus</p></td>
              <td width="491" valign="top"><p>Requested Marital Status<br />
                 1 For Single<br/>
				 2 For Married<br/>
				 3 For Cohabiting<br/>
				 4 For Divorced<br/>
				 5 For Separated<br/>
				 6 For Widowed<br/>
				 7 For Civil Partnership<br/></p></td>
              <td width="89" valign="top"><p>Number(10) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>passport</p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s passport<br />
                 1 For Yes<br/>
				 2 For No<br/></p></td>
              <td width="89" valign="top"><p>Number(10) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>dob </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s birthdate (YYYY-MM-DD) <br />
                  (ex. 1981-10-04) </p></td>
              <td width="89" valign="top"><p>Text(10) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>employmentStatus</p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s Employment Status <br />
                  1 For Full-Time Employment<br />
                  2 For Part-Time Employment<br>
				  3 For Self-Employment<br>
				  4 For Temporary/Contract<br>
				  5 For Retired<br>
				  6 For Homemaker/Carer<br>
				  7 For Education<br>
				  8 For Benefits<br>
				  9 For Armed Forces<br></p></td>
              <td width="89" valign="top"><p>Number(11) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			 <tr>
              <td width="148" valign="top"><p>employer </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s employer Name <br />
                  (ex. Midtown Computers) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
            <tr>
              <td width="148" valign="top"><p>jobTitle </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s job title <br />
                  (ex. Service Tech) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>employmentYear </p></td>
              <td width="491" valign="top"><p>Current employment length in years<br />
                  (ex. 2, 3) </p></td>
              <td width="89" valign="top"><p>Number(2) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
            <tr>
              <td width="148" valign="top"><p>employmentMonth </p></td>
              <td width="491" valign="top"><p>Current employment length in months <br />
                  (ex. 1,2,3,4,5,6,7,8,9,10 or 11) </p></td>
              <td width="89" valign="top"><p>Number(2) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>monthlyIncome </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s monthly net income <br />
                  (ex. 1250) </p></td>
              <td width="89" valign="top"><p>Number(6) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>zip</p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s Post Code<br />
                  (ex. ABCF ZYC) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>houseName </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s house name<br />
                  (ex. Jack) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>houseNumber </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s house number<br />
                  (ex. 14) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>street </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s street name<br />
                  (ex. Main St.) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>locality </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s locality or street name2 <br />
                  (ex. Sub St.) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>city </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s city name <br />
                  (ex. QLD) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>county </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s county name </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>residentialStatus</p></td>
              <td width="491" valign="top"><p>Status of applicant&rsquo;s residency <br />
                  1 For Homeowner <br />
                  2 For Tenant-Private  <br />
				  3 For Tenant-Housing  <br />
				  4 For Tenant-Council <br />
				  5 For Living with family <br />
				  6 For Military Accommodation <br />
				  7 For Work Accommodation <br />
				  8 For Student Accommodation <br />
				  9 For Other <br /></p></td>
              <td width="89" valign="top"><p>Number(1) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>stayYear </p></td>
              <td width="491" valign="top"><p>Current residence length in years<br />
                  (ex. 2, 3) </p></td>
              <td width="89" valign="top"><p>Number(2) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
            <tr>
              <td width="148" valign="top"><p>stayMonth </p></td>
              <td width="491" valign="top"><p>Current residence length in months <br />
                  (ex. 1,2,3,4,5,6,7,8,9,10 or 11) </p></td>
              <td width="89" valign="top"><p>Number(2) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>nameTitle</p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s Name Title <br />
                  1 For Mr <br />
                  2 For Mrs <br />
				  3 For Miss<br />
				  4 For Ms <br /></p></td>
              <td width="89" valign="top"><p>Number(1) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
            <tr>
              <td width="148" valign="top"><p>firstName </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s given name <br />
                  (ex. Susan) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
            <tr>
              <td width="148" valign="top"><p>lastName </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s surname <br />
                  (ex. Johnson) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
	        <tr>
              <td width="148" valign="top"><p>phone </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s home    phone <br />
                  (ex. 4885558475) </p></td>
              <td width="89" valign="top"><p>Number(10) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>email </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s valid email    address <br />
                  (ex.    susan_johnson42@yahoo.com) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
			</tr>
			<tr>
              <td width="148" valign="top"><p>employer1</p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s second employer name <br />
                  (ex. ABC) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>jobTitle1</p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s second Job Title <br />
                  (ex. ABC) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>employmentYear1</p></td>
              <td width="491" valign="top"><p>Current employment length in years<br />
                  (ex. 2, 3) </p></td>
              <td width="89" valign="top"><p>Number(2) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
            <tr>
              <td width="148" valign="top"><p>employmentMonth1</p></td>
              <td width="491" valign="top"><p>Current employment length in months <br />
                  (ex. 1,2,3,4,5,6,7,8,9,10 or 11) </p></td>
              <td width="89" valign="top"><p>Number(2) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>monthlyIncome1</p></td>
              <td width="491" valign="top"><p>second employer monthly net income <br />
                  (ex. 1250) </p></td>
              <td width="89" valign="top"><p>Number(6) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			
			<tr>
              <td width="148" valign="top"><p>employer2</p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s second employer name <br />
                  (ex. ABC) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>jobTitle2</p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s second Job Title <br />
                  (ex. ABC) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>employmentYear2</p></td>
              <td width="491" valign="top"><p>Current employment length in years<br />
                  (ex. 2, 3) </p></td>
              <td width="89" valign="top"><p>Number(2) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
            <tr>
              <td width="148" valign="top"><p>employmentMonth2</p></td>
              <td width="491" valign="top"><p>Current employment length in months <br />
                  (ex. 1,2,3,4,5,6,7,8,9,10 or 11) </p></td>
              <td width="89" valign="top"><p>Number(2) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>monthlyIncome2</p></td>
              <td width="491" valign="top"><p>second employer monthly net income <br />
                  (ex. 1250) </p></td>
              <td width="89" valign="top"><p>Number(6) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>zip1</p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s Post Code<br />
                  (ex. ABCF ZYC) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>houseName1 </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s house name<br />
                  (ex. Jack) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>houseNumber1 </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s house number<br />
                  (ex. 14) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>street1 </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s street name<br />
                  (ex. Main St.) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>locality1 </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s locality or street name2 <br />
                  (ex. Sub St.) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>city1 </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s city name <br />
                  (ex. QLD) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>county1 </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s county name </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>stayYear1 </p></td>
              <td width="491" valign="top"><p>Current residence length in years<br />
                  (ex. 2, 3) </p></td>
              <td width="89" valign="top"><p>Number(2) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
            <tr>
              <td width="148" valign="top"><p>stayMonth1 </p></td>
              <td width="491" valign="top"><p>Current residence length in months <br />
                  (ex. 1,2,3,4,5,6,7,8,9,10 or 11) </p></td>
              <td width="89" valign="top"><p>Number(2) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
			
			<tr>
              <td width="148" valign="top"><p>zip2</p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s Post Code<br />
                  (ex. ABCF ZYC) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>houseName2 </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s house name<br />
                  (ex. Jack) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>houseNumber2 </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s house number<br />
                  (ex. 14) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>street2 </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s street name<br />
                  (ex. Main St.) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>locality2 </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s locality or street name2 <br />
                  (ex. Sub St.) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>city2 </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s city name <br />
                  (ex. QLD) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>county2 </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s county name </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>stayYear2 </p></td>
              <td width="491" valign="top"><p>Current residence length in years<br />
                  (ex. 2, 3) </p></td>
              <td width="89" valign="top"><p>Number(2) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
            <tr>
              <td width="148" valign="top"><p>stayMonth2 </p></td>
              <td width="491" valign="top"><p>Current residence length in months <br />
                  (ex. 1,2,3,4,5,6,7,8,9,10 or 11) </p></td>
              <td width="89" valign="top"><p>Number(2) </p></td>
              <td width="70" valign="top"><p>Optional </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>url </p></td>
              <td width="491" valign="top"><p>A valid URL that sourced the lead <br />
                  (ex. http://www.leadssourcer.com) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>ipaddress </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s IP Address <br />
                  (ex. 123.456.7.0) </p></td>
              <td width="89" valign="top"><p>Number(15) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>agreeEmail </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s Agree to email opt-in<br />
                  1 For Yes<br>
				  2 For No</p></td>
              <td width="89" valign="top"><p>Number(15) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>	
			<tr>
              <td width="148" valign="top"><p>agreeSms </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s Agree to sms opt-in<br />
                  1 For Yes<br>
				  2 For No</p></td>
              <td width="89" valign="top"><p>Number(15) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>	
			<tr>
              <td width="148" valign="top"><p>marketingOptions </p></td>
              <td width="491" valign="top"><p>Applicant&rsquo;s Agree to marketing opt-in <br />
                  1 For Yes<br>
				  2 For No</p></td>
              <td width="89" valign="top"><p>Number(15) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>	
			
			
			
			<tr>
              <td width="148" valign="top"><p>utmMedium </p></td>
              <td width="491" valign="top"><p>UTM Medium <br />
                  (ex. cpc) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>utmSource </p></td>
              <td width="491" valign="top"><p>UTM Source <br />
                  (ex. google) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>utmCampaign </p></td>
              <td width="491" valign="top"><p>UTM Campaign <br />
                  (ex. Car Finance) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>utmContent </p></td>
              <td width="491" valign="top"><p>UTM Content <br />
                  (ex. Car Finance) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>utmTerm </p></td>
              <td width="491" valign="top"><p>UTM Term <br />
                  (ex. car finance) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>utmType </p></td>
              <td width="491" valign="top"><p>UTM Type <br />
                  (ex. e) </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>gclid </p></td>
              <td width="491" valign="top"><p>Google Click ID <br /> </p></td>
              <td width="89" valign="top"><p>Text(50) </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			<tr>
              <td width="148" valign="top"><p>cDate </p></td>
              <td width="491" valign="top"><p>Current Date <br />
                  (ex. 2019-01-01) </p></td>
              <td width="89" valign="top"><p>Date </p></td>
              <td width="70" valign="top"><p>Required </p></td>
            </tr>
			
			
						
          </table>
          <h3 class="header smaller lighter blue">Posting String</h3>
		  <?php $data = 'istest=1&vid=1&tier=all&loanAmount=200&vehicleType=3&monthlyBudget=2&licenceType=1&maritalStatus=1&passport=1&dob=1994-10-22&employmentStatus=1&employer=yash&jobTitle=test&employmentYear=03&employmentMonth=03&monthlyIncome=2000&address=ahmedabad&residentialStatus=4&stayYear=05&stayMonth=02&nameTitle=2&firstName=Vishw&lastName=Test&phone=07757660144&email=carfinance772%40gmail.com&url=http%3A%2F%2Flocalhost%2Fcarfinance_apply_form%2F&ipaddress=192.56.8.8&cDate=2019-02-14+10%3A32%3A39';
		  $query_string = wordwrap($data,180,"<br>\n",TRUE);
		  echo '<p>'.$query_string.'</p>';
		  ?>
          <hr>
          <h3 class="header smaller lighter blue">Submission Results</h3>
          <p>if rejected, response will be as below:<br>
            &lt;PostResponse&gt;&lt;Response&gt;Rejected&lt;/Response&gt;&lt;Descriptions&gt;&lt;/Descriptions&gt;&lt;/PostResponse&gt;</p>
          <hr>
          <p>if success, response will be as below:<br>
            &lt;PostResponse&gt;&lt;Response&gt;Accepted&lt;/Response&gt;&lt;Leadid&gt;133&lt;/Leadid&gt;&lt;Price&gt;10.50&lt;/Price&gt;&lt;RedirectURL&gt;<?php echo base_url(); ?>leadPayday/redirecturl/124568&lt;/RedirectURL&gt;&lt;/PostResponse&gt; </p>
          <p>Lead was valid, and purchased by a lender. To receive credit for an accepted lead, the customer must be successfully redirected to the URL provided. Non-redirected leads will be returned to you. Leadid will be a unique value.</p>
          <hr>
          <h3 class="header smaller lighter blue">General Filters</h3>
          <p>Leads will be compared against the following criteria. Only leads which meet the required criteria and do not meet any of the invalid criteria will be accepted.</p>
          <p>To be accepted, leads must meet the following criteria.
          <ul>
            <li>Lead must receive a regular income</li>
            <li>Lead must be 18 years of age or older</li>
            <li>Lead’s provided bank account must be a checking account</li>
            <li>Lead’s paychecks must be directly deposited into his or her bank account</li>
          </ul>
          </p>
        </div>
        <!--PAGE CONTENT ENDS-->
      </div>
      <!--/.span-->
    </div>
    <!--/.row-fluid-->
  </div>
  <!--/.page-content-->
  <!--/.main-content-->
</div>
<!--/.main-container-->
<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse"> <i class="icon-double-angle-up icon-only bigger-110"></i> </a>
</body>
</html>
