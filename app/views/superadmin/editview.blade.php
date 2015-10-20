@extends('layouts.superadmin')
@section('content')
<div id="page-content">
  <div id='wrap'>
    <div id="page-heading">
      <ol class="breadcrumb col-sm-6">
        <li><a href="<?php echo url('superadmin/dashboard');?>">Superadmin</a></li>
        <li>Profile</li>
        <li>Edit Profile</li>
      </ol>
      <h1>&nbsp;</h1>
      <div class="options">
        <div class="btn-toolbar">
          <div class="btn-group hidden-xs"> <a href='#' class="btn btn-default dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cloud-download"></i><span class="hidden-xs hidden-sm hidden-md"> Export as</span> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Text File (*.txt)</a></li>
              <li><a href="#">Excel File (*.xlsx)</a></li>
              <li><a href="#">PDF File (*.pdf)</a></li>
            </ul>
          </div>
          <a href="#" class="btn btn-default hidden-xs"><i class="fa fa-cog"></i></a> </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        
          <div class="col-md-12">
            <div class="panel panel-primary"> {{ Form::open(array('url'=>'superadmin/profile/store', 'method'=>'post','class'=>'form-horizontal')) }}
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
              <div class="col-md-6" >
               
                
              
                <div style="margin-top:20px;" class="panel-heading">
                  <h4>Registration</h4>
                </div>
                <div class="panel-body">
                  <legend style="text-align:center;">Registration</legend>
                  <div class="form-group">
                    <label for="fieldname" class="col-md-3 control-label">Name</label>
                    <div class="col-md-6">
                      <input id="fieldname" class="form-control" name="userName" minlength="4" type="text" value="{{$userdata->userName}}" >
                    </div>
					@if ($errors->has('userName'))
			<p style="color:white;">{{$errors->first('userName')}}</p><br><br>
			@endif
                  </div>
                  <div class="form-group">
                    <label for="fieldemail" class="col-md-3 control-label">Email</label>
                    <div class="col-md-6">
                      <input id="fieldemail" class="form-control" type="text" name="userEmail" value="{{$userdata->userEmail}}" >
                    </div>
					@if ($errors->has('userEmail'))
			<p style="color:white;">{{$errors->first('userEmail')}}</p><br><br>
			@endif
                  </div>
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">Mobile Number</label>
                    <div class="col-md-6">
                      <input id="fieldmobile" class="form-control"  type="text" name="userMobile" value="{{$userdata->userMobile}}" >
                    </div>
					@if ($errors->has('userMobile'))
			<p style="color:white;">{{$errors->first('userMobile')}}</p><br><br>
			@endif
                  </div>
                </div>
                 <div style="margin-top:20px;" class="panel-heading">
                  <h4>Account Detail</h4>
                </div>
                <div class="panel-body">
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">User ID</label>
                    <div class="col-md-6">
                      <input  class="form-control"  type="text" name="userId" value="{{$userdata->userId}}" >
                    </div>
                    <div class="col-md-3">
                        This Will be Used For Login
                      </div>
					  @if ($errors->has('userId'))
			<p style="color:white;">{{$errors->first('userId')}}</p><br><br>
			@endif
                  </div>
				   <input type="hidden" name="currentUserId" value="<?php echo Session::get('user_name');?>">
        <input type="hidden" name="currentUserIdPk" value="<?php echo Session::get('user_id');?>">
         <input type="hidden" name="parentId" value="{{$userdata->parentId}}">
       <input type="hidden" name="parentIdPk" value="{{$userdata->parentIdPk}}">
       <input type="hidden" name="userIdPk" value="{{$userdata->userIdPk}}">
       <input type="hidden" name="userStatus" value="{{$userdata->userStatus}}">
       <input type="hidden" name="userType" value="{{$userdata->userType}}">
       
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">Password</label>
                    <div class="col-md-6">
                      <input  class="form-control"  type="password" name="userKey" >
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
                
                
              </div>
              <div class="col-md-6">
               
                
                <div  class="panel-heading">
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
                      <input  class="form-control" type="text" name="userAddress2"  value="{{$userdata->userAddress2}}"  >
                    </div>
					@if ($errors->has('userAddress2'))
			<p style="color:white;">{{$errors->first('userAddress2')}}</p><br><br>
			@endif
                  </div>
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">City</label>
                    <div class="col-md-6">
                      <input  class="form-control"  type="text" name="userCity"  value="{{$userdata->userCity}}" >
                    </div>
					@if ($errors->has('userCity'))
			<p style="color:white;">{{$errors->first('userCity')}}</p><br><br>
			@endif
                  </div>
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">State</label>
                    <div class="col-md-6">
                      <input  class="form-control"  type="text" name="userState" value="{{$userdata->userState}}" >
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
                </div>
                
                
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="panel-footer">
              <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <div class="btn-toolbar">
                    <button class="btn-primary btn">Submit</button>
                    
                  </div>
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