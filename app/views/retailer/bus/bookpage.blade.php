@extends('layouts.retailer')
@section('content')
<style>
body
{
	    color: #401724;
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
        <li><a href="<?php echo url('superadmin/dashboard');?>">Superadmin</a></li>
        <li>Bus</li>
      </ol>
      <h1>Passenger Details</h1>
     
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
            <?php if(Session::has('sucess')){ ?>
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              {{Session::get('sucess')}} </div>
            <?php } ?>
          
              <div class="col-md-12">
                <div class="panel-heading">
                  <h4>Passenger Details</h4>
                </div>
                <div class="panel-body">
                  <div class="col-md-6">
				  <form action="{{url('retailer/bus/bookfinal')}}" method="GET" id="validate-form" data-validate="parsley">
				  <input type="hidden" name="routeid" value="{{$input['routeid']}}">
				  <input type="hidden" name="sourceid" value="{{$input['sourceid']}}">
				  <input type="hidden" name="destinationid" value="{{$input['destinationid']}}">
				  <input type="hidden" name="sourcename" value="{{$input['sourcename']}}">
				  <input type="hidden" name="destinationname" value="{{$input['destinationname']}}">
				  <input type="hidden" name="dateofjourney" value="{{$input['dateofjourney']}}">
				  <input type="hidden" name="deptime" value="{{$input['deptime']}}">
				  <input type="hidden" name="arrtime" value="{{$input['arrtime']}}">
				  <input type="hidden" name="bustype" value="{{$input['bustype']}}">
				  <input type="hidden" name="travelname" value="{{$input['travelname']}}">
				  <input type="hidden" name="canceldep" value="{{$input['canceldep']}}">
				  <input type="hidden" name="cancelchargetype" value="{{$input['cancelchargetype']}}">
				  <input type="hidden" name="cancelcharge" value="{{$input['cancelcharge']}}">
				  <input type="hidden" name="seats" value="{{$input['seats']}}">
				  <input type="hidden" name="amount" value="{{$input['amount']}}">
				  <input type="hidden" name="boarding" value="{{$input['boarding']}}">
				  <?php if($input['seats'])
				  {$seats=explode(',',$input['seats']);foreach ($seats as $seat){?>
                    <div id="divBlock" class="commom_body_content_right">
                      <div id="divPassengerList">
                        <div class="row">
                          <div class="col-md-7">
                            <div class="name_and_status">
                              <div class="input-group">
                                <div class="input-group-btn">
                                  <select id="ddlTitle0" name="Title[]"class="btn dropdown-toggle" style="border-radius: 0px;border-color: #ccc;padding:7px;">
                                    <option value="Mr" gender="MALE" selected="selected">Mr</option>
                                    <option value="Mrs" gender="FEMALE">Mrs</option>
                                    <option value="Miss" gender="FEMALE">Miss</option>
                                  </select>
                                </div>
                                <input type="text" class="form-control"  name="FirstName[]" required="required" id="txtName0" maxlength="50" autocomplete="off" placeholder="Enter Passenger Name" title="Please enter Name">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="row">
                              <div class="age_and_seatno">
                                <div class="col-xs-6">
                                  <div class="form-group">
                                    <input type="text" class="form-control" required="required" data-type="digits" name="Age[]"id="txtAge0" maxlength="3" autocomplete="off" placeholder="Age" control="int" title="Please enter Age">
                                  </div>
                                </div>
                                <div class="col-xs-6">
                                  <div>
                                    <input type="text" style="text-align:center;" class="form-control" id="txtSeat0" value="{{$seat}}" disabled="disabled" placeholder="Age">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
					<?php }}?>
                    <div class="payee_details">
                      <h3> Contact Detail</h3>
                      <div id="divContactInfo" class="form-horizontal" role="form" style="margin-left: 20px;">
                        <div class="form-group">
                          <label for="inputEmail3" style="font-weight: normal;"> Contact Number</label>
                          <div class="input-group"> <span class="input-group-addon">+91</span>
                            <input type="text" id="txtContactNo" name="phone" required="required"data-type="number"autocomplete="off" maxlength="10" control="int" class="form-control" placeholder="Contact Number" title="Please enter Contact Number" style="border-left-color: rgb(218, 37, 28);">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" style="font-weight: normal;"> Contact Name</label>
                          <input type="text" class="form-control" name="contact" required="required" id="txtName" autocomplete="off" placeholder="Enter your Name" title="Please enter Contact Name" style="border-left-color: rgb(218, 37, 28);">
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" style="font-weight: normal;"> Email Id</label>
                          <input type="text" class="form-control" required="required" data-type="email" name="email" id="txtEmailId" autocomplete="off" placeholder="Enter your Email Id" title="Please enter Your Email Id" style="border-left-color: rgb(218, 37, 28);">
                        </div>
                        <div id="divddlID" style="display: none;" class="form-group">
                          <label for="inputPassword3" style="font-weight: normal;"> ID Type</label>
                          <select id="ddlID" class="form-control">
                            <option value="0">Select Id Proof</option>
                            <option value="Driving_Licence">Driving Licence</option>
                            <option value="Pan_Card">Pan Card</option>
                            <option value="Ration_Card">Ration Card</option>
                          </select>
                        </div>
                        
                        <div class="form-group">
                          <label for="inputPassword3" style="font-weight: normal;"> Amount Payable</label>
                          <div class="input-group"> <span class="input-group-addon">Rs.</span>
                            <input type="text" class="form-control" name="amount" id="txtAmount" value="{{$input['amount']}}" discount="0.00" couponid="0" disabled="disabled" autocomplete="off" placeholder="Enter your Email" title="Please enter Your Email Id" style="width: 200px; border-left-color: rgb(218, 37, 28);">
                          </div>
                        </div>
                        <div class="form-group"> </div>
                        <div class="form-group">
                          <button type="submit" id="btnBookNow" onclick="javascript:$('#validate-form').parsley( 'validate' );"class="btn btn-primary"> Book Now</button>
                         
                        </div>
                      </div>
                    </div>
					</form>
                  </div>
				  <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="base">
                                    <div class="travel_detail">
                                        <div class="ticket_details">
                                            <table>
                                                <tbody><tr>
                                                    <td colspan="3" class="itinerary_tittle">
                                                        Travel Itinerary
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Route
                                                    </td>
                                                    <td>
                                                        :
                                                    </td>
                                                    <td>
                                                        <span id="spnLoc" style="font-weight: bold;">{{$input['sourcename']}} » {{$input['destinationname']}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Date
                                                    </td>
                                                    <td>
                                                        :
                                                    </td>
                                                    <td>
                                                        <span id="spnDate">{{$input['dateofjourney']}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Boarding
                                                    </td>
                                                    <td>
                                                        :
                                                    </td>
                                                    <td>
                                                        <span id="spnBoarding">{{$input['boarding']}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Seat No
                                                    </td>
                                                    <td>
                                                        :
                                                    </td>
                                                    <td>
                                                        <span id="spnSeats" style="color: #853A93; font-weight: bold; font-size: 18px;">{{$input['seats']}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Fare
                                                    </td>
                                                    <td>
                                                        :
                                                    </td>
                                                    <td>
                                                        <span id="spnFare" style="color: #C01C1C; font-weight: bold; font-size: 25px;">Rs.{{$input['amount']}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Travels Name
                                                    </td>
                                                    <td>
                                                        :
                                                    </td>
                                                    <td>
                                                        <span id="spnTravels">{{$input['travelname']}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Travels Type
                                                    </td>
                                                    <td>
                                                        :
                                                    </td>
                                                    <td>
                                                        <span id="spnBusType">{{$input['bustype']}}</span>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
            </form>
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