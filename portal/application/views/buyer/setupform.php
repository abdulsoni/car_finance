<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />

<title>Buyer Setup</title>

<?php $this->load->view('head'); ?>

</head>

<body>

<?php $this->load->view('header'); ?>

<div class="main-container container-fluid">

  <?php $this->load->view('leftside'); ?>

  <div class="main-content">

    <div class="page-content">

      <div class="page-header position-relative">

        <h1> Buyer Setup/Integration <small> <i class="icon-double-angle-right"></i> <?php echo $header['title'];?> </small></h1>

      </div>

      <!--/.page-header-->

      <div class="row-fluid">

        <!--PAGE CONTENT BEGINS-->

        <!--/row-->

        <!--<form id="buyer_add" action="" method="post">-->

        <?php extract($view_data);?>

        <?php $action = (isset($id) && !empty($id)) ? 'buyer/addsetup/'.$id : 'buyer/addsetup/';?>

        <?php echo form_open( $action,array('id' => 'buyersetup_add')); ?>

        <?php //echo validation_errors(); extract($view_data);?>

        <input type="hidden" name="id" value="<?php if(isset($id)) echo $id;?>" />

          <div class="widget-header">

            <h4>Information</h4>

          </div>

          <div class="widget-body clearfix">

            <div class="widget-main">

              <div class="row-fluid">

                <div class="span3">

                  <label>Lead Type</label>

                  <select class="span12" name="leadtype">

                    <option value="">Select</option>

                    <? foreach($GLOBALS['LEADTYPE'] as $k => $v){

						  		$selected = ($k == $leadtype) ? ' selected' : '';

								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';

						  }?>

                  </select>

                </div>

                <div class="span3">

                  <label>Buyer</label>

                  <select class="span12" name="buyerid" >

                    <option value="">Select</option>

                    <? foreach($buyers as $k => $v){

						  		$selected = ($k == $buyerid) ? ' selected' : '';

								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';

						  }?>

                  </select>

                </div>

                <div class="span3">

                  <label>Setup/Integration Name</label>

                  <input name="name" value="<?=$name;?>" maxlength="128" class="span12" type="text">

                </div>

                <div class="span3">

                  <label>Tier Price</label>

                  <input name="tier_price" value="<?=$tier_price;?>" maxlength="100" class="span12" type="text">

                </div>

              </div>

              <div class="row-fluid">

                <div class="span6">

                  <label>Post test URL </label>

                  <input name="post_url_test"  value="<?=$post_url_test;?>" class="span12" type="text">

                </div>

                <div class="span6">

                  <label>Post live URL</label>

                  <input name="post_url_live"  value="<?=$post_url_live;?>" class="span12" type="text">

                </div>

              </div>

              <div class="row-fluid">

                <div class="span4">

                  <label>Parameter-1</label>

                  <input name="parameter1"  value="<?=$parameter1;?>" class="span12" type="text">

                </div>

                <div class="span4">

                  <label>Parameter-2</label>

                  <input name="parameter2"  value="<?=$parameter2;?>" class="span12" type="text">

                </div>

                <div class="span4">

                  <label>Parameter-3</label>

                  <input name="parameter3" value="<?=$parameter3;?>" class="span12" type="text">

                </div>

              </div>

              <div class="row-fluid">

                <div class="span3">

                  <label>Mode</label>

                  <select class="span12" name="mode" >

                    <option value="">Select</option>

                    <? foreach($GLOBALS['MODE'] as $k => $v){

						  		$selected = ($k == $mode) ? ' selected' : '';

								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';

						  }?>

                  </select>

                </div>

                <div class="span3">

                  <label>Status</label>

                  <select class="span12" name="status" >

                    <option value="">Select</option>

                    <? foreach($GLOBALS['STATUS'] as $k => $v){

						  		$selected = ($k == $status) ? ' selected' : '';

								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';

						  }?>

                  </select>

                </div>

                <div class="span3">

                  <label>Post Timeout</label>

                  <input name="timeout" value="<?=$timeout;?>" class="span12" type="text">

                </div>

              </div>

              <div class="row-fluid">

                <div class="span12">

                  <label>Notes</label>

                  <textarea name="notes" class="span12" cols="50" rows="4"><?=$notes;?></textarea>

                </div>

              </div>

            </div>

          </div>
		
          <div class="form-actions">

            <button class="btn btn-info" type="submit"> <i class="icon-ok bigger-110"></i> Submit </button>

                 

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

		$("#buyersetup_add").validate({

			rules: {

				leadtype: {required: true},

				buyerid: {required: true},

				name: {required: true,	minlength: 3},

				post_url_test: {required: true,	minlength: 2},

				post_url_live: {required: true,	minlength: 2},

				//confirmPassword: {	equalTo: "#password"},

				//email: {required: true,	email: true},

				//phone: {required: true,	digits: true,	minlength: 10},

				//company: {required: true,	minlength: 3},

				mode: {required: true},

				status: {required: true}

			}

		});

	})

</script>

</body>

</html>

