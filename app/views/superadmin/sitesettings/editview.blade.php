@extends('layouts.superadmin')
@section('content')

<div id="page-content">
  <div id='wrap'>
    <div id="page-heading">
    
       <ol class="breadcrumb col-sm-6">
        <li><a href="<?php echo url('superadmin/dashboard');?>">Superadmin</a></li>
        <li>Site Settings</li>
      </ol>
        <h1>&nbsp;</h1>
    
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        	<div class="panel panel-primary">
          {{ Form::open(array('url'=>'superadmin/sitesettings/store', 'class'=>'form-horizontal')) }}
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
            <div class="panel-heading">
              <h4>Site Settings</h4>
            </div>
            <div class="panel-body">
              <div class="form-group">
                <label for="radio" class="col-sm-3 control-label">Site Display Settings</label>
                <div class="col-sm-6">
                  <div class="radio block">
                    <label>
                      <input type="radio">
                      Activate Site</label>
                  </div>
                  <div class="radio block">
                    <label>
                      <input type="radio" checked="">
                      Site is Down for Maintanace</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="radio" class="col-sm-3 control-label">Protect Site Using Password</label>
                <div class="col-sm-6">
                  <div class="radio block">
                    <label>
                      <input type="radio">
                      Yes </label>
                  </div>
                  <div class="radio block">
                    <label>
                      <input type="radio" checked="">
                      no</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="smallinput" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control input-sm" id="smallinput" placeholder="Password">
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <div class="btn-toolbar">
                    <button class="btn-primary btn">Submit</button>
                    <button class="btn-default btn">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
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