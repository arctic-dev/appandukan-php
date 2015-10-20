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
        <li>Conmplete Registration</li>
        <li>OTP Form</li>
      </ol>
      <h1>OTP Form</h1>
    
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
             {{ Form::open(array('url'=>'retailer/icash/mpin','method'=>'get', 'class'=>'form-horizontal')) }}
              <div class="panel-heading">
                <h4>IMPS Waalet Form</h4>
              </div>
              <div class="panel-body">
                <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Enter Your Mpin For Future Reference</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="mpin" required="required" placeholder="User Parent">
                          </div>
                        </div>
						<input type="hidden" name="fname" value="{{$input['NAME']}}">
            <input type="hidden" name="middlename" value="{{$input['MIDDLENAME']}}">
            <input type="hidden" name="lastname" value="{{$input['LASTNAME']}}">
            <input type="hidden" name="dob" value="{{$input['DOB']}}">
            <input type="hidden" name="emailid" value="{{$input['EMAILID']}}">
            <input type="hidden" name="pincode" value="{{$input['PINCODE']}}">
            <input type="hidden" name="address" value="{{$input['ADDRESS']}}">
            <input type="hidden" name="city" value="{{$input['CITY']}}">
            <input type="hidden" name="state" value="{{$input['STATE']}}">
            <input type="hidden" name="mobile" value="{{$input['MOBILE']}}">
            <input type="hidden" name="mothermaidenname" value="{{$input['MOTHERMAIDENNAME']}}">
            <input type="hidden" name="idprooftype" value="<?php if(isset($input['IDPROOFTYPE'])){echo $input['IDPROOFTYPE']; }else{
              echo "0";
            }?>">
            <input type="hidden" name="idproof" value="<?php if(isset($input['IDPROOF'])){echo $input['IDPROOF'];}else{
              echo "0";
            }?>">
            <input type="hidden" name="addressprooftype" value="<?php if(isset($input['ADDRESSPROOFTYPE'])){echo $input['ADDRESSPROOFTYPE'];}else{
              echo "0";
            }?>">
            <input type="hidden" name="addressproof" value="<?php if(isset($input['ADDRESSPROOF'])){echo $input['ADDRESSPROOF'];}else{
              echo "0";
            }?>">
            <input type="hidden" name="kycstatus" value="{{$input['KYCSTATUS']}}">
            <input type="hidden" name="kycremarks" value="<?php if(isset($input['KYCREMARKS'])){echo $input['KYCREMARKS'];}else{
              echo "0";
            }?>">
            <input type="hidden" name="cardno" value="{{$input['CARDNO']}}">
            <input type="hidden" name="transactionlimit" value="{{$input['TRANSACTIONLIMIT']}}">
            <input type="hidden" name="aadhaarno" value="<?php if(isset($input['AADHAARNO'])){echo $input['AADHAARNO'];}else{
              echo "0";
            }?>">
            <input type="hidden" name="aadhaarenable" value="{{$input['AADHAARENABLE']}}">
            <input type="hidden" name="photo" value="<?php if(isset($input['PHOTO'])){echo $input['PHOTO'];}else{
              echo "0";
            }?>">
            <input type="hidden" name="mmid" value="{{$input['MMID']}}">
            <input type="hidden" name="serialno" value="{{$input['SERIALNO']}}">
                       
              </div>
              <div class="row" >
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
    <!-- container --> 
  </div>
  <!--wrap --> 
</div>
<!-- page-content --> 

@stop