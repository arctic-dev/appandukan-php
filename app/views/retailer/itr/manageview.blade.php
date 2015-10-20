@extends('layouts.retailer')
@section('content')
<div id="page-content">
  <div id='wrap'>
    <div id="page-heading">
      <ol class="breadcrumb">
        <li><a href="<?php echo url('retailer/dashboard');?>">Retailer</a></li>
        <li>ITR</li>
        <li>Manage ITR History</li>
      </ol>
      <h1>Manage ITR History</h1>
      
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
              <h4>ITR History</h4>
            </div>
            <div class="panel-body collapse in">
              <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables table-responsive" id="example">
                <thead>
                  <tr>
                    <th>ITR id</th>
                    <th>User Name</th>
                    <th>PAN Card</th>
                    <th>Bank Statement</th>
                    <th>Form 16</th>
                    <th>Tds Certificate</th>
                    <th>Address Proof</th>
                    <th>Bank Name</th>
                    <th>Bank Type</th>
                    <th>Bank Account</th>
                    <th>Ifsc Code</th>
                    <th>Mobile No</th>
                    <th>Email Id</th>
                    <th>User Id</th>
                    <th>Itr Status</th>
                    <th>Itr receipt</th>
                    
                   
                  </tr>
                </thead>
                <tbody>
                <?php if($itrhistory){foreach ($itrhistory as $data) {
                  if($data->itrStatus==0)
                  {
                   $update="on process";
                  }
                  elseif ($data->itrStatus==1) {
                    $update="on process";
                  }
                  else
                  {
                    $update="completed";
                  }
                  
                  ?>
                  <tr class="odd gradeX">
                    <td class="">{{$data->itrId}}</td>
                    <td class="">{{$data->itrName}}</td>
                    <td class=""><?php if(isset($data->itrPan))
                    {?>
                    <a target="_blank" href="{{url('./assets/itr/pan/'.$data->itrPan)}}">pan form</a>
                    <?php } ?></td>
                    <td class=""><?php if(isset($data->itrBankstatement))
                    {?><a target="_blank" href="{{url('./assets/itr/bankfile/'.$data->itrBankstatement)}}">bank statement</a>
                    <?php } ?></td>
                    <td class=""><?php if($data->itrForm)
                    {?>
                    <a target="_blank" href="{{url('./assets/itr/form16/'.$data->itrForm)}}">form16</a>
                    <?php } ?></td>
                    <td class=""><?php if($data->itrTdcertificate)
                    {?>
                    <a target="_blank" href="{{url('./assets/itr/tds/'.$data->itrTdcertificate)}}">tds</a>
                    <?php } ?></td>
                    <td class=""><a target="_blank" href="{{url('./assets/itr/addressproof/'.$data->itrAddrproof)}}">addressproof</a></td>
                    <td class="">{{$data->itrBankname}}</td>
                    <td class="">{{$data->itrBankaccttype}}</td>
                    <td class="">{{$data->itrBankacctno}}</td>
                    <td class="">{{$data->itrBankIfsc}}</td>
                    <td class="">{{$data->itrMobileno}}</td>
                    <td class="">{{$data->itrEmail}}</td>
                    <td class="">{{$data->itrCreatedby}}</td>
                    <td class="">{{$update}}</td>
                    <td class=""><?php if($data->itrReceipt)
                    {?>
                    <a target="_blank" href="{{url('./assets/itr/receipt/'.$data->itrReceipt)}}">Receipt</a>
                    <?php } ?></td>
                    
                     </tr>

                  <?php }}?>
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