@extends('layouts.retailer')
@section('content')
<style>
body
{
	    color: #401724;
}
</style>
<link rel='stylesheet' type='text/css' href='{{url('')}}/assets/admin/plugins/form-select2/select2.css' /> 
<script type='text/javascript' src='{{url('')}}/assets/admin/plugins/form-select2/select2.min.js'></script> 
<script>
    $(function(){
      // turn the element to select2 select style
      $('#country').select2();
    });
  </script>
  <script>
    $(function(){
      // turn the element to select2 select style
      $('#city').select2();
    });
	$(function(){
      // turn the element to select2 select style
      $('#GuestNationality').select2();
    });
	jQuery(document).ready(function($){
    $('#room').change(function(){
        var n = $('.text-box').length + 1;
        if( 20 < n ) {
            alert('Stop it!');
            return false;
        }
		var box_html="";
		if(n>=$('#room').val())
		{
		alert($('#room').val());
		alert(n);
		for(var i=$('#room').val();i<n-1;i++)
		{
		alert(i);
		$('.my-form div.text-box:last').remove();
		}
		}
		for(var i=$('#room').val();n<=i;n++)
		{
         box_html = $('<div class="text-box" ><div class="form-group" id="box' + n + '" ><label  for="place' + n + '"  class="col-md-2 control-label">Room No <span class="box-number">' + n + '</span></label><div class="col-md-8">NO of Adults:<input  class="form-control"  type="text" name="noadult[]" required="required" placeholder="Enter Number of Adults">NO of Childs:<input  class="form-control"  type="number" min="0" max="2" name="nochild[]" id="childage'+n+'" onchange="addage(this.id);" required="required" placeholder="Enter No of childs" style="margin-top:20px;"><div id="errorchildage'+n+'"></div><div id="countchildage'+n+'"></div></div></div></div>');
		 box_html.hide();
		 $('.my-form div.text-box:last').after(box_html);
        box_html.fadeIn('slow');
		 }
        
        
        return false;
    });
	});
	function addage(id)
	
	{
	var age_html="";
	var agecount=$('#'+id).val();
	if(isNaN(agecount))
	{
	$('#error'+id).text('please enter no of childs');
	}
	else
	{
	for(var i=1;i<=agecount;i++)
	{
	age_html+='Child age'+i+':<input  class="form-control"  type="text" name="childage[]" required="required" placeholder="Enter age of child">';
	
	}
	$('#count'+id).html(age_html);
	}
	}
  </script>


 


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
        <li>Search Hotels</li>
      </ol>
      <h1>Search Hotels</h1>
      
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-primary"> {{ Form::open(array('url'=>'retailer/hotel/search', 'method'=>'get','class'=>'form-horizontal')) }}
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
                  <h4>Choose Hotel Locations</h4>
                </div>
                <div class="panel-body">
                
                 <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">Country</label>
                    <div class="col-md-6">
                      <select class="populate" style="width:100%" type="text" id="country" name="CountryCode" required="required" placeholder="Enter City Name">
                    <option value="">select country</option>
					<?php foreach($city as $country)
					{?>
					<option value="{{$country['CODE']}}">{{$country['NAME']}}</option>
					<?php } ?>
					</select>
					</div>
					<div id="countryerror"></div>
                  </div>
                 <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">City</label>
                    <div class="col-md-6">
                      <select class="populate" style="width:100%" id="city" type="text" name="CityId" required="required" placeholder="Enter City Name">
					  </select>
                    </div>
                  </div>
                	
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">Hotels</label>
                    <div class="col-md-6">
                      <input  class="form-control"  type="text" name="PreferredHotel"  placeholder="Select Holtel">
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">Maximum Rating</small></label>
                    <div class="col-md-6">
                      <select name="MaxRating" id="maxrating" class="form-control">
                        <option value="1" >1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5" selected="selected">5</option>
                        </select>
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">Minimum Rating</small></label>
                    <div class="col-md-6">
                      <select name="MinRating" id="MinRating" class="form-control">
                        <option value="1" selected="selected">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5" >5</option>
                        </select>
                    </div>
                  </div>
                  
                   <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">Check In</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control" id="datepicker" required="required" placeholder="Date of Arrivel" name="CheckInDate">
                    </div>
                  </div>
                  
                  
                   <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">No of Nights</label>
                    <div class="col-md-6">
                      <input type="number" min="1" max="10" class="form-control" required="required"  placeholder="enter Number of nights" name="NoOfNights">
                    </div>
                  </div>
				  
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">please select Your Nationality</label>
                    <div class="col-md-6">
                      <select class="populate" style="width:100%" type="text" id="GuestNationality" name="GuestNationality" required="required" placeholder="Enter City Name">
                    <option value="">select country</option>
					<?php foreach($city as $country)
					{?>
					<option value="{{$country['CODE']}}">{{$country['NAME']}}</option>
					<?php } ?>
					</select>
					</div>
					<div id="countryerror"></div>
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
                      <select name="NoOfRooms" id="room" class="form-control">
                        <option value="1" selected="selected">1</option>
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
                  
                  
                  
                    <div  class="my-form">
                <div class="text-box">
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-2 control-label">Room No: 1</label>
                    <div class="col-md-8">
                      <input  class="form-control" required="required" type="text" name="noadult[]" required="required" placeholder="Enter no of adult for room">
                      <input  class="form-control" required="required" type="number" id="childage1" onchange="addage(this.id);" min="0" max="2" name="nochild[]" required="required" placeholder="Enter no of Child per room" style="margin-top:20px;">
                    <div id="countchildage1"></div>
                    </div>
                      
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