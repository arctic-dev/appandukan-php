@extends('layouts.admin')
@section('content')
<div id="page-content">
  <div id='wrap'>
    <div id="page-heading">
      <ol class="breadcrumb col-sm-6">
        <li><a href="<?php echo url('admin/dashboard');?>">Admin</a></li>
        <li>Retailer</li>
        <li>Manage Retailer</li>
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
            <?php if(Session::has('success')){ ?>
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              {{Session::get('success')}} </div>
            <?php } ?>
            <div class="panel-heading">
              <h4>Site Settings</h4>
            </div>
            <div class="panel-body collapse in">
              <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Name</th>
                    <th>Status</th>
					<th>Provider</th>
					<th>FRC Commission</th>
					<th>DIS Commission</th>
					<th>SUP Commission</th>
					<th>SFR Commission</th>
					<th>S-FRC Commission</th>
					<th>S-DIS Commission</th>
                    
                  
                  </tr>
                </thead>
                <tbody>
                <?php if($service){ foreach($service as $services)
				{?>
                <tr>
                 <td>{{$services->rm_id_pk}}</td>
				 <td>{{$services->rm_name}}</td>
				 <td>
				     <input type="radio" name="" value="1"  onclick="updatecommission(this.value,'{{$services->rm_id_pk}}','rm_status');" <?php if($services->rm_status==1){echo "checked"; }?>>Enable <br>
		             <input type="radio" name="" value="0" onclick="updatecommission(this.value,'{{$services->rm_id_pk}}','rm_status');" <?php if($services->rm_status!=1){echo "checked"; }?>>Disable		 
				 </td>
				 <td>
				      <input type="radio" name="{{$services->rm_name}}" onclick="updatecommission(this.value,'{{$services->rm_id_pk}}','rm_provider');" value="Cyberplat" <?php if($services->rm_provider=="Cyberplat"){echo "checked"; }?>>cyberplot <br>
		             <input type="radio" name="{{$services->rm_name}}"  onclick="updatecommission(this.value,'{{$services->rm_id_pk}}','rm_provider');" value="Ezypay"<?php if($services->rm_provider=="Ezypay"){echo "checked"; }?>>ezypay		 
				 
				 </td>
				 <td>
				    <input type="text" name="frc" value="{{$services->rm_commission}}" onchange="updatecommission(this.value,'{{$services->rm_id_pk}}','rm_commission');" style="width: 70px;color: black;">
				 </td>
				 <td>
				    <input type="text" name="frc" value="{{$services->rm_dcommission}}" onchange="updatecommission(this.value,'{{$services->rm_id_pk}}','rm_dcommission');" style="width: 70px;color: black;">
				 </td>
				 <td>
				    <input type="text" name="frc" value="{{$services->rm_scommission}}" onchange="updatecommission(this.value,'{{$services->rm_id_pk}}','rm_scommission');" style="width: 70px;color: black;">
				 </td>
				 <td>
				   <input type="text" name="frc" value="{{$services->rm_sfcommission}}" onchange="updatecommission(this.value,'{{$services->rm_id_pk}}','rm_sfcommission');" style="width: 70px;color: black;">
				 </td>
				 <td>
				   <input type="text" name="frc" value="{{$services->rm_fcommission}}" onchange="updatecommission(this.value,'{{$services->rm_id_pk}}','rm_fcommission');" style="width: 70px;color: black;">
				 </td>
				 <td>
				    <input type="text" name="frc" value="{{$services->rm_sdcommission}}" onchange="updatecommission(this.value,'{{$services->rm_id_pk}}','rm_sdcommission');"style="width: 70px;color: black;">
				 </td>
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