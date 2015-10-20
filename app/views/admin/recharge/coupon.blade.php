@extends('layouts.admin')
@section('content')
<div id="page-content">
  <div id='wrap'>
    <div id="page-heading">
      <ol class="breadcrumb col-sm-6">
        <li><a href="<?php echo url('admin/dashboard');?>">Admin</a></li>
        <li>Pan Card</li>
        <li>Import Coupon</li>
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
            <?php if(Session::has('success')){ ?>
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              {{Session::get('success')}} </div>
            <?php } ?>
            <div class="panel-heading">
              <h4>Manage Pan Forms</h4>
            </div>
            <div class="panel-body collapse in">
              <form action="<?php echo url();?>/admin/recharge/uploadcsv" method="post" id="wizard" class="form-horizontal" enctype="multipart/form-data">
                
                 <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label"> Choose CSV File</label>
                    <div class="col-md-6">
                      <input id="fileupload" class="form-control" type="file" name="fileupload"  required="required">
                    </div>
                    @if ($errors->has('fileupload'))
                    <p style="color:white;">{{$errors->first('fileupload')}}</p>
                    
                    @endif
                    <div id="fieldmobilerror" style="color:white;"></div>
                  </div>
                  
                  <div class="form-group">
                   <label for="fieldurl" class="col-md-3 control-label"> </label>
                    <div class="col-md-6">
                      <input type="submit" class="finish btn-success btn" value="Submit" />
                   </div>
                  </div>
                
               
               
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