<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />

<title>Publisher Buyer Mapping Form -</title>

<?php $this->load->view('head'); ?>

</head>

<body>

<?php $this->load->view('header'); ?>

<div class="main-container container-fluid">

  <?php $this->load->view('leftside'); ?>

  <div class="main-content">

    <div class="page-content">

      <div class="page-header position-relative">

        <h1> Publisher Buyer Mapping <small> <i class="icon-double-angle-right"></i> <?php echo $header['title'];?> </small></h1>

      </div>

      <!--/.page-header-->

      <div class="row-fluid">

        <!--PAGE CONTENT BEGINS-->

        <!--/row-->

        <!--<form id="buyer_add" action="" method="post">-->

        <?php extract($view_data);?>

        <?php $action = (isset($id) && !empty($id)) ? 'pubbuyermap/add/'.$id : 'pubbuyermap/add/';?>

        <?php echo form_open( $action,array('id' => 'pubbuyermap_add')); ?>

        <?php //echo validation_errors(); extract($view_data);?>

        <input type="hidden" name="id" value="<?php if(isset($id)) echo $id;?>" />

          <div class="widget-header">

            <h4>Information</h4>

          </div>

          <div class="widget-body clearfix">

            <div class="widget-main">

              <div class="row-fluid">

                <div class="span6">

                  <label>Lead Type</label>

                  <select class="span12" name="leadtype"> 

                    <option value="">Select</option>

                    <? foreach($GLOBALS['LEADTYPE'] as $k => $v){

						  		$selected = ($k == $leadtype) ? ' selected' : '';

								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';

						  }?>

                  </select>

                </div>

                <div class="span6">

                  <label>VID</label>

                  <select class="span12" name="vid" >

                    <option value="">Select</option>

                    <? foreach($vid_arr as $k => $v){

						  		$selected = ($k == $vid) ? ' selected' : '';

								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';

						  }?>

                  </select>

                </div>

              </div>

              <div class="row-fluid">

                <div class="span6">

                  <label>Buyer</label>

                  <select class="span12" name="buyerid">

                    <option value="">Select</option>

                    <? foreach($buyerid_arr as $k => $v){

						  		$selected = ($k == $buyerid) ? ' selected' : '';

								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';

						  }?>

                  </select>

                </div>

                <div class="span6">

                  <label>Buyer Setup/Tier</label>

                  <select class="span12" name="buyersetupid" >

                    <option value="">Select</option>

                    <? foreach($buyersetupid_arr as $k => $v){

						  		$selected = ($k == $buyersetupid) ? ' selected' : '';

								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';

						  }?>

                  </select>

                </div>

              </div>

              <div class="row-fluid">

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

		$("#pubbuyermap_add").validate({

			rules: {

				leadtype: {required: true},

				vid: {required: true},

				buyerid: {required: true},

				buyersetupid: {required: true},

				status: {required: true}

			}

		});

	})

</script>

</body>

</html>

