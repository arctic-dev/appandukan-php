@extends('layouts.subretailer')
@section('content')
<div id="page-content">
  <div id='wrap'>
    <div id="page-heading">
      <ol class="breadcrumb col-sm-6">
        <li><a href="<?php echo url('subretailer/dashboard');?>">Sub Retailer</a></li>
        <li>Pan Card</li>
        <li>Manage Pan Card</li>
      </ol>
      <h1>&nbsp;</h1>
      <div class="options">
        <div class="btn-toolbar">
          <div class="btn-group hidden-xs"> <a href='#' class="btn btn-default dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cloud-download"></i><span class="hidden-xs hidden-sm hidden-md"> Export as</span> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Text File (*.txt)</a></li>
              <li><a href="#">Excel File (*.xlsx)</a></li>
              <li><a href="#">PDF File (*.pdf)</a></li>
            </ul>
          </div>
          <a href="#" class="btn btn-default hidden-xs"><i class="fa fa-cog"></i></a> </div>
      </div>
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
                  
                    <?php $i=1; if($pandata){ foreach($pandata as $pandatas){?>
                  <tr class="odd gradeX">
                    <td>{{$i}}</td>
					<td>
                      {{$pandatas->couponNo}}
                    </td>
                    
                    <td>
                      {{$pandatas->nameAbbrv}}
                    </td>
                   <td>{{$pandatas->contactNo}}</td>
					<td>{{date('Y-m-d',($pandatas->createdAt/1000))}}</td>
					<td>{{$pandatas->createdBy}}</td>
					<td class="center"><a target="_blank" href="{{url('subretailer/dashboard/receipt/'.$pandatas->idPk.'/'.$pandatas->couponNo.'/'.$pandatas->nameAbbrv.'/'.date('Y-m-d',($pandatas->createdAt/1000)))}}">View Receipt</a>
                    
                    <td class="center"><a  class='btn btn-success btn-xs'>{{$pandatas->refundStatus}}</a> <!--a  class='btn btn-danger btn-xs'>Failed</a--></td>
                    </tr>
                  <?php } } ?>
				  
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