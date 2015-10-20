@extends('layouts.retailer')
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
          <li>Transaction</li>
          <li>View Transaction History</li>
        </ol>
        <h1>View Transaction History</h1>
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
                <h4>View Transaction History</h4>
              </div>
              <div class="panel-body collapse in">
              <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                  <thead>
                        <tr>
                            <th>Transaction Id</th>
                            <th>Card Number</th>
                            <th>Transaction Type</th>
                            <th>Beneficiary ID</th>
                            <th>Beneficiary Mobile no</th>
                            <th>Beneficiary IFSC code</th>
                            <th>Beneficiary Account NO</th>
                            
                            <th>Transaction Amount </th>
                            <th>Transaction Fee </th>
                            <th>Transaction Date</th>
                            <th>Remarks</th>
                            <th>Transaction Status</th>
                            <th>BY Id</th>                                    
                        </tr>
                    </thead>
                    <tbody>
                    <?php if($transferdata)

                    {  foreach ($transferdata->transactionhistory as $data) {
//print_r($data); exit;                    ?>
                    <tr>
                            <td>{{$data->icc_tranid}}</td>
                            <td>{{$data->icc_cardno}}</td>
                            <td><?php if($data->icc_trantype==2){echo "IMPS";}else{echo "NEFT";}?></td>
                            <td>{{$data->icc_benid}}</td>
                            <td>{{$data->icc_tranmobile}}</td>
                            <td><?php if(isset($data->icc_ifsc)){echo $data->icc_ifsc;}?></td>
                            <td><?php if(isset($data->icc_trandesc)){echo $data->icc_trandesc;}?></td>
                            <td>{{$data->icc_tranamount}}</td>
                            <td>{{$data->icc_service}}</td>
                            <td>{{$data->icc_createdat}}</td>
                            <td>{{$data->icc_remark}}</td>
                            <td>{{$data->icc_transtatus}}</td>
                            <td>{{$data->icc_created_by}}</td>
                            
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