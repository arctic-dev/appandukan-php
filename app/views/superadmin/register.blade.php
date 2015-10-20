@extends('layouts.superadmin')
@section('content')

<div id="">
	<div id="wrap">
		<div id="page-heading">
			<ol class="breadcrumb">
				<li><a href="index.php">Dashboard</a></li>
				<li>Register</li>
				<li class="active">New Admin</li>
			</ol>

			<h1>New Sub Admin</h1>
			<div class="options">
                <div class="btn-toolbar">
                    <div class="btn-group hidden-xs">
                        <a href='#' class="btn btn-default dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cloud-download"></i><span class="hidden-sm"> Export as  </span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Text File (*.txt)</a></li>
                            <li><a href="#">Excel File (*.xlsx)</a></li>
                            <li><a href="#">PDF File (*.pdf)</a></li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-default"><i class="fa fa-cog"></i></a>
                </div>
            </div>
		</div>
		<div class="container">
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
	<div class="row">
				<div class="col-sm-12">
				  <div class="panel panel-primary">
				      <div class="panel-heading">
				          <h4>Register New Admin</h4>
				          
				      </div>
				      <div class="panel-body">
				      	<form class="form-horizontal"  name="myForm" method="post" action="<?php echo url();?>/Superadmin/create"  >
						  <div class="form-group">
					<label for="fieldname" class="col-md-3 control-label">Name</label>
					<div class="col-md-6">
						<input id="fieldname" class="form-control" name="userName"  type="text" >
                        
					</div>
					@if ($errors->has('userName'))
			<p style="color:red;">{{$errors->first('userName')}}</p><br><br>
			@endif
				</div>
				<div class="form-group">
					<label for="fieldemail" class="col-md-3 control-label">Email</label>
					<div class="col-md-6"><input id="fieldemail" type="text" class="form-control"  name="userEmail" ></div>
				@if ($errors->has('userEmail'))
			<p style="color:red;">{{$errors->first('userEmail')}}</p><br><br>
			@endif
			</div>
				<div class="form-group">
					<label for="fieldurl" class="col-md-3 control-label">Mobile number</label>
					<div class="col-md-6"><input id="fieldmobilenumber" class="form-control" type="text"  name="userMobile"  >
                    </div>
                    @if ($errors->has('userMobile'))
			<p style="color:red;">{{$errors->first('userMobile')}}</p><br><br>
			@endif
				</div>
				<div class="form-group">
					<label for="fieldnick" class="col-md-3 control-label">Address Field1</label>
					<div class="col-md-6"><input id="fieldaddd1" class="form-control" name="userAddress1" type="text" ></div> 
				@if ($errors->has('userAddress1'))
			<p style="color:red;">{{$errors->first('userAddress1')}}</p><br><br>
			@endif
			</div>
                <div class="form-group">
					<label for="fieldnick" class="col-md-3 control-label">Address Field2</label>
					<div class="col-md-6"><input id="fieldaddd2" class="form-control" name="userAddress2" type="text" ></div> 
				@if ($errors->has('userAddress2'))
			<p style="color:red;">{{$errors->first('userAddress2')}}</p><br><br>
			@endif
			</div>
                 <div class="form-group">
					<label for="fieldnick" class="col-md-3 control-label">Pin Code</label>
					<div class="col-md-6"><input id="fieldpin" class="form-control" type="text" name="userPincode"></div> 
				@if ($errors->has('userPincode'))
			<p style="color:red;">{{$errors->first('userPincode')}}</p><br><br>
			@endif
			</div>
                <div class="form-group">
					<label for="fieldnick" class="col-md-3 control-label">City</label>
					<div class="col-md-6"><input id="fieldcity" class="form-control" type="text" name="userCity" ></div> 
				@if ($errors->has('userCity'))
			<p style="color:red;">{{$errors->first('userCity')}}</p><br><br>
			@endif
			</div>
                <div class="form-group">
					<label for="fieldnick" class="col-md-3 control-label">State</label>
					<div class="col-md-6"><input id="fieldstate" class="form-control" type="text" name="userState" ></div> 
				@if ($errors->has('userState'))
			<p style="color:red;">{{$errors->first('userState')}}</p><br><br>
			@endif
			</div>
                <input type="hidden" name="userType" value="<?php echo Session::get('reg_type');?>">
        <input type="hidden" name="currentUserId" value="<?php echo Session::get('user_name');?>">
        <input type="hidden" name="currentUserIdPk" value="<?php echo Session::get('user_id');?>">
				 <div class="form-group">
					<label for="fieldnick" class="col-md-3 control-label">User Name</label>
					<div class="col-md-6"><input id="fielduname" class="form-control" type="text" name="userId" ></div> 
				@if ($errors->has('userId'))
			<p style="color:red;">{{$errors->first('userId')}}</p><br><br>
			@endif
			</div>
                <div class="form-group">
					<label for="fieldnick" class="col-md-3 control-label">Password</label>
					<div class="col-md-6"><input id="userKey" class="form-control" type="password" name="userKey" ></div> 
				@if ($errors->has('userKey'))
			<p style="color:red;">{{$errors->first('userKey')}}</p><br><br>
			@endif
			</div>
                 <div class="form-group">
					<label for="fieldnick" class="col-md-3 control-label">Confirm Password</label>
					<div class="col-md-6"><input  data-equalto="#userKey" class="form-control" type="password" name="cpass" ></div> 
				@if ($errors->has('cpass'))
			<p style="color:red;">{{$errors->first('cpass')}}</p><br><br>
			@endif
			</div>
           
				<div class="form-group">
					<label for="fieldnick" class="col-md-3 control-label">Status</label>
					<div class="col-md-6"><select class="form-control" name="userStatus" id="userStatus" required="required">
              <option value="A">active</option>
              <option value="D">inactive</option>
            </select>
           
				</div>
 					@if ($errors->has('userStatus'))
			<p style="color:red;">{{$errors->first('userStatus')}}</p><br><br>
			@endif
			</div> 
			<input type="submit" class="finish btn-success btn" value="Submit" />
						  </div>
				
						</form>
				      </div>
				      
				  </div>
				</div>
			</div>


			

		 </div> <!-- row -->
	 </div> <!-- container -->
 </div> <!-- wrap -->
</div> <!-- page-content -->


@stop