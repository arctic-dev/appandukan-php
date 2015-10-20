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
            <div class="options">
                <div class="btn-toolbar">
                    <div class="btn-group hidden-xs">
                        <a href='#' class="btn btn-default dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cloud-download"></i><span class="hidden-sm"> Export as  </span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Text File (*.txt)</a></li>
                            <li><a href="#">Excel File (*.xlsx)</a></li>
                            <li><a href="#">PDF File (*.pdf)</a></li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-default"><i class="fa fa-cog"></i></a>
                </div>
            </div>
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
                                        <th>Mobile Number</th>
                                        <th>Operator</th>
                                        <th>Amount</th>
                                        <th>status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>1234567890</td>
                                        <td>Aircel</td>
                                        <td>Rs : 1000</td>
                                        <td class="center"><a  class='btn btn-success btn-xs'>Active</a> <a  class='btn btn-danger btn-xs'>Deactive</a></td>
									</tr>	
                                    <tr class="odd gradeX">
                                        <td>1234567890</td>
                                        <td>Aircel</td>
                                        <td>Rs : 1000</td>
                                        <td class="center"><a  class='btn btn-success btn-xs'>Active</a> <a  class='btn btn-danger btn-xs'>Deactive</a></td>
									</tr>	
                                    <tr class="odd gradeX">
                                        <td>1234567890</td>
                                        <td>Aircel</td>
                                        <td>Rs : 1000</td>
                                        <td class="center"><a  class='btn btn-success btn-xs'>Active</a> <a  class='btn btn-danger btn-xs'>Deactive</a></td>
									</tr>	
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