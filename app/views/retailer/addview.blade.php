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
        <li>Icashcard</li>
      </ol>
      <h1>Icashcard</h1>
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
              <div class="panel-body">
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-3 control-label">Select Type of User to Resiter</label>
                  <div class="col-sm-6">
                    <input type="radio" name="category_status" id="category_status" value="withoutkc"  />
                    New User with Non-KYC<br />
                    <input type="radio" name="category_status" id="category_status" value="withkc"  />
                    New User with KYC<br />
                    @if ($errors->has('category_status'))
                    <p style="color:red;">{{$errors->first('category_status')}}</p>
                    @endif </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6"> {{ Form::open(array('url'=>'superadmin/icashcard/store', 'class'=>'form-horizontal')) }}
                    <div class="col-md-12" style="margin-top:20px;">
                      <div class="panel-heading">
                        <h4>New User with Non-KYC</h4>
                      </div>
                      <div class="panel-body">
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">First Name *</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="lastname" required="required" placeholder="First Name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Mobile No. *</label>
                          <div class="col-sm-6">
                            <input  class="form-control"  type="text" name="lastname" required="required" placeholder="Mobile Number">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12" >
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
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                {{ Form::open(array('url'=>'superadmin/icashcard/store', 'class'=>'form-horizontal')) }}
                  <div class="col-md-6"> 
                    <div class="col-md-12" style="margin-top:20px;">
                      <div class="panel-heading">
                        <h4>cashcard Name Details</h4>
                      </div>
                      <div class="panel-body">
                       
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">First Name</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="firstname" required="required" placeholder="First Name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Last Name</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="lastname" required="required" placeholder="Last Name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Middle Name</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="middlename" required="required" placeholder="Middle Name">
                          </div>
                        </div>
                         <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Mother Name</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="middlename" required="required" placeholder="Mother Name">
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
                            <input  class="form-control"  type="text" name="lastname" id="datepicker" required="required" placeholder="DD/MM/YY">
                          </div>
                        </div>
                      <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Mobile number</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="lastname" required="required" placeholder="Telephone/Mobile number">
                          </div>
                        </div>
                      <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Email Id</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="firstname" required="required" placeholder="Email Id" id="date">
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
                            <input  class="form-control"  type="text" name="areacode" required="required" placeholder="State">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">City</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="city" required="required" placeholder="City">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Address </label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="address" required="required" placeholder="Address ">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Pincode</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="pincode" required="required" placeholder="Pincode ">
                          </div>
                        </div>
                        
                      </div>
                    </div>
                    
                    
                  </div>
                  <div class="col-md-6"> {{ Form::open(array('url'=>'superadmin/icashcard/store', 'class'=>'form-horizontal')) }}
                    
                    <div class="col-md-12" style="margin-top:20px;">
                      <div class="panel-heading">
                        <h4>Proof Details</h4>
                      </div>
                      <div class="panel-body">                        
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Id proof type</label>
                          <div class="col-md-6">
                            <select name="useridprooftype1" class="form-control">
                                <option value="">Select ID Proof Type</option>
                                <option value="1">DRIVING LICENSE</option>
                                <option value="2">PASSPORT</option>
                                <option value="3">PAN CARD</option>
                                <option value="4">VOTER I-CARD</option>
                                <option value="5">GOVT ISSUED I-CARD</option>
                                <option value="6">STUDENT I-CARD</option>
                                <option value="7">BANK PASSBOOK</option>
                                <option value="8">CREDIT CARD</option>
                                <option value="9">UNIQUE I-CARD</option>
                        	</select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Id proof Number</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="Id proof Number" required="required" placeholder="Id proof Number">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Id proof </label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="file" name="Id proof" required="required" placeholder="Id proof ">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Address proof type</label>
                          <div class="col-md-6">
                           <select name="useridprooftype1" class="form-control">
                                    <option value="">Select Address Proof Type</option>
                                    <option value="1">DRIVING LICENSE</option>
                                    <option value="2">PASSPORT</option>
                                    <option value="4">VOTER I-CARD</option>
                                    <option value="5">GOVT ISSUED I-CARD</option>
                                    <option value="6">STUDENT I-CARD</option>
                                    <option value="7">BANK PASSBOOK</option>
                                    <option value="8">CREDIT CARD</option>
                                    <option value="9">UNIQUE I-CARD</option>
                        	</select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Address proof Number</label>
                          <div class="col-md-6">
                           <input  class="form-control"  type="text" name="Address proof Number" required="required" placeholder="Address proof Number">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Address proof </label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="file" name="Address proof" required="required" placeholder="Address proof ">
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
        </div>
      </div>
    </div>
    <!-- container --> 
  </div>
  <!--wrap --> 
</div>
<!-- page-content --> 

@stop