@extends('layouts.franchise')
@section('content')
<div id="page-content">
  <div id='wrap'>
    <div id="page-heading">
      <ol class="breadcrumb col-sm-6">
        <li><a href="<?php echo url('superadmin/dashboard');?>">Superadmin</a></li>
        <li>Franchise</li>
        <li>Edit Franchise</li>
      </ol>
      <h1>&nbsp;</h1>
     
    </div>
    <div class="container">
      <div class="row">
        {{ Form::open(array('url'=>'franchise/subretailer/subr', 'method'=>'post','class'=>'form-horizontal')) }}
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
              <div class="col-md-6" >
              
               <div class="panel-heading">
                  <h4>This Franchise is Assigned to</h4>
                </div>
                <div class="panel-body">
                 <div class="form-group">
                      <label for="fieldname" class="col-md-3 control-label">Retailer For SubRetailer</label>
                      <div class="col-md-6">
                        <select class="form-control" name="userId" id="retailer" >
                            <?php foreach ($senddata as $senddatas) {?>
                              <option value="{{$senddatas->userIdPk}}">{{$senddatas->userId}}</option>
                                                          <?php } ?>
                        </select>
                      </div>
                    </div>
                 
                  
                </div>
              
                  
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="panel-footer">
              <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <div class="btn-toolbar">
                    <input type="submit" class="btn-primary btn">
                    <button class="btn-default btn">Cancel</button>
                  </div>
				  </form>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- container --> 
</div>
<!--wrap -->
</div>
<!-- page-content --> 

@stop