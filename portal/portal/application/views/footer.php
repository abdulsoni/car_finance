<!--basic scripts-->
<!--[if !IE]>-->
<!--<![endif]-->
<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->
<!--[if !IE]>-->
<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url(); ?>assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>
<!--<![endif]-->
<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?php echo base_url(); ?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!--page specific plugin scripts-->
<!--ace scripts-->
<script src="<?php echo base_url(); ?>assets/js/ace-elements.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/ace.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.tablesorter.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.tablesorter.pager.js"></script>
<script src="<?php echo base_url(); ?>assets/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/date-time/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/date-time/daterangepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="https://ajax.microsoft.com/ajax/jquery.validate/1.7/additional-methods.js"></script>
<!--inline scripts related to this page-->
<script type="text/javascript">
	function show_box(id) {
	 $('.widget-box.visible').removeClass('visible');
	 $('#'+id).addClass('visible');
	}
$(function() {
	$(document).on('click', '.icon-trash' , function(){
		return confirm("Are you sure, you want to delete!");
	});
  // Initialize tablesorter
  // ***********************
	if(window.location.search =='')
		var GET = '?';
	else{
		var GET = window.location.search;
		GET = GET.replace("#", "");
	}//alert(GET);
  $("#tbl_grid").tablesorter().tablesorterPager({
      container: $(".pager"),
      ajaxUrl : GET+'&page={page}&size={size}&{filterList:filter}&{sortList:column}',
      ajaxProcessing: function(data){
        if (data && data.hasOwnProperty('rows')) {
          var r, row, c, d = data.rows,
          // total number of rows (required)
          total = data.total_rows,
          // array of header names (optional)
          headers = data.headers,
          // all rows: array of arrays; each internal array has the table cell data for that row
          rows = [],
          // len should match pager set size (c.size)
          len = d.length;
          // this will depend on how the json is set up - see City0.json
          // rows
          for ( r=0; r < len; r++ ) {
            row = []; // new row array
            // cells
            for ( c in d[r] ) {
              if (typeof(c) === "string") {
                row.push(d[r][c]); // add each table cell data to row array
              }
            }
            rows.push(row); // add new row array to rows array
          }
          // in version 2.10, you can optionally return $(rows) a set of table rows within a jQuery object
          return [ total, rows, headers ];
        }
      },
      // output string - default is '{page}/{totalPages}'; possible variables: {page}, {totalPages}, {startRow}, {endRow} and {totalRows}
      output: '{startRow} to {endRow} ({totalRows})',

    });
	$('table th div label input:checkbox').on('click' , function(){
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
	$('#daterange').daterangepicker({format: 'YYYY-MM-DD'}).prev().on(ace.click_event, function(){
		$(this).next().focus();
	});
	$('.fancybox').fancybox({width: '100%'});
	if (window.frameElement) {
		  $(".navbar, .sidebar").remove();
		  $('.main-container > *, .main-content > *').unwrap();
	}
	$(".cancel").click(function(){
		if (window.frameElement) 	parent.$.fancybox.close();
		else history.go(-1);
	})
 	$("select[name='buyerid']").change(function(){
		$.get("<?php echo base_url(); ?>buyer/getbuyersetup/"+$(this).val(),function(data,status){
			$("select[name='buyersetupid'] option").remove();
			$("select[name='buyersetupid']").append('<option value="">Select</option>' + data);
		  });
	})
})
</script>
