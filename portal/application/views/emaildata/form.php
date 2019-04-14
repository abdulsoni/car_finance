<!DOCTYPE html>

<html lang="en">

<head><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


<meta charset="utf-8" />

<title>Email Data Add </title>

<?php $this->load->view('head'); ?>

</head>

<body>

<?php $this->load->view('header'); ?>

<div class="main-container container-fluid">

  <?php $this->load->view('leftside'); ?>

  <div class="main-content">

    <div class="page-content">

      <div class="page-header position-relative">

        <h1> Email Data <small> <i class="icon-double-angle-right"></i> <?php echo $header['title'];?> </small></h1>

      </div> 

      <!--/.page-header-->      

          <!--PAGE CONTENT BEGINS-->

          <!--/row-->

          <!--<form id="publisher_add" action="" method="post">-->
         <h4 align="center" class="header smaller lighter blue"> CSV format should be like : First Name, Last name, Email, Phone</h4>
		 <form method="post" enctype="multipart/form-data" action=" <?php echo base_url(); ?>emaildata/uploadData">
          <div align="center">
		   <div> <label> Campaign : </label> <input  type="text" name="campaign"  placeholder="Campaign" /><br><br>
          <input  class="btn btn-info" type="file" name="emaildata" value="Choose CSV File" /><br><br>
          <!-- <input type="submit" name="submit" value="Submit File" />-->
         
        <input  type="submit" value="Submit" class="btn btn-primary"  id= "btnSubmit"/> 
        </div>
         
        <!--<button class="btn cancel" type="button" onClick="<?php echo base_url(); ?>emaildata/form"><i class="icon-undo bigger-110"></i> cancel </button>--> 
         
         <!--<button onClick="return true;" class="btn btn-info" type="submit"> <i class="icon-ok bigger-110"></i> Submit </button> -->
          
</form>
                 

  </div>
  </div>
  </div>
           

</body>

</html>

