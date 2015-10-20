@extends('layouts.admin')
@section('content')
<div id="page-content">
  <div id='wrap'>
    <div id="page-heading">
      <ol class="breadcrumb col-sm-6">
        <li><a href="<?php echo url('admin/dashboard');?>">Admin</a></li>
        <li>Pan Card</li>
        <li>Manage Pan Card</li>
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
            <?php if(Session::has('sucess')){ ?>
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              {{Session::get('sucess')}} </div>
            <?php } ?>
            <div class="panel-heading">
              <h4>Manage Pan Forms</h4>
            </div>
            <div class="panel-body collapse in">
              <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Coupon Number</th>
                    <th>Customer Name</th>
                    <th>Phone Number</th>
					<th>created Date</th>
                    <th>created By</th>
                    
                    <th>Receipt</th>
                    
                    <th>Status</th>
                    
                  </tr>
                </thead>
                <tbody>
                  
                    <?php $i=1;  foreach ($pandata as $pandatas){?>
                  <tr class="odd gradeX">
                    <td>{{$i}}</td>
					<td>
                      {{$pandatas->pan_coupon_no}}
                    </td>
                    
                    <td>
                      {{$pandatas->pan_first_name}}
                    </td>
					
                    <td>{{$pandatas->pan_contact_no}}</td>
					<td>{{$pandatas->pan_created_at}}</td>
					<td>{{$pandatas->pan_created_by}}</td>
					
					 <td class="center"><a target="_blank" href="{{url('admin/recharge/receipt/'.$pandatas->pan_id_pk.'/'.$pandatas->pan_coupon_no.'/'.$pandatas->pan_name_abbrv.'/'.$pandatas->pan_created_at)}}">View Receipt</a>
                    <td class="center"><a  class='btn btn-success btn-xs'>{{$pandatas->pan_refund_status}}</a> </td>
                    
                  </tr>
                  <?php } ?>
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