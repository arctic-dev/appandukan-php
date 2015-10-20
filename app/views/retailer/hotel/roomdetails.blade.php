@extends('layouts.retailer')
@section('content')

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


.five-stars-container {
  display: inline-block;
  position: relative;
  font-family: 'Glyphicons Halflings';
  font-size: 14px;
  text-align: left;
  cursor: default;
  white-space: nowrap;
  line-height: 1.2em;
  color: #dbdbdb; }
  .five-stars-container .five-stars, .five-stars-container.editable-rating .ui-slider-range {
    display: block;
    overflow: hidden;
    position: relative;
    background: #fff;
    padding-left: 1px; }
    .five-stars-container .five-stars:before, .five-stars-container.editable-rating .ui-slider-range:before {
      content: "\2605\2605\2605\2605\2605";
      color: #fdb714; }
    .five-stars-container .five-stars.transparent-bg, .five-stars-container.editable-rating .ui-slider-range.transparent-bg {
      background: none; }
  .five-stars-container:before {
    display: block;
    position: absolute;
    top: 0;
    left: 1px;
    content: "\2605\2605\2605\2605\2605";
    z-index: 0;
 background: #fff;	}
	

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
        <li>Search Hotel Rooms</li>
      </ol>
      <h1>Search Hotel Rooms</h1>
      
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
                      <!--div class="panel panel-default">
                        <div class="panel-heading"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                          <h4 class="panel-title"> Bus Type </h4>
                          </a> </div>
						  
                        <div id="collapseTwo" class="panel-collapse collapse">
                          <div id="divBusTypeList" class="panel-body" style="padding: 0px 8px 8px 8px;">
						  
                            <div class="checkbox">
                              <label>
							  
							  
                                <input type="checkbox" val="" class="clsTravelsType" onchange="doFilter();">
                                </label>
                            </div>
						
                            
                          </div>
                        </div>
                      </div-->
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
                            <div class="trav_type"> HOTEL IMAGE  </div>
                          </div>
                          <div class="col-xs-6 col-sm-3">
                            <div class="trav_hrs"> <a id="aByDep" style="cursor: pointer;">HOTEL DESCRIPTION</a><span id="spnByDep" class="glyphicon"> </span>  </div>
                          </div>
                          <div class="col-xs-6 col-sm-2">
                            <div class="trav_seats">  </div>
                          </div>
                          <!--div class="col-xs-6 col-sm-1">
                            <div class="trav_ticket"> mTicket </div>
                          </div-->
                          <div class="col-xs-6 col-sm-2">
                            <div class="trav_fare"> <a id="aByFare" style="cursor: pointer;"></a><span id="spnByFare" class="glyphicon"> </span><span id="spncomTitle" style="font-size: 13px; font-weight: bold; font-style: italic;
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
                              <?php foreach ($searchoutput as $search) { 
							  
							  $ad=implode('-',$input['noadult']);
							$ch=implode('-',$input['nochild']);
							if(isset($input['childage']))
							{
							$age=implode('-',$input['childage']);
							}
							else
							{
							$age="";
							}
							foreach($search->HotelResults as $proper) {
                                ?><article class="box">
                                    <figure class="col-sm-5 col-md-4">
                                        <a title="" href="{{url('roomdescription/'.$proper->HotelCode)}}" class="hover-effect popup-gallery"><img width="270" height="160" alt="Hotel Image" src="{{$proper->HotelPicture}}"></a>
                                    </figure>
                                    <div class="details col-sm-7 col-md-8">
                                        <div>
                                            <div>
                                                <h4 class="box-title">{{$proper->HotelName}}<small><i class="soap-icon-departure yellow-color"></i>{{$proper->HotelAddress}}</small></h4>
                                                
                                            </div>
                                            <div>
                                                <div class="five-stars-container">
												<?php if($proper->StarRating==1)
												{?>
                                                    <span class="five-stars" style="width: 20%;"></span>
                                                <?php } elseif($proper->StarRating==2) { ?>
												<span class="five-stars" style="width: 40%;"></span>
												<?php } elseif($proper->StarRating==3) {?>
												<span class="five-stars" style="width: 60%;"></span>
												<?php } elseif($proper->StarRating==4) {?>
												<span class="five-stars" style="width: 80%;"></span>
												<?php } elseif($proper->StarRating==5) {?>
												<span class="five-stars" style="width: 100%;"></span>
												<?php  } ?>
												</div>
                                                
                                            </div>
                                        </div>
                                        <div>
                                            <p><?php $string=$proper->HotelDescription; echo htmlspecialchars_decode($string);?></p>
                                            <div>
                                                <p class="price"><small>ROOMPRICE:{{$proper->Price->CurrencyCode}}{{$proper->Price->RoomPrice}}</small></p>
												<p class="price"><small>TOTAL:{{$proper->Price->CurrencyCode}}{{$proper->Price->PublishedPriceRoundedOff}}</small></p>
												
												<p class="price"><small>TOTAL WITH DISCOUNT:{{$proper->Price->CurrencyCode}}{{$proper->Price->OfferedPriceRoundedOff}}</small></p>
												</div>
												<div>
												<form action="{{url('retailer/hotel/roomdescription')}}">
												<input type="hidden" name="hotelcode" value="{{$proper->HotelCode}}">
                                                <input type="hidden" name="resultindex" value="{{$proper->ResultIndex}}">
                                                <input type="hidden" name="traceid" value="{{$search->TraceId}}">
                                                <input type="hidden" name="noofrooms" value="{{$search->NoOfRooms}}">
                                                <input type="hidden" name="CheckInDate" value="{{$search->CheckInDate}}">
                                                <input type="hidden" name="CheckOutDate" value="{{$search->CheckOutDate}}">
                                                <input type="hidden" name="noadult" value="{{$ad}}">
                                                <input type="hidden" name="nochild" value="{{$ch}}">
                                                <input type="hidden" name="age" value="{{$age}}">
                                                <input type="hidden" name="guestnationality" value="{{$input['GuestNationality']}}">
                                                <input type="hidden" name="countrycode" value="{{$input['CountryCode']}}">
                                                <button class="button btn-small btn-danger full-width text-center" style="text-decoration:none;" type="submit">SELECT</button>
												</form>
										   </div>
                                        </div>
                                    </div>
                                </article>
                                <?php } }?>
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