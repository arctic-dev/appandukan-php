@extends('layouts.subretailer')
@section('content')
<style>
body
{
	    color: #fff;
}
</style>
<div class="form-group" style="display:none;">
                <label class="col-sm-3 control-label">Fullscreen Textarea</label>
                <div class="col-sm-6">
                    <textarea class="form-control fullscreen"></textarea>
                </div>
            </div>
<div id="page-content">
  <div id='wrap'>
    <div id="page-heading">
      <ol class="breadcrumb">
        <li><a href="<?php echo url('subretailer/dashboard');?>">Sub retailer</a></li>
        <li>Pan Card Receipt</li>
      </ol>
      <h1>Pan Card Receipt</h1>
      <div class="options">
        <div class="btn-toolbar">
          <div class="btn-group hidden-xs"> <a href='#' class="btn btn-default dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cloud-download"></i><span class="hidden-xs hidden-sm hidden-md"> Export as</span> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Text File (*.txt)</a></li>
              <li><a href="#">Excel File (*.xlsx)</a></li>
              <li><a href="#">PDF File (*.pdf)</a></li>
            </ul>
          </div>
          <a href="#" class="btn btn-default hidden-xs"><i class="fa fa-cog"></i></a> </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
      <div class="table-responsive" style="">
              <table width="100%" cellpadding="0px" cellspacing="0px" border="1px" bordercolor="#626262" class="table" style="    background-color: rgba(255, 255, 255, 0.93);    color: #000;    width: 59%;    margin: 0px auto;">
    <tr>
      <td class="text">Received Rs. 105 (inclusive of applicable taxes) From</td>
      <td > {{$name}}</td>
    </tr>
	 <tr>
      <td class="text">Application form 49 A Sr no</td>
      <td></td>
    </tr>
	 <tr>
      <td class="text">Date of receipt</td>
      <td>
      {{$date}}
      </td>
    </tr>
	 <tr>
      <td class="text">Processing fee Coupon no</td>
      <td> {{$couponno}}</td>
    </tr>
	<tr><td colspan="2">
	<div style="margin:0 auto;">
	       <div style="float:left; width:330px"><p class="text3">Service-tax Regn no: (ST/BAS/STC/BEL/420/2004-2205<br />
	        PAN Service Center Code:<br />
	        PAN Service Center Name :</p></div>
	        <div style=" float:right"><p class="text3">Autorised Signatory(With date stamp)</p></div>
	        </div>
	<div class="clear"></div>
	<div style=" margin:0 auto">
	<table  cellpadding="0px" cellspacing="0px" border="1px" bordercolor="#626262"  class="table" style="background:none;">
	<tr><td class="text1">For knowing the PAN you may visit our website : http://www.utisl.com. Any query/corresponance in this connection
	may be addressed by quoting the Application number/processing fee coupon Number to the address given below:
	</td></tr>
	<tr><td class="text2"><div align="center"><b>Navi Mumbai</b></div>UTI Infrastructure Technology & Services Ltd. P.B No. 20, Plot No.3, Sector-11, CBD-Belapur, Navi Mumbai-400614
	Telephone :(022) 67931399 Email Id: utitsl.gsd@utitsl.com</td></tr>
	<tr><td class="text2"><div align="center"><b>New Delhi</b></div>UTI Infrastructure Technology & Services Ltd. Ground Floor, Jeevan Tara Building Opp. 
	Patel Chowk Metro Station 5, Parliment Street, New Delhi-110001 <br />Telephone:(011)23741282-86 Fax:(011)23741280 Email Id:pan.delhi@utiltsl.com
	</td></tr>
	<tr><td class="text2"><div align="center"><b>Kolkata</b></div>UTI Infrastructure Technology & Services Ltd. Netaji Subhas Road,Ground Floor, Opp.
	Giliander House & Standard Chartered Bank, Kolkata-700001 Telephone:(033)22108959, 2242-4774/4810/4783 Fax:(033)22435217 Email Id:kolkata@utilil.com.pan.kolkata@utilisl.com
	</td></tr>
	<tr><td class="text2"><div align="center"><b>Chennai</b></div>UTI Infrastructure Technology & Services Ltd.  Justice Basheer Ahmed Building, Second Floor, Second Line Beach , Chennai-600001 Telephone:(033)25241224/1265/1356 Fax:(044)25341346 Email Id:chennai@utilsl.com/sw.chennai@utilsl.com
	</td></tr>
	</table>
	<div style="margin:0 auto"><p class="text2"><b>AAYKAR SAMPARK KENDRA (ASK) -Telephone : 0124-2438000</b></p></div>
	</div>
	</td></tr>
  </table>
  </div>
      </div>
    </div>
    <!-- container --> 
  </div>
  <!--wrap --> 
</div>
<!-- page-content --> 

@stop