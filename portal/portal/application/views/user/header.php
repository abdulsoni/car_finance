<div class="navbar">
  <div class="navbar-inner">
    <div class="container-fluid"> <a href="#" class="brand"> <small> <i class="icon-leaf"></i> <?php echo $this->config->item('site_name');?> </small> </a>
      <!--/.brand-->
      <?php if($this->session->userdata('name')!=''){?>
      <ul class="nav ace-nav pull-right">
        <li class="light-blue"> <a data-toggle="dropdown" href="#" class="dropdown-toggle"> <img class="nav-user-photo" src="<?php echo base_url(); ?>assets/avatars/user.jpg" alt="Jason's Photo" /> <span class="user-info"> <small>Welcome,</small> <?php echo $this->session->userdata('name');?> </span> <i class="icon-caret-down"></i> </a>
		
          <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
		  	<li> <a href="<?php echo base_url(); ?>user/changepassword"> <i class="icon-off"></i> settings </a> </li>
            <li> <a href="<?php echo base_url(); ?>login/logout"> <i class="icon-off"></i> Logout </a> </li>
          </ul>
        </li>
      </ul>
      <?php }?>
      <!--/.ace-nav-->
    </div>
    <!--/.container-fluid-->
  </div>
  <!--/.navbar-inner-->
</div>
