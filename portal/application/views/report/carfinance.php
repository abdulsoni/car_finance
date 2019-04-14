<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />

<title>Car Finance Report - </title>

<?php $this->load->view('head'); ?>

</head>

<body>

<?php $this->load->view('header'); ?>



<div class="main-container container-fluid"> 

  <?php $this->load->view('leftside'); ?>



  <div class="main-content">

    

    <div class="page-content">

      <div class="page-header position-relative">

        <h1> Car Finance <small> <i class="icon-double-angle-right"></i> Report </small></h1>

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

                <label for="id-date-range-picker-1">Date Range: </label>

                <div class="input-append"> <span class="add-on"> <i class="icon-calendar"></i> </span>

                  <input class="" type="text" name="daterange" id="daterange" value="<?php echo $daterange;?>" />

                </div>

              </div>

              

			  <div class="span2">
              
              <?php if($this->session->userdata('userType')=='superadmin'){?>

              <label>VID</label><br>

              <select class="input-small required" name="vid" id="vid">

                <option value="">Select</option>

                <? foreach($vid_arr as $k => $v){

						  		$selected = ($k == $vid) ? ' selected' : '';

								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';

						  }?>

              </select>
			
            </div>
			
			<div class="span1"><h3 class="blue">OR</h3></div>
			
			  <div class="span3">
              

              <label>Buyer</label><br>

              <select class="input-medium required" name="buyerid" id="buyerid">

                <option value="">Select</option>

                <option value="all" <?php if($buyerid=='all') echo 'selected';?>>All</option>

                <? foreach($buyerid_arr as $k => $v){

						  		$selected = ($k == $buyerid) ? ' selected' : '';

								echo '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';

						  }?>

              </select>
			<?php } ?>
            </div>

			  

              <div class="span3"><br>

                <button type="submit" name="search" value="1" class="btn btn-purple btn-small"> Search <i class="icon-search icon-on-right bigger-110"></i> </button>

				</div>

				

			</div>

            </form>

          <div class="row-fluid">

<h3 class="header smaller bold green">Lead Report</h3>

           <table id="tbl_grid1" class="tablesorter table table-striped table-bordered table-hover">

              <thead>

                <tr>

                  <th><?php echo (!empty($vid) || !empty($buyerid)) ? 'Date':'Vid/Buyerid';?></th>

                  <?php if(!empty($buyerid)) echo '<th>Buyer Tier</th>';?>

                  <th>Total leads</th>

                  <th>Accepted leads</th>

                  <th>Redirected leads</th>

                  <th>Rejected leads</th>

                  <th>Pending leads</th>

                </tr>

              </thead>

              <tbody>

			  <?php foreach($rows as $v){ //print_r($v);?>

                <tr>

                  <td><?php echo (!empty($vid) || !empty($buyerid))? $v['cDate']:$v['company'];?></td>

                  <?php if(!empty($buyerid)) echo '<td>'.$buyersetupid_arr[$v['buyersetupid']].'</td>';?>

                  <td><?php echo $v['total'];?></td>

                  <td><?php echo $v['accepted'];?></td>

                  <td><?php echo $v['redirected'];?></td>

                  <td><?php echo $v['rejected'];?></td>                  

                  <td><?php echo (empty($v['pending']))? 0 : $v['pending'];?></td>                  

                </tr>

                <?php }?>

                

              </tbody>

                

            </table>

<h3 class="header smaller bold green">Revenue Report</h3>

           <table id="tbl_grid1" class="tablesorter table table-striped table-bordered table-hover">

              <thead>

                <tr>

                  <th><?php echo (!empty($vid) || !empty($buyerid)) ? 'Date':'Vid/Buyerid';?></th>

                  <?php if(empty($buyerid)) echo '<th>Publisher Price </th>';?>

                 <?php if($this->session->userdata('userType')=='superadmin'){?>
                  <th>Buyer Price (-Return)</th>

                  <th>Profit</th>
					<?php } ?>
                </tr>

              </thead>

              <tbody>

			  <?php foreach($rows_revenue as $v){ //print_r($v);?>

                <tr>

                  <td><?php echo (!empty($vid) || !empty($buyerid))? $v['cDate']:$v['company'];?></td>

                  <?php if(empty($buyerid)){?>

                  <td><?php echo empty($v['purchased']) ? '$0': '$'.$v['purchased'];?></td>

                  <?php }?>
                  <?php if($this->session->userdata('userType')=='superadmin'){?>

                  <td><?php echo empty($v['sold']) ? '$0': '$'.$v['sold'];?></td>

                  <td><?php echo '$'.$v['profit'];?></td>
                  <?php } ?>

                </tr>

                <?php }?>

                

              </tbody>

                

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

