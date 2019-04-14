<!DOCTYPE html>

<html lang="en">

<head>

<title>Login Page - </title>

<?php include("head.php"); ?>

</head>

<body class="login-layout">

<div class="main-container container-fluid">

  <div class="main-content">

    <div class="row-fluid">

      <div class="span12">

        <div class="login-container">

          <div class="row-fluid">

            <div class="center">

              <h1> <i class="icon-leaf green"></i> <span class="red">PingPost</span> <span class="white">System</span> </h1>

              <h4 class="blue">&copy; PPS</h4>

            </div>

          </div>

          <div class="space-6"></div>

          <div class="row-fluid">

            <div class="position-relative">

              <div id="login-box" class="login-box visible widget-box no-border">

                <div class="widget-body">

                  <div class="widget-main">
				   <?php if($message = $this->session->flashdata('message')){ 
					  echo $message;
					  }
					  ?>

                    <h4 class="header blue lighter bigger"> <i class="icon-coffee green"></i> Reset your Password </h4>

					   <form id="resetPassword" name="resetPassword" method="post" action="" onsubmit ='return validate()'>

                    <fieldset>
					<?php /*?><input type="email"  class="span12" placeholder="email" name="email" /><?php */?>
					
				<?php foreach($metadata as $data) {?>	
					
			 <label> <span class="block input-icon input-icon-right">

        

   <input type="email"  class="span12"  name="email" value="<?php echo $data['email']; ?>" />
					
					
					

                    <i class="icon-envelope"></i> </span> </label>
					
					<?php }
					?>

                    <label> <span class="block input-icon input-icon-right">

                    <input type="password"  class="span12" placeholder="newpassword" name="password" />

                    <i class="icon-envelope"></i> </span> </label>
					<?php echo form_hidden('code', $code) ; ?>

                    <div class="clearfix">
			<button onClick="return true;" class="width-65 pull-right btn btn-small btn-success"> submit <i class="icon-arrow-right icon-on-right"></i> </button>

                     
					  
                    </div>

                    </fieldset>

                    </form>


                    <div class="social-or-login center"> <span class="bigger-110">Or Login Using</span> </div>

                    <div class="social-login center"> <a class="btn btn-primary"> <i class="icon-facebook"></i> </a> <a class="btn btn-info"> <i class="icon-twitter"></i> </a> <a class="btn btn-danger"> <i class="icon-google-plus"></i> </a> </div>

                  </div>

                  <!--/widget-main-->

                  <div class="toolbar clearfix">

                  
				
				



                  </div>

                </div>

                <!--/widget-body-->

              </div>

              <!--/login-box-->
              <!--/forgot-box-->
<div id="signup-box" class="signup-box widget-box no-border">

                <div class="widget-body">

                  

                    </form>

                  </div>

                  <div class="toolbar center"> <a href="#" onClick="show_box('login-box'); return false;" class="back-to-login-link"> <i class="icon-arrow-left"></i> login </a> 
				  
				  
				  </div>

                </div>

                <!--/widget-body-->

              </div>

              <!--/signup-box-->

            </div>

            <!--/position-relative-->

          </div>

        </div>

      </div>

      <!--/.span-->

    </div>

    <!--/.row-fluid-->

  </div>

</div>

<!--/.main-container-->

<?php include("footer.php"); ?>

</body>

</html>





