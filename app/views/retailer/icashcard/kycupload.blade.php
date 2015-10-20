@extends('layouts.retailer')
@section('content')
<script type='text/javascript' src='{{url('')}}/assets/admin/plugins/form-parsley/parsley.min.js'></script> 
<script type='text/javascript' src='{{url('')}}/assets/admin/demo/demo-formvalidation.js'></script> 
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
        <li>Icashcard</li>
      </ol>
      <h1>Icashcard</h1>
     
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
              <div class="panel-heading">
                <h4>Icashcard</h4>
              </div>
              
            </div>
            
            <div class="row" >
              <div class="col-md-12">
                <div class="row">
                {{ Form::open(array('url'=>'retailer/icash/updatekyc','enctype'=>'multipart/form-data', 'id'=>'validate-form','data-validate'=>'parsley','class'=>'form-horizontal')) }}
                  <div class="col-md-6"> 
                    <div class="col-md-12" style="margin-top:20px;">
                      <div class="panel-heading">
                        <h4>cashcard Name Details</h4>
                      </div>
                      <div class="panel-body">
                       <input name="kyc" type="hidden" class="kyc" id="kyc" value=2>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">First Name</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="firstname" required="required" placeholder="First Name" value="{{Session::get('NAME')}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Last Name</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="lastname" required="required" placeholder="Last Name" value="{{Session::get('LASTNAME')}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Middle Name</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="middlename" required="required" placeholder="Middle Name" value="{{Session::get('MIDDLENAME')}}">
                          </div>
                        </div>
                         <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Mother Name</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="maidenname" required="required" placeholder="Mother Name" value="{{Session::get('MOTHERMAIDENNAME')}}">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12" style="margin-top:20px;">
                      <div class="panel-heading">
                        <h4>Telephone number and Email ID details</h4>
                      </div>
                      <div class="panel-body">
                      <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Date Of Birth</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="dob" id="datepicker" required="required" placeholder="DD/MM/YY" value="{{Session::get('DOB')}}">
                          </div>
                        </div>
                      <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Mobile number</label>
                          <div class="col-md-6">
                            <input  class="form-control" data-type="digits"  type="text" maxlength="10" name="mobilenumber" required="required" placeholder="Telephone/Mobile number" value="{{Session::get('MOBILE')}}">
                          </div>
                        </div>
                      <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Email Id</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="mail" required="required" data-type="email" placeholder="Email Id" id="date" value="{{Session::get('EMAILID')}}">
                          </div>
                        </div>
                       
                        
                        
                      </div>
                    </div>
                    <div class="col-md-12" style="margin-top:20px;">
                      <div class="panel-heading">
                        <h4>Location Details</h4>
                      </div>
                      <div class="panel-body">                        
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">State</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="state" required="required" placeholder="State" value="{{Session::get('STATE')}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">City</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="city" required="required" placeholder="City" value="{{Session::get('CITY')}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Address </label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="address" required="required" placeholder="Address" value="{{Session::get('ADDRESS')}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Pincode</label>
                          <div class="col-md-6">
                            <input  class="form-control" data-type="digits" maxlength="6"  type="text" name="pincode" required="required" placeholder="Pincode" value="{{Session::get('PINCODE')}}">
                          </div>
                        </div>
                        
                      </div>
                    </div>
                    
                    
                  </div>
                  <div class="col-md-6" id="withkc"> 
                    
                    <div class="col-md-12" style="margin-top:20px;" id="proof">
                      <div class="panel-heading">
                        <h4>Proof Details</h4>
                      </div>
                      <div class="panel-body">                        
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Id proof type</label>
                          <div class="col-md-6">
                            <select name="useridprooftype1" class="form-control">
                                <option value="">Select ID Proof Type</option>
                                <option value="DRIVING LICENSE">DRIVING LICENSE</option>
                                <option value="Passport">PASSPORT</option>
                                <option value="PAN CARD">PAN CARD</option>
                                <option value="VoterId">VOTER Id-CARD</option>
                                <option value="Aadhaar card">Aadhaar card</option>
                               </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Id proof Number</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="Idproofno" required="required" placeholder="Id proof Number">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Id proof </label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="file" accept="image/jpeg,image/jpg,image/jpeg,image/gif,application/pdf" name="Idproof" required="required" placeholder="Id proof ">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Address proof type</label>
                          <div class="col-md-6">
                           <select name="addressproof" class="form-control">
                                    <option value="">Select Address Proof Type</option>
                                    <option value="DRIVING LICENSE">DRIVING LICENSE</option>
                                    <option value="PASSPORT">PASSPORT</option>
                                    <option value="voterid">VOTER I-CARD</option>
                                    <option value="Rationcard">Ration card</option>
                                   <option value="Aadhaar card">Aadhaar card</option>
                               </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Address proof Number</label>
                          <div class="col-md-6">
                           <input  class="form-control"  type="text" name="addproofno" required="required" placeholder="Address proof Number">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Address proof </label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="file" accept="image/jpeg,image/jpg,image/jpeg,image/gif,application/pdf" name="addrproof" required="required" placeholder="Address proof ">
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
                                <button class="btn-primary btn"onclick="javascript:$('#validate-form').parsley( 'validate' );" >Submit</button>
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
      </div>
    </div>
    <!-- container --> 
  </div>
  <!--wrap --> 
</div>
<!-- page-content --> 

@stop