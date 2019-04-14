<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Lead Car Finance Listing - </title>
<?php $this->load->view('head'); ?>
</head>
<body>
        <table id="sample-table-2" class="table table-striped table-bordered table-hover" width="100%">
          <thead>
            <tr><th scope="col" class="rounded-company">Publisher Detail:</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td valign="top" bgcolor="#ffffca">
			  <b>Lead ID: </b><?php echo $row_v['leadid'];?>&nbsp;&nbsp;
			  <b>Publisher: </b><?php echo ucfirst($row_user[$row_v['vid']]);?>&nbsp;&nbsp;
			  <b>Post Time: </b><?=$row_v['post_time']?> secs&nbsp;&nbsp;
			  <b>Date: </b><?=$row_v['cDate'];?>&nbsp;&nbsp;
			  <b>Post Status: </b><img src="<?php echo base_url(); ?>assets/images/<? if($row_v['post_status']=='1') echo 'tick_green.png'; else echo 'tick_red.png';?>"><br />
			  <b>Post Data: </b><?php echo htmlentities($row_v['post_data']);?><br />
			  <b>Post Response: </b><?php echo htmlentities( $row_v['post_response']);?></td>
            </tr>
          </tbody>
        </table>
        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th scope="col" class="rounded-company">ID</th>
              <th scope="col" class="rounded">Buyer</th>
              <th scope="col" class="rounded">Price</th>
              <th scope="col" class="rounded">Post Detail</th>
              <th scope="col" class="rounded">Post Date</th>
            </tr>
          </thead>
          <tbody>
<? foreach($rows as $v){?>
            <tr>
              <td valign="top"><?=$v['id']?></td>
              <td valign="top"><?=$row_buyersetup[$v['buyersetupid']];?></td>
              <td valign="top"><?=$v['post_price']?></td>
              <td valign="top"><b>Post Url: </b><?=$v['post_url']?><br />
			  <b>Post Data: </b><?php echo htmlentities($v['post_data']);?><br />
			  <b>Post Response: </b><?php echo htmlentities( $v['post_response']);?><br />
			  <b>Post Status: </b><?=($v['post_status']=='1') ? 'Accepted' : 'Rejected';?><br />
			  <b>Post Time: </b><?=$v['post_time']?> secs</td>
              <td valign="top"><?=$v['cDate']?></td>
            </tr>
		  <? }?>
          </tbody>
        </table>


</body>
</html>
