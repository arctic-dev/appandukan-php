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
<?php $arr=explode('_',$benid); print_r($arr);?>
<div id="page-content">
  <div id='wrap'>
    <div id="page-heading">
      <ol class="breadcrumb">
        <li><a href="<?php echo url('retailer/dashboard');?>">Superadmin</a></li>
        <li>IMPS Money Transfer Form(<?php if($arr[1]==1){echo "IFSC";}else {echo "NEFT";
        }?>)</li>
        <li>IMPS Money Transfer Form(<?php if($arr[1]==1){echo "IFSC";}else {echo "NEFT";
        }?>)</li>
      </ol>
      <h1>IMPS Money Transfer Form(<?php if($arr[1]==1){echo "IFSC";}else {echo "NEFT";
        }?>)</h1>
   
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
             {{ Form::open(array('url'=>'retailer/icash/trans','method'=>'get', 'class'=>'form-horizontal')) }}
              <div class="panel-heading">
                <h4>IMPS Money Transfer</h4>
              </div>
              <div class="panel-body">
                <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">BENEFICIARY NAME</label>
                          <div class="col-md-6">
                          {{str_replace('_',' ',$name)}}
                            <input  class="form-control"  type="hidden" name="benname" required="required" placeholder="Beneficiary name" value="{{str_replace('_',' ',$name)}}">
                          <input  class="form-control"  type="hidden" name="benid" required="required" placeholder="Beneficiary name" value="{{$arr[0]}}">
                          <input  class="form-control"  type="hidden" name="type" required="required" placeholder="Beneficiary name" value="{{$arr[1]}}">
                          </div>
                        </div>

                <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">BENEFICIARY MOBILE</label>
                          <div class="col-md-6">
                          {{$mobile}}
                            <input  class="form-control"  type="hidden" name="benemobile" required="required" placeholder="Mobile No"  value="{{$mobile}}">
                          </div>
                        </div>
                 <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">BENEFICIARY IFSC CODE</label>
                          <div class="col-md-6">
                          {{$ifsc}}
                            <input  class="form-control"  type="hidden" name="ifsc" required="required" placeholder="Mobile No" value="{{$ifsc}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">BENEFICIARY ACCOUNT NUMBER</label>
                          <div class="col-md-6">
                          {{$accno}}
                            <input  class="form-control"  type="hidden" name="accno" required="required" placeholder="Mobile No" value="{{$accno}}">
                          </div>
                        </div>
                 <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">TRANSFER AMOUNT</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="transamount" required="required" placeholder="AMOUNT">
                          </div>
                        </div>                        
                        <div class="form-group">
                          <label for="fieldurl" class="col-md-3 control-label">REMARKS</label>
                          <div class="col-md-6">
                            <input  class="form-control"  type="text" name="remark" required="required" placeholder="Remarks">
                          </div>
                        </div>
              </div>
              <div class="row" >
                      <div class="col-md-12">
                        <div class="panel-footer">
                          <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                              <div class="btn-toolbar">
                                <button class="btn-primary btn">Submit</button>
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
    <!-- container --> 
  </div>
  <!--wrap --> 
</div>
<!-- page-content --> 

@stop