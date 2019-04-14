<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />

<title>Buyer Setup/Integration - </title>

<?php $this->load->view('head'); ?>

</head>

<body>

<?php $this->load->view('header'); ?>



<div class="main-container container-fluid"> 

  <?php $this->load->view('leftside'); ?>



  <div class="main-content">

    

    <div class="page-content">

      <div class="page-header position-relative">

        <h1> Buyer Setup/Integration <small> <i class="icon-double-angle-right"></i> Listing </small> 

											<a href="<?php echo base_url(); ?>buyer/setupform" class="btn btn-small btn-primary pull-right">Add<i class="icon-on-right icon-arrow-right"></i></a></h1>

      </div>

      <!--/.page-header-->

      <div class="row-fluid">

        <div class="span12">

          <!--PAGE CONTENT BEGINS-->

		  <?php if($success = $this->session->flashdata('success')){ ?>

		  <div class="alert alert-success">

			<button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>

			<i class="icon-ok"></i>&nbsp;<?php echo $success;?>

		</div>

		<?php }?>

		  <?php if($error = $this->session->flashdata('error')){ ?>

		  <div class="alert alert-error">

			<button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>

			<i class="icon-remove"></i>&nbsp;<?php echo $error;?>

		</div>

		<?php }?>

          <!--/row-->

		  <form  action="" method="get"class="form-inline" />

            <div class="row-fluid">

 			  <div class="span3">

              <label>Lead Type:</label>

              <select class="input-small required" name="leadtype">

                <option value="">Select</option>

                <? foreach($GLOBALS['LEADTYPE'] as $k => $v){

						  		$selected = ($k == $leadtype) ? ' selected' : '';

								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';

						  }?>

              </select>

            </div>                          

			  <div class="span3">

              <label>Buyer</label>

              <select class="input-medium required" name="buyerid">

                <option value="">Select</option>

                <? foreach($buyer_arr as $k => $v){

						  		$selected = ($k == $buyerid) ? ' selected' : '';

								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';

						  }?>

              </select>

            </div>

			  <div class="span2">

              <label>Mode</label>

              <select class="input-small required" name="mode">

                <option value="">Select</option>

                <? foreach($GLOBALS['MODE'] as $k => $v){

						  		$selected = ($k == $mode) ? ' selected' : '';

								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';

						  }?>

              </select>

            </div>

			  <div class="span2">

              <label>Status</label>

              <select class="input-small required" name="status">

                <option value="">Select</option>

                <? foreach($GLOBALS['STATUS'] as $k => $v){

						  		$selected = ($k == $status) ? ' selected' : '';

								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';

						  }?>

              </select>

            </div>

              <div class="span2">

                <button type="submit" name="search" value="1" class="btn btn-purple btn-small"> Search <i class="icon-search icon-on-right bigger-110"></i> </button>

              </div>

			</div>

            </form>

          <div class="row-fluid">

            <table id="tbl_grid" class="tablesorter table table-striped table-bordered table-hover">

              <thead>

                <tr>

                  <th class="center sorter-false"> <label>

                    <input type="checkbox" />

                    <span class="lbl"></span> </label>

                  </th>

                  <th>ID</th>

                  <th>Lead Type</th>

                  <th>Buyer</th>

                  <th>Setup/Integration Name</th>

                  <th>Fixed Price</th>

                  <th>Ping/Post Live URL</th>

                  <th>Parameter-1</th>

                  <th>Parameter-2</th>

                  <th>Mode</th>

                  <th>Status</th>

                  <th>Reg Date</th>

                  <th class="sorter-false"></th>

                </tr>

              </thead>

              <tbody>

			 

                

              </tbody>

			  <tfoot>

                <tr>

                  <td class="pager" colspan="100">

                    

					<img src="<?php echo base_url(); ?>assets/images/icons/first.png" class="first"/>

					<img src="<?php echo base_url(); ?>assets/images/icons/prev.png" class="prev"/>

					 <span class="pagedisplay"></span>

                    <img src="<?php echo base_url(); ?>assets/images/icons/next.png" class="next"/>

					<img src="<?php echo base_url(); ?>assets/images/icons/last.png" class="last"/></label>

                   <select class="pagesize form-control">

                      <?php foreach($GLOBALS['RECORD_PER_PAGE'] as $k=>$v){

					  		$sel = ($v ==$_GET['size']) ? ' selected' : '';

							echo '<option value="'.$v.'" '.$sel.'>'.$v.'</option>';

						} ?>

                    </select>

					

                  </td>

                </tr>

            </table>

          </div>

          

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

</body>

</html>

