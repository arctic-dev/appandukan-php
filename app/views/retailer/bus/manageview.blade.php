@extends('layouts.superadmin')
@section('content')
<div id="page-content">
  <div id='wrap'>
    <div id="page-heading">
      <ol class="breadcrumb">
        <li><a href="<?php echo url('superadmin/dashboard');?>">Superadmin</a></li>
        <li>Pan Card</li>
        <li>Manage Flight Ticket Bookings</li>
      </ol>
      <h1>Manage Flight Ticket Bookings</h1>
      
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
              <h4>Flight Ticket Bookings</h4>
            </div>
            <div class="panel-body collapse in">
              <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Customer Name</th>
                    <th>Phone Number</th>
                    
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="odd gradeX">
                    <td>2</td>
                 
                    <td>Name 1</td>
                    <td>123456789</td>
                    <td class="center"><a  class='btn btn-success btn-xs'>Success</a> <a  class='btn btn-danger btn-xs'>Failed</a></td>
                    <td class="center"><a href="{{url('superadmin/franchise/show/1')}}"><i class="fa fa-edit"></i></a> <a href="#" style="margin-left:10px;"><i class="fa fa-trash-o"></i> </a></td>
                  </tr>
                  <tr class="even gradeC">
                    <td>3</td>
                 
                    <td>Name 1</td>
                    <td>123456789</td>
                    <td class="center"><a  class='btn btn-success btn-xs'>Success</a> <a  class='btn btn-danger btn-xs'>Failed</a></td>
                    <td class="center"><a href="{{url('superadmin/franchise/show/1')}}"><i class="fa fa-edit"></i></a> <a href="#" style="margin-left:10px;"><i class="fa fa-trash-o"></i> </a></td>
                  </tr>
                  <tr class="odd gradeA">
                    <td>1</td>
                 
                    <td>Name 1</td>
                    <td>123456789</td>
                    <td class="center"><a  class='btn btn-success btn-xs'>Success</a> <a  class='btn btn-danger btn-xs'>Failed</a></td>
                    <td class="center"><a href="{{url('superadmin/franchise/show/1')}}"><i class="fa fa-edit"></i></a> <a href="#" style="margin-left:10px;"><i class="fa fa-trash-o"></i> </a></td>
                  </tr>
                  <tr class="even gradeA">
                   <td>4</td>
                 
                    <td>Name 1</td>
                    <td>123456789</td>
                    <td class="center"><a  class='btn btn-success btn-xs'>Success</a> <a  class='btn btn-danger btn-xs'>Failed</a></td>
                    <td class="center"><a href="{{url('superadmin/franchise/show/1')}}"><i class="fa fa-edit"></i></a> <a href="#" style="margin-left:10px;"><i class="fa fa-trash-o"></i> </a></td>
                  </tr>
                  <tr class="odd gradeA">
                    <td>5</td>
                 
                    <td>Name 1</td>
                    <td>123456789</td>
                    <td class="center"><a  class='btn btn-success btn-xs'>Success</a> <a  class='btn btn-danger btn-xs'>Failed</a></td>
                    <td class="center"><a href="{{url('superadmin/franchise/show/1')}}"><i class="fa fa-edit"></i></a> <a href="#" style="margin-left:10px;"><i class="fa fa-trash-o"></i> </a></td>
                  </tr>
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