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
          <a href="{{url('retailer/icash/addbeneficiary')}}" class="btn-success btn-sm">Add Beneficiary</a>
          <a href="{{url('retailer/icash/viewtransaction')}}" class="btn-success btn-sm">View Transaction</a>
          <a href="{{url('retailer/icash/logout')}}" class="btn-success btn-sm">Log out</a>
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
              <h4>Icash Card</h4>
            </div>
			<div class="container" style="border: 2px solid white;">
			<div class="head" style="  padding: 10px;  height: 40px;  border-bottom: 2px solid white;margin-left: -10px;  margin-right: -10px;">
			<div class="col-md-3">
			Kyc Status:{{Session::get('KYCSTATUS')}}
			</div>
			
			<div class="col-md-3">
			Consumed Limit:{{$cashlimitout1['CHECKCARDBALANCERESPONSE']['CONSUMEDLIMIT']}}
			</div>
			<div class="col-md-3">
			Remaining Limit:{{$cashlimitout1['CHECKCARDBALANCERESPONSE']['REMAININGLIMIT']}}
			</div>
			<div class="col-md-3">
			Balance:{{$cashlimitout1['CHECKCARDBALANCERESPONSE']['BALANCE']}}
			</div>
			</div>
			<div class="jumbtron" style="height:150px; ">
			
			<div class="container"style="padding-top: 50px;">
			<div class="col-md-3">
			
			MOBILE NUMBER:{{Session::get('MOBILE')}}
			</div>
			<div class="col-md-3">
			User Name:{{Session::get('NAME')}}
			</div>
			<div class="col-md-3">
			
			Card Number:{{Session::get('cardno')}}
			</div>
           <div class="col-md-3">
			
			<a href="{{url('retailer/icash/viewuser')}}" class="btn-info btn">More Details</a>
			</div>
			
			
			</div>
			</div>
			</div>
			
			
			
            <div class="panel-body collapse in">
            <div class="table-responsive">
          
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                <thead>
                  <tr>
                    <th>ID NO</th>
                    <th>Bene Name</th>
                    <th>Bank Name</th>
                    <th>Branch Name</th>
                    <th>IFSC Code</th>
                    <th>Account Number</th>
                    <th>Mobile/MMID/ Aadthar number</th>
                    <th>Benificiary Status</th>
                    <th>IMPS (IFSC)</th>
                   
                    <th>NEFT</th>
                    
                    <th>Delete</th>
                  </tr>
                </thead>
                  <?php
if(isset($getarray['VIEWBENEFICIARYRESPONSE']['ITEM']))
{//exit;
  if(isset($getarray['VIEWBENEFICIARYRESPONSE']['ITEM'][0]))
  {
  ?>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
					<?php
                 foreach($getarray['VIEWBENEFICIARYRESPONSE']['ITEM'] as $beneficiery)
                {
                  //print_r($beneficiery); exit;
				if($beneficiery['BENESTATUS']=='Approved')
				{
					$benstatus="<a href='#' class='btn-success btn-sm'>Approved</a>";
				}
				else
				{
					$benstatus="<a href='#' class='btn-info btn-sm'>".$beneficiery['BENESTATUS']."</a>";
				}
				if($beneficiery['MMIDSTATUS']==0 && $beneficiery['IMPSMMIDENABLE']==0 && (!isset($beneficiery['MMID'])))
        {
          $mmidstatus="<a href='#' class='btn-info btn-sm'>disabled</a>";
        }
        else
        {
          $mmidstatus="<a href=".url('retailer/icash/mmidtransfer/'.$beneficiery['MMID'].'/'.preg_replace('/\s+/','_',$beneficiery['BENENAME']).'/'.$beneficiery['MOBILE'].'/'.$beneficiery['BENEID'])." class='btn-success btn-sm'>Pay</a>";
        }				
        if($beneficiery['IFSCSTATUS']==0 && $beneficiery['IMPSIFSCENABLE']==0 || (!isset($beneficiery['IFSCCODE'])))
        {
          $ifscstatus="<a href='#' class='btn-info btn-sm'>disabled</a>";
        }
        else
        {
          $ifscstatus="<a href=".url('retailer/icash/transfer/'.$beneficiery['IFSCCODE'].'/'.preg_replace('/\s+/','_',$beneficiery['BENENAME']).'/'.$beneficiery['MOBILE'].'/'.$beneficiery['ACCOUNTNO'].'/'.$beneficiery['BENEID'].'_1')." class='btn-success btn-sm'>Pay</a>";
        } 
        if($beneficiery['IMPSNEFTENABLE']==0  || (!isset($beneficiery['IFSCCODE'])))
        {
          $neftstatus="<a href='#' class='btn-info btn-sm'>disabled</a>";
        }
        else
        {
          $neftstatus="<a href=".url('retailer/icash/transfer/'.$beneficiery['IFSCCODE'].'/'.preg_replace('/\s+/','_',$beneficiery['BENENAME']).'/'.$beneficiery['MOBILE'].'/'.$beneficiery['ACCOUNTNO'].'/'.$beneficiery['BENEID'].'_2')." class='btn-success btn-sm'>Pay</a>";
        } 
        if($beneficiery['DELETESTATUS']==0)
        {
          $Delete="<a href=".url('retailer/icash/removeben/'.$beneficiery['BENEID'])." class='btn-info btn-sm'>DELETE</a>";
        }
        elseif($beneficiery['DELETESTATUS']==10)
        {
          $Delete="<a href='#' class='btn-success btn-sm'>Deleted</a>";
        } 
        else
        {
          $Delete="<a href='#' class='btn-success btn-sm'>Disabled</a>";
        }
        if($beneficiery['MMIDSTATUS']==0)
        {
          $edit="<a href=".url('retailer/icash/editben/'.$beneficiery['BENEID'].'/1/'.$beneficiery['MOBILE'].'/'.$beneficiery['BENENAME'])." class='btn-info btn-sm'>EDIT</a>";
        }
        elseif($beneficiery['IFSCSTATUS']==0)
        {
          $edit="<a href=".url('retailer/icash/editben/'.$beneficiery['BENEID'].'/2/'.$beneficiery['MOBILE'].'/'.$beneficiery['BENENAME'])." class='btn-success btn-sm'>EDIT</a>";
        } 
        else
        {
          $edit="<a href='#' class='btn-default btn-sm'>Disabled</a>";
        }
				



                    ?>
                    <tr>
                            <td class="">{{$beneficiery['BENEID']}}</td>
                                    <td class="">{{$beneficiery['BENENAME']}}</td>
                                    <td class=""><?php if(isset($beneficiery['BANKNAME'])){echo $beneficiery['BANKNAME'] ;}?></td>
                                    <td class=""><?php if(isset($beneficiery['BRANCHNAME'])){echo $beneficiery['BRANCHNAME'] ;}?></td>
                                    <td class=""><?php if(isset($beneficiery['IFSCCODE'])){echo $beneficiery['IFSCCODE'] ;}?></td>
                                    <td class=""><?php if(isset($beneficiery['ACCOUNTNO'])){echo $beneficiery['ACCOUNTNO'] ;}?></td>
                                    <td class=""><?php if(isset($beneficiery['MOBILE'])){echo $beneficiery['MOBILE'] ;}?></td>
                                    <td class="">{{$benstatus}}</td>
                                    <td class="">{{$ifscstatus}}</td>
                                    
                                    <td class="">{{$neftstatus}}</td>
                                    
                                    <td class="">{{$Delete}}</td>      	
                                    
                                    
                        </tr>           
                                  
                    <?php
                
                    
                }
                ?>
 				 </tbody>
         <?php
            }
            else
              { 
                if($getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['BENESTATUS']=='Approved')
        {
          $benstatus="<a href='#' class='btn-success btn-sm'>Approved</a>";
        }
        else
        {
          $benstatus="<a href='#' class='btn-info btn-sm'>".$getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['BENESTATUS']."</a>";
        }
        if($getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['IMPSMMIDENABLE']==0 && $getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['MMIDSTATUS']==0 && (!isset($getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['MMID'])))
        {
          $mmidstatus="<a href='#' class='btn-info btn-sm'>disabled</a>";
        }
        else
        {
          $mmidstatus="<a href=".url('retailer/icash/mmidtransfer/'.$getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['MMID'].'/'.preg_replace('/\s+/','_',$getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['BENENAME']).'/'.$getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['MOBILE'].'/'.$getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['BENEID'])." class='btn-success btn-sm'>Paynow</a>";
        }       
        if($getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['IMPSIFSCENABLE']==0 && (!isset($getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['IFSCCODE'])))
        {
          $ifscstatus="<a href='#' class='btn-info btn-sm'>disabled</a>";
        }
        else
        {
          $ifscstatus="<a href=".url('retailer/icash/transfer/'.$getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['IFSCCODE'].'/'.preg_replace('/\s+/','_',$getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['BENENAME']).'/'.$getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['MOBILE'].'/'.$getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['ACCOUNTNO'].'/'.$getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['BENEID'].'_1')." class='btn-success btn-sm'>Paynow</a>";
        } 
        if($getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['IMPSNEFTENABLE']==0 || (!isset($getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['IFSCCODE'])))
        {
          $neftstatus="<a href='#' class='btn-info btn-sm'>disabled</a>";
        }
        else
        {
          $neftstatus="<a href=".url('retailer/icash/transfer/'.$getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['IFSCCODE'].'/'.preg_replace('/\s+/','_',$getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['BENENAME']).'/'.$getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['MOBILE'].'/'.$getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['ACCOUNTNO'].'/'.$getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['BENEID'].'_2')." class='btn-success btn-sm'>Paynow</a>";
        } 
        if($getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['DELETESTATUS']==0)
        {
          $Delete="<a href=".url('retailer/icash/removeben/'.$getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['BENEID'])." class='btn-info btn-sm'>DELETE</a>";
        }
        elseif($getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['DELETESTATUS']==10)
        {
          $Delete="<a href='#' class='btn-success btn-sm'>Deleted</a>";
        } 
        else
        {
          $Delete="<a href='#' class='btn-success btn-sm'>Disabled</a>";
        }
		if($getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['MMIDSTATUS']==0)
        {
          $edit="<a href=".url('retailer/icash/editben/'.$getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['BENEID'].'/1/'.$getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['MOBILE'].'/'.$getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['BENENAME'])." class='btn-info btn-sm'>EDIT</a>";
        }
        elseif($getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['IFSCSTATUS']==0)
        {
          $edit="<a href=".url('retailer/icash/editben/'.$getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['BENEID'].'/2/'.$getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['MOBILE'].'/'.$getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['BENENAME'])." class='btn-success btn-sm'>EDIT</a>";
        } 
        else
        {
          $edit="<a href='#' class='btn-default btn-sm'>Disabled</a>";
        }
        ?>
             <tbody role="alert" aria-live="polite" aria-relevant="all">
              <tr>
                                    
                                    <td class="">{{$getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['BENEID']}}</td>
                                    <td class="">{{$getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['BENENAME']}}</td>
                                    <td class=""><?php if(isset($getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['BANKNAME'])){echo $getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['BANKNAME'] ;}?></td>
                                    <td class=""><?php if(isset($getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['BRANCHNAME'])){echo $getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['BRANCHNAME'] ;}?></td>
                                    <td class=""><?php if(isset($getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['IFSCCODE'])){echo $getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['IFSCCODE'] ;}?></td>
                                    <td class=""><?php if(isset($getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['ACCOUNTNO'])){echo $getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['ACCOUNTNO'] ;}?></td>
                                    <td class=""><?php if(isset($getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['MOBILE'])){echo $getarray['VIEWBENEFICIARYRESPONSE']['ITEM']['MOBILE'] ;}?></td>
                                    <td class="">{{$benstatus}}</td>
                                    <td class="">{{$ifscstatus}}</td>
                                    <td class="">{{$neftstatus}}</td>
                                    <td class="">{{$Delete}}</td>
                                    
                                    
                        </tr>  
             </tbody>

            <?php }
          }
            ?>
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