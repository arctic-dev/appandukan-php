@extends('layouts.retailer')
@section('content')
<style>
body
{
	    color: #401724;
}
</style>
<div class="form-group" style="display:none;">
  <label class="col-sm-3 control-label">Fullscreen Textarea</label>
  <div class="col-sm-6">
    <textarea class="form-control fullscreen"></textarea>
  </div>
</div>
<div id="page-content">
  <div id='wrap'>
    <div id="page-heading">
      <ol class="breadcrumb">
        <li><a href="<?php echo url('retailer/dashboard');?>">Retailer</a></li>
        <li>Conmplete Registration</li>
        <li>OTP Form</li>
      </ol>
      <h1>OTP Form</h1>
    
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
            <div class="col-md-12">
             {{ Form::open(array('url'=>'retailer/icash/loginvalidate','method'=>'get', 'class'=>'form-horizontal')) }}
              <div class="panel-heading">
                <h4>IMPS Waalet Form</h4>
              </div>

              <div class="panel-body">
                <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Mobile Number</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="mobilenumber" required="required" placeholder="User Parent">
                          </div>
                           
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Mpin</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="password" maxlength="4" name="pin" required="required" placeholder="User Parent">
                          </div>
                        </div>
						
                       <a href="{{url('retailer/icash/forgetpin')}}" class="btn-danger btn">Forget Pin?</a>
              </div>
              <div class="row" >
                      <div class="col-md-12">
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
                      </div>
                    </div>
                    </form>
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