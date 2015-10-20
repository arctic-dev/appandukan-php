@extends('layouts.superadmin')
@section('content')

<div id="page-content">
  <div id='wrap'>
    <div id="page-heading">
    
       <ol class="breadcrumb col-sm-6">
        <li><a href="<?php echo url('superadmin/dashboard');?>">Superadmin</a></li>
        <li>Credit / Debit</li>
      </ol>
        <h1>&nbsp;</h1>
   
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        	<div class="panel panel-primary">
          {{ Form::open(array('url'=>'superadmin/creditdebit/create', 'method'=>'post','class'=>'form-horizontal')) }}
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
            <div class="panel-heading">
              <h4>Add Credit / Debit</h4>
            </div>
            <div class="panel-body">
            
             <div class="form-group">
                      <label for="fieldname" class="col-md-3 control-label">Admin Name</label>
                      <div class="col-md-6">
                        <select class="form-control" name="userIdPk" id="userIdPk">
                        <?php if($senddata){foreach ($senddata as $users) {if($users->userType=="AD"){?>
                          <option value="{{$users->userIdPk}}">{{$users->userId}}</option>
                        <?php }}}?> 
                            </select>
                            <input type="hidden" name="userId" id="userId" value="">
                        <input type="hidden" name="currentUserId" value="<?php echo Session::get('user_name');?>">
                         <input type="hidden" name="currentUserIdPk" value="<?php echo Session::get('user_id');?>">
                         <input type="hidden" name="parentId" value="<?php echo Session::get('user_name');?>">
                         <input type="hidden" name="parentIdPk" value="<?php echo Session::get('user_id');?>">
						 <input type="hidden" name="clientIP" id="clientIP" value="">
                    
                      </div>
                    </div>
              <div class="form-group">
                      <label for="fieldurl" class="col-md-3 control-label">Amount</label>
                      <div class="col-md-6">
                        <input  class="form-control"  type="text" name="amount"  value="0" required="required">
                      </div>
                    </div>

                        <input  class="form-control"  type="hidden" name="feePerc"  value="0" required="required">
                      
            
              <div class="form-group">
                <label for="radio" class="col-sm-3 control-label">Payment</label>
                <div class="col-sm-6">
                  <div class="radio block">
                    <label>
                      <input type="radio">
                     Debit</label>
                  </div>
                  <div class="radio block">
                    <label>
                      <input type="radio" >
                      Credit</label>
                  </div>
                </div>
              </div>
              
              
            </div>
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