 <a class="menu-toggler" id="menu-toggler" href="#"> <span class="menu-text"></span> </a>
<div class="sidebar" id="sidebar">  
  <!--#sidebar-shortcuts-->
  <ul class="nav nav-list"> 
  
    <li  <?php if($this->router->class=='dashboard') echo 'class="active"'?> > <a href="<?php echo base_url(); ?>dashboard"> <i class="icon-dashboard"></i> <span class="menu-text"> Dashboard  </span> </a> </li>
	<?php if($this->session->userdata('userType')=='superadmin'){?>
    <li <?php if($this->router->class=='user') echo 'class="active open"'?>> <a href="<?php echo base_url(); ?>user" class="dropdown-toggle"> <i class="icon-group"></i> <span class="menu-text">User/Staff</span> <b class="arrow icon-angle-down"></b> </a>
      <ul class="submenu">
        <li <?php if($this->router->class=='user') echo 'class="active open"'?> > <a href="<?php echo base_url(); ?>user"> <i class="icon-double-angle-right"></i>Listing</a> </li>
      </ul>
    </li>

    
    <li <?php if($this->router->class=='callcenter') echo 'class="active open"'?>> <a href="<?php echo base_url(); ?>callcenter" class="dropdown-toggle"> <i class="icon-exchange"></i> <span class="menu-text">Affiliates</span> <b class="arrow icon-angle-down"></b> </a>
      <ul class="submenu">
        <li  <?php if($this->router->class=='callcenter') echo 'class="active open"'?> > <a href="<?php echo base_url(); ?>callcenter"> <i class="icon-double-angle-right"></i>Listing</a> </li>
        <li <?php if($this->router->method=='form') echo 'class="active open"' ?>  > <a href="<?php echo base_url(); ?>callcenter/form"> <i class="icon-double-angle-right"></i>Affiliates Add</a> </li>
      </ul>
    </li>
    <?php }?>
    
   <?php  if($this->session->userdata('userType')=='superadmin'){?>

    <li <?php if($this->router->class=='buyer') echo 'class="active open"'?>> <a href="<?php echo base_url(); ?>buyer" class="dropdown-toggle"> <i class="icon-info-sign"></i> <span class="menu-text">Buyer/Contract</span> <b class="arrow icon-angle-down"></b> </a>
      <ul class="submenu">
        <li> <a href="<?php echo base_url(); ?>buyer"> <i class="icon-double-angle-right"></i>Listing</a> </li>
        <li <?php if($this->router->method=='form') echo 'class="active open"' ?>> <a href="<?php echo base_url(); ?>buyer/form"> <i class="icon-double-angle-right"></i>Buyer/Contract Add</a> </li>
        <li <?php if($this->router->method=='setup') echo 'class="active open"' ?> > <a href="<?php echo base_url(); ?>buyer/setup"> <i class="icon-double-angle-right"></i>Setup/integration</a> </li>
        <li <?php if($this->router->method=='setupform') echo 'class="active open"' ?>> <a href="<?php echo base_url(); ?>buyer/setupform"> <i class="icon-double-angle-right"></i>Setup/integration Add</a> </li>
      </ul>
    </li>
   
    
    
    <li <?php if($this->router->class=='pubbuyermap') echo 'class="active"'?>> <a href="<?php echo base_url(); ?>pubbuyermap"> <i class="icon-bar-chart"></i> <span class="menu-text">Pub-Buyer Mapping</span> </a>      
    </li>
     <?php } ?>
    <li <?php if(in_array($this->router->class,array('leadCarfinance')) && $this->router->method !='form') echo 'class="active open"'?>> <a href="<?php echo base_url(); ?>" class="dropdown-toggle"> <i class="icon-credit-card"></i> <span class="menu-text">Lead Types</span> <b class="arrow icon-angle-down"></b> </a>
      <ul class="submenu">		
        <?php 
		   if($this->session->userdata('userType')=='admin' || $this->session->userdata('userType')=='superadmin' || in_array('carfinance',$this->session->userdata('leadType'))) { ?>
		   <li <?php if($this->router->class=='leadCarfinance') echo 'class="active open"'?>> <a href="<?php echo base_url(); ?>leadCarfinance"> <i class="icon-double-angle-right"></i>Car Finance</a> </li>
          <?php } 
      ?>    
	  </ul>
    </li>
    
    <?php if($this->session->userdata('userType')=='superadmin'){?>
    <li <?php if(in_array($this->router->class,array('leadCarfinance')) && $this->router->method =='form') echo 'class="active open"'?>> <a href="<?php echo base_url(); ?>" class="dropdown-toggle"> <i class="icon-edit"></i> <span class="menu-text">Lead Forms</span> <b class="arrow icon-angle-down"></b> </a>
      <ul class="submenu">        
       <li > <a target="_blank" href="https://www.quickcarfinance.co.uk/apply-now"> <i class="icon-double-angle-right"></i>Car Finance</a> </li>
      </ul>
    </li>
    <?php } ?>
    
    <li <?php if(in_array($this->router->class,array('report'))) echo 'class="active open"'?>> <a href="<?php echo base_url(); ?>" class="dropdown-toggle"> <i class="icon-folder-close-alt "></i> <span class="menu-text">Reports</span> <b class="arrow icon-angle-down"></b> </a>
      <ul class="submenu">
    <li <?php if($this->router->method=='carfinance') echo 'class="active open"' ?> >  <a href="<?php echo base_url(); ?>report/carfinance"> <i class="icon-double-angle-right"></i>Car Finance</a> </li>      
      </ul>
    </li>
    
    <?php if($this->session->userdata('userType')=='superadmin'){?>
    <li <?php if(in_array($this->router->class,array('postingspecs'))) echo 'class="active open"'?>> <a href="<?php echo base_url(); ?>" class="dropdown-toggle"> <i class="icon-key"></i> <span class="menu-text">Posting Specs</span> <b class="arrow icon-angle-down"></b> </a>
      <ul class="submenu">
		<li> <a target="_blank" href="<?php echo base_url(); ?>postingspecs/carfinance" > <i class="icon-double-angle-right"></i>Car Finance</a> </li>
      </ul>
    </li>
    <?php } ?>
    
	
  <!--/.nav-list-->
  <div class="sidebar-collapse" id="sidebar-collapse"> <i class="icon-double-angle-left"></i> </div>
</div>