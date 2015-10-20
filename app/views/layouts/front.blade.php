<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appan Dukan</title>
    <!-- Bootstrp CSS-->
    <link rel="stylesheet" href="<?php echo url('assets/front/')?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo url('assets/front/')?>/css/bootstrap-theme.css">
    <!-- Custom CSS-->
    <link rel="stylesheet" href="<?php echo url('assets/front/')?>/css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Jquer js-->
    <script src="<?php echo url('assets/front/')?>/js/jquery-1.11.3.js"></script>
	<script src="<?php echo url('');?>/assets/js/angular.min.js"></script>
    <script src="<?php echo url('assets/front/')?>/js/bootstrap.min.js"></script>
    <script src="<?php echo url('assets/front/')?>/js/jPushMenu.js"></script>
    <script src="<?php echo url('assets/front/')?>/js/v2p.js"></script>
    <script src="<?php echo url('assets/front/')?>/js/smoothscroll.js"></script>
    <script type="text/javascript">
      //<![CDATA[
	 $(document).ready(function(){

	$('a[href^="#"]').on('click',function (e) {

	    e.preventDefault();



	    var target = this.hash;

	    var $target = $(target);



	    $('html, body').stop().animate({

	        'scrollTop': $target.offset().top

	    }, 900, 'swing', function () {

	        window.location.hash = target;

	    });

	});

	

	

	

	

});
      $(document).ready(function(){
        $('.toggle-menu').jPushMenu({closeOnClickLink: false});
        $('.dropdown-toggle').dropdown();
      });
      //]]>
    </script>

    <!-- Jquer js-->
    </head>
    <body>
<!-- Top Menu Bar Fixed -->
<header>
      <div class="container-fluid">
      <div class="row">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container-fluid">
        <div class="col-md-4">
              <div class="navbar-header">
            <button type="button" style="border:0px;" class="navbar-toggle toggle-menu menu-left jPushMenuBtn" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
            <img src="<?php echo url('assets/front/')?>/images/menu_icon.PNG" class="img-circle img-responsive centered" />
            </button>
            <div class="col-md-12 "> <a class="navbar-brand" href="#"><img src="<?php echo url('assets/front/')?>/images/logo_bg.png" class="img-responsive logo" /></a> </div>
          </div>
            </div>
        <div class="col-md-8">
              <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="bs-example-navbar-collapse-1" style="height: 599px;">
            <ul class="nav navbar-nav navbar-right">
                  <li><a href="#home_top">Home</a></li>
                  <li><a href="#about_us">About Us</a></li>
                  <li><a href="#services">Our Service</a></li>
                  <li><a href="#how_it_works">Career</a></li>
                  <li><a href="#how_it_works_bottom">Contact Us</a></li>
                  </li>
                </ul>
          </div>
            </div>
      </div>
        </nav>
  </div>
    </header>
<!-- Top Menu Bar Fixed  Ends--> 
@yield('content')
<footer>
      <div class="container">
    <div class="col-md-12">
          <div class="col-sm-5">
        <div class="row">
              <div class="col-md-12">
            <h2 style="color:#ffed00;">Quick Links</h2>
          </div>
              <div class="col-md-6">
            <ul>
                  <li>Home</li>
                  <li>About Us</li>
                  <li>Career</li>
                  <li>Services</li>
                  <li>Contact us</li>
                </ul>
          </div>
              <div class="col-md-6">
            <ul>
                  <li>Home</li>
                  <li>About Us</li>
                  <li>Career</li>
                  <li>Services</li>
                  <li>Contact us</li>
                </ul>
          </div>
            </div>
      </div>
          <div class="col-sm-3">
        <div class="row">
              <div class="col-md-12">
            <h2 style="color:#82ff00;">Contact Us</h2>
          </div>
              <div class="col-md-12">
            <ul style="list-style:none !important;">
                  <li style="list-style:none !important;"><strong>Mumbai Office</strong></li>
                  <li style="list-style:none !important;">34 Main Street</li>
                  <li style="list-style:none !important;">Hamilton ON</li>
                  <li style="list-style:none !important;">L8S 342 Canada</li>
                </ul>
          </div>
            </div>
      </div>
          <div class="col-sm-4">
        <div class="row">
              <div class="col-md-12">
            <h2 style="color:#10beff;">Follow Us</h2>
          </div>
              <div class="col-md-12">
            <div class="socail_link"> <a href="#"><img src="<?php echo url('assets/front/')?>/images/s1.jpg" alt="social-icons"></a> <a href="#"><img src="<?php echo url('assets/front/')?>/images/s2.jpg" alt="social-icons"></a> <a href="#"><img src="<?php echo url('assets/front/')?>/images/s3.jpg" alt="social-icons"></a> <a href="#"><img src="<?php echo url('assets/front/')?>/images/s4.jpg" alt="social-icons"></a> <a href="#"><img src="<?php echo url('assets/front/')?>/images/s5.jpg" alt="social-icons"></a> </div>
          </div>
            </div>
      </div>
        </div>
  </div>
    </footer>
<div class="container-fluid footer_bottom">
      <p style="font-family:Verdana, Geneva, sans-serif;">Copyright © 2015 All rights reserved </p>
    </div>
<!-- Container footer -->
</body>
</html>
