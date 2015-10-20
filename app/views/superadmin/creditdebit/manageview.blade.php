@extends('layouts.superadmin')
@section('content')
<div id="page-content">
  <div id='wrap'>
    <div id="page-heading">
      <ol class="breadcrumb col-sm-6">
        <li><a href="<?php echo url('superadmin/dashboard');?>">Superadmin</a></li>
        <li>Credit / Debit</li>
        <li>Manage Credit / Debit</li>
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
              <h4>Site Settings</h4>
            </div>
            <div class="panel-body collapse in">
              <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Admin Name</th>
                    <th>Current Balance</th>
                    <th>total used</th>
                    <th>total Credited</th>
                   </tr>
                </thead>
                <tbody>
                  <?php $i=1; foreach($creditamount as $credits){?>
                  <tr class="odd gradeX">
                    <td>{{$i}}</td>
                 
                    <td>{{$credits->userId}}</td>
                    <td>{{$credits->currentBalance}}</td>
                    <td>{{$credits->totalUsed}}</td>
                    <td>{{$credits->totalCredited}}</td>
                    
                    </tr>
                  <?php $i++;} ?>
                
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