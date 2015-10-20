@extends('layouts.retailer')
@section('content')

  <div id="">
    <div id="wrap">
      <div id="page-heading">
        <ol class="breadcrumb">
          <li><a href="index.php">Dashboard</a></li>
          <li>Recharge</li>
          <li>DTH Recharge</li>
        </ol>
        <h1>DTH Recharge</h1>
       
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
                <h4>DTH Recharge</h4>
              </div>
              <div class="panel-body">
                <form class="form-horizontal" method="post" action="<?php echo url();?>/retailer/drecharge">
                  <div class="form-group">
                    <label for="focusedinput" class="col-sm-3 control-label">DTH Provider</label>
                    <div class="col-sm-6">
                      <select class="form-control" name="provider" id="serviceprovider_mobileprovider">
                        <option value="">Select</option>
                        
					  <?php foreach($serviceprovider as $providers)
					  { ?>
					  <option value="{{$providers}}" <?php if($providers==Input::old('provider')){echo "selected";}?> >{{$providers}}</option>
                        
					  <?php } ?>
					  </select>
                       @if ($errors->has('provider'))
      <p style="color:white;">{{$errors->first('provider')}}</p><br><br>
      @endif
                    </div>
                    <div class="col-sm-3">
                      <p class="help-block">Select DTH Provider</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="disabledinput" class="col-sm-3 control-label">Service Provider CA No.</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="disabledinput" placeholder="Service Provider CA No." name="number" value="{{Input::old('number')}}">
                    </div>
                    <div class="col-sm-3">
                      <p class="help-block">Enter Service Provider CA No./p> 
                    </div>
					 @if ($errors->has('number'))
      <p style="color:white;">{{$errors->first('number')}}</p><br><br>
      @endif
                  </div>
                  <div class="form-group">
                    <label for="disabledinput" class="col-sm-3 control-label">Recharge Amount</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="disabledinput" placeholder="Recharge Amount" name="amount" value="{{Input::old('amount')}}">
                    </div>
                    <div class="col-sm-3">
                      <p class="help-block">Enter Your Recharge Amount</p>
                     @if ($errors->has('amount'))
      <p style="color:white;">{{$errors->first('amount')}}</p><br><br>
      @endif
					</div>
					<input type="hidden" name="currentUserId" value="{{Session::get('user_name')}}">
                 <input type="hidden" name="currentUserIdPk" value="{{Session::get('user_id')}}">
                 <input type="hidden" name="clientIp" id="clientIp" value="">
                 <input type="hidden" name="prodCode" value="1101">
                 
                  </div>
                  <input type="submit" class="btn-primary btn" name="submit" value="submit">
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
                        <th style="padding-right:100px">Serive Provider</th>
                        <th>Service Provider CA No</th>
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
                        <?php } }
						else{?>
						<tr>
						<td>no data available</td>
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