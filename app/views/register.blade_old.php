<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Appan Dukan Registration</title>
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
      <h4 class="text-center" style="margin-bottom: 25px;">Register to get started</h4>
      <h2 class="form-signin-heading">Register Now </h2>
      <?php if(Session::has('failure')){ ?>
      <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{Session::get('failure')}} </div>
      <?php } ?>
       <?php if(Session::has('sucess')){ ?>
      <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{Session::get('sucess')}} </div>
      <?php } ?>
      
      <form class="form-horizontal" ng-app="myApp" name="myForm" method="post"action="<?php echo url();?>/admin/create"ng-submit="submit()" ng-controller="validateCtrl" novalidate>
        <div class="form-group">
          <label for="state" class="col-sm-3 control-label">User Name</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" name="userId" value="">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
          <div class="col-sm-9">
            <input class="form-control"type="text" name="userName" ng-model="userName" required minlength="5" >
            <span style="color:red" ng-show="myForm.userName.$dirty && myForm.userName.$invalid"> <span ng-show="myForm.userName.$error.required">Firstname is required.</span> <span ng-show="myForm.userName.$error.minlength">Must be minimun 5 letters.</span> </span> </div>
        </div>
        <!--div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Last Name</label>
          <div class="col-sm-9">
            <input class="form-control"type="text" name="lname" ng-model="lname" required >
            <span style="color:red" ng-show="myForm.lname.$dirty && myForm.lname.$invalid"> <span ng-show="myForm.lname.$error.required">Lastname is required.</span> </span> </div>
        </div-->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-9">
            <input class="form-control"type="email" name="userEmail" ng-model="userEmail" required >
            <span style="color:red" ng-show="myForm.userEmail.$dirty && myForm.userEmail.$invalid"> <span ng-show="myForm.userEmail.$error.required">Email is required.</span> <span ng-show="myForm.userEmail.$error.email">Please enter a valid email.</span> </span> </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Mobile number</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" length="any" name="userMobile" ng-model="userMobile" pattern="[0-9]{1,10}"required maxlength="10">
            <span style="color:red" ng-show="myForm.userMobile.$dirty && myForm.userMobile.$invalid"> <span ng-show="myForm.userMobile.$error.required">mobile number is required.</span> <span ng-show="myForm.userMobile.$error.pattern">Please enter numbers.</span> </span> </div>
        </div>
        <!--div class="form-group">
          <label class="col-sm-3 control-label">Gender</label>
          <div class="col-sm-9">
            <label>
              <input type="radio" name="gender" ng-model="gender" value="1" ng-required="!gender" checked\>
              male </label>
            <label>
              <input type="radio" name="gender" ng-model="gender" value="2" ng-required="!gender" >
              female <span style="color:red" ng-show="myForm.gender.$dirty && myForm.gender.$invalid"> <span ng-show="myForm.gender.$error.required">Gender is required.</span> </span> </label>
          </div>
        </div-->
        <div class="form-group">
          <label for="address" class="col-sm-3 control-label">Address Field1</label>
          <div class="col-sm-9">
            <input class="form-control" name="userAddress1" ng-model="userAddress1"  required>
            <span style="color:red" ng-show="myForm.userAddress1.$dirty && myForm.userAddress1.$invalid"> <span ng-show="myForm.userAddress1.$error.required">Address is required.</span> </span> </div>
        </div>
        <div class="form-group">
          <label for="address" class="col-sm-3 control-label">Address Field2</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" name="userAddress2" ng-model="userAddress2"  required>
            <span style="color:red" ng-show="myForm.userAddress2.$dirty && myForm.userAddress2.$invalid"> <span ng-show="myForm.userAddress2.$error.required">Address is required.</span> </span> </div>
        </div>
        <div class="form-group">
          <label for="zipcode" class="col-sm-3 control-label">zipcode</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" name="userPincode" ng-model="userPincode" pattern="[0-9]{1,}"maxlength="6" required>
            <span style="color:red" ng-show="myForm.userPincode.$dirty && myForm.zipcode.$invalid"> <span ng-show="myForm.zipcode.$error.required">Zipcode is required.</span> <span ng-show="myForm.userPincode.$error.pattern">please enter proper zipcode.</span> <span ng-show="myForm.userPincode.$error.maxlength">Zipcode must contain 6 numbers.</span> </span> </div>
        </div>
        <div class="form-group">
          <label for="city" class="col-sm-3 control-label">City</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" name="userCity" ng-model="userCity" pattern="[a-zA-Z]{1,}" required>
            <span style="color:red" ng-show="myForm.userCity.$dirty && myForm.city.$invalid"> <span ng-show="myForm.userCity.$error.required">City is required.</span> <span ng-show="myForm.userCity.$error.pattern">please enter only characters.</span> </span> </div>
        </div>
        <div class="form-group">
          <label for="state" class="col-sm-3 control-label">State</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" name="userState" ng-model="userState" pattern="[a-zA-Z]{1,}" required>
            <span style="color:red" ng-show="myForm.userState.$dirty && myForm.userState.$invalid"> <span ng-show="myForm.userState.$error.required">state is required.</span> <span ng-show="myForm.userState.$error.pattern">please enter only characters.</span> </span> </div>
        </div>
        <input type="hidden" name="userType" value="<?php echo Session::get('reg_type');?>">
        <input type="hidden" name="currentUserId" value="<?php echo Session::get('user_name');?>">
        <input type="hidden" name="currentUserIdPk" value="<?php echo Session::get('user_id');?>">
        <!--div class="form-group">
          <label for="state" class="col-sm-3 control-label">Franchise Limit</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" name="flimit" ng-model="flimit" pattern="[0-9]{1,}" required>
            <span style="color:red" ng-show="myForm.flimit.$dirty && myForm.flimit.$invalid"> <span ng-show="myForm.flimit.$error.required">state is required.</span> <span ng-show="myForm.flimit.$error.pattern">please enter only numbers.</span> </span> </div>
        </div-->
        <div class="form-group">
          <label for="status" class="col-sm-3 control-label">User Status</label>
          <div class="col-sm-9">
            <select class="form-control" name="userStatus" ng-model="userStatus" required>
              <option value="A">active</option>
              <option value="D">inactive</option>
            </select>
            <span style="color:red" ng-show="myForm.UserStatus.$dirty && myForm.UserStatus.$invalid"> <span ng-show="myForm.UserStatus.$error.required">Status is required.</span> </span> </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Password</label>
          <div class="col-sm-9">
            <input class="form-control" type="password" name="userKey" ng-model="userKey" required minlength="6">
            <span style="color:red" ng-show="myForm.userKey.$dirty && myForm.userKey.$invalid"> <span ng-show="myForm.userKey.$error.required">Password is required.</span> <span ng-show="myForm.userKey.$error.minlength">atleast contain 6 letters.</span> </span> </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Confirm Password</label>
          <div class="col-sm-9">
            <input class="form-control" type="password" name="cpass" ng-model="cpass" valid-password-c="userKey" required minlength="6">
            <span style="color:red" ng-show="myForm.cpass.$dirty && myForm.cpass.$invalid"> <span ng-show="myForm.cpass.$error.required">Password is required.</span> <span ng-show="myForm.cpass.$error.noMatch">password dont match.</span> </span> </div>
        </div>
        <div class="col-sm-offset-3 col-sm-10">
          <input type="submit" class="btn btn-default"
  ng-disabled="myForm.$pristine || myForm.userName.$untouched && myForm.userName.$dirty && myForm.userName.$invalid || myForm.lname.$dirty && myForm.lname.$invalid 
  ||myForm.userEmail.$dirty && myForm.userEmail.$invalid || myForm.userMobile.$dirty && myForm.userMobile.$invalid || myForm.gender.$dirty && myForm.gender.$invalid || myForm.address1.$dirty && myForm.address1.$invalid || myForm.address2.$dirty && myForm.address2.$invalid 
  || myForm.zipcode.$dirty && myForm.zipcode.$invalid || myForm.userName.$pristine && myForm.city.$dirty && myForm.city.$invalid || myForm.userName.$pristine && myForm.state.$dirty && myForm.state.$invalid 
  || myForm.flimit.$untouched || myForm.flimit.$dirty &&  myForm.flimit.$invalid || myForm.userKey.$dirty && myForm.userKey.$invalid || 
  myForm.gender.$dirty && myForm.gender.$invalid">
        </div>
      </form>
    </div>
  </div>
</div>
</body>
<script>
var app = angular.module('myApp', []);
app.directive('validPasswordC', function() {
  return {
    require: 'ngModel',
    scope: {

      reference: '=validPasswordC'

    },
    link: function(scope, elm, attrs, ctrl) {
      ctrl.$parsers.unshift(function(viewValue, $scope) {

        var noMatch = viewValue != scope.reference
        ctrl.$setValidity('noMatch', !noMatch)
      });

      scope.$watch("reference", function(value) {;
        ctrl.$setValidity('noMatch', value === ctrl.$viewValue);

      });
    }
  }
});
app.controller('validateCtrl', ['$scope', function($scope) {
  
	
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