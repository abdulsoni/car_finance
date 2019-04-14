<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />

<title>SMTP Form -</title>

<?php $this->load->view('head'); ?>

</head>

<body>

<?php $this->load->view('header'); ?>

<div class="main-container container-fluid">

  <?php $this->load->view('leftside'); ?>

  <div class="main-content">

    <div class="page-content">

      <div class="page-header position-relative">

        <h1> SMTP Form <small> <i class="icon-double-angle-right"></i> <?php echo $header['title'];?> </small></h1>

      </div>

      <!--/.page-header-->

      <div class="row-fluid">

        <!--PAGE CONTENT BEGINS-->

        <!--/row-->

        <!--<form id="buyer_add" action="" method="post">-->

        <?php extract($view_data);?> 

        <?php $action = (isset($id) && !empty($id)) ? 'smtp/addsetup/'.$id : 'smtp/addsetup/';?>

        <?php echo form_open( $action,array('id' => 'smtpsetup_add')); ?>

        <?php echo validation_errors(); extract($view_data);?>

        <input type="hidden" name="id" value="<?php if(isset($id)) echo $id;?>" />

          <div class="widget-header">

            <h4>Information</h4>

          </div>

          <div class="widget-body clearfix">

            <div class="widget-main">

              <div class="row-fluid">               

             
<?php  //print_r(extract($view_data) ) ; die; ?>
                

                <div class="span12">

                  <label>Protocol</label>

                  <input name="protocol" value="<?=$protocol;?>" maxlength="128" class="span12" type="text" placeholder="smtp" > 

                </div>
                </div>
                 <div class="row-fluid">
                 
                 

                <div class="span6">

                  <label>SMTP Host</label>

                  <input name="smtphost" value="<?=$smtphost;?>" class="span12" type="text" placeholder="ssl://smtp.gmail.com">

                </div>

              

            

           

                <div class="span6">

                  <label>SMTP Port </label>

                  <input name="smtpport"  value="<?=$smtpport;?>" class="span12" type="text" placeholder="465">

                </div>
                </div>
                
                 <div class="row-fluid">
                

                <div class="span12">

                  <label>SMTP User</label>

                  <input name="smtpuser"  value="<?=$smtpuser;?>"  class="span12" type="text" placeholder="********@gmail.com">

                </div>

              </div>

              

               <!--<div class="row-fluid">

               <div class="span10">

                  <label>Post test URL </label>

                  <input name="post_url_test"  value="<?php //$post_url_test;?>" class="span10" type="text">

                </div>-->

                <!--<div class="span5">

                  <label>Post live URL</label>

                  <input name="post_url_live"  value="<?php //$post_url_live;?>" class="span12" type="text">

                </div>

              </div>-->

              <div class="row-fluid">
              
				
              
                <div class="span6">

                  <label>SMTP Password</label>

                  <input name="smtppass"  value="<?=$smtppass;?>" class="span12" type="text"placeholder="Your Email Password">

                </div>

                <div class="span6">

                  <label>Charset</label>

                  <input name="charset"  value="<?=$charset;?>" class="span12" type="text" placeholder="utf-8">

                </div>
                </div>
                
                 <div class="row-fluid">
                 

                <div class="span12">

                  <label>Mail Type</label>

                  <input name="mailtype" value="<?=$mailtype;?>" class="span12" type="text" placeholder="html">

                </div>

              </div>

             

               <!-- <div class="span5">

                  <label>Mode</label>

                  <select class="span12" name="mode" >

                    <option value="">Select</option>

                    <?php /*foreach($GLOBALS['MODE'] as $k => $v){

						  		$selected = ($k == $mode) ? ' selected' : '';

								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';

						  }*/?>

                  </select>-->

                <div class="row-fluid"> 
               

                <div class="span6">

                  <label>New line</label>

                  <input name="newline" value="<?=$newline;?>" class="span12" type="text" placeholder="\r\n">


                    <?php /*foreach($GLOBALS['STATUS'] as $k => $v){

						  		$selected = ($k == $status) ? ' selected' : '';

								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';

						  }*/?>

                  </select>

                </div>

                <div class="span6">

                  <label>Name</label>

                  <input name="smtpFooter" value="<?=$smtpFooter;?>" class="span12" type="text" placeholder="Dinesh">

                </div>
                </div>

              

             <!-- <div class="row-fluid">

                <div class="span12">

                  <label>Notes</label>

                  <textarea name="notes" class="span12" cols="50" rows="4"><?php //$notes;?></textarea>
-->
              

              

       </div>

          </div>

          <div class="form-actions">

            <button class="btn btn-info" type="submit"> <i class="icon-ok bigger-110"></i> <?php echo ($id)? 'Update':'Create' ;?> SMTP Integration </button>

                 

            <button class="btn cancel" type="button" onClick=""><i class="icon-undo bigger-110"></i> cancel </button>

          </div>

          </form>

          <!--PAGE CONTENT ENDS-->

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

		$("#smtpsetup_add").validate({

			rules: {

				protocol: {required: true},

				smtphost: {required: true},
				smtpport: {required: true},

				smtpuser: {required: true,	minlength: 3},

				smtppass: {required: true,	minlength: 2},

				charset: {required: true,	minlength: 2},
				mailtype: {required: true,	minlength: 2},
				newline: {required: true,	minlength: 2},
				smtpFooter: {required: true,	minlength: 2},
				
				

				//confirmPassword: {	equalTo: "#password"},

				//email: {required: true,	email: true},

				//phone: {required: true,	digits: true,	minlength: 10},

				//company: {required: true,	minlength: 3},

				//mode: {required: true},

				//status: {required: true}

			}

		});

	})

</script>

</body>

</html>

