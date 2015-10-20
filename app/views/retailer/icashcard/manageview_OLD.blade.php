@extends('layouts.retailer')
@section('content')
<div id="page-content">
  <div id='wrap'>
    <div id="page-heading">
      <ol class="breadcrumb col-sm-6">
        <li><a href="<?php echo url('superadmin/dashboard');?>">Superadmin</a></li>
        <li>Pan Card</li>
        <li>Manage Pan Card</li>
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
            <div class="table-responsive">
              <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                <thead>
                  <tr>
                    <th>ID NO</th>
                    <th>Credit Card Number</th>
                    <th>Trans Type</th>
                    <th>Total Fund Amount</th>
                    <th>Fee</th>
                    <th>Bank ID</th>
                    <th>Bank Account Number</th>
                    <th>Regsitered Mobile Number Transfer</th>
                    <th>Bank IFSC Code</th>
                    <th>Bill Mobile</th>
                    <th>Created</th>
                    <th>Remark</th>
                    <th>Status</th>
                    <th>By ID</th>
                  </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                  <tr >
                    <td class=" "><a href="index.php?geticashreceiptpdf&amp;receiptid=8218&amp;sessid=89">8218</a></td>
                    <td class="">3333004675035191</td>
                    <td class="">IMPS</td>
                    <td class="">5000</td>
                    <td class="">0</td>
                  
                    <td class="">1995668</td>
                    <td class="">31731525289</td>
                    <td class="">9308511774</td>
                    <td class="">SBIN0003560</td>
                    <td class="">8451008022</td>
                    <td class="">2015-09-01 11:54:58</td>
                    <td class=""></td>
                    <td class="">completed</td>
                    <td class="">89</td>
                  </tr>
                  <tr >
                    <td class=" "><a href="index.php?geticashreceiptpdf&amp;receiptid=8126&amp;sessid=89">8126</a></td>
                    <td class="">3333004675035191</td>
                    <td class="">IMPS</td>
                    <td class="">1900</td>
                    <td class="">0</td>
                   
                    <td class="">10856621</td>
                    <td class="">10352061377</td>
                    <td class="">9308511774</td>
                    <td class="">SBIN0014670</td>
                    <td class="">8451008022</td>
                    <td class="">2015-08-26 18:53:32</td>
                    <td class=""></td>
                    <td class="">completed</td>
                    <td class="">89</td>
                  </tr>
                  <tr >
                    <td class=" "><a href="index.php?geticashreceiptpdf&amp;receiptid=8125&amp;sessid=89">8125</a></td>
                    <td class="">3333004675035191</td>
                    <td class="">IMPS</td>
                    <td class="">100</td>
                    <td class="">0</td>
                    <td class="">10856621</td>
                    <td class="">10352061377</td>
                    <td class="">9308511774</td>
                    <td class="">SBIN0014670</td>
                    <td class="">8451008022</td>
                    <td class="">2015-08-26 18:52:52</td>
                    <td class=""></td>
                    <td class="">completed</td>
                    <td class="">89</td>
                  </tr>
                  <tr >
                    <td class=" "><a href="index.php?geticashreceiptpdf&amp;receiptid=7520&amp;sessid=89">7520</a></td>
                    <td class="">3333005640882952</td>
                    <td class="">IMPS</td>
                    <td class="">5000</td>
                    <td class="">0</td>
                   
                    <td class="">1503275</td>
                    <td class="">31731525289</td>
                    <td class="">8451008022</td>
                    <td class="">SBIN0003560</td>
                    <td class="">9308511774</td>
                    <td class="">2015-08-06 09:13:39</td>
                    <td class=""></td>
                    <td class="">completed</td>
                    <td class="">89</td>
                  </tr>
                  <tr >
                    <td class=" "><a href="index.php?geticashreceiptpdf&amp;receiptid=7519&amp;sessid=89">7519</a></td>
                    <td class="">3333005640882952</td>
                    <td class="">IMPS</td>
                    <td class="">5000</td>
                    <td class="">0</td>
                   
                    <td class="">1503275</td>
                    <td class="">31731525289</td>
                    <td class="">8451008022</td>
                    <td class="">SBIN0003560</td>
                    <td class="">9308511774</td>
                    <td class="">2015-08-06 09:12:52</td>
                    <td class=""></td>
                    <td class="">completed</td>
                    <td class="">89</td>
                  </tr>
                  <tr >
                    <td class=" "><a href="index.php?geticashreceiptpdf&amp;receiptid=6796&amp;sessid=89">6796</a></td>
                    <td class="">3333001222359431</td>
                    <td class="">NEFT</td>
                    <td class="">100</td>
                    <td class="">0</td>
                    
                    <td class="">8365043</td>
                    <td class="">18210150812</td>
                    <td class=""></td>
                    <td class="">ICIC0001821</td>
                    <td class="">8826657167</td>
                    <td class="">2015-06-14 10:32:01</td>
                    <td class=""></td>
                    <td class="">completed</td>
                    <td class="">89</td>
                  </tr>
                  <tr >
                    <td class=" "><a href="index.php?geticashreceiptpdf&amp;receiptid=6795&amp;sessid=89">6795</a></td>
                    <td class="">3333001222359431</td>
                    <td class="">IMPS</td>
                    <td class="">100</td>
                    <td class="">0</td>
                   
                    <td class="">8365043</td>
                    <td class="">18210150812</td>
                    <td class=""></td>
                    <td class="">ICIC0001821</td>
                    <td class="">8826657167</td>
                    <td class="">2015-06-14 10:28:50</td>
                    <td class=""></td>
                    <td class="">failed</td>
                    <td class="">89</td>
                  </tr>
                  <tr >
                    <td class=" "><a href="index.php?geticashreceiptpdf&amp;receiptid=6794&amp;sessid=89">6794</a></td>
                    <td class="">3333001222359431</td>
                    <td class="">IMPS</td>
                    <td class="">100</td>
                    <td class="">0</td>
                   
                    <td class="">8365043</td>
                    <td class="">18210150812</td>
                    <td class=""></td>
                    <td class="">ICIC0001821</td>
                    <td class="">8826657167</td>
                    <td class="">2015-06-14 10:27:24</td>
                    <td class=""></td>
                    <td class="">failed</td>
                    <td class="">89</td>
                  </tr>
                  <tr >
                    <td class=" "><a href="index.php?geticashreceiptpdf&amp;receiptid=6793&amp;sessid=89">6793</a></td>
                    <td class="">3333001222359431</td>
                    <td class="">IMPS</td>
                    <td class="">100</td>
                    <td class="">0</td>
                   
                    <td class="">8365043</td>
                    <td class="">18210150812</td>
                    <td class=""></td>
                    <td class="">ICIC0001821</td>
                    <td class="">8826657167</td>
                    <td class="">2015-06-14 10:14:58</td>
                    <td class=""></td>
                    <td class="">failed</td>
                    <td class="">89</td>
                  </tr>
                  <tr >
                    <td class=" "><a href="index.php?geticashreceiptpdf&amp;receiptid=6760&amp;sessid=89">6760</a></td>
                    <td class="">3333002067845575</td>
                    <td class="">IMPS</td>
                    <td class="">5000</td>
                    <td class="">0</td>
                   
                    <td class="">8289252</td>
                    <td class="">31731525289</td>
                    <td class=""></td>
                    <td class="">SBIN0003560</td>
                    <td class="">9308511774</td>
                    <td class="">2015-06-11 20:28:04</td>
                    <td class=""></td>
                    <td class="">inprocess</td>
                    <td class="">89</td>
                  </tr>
                </tbody>
              </table>
              </div>
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