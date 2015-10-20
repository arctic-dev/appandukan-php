@extends('layouts.subretailer')
@section('content')
  <div id="">
    <div id="wrap">
      <div id="page-heading">
        <ol class="breadcrumb">
          <li><a href="index.php">Dashboard</a></li>
          <li>Recharge</li>
          <li>Prepaid</li>
        </ol>
        <h1>Pre Paid Recharge</h1>
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
       <?php if(Session::has('sucess')){ ?>
      <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{Session::get('sucess')}} </div>
      <?php } ?>
      
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h4>Pre Paid Recharge</h4>
              </div>
              <div class="panel-body">
                <form class="form-horizontal" method="post" action="<?php echo url();?>/subretailer/dashboard/mprepaidrecharge">
                  <div class="form-group">
                    <label for="focusedinput" class="col-sm-3 control-label">Mobile Recharge</label>
                    <div class="col-sm-6">
                     
                      <select class="form-control" name="provider" id="serviceprovider_mobileprovider">
					  <option value="">Select</option>
                        
					  <?php foreach($serviceprovider as $providers)
					  {?>
					  <option value="{{$providers}}">{{$providers}}</option>
                        
					  <?php } ?>
                        </select>
                    </div>
                    <div class="col-sm-3">
                      <p class="help-block">Select Mobile Operator</p>
                    </div>
                     @if ($errors->has('provider'))
      <p style="color:white;">{{$errors->first('provider')}}</p><br><br>
      @endif
                  </div>
                  <div class="form-group">
                    <label for="disabledinput" class="col-sm-3 control-label">Mobile Number</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="disabledinput" placeholder="Service Provider" name="number">
                    </div>
                      <div class="col-sm-3">
                      <p class="help-block">Enter Your Mobile Number</p>
                    </div>
                    @if ($errors->has('number'))
      <p style="color:white;">{{$errors->first('number')}}</p><br><br>
      @endif
                  </div>
                   <div class="form-group">
                    <label for="disabledinput" class="col-sm-3 control-label">Recharge Amount</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="disabledinput" placeholder="Recharge Amount" name="amount">
                    </div>
                      <div class="col-sm-3">
                      <p class="help-block">Enter Your Recharge Amount</p>
                    </div>
                       @if ($errors->has('amount'))
      <p style="color:white;">{{$errors->first('amount')}}</p><br><br>
      @endif
                  </div>
                 <input type="hidden" name="currentUserId" value="{{Session::get('user_name')}}">
                 <input type="hidden" name="currentUserIdPk" value="{{Session::get('user_id')}}">
                 <input type="hidden" name="clientIp" id="clientIp" value="">
                 <input type="hidden" name="prodCode" value="1002">
                  <div class="btn-toolbar">
                      <input type="submit"  value="submit" class="btn-primary btn">
                      
                    </div>
                </form>
              </div>
              <!--div class="panel-footer">
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
                <h4>Recent Recharge</h4>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="padding-right:100px">Mobile Number</th>
                            <th>Operator</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($mobilerecharge){ foreach ($mobilerecharge as $recharges) {?>
                        <tr>
                        
                            <td>{{$recharges->number}}</td>
                            <td>{{$recharges->serviceProvider}}</td>
                            <td>{{$recharges->amount}}</td>
                              <td class="center"><?php if($recharges->result=="success"){?><a  class='btn btn-success btn-xs'>Success</a><?php }else { ?><a  class='btn btn-danger btn-xs'>Pending</a><?php } ?></td>
                           
                        </tr>
                        <?php }} ?>
                      

                        

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