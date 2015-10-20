@extends('layouts.retailer')
@section('content')
<script type='text/javascript' src='{{url('')}}/assets/admin/plugins/form-parsley/parsley.min.js'></script> 
<script type='text/javascript' src='{{url('')}}/assets/admin/plugins/demo/demo-formvalidation.js'></script> 
<style>
body
{
	    color: #401724;
}
</style>
<script type="text/javascript">
    $(document).ready(function(){
	var proof=$('#proof').html();
	    $("input[type='radio']").click(function(){
            var radioValue = $("input[name='category_status']:checked").val();
            if(radioValue=="withmmid"){
                $('#withbank').hide();
				
				 $('#withmmid').show();
				}
				else
				{
				$('#withbank').show();
				
				$('#withmmid').hide();
				
				}
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
              <div class="panel-body">
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-3 control-label">Select Type of Beneficiary</label>
                  <div class="col-sm-6">
                    <!--input type="radio" name="category_status" id="category_status" value="withmmid"  />
                    Add Beneficiary With MMID<br /-->
                    <input type="radio" name="category_status" id="category_status" value="withbank" checked />
                    Add Beneficiary with Bank Details<br />
                    @if ($errors->has('category_status'))
                    <p style="color:red;">{{$errors->first('category_status')}}</p>
                    @endif </div>
                </div>
              </div>
            </div>
            <div class="row" id="withmmid" style="display:none;">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6"> {{ Form::open(array('url'=>'retailer/icash/addbene','id'=>'validate-form','data-validate'=>'parsley','method'=>'get', 'class'=>'form-horizontal')) }}
                    <div class="col-md-12" style="margin-top:20px;">
                      <div class="panel-heading">
                        <h4>New Beneficiary with MMID</h4>
                      </div>
                      <div class="panel-body">
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Benficiary Name</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="benname" required="required" placeholder="First Name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Beneficiary MMID</label>
                          <div class="col-md-6">
                            <input  class="form-control"  data-type="digits" name="benmmid" maxlength="7" required="required" placeholder="Last Name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Beneficiary Mobile Number</label>
                          <div class="col-md-6">
                            <input  class="form-control"  data-type="digits" name="benmobile" maxlength="10" required="required" placeholder="Middle Name">
                          </div>
                          <input type="hidden" name="cardnumber" value="{{Session::get('cardno')}}">
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
                                  <button class="btn-primary btn" onclick="javascript:$('#validate-form').parsley( 'validate' );">Submit</button>
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
            
            <div class="row" id="withbank">
              <div class="col-md-12">
                <div class="row">
                {{ Form::open(array('url'=>'retailer/icash/addbene','id'=>'validate-form1','method'=>'get','data-validate'=>'parsley','enctype'=>'multipart/form-data' ,'class'=>'form-horizontal')) }}
                  <div class="col-md-6"> 
                    <div class="col-md-12" style="margin-top:20px;">
                      <div class="panel-heading">
                        <h4>Add Beneficiary with Bank Details</h4>
                      </div>
                      <div class="panel-body">
                        <div class="form-group">

                          <label for="fieldurl" class="col-md-3 control-label">Benficiary Name</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="benname" required="required" placeholder="First Name">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Beneficiary Mobile Number</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" data-type="digits" maxlength="10" name="benmobile" required="required" placeholder="Middle Name">
                          </div>
                        </div>
                         <input type="hidden" name="cardnumber" value="{{Session::get('cardno')}}">
                      </div>
                    </div>
                    
                    
                    
                    
                  </div>
                  <div class="col-md-6" > 
                    
                    <div class="col-md-12" style="margin-top:20px;" id="proof">
                      <div class="panel-heading">
                        <h4>Bank Details</h4>
                      </div>
                      <div class="panel-body">                        
                        
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Bank Name</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="bankname" required="required" placeholder="Id proof Number">
                          </div>
                        </div>
                       
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Branch Name</label>
                          <div class="col-md-6">
                           <input  class="form-control"  type="text" name="branchname" required="required" placeholder="Address proof Number">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">City</label>
                          <div class="col-md-6">
                           <input  class="form-control"  type="text" name="city" required="required" placeholder="Address proof Number">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">State</label>
                          <div class="col-md-6">
                           <input  class="form-control"  type="text" name="state" required="required" placeholder="Address proof Number">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">IFSC Code</label>
                          <div class="col-md-6">
                           <input  class="form-control"  type="text" data-type="alphanum" maxlength="11" name="ifsc" required="required" placeholder="Address proof Number">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">Account number</label>
                          <div class="col-md-6">
                           <input  class="form-control"  type="text" data-type="digits" maxlength="16" name="accno" required="required" placeholder="Address proof Number">
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
                                <button class="btn-primary btn" onclick="javascript:$('#validate-form1').parsley( 'validate' );">Submit</button>
                                <a href="{{url('retailer/icash/manage')}}" class="btn-default btn">Cancel</a>
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