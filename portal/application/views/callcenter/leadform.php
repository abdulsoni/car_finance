<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Call Center Add -</title>
<?php $this->load->view('head'); ?>
</head>
<body>
<?php $this->load->view('header'); ?>
<div class="main-container container-fluid">
  <?php $this->load->view('leftside'); ?>
  <div class="main-content">
    <div class="page-content">
      <div class="page-header position-relative">
        <h1> Publisher <small> <i class="icon-double-angle-right"></i> <?php echo $header['title'];?> </small></h1>
      </div>
      <!--/.page-header-->
      <div class="row-fluid"> 
        <div class="span12">
          <!--PAGE CONTENT BEGINS-->
          <!--/row-->
          <!--<form id="publisher_add" action="" method="post">-->
		  <?php echo form_open( 'callcenter/leadadd/'.$vid,array('id' => 'publisher_leadadd')); ?>
		  <?php //echo validation_errors(); extract($view_data);?>
            <div class="row-fluid">
			<?php foreach($GLOBALS['LEADTYPE'] as $key =>$val){ ?>
			  <?php $row = (object) $view_data[$key];
			  
		       	if(in_array($key , $selected_leadtype)){
			
			// echo '<pre>';
			 // print_r($view_data[$key]);
			 // print_r($row);die;
			 
			  
			  ?>
              <div class="span3">
			  <input type="hidden" name="id_<?php echo $key;?>" value="<?php if(isset($row->id)) echo $row->id;?>" />
                <div class="widget-box">
                  <div class="widget-header">
                    <h4><?php echo $val;?></h4>
                    <span class="widget-toolbar"> <a href="#" data-action="collapse"> <i class="icon-chevron-up"></i> </a> </span> </div>
                  <div class="widget-body">
                    <div class="widget-main">
                      <div class="row-fluid">
                        <label>Status:</label>
                        <select name="status_<?php echo $key;?>" class="span12 required">
                          <option value="">Select</option>
                          <? foreach ($GLOBALS['STATUS'] as $k=> $v){
							$sel = (isset($row->status) && $k ==$row->status) ? ' selected' : '';
							echo '<option value="'.$k.'" '.$sel.'>'.$v.'</option>';
						}?>
                        </select>
                      </div>
                      <div class="row-fluid">
                        <label>Profit Margin %:</label>
                        <input type="text" name="margin_<?php echo $key;?>" class="span12 required digits" placeholder="Profit Margin %" value="<?php if(isset($row->margin)) echo $row->margin;?>" />
                      </div>
                       <div class="row-fluid">

                        <label>Duplicate Check On:</label>
                        <select name="duplicate_<?php echo $key;?>" class="span12 required">
     <option value="email"<?php if($row->duplicate=='email'){ echo 'selected';} ?> >Email</option>
     <option value="phone"<?php if($row->duplicate=='phone'){echo 'selected';} ?> >Phone</option>
                        </select>

                      </div>
                        <div class="row-fluid">

                        <label>Day Limit for Duplicate Check: </label>
                        <input type="text" name="daytotal_<?php echo $key;?>" class="span12 required digits" placeholder="Day Limit" value="<?php if(isset($row->daytotal)) echo $row->daytotal;?>" />

                      </div>
                      <div class="row-fluid">
                        <label>Day Limit: <span class="orange"><?php if(isset($row->daylimitUsed) && $row->daylimitUsed) echo '('.$row->daylimitUsed.' used)';?></span></label>
                        <input type="text" name="daylimit_<?php echo $key;?>" class="span12 required digits" placeholder="Day Limit" value="<?php if(isset($row->daylimit)) echo $row->daylimit;?>" />
                      </div>
                      <div class="row-fluid">
                        <label>Weekly Limit: <span class="orange"><?php if(isset($row->weeklimitUsed) && $row->weeklimitUsed) echo '('.$row->weeklimitUsed.' used)';?></span></label>
                        <input type="text" name="weeklimit_<?php echo $key;?>" class="span12 required digits" placeholder="Week Limit" value="<?php if(isset($row->weeklimit)) echo $row->weeklimit;?>" />
                      </div>
                      <div class="row-fluid">
                        <label>Monthly Limit: <span class="orange"><?php if(isset($row->monthlimitUsed) && $row->monthlimitUsed) echo '('.$row->monthlimitUsed.' used)';?></span></label>
                        <input type="text" name="monthlimit_<?php echo $key;?>" class="span12 required digits" placeholder="Month Limit" value="<?php if(isset($row->monthlimit)) echo $row->monthlimit;?>" />
                      </div>
                     <?php /*?> <div class="row-fluid">
                        <label>Day Credit: <span class="orange"><?php if(isset($row->daycreditUsed) && $row->daycreditUsed) echo '('.$row->daycreditUsed.' used)';?></span></label>
                        <input type="text" name="daycredit_<?php echo $key;?>" class="span12 required digits" placeholder="Day Credit" value="<?php if(isset($row->daycredit)) echo $row->daycredit;?>" />
                      </div>
                      <div class="row-fluid">
                        <label>Weekly Credit: <span class="orange"><?php if(isset($row->weekcreditUsed) && $row->weekcreditUsed) echo '('.$row->weekcreditUsed.' used)';?></span></label>
                        <input type="text" name="weekcredit_<?php echo $key;?>" class="span12 required digits" placeholder="Week Credit" value="<?php if(isset($row->weekcredit)) echo $row->weekcredit;?>" />
                      </div>
                      <div class="row-fluid">
                        <label>Monthly Credit: <span class="orange"><?php if(isset($row->monthcreditUsed) && $row->monthcreditUsed) echo '('.$row->monthcreditUsed.' used)';?></span></label>
                        <input type="text" name="monthcredit_<?php echo $key;?>" class="span12 required digits" placeholder="Month Credit" value="<?php if(isset($row->monthcredit)) echo $row->monthcredit;?>" />
                      </div><?php */?>
                    </div>
                  </div>
                </div>
              </div>
			  <?php } ?>
             <?php }?> 
            </div>
            <div class="form-actions">
              <button class="btn btn-info" type="submit"> <i class="icon-ok bigger-110"></i> Submit </button>
			  &nbsp; &nbsp; &nbsp;<button class="btn" type="button" onClick="history.go(-1);"><i class="icon-undo bigger-110"></i> cancel </button>
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
<script type="text/javascript">
	$(function() {
//		$("#publisher_leadadd").validate();
//		$("select[name='status_1'],select[name='status_2'],select[name='status_3'],select[name='status_4']").change(function(){
//			var div = $(this).parent().parent();
//			if($(this).val() == 2){
//				$(div).find( "input" ).removeClass("required error");
//				$(div).find("label.error").remove();
//			}	
//			else
//				$(div).find( "input" ).addClass("required");	
//		})
	})
</script>
</body>
</html>
