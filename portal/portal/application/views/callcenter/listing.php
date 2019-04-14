<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Affiliates - </title>
<?php $this->load->view('head'); ?>
</head>
<body>
<?php $this->load->view('header'); ?>

<div class="main-container container-fluid"> 
  <?php $this->load->view('leftside'); ?>

  <div class="main-content">
    
    <div class="page-content">
      <div class="page-header position-relative">
        <h1> Affiliates <small> <i class="icon-double-angle-right"></i> Listing </small> 
											<a href="<?php echo base_url(); ?>callcenter/form" class="btn btn-small btn-primary pull-right">Add<i class="icon-on-right icon-arrow-right"></i></a></h1>
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
            <table id="sample-table-2" class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th class="center"> <label>
                    <input type="checkbox" />
                    <span class="lbl"></span> </label>
                  </th>
                  <th>ID</th>
                  <th>Company Name</th>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th> <i class="icon-time bigger-110 hidden-phone"></i> Phone </th>
                  <th>Status</th>
                  <th>Reg Date</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
			  <?php foreach($rows as $v){ //print_r($v);?>
                <tr>
                  <td class="center"><label>
                    <input type="checkbox" />
                    <span class="lbl"></span> </label>
                  </td>
                  <td><?php echo $v['id'];?> </td>
                  <td><?php echo $v['company'];?></td>
                  <td><?php echo $v['firstName'].' '.$v['lastName'];?></td>
                  <td><?php echo $v['email'];?></td>
                  <td><?php echo $v['phone'];?></td>
                  <td><?php echo $GLOBALS['STATUS'][$v['status']];?></td> 
                  <td><?php echo $v['cDate'];?></td>
                  <td>
					<a href="<?php echo base_url(); ?>callcenter/leadform/<?php echo $v['id']; ?>" class="tooltip-info blue" data-rel="tooltip" title="Edit lead type"><i class="icon-pencil bigger-130"></i></a>
					<a href="<?php echo base_url(); ?>callcenter/form/<?php echo $v['id']; ?>" class="tooltip-info green" data-rel="tooltip" title="Edit"> <i class="icon-pencil bigger-130"></i> </a>
					<a href="<?php echo base_url(); ?>callcenter/remove/<?php echo $v['id']; ?>" class="tooltip-info red" data-rel="tooltip" title="Delete"> <i class="icon-trash bigger-130"></i> </a>
                    </td>
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
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.bootstrap.js"></script>
<!--inline scripts related to this page-->
<script type="text/javascript">
			$(function() {
				var oTable1 = $('#sample-table-2').dataTable();
				$('.icon-trash').on('click' , function(){
					return confirm("Are you sure, you want to delete!");
				});
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			})
		</script>
</body>
</html>
