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
              <div class="panel-body">
                <form class="form-horizontal" method="get" action="<?php echo url();?>/retailer/icash/transhistory">
                  <div class="form-group">
                <label class="col-sm-3 control-label">View Transactions form</label>
                <div class="col-sm-6">
          	           <div class="input-daterange input-group" id="datepicker3">
                        <input type="text" class="input-small form-control" ng-model="em_start_date" name="fromdate" value="" />
                        <span class="input-group-addon">to</span>
                        <input type="text" class="input-small form-control" name="todate" value="" />
                    </div>

                </div>
				
        @if ($errors->has('fromdate'))
      <p style="color:red;">{{$errors->first('fromdate')}}</p><br><br>
      @endif
      @if ($errors->has('todate'))
      <p style="color:red;">{{$errors->first('todate')}}</p><br><br>
      @endif
            </div>
                  <div class="form-group">
                    <label for="disabledinput" class="col-sm-3 control-label">Transaction Type</label>
                    <div class="col-sm-6">
                      <select name="transtype" class="form-control">
                        <option value="3">REMITTED</option>
                        <option value="5">REJECTION</option>
                        <option value="6">REFUND</option>

                      </select>
                      </div>
                      <div class="col-sm-3">
                      <p class="help-block">Please Select Transaction Type</p>
                    </div>
                    @if ($errors->has('number'))
      <p style="color:white;">{{$errors->first('number')}}</p><br><br>
      @endif
                  </div>
                   <div class="form-group">
                    <label for="disabledinput" class="col-sm-3 control-label">Transaction Mode</label>
                    <div class="col-sm-6">
                      <select name="transmode" class="form-control">
                      <option value="0">ALL</option>
                        <option value="1">IMPS(MMID)</option>
                        <option value="2">IMPS(IFSC)</option>
                        <option value="8">NEFT</option>
						

                      </select>
                      </div>
                      <div class="col-sm-3">
                      <p class="help-block">Please Select Transaction Type</p>
                    </div>
                    @if ($errors->has('number'))
      <p style="color:white;">{{$errors->first('number')}}</p><br><br>
      @endif
                  </div>
				  
                  
                 
                  <div class="btn-toolbar">
                      <input type="submit"   value="submit" class="btn-primary btn">
                      <a href="{{url('retailer/icash/manage')}}" class="btn-success btn">Back</a>
                     
                    </div>
                </form>
              </div>
              <!-- class="panel-footer">
                <div class="row">
                  <div class="col-sm-6 col-sm-offset-3">
                    <div class="btn-toolbar">
                      <button class="btn-primary btn">Submit</button>
                      <button class="btn-default btn">Cancel</button>
                    </div>
                  </div>
                </div>
              </div-->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h4>Recent Transaction</h4>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Transaction Id</th>
                            <th>Sender Name</th>
                            <th>Sender Mobile no</th>
                            <th>Beneficiary Name</th>
                            <th>Beneficiary Mobile no</th>
                            <th>Beneficiary Account type</th>
                            <th>Beneficiary IFSC code</th>
                            <th>Beneficiary Account NO</th>
                            <th>MMID</th>
                            <th>Transaction Amount </th>
                            <th>Transaction Date</th>
                            <th>Remarks</th>
                            <th>Transaction Status</th>
                            <th>Cancel Transaction For NEFT</th>                                    
                        </tr>
                    </thead>
                    <tbody>
                    <?php if($transferdata)

                    { if(isset($transferdata['ITEM']['TRANSACTIONID'])){?>
                    <tr>
                      <td>{{$transferdata['ITEM']['TRANSACTIONID']}}</td>
                            <td>{{$transferdata['ITEM']['SENDERNAME']}}</td>
                            <td>{{$transferdata['ITEM']['SENDERMOBILE']}}</td>
                            <td>{{$transferdata['ITEM']['BENENAME']}}</td>
                            <td>{{$transferdata['ITEM']['BENEMOBILE']}}</td>
                            <td>{{$transferdata['ITEM']['ACCOUNTTYPE']}}</td>
                            <td><?php if(isset($transferdata['ITEM']['IFSCCODE'])){echo $transferdata['ITEM']['IFSCCODE'];}?></td>
                            <td><?php if(isset($transferdata['ITEM']['TOACCOUNTNO'])){echo $transferdata['ITEM']['TOACCOUNTNO'];}?></td>
                            <td><?php if(isset($transferdata['ITEM']['MMID'])){echo $transferdata['ITEM']['MMID'];}?></td>
                            <td>{{$transferdata['ITEM']['TRANSACTIONAMOUNT']}}</td>
                            <td>{{$transferdata['ITEM']['DATETIME']}}</td>
                            <td>{{$transferdata['ITEM']['REMARKS']}}</td>
                            <td>{{$transferdata['ITEM']['TRANSACTIONSTATUS']}}</td>
                            <td><?php if($transferdata['ITEM']['ACCOUNTTYPE']=="Using NEFT"){?>
                            <a href="{{url('retailer/icash/neftcancelotp/'.$transferdata['ITEM']['MERCHANTRANSID'].'/'.strtotime($transferdata['ITEM']['DATETIME']))}}" class="btn-success btn-sm">cancel</a>
                            <?php } ?> </td>
                      </tr>
                    <?php }else{ foreach ($transferdata['ITEM'] as $data) {
                      
                    ?>
                    <tr>
                            <td>{{$data['TRANSACTIONID']}}</td>
                            <td><?php if(isset($data['SENDERNAME'])){echo $data['SENDERNAME'];}?></td>
                            <td><?php if(isset($data['SENDERMOBILE'])){echo $data['SENDERMOBILE'];}?></td>
                            <td>{{$data['BENENAME']}}</td>
                            <td>{{$data['BENEMOBILE']}}</td>
                            <td>{{$data['ACCOUNTTYPE']}}</td>
                            <td><?php if(isset($data['IFSCCODE'])){echo $data['IFSCCODE'];}?></td>
                            <td><?php if(isset($data['TOACCOUNTNO'])){echo $data['TOACCOUNTNO'];}?></td>
                            <td><?php if(isset($data['MMID'])){echo $data['MMID'];}?></td>
                            <td>{{$data['TRANSACTIONAMOUNT']}}</td>
                            <td>{{$data['DATETIME']}}</td>
                            <td>{{$data['REMARKS']}}</td>
                            <td>{{$data['TRANSACTIONSTATUS']}}</td>
                            <td><?php if($data['ACCOUNTTYPE']=="Using NEFT"){?>
                            <a href="{{url('retailer/icash/neftcancelotp/'.$data['MERCHANTRANSID'].'/'.strtotime($data['DATETIME']))}}" class="btn-success btn-sm">cancel</a>
                            <?php } ?> </td>
                    </tr>

                      <?php }}}else {?>
                        
                        
                       
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
      </div>
      <!-- row --> 
    </div>
    <!-- container --> 
  </div>
  <!-- wrap --> 
</div>

<!-- page-content -->


@stop