@extends('layouts.admin')
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
        <li><a href="<?php echo url('admin/dashboard');?>">Admin</a></li>
        <li><a href="#">Retailer</a></li>
        <li>Create Retailer</li>
      </ol>
      <h1>&nbsp;</h1>
    
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-primary">
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
            <div class="panel panel-info">
              <div class="panel-heading">
                <h4>Create Retailer</h4>
              </div>
              <div class="panel-body">
              
                <form action="<?php echo url();?>/admin/retailer/create" method="post" id="wizard" class="form-horizontal">
                  <fieldset title="Step 1">
                    <legend style="text-align:center;">Registration</legend>
                  @if($errors->has())
                     
                    <p>The following errors have occurred:</p>

   <ul>
    @foreach($errors->all() as $error)
     <li>{{ $error }}</li>
    @endforeach
   </ul>
   @endif
                    <div class="form-group">
                      <label for="fieldname" class="col-md-3 control-label">Retailer is Added Under to Franchise</label>
                      <div class="col-md-6">
                        <select class="form-control" name="parentIdPk" id="franchise">
                             <?php if($senddata){foreach ($senddata as $users) {if($users->userType=="FR"){?>
                          <option value="{{$users->userIdPk}}">{{$users->userId}}</option>
                        <?php }}}?>
                            
                        </select>
						<input type="hidden" name="parentId" id="parentId" value="">
            <input type="hidden" name="clientIp" id="clientIP" value="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="fieldname" class="col-md-3 control-label">Name</label>
                      <div class="col-md-6">
                        <input id="fieldname" class="form-control" name="userName" pattern="[A-Za-z]{1,4}" minlength="4" type="text" value="{{Input::old('userName')}}" required>
                      </div>
					   @if ($errors->has('userName'))
			<p style="color:white;">{{$errors->first('userName')}}</p><br><br>
			@endif
                    </div>
                    <div class="form-group">
                      <label for="fieldemail" class="col-md-3 control-label">Email</label>
                      <div class="col-md-6">
                        <input id="fieldemail" class="form-control" type="email" name="userEmail" value="{{Input::old('userEmail')}}" required>
                      </div>
					   @if ($errors->has('userEmail'))
			<p style="color:white;">{{$errors->first('userEmail')}}</p><br><br>
			@endif
					  <div id="fieldemailerror" style="color:white;"></div>
                    </div>
                    <div class="form-group">
                      <label for="fieldurl" class="col-md-3 control-label">Mobile Number</label>
                      <div class="col-md-6">
                        <input id="fieldmobile" class="form-control" maxlength="10" type="digits" name="userMobile" value="{{Input::old('userMobile')}}" required="required">
                      </div>
					   @if ($errors->has('userMobile'))
			<p style="color:white;">{{$errors->first('userMobile')}}</p><br><br>
			@endif
					  <div id="fieldmobilerror" style="color:white;"></div>
                    </div>
                  </fieldset>
                  <fieldset title="Step 2">
                    <legend style="text-align:center;">Address</legend>
                    <div class="form-group">
                      <label for="fieldaddress" class="col-md-3 control-label">Address 1</label>
                      <div class="col-md-6">
                        <input  class="form-control"  name="userAddress1" minlength="4" type="text" value="{{Input::old('userAddress1')}}" required>
                      </div>
					   @if ($errors->has('userAddress1'))
			<p style="color:white;">{{$errors->first('userAddress1')}}</p><br><br>
			@endif
                    </div>
                    <div class="form-group">
                      <label for="fieldemail" class="col-md-3 control-label">Address2</label>
                      <div class="col-md-6">
                        <input  class="form-control" type="text" name="userAddress2" value="{{Input::old('userAddress2')}}" required>
                      </div>
					   @if ($errors->has('userAddress2'))
			<p style="color:white;">{{$errors->first('userAddress2')}}</p><br><br>
			@endif
                    </div>
                    <div class="form-group">
                      <label for="fieldurl" class="col-md-3 control-label">City</label>
                      <div class="col-md-6">
                        <input  class="form-control"  type="text" name="userCity" value="{{Input::old('userCity')}}" required="required">
                      </div>
					   @if ($errors->has('userCity'))
			<p style="color:white;">{{$errors->first('userCity')}}</p><br><br>
			@endif
                    </div>
                    <div class="form-group">
                      <label for="fieldurl" class="col-md-3 control-label">State</label>
                      <div class="col-md-6">
                        <input  class="form-control"  type="text" name="userState"  value="{{Input::old('userState')}}" required="required">
                      </div>
					   @if ($errors->has('userState'))
			<p style="color:white;">{{$errors->first('userState')}}</p><br><br>
			@endif
                    </div>
                    <div class="form-group">
                      <label for="fieldurl" class="col-md-3 control-label">Zipcode</label>
                      <div class="col-md-6">
                        <input  class="form-control"  type="digits" name="userPincode" value="{{Input::old('userPincode')}}" maxlength="6" required="required">
                      </div>
					   @if ($errors->has('userPincode'))
			<p style="color:white;">{{$errors->first('userPincode')}}</p><br><br>
			@endif
                    </div>
                     <input type="hidden" name="userType" value="RT">
        <input type="hidden" name="currentUserId" value="<?php echo Session::get('user_name');?>">
        <input type="hidden" name="currentUserIdPk" value="<?php echo Session::get('user_id');?>">
        
                  </fieldset>
                  <fieldset title="Step 3">
                    <legend>Account Detail</legend>
                    <div class="form-group">
                      <label for="fieldurl" class="col-md-3 control-label">User ID</label>
                      <div class="col-md-6">
                        <input  class="form-control" id="fielduserid"  type="text" name="userId" value="{{Input::old('userId')}}" required="required">
                      </div>
                      <div class="col-md-3">
                        This Will be Used For Login
                      </div>
					   @if ($errors->has('userId'))
			<p style="color:white;">{{$errors->first('userId')}}</p><br><br>
			@endif	<div id="fielduseriderror"></div>
                    </div>
                    <div class="form-group">
                      <label for="fieldurl" class="col-md-3 control-label">Password</label>
                      <div class="col-md-6">
                        <input  class="form-control" id="userKey" type="password" name="userKey" value="{{Input::old('userKey')}}" required="required">
                      </div>
					   @if ($errors->has('userKey'))
			<p style="color:white;">{{$errors->first('userKey')}}</p><br><br>
			@endif
                    </div>
                    <div class="form-group">
                      <label for="fieldurl" class="col-md-3 control-label">Confirm Password</label>
                      <div class="col-md-6">
                        <input  class="form-control" equalTo="#userKey" type="password" name="cpass" value="{{Input::old('cpass')}}" required="required">
                      </div>
					   @if ($errors->has('cpass'))
			<p style="color:white;">{{$errors->first('cpass')}}</p><br><br>
			@endif

                    </div>
                    <div class="form-group">
                      <label for="fieldname" class="col-md-3 control-label">user Status</label>
                      <div class="col-md-6">
                        <select class="form-control" name="userStatus">
                            <option value="A">Active </option>
                            <option value="D">Deactive</option>
                        </select>
                      </div>
					   @if ($errors->has('userStatus'))
			<p style="color:white;">{{$errors->first('userStatus')}}</p><br><br>
			@endif
                    </div>
                  
                  </fieldset>
                  <fieldset title="Step 4">
                    <legend>Category</legend>
                   <ul>
  <li><input type="checkbox" id="all" name="check-all" /> All Category </li>
<div id="category">
</div>
  
 </ul>
  @if ($errors->has('prodCode'))
      <p style="color:white;">{{$errors->first('prodCode')}}</p><br><br>
      @endif
                  </fieldset>
                
                  <input type="submit" class="finish btn-success btn" value="Submit" />
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- container --> 
  </div>
  <!--wrap --> 
</div>
<!-- page-content --> 

@stop