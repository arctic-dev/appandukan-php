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
      $('#source').select2();
    });
  </script>
  <script>
    $(function(){
      // turn the element to select2 select style
      $('#destination').select2();
    });
  </script>
<script type="text/javascript">

$( document ).ready(function() {
  $("#multi").hide();
  
  
  $('body').on('focus',".datepicker_recurring_start", function(){
    $(this).datepicker();
});
  
  
});

function valueChanged()
{
    if($('#multicity').is(":checked"))   
	{
        $("#multi").show();
		$("#normal").hide();
	}
    else
	{
		  $("#multi").show();
		$("#normal").hide();
	}
}

function valueonewayChanged()
{
	if($('#oneway').is(":checked"))   
	{
          $("#multi").hide();
		$("#normal").show();
	}
}


function valueroundtripChanged()
{
	if($('#oneway').is(":checked"))   
	{
          $("#multi").hide();
		$("#normal").show();
	}
}


jQuery(document).ready(function($){
    $('.my-form .add-box').click(function(){
        var n = $('.text-box').length + 1;
        if( 20 < n ) {
            alert('Stop it!');
            return false;
        }
        var box_html = $('<div class="text-box" ><div class="form-group" id="box' + n + '" ><label  for="place' + n + '"  class="col-md-2 control-label">Place <span class="box-number">' + n + '</span></label><div class="col-md-8"><input  class="form-control"  type="text" name="formplace" required="required" placeholder="Enter From Place"><input  class="form-control"  type="text" name="toplace" required="required" placeholder="Enter To place" style="margin-top:20px;"><input  class="form-control datepicker_recurring_start"  type="text" name="date" required="required" placeholder="Select Date" style="margin-top:20px;" id="datepicker1"></div><a href="#" class="remove-box">Remove</a></div></div>');
        box_html.hide();
        $('.my-form div.text-box:last').after(box_html);
        box_html.fadeIn('slow');
        return false;
    });
    $('.my-form').on('click', '.remove-box', function(){
        $(this).parent().css( 'background-color', '#FF6C6C' );
        $(this).parent().fadeOut("slow", function() {
            $(this).remove();
            $('.box-number').each(function(index){
                $(this).text( index + 1 );
            });
        });
        return false;
    });
});
</script> 



<div id="page-content">
  <div id='wrap'>
    <div id="page-heading">
      <ol class="breadcrumb">
        <li><a href="<?php echo url('superadmin/dashboard');?>">Superadmin</a></li>
        <li>Search Bus Tickets</li>
      </ol>
      <h1>Search Bus Tickets</h1>
     
    </div>
    <div class="container">
      <div class="row">
	  
	  <div class="form-group" style="display:none;">
  <label class="col-sm-3 control-label">Fullscreen Textarea</label>
  <div class="col-sm-6">
    <textarea class="form-control fullscreen"></textarea>
  </div>
</div>
        <div class="col-md-12">
          <div class="panel panel-primary"> {{ Form::open(array('url'=>'retailer/bus/busdetail','method'=>'GET', 'class'=>'form-horizontal')) }}
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
			
			
			
              <!--div class="col-md-12">
                <div class="panel-heading">
                  <h4>Flight Travel Type</h4>
                </div>
                <div class="panel-body">
                  <div class="form-group">
                    <label for="fieldname" class="col-md-3 control-label">Travel Type</label>
                    <div class="col-md-6">
                      <input type="radio" id="oneway" name="round_trip" onchange="valueonewayChanged()"/>
                      One Way <br/>
                      <input type="radio" id="round_trip" name="round_trip" onchange="valueroundtripChanged()"/>
                      Round Trip<br/>
                    
                      
                    </div>
                  </div>
                </div>
              </div-->
              <div class="col-md-12" style="margin-top:20px;" id="normal">
                <div class="panel-heading">
                  <h4>Choose Travelling Places</h4>
                </div>
                <div class="panel-body">
				
				
				
			
				<!--div class="form-group">
                <label for="fieldurl" class="col-md-3 control-label">Dropdown with Search</label>

                    <div class="col-md-6">
                      <select id="source" style="width:100%" class="populate">
                    <option> 1</option>
                    <option> 2</option>
                    </select>
                    </div>
                  </div-->
				
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">Leaving Form</label>
                    <div class="col-md-6">
                      <select  class="populate"  style="width:100%" id="source" name="formplace" required="required" placeholder="Select Place">
					  <option value=""> select city</option>
					  <?php foreach($city as $cities)
					  {?>
					  <option value="{{$cities['REDBUSCITYCODE']}}">{{$cities['CITYNAME']}}</option>
					  <?php } ?>
					  </select>
					  <div id="sourecerror"></div>
					  <input type="hidden" name="sourcename" id="sourcename" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">Going To </label>
                    <div class="col-md-6">
                     <select  class="populate"  id="destination" style="width:100%" name="toplace" required="required" placeholder="Select Place">
					  <option value=""> select city</option>
					  </select>
                    </div>
					<div id="destinationerror"></div>
					  
					<input type="hidden" name="destinationname" id="destinationname" value="">
                    
                  </div>
                  
                  
                </div>
              </div>
              
            </div>
            <div class="col-md-6">
              <div class="col-md-12">
                <div class="panel-heading">
                  <h4>Seats and Timings</h4>
                </div>
                <div class="panel-body">
                  
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">Departure</label>
                    <div class="col-md-6">
                      <input  class="form-control"  type="text" name="formdate" required="required" placeholder="Depature" id="datepicker">
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