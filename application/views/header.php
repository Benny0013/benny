<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Chloe Hampers <?php echo $this->uri->segment(1);?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/favicon.ico">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo base_url();?>index.php/Home/">Chloe Hampers</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?php echo base_url();?>index.php/Home/" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog</a>
               <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="<?php echo base_url();?>index.php/Catalog/">Standart</a>
                <a class="dropdown-item" href="<?php echo base_url();?>index.php/MyCustom/">Custom</a>
              </div>
              </li>
	          <li class="nav-item"><a href="<?php echo base_url();?>index.php/Help/" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="<?php echo base_url();?>index.php/Contact/" class="nav-link">Contact</a></li>
            <?php if($this->session->userdata('userss')==""){?>
	          <li class="nav-item"><a href="<?php echo base_url('index.php/Login');?>" class="nav-link"><b>Login<b></a></li>
            <?php }else{ ?>
            <li class="nav-item cta cta-colored"><a href="<?php echo base_url();?>index.php/Cart/" class="nav-link"><span class="icon-shopping_cart"></span></a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome, <?php echo $this->session->userdata('userss')?></a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="<?php echo base_url();?>index.php/User/order">Order</a>
                <a class="dropdown-item" href="<?php echo base_url();?>index.php/User/changepass">Change Password</a>
                <a class="dropdown-item" href="<?php echo base_url('index.php/Login/out');?>">Log Out</a>
              </div>
            </li>
            <?php } ?>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
		