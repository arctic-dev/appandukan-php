@extends('layouts.franchise')
@section('content')
<style>
ul.checktree-root, ul#tree ul {
list-style: none;
}
ul.checktree-root label {
font-weight: normal;
position: relative;
}
ul.checktree-root label input {
position: relative;
top: 2px;
left: -5px;
}
</style>
<script src="<?php echo url('assets/admin/plugins/tree');?>/tree_multiselect.js"></script>
<style>
ul
{
 list-style:none;
}
</style>
<div id="page-content">
  <div id='wrap'>
    <div id="page-heading">
      <ol class="breadcrumb col-sm-6">
        <li><a href="<?php echo url('franchise/dashboard');?>">admin</a></li>
        <li>Franchise</li>
        <li>Edit Franchise</li>
      </ol>
      <h1>&nbsp;</h1>
      
    </div>
    <div class="container">
      <div class="row">
        {{ Form::open(array('url'=>'franchise/retailer/store', 'method'=>'post','class'=>'form-horizontal')) }}
          <div class="col-md-12">
            <div class="panel panel-primary"> 
              <?php if(Session::has('failure')){ ?>
              <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{Session::get('failure')}} </div>
              <?php } ?>
              <?php if(Session::has('success')){ ?>
              <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{Session::get('success')}} </div>
              <?php } ?>
              <div class="col-md-6" >
                <div class="panel-heading">
                  
                  <h4>Registration</h4>
                </div>
                <div class="panel-body">
                  <legend style="text-align:center;">Registration</legend>
				  
                  <div class="form-group">
                    <label for="fieldname" class="col-md-3 control-label">Name</label>
                    <div class="col-md-6">
                      <input id="fieldname" class="form-control" name="userName" minlength="4" type="text" value="{{$userdata->userName}}">
                    </div>
					@if ($errors->has('userName'))
			<p style="color:white;">{{$errors->first('userName')}}</p><br><br>
			@endif
                  </div>
                  <div class="form-group">
                    <label for="fieldemail" class="col-md-3 control-label">Email</label>
                    <div class="col-md-6">
                      <input id="fieldemail" class="form-control"  type="email" name="userEmail" value="{{$userdata->userEmail}}" >
                    </div>
					<div id="fieldemailerror" style="color:white;"></div>
                    
					@if ($errors->has('userEmail'))
			<p style="color:white;">{{$errors->first('userEmail')}}</p><br><br>
			@endif
                  </div>
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">Mobile Number</label>
                    <div class="col-md-6">
                      <input id="fieldmobile" class="form-control"  type="text" name="userMobile" value="{{$userdata->userMobile}}">
                    </div>
					@if ($errors->has('userMobile'))
			<p style="color:white;">{{$errors->first('userMobile')}}</p><br><br>
			@endif
			<div id="fieldmobilerror" style="color:white;"></div>
                  </div>
                </div>
                  <div style="margin-top:20px;" class="panel-heading">
                  <h4>Account Detail</h4>
                </div>
                <div class="panel-body">
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">User ID</label>
                    <div class="col-md-6">
                      <input  class="form-control" id="fielduserid" type="text" name="userId" value="{{$userdata->userId}}" >
                    </div>
                    <div class="col-md-3">
                        This Will be Used For Login
                      </div>
					  @if ($errors->has('userId'))
			<p style="color:white;">{{$errors->first('userId')}}</p><br><br>
			@endif
			<div id="fielduseriderror"></div>
                  </div>
				   <div class="form-group">
                      <label for="fieldname" class="col-md-3 control-label">Status</label>
                      <div class="col-md-6">
                        <select class="form-control" name="userStatus" >
                            <option value="A" <?php if($userdata->userStatus=="A"){echo "selected";}?>>Active </option>
                            <option value="D" <?php if($userdata->userStatus=="D"){echo "selected";}?>>Deactive</option>
                        </select>
                      </div>
                    </div>
					<div class="form-group">
					
                    <label for="fieldurl" class="col-md-3 control-label">Password</label>
                    <div class="col-md-6">
                      <input  class="form-control"  type="password" name="userKey" >
					  
                    </div>
					<div class="col-md-3">
                        If you want to change password please enter new password.
                      </div>
					@if ($errors->has('userKey'))
			<p style="color:white;">{{$errors->first('userKey')}}</p><br><br>
			@endif
                  </div>
				  
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">Confirm Password</label>
                    <div class="col-md-6">
                      <input  class="form-control"  type="password" name="cpass" >
                    </div>
					@if ($errors->has('cpass'))
			<p style="color:white;">{{$errors->first('cpass')}}</p><br><br>
			@endif
                  </div>
                  
                  
                  
                </div>
                <div style="margin-top:20px;" class="panel-heading">
                  <h4>Address</h4>
                </div>
                <div class="panel-body">
                  <legend style="text-align:center;"></legend>
                  <div class="form-group">
                    <label for="fieldname" class="col-md-3 control-label">Address 1</label>
                    <div class="col-md-6">
                      <input  class="form-control"  name="userAddress1" minlength="4" type="text" value="{{$userdata->userAddress1}}" >
                    </div>
					@if ($errors->has('userAddress1'))
			<p style="color:white;">{{$errors->first('userAddress1')}}</p><br><br>
			@endif
                  </div>
                  <div class="form-group">
                    <label for="fieldemail" class="col-md-3 control-label">Address2</label>
                    <div class="col-md-6">
                      <input  class="form-control" type="text" name="userAddress2" value="{{$userdata->userAddress2}}">
                    </div>
					@if ($errors->has('userAddress2'))
			<p style="color:white;">{{$errors->first('userAddress2')}}</p><br><br>
			@endif
                  </div>
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">City</label>
                    <div class="col-md-6">
                      <input  class="form-control"  type="text" name="userCity" value="{{$userdata->userCity}}" >
                    </div>
					@if ($errors->has('userCity'))
			<p style="color:white;">{{$errors->first('userCity')}}</p><br><br>
			@endif
                  </div>
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">State</label>
                    <div class="col-md-6">
                      <input  class="form-control"  type="text" name="userState" value="{{$userdata->userState}}">
                    </div>
					@if ($errors->has('userState'))
			<p style="color:white;">{{$errors->first('userState')}}</p><br><br>
			@endif
                  </div>
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">Zipcode</label>
                    <div class="col-md-6">
                      <input  class="form-control"  type="text" name="userPincode" value="{{$userdata->userPincode}}" >
                    </div>
					@if ($errors->has('userPincode'))
			<p style="color:white;">{{$errors->first('userPincode')}}</p><br><br>
			@endif
                  </div>
				  <input type="hidden" name="currentUserId" value="<?php echo Session::get('user_name');?>">
        <input type="hidden" name="currentUserIdPk" value="<?php echo Session::get('user_id');?>">
         <input type="hidden" name="parentId" value="{{$userdata->parentId}}">
       <input type="hidden" name="parentIdPk" value="{{$userdata->parentIdPk}}">
       <input type="hidden" name="userIdPk" value="{{$userdata->userIdPk}}">
	   <input type="hidden" name="userType" value="{{$userdata->userType}}">
	   <input type="hidden" name="clientIp" id="clientIp" value="">
       
                </div>
               
              </div>
              <div class="col-md-6">
                
                <div  class="panel-heading">
                  <h4>Category</h4>
                </div>
                <div class="panel-body">
                  <legend></legend>
                  <p>Select Category For Admin</p>
				  <ul>
  <li><input type="checkbox" id="all" name="check-all" /> All Category </li>
  <?php foreach($admincategory as $categories){?>
  <li class="parent-list"><input type="checkbox" name="" id="" class="canine parent" <?php foreach($usercategory as $usercat){if($usercat->catgCode==$categories->catgCode){echo "checked";}}?>/>{{$categories->fullName}} <i class="fa fa-arrow-down"></i>
   <ul>
   <?php foreach($adminproduct as $product)
   {if($product->catgCode==$categories->catgCode){?>
    <li><input type="checkbox" name="prodCode[]" class="canine" id="" value="{{$product->prodCode}}" <?php foreach($userproduct as $userprod){if($userprod->prodCode==$product->prodCode){echo "checked";}} ?>/> {{$product->fullName}}</li>
	<?php }}?>
    </ul>
  </li>
  <?php  }?>
                </div>
                  
   @if ($errors->has('prodCode'))
			<p style="color:white;">{{$errors->first('prodCode')}}</p><br><br>
			@endif
 </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="panel-footer">
              <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <div class="btn-toolbar">
                    <input type="submit" id="submit"  class="btn-primary btn">
                    
                  </div>
				  </form>
                </div>
               
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- container --> 
</div>
<!--wrap -->
</div>
<!-- page-content --> 

@stop