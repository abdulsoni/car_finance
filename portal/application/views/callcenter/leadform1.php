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
		  <?php //echo validation_errors(); extract($view_data);
		// print_r($publish);
		 
		  ?>		
            
			<?php /*foreach($GLOBALS['LEADTYPE'] as $key =>$val){*/ ?>
			  <?php
			  	$a = explode(',',$callcent[0]['leadType']);
				$i=0;
				foreach($a as $key)
				{
				//echo $i;
 				$row = (object) $view_data[$key];
			
				?>  	
				
			   
              <div class="span3">
			   <input type="hidden" name="id_<?php echo $key;?>" value="<?php echo $callcent[$i]['id']?>" />
                <div class="widget-box">
                  <div class="widget-header">
                    <h4><?php echo $GLOBALS['LEADTYPE'][$key];?></h4>
                    <span class="widget-toolbar"> <a href="#" data-action="collapse"> <i class="icon-chevron-up"></i> </a> </span> </div>
                  <div class="widget-body">
                    <div class="widget-main">
                      <div class="row-fluid">
                        <label>Status:</label>
                        <select name="status_<?php echo $key;?>" class="span12 required">
                          <option value="">Select</option>
                          <? foreach ($GLOBALS['STATUS'] as $k=> $v)
						  {
							$sel = (isset($callcent[$i]['status']) && $k ==$callcent[$i]['status']) ? ' selected' : '';
							echo '<option value="'.$k.'" '.$sel.'>'.$v.'</option>';
						}?>
                        </select>
                      </div>
                      <div class="row-fluid">
                        <label>Profit Margin %:</label>
                        <input type="text" name="margin_<?php echo $key;?>" class="span12 required digits" placeholder="Profit Margin %" value="<?php echo $callcent[$i]['margin'];?>" />
                      </div>
                      <div class="row-fluid">
                        <label>Day Limit: <span class="orange"><?php if(isset($callcent[$i]['daylimitUsed']) && $callcent[$i]['daylimitUsed']) echo '('.$callcent[$i]['daylimitUsed'].' used)';?></span></label>
                        <input type="text" name="daylimit_<?php echo $key;?>" class="span12 required digits" placeholder="Day Limit" value="<?php echo  $callcent[$i]['daylimit']?>" />
                      </div>
                      <div class="row-fluid">
                        <label>Weekly Limit: <span class="orange"><?php if(isset($callcent[$i]['weeklimitUsed']) && $callcent[$i]['weeklimitUsed']) echo '('.$callcent[$i]['weeklimitUsed'].' used)';?></span></label>
                        <input type="text" name="weeklimit_<?php echo $key;?>" class="span12 required digits" placeholder="Week Limit" value="<?php if(isset($callcent[$i]['weeklimit'])) echo $callcent[$i]['weeklimit'];?>" />
                      </div>
                      <div class="row-fluid">
                        <label>Monthly Limit: <span class="orange"><?php if(isset($callcent[$i]['monthlimitUsed']) && $callcent[$i]['monthlimitUsed']) echo '('.$callcent[$i]['monthlimitUsed'].' used)';?></span></label>
                        <input type="text" name="monthlimit_<?php echo $key;?>" class="span12 required digits" placeholder="Month Limit" value="<?php if(isset($callcent[$i]['monthlimit'])) echo $callcent[$i]['monthlimit'];?>" />
                      </div>
                      <div class="row-fluid">
                        <label>Day Credit: <span class="orange"><?php if(isset($callcent[$i]['daycreditUsed']) && $callcent[$i]['daycreditUsed']) echo '('.$callcent[$i]['daycreditUsed'].' used)';?></span></label>
                        <input type="text" name="daycredit_<?php echo $key;?>" class="span12 required digits" placeholder="Day Credit" value="<?php if(isset($callcent[$i]['daycredit'])) echo $callcent[$i]['daycredit'];?>" />
                      </div>
                      <div class="row-fluid">
                        <label>Weekly Credit: <span class="orange"><?php if(isset($callcent[$i]['weekcreditUsed']) && $callcent[$i]['weekcreditUsed']) echo '('.$callcent[$i]['weekcreditUsed'].' used)';?></span></label>
                        <input type="text" name="weekcredit_<?php echo $key;?>" class="span12 required digits" placeholder="Week Credit" value="<?php if(isset($callcent[$i]['weekcredit'])) echo $callcent[$i]['weekcredit'];?>" />
                      </div>
                      <div class="row-fluid">
                        <label>Monthly Credit: <span class="orange"><?php if(isset($callcent[$i]['monthcreditUsed']) && $callcent[$i]['monthcreditUsed']) echo '('.$callcent[$i]['monthcreditUsed'].' used)';?></span></label>
                        <input type="text" name="monthcredit_<?php echo $key;?>" class="span12 required digits" placeholder="Month Credit" value="<?php if(isset($callcent[$i]['monthcredit'])) echo $callcent[$i]['monthcredit'];?>" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             <?php 
			 	$i++;
			
			 }?> 
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
