@extends('layouts.admin')
@section('content')
<div id="page-content">
  <div id='wrap'>
    <div id="page-heading">
      <ol class="breadcrumb col-sm-6">
        <li><a href="<?php echo url('admin/dashboard');?>">Admin</a></li>
        <li>Franchise</li>
        <li>Manage Franchise</li>
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
                    <th>Franchise Name</th>
                    <th>Franchise Email</th>
                    <th>Franchise Mobile</th>
                    <th>Franchise Amount</th>
                    <th>Franchise Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                    <?php $i=1;  foreach ($senddata as $franchisedata){if($franchisedata->userType=="FR"){?>
                  <tr class="odd gradeX">
                    <td>{{$i}}</td>
                    <td>{{$franchisedata->userName}}</td>
                    <td>{{$franchisedata->userEmail}}</td>
                    <td>{{$franchisedata->userMobile}}</td>
                    <td>{{$franchisedata->currentBalance}}</td>
                    <td class="center"><?php if($franchisedata->userStatus=="A"){?><a  class='btn btn-success btn-xs'>Active</a> <?php }else {?><a  class='btn btn-danger btn-xs'>Deactive</a></td><?php } ?>
                    <td class="center"><a href="{{url('admin/franchise/show/'.$franchisedata->userIdPk)}}"><i class="fa fa-edit"></i></a> <a href="#" style="margin-left:10px;"><i class="fa fa-trash-o"></i> </a></td>
                  </tr>
                  <?php $i++;}}?>
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