@extends('layouts.superadmin')
@section('content')

<div id="">
	<div id="wrap">
		<div id="page-heading">
			<ol class="breadcrumb">
				<li><a href="index.php">Dashboard</a></li>
				<li>Password</li>
				<li class="active">Change Password</li>
			</ol>

			<h1>Change Password</h1>
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
				          <h4>Change Password</h4>
				          
				      </div>
				      <div class="panel-body">
				      	<form class="form-horizontal"  name="myForm" method="post" action="<?php echo url();?>/Superadmin/pass"  >
			
                 <div class="form-group">
					<label for="fieldnick" class="col-md-3 control-label">Old Password</label>
					<div class="col-md-6"><input id="fielduname" class="form-control" type="text" name="userId" ></div> 
				@if ($errors->has('userId'))
			<p style="color:red;">{{$errors->first('userId')}}</p><br><br>
			@endif
			</div>
                <div class="form-group">
					<label for="fieldnick" class="col-md-3 control-label">New Password</label>
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