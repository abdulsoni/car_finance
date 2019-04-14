<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />

<title>Lead Car Finance Listing - </title>

<?php $this->load->view('head'); ?>
<style>
.m10 { margin-bottom:10px; }
</style>

</head>

<body>

<?php $this->load->view('header'); ?>



<div class="main-container container-fluid"> 

  <?php $this->load->view('leftside'); ?>



  <div class="main-content">

    

    <div class="page-content">

      <div class="page-header position-relative">

        <h1> Lead Car Finance <small> <i class="icon-double-angle-right"></i> Listing </small></h1>

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
			<div class="row-fluid m10">
				<div class="span3">
					<label for="id-date-range-picker-1">Date Range: </label>
					<div class="input-append"> <span class="add-on"> <i class="icon-calendar"></i> </span>
						<input class="" type="text" name="daterange" id="daterange" value="<?php echo $daterange;?>" />
					</div>
				</div>
				<div class="span3">
					<label>ID/Email/Phone/Name/Zip/GCLID: </label> 
					<input class="" type="text" name="keyword" id="keyword" value="<?php echo $keyword;?>" />
				</div>
				<div class="span2">
				<?php if($this->session->userdata('userType')=='superadmin'){?>
					<label>VID</label><br>
					<select class="input-medium required" name="vid" id="vid">
						<option value="">Select</option>
						<?php foreach($vid_arr as $k => $v){
							$selected = ($k == $vid) ? ' selected' : '';
							echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						}?>
					</select>
				<?php } ?>
				</div>
				<div class="span2">
				<?php if($this->session->userdata('userType')=='superadmin'){?>
					<label>Buyer</label>
					<select class="input-medium required" name="buyerid" id="buyerid">
						<option value="">Select</option>
						<?php foreach($buyerid_arr as $k => $v){
							$selected = ($k == $buyerid) ? ' selected' : '';
							echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						}?>
					</select>
				<?php } ?>
				</div>
				<div class="span2">
					<label>Lead Status</label>
					<select class="input-medium required" name="leadStatus" id="leadStatus">
						<option value="">Select</option>
						<?php foreach($GLOBALS['LEAD_STATUS'] as $k => $v){
							$selected = ($k == $leadStatus) ? ' selected' : '';
							echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
						}?>
					</select>
				</div>
			</div>
					
			<div class="row-fluid m10">
				<div class="span1" style="margin-right: 25px;">
					<label>UTM Medium: </label> 
					<input class="input-small" type="text" name="utmMedium" id="utmMedium" value="<?php echo $utmMedium;?>" />
				</div>
				<div class="span1" style="margin-right: 25px;">
					<label>UTM Source: </label> 
					<input class="input-small" type="text" name="utmSource" id="utmSource" value="<?php echo $utmSource;?>" />
				</div>
				<div class="span1" style="margin-right: 25px;">
					<label>UTM Campaign: </label> 
					<input class="input-small" type="text" name="utmCampaign" id="utmCampaign" value="<?php echo $utmCampaign;?>" />
				</div>
				<div class="span1" style="margin-right: 25px;">
					<label>UTM Content: </label> 
					<input class="input-small" type="text" name="utmContent" id="utmContent" value="<?php echo $utmContent;?>" />
				</div>
				<div class="span1" style="margin-right: 25px;">
					<label>UTM Term: </label> 
					<input class="input-small" type="text" name="utmTerm" id="utmTerm" value="<?php echo $utmTerm;?>" />
				</div>
				<div class="span1" style="margin-right: 25px;">
					<label>UTM Type: </label> 
					<input class="input-small" type="text" name="utmType" id="utmType" value="<?php echo $utmType;?>" />
				</div>
				<div class="span2"><br/><br/>
					<button type="submit" name="search" value="1" class="btn btn-purple"> Search <i class="icon-search icon-on-right bigger-110"></i> </button>
				</div>
				<div class="span2">
					<br/><br/>
					<button type="submit" name="download" value="1" class="btn btn-success"> Download <i class="icon-arrow-right icon-on-right bigger-110"></i>
				</button>
				</div>
			</div>


          <div class="row-fluid">

           <table id="tbl_grid" class="tablesorter table table-striped table-bordered table-hover">

              <thead>

                <tr>

                  <th class="center sorter-false"> <label>

                    <input type="checkbox" name="fileselect[]" />

                    <span class="lbl"></span> </label>

                  </th>

                  <th>ID</th>
<?php	if($this->session->userdata('userType')=='superadmin'){ ?>
                  <th>Vid</th>
<?php } ?>
                  <th>Subid</th>
<?php	if($this->session->userdata('userType')=='superadmin'){ ?>
                  <th>Buyer</th>

                  <th>BuyerTier</th>

                  <th>Buyer Price</th>
<?php } ?>
                  <th>Tier</th>

                  <th>Name</th>

                  <th>Email</th>

                  <th>Status</th>

                  <th>Redirected?</th>

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

          
            </form>

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

<!--<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.bootstrap.js"></script>

inline scripts related to this page-->

<script type="text/javascript">

$(function() {

	//var oTable1 = $('#sample-table-2').dataTable();

	//alert(window.location.href);

})

</script>

</body>

</html>

