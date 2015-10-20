@extends('layouts.retailer')
@section('content')

<div id="">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li>Recharge</li>
                <li class="active">Recharge History</li>
            </ol>

            <h1>Recharge History</h1>
           
        </div>


        <div class="container">
            <div class="row">
              <div class="col-md-12">
                    <div class="panel panel-sky">
                        <div class="panel-heading">
                            <h4>Recharge History</h4>
                            <div class="options">   
                                <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                <a href="javascript:;"><i class="fa fa-wrench"></i></a>
                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                            </div>
                        </div>
                        <div class="panel-body collapse in">
                            <table cellpadding="0" cellspacing="0" border="0" class="table datatables" id="example">
                                <thead>
                                    <tr>
<th>S.No</th>
                                        <th>Service Provider</th>
                                        <th>Number</th>
                                        <th>Amount</th>
                                        <th>Created At</th>
										<th>Created By</th>
										<th>Transaction Id</th>
                                    <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php $i=1; if($mobilerecharge){ foreach ($mobilerecharge as $rechargedatas){?>
                                    <tr class="odd gradeX">
										<td>{{$i}}</td>
                                        <td>{{$rechargedatas->serviceProvider}}</td>
										<td>{{$rechargedatas->number}}</td>
										<td>{{$rechargedatas->amount}}</td>
										<td>{{date('Y-m-d',($rechargedatas->createdAt/1000))}}</td>
										<td>{{$rechargedatas->createdBy}}</td>
										<td>{{$rechargedatas->transId}}</td>
										<td class="center"><?php if($rechargedatas->result=="success"){?><a  class='btn btn-success btn-xs'>Success</a><?php }else { ?><a  class='btn btn-danger btn-xs'>Pending</a><?php } ?></td>
                           
                                        
										
										
										
                                       
                                   
									</tr>
 <?php $i++;} } ?>									
                         
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->

 @stop