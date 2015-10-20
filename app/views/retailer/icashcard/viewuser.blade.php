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
            <?php if(Session::has('sucess')){ ?>
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              {{Session::get('sucess')}} </div>
            <?php } ?>
            <div class="col-md-12">
             {{ Form::open(array('url'=>'retailer/icash/mpin','method'=>'get', 'class'=>'form-horizontal')) }}
              <div class="panel-heading">
                <h4>IMPS Waalet Form</h4>
              </div>
              <div class="panel-body">
              <div class="container" style="border: 2px solid white;">
			<div class="head" style="  padding: 10px;  height: 40px;  border-bottom: 2px solid white;margin-left: -10px;  margin-right: -10px;">
			<div class="col-md-3">
			Kyc Status:{{Session::get('KYCSTATUS')}}
			</div>
			
			<div class="col-md-3">
			</div>
			<div class="col-md-3">
			</div>
			<div class="col-md-3">
			<?php if(Session::get('KYCSTATUS')=="KYC Not Collected")
			{?>
			<a href="{{url('retailer/icash/kycupload')}}" class="btn-success btn-sm">kyc Upload</a>
			<?php } ?>
			</div>
			</div>
			<div class="jumbtron" style="height:150px; ">
			
			<div class="container"style="padding-top: 50px;">
			<div class="col-md-12">
			
			MOBILE NUMBER:{{Session::get('MOBILE')}}
			</div>
			<div class="col-md-12">
			User Name:{{Session::get('NAME')}}
			</div>
            <div class="col-md-12">
			
			MIDDLE NAME:{{Session::get('MIDDLENAME')}}
			</div>
           
           <div class="col-md-12">
			
			LASNAME:{{Session::get('LASTNAME')}}
			</div>
           
           <div class="col-md-12">
			
			DATE OF BIRTH:{{Session::get('DOB')}}
			</div>
           <div class="col-md-12">
			
			MOBILE NUMBER:{{Session::get('MOBILE')}}
			</div>
             <div class="col-md-12">
			
			EMAIL ID:{{Session::get('EMAILID')}}
			</div>
           
			<div class="col-md-12">
			
			Card Number:{{Session::get('cardno')}}
			</div>
            <div class="col-md-12">
			
			MMID:{{Session::get('MMID')}}
			</div>
            <div class="col-md-12">
			
			STATE:{{Session::get('STATE')}}
			</div>
            <div class="col-md-12">
			
			CITY:{{Session::get('CITY')}}
			</div>
            <div class="col-md-12">
			
			PINCODE:{{Session::get('PINCODE')}}
			</div>
           
			
			
			</div>
			</div>
			</div>
              <div class="row" >
                      <div class="col-md-12">
                        <div class="panel-footer">
                          <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                              <div class="btn-toolbar">
                                <a href="{{url('retailer/icash/manage')}}" class="btn-primary btn">BACK</a>
                                
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