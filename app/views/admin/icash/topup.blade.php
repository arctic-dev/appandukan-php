@extends('layouts.admin')
@section('content')
<script  src="<?php echo url('assets/admin/plugins/form-daterangepicker/daterangepicker.min.js')  ?>"></script>
<script  src="<?php echo url('assets/admin/plugins/form-datepicker/js/bootstrap-datepicker.js')  ?>"></script>
  <div class="form-group" style="display:none;">
  <label class="col-sm-3 control-label">Fullscreen Textarea</label>
  <div class="col-sm-6">
    <textarea class="form-control fullscreen"></textarea>
  </div>
</div>
<div id="page-content">
   <div id="wrap">
      <div id="page-heading">
        <ol class="breadcrumb">
          <li><a href="index.php">Dashboard</a></li>
          <li>Topup</li>
          <li>View Topup History</li>
        </ol>
        <h1>View Topup History</h1>
        <div class="options">
          <div class="btn-toolbar">
            <div class="btn-group hidden-xs"> <a href='#' class="btn btn-default dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cloud-download"></i><span class="hidden-sm"> Export as </span><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Text File (*.txt)</a></li>
                <li><a href="#">Excel File (*.xlsx)</a></li>
                <li><a href="#">PDF File (*.pdf)</a></li>
              </ul>
            </div>
            <a href="#" class="btn btn-default"><i class="fa fa-cog"></i></a> </div>
        </div>
      </div>
      <div class="container">
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
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h4>View Topup History</h4>
              </div>
              <div class="panel-body collapse in">
              <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                  <thead>
                        <tr>
                            <th>Transaction Id</th>
                            <th>Card Number</th>
                            <th>Mobile no</th>
                            <th>Amount</th>
                            <th>Charges</th>
                            
                            <th>By Id</th>
                            <th>Created Date</th>
                            
                            </tr>
                    </thead>
                    <tbody>
                    <?php if($topupdetails)

                    {  foreach ($topupdetails as $data) {
//print_r($data); exit;                    ?>
                    <tr>
                            <td>{{$data->icc_tranid}}</td>
                            <td>{{$data->icc_cardno}}</td>
                            <td>{{$data->icc_mobileno}}</td>
                            <td>{{$data->icc_topup_amount}}</td>
                            <td>{{$data->icc_servicecharge}}</td>
                            <td>{{$data->icc_created_by}}</td>
                            <td>{{$data->icc_created_at}}</td>
                            
                    </tr>

                      <?php }}else {?>
                        
                        
                       
						<tr>
						<tr>
                                                            
               <td>no Data available</td>         
						</tr>
					<?php } ?>	
                     
                        

                    </tbody>
                    
                </table>
            </div>
              
            </div>
          </div>
        </div>
      </div>
      <!-- row --> 
    </div>
    <!-- container --> 
  </div>
  <!-- wrap --> 
</div>

<!-- page-content -->


@stop