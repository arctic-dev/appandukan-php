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
        <li><a href="<?php echo url('superadmin/dashboard');?>">Superadmin</a></li>
        <li>Add Pan Card ( 49A Form )</li>
      </ol>
      <h1>Add Pan Card ( 49A Form )</h1>
     
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-primary"> {{ Form::open(array('url'=>'retailer/pan', 'class'=>'form-horizontal')) }}
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
              <h4>Pan Card ( 49A Form ) Name Details</h4>
            </div>
            <div class="panel-body">
            
              <div class="form-group">
                <label for="fieldname" class="col-md-3 control-label">Please select Title</label>
                <div class="col-md-6">
                  <select class="form-control" name="title">
                    <option>Shri</option>
                    <option>Smt</option>
                    <option>Kumari</option>
                    <option>M/s</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="fieldurl" class="col-md-3 control-label">First Name</label>
                <div class="col-md-6">
                  <input  class="form-control"  type="text" name="firstName" required="required" placeholder="First Name" value="{{Input::old('firstName')}}">
                </div>
                 @if ($errors->has('firstName'))
      <p style="color:white;">{{$errors->first('firstName')}}</p><br><br>
      @endif
              </div>
               <div class="form-group">
                <label for="fieldurl" class="col-md-3 control-label">Last Name</label>
                <div class="col-md-6">
                  <input  class="form-control"  type="text" name="lastName" required="required" placeholder="Last Name" value="{{Input::old('lastName')}}">
                </div>
                @if ($errors->has('lastName'))
      <p style="color:white;">{{$errors->first('lastName')}}</p><br><br>
      @endif
              </div>
              <div class="form-group">
                <label for="fieldurl" class="col-md-3 control-label">Middle Name</label>
                <div class="col-md-6">
                  <input  class="form-control"  type="text" name="middleName" required="required" placeholder="Middle Name" value="{{Input::old('middleName')}}">
                </div>
                @if ($errors->has('middleName'))
      <p style="color:white;">{{$errors->first('middleName')}}</p><br><br>
      @endif
              </div>
              <input type="hidden" name="currentUserId" value="<?php echo Session::get('user_name');?>">
                              <input type="hidden" name="currentUserIdPk" value="<?php echo Session::get('user_id');?>">
                             <input type="hidden" name="clientIp" id="clientIp" value="">
       
            </div>
            </div>
             <div class="col-md-12" style="margin-top:20px;">
            <div class="panel-heading">
              <h4>Card and Date Details</h4>
            </div>
            <div class="panel-body">
            <legend style="font-size:16px;">Abbreviation of the Above name, as you would like it, to be printed on the PAN Card</legend>
            <div class="form-group">
                <label for="fieldurl" class="col-md-3 control-label"></label>
                <div class="col-md-6">
                  <input  class="form-control"  type="text" name="nameAbbrv" required="required" placeholder="Last Name" value="{{Input::old('nameAbbrv')}}">
                </div>
                 @if ($errors->has('nameAbbrv'))
      <p style="color:white;">{{$errors->first('nameAbbrv')}}</p><br><br>
      @endif
              </div>
            <legend style="font-size:16px;">Date of Birth/Incorporation/Agreement/Partnership or Trust Deed/Formation of Body of Individuals or Association of Persons</legend>
              
              <div class="form-group">
                <label for="fieldurl" class="col-md-3 control-label"></label>
                <div class="col-sm-6">
                    
                        <input type="text" class="form-control" name="dob" id="datepicker" value="{{Input::old('dob')}}">
                      
                    
                </div>
                @if ($errors->has('dob'))
      <p style="color:white;">{{$errors->first('dob')}}</p><br><br>
      @endif
              </div>
               
              
            </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="col-md-12">
            <div class="panel-heading">
              <h4>Pan Card ( 49A Form ) Name Details</h4>
            </div>
            <div class="panel-body">
            
              <legend style="font-size:16px;">Father's Name (Only 'Individual' applicants: Even married women should fill in father's name only)</legend>
              <div class="form-group">
                <label for="fieldurl" class="col-md-3 control-label">First Name</label>
                <div class="col-md-6">
                  <input  class="form-control"  type="text" name="fatherFname" required="required" placeholder="First Name" value="{{Input::old('fatherFname')}}">
                </div>
                 @if ($errors->has('fatherFname'))
      <p style="color:white;">{{$errors->first('fatherFname')}}</p><br><br>
      @endif
              </div>
              <div class="form-group">
                <label for="fieldurl" class="col-md-3 control-label">Last Name</label>
                <div class="col-md-6">
                  <input  class="form-control"  type="text" name="fatherLname" required="required" placeholder="Last Name" value="{{Input::old('fatherLname')}}">
                </div>
                 @if ($errors->has('fatherLname'))
      <p style="color:white;">{{$errors->first('fatherLname')}}</p><br><br>
      @endif
              </div> 
              <div class="form-group">
                <label for="fieldurl" class="col-md-3 control-label">Middle Name</label>
                <div class="col-md-6">
                  <input  class="form-control"  type="text" name="fatherMname" required="required" placeholder="Middle Name" value="{{Input::old('fatherMname')}}">
                </div>
                @if ($errors->has('fatherMname'))
      <p style="color:white;">{{$errors->first('fatherMname')}}</p><br><br>
      @endif
              </div>
            </div>
            </div>
             <div class="col-md-12" style="margin-top:20px;">
            <div class="panel-heading">
              <h4>Telephone number and Email ID details</h4>
            </div>
            <div class="panel-body">
            
            <div class="form-group">
                <label for="fieldurl" class="col-md-3 control-label">Country Code</label>
                <div class="col-md-6">
                  <input  class="form-control"  type="text" name="countryCode" required="required" placeholder="Country Code" value="{{Input::old('countryCode')}}">
                </div>
                @if ($errors->has('countryCode'))
      <p style="color:white;">{{$errors->first('countryCode')}}</p><br><br>
      @endif
              </div>
              
              <div class="form-group">
                <label for="fieldurl" class="col-md-3 control-label">Area/STD Code</label>
                <div class="col-md-6">
                  <input  class="form-control"  type="text" name="areaCode" required="required" placeholder="Area/STD Code" value="{{Input::old('areaCode')}}">
                </div>
                @if ($errors->has('areaCode'))
      <p style="color:white;">{{$errors->first('areaCode')}}</p><br><br>
      @endif
              </div>
              
              <div class="form-group">
                <label for="fieldurl" class="col-md-3 control-label">Telephone/Mobile number</label>
                <div class="col-md-6">
                  <input  class="form-control"  type="text" name="contactNo" required="required" placeholder="Telephone/Mobile number" value="{{Input::old('contactNo')}}">
                </div>
                 @if ($errors->has('contactNo'))
      <p style="color:white;">{{$errors->first('contactNo')}}</p><br><br>
      @endif
              </div>
          
              
              <div class="form-group">
                <label for="fieldurl" class="col-md-3 control-label">Email Id</label>
                <div class="col-md-6">
                  <input  class="form-control"  type="text" name="emailId" required="required" placeholder="Email Id" id="date" value="{{Input::old('emailId')}}">
                </div>
                @if ($errors->has('emailId'))
      <p style="color:white;">{{$errors->first('emailId')}}</p><br><br>
      @endif
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