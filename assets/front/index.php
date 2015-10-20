<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appan Dukan</title>
    <!-- Bootstrp CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <!-- Custom CSS-->
    <link rel="stylesheet" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Jquer js-->
    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jPushMenu.js"></script>
    <script src="js/v2p.js"></script>
    <script src="js/smoothscroll.js"></script>
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
            <img src="images/menu_icon.PNG" class="img-circle img-responsive centered" />
            </button>
            <div class="col-md-12 "> <a class="navbar-brand" href="#"><img src="images/logo_bg.png" class="img-responsive logo" /></a> </div>
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
<!-- Container top home strats -->
<div class="container-fluid" id="home_top">
      <div class="home_top row visible-lg">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
          <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
          <div class="carousel-inner">
        <div class="item active left"> <img style="width:100%;" src="images/home_top_slider.jpg" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide"> </div>
        <div class="item next left"> <img style="width:100%;" src="images/home_top_slider.jpg" data-src="holder.js/900x500/auto/#666:#444/text:Second slide" alt="Second slide"> </div>
        <div class="item"> <img style="width:100%;" src="images/home_top_slider.jpg" data-src="holder.js/900x500/auto/#555:#333/text:Third slide" alt="Third slide"> </div>
      </div>
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
    <div class="mainPitch" style="position:absolute; top:50px;width:100%;">
          <div class="container-fluid">
        <div class="row">
              <div class="col-xs-12" style="text-align:center;">
            <div class="container">
                  <div class="col-xs-7">
                <div class="home_top_space"> </div>
              </div>
                  <div class="col-xs-5">
                <div class="home_top_space">
                      <div class="home_login">
                    <div class="col-md-12 login_head"> </div>
                    <div class="col-md-12 login_body">
                          <form >
                <h3>Login Now</h3>
                <p>Enter Your User Name and Password</p>
                <div class="form-group topinput">
                      <label class="sr-only" for="exampleInputAmount">User Name</label>
                      <div class="input-group">
                    <div class="input-group-addon">Username</div>
                    <input type="text" class="form-control simplebox" id="exampleInputAmount" placeholder="Enter Your User Name">
                  </div>
                    </div>
                <div class="form-group topinput">
                      <label class="sr-only" for="exampleInputAmount">Password</label>
                      <div class="input-group">
                    <div class="input-group-addon">Password&nbsp;</div>
                    <input type="text" class="form-control simplebox" id="exampleInputAmount" placeholder="Enter Your Password">
                  </div>
                    </div>
                <div class="form-group">
                      <div class="col-md-6">
                    <p style="color:#fff; padding-top:5px;">Forgot Password</p>
                  </div>
                      <div class="col-md-6">
                    <button type="submit" class="btn btn-danger">Login</button>
                  </div>
                    </div>
              </form>
                        </div>
                    <div class="col-md-12 login_footer">
                          <p style="color:#fff;">Don’t have an account yet? Sign up!</p>
                        </div>
                  </div>
                    </div>
              </div>
                </div>
          </div>
            </div>
      </div>
        </div>
  </div>
      <div class="home_top hidden-lg">
    <div class="container">
          <div class="col-md-7">
        <div class="home_top_space"> </div>
      </div>
          <div class="col-md-5">
        <div class="home_top_space">
              <div class="home_login">
            <div class="col-md-12 login_head"> </div>
            <div class="col-md-12 login_body">
                  <form >
                <h3>Login Now</h3>
                <p>Enter Your User Name and Password</p>
                <div class="form-group topinput">
                      <label class="sr-only" for="exampleInputAmount">User Name</label>
                      <div class="input-group">
                    <div class="input-group-addon">Username</div>
                    <input type="text" class="form-control simplebox" id="exampleInputAmount" placeholder="Enter Your User Name">
                  </div>
                    </div>
                <div class="form-group topinput">
                      <label class="sr-only" for="exampleInputAmount">Password</label>
                      <div class="input-group">
                    <div class="input-group-addon">Password&nbsp;</div>
                    <input type="text" class="form-control simplebox" id="exampleInputAmount" placeholder="Enter Your Password">
                  </div>
                    </div>
                <div class="form-group">
                      <div class="col-md-6">
                    <p style="color:#fff; padding-top:5px;">Forgot Password</p>
                  </div>
                      <div class="col-md-6">
                    <button type="submit" class="btn btn-danger">Login</button>
                  </div>
                    </div>
              </form>
                </div>
            <div class="col-md-12 login_footer">
                  <p style="color:#fff;">Don’t have an account yet? Sign up!</p>
                </div>
          </div>
            </div>
      </div>
        </div>
  </div>
      <div class="row hidden-xs">
    <div class="container-fluid home_top_bottom " id="home_top_bottom">
          <div class="container">
        <div class="col-sm-3"><img src="images/h1.png" /> Download Mobile App</div>
        <div class="col-sm-3"><img src="images/h2.png" /> Download Windows App</div>
        <div class="col-sm-3"><img src="images/h3.png" /> info@appandukan.com</div>
        <div class="col-sm-3"><img src="images/h4.png" /> 9721384466</div>
      </div>
        </div>
  </div>
    </div>
<div id="push"></div>
<!-- Container top home Ends --> 
<!-- Container top About us strats -->
<div class="container-fluid about_us" id="about_us">
      <div class="container">
    <div class="col-md-12">
          <div class="content">
        <h3>WELCOME TO <br/>
              <span>APPANDUKAN</span> MARKETING & SERVICES PVT LTD.</h3>
        <p>Appandukan Marketing & Services Pvt Ltd. provide Mobile Recharge, DTH & Datacard Recharge, Money Transfer, Reliance Two Wheeler Insurance, Pan Card, Pran Card.</p>
        <p class="readmore">View More...</p>
      </div>
        </div>
    <div class="col-md-12">
          <div class="arrow floating"> <a href="#services"> <img src="images/arrow.png" class="img-responsive centered" id="overview"> </a> </div>
        </div>
  </div>
    </div>
<!-- Container top About us Ends --> 
<!-- Container top Service strats -->
<div class="container-fluid services" id="services">
      <div class="container">
    <div class="col-md-12">
          <div class="content">
        <h3>Our <span>Services</span></h3>
      </div>
          <div class="service_content">
        <div class="col-sm-3"> <img src="images/s1.png" class="img-circle img-responsive centered" />
              <p>Pan card</p>
            </div>
        <div class="col-sm-3"> <img src="images/s2.png" class="img-circle img-responsive centered" />
              <p>Pran card</p>
            </div>
        <div class="col-sm-3"> <img src="images/s3.png" class="img-circle img-responsive centered" />
              <p>Money Transfer</p>
            </div>
        <div class="col-sm-3"> <img src="images/s4.png" class="img-circle img-responsive centered" />
              <p>Travel Booking</p>
            </div>
        <div class="col-sm-3"> <img src="images/s5.png" class="img-circle img-responsive centered" />
              <p>Multi Recharge</p>
            </div>
        <div class="col-sm-3"> <img src="images/s6.png" class="img-circle img-responsive centered" />
              <p>DTH Recharge</p>
            </div>
        <div class="col-sm-3"> <img src="images/s7.png" class="img-circle img-responsive centered" />
              <p>Insurance</p>
            </div>
        <div class="col-sm-3"> <img src="images/s8.png" class="img-circle img-responsive centered" />
              <p>General Insurance</p>
            </div>
      </div>
        </div>
		<div class="container">
    <div class="col-md-12">
          <div class="arrow"> <a href="#how_it_works"> <img src="images/arrow.png" class="img-responsive centered" id="overview"> </a> </div>
        </div>
		 </div>
  </div>
    </div>
<!-- Container top Service Ends --> 
<!-- Container top How it Works strats -->
<div class="container-fluid how_it_works" id="how_it_works">
      <div class="container">
    <div class="col-md-12">
          <div class="content">
        <h3>Why Use <span>Appan Dukan</span></h3>
      </div>
        </div>
    <div class="col-md-12">
          <div class="col-sm-6">
        <ul >
              <li>Instant Money Transfer</li>
              <li>Recharge and Pay bills</li>
              <li>Wide acceptance</li>
              <li>Quick and Reliable</li>
              <li>Instant Money Transfer</li>
              <li>Recharge and Pay bills</li>
            </ul>
        <div class="col-md-12"> <a href="#" class="view_more" style="margin-top:30px;">View Details</a> </div>
      </div>
          <div class="col-sm-6"> <img src="images/bg3_r.png" class="img-rounded img-responsive centered" /> </div>
        </div>
    <div class="col-md-12">
          <div class="arrow floating"> <a href="#overview"> <img src="images/arrow.png" class="img-responsive centered" id="overview"> </a> </div>
        </div>
  </div>
    </div>
<!-- Container top How it Works Ends --> 
<!-- Container top  strats -->
<div class="container-fluid how_it_works_bottom" id="how_it_works_bottom">
      <div class="container">
    <div class="col-md-12">
          <div class="content">
        <h1>How Appan Dukan Works ?</h1>
        <a href="#">View Details</a> </div>
        </div>
  </div>
    </div>
<!-- Container top How it Works Ends --> 
<!-- Container footer -->
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
            <div class="socail_link"> <a href="#"><img src="images/s1.jpg" alt="social-icons"></a> <a href="#"><img src="images/s2.jpg" alt="social-icons"></a> <a href="#"><img src="images/s3.jpg" alt="social-icons"></a> <a href="#"><img src="images/s4.jpg" alt="social-icons"></a> <a href="#"><img src="images/s5.jpg" alt="social-icons"></a> </div>
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
