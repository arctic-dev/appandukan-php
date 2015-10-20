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
          <div class="panel panel-primary"> {{ Form::open(array('url'=>'retailer/itr/create','id'=>'validate-form','data-validate'=>'parsley', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data')) }}
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
               
                <div class="panel-body">
                    <div class="form-group">
                    <label for="fieldurl" class="col-md-5 control-label" style="text-align: left;">Name</label>
                    <div class="col-md-3">
                      <input  class="form-control"  type="text" name="name" required="required" placeholder="Name">
                    </div>
                  </div>
                 <div class="form-group">
                    <label for="fieldurl" class="col-md-5 control-label" style="text-align: left;">Pan Card Copy</label>
                    <div class="col-md-3">
                      <input  class="form-control"  type="file" name="pan" required="required" accept="image/jpeg,image/jpg,image/jpeg,image/gif,application/pdf"  placeholder="">
                    </div>
                  </div>
				<div class="form-group">
                    <label for="fieldurl" class="col-md-5 control-label" style="text-align: left;">Bank Statement For The Financial Year For Which Return To Be Filed</label>
                    <div class="col-md-3">
                      <input  class="form-control"  type="file" name="bank" accept="image/jpeg,image/jpg,image/jpeg,image/gif,application/pdf" required="required" placeholder="">
                    </div>
                  </div>
				   <div class="form-group">
                    <label for="fieldurl" class="col-md-5 control-label" style="text-align: left;">Form 16</label>
                    <div class="col-md-3">
                      <input  class="form-control"  type="file" name="form16" accept="image/jpeg,image/jpg,image/jpeg,image/gif,application/pdf" placeholder="">
                    </div>
                  </div>
				   <div class="form-group">
                    <label for="fieldurl" class="col-md-5 control-label" style="text-align: left;">TDS Certificate</label>
                    <div class="col-md-3">
                      <input  class="form-control"  type="file" name="tds" accept="image/jpeg,image/jpg,image/jpeg,image/gif,application/pdf" placeholder="">
                    </div>
                  </div>
				   <div class="form-group">
                    <label for="fieldurl" class="col-md-5 control-label" style="text-align: left;">Address Proof*</label>
                    <div class="col-md-3">
                      <input  class="form-control"  type="file" name="addrproof" accept="image/jpeg,image/jpg,image/jpeg,image/gif,application/pdf" required="required" placeholder="">
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="fieldurl" class="col-md-5 control-label" style="text-align: left;">Previous Year Filed ITR Copy If Any</label>
                    <div class="col-md-3">
                      <input  class="form-control"  type="file" name="itrcopy" accept="image/jpeg,image/jpg,image/jpeg,image/gif,application/pdf"  placeholder="">
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="fieldurl" class="col-md-5 control-label" style="text-align: left;">Bank A/C Name</label>
                    <div class="col-md-3">
                      <input  class="form-control"  type="text" name="bankacname" placeholder="">
                    </div>
                  </div>
				  
				 <div class="form-group">
                    <label for="fieldurl" class="col-md-5 control-label" style="text-align: left;">Bank A/C Type</label>
                    <div class="col-md-6">
					<input  class=""  type="radio" name="actype" value="savings"  placeholder="">&nbsp;&nbsp;&nbsp;Saving A/C &nbsp;&nbsp;&nbsp;
					<input  class=""  type="radio" name="actype" value="current" placeholder="">&nbsp;&nbsp;&nbsp;Current A/C
                    
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="fieldurl" class="col-md-5 control-label" style="text-align: left;">Bank A/C No</label>
                    <div class="col-md-3">
                      <input  class="form-control"  type="text" name="accno" maxlength="16"  placeholder="">
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="fieldurl" class="col-md-5 control-label" style="text-align: left;">IFSC Code</label>
                    <div class="col-md-3">
                      <input  class="form-control"  type="text" name="ifsccode" maxlength="11"  placeholder="">
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="fieldurl" class="col-md-5 control-label" style="text-align: left;">Investment Made During The Financial Year For Which Return To Be Filed</label>
                    <div class="col-md-3">
                      <input  class="form-control"  type="file" name="fyear" accept="image/jpeg,image/jpg,image/jpeg,image/gif,application/pdf"  placeholder="">
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="fieldurl" class="col-md-5 control-label" style="text-align: left;">Mobile No.*</label>
                    <div class="col-md-3">
                      <input  class="form-control"  type="text" name="mobileno" data-type="digits" maxlength="10" required="required" placeholder="">
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="fieldurl" class="col-md-5 control-label" style="text-align: left;">EMail Id*</label>
                    <div class="col-md-3">
                      <input  class="form-control"  type="text" name="email" data-type="email" required="required" placeholder="">
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