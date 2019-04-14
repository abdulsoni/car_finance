<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />

<title>Buyer/Contract - </title>

<?php $this->load->view('head'); ?>

</head>

<body>

<?php $this->load->view('header'); ?>



<div class="main-container container-fluid"> 

  <?php $this->load->view('leftside'); ?>



  <div class="main-content">

    

    <div class="page-content">

      <div class="page-header position-relative">

        <h1> Buyer/Contract <small> <i class="icon-double-angle-right"></i> Listing </small> 

											<a href="<?php echo base_url(); ?>buyer/form" class="btn btn-small btn-primary pull-right">Add<i class="icon-on-right icon-arrow-right"></i></a></h1>

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

          <div class="row-fluid">

            <table id="tbl_grid" class="tablesorter table table-striped table-bordered table-hover">

              <thead>

                <tr>

                  <th class="center sorter-false"> <label>

                    <input type="checkbox" />

                    <span class="lbl"></span> </label>

                  </th>

                  <th>ID</th>

                  <th>Company</th>

                  <th>Name</th>

                  <th>Email</th>

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

