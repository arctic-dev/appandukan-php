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
               <h3>Ledger Report</h3>
            </div>
           
  
	 
	   <div class="panel-body collapse in">
	  
              <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                <thead>
                  <tr>
                    <th>Date</th>
                    <th>Type</th>
					<th>Comment</th>
					<th>Debit</th>
					<th>Credit</th>
					<th>Balance</th>
					<th>Type</th>
					<th>ID</th>
                    <th>Reason</th>
                    
					
					
                  
                  </tr>
                </thead>
                <tbody>
                     <td></td>
				    <td></td>
				    <td> </td>
				    <td></td>
				    <td></td>
				    <td></td>
				    <td></td>
				    <td></td>
				    <td></td>
					  
				
                  </tbody>
              </table>
            </div>
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