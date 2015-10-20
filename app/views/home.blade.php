@extends('layouts.front')
@section('content') 
<div class="container-fluid" id="home_top" ng-app="myApp">
      <div class="home_top row visible-lg">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
          <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
          <div class="carousel-inner">
        <div class="item active left"> <img style="width:100%;" src="<?php echo url('assets/front/')?>/images/home_top_slider.jpg" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide"> </div>
        <div class="item next left"> <img style="width:100%;" src="<?php echo url('assets/front/')?>/images/home_top_slider.jpg" data-src="holder.js/900x500/auto/#666:#444/text:Second slide" alt="Second slide"> </div>
        <div class="item"> <img style="width:100%;" src="<?php echo url('assets/front/')?>/images/home_top_slider.jpg" data-src="holder.js/900x500/auto/#555:#333/text:Third slide" alt="Third slide"> </div>
      </div>
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
    <div class="mainPitch" style="position: absolute; top: 50px; width: 100%;">
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
					
                          <form  name="myFormsmall" method="post"action="<?php echo url();?>/login/validate" >  
						  
						   <?php if(Session::has('failure')){ ?>
      <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{Session::get('failure')}} </div>
      <?php } ?>
      <?php if(Session::has('logout')){ ?>
      <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{Session::get('logout')}} </div>
      <?php } ?>
						  
                <h3>Login Now</h3>
                <p>Enter Your User Name and Password</p>
                <div class="form-group topinput">
                      <label class="sr-only" for="exampleInputAmount">User Name</label>
                      <div class="input-group">
                    <div class="input-group-addon">Username</div>
					<input class="form-control simplebox"type="text" name="userId"  placeholder="Enter Your User Name">
					       
       </div>
       @if ($errors->has('userId'))
      <p style="color:red;">{{$errors->first('userId')}}</p><br><br>
      @endif
                    </div>
                <div class="form-group topinput">
                      <label class="sr-only" for="exampleInputAmount">Password</label>
                      <div class="input-group">
                    <div class="input-group-addon">Password&nbsp;</div>
                  
					 <input class="form-control simplebox" type="password" name="userKey" ng-model="userKey"  placeholder="Enter Your Password">
					        </div>
                  @if ($errors->has('userKey'))
      <p style="color:red;">{{$errors->first('userKey')}}</p><br><br>
      @endif
        </div>
		<input type="hidden" name="clientIp" class="clientIp" value="">
                <div class="form-group">
                      <div class="col-md-6">
                    <p style="color:#fff; padding-top:5px;">Forgot Password</p>
                  </div>
                      <div class="col-md-6">
                    <input type="submit" name="submit" class="btn btn-danger">
                  </div>
                    </div>
              </form>
                      
					  </div>
                    <div class="col-md-12 login_footer">
                          
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
			
                 
                          <form  name="myForm" method="post"action="<?php echo url();?>/login/validate"   >
						  
						   <?php if(Session::has('failure')){ ?>
      <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{Session::get('failure')}} </div>
      <?php } ?>
      <?php if(Session::has('logout')){ ?>
      <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{Session::get('logout')}} </div>
      <?php } ?>
						  
                <h3>Login Now</h3>
                <p>Enter Your User Name and Password</p>
                <div class="form-group topinput">
                      <label class="sr-only" for="exampleInputAmount">User Name</label>
                      <div class="input-group">
                    <div class="input-group-addon">Username</div>
					<input class="form-control simplebox"type="text" name="userId"  placeholder="Enter Your User Name">
					        </div>
                  @if ($errors->has('userId'))
      <p style="color:red;">{{$errors->first('userId')}}</p><br><br>
      @endif
                    </div>
                <div class="form-group topinput">
                      <label class="sr-only" for="exampleInputAmount">Password</label>
                      <div class="input-group">
                    <div class="input-group-addon">Password&nbsp;</div>
                  
					 <input class="form-control simplebox" type="password" name="userKey" placeholder="Enter Your Password">
					        </div>
                  @if ($errors->has('userKey'))
      <p style="color:red;">{{$errors->first('userKey')}}</p><br><br>
      @endif
                    </div>
					<input type="hidden" name="clientIp" class="clientIp" value="">
                <div class="form-group">
                      <div class="col-md-6">
                    <p style="color:#fff; padding-top:5px;">Forgot Password</p>
                  </div>
                      <div class="col-md-6">
                    <input type="submit" name="submit" class="btn btn-danger">
                  </div>
                    </div>
              </form>
                      
				</div>
            <div class="col-md-12 login_footer">
                  
                </div>
          </div>
            </div>
      </div>
        </div>
  </div>
      <div class="row hidden-xs">
    <div class="container-fluid home_top_bottom " id="home_top_bottom">
          <div class="container">
        <div class="col-sm-3"><img src="<?php echo url('assets/front/')?>/images/h1.png" /> Download Mobile App</div>
        <div class="col-sm-3"><img src="<?php echo url('assets/front/')?>/images/h2.png" /> Download Windows App</div>
        <div class="col-sm-3"><img src="<?php echo url('assets/front/')?>/images/h3.png" /> info@appandukan.com</div>
        <div class="col-sm-3"><img src="<?php echo url('assets/front/')?>/images/h4.png" /> 9721384466</div>
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
          <div class="arrow floating"> <a href="#services"> <img src="<?php echo url('assets/front/')?>/images/arrow.png" class="img-responsive centered" id="overview"> </a> </div>
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
        <div class="col-sm-3"> <img src="<?php echo url('assets/front/')?>/images/s1.png" class="img-circle img-responsive centered" />
              <p>Pan card</p>
            </div>
        <div class="col-sm-3"> <img src="<?php echo url('assets/front/')?>/images/s2.png" class="img-circle img-responsive centered" />
              <p>Pran card</p>
            </div>
        <div class="col-sm-3"> <img src="<?php echo url('assets/front/')?>/images/s3.png" class="img-circle img-responsive centered" />
              <p>Money Transfer</p>
            </div>
        <div class="col-sm-3"> <img src="<?php echo url('assets/front/')?>/images/s4.png" class="img-circle img-responsive centered" />
              <p>Travel Booking</p>
            </div>
        <div class="col-sm-3"> <img src="<?php echo url('assets/front/')?>/images/s5.png" class="img-circle img-responsive centered" />
              <p>Multi Recharge</p>
            </div>
        <div class="col-sm-3"> <img src="<?php echo url('assets/front/')?>/images/s6.png" class="img-circle img-responsive centered" />
              <p>DTH Recharge</p>
            </div>
        <div class="col-sm-3"> <img src="<?php echo url('assets/front/')?>/images/s7.png" class="img-circle img-responsive centered" />
              <p>Insurance</p>
            </div>
        <div class="col-sm-3"> <img src="<?php echo url('assets/front/')?>/images/s8.png" class="img-circle img-responsive centered" />
              <p>General Insurance</p>
            </div>
      </div>
        </div>
		<div class="container">
    <div class="col-md-12">
          <div class="arrow"> <a href="#how_it_works"> <img src="<?php echo url('assets/front/')?>/images/arrow.png" class="img-responsive centered" id="overview"> </a> </div>
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
          <div class="col-sm-6"> <img src="<?php echo url('assets/front/')?>/images/bg3_r.png" class="img-rounded img-responsive centered" /> </div>
        </div>
    <div class="col-md-12">
          <div class="arrow floating"> <a href="#overview"> <img src="<?php echo url('assets/front/')?>/images/arrow.png" class="img-responsive centered" id="overview"> </a> </div>
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
<script>
        $.getJSON("http://ip-api.com/json/?callback=?", function(data) {
            var table_body = "";
            $.each(data, function(k, v) {
            if(k=="query")
            {
            //alert(v);
            $('.clientIp').val(v); 
            }
               });
        });
        </script>
<script>
var app = angular.module('myApp', []);
app.controller('validateCtrl', ['$scope','$http', function($scope,$http) {
  
	
	$scope.submit = function(){
if ($scope.user) {   
           $scope.list=
           {
            "name":$scope.user,
            "pass":$scope.pass,
           }
        }
    };
}]);
</script>
@stop