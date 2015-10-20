@extends('layouts.superadmin')
@section('content')
<style>
body
{
	    color: #401724;
}
</style>



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
              <div class="col-md-12">
                <div class="panel-heading">
                  <h4>Flight Travel Type</h4>
                </div>
                <div class="panel-body">
                  <div class="form-group">
                    <label for="fieldname" class="col-md-3 control-label">Travel Type</label>
                    <div class="col-md-6">
                      <input type="radio" id="round_trip" name="round_trip" onchange="valueroundtripChanged()"/>
                      Round Trip<br/>
                      <input type="radio" id="oneway" name="round_trip" onchange="valueonewayChanged()"/>
                      One Way <br/>
                      
                      <input type="radio" id="multicity" name="round_trip" onchange="valueChanged()"/>
                      Multi City<br/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12" style="margin-top:20px;" id="normal">
                <div class="panel-heading">
                  <h4>Choose Travelling Places</h4>
                </div>
                <div class="panel-body">
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">From</label>
                    <div class="col-md-6">
                      <input  class="form-control"  type="text" name="formplace" required="required" placeholder="Select Place">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">TO </label>
                    <div class="col-md-6">
                      <input  class="form-control"  type="text" name="toplace" required="required" placeholder="Select Place">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">Depart</label>
                    <div class="col-md-6">
                      <input  class="form-control"  type="text" name="formdate" required="required" placeholder="Depart" id="datepicker">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">Return</label>
                    <div class="col-md-6">
                      <input  class="form-control"  type="text" name="formdate" required="required" placeholder="Return" id="datepicker">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12" style="margin-top:20px;" id="multi">
                <div class="panel-heading">
                  <h4>Choose Travelling Places</h4>
                </div>
                <div class="panel-body">
                <div  class="my-form">
                <div class="text-box">
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-2 control-label">Place 1</label>
                    <div class="col-md-8">
                      <input  class="form-control"  type="text" name="formplace" required="required" placeholder="Enter From Place">
                      <input  class="form-control"  type="text" name="toplace" required="required" placeholder="Enter To place" style="margin-top:20px;">
                      <input  class="form-control datepicker_recurring_start"  type="text" name="date" required="required" placeholder="Select Date" style="margin-top:20px;" id="datepicker" >
                    </div>
                      <div class="col-md-2"> <a class="add-box" href="#">Add More</a></div>
                  </div>
                 </div>
                  
                  
                  
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="col-md-12">
                <div class="panel-heading">
                  <h4>Number of Persons</h4>
                </div>
                <div class="panel-body">
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">Adult &nbsp;<small>(12+ Years)</small></label>
                    <div class="col-md-6">
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
                    <label for="fieldurl" class="col-md-3 control-label">Children &nbsp;<small>(2 - 12 Years)</small></label>
                    <div class="col-md-6">
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
                    <label for="fieldurl" class="col-md-3 control-label">Infant(s) &nbsp;<small>(below 2 Years)</small></label>
                    <div class="col-md-6">
                      <select name="infant" class="form-control">
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
                    <label for="fieldurl" class="col-md-3 control-label">Cabin Class </label>
                    <div class="col-md-6">
                       <select name="Adult" class="form-control">
                        <option value="E">Economy</option>
                        <option value="B">Business</option>
                        <option value="F">First Class</option>
                        <option value="W">Premium Economy</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="fieldurl" class="col-md-3 control-label">Promotion Type</label>
                    <div class="col-md-6">
                       <select name="Adult" class="form-control">
                        <option value="E">Normal</option>
                        <option value="B">Business</option>
                        <option value="F">First Class</option>
                        </select>
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