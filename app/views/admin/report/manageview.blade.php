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
              <h4>Recharge and Utility</h4>
            </div>
            <div class="panel-body collapse in">
   <form class="form-inline">
				<p>Daily Commission</p>
				<td>
				  <div class="form-group">
					  <label for="exampleInputName2">Date</label>
					  <input type="text" class="form-control" id="datepicker" placeholder="">
				  </div>
             </td>
			  <td>
				  <div class="form-group">
					<label for="exampleInputEmail2">User</label>
					<input type="email" class="form-control" id="exampleInputEmail2" placeholder="">
				  </div>
			  </td>
			  <td>
				  <div class="form-group">
					<button type="submit" class="btn btn-default" style="margin-top: -2px;">Export</button>
				  </div>
			  </td>
     </form>
	 </br>
	    <form class="form-inline">
				<p>Daily Business</p>
				<td>
				  <div class="form-group">
					  <label for="exampleInputName2">Date</label>
					  <input type="text" class="form-control" id="datepicker" placeholder="">
				  </div>
             </td>
			  <td>
				  <div class="form-group">
					<label for="exampleInputEmail2">User</label>
					<input type="text" class="form-control" id="exampleInputEmail2" placeholder="">
				  </div>
			  </td>
			  <td>
				  <div class="form-group">
					<button type="submit" class="btn btn-default" style="margin-top: -2px;">Export</button>
				  </div>
			  </td>
     </form>
	 </br>
	    <form class="form-inline">
				<p>Daily Business Refund</p>
				<td>
				  <div class="form-group">
					  <label for="exampleInputName2">Date</label>
					  <input type="text" class="form-control" id="datepicker" placeholder="">
				  </div>
             </td>
			  <td>
				  <div class="form-group">
					<label for="exampleInputEmail2">User</label>
					<input type="email" class="form-control" id="exampleInputEmail2" placeholder="">
				  </div>
			  </td>
			  <td>
				  <div class="form-group">
					<button type="submit" class="btn btn-default" style="margin-top: -2px;">Export</button>
				  </div>
			  </td>
     </form>
	  </br>
	    <form class="form-inline">
				<p>Daily Recharge</p>
				<td>
				  <div class="form-group">
					  <label for="exampleInputName2">Date</label>
					  <input type="text" class="form-control" id="datepicker" placeholder="">
				  </div>
             </td>
			  <td>
				  <div class="form-group">
					<label for="exampleInputEmail2">User</label>
					<input type="email" class="form-control" id="exampleInputEmail2" placeholder="">
				  </div>
			  </td>
			  <td>
				  <div class="form-group">
					<button type="submit" class="btn btn-default" style="margin-top: -2px;">Export</button>
				  </div>
			  </td>
     </form>
	  </br>
	    <form class="form-inline">
				<p>Daily Pancard</p>
				<td>
				  <div class="form-group">
					  <label for="exampleInputName2">Date</label>
					  <input type="text" class="form-control" id="datepicker" placeholder="">
				  </div>
             </td>
			  <td>
				  <div class="form-group">
					<label for="exampleInputEmail2">User</label>
					<input type="email" class="form-control" id="exampleInputEmail2" placeholder="">
				  </div>
			  </td>
			  <td>
				  <div class="form-group">
					<button type="submit" class="btn btn-default" style="margin-top: -2px;">Export</button>
				  </div>
			  </td>
     </form>
	 </br>
	    <form class="form-inline">
				<p>Daily Balance Transfer</p>
				<td>
				  <div class="form-group">
					  <label for="exampleInputName2">Date</label>
					  <input type="text" class="form-control" id="datepicker" placeholder="">
				  </div>
             </td>
			 
			  <td>
				  <div class="form-group">
					<button type="submit" class="btn btn-default" style="margin-top: -2px;">Export</button>
				  </div>
			  </td>
     </form>
	 
	 </br>
	    <form class="form-inline">
				<p>Money Transfer</p>
				<td>
				  <div class="form-group">
					  <label for="exampleInputName2">Date</label>
					  <input type="text" class="form-control" id="datepicker" placeholder="">
				  </div>
             </td>
			 
			  <td>
				  <div class="form-group">
					<button type="submit" class="btn btn-default" style="margin-top: -2px;">Export</button>
				  </div>
			  </td>
     </form>
</br>	 </br>
	 
	   <div class="panel-body collapse in">
              <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                <thead>
                  <tr>
                    <th>Date</th>
                    <th>Sucess</th>
                    
					<th>FRC Commission</th>
					<th>DIS Commission</th>
					
                  
                  </tr>
                </thead>
                <tbody>
                 <td>1</td>
				 <td>Aircel</td>
				 <td> </td>
				 <td></td>
				
                  </tbody>
              </table>
            </div>
          </div>
		  
		  <h3>Money Transfer</h3>
		  <div class="panel-body collapse in">
              <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                <thead>
                  <tr>
                    <th>Date</th>
                    <th>Sucess</th>
                    
					<th>Total Commission</th>
					<th>Total</th>
					
                  
                  </tr>
                </thead>
                <tbody>
                 <td>1</td>
				 <td>Aircel</td>
				 <td> </td>
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