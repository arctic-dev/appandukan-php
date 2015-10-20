@extends('layouts.superadmin')
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
        <li><a href="<?php echo url('superadmin/dashboard');?>">Superadmin</a></li>
        <li>Search Flight Tickets</li>
      </ol>
      <h1>Search Flight Tickets</h1>
     
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-primary"> {{ Form::open(array('url'=>'superadmin/flight/store', 'class'=>'form-horizontal')) }}
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
            <div class="col-md-6">
              
              <div class="col-md-12" id="normal">
                <div class="panel-heading">
                  <h4>Choose Travelling Places</h4>
                </div>
                <div class="panel-body">
                
                 
                 <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">City</label>
                    <div class="col-md-9">
                      <input  class="form-control"  type="text" name="formplace" required="required" placeholder="Enter City Name">
                    </div>
                  </div>
                	
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">Hotels</label>
                    <div class="col-md-9">
                      <input  class="form-control"  type="text" name="formplace" required="required" placeholder="Select Holtel">
                    </div>
                  </div>
                  
                  <div class="form-group">
                        <label class="col-sm-3 control-label">Check In</label>
                        <div class="col-sm-9">
                            <div class="input-daterange input-group" id="datepicker3">
                                <input type="text" class="input-small form-control" name="start" placeholder="Date of Arrivel">
                                <span class="input-group-addon">Check out</span>
                                <input type="text" class="input-small form-control" name="end" placeholder="Date of Depature">
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              
            </div>
            <div class="col-md-6">
              <div class="col-md-12">
                <div class="panel-heading">
                  <h4>Number of Persons and Price</h4>
                </div>
                <div class="panel-body">
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">Guest</small></label>
                    <div class="col-md-9">
                      <select name="Adult" class="form-control">
                        <option value="1" selected="">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                      </select>
                    </div>
                  </div>
                  
                   <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">Room Type</label>
                    <div class="col-md-9">
                     <select name="Adult" class="form-control">
                        <option value="Entire Place">Entire Place</option>
                        <option value="Private Room">Private Room</option>
                        <option value="Shared Room">Shared Room</option>
                       
                      </select>
                    </div>
                  </div>
                  
                   
                  
                  <div class="form-group">
                        <label class="col-sm-3 control-label">Min Price</label>
                        <div class="col-sm-9">
                            <div class="input-group" >
                                <input type="text" class="input-small form-control" name="start" placeholder="Minimum Price">
                                <span class="input-group-addon">Max Price</span>
                                <input type="text" class="input-small form-control" name="end" placeholder="Minimum Price">
                            </div>
                        </div>
                    </div>
                  
                   
                  
                   
                   
                  
                  
                  
                </div>
              </div>
              
            </div>
            <div class="col-md-12" style="margin-top:20px;">
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
    <!-- container --> 
  </div>
  <!--wrap --> 
</div>
<!-- page-content --> 

@stop