@extends('layouts.retailer')
@section('content')
<div id="page-content">
  <div id='wrap'>
    <div id="page-heading">
      <ol class="breadcrumb col-sm-6">
        <li><a href="<?php echo url('superadmin/dashboard');?>">Superadmin</a></li>
        <li>Pan Card</li>
        <li>Manage Pan Card</li>
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
              <h4>Top Up Details</h4>
            </div>
			<div class="container" style="border: 2px solid white;">
			<div class="head" style="  padding: 10px;  height: 40px;  border-bottom: 2px solid white;margin-left: -10px;  margin-right: -10px;">
			<div class="col-md-12">
      TOP UP
			</div>
			
			
			
			</div>
			</div>
			<div class="jumbtron" style="height:150px; ">
			
			<div class="container"style="padding-top: 50px;">
			<div class="col-md-12">
      <div class="form-group">
      <label for="fieldurl" class="col-md-3 control-label">Top Up Amount</label>
			{{$amount}}
			</div>
			</div>
			<div class="col-md-12">
      <div class="form-group">
      <label for="fieldurl" class="col-md-3 control-label">Recharge Fee</label>
	
			 {{$service}}
			</div>
      </div>
			<div class="col-md-12">
			<div class="form-group">
            <label for="fieldurl" class="col-md-3 control-label">Total Amount</label>
	
			{{$total}}
			</div>
      </div>
      <div class="col-md-6">
			<form action="{{url('retailer/icash/topupfin')}}" method="get">
      <div class="form-group">
      <label for="fieldurl" class="col-md-3 control-label">Top Up Amount</label>
      
     <input type="hidden" name="amount" required="required" value="{{$amount}}">
     <input type="hidden" name="service" required="required" value="{{$service}}">
     <input type="hidden" name="total" required="required" value="{{$total}}">
     
     </div>
     <input type="submit" class="btn-info btn-sm" value="confirm">   
      </form>
			
			</div>
			
			
			</div>
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