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

              <h1> <i class="icon-leaf green"></i> <span class="red">Quick</span> <span class="white">Car Finance</span> </h1>

              <h4 class="blue">&copy; QCF</h4>

            </div>

          </div>

          <div class="space-6"></div>

          <div class="row-fluid">

            <div class="position-relative">

              <div id="login-box" class="login-box visible widget-box no-border">

                <div class="widget-body">

                  <div class="widget-main">

                    <h4 class="header blue lighter bigger"> <i class="icon-coffee green"></i> Please Enter Your Information </h4>

                    <div class="space-6"></div>

        <?php if (isset($error) && $error): ?>

								<div class="alert alert-error">

									<button type="button" class="close" data-dismiss="alert">

										<i class="icon-remove"></i>

									</button>



									<i class="icon-umbrella bigger-120 blue"></i>

									Incorrect Email or Password!

								</div>          

        <?php endif; ?>



        <?php echo form_open('login/login_user') ?>
                    <label>
													<input name="form-field-radio" type="radio" value="1">
													<span class="lbl"> Super/Site Admin</span>
												</label>

												<label>
													<input name="form-field-radio" type="radio" value="2">
													<span class="lbl"> Affiliates </span>
												</label>

												<!--<label>
													<input name="form-field-radio" type="radio" value="3">
													<span class="lbl"> Agent </span>
												</label>-->
                    <fieldset>

                    <label> <span class="block input-icon input-icon-right">

                    <input type="email" class="span12" placeholder="Email" name="email" />

                    <i class="icon-user"></i> </span> </label>

                    <label> <span class="block input-icon input-icon-right">

                    <input type="password" class="span12" placeholder="Password" name="password" />

                    <i class="icon-lock"></i> </span> </label>

                    <div class="space"></div>

                    <div class="clearfix">

                      <label class="inline">

                      <input type="checkbox" />

                      <span class="lbl"> Remember Me</span> </label>

                      <button onClick="return true;" class="width-35 pull-right btn btn-small btn-primary"> <i class="icon-key"></i> Login </button>

                    </div>

                    <div class="space-4"></div>

                    </fieldset>

                    </form>

                    <div class="social-or-login center"> </div>

                   <!-- <div class="social-login center"> <a class="btn btn-primary"> <i class="icon-facebook"></i> </a> <a class="btn btn-info"> <i class="icon-twitter"></i> </a> <a class="btn btn-danger"> <i class="icon-google-plus"></i> </a> </div> -->

                  </div> 

                  <!--/widget-main-->

                  <div class="toolbar clearfix">

                    <div> <a href="#" onClick="show_box('forgot-box'); return false;" class="forgot-password-link"> </a> </div>
				
				

                   <div> <a href="#" onClick="show_box('signup-box'); return false;" class="user-signup-link"> </a> </div>

                  </div>

                </div> 

                <!--/widget-body-->

              </div>

              <!--/login-box-->
			    <?php if($message = $this->session->flashdata('message'))
				{ 
					  echo $message;
					    
					 '<style type="text/css">
       			 	#forgot-box{
           			visibility:visible;
       				 }else
					 {
					 #login-box{
					 
					</style>';
						
					  }
					 
					 ?>
			  
			  
			  

              <div id="forgot-box" class="forgot-box  widget-box no-border32q">

                <div class="widget-body">
				
			  
				

                  <div class="widget-main" id="forgot-error">
				  
				   </div>
				   
				   

                    <h4 class="header red lighter bigger"> <i class="icon-key"></i> Retrieve Password </h4>

                    <div class="space-6"></div>
					
					
					

                    <p> Enter your email and to receive instructions </p>

                    
					   <form id="resetPassword" name="resetPassword" method="post" action="<?php echo base_url();?>login/forgotpassword" onsubmit ='return validate()'>

                    <fieldset>

                    <label> <span class="block input-icon input-icon-right">

                    <input type="email"  class="span12" placeholder="Email" name="email" />

                    <i class="icon-envelope"></i> </span> </label>

                    <div class="clearfix">

                     <button onClick="return true ;" class="width-35 pull-right btn btn-small btn-danger"> <i class="icon-lightbulb"></i> Send Me!</a> </button>
					 
					 
					 
					  
                    </div>

                    </fieldset>

                    </form>

                  </div>

                  <!--/widget-main-->

                  <div class="toolbar center"> <a href="#" onClick="show_box('login-box'); return false;" class="back-to-login-link"> Back to login <i class="icon-arrow-right"></i> </a> </div>

                </div>
				

                <!--/widget-body-->

              </div>

              <!--/forgot-box-->

              <div id="signup-box" class="signup-box widget-box no-border">

                <div class="widget-body">

                  <div class="widget-main">

                    <h4 class="header green lighter bigger"> <i class="icon-group blue"></i> New User Registration </h4>

                    <div class="space-6"></div>

                    <p> Enter your details to begin: </p>

                    <form />

                    <fieldset>

                    <label> <span class="block input-icon input-icon-right">

                    <input type="email" class="span12" placeholder="Email" />

                    <i class="icon-envelope"></i> </span> </label>

                    <label> <span class="block input-icon input-icon-right">

                    <input type="text" class="span12" placeholder="Username" />

                    <i class="icon-user"></i> </span> </label>

                    <label> <span class="block input-icon input-icon-right">

                    <input type="password" class="span12" placeholder="Password" />

                    <i class="icon-lock"></i> </span> </label>

                    <label> <span class="block input-icon input-icon-right">

                    <input type="password" class="span12" placeholder="Repeat password" />

                    <i class="icon-retweet"></i> </span> </label>

                    <label> 

                    <input type="checkbox" />

                    <span class="lbl"> I accept the <a href="#">User Agreement</a> </span> </label>

                    <div class="space-24"></div>

                    <div class="clearfix">

                      <button type="reset" class="width-30 pull-left btn btn-small"> <i class="icon-refresh"></i> Reset </button>

                      <button onClick="return false;" class="width-65 pull-right btn btn-small btn-success"> Register <i class="icon-arrow-right icon-on-right"></i> </button>

                    </div>

                    </fieldset>

                    </form>

                  </div>

                  <div class="toolbar center"> <a href="#" onClick="show_box('login-box'); return false;" class="back-to-login-link"> <i class="icon-arrow-left"></i> Back to login </a> 
				  
				  
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

