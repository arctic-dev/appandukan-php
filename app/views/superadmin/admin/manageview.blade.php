@extends('layouts.superadmin')
@section('content')
<div id="page-content">
  <div id='wrap'>
    <div id="page-heading">
      <ol class="breadcrumb col-sm-6">
        <li><a href="<?php echo url('superadmin/dashboard');?>">Superadmin</a></li>
        <li>Admin</li>
        <li>Manage Admin</li>
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
              <h4>Admin</h4>
            </div>
            <div class="panel-body collapse in">
              <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Admin Name</th>
                    <th>Admin Email</th>
                    <th>Admin Mobile</th>
                    <th>Admin Amount</th>
                    <th>Admin Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php $i=1; if($senddata){ foreach ($senddata as $admindata){if($admindata->userType=="AD"){?>
                  <tr class="odd gradeX">
                    <td>{{$i}}</td>
                    <td>{{$admindata->userName}}</td>
                    <td>{{$admindata->userEmail}}</td>
                    <td>{{$admindata->userMobile}}</td>
                    <td>{{$admindata->currentBalance}}</td>
                    <td class="center"><?php if($admindata->userStatus=="A"){?><a  class='btn btn-success btn-xs'>Active</a> <?php }else {?><a  class='btn btn-danger btn-xs'>Deactive</a></td><?php } ?>
                    <td class="center"><a href="{{url('superadmin/admin/show/'.$admindata->userIdPk)}}"><i class="fa fa-edit"></i></a>  <a href="#" style="margin-left:10px;"><i class="fa fa-trash-o"></i> </a></td>
                  </tr>
                  
                <?php $i++;}}}?>
				
                  
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