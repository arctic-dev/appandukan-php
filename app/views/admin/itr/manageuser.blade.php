@extends('layouts.admin')
@section('content')
<div id="page-content">
  <div id='wrap'>
    <div id="page-heading">
      <ol class="breadcrumb">
        <li><a href="<?php echo url('admin/dashboard');?>">Retailer</a></li>
        <li>ITR</li>
        <li>Manage ITR History</li>
      </ol>
      <h1>Manage ITR History</h1>
      
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
              <h4>ITR History</h4>
            </div>
            <div class="panel-body collapse in">
              <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                <thead>
                  <tr>
                    <th>user id</th>
                    <th>User Name</th>
                    <th>User Type</th>
                    <th>Service active/Deactive</th>
                    <th>User Picture</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1; if($itrform){foreach ($itrform as $data) {
                  if($data->prodStatus=="1" && isset($data->userImageUrl))
                  {
                    $status="<a href=".url('admin/itr/update')." class='btn-success btn-sm'>itr activated</a>";
                  }
                  elseif($data->prodStatus=="0")
                  {
                    $status="<button class='btn-info btn-sm'>itr activated but irrelevent photo</button";
                  }
                  ?>
                  <tr class="odd gradeX">
                    <td>{{$data->userIdPk}}</td>
                    <td>{{$data->userId}}</td>
                    <td>{{$data->userType}}</td>
                    <td>{{$status}}</td>
                    <td><?php if($data->userImageUrl){?><img src="{{url('./assets/itr/picture/'.$data->userImageUrl)}}" width="50px">
                    <?php } ?></td>
                    
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