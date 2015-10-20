@extends('layouts.subretailer')
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
                    <div class="col-md-6">
                      <select class="form-control"  type="text" id="country" name="country" required="required" placeholder="Enter City Name">
                    <option value="">select country</option>
					<?php for($i=0;$i<count($city);$i++)
					{?>
					<option value="{{$city[$i]}}">{{$city[$i]}}</option>
					<?php } ?>
					</select>
					</div>
					<div id="countryerror"></div>
                  </div>
                 <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">City</label>
                    <div class="col-md-6">
                      <select class="form-control" id="city" type="text" name="formplace" required="required" placeholder="Enter City Name">
					  </select>
                    </div>
                  </div>
                	
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">Hotels</label>
                    <div class="col-md-6">
                      <input  class="form-control"  type="text" name="formplace" required="required" placeholder="Select Holtel">
                    </div>
                  </div>
                  
                   <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">Check In</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="datepicker" placeholder="Date of Arrivel">
                    </div>
                  </div>
                  
                  
                   <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">Check Out</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="datepicker"  placeholder="Date of Depature">
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
                    <label for="fieldurl" class="col-md-3 control-label">NO of Rooms</small></label>
                    <div class="col-md-6">
                      <select name="room" id="room" class="form-control">
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
                    <div class="col-md-6">
                     <select name="Adult" class="form-control">
                        <option value="Entire Place">Entire Place</option>
                        <option value="Private Room">Private Room</option>
                        <option value="Shared Room">Shared Room</option>
                       
                      </select>
                    </div>
                  </div>
                  
                    <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">Room Guest Details</label>
                    <div class="col-md-6" id="roomdata">
					<input type="text" name="noadult" value="">
					<input type="text" name="nochild" value="">
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