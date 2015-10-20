<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Appan Dukan Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Avant">
<meta name="author" content="The Red Team">
<link href="<?php echo url('assets/'); ?>/less/styles.less" rel="stylesheet/less" media="all">
<!-- <link rel="stylesheet" href="assets/css/styles.min.css?=120"> -->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php echo url('assets/'); ?>/js/less.js"></script>
<script src="<?php echo url('');?>/assets/js/angular.min.js"></script>
</head>
<body class="focusedform">
<div class="verticalcenter"> <a href="index.php"><img src="<?php echo url('');?>/assets/img/logo-big.png" alt="Logo" class="brand" /></a>
  <div class="panel panel-primary">
    <div class="panel-body">
      <h4 class="text-center" style="margin-bottom: 25px;">Log in to get started</h4>
      <form class="form-horizontal" ng-app="myApp" name="myForm" method="post"action="<?php echo url();?>/login/validate" ng-submit="submit()" ng-controller="validateCtrl" novalidate>

      <h2 class="form-signin-heading">sign in now</h2>
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
      <div class="form-group">
        <label for="email" class="control-label col-sm-4" style="text-align: left;">User Name </label>
        <div class="col-sm-8">
         <input class="form-control"type="text" name="userId" ng-model="userId" required >
  <span style="color:red" ng-show="myForm.userId.$dirty && myForm.userId.$invalid">
  <span ng-show="myForm.userId.$error.required">Username is required.</span>
  
  </span>
  </div>
      </div>
      <div class="form-group">
        <label for="password" class="control-label col-sm-4" style="text-align: left;">Password</label>
        <div class="col-sm-8">
          <input class="form-control" type="password" name="userKey" ng-model="userKey" required minlength="6">
  <span style="color:red" ng-show="myForm.userKey.$dirty && myForm.userKey.$invalid">
  <span ng-show="myForm.userKey.$error.required">Password is required.</span>
  <span ng-show="myForm.userKey.$error.minlength">atleast contain 6 letters.</span>
  
  </span>
  </div>
      </div>
      <input type="submit" class="btn btn-default"
  ng-disabled="myForm.$pristine||myForm.userId.$dirty && myForm.userId.$invalid ||
  myForm.userKey.$dirty && myForm.userKey.$invalid">
      
      <!-- Modal --> 
      
      <!-- modal -->
      
      </form>
    </div>
    <div class="panel-footer"><!--   <a href="extras-forgotpassword.php" class="pull-left btn btn-link" style="padding-left:0">Forgot password?</a>-->
      <!--div class="pull-right"> <a href="#" class="btn btn-default">Reset</a> </div-->
    </div>
  </div>
</div>
</body>
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
</html>