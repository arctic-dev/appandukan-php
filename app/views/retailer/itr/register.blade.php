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
        <li></li>
      </ol>
      <h3>FOR ITR-1 For Persons having Income from Salary</h3>
     
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-primary"> {{ Form::open(array('url'=>'retailer/itr/register','id'=>'validate-form','data-validate'=>'parsley', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data')) }}
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
             
              <div class="" style="" id="normal">
               
               <div class="panel-heading">
                <h4>Activate your Income Tax return now!!!  Get it activated in just Rs.99/-.</h4>
              </div>
                <div class="panel-body">
                    
                 <div class="form-group">
                    <label for="fieldurl" class="col-md-5 control-label" style="text-align: left;">Upload Your Photo</label>
                    <div class="col-md-3">
                      <input  class="form-control"  type="file" name="picture" required="required" accept="image/jpeg,image/jpg,image/jpeg,image/gif"  placeholder="">
                    </div>
                    <div class="col-md-3">
                      <p class="help-block">(Kindly Note:User has to upload their photo only.Service will not be activated for any non appropriate photo.) </p>
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
                        <button class="btn-primary btn" onclick="javascript:$('#validate-form').parsley( 'validate' );">Submit</button>
                        <a href="{{url('retailer/dashboard')}}" class="btn-default btn">Cancel</a>
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