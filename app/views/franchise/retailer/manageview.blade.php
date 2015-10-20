@extends('layouts.franchise')
@section('content')
<div id="page-content">
  <div id='wrap'>
    <div id="page-heading">
      <ol class="breadcrumb col-sm-6">
        <li><a href="<?php echo url('franchise/dashboard');?>">Franchise</a></li>
        <li>Retailer</li>
        <li>Manage Retailer</li>
      </ol>
      <h1>&nbsp;</h1>
     
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
            <?php if(Session::has('success')){ ?>
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              {{Session::get('success')}} </div>
            <?php } ?>
            <div class="panel-heading">
              <h4>Site Settings</h4>
            </div>
            <div class="panel-body collapse in">
              <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Retailer Name</th>
                    <th>Retailer Email</th>
                    <th>Retailer Mobile</th>
                    <th>Retailer Amount</th>
                    <th>Retailer Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1;  foreach ($senddata as $retailerdata){if($retailerdata->userType=="RT"){?>
                
                  <tr class="odd gradeX">
                    <td>{{$i}}</td>
                    <td>{{$retailerdata->userName}}</td>
                    <td>{{$retailerdata->userEmail}}</td>
                    <td>{{$retailerdata->userMobile}}</td>
                    <td>{{$retailerdata->currentBalance}}</td>
                    <td class="center"><?php if($retailerdata->userStatus=="A"){?><a  class='btn btn-success btn-xs'>Active</a> <?php }else {?><a  class='btn btn-danger btn-xs'>Deactive</a></td><?php } ?>
                    <td class="center"><a href="{{url('franchise/retailer/show/'.$retailerdata->userIdPk)}}"><i class="fa fa-edit"></i></a> <a href="#" style="margin-left:10px;"><i class="fa fa-trash-o"></i> </a></td>
                  </tr>
                  <?php $i++;}}?></tr>
                 
                </tbody>
              </table>
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