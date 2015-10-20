@extends('layouts.admin')
@section('content')

<div id="page-content">
  <div id='wrap'>
    <div id="page-heading">
    
       <ol class="breadcrumb col-sm-6">
        <li><a href="<?php echo url('admin/dashboard');?>">Admin</a></li>
        <li>Site Settings</li>
      </ol>
        <h1>&nbsp;</h1>
     
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        	<div class="panel panel-primary">
          {{ Form::open(array('url'=>'admin/creditdebit/store', 'class'=>'form-horizontal')) }}
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
              <h4> Edit Credit / Debit</h4>
            </div>
            <div class="panel-body">
            
             <div class="form-group">
                      <label for="fieldname" class="col-md-3 control-label">Franchise Name</label>
                      <div class="col-md-6">
                        <select class="form-control" name="name">
                            <option>Franchise 1 </option>
                            <option>Franchise 2 </option>
                            <option>Franchise 3 </option>
                        </select>
                      </div>
                    </div>
              <div class="form-group">
                      <label for="fieldurl" class="col-md-3 control-label">Amount</label>
                      <div class="col-md-6">
                        <input  class="form-control"  type="text" name="userid" required="required">
                      </div>
                    </div>
            
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