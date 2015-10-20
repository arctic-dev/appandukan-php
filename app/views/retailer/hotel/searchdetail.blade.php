@extends('layouts.retailer')
@section('content')

<link href='{{url()}}/assets/admin/css/seats.css' rel='stylesheet' type='text/css' media='all' id='headerswitcher'>
<style>
body
{
	    color: #401724;
}
.common_body_color .panel-group .panel
{
	border-radius:0px;	
}

.common_body_color .panel-body
{
	height: 145px;
overflow-y: scroll;
overflow-x:hidden;
}
.page-content-wrapper ul
{
	margin-left:0px;
	padding-left:0px;
	list-style:none;
}
.panel-heading
{
	padding: 10px; background-repeat: repeat-x; background-image: linear-gradient(to bottom, #F5F5F5 0%, #E8E8E8 100%);
	color:#222;
}

.panel-heading a
{
	color:#222;
}

.panel-heading a:link
{
	color:#222;
}

.panel-heading h4
{
	color:#222;
}

.panel-group .panel-heading h4 a
{
	color:#222;
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
        <li>Search Flight Tickets</li>
      </ol>
      <h1>Search Flight Tickets</h1>
     
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
            <div class="container-fluid" style="margin-top: 15px;">
              <div class="common_body_color">
                <div class="col-md-2">
                  <div class="row">
                    <div class="panel-group" id="accordion">
                      <!--div class="panel panel-default">
                        <div class="panel-heading"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> </a>
                          <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> Filter By</a><a id="a1" style="cursor: pointer; display: none; color: rgb(51, 122, 183);" onclick="clearFilter();"> Clear</a> </h4>
                        </div>
						
                        <div class="panel-collapse" style="height:auto;">
                          <div id="divTravelsList" class="panel-body" style=" height:auto; overflow:visible;">
                            <div class="checkbox">
                              <label style="padding: 0px;">
                                <input type="radio" style="margin-right: 5px;" name="BusType" val="" class="clsAC" onchange="applyFilter();">
                                AC</label>
                            </div>
                            <div class="checkbox">
                              <label style="padding: 0px;">
                                <input type="radio" style="margin-right: 5px;" name="BusType" val="" class="clsNonAC" onchange="applyFilter();">
                                NonAC</label>
                            </div>
                            <div class="checkbox">
                              <label style="padding: 0px;">
                                <input type="radio" style="margin-right: 5px;" name="BusTypeS" val="" class="clsSeater" onchange="applyFilter();">
                                Seater</label>
                            </div>
                            <div class="checkbox">
                              <label style="padding: 0px;">
                                <input type="radio" style="margin-right: 5px;" name="BusTypeS" val="" class="clsSleeper" onchange="applyFilter();">
                                Sleeper</label>
                            </div>
                          </div>
                        </div>
                      </div-->
                      <div class="panel panel-default">
                        <div class="panel-heading"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                          <h4 class="panel-title"> Bus Type </h4>
                          </a> </div>
						  <?php  //exit;
						foreach($busdetail as $busdata)
						
						{
						$output1[]=valueunique($busdetail,'BUSTYPE',$busdata['BUSTYPE']);
							
						}
						
						$output=array_unique($output1);
						 //print_r($output);exit;
function valueunique($array, $key, $val) {
    foreach ($array as $item)
        if (isset($item[$key]) && $item[$key] == $val)
		{
            return $key;
    }
	else
	{
	return $val;
	}
}
?>
                        <div id="collapseTwo" class="panel-collapse collapse">
                          <div id="divBusTypeList" class="panel-body" style="padding: 0px 8px 8px 8px;">
						  <?php foreach($output as $bustype){if($bustype!="BUSTYPE")
							  {?>
                            <div class="checkbox">
                              <label>
							  
							  
                                <input type="checkbox" val="{{$bustype}}" class="clsTravelsType" onchange="doFilter();">
                                {{$bustype}}</label>
                            </div>
							<?php } }?>
                            
                          </div>
                        </div>
                      </div>
                      <!--div class="panel panel-default">
                        <div class="panel-heading"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                          <h4 class="panel-title"> Boarding Points </h4>
                          </a> </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                          <div id="divBoardingList" class="panel-body" style="padding: 0px 8px 8px 8px;">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="ABT X TRAVELS PERANGALATHUR" class="clsBoarding" onchange="doFilter();">
                                ABT X TRAVELS PERANGALATHUR</label>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour">
                          <h4 class="panel-title"> Dropping Points </h4>
                          </a> </div>
                        <div id="collapsefour" class="panel-collapse collapse">
                          <div id="divDroppingList" class="panel-body" style="padding: 0px 8px 8px 8px;">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="AARVEE Hotel" class="clsDropping" onchange="doFilter();">
                                AARVEE Hotel</label>
                            </div>
                            
                          </div>
                        </div>
                      </div-->
                    </div>
                  </div>
                </div>
                <div class="col-md-10" >
                  <div >
                    <div class="horizontal_bar">
                      <div class="col-lg-12">
                        <div class="row" style="padding: 10px; background-repeat: repeat-x; background-image: linear-gradient(to bottom, #F5F5F5 0%, #E8E8E8 100%);">
                          <div class="col-xs-6 col-sm-4">
                            <div class="trav_type"> Travels Type </div>
                          </div>
                          <div class="col-xs-6 col-sm-3">
                            <div class="trav_hrs"> <a id="aByDep" style="cursor: pointer;">Dep </a><span id="spnByDep" class="glyphicon"> </span>- Arr </div>
                          </div>
                          <div class="col-xs-6 col-sm-2">
                            <div class="trav_seats"> Seats </div>
                          </div>
                          <!--div class="col-xs-6 col-sm-1">
                            <div class="trav_ticket"> mTicket </div>
                          </div-->
                          <div class="col-xs-6 col-sm-2">
                            <div class="trav_fare"> <a id="aByFare" style="cursor: pointer;">Fare </a><span id="spnByFare" class="glyphicon"> </span><span id="spncomTitle" style="font-size: 13px; font-weight: bold; font-style: italic;
                                                            color: rgb(200, 48, 59);"></span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="divBusList">
                    <div class="" style="    background-color: rgba(255, 255, 255, 0.77);">
                      <div class="page-content-wrapper" style="margin-left: 15px;">
                        <div id="" class="travels" avaseat="16" >
                          <div class="row" dep="1260">
                            <div class="travels_search">
                              <div class="container-fluid">
                              <?php foreach($busdetail as $busdata)
							  { ?>
                              <div class="row">
                                  <div class="col-xs-6 col-sm-4">
                                    <div class="travels_name">
                                      <ul>
                                        <li><strong>{{$busdata['TRAVELNAME']}}</strong></li>
                                        <li><small>{{$busdata['BUSTYPE']}}</small></li>
                                        <li><small class="text-muted" style="text-decoration: underline;cursor:pointer;" title="<?php if($busdata['CANCELPOLICY']){foreach($busdata['CANCELPOLICY'] as $cancel){foreach($cancel['WSCANCELLATIONPOLICIES'] as $cancel1){echo "TIME BEFORE DEPARTURE ".$cancel1['TIMEBEFOREDEPT']."        percentage-".$cancel1['CANCELLATIONCHARGE']."%";echo "\n";}}}?>">Cancel Policy</small></li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="col-xs-6 col-sm-3">
                                    <ul class="travel_time">
                                      <li><span>{{date('d-m-Y H:i:sa',strtotime($busdata['DEPARTURETIME']))}}<span class="text-muted">>></span> {{date('d-m-Y H:i:sa',strtotime($busdata['ARRIVALTIME']))}}</span></li>
                                      
                                    </ul>
                                  </div>
                                  <div class="col-xs-6 col-sm-2">
                                    <ul>
                                      <li><strong>{{$busdata['AVAILABLESEATS']}} seats</strong></li>
                                    </ul>
                                  </div>
                                  <!--div class="col-xs-6 col-sm-1">
                                    <div class="mobile-ticket-disabled">
                                      <div class="hidden-xs">5</div>
                                    </div>
                                  </div-->
                                  <div class="col-xs-6 col-sm-2">
                                    <ul>
                                      <li>
                                        <div class="rupee"></div>
                                        <div class="hidden-xs">
                                          <p></p>
                                          <div class="cost_of_ticket"><strong><i class="fa fa-inr"></i></strong><strong>{{$busdata['AVAILABLEFARES']}}</strong> </div>
                                          <p></p>
                                        </div>
                                        <div class="visible-xs">
                                          <div id="toggle2">
                                            <div class="cost_of_ticket"><span class="ruppe_icon"></span>{{$busdata['AVAILABLEFARES']}} &nbsp; <a class="glyphicon glyphicon-chevron-right" id="view_seats_mobile"></a></div>
                                          </div>
                                        </div>
                                      </li>
                                      <div class="hidden-xs">
                                        <div id="toggle3">
                                          <li>
                                            <button type="button" id="btnViewSeats_{{$busdata['ROUTEID']}}" class="btn btn-primary" onclick="test('{{$busdata['ROUTEID']}}','{{$busdata['BUSTYPE']}}','{{$busdata['TRAVELNAME']}}','{{$busdata['DEPARTURETIME']}}','{{$busdata['ARRIVALTIME']}}','{{$busdata['BUSSOURCE']}}');" >View Seats</button>
                                          </li>
                                        </div>
                                      </div>
                                    </ul>
                                  </div>
                                </div> 
                                <div id="divSeatsView_{{$busdata['ROUTEID']}}" tripid="100001616980488344" arr="1815" dep="1260" isidreq="0" class="bus_tickets_block">
                              <div class="row">
                                <div class="view_seats_1" id="view_seats_{{$busdata['ROUTEID']}}" style="overflow: hidden; display: block;">
                                  <div class="modal-body">
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="mainFF">
                                          <div class="row" id="seat_layout_{{$busdata['ROUTEID']}}">
                                            <div class="seat-layout-1">
                                              <div class="col-md-12">
                                                <div class="low-dek-seat-arrange">
												<div class="upperDeck" id="upperdeck_{{$busdata['ROUTEID']}}">
                                                    <div class="upperLabel"></div>
                                                    <div class="upper-seats-area" id="upperseat_{{$busdata['ROUTEID']}}">
													</div>
													</div>
                                                  <div class="lowerDeck">
                                                    <div class="lowerLabel"></div>
                                                    <div class="lower-seats-area" id="lowerseat_{{$busdata['ROUTEID']}}">
                                                      
                                                    </div>
                                                    <div class="bpListVal"></div>
                                                    <div class="clear"></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-4" id="row_align">
                                        <div class="row">
                                          <div class="col-md-4">
                                            <div class="seatSelectionMeta">
                                              <ol class="seatsDefn" style="display: block;">
                                                <li class="availableSeat"><span>Available Seat</span></li>
                                                <li class="availableLadiesSeat"><span>Reserved for ladies</span></li>
                                                <li class="selectedSeat"><span>Selected Seat</span></li>
                                                <li class="bookedSeat"><span>Booked Seat</span></li>
                                              </ol>
                                              <div class="brdr"></div>
                                              <div class="yourSeats">Seat(s) : <span id="spnSeat_{{$busdata['ROUTEID']}}" style="color: red;"></span></div>
                                              <div class="totalAmount">Base Fare : Rs. <span id="spnAmt{{$busdata['ROUTEID']}}" style="color: red;">0.00</span></div>
                                              <div class="totalAmount">Service Tax : Rs. <span id="spnSerAmt_{{$busdata['ROUTEID']}}" style="color: red;">NA</span></div>
                                              <div class="totalAmount">Total Fare : Rs. <span id="spnTotAmt{{$busdata['ROUTEID']}}" style="color: red;">0.00</span></div>
                                            </div>
                                            <div class="clear"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <div class="row">
									<form method="get" action="<?php echo url();?>/retailer/bus/book">
                                      <div class="col-xs-6 col-sm-6">
                                        <div class="button_select">
                                        <input type="hidden" name="routeid" value="{{$busdata['ROUTEID']}}">
                                        <input type="hidden" name="sourceid" value="{{$input['formplace']}}">
                                        <input type="hidden" name="destinationid" value="{{$input['toplace']}}">
                                        <input type="hidden" name="sourcename" value="{{$input['sourcename']}}">
                                        <input type="hidden" name="destinationname" value="{{$input['destinationname']}}">
                                        <input type="hidden" name="dateofjourney" value="{{$dateofjourney}}">
                                        <input type="hidden" name="deptime" value="{{$busdata['DEPARTURETIME']}}">
                                        <input type="hidden" name="arrtime" value="{{$busdata['ARRIVALTIME']}}">
                                        <input type="hidden" name="bustype" value="{{$busdata['BUSTYPE']}}">
                                        <input type="hidden" name="travelname" value="{{$busdata['TRAVELNAME']}}">
										<input type="hidden" name="seats" id="totalseat_{{$busdata['ROUTEID']}}" value="">
                                        <input type="hidden" name="amount" id="totalamount_{{$busdata['ROUTEID']}}" value="">
                                          <select id="ddlBoarding{{$busdata['ROUTEID']}}" name="boarding" class="form-control">
                                           <option value="0">Select Boarding</option>
                                            
										   <?php foreach($busdata['BOARDINGPOINTSDETAILS'] as $boardingdetail)
										   {foreach ($boardingdetail['WSCITYPOINTDETAILS'] as $boarding){?>
                                            <option value="{{$boarding['CITYPOINTID']}}">{{$boarding['CITYPOINTLOCATION']}}</option>
                                            <?php } }?>
                                            </select>
                                        </div>
                                      </div>
                                      <div class="col-xs-6 col-sm-2">
                                        <div class="button_close">
										
                                          <button type="submit"  class="btn btn-primary">Continue</button>
										  
                                        </div>
                                      </div>
									  </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                                <?php } ?>
                              </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
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