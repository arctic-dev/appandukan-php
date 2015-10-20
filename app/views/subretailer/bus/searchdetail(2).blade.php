@extends('layouts.superadmin')
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
.modal-footer
{
	border-top:0px;
}

</style>
<script>
$( document ).ready(function() {
	
	
	
    $( "#view_seats_mobile" ).click(function() {

  $( "#divSeatsView1" ).toggle( "slow", function() {
   
  });
});


    $( "#btnViewSeats" ).click(function() {

  $( "#divSeatsView1" ).toggle( "slow", function() {
   
  });
});

});

</script>
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
                <div class="col-md-3">
                  <div >
                    <div class="panel-group" id="accordion">
                      <div class="panel panel-default">
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
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                          <h4 class="panel-title"> Bus Type </h4>
                          </a> </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                          <div id="divBusTypeList" class="panel-body" style="padding: 0px 8px 8px 8px;">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="A/c Seater (2+2)" class="clsTravelsType" onchange="doFilter();">
                                A/c Seater (2+2)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="A/C Seater/Sleeper (2+1)" class="clsTravelsType" onchange="doFilter();">
                                A/C Seater/Sleeper (2+1)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="A/C Semi Sleeper (2+2)" class="clsTravelsType" onchange="doFilter();">
                                A/C Semi Sleeper (2+2)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="A/C SemiSleeper (2+2)" class="clsTravelsType" onchange="doFilter();">
                                A/C SemiSleeper (2+2)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="A/C Sleeper (2+1)" class="clsTravelsType" onchange="doFilter();">
                                A/C Sleeper (2+1)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Leyland A/C Seater Hitech Pushback (2+2)" class="clsTravelsType" onchange="doFilter();">
                                Leyland A/C Seater Hitech Pushback (2+2)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Leyland A/C Sleeper (2+1)" class="clsTravelsType" onchange="doFilter();">
                                Leyland A/C Sleeper (2+1)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Leyland A/C Sleeper Executive Luxury (2+1)" class="clsTravelsType" onchange="doFilter();">
                                Leyland A/C Sleeper Executive Luxury (2+1)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Leyland A/C Sleeper Hitech (2+1)" class="clsTravelsType" onchange="doFilter();">
                                Leyland A/C Sleeper Hitech (2+1)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Leyland A/C Sleeper Luxury (2+1)" class="clsTravelsType" onchange="doFilter();">
                                Leyland A/C Sleeper Luxury (2+1)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Leyland Non A/C Seater Executive Luxury (2+2)" class="clsTravelsType" onchange="doFilter();">
                                Leyland Non A/C Seater Executive Luxury (2+2)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Leyland Non A/C Seater Hitech (2+2)" class="clsTravelsType" onchange="doFilter();">
                                Leyland Non A/C Seater Hitech (2+2)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Leyland Non A/C Seater Pushback (2+2)" class="clsTravelsType" onchange="doFilter();">
                                Leyland Non A/C Seater Pushback (2+2)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Leyland Non A/C Seater Semi Sleeper (2+2)" class="clsTravelsType" onchange="doFilter();">
                                Leyland Non A/C Seater Semi Sleeper (2+2)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Leyland Non A/C Seater/Sleeper Business Class (2+1)" class="clsTravelsType" onchange="doFilter();">
                                Leyland Non A/C Seater/Sleeper Business Class (2+1)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Leyland Non A/C Seater/Sleeper Hitech (2+1)" class="clsTravelsType" onchange="doFilter();">
                                Leyland Non A/C Seater/Sleeper Hitech (2+1)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Leyland Non A/C Sleeper (2+1)" class="clsTravelsType" onchange="doFilter();">
                                Leyland Non A/C Sleeper (2+1)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Leyland Non A/C Sleeper/Semi Sleeper (2+1)" class="clsTravelsType" onchange="doFilter();">
                                Leyland Non A/C Sleeper/Semi Sleeper (2+1)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Luxura A/C Sleeper Executive Luxury (2+1)" class="clsTravelsType" onchange="doFilter();">
                                Luxura A/C Sleeper Executive Luxury (2+1)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Mercedes Benz A/C Sleeper(2+1)" class="clsTravelsType" onchange="doFilter();">
                                Mercedes Benz A/C Sleeper(2+1)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Mercedes Benz Multi Axle A/C Sleeper (2+1)" class="clsTravelsType" onchange="doFilter();">
                                Mercedes Benz Multi Axle A/C Sleeper (2+1)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Multi Axle A/C Sleeper (2+1)" class="clsTravelsType" onchange="doFilter();">
                                Multi Axle A/C Sleeper (2+1)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Non A/C Airbus (2+2)" class="clsTravelsType" onchange="doFilter();">
                                Non A/C Airbus (2+2)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Non A/C Hi-Tech Semi Sleeper (2+2)" class="clsTravelsType" onchange="doFilter();">
                                Non A/C Hi-Tech Semi Sleeper (2+2)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Non A/C Push Back (2+2)" class="clsTravelsType" onchange="doFilter();">
                                Non A/C Push Back (2+2)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Non A/C Seater (1+1+1)" class="clsTravelsType" onchange="doFilter();">
                                Non A/C Seater (1+1+1)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Non A/C Seater (2+1)" class="clsTravelsType" onchange="doFilter();">
                                Non A/C Seater (2+1)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Non A/c Seater (2+2)" class="clsTravelsType" onchange="doFilter();">
                                Non A/c Seater (2+2)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Non A/C Seater (2+2)" class="clsTravelsType" onchange="doFilter();">
                                Non A/C Seater (2+2)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Non A/C Seater Executive Luxury (2+2)" class="clsTravelsType" onchange="doFilter();">
                                Non A/C Seater Executive Luxury (2+2)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Non A/C Seater/Sleeper (2+1)" class="clsTravelsType" onchange="doFilter();">
                                Non A/C Seater/Sleeper (2+1)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Non A/C Seater/Sleeper Hitech (2+1)" class="clsTravelsType" onchange="doFilter();">
                                Non A/C Seater/Sleeper Hitech (2+1)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Non A/C Semi Sleeper (2+1)" class="clsTravelsType" onchange="doFilter();">
                                Non A/C Semi Sleeper (2+1)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Non A/C Semi Sleeper (2+2)" class="clsTravelsType" onchange="doFilter();">
                                Non A/C Semi Sleeper (2+2)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Non A/C Semisleeper (2+2)" class="clsTravelsType" onchange="doFilter();">
                                Non A/C Semisleeper (2+2)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Non A/C Sleeper  (2+1)" class="clsTravelsType" onchange="doFilter();">
                                Non A/C Sleeper  (2+1)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Scania AC Multi Axle Semi Sleeper(2+2)" class="clsTravelsType" onchange="doFilter();">
                                Scania AC Multi Axle Semi Sleeper(2+2)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Volvo A/C Multi Axle (2+2)" class="clsTravelsType" onchange="doFilter();">
                                Volvo A/C Multi Axle (2+2)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Volvo A/C Multi Axle Semi Sleeper (2+2)" class="clsTravelsType" onchange="doFilter();">
                                Volvo A/C Multi Axle Semi Sleeper (2+2)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Volvo A/C MultiAxle Semisleeper (2+2)" class="clsTravelsType" onchange="doFilter();">
                                Volvo A/C MultiAxle Semisleeper (2+2)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Volvo A/C Semi Sleeper (2+2)" class="clsTravelsType" onchange="doFilter();">
                                Volvo A/C Semi Sleeper (2+2)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Volvo B11R MultiAxle SemiSleeper Auto Trans.(2+2)" class="clsTravelsType" onchange="doFilter();">
                                Volvo B11R MultiAxle SemiSleeper Auto Trans.(2+2)</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
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
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Adyar" class="clsBoarding" onchange="doFilter();">
                                Adyar</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Adyar (Pickup Van/Bus)" class="clsBoarding" onchange="doFilter();">
                                Adyar (Pickup Van/Bus)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Adyar (Van Pickup)" class="clsBoarding" onchange="doFilter();">
                                Adyar (Van Pickup)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Adyar - Parveen Travels Office" class="clsBoarding" onchange="doFilter();">
                                Adyar - Parveen Travels Office</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Airport" class="clsBoarding" onchange="doFilter();">
                                Airport</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Airport 9.30PM Cbe" class="clsBoarding" onchange="doFilter();">
                                Airport 9.30PM Cbe</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Airport off" class="clsBoarding" onchange="doFilter();">
                                Airport off</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Alandur" class="clsBoarding" onchange="doFilter();">
                                Alandur</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Alandur Post office" class="clsBoarding" onchange="doFilter();">
                                Alandur Post office</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="ALANDUR(KPN)" class="clsBoarding" onchange="doFilter();">
                                ALANDUR(KPN)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Anna University" class="clsBoarding" onchange="doFilter();">
                                Anna University</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Ashok Pillar" class="clsBoarding" onchange="doFilter();">
                                Ashok Pillar</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="ashok pillar" class="clsBoarding" onchange="doFilter();">
                                ashok pillar</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="ashok pillar 9.30PM Cbe" class="clsBoarding" onchange="doFilter();">
                                ashok pillar 9.30PM Cbe</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="ashok pillar Offi" class="clsBoarding" onchange="doFilter();">
                                ashok pillar Offi</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Ashok Pillar-9:20 PM" class="clsBoarding" onchange="doFilter();">
                                Ashok Pillar-9:20 PM</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="ASHOKPILLAR" class="clsBoarding" onchange="doFilter();">
                                ASHOKPILLAR</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Bhavani Travels - T.Nagar" class="clsBoarding" onchange="doFilter();">
                                Bhavani Travels - T.Nagar</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="CENTRAL" class="clsBoarding" onchange="doFilter();">
                                CENTRAL</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Central" class="clsBoarding" onchange="doFilter();">
                                Central</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Central Leeya" class="clsBoarding" onchange="doFilter();">
                                Central Leeya</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Central Railway Station" class="clsBoarding" onchange="doFilter();">
                                Central Railway Station</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Central Railway Station-9:00 PM" class="clsBoarding" onchange="doFilter();">
                                Central Railway Station-9:00 PM</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Chengalpat" class="clsBoarding" onchange="doFilter();">
                                Chengalpat</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Chengalpat Toll" class="clsBoarding" onchange="doFilter();">
                                Chengalpat Toll</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Chengalpat Toll Plaza" class="clsBoarding" onchange="doFilter();">
                                Chengalpat Toll Plaza</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Chengalpattu" class="clsBoarding" onchange="doFilter();">
                                Chengalpattu</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="CHENGALPATTU" class="clsBoarding" onchange="doFilter();">
                                CHENGALPATTU</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="chengalpattu By pass" class="clsBoarding" onchange="doFilter();">
                                chengalpattu By pass</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Chengalpattu Bypass" class="clsBoarding" onchange="doFilter();">
                                Chengalpattu Bypass</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Chengalpattu Toll Gate" class="clsBoarding" onchange="doFilter();">
                                Chengalpattu Toll Gate</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="chengalpattu Toll Plaza" class="clsBoarding" onchange="doFilter();">
                                chengalpattu Toll Plaza</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Chengalpattu Toll Plaza" class="clsBoarding" onchange="doFilter();">
                                Chengalpattu Toll Plaza</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Chengalpet" class="clsBoarding" onchange="doFilter();">
                                Chengalpet</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Chengalpet toll gate" class="clsBoarding" onchange="doFilter();">
                                Chengalpet toll gate</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Chengalpet toll gate 9.30PM Cbe" class="clsBoarding" onchange="doFilter();">
                                Chengalpet toll gate 9.30PM Cbe</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Chengalpet-10:20 PM" class="clsBoarding" onchange="doFilter();">
                                Chengalpet-10:20 PM</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Chengulpet  Toll Gate" class="clsBoarding" onchange="doFilter();">
                                Chengulpet  Toll Gate</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Chromepet 9940645900" class="clsBoarding" onchange="doFilter();">
                                Chromepet 9940645900</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Chrompet" class="clsBoarding" onchange="doFilter();">
                                Chrompet</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Chrompet 9.30PM Cbe" class="clsBoarding" onchange="doFilter();">
                                Chrompet 9.30PM Cbe</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Chrompet Bus Stop" class="clsBoarding" onchange="doFilter();">
                                Chrompet Bus Stop</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Chrompet off" class="clsBoarding" onchange="doFilter();">
                                Chrompet off</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Chrompett" class="clsBoarding" onchange="doFilter();">
                                Chrompett</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Conti Travels - Egmore" class="clsBoarding" onchange="doFilter();">
                                Conti Travels - Egmore</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="CROMPET" class="clsBoarding" onchange="doFilter();">
                                CROMPET</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Dr MGR University" class="clsBoarding" onchange="doFilter();">
                                Dr MGR University</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Egmore" class="clsBoarding" onchange="doFilter();">
                                Egmore</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Egmore 1" class="clsBoarding" onchange="doFilter();">
                                Egmore 1</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Egmore, Conti Travels" class="clsBoarding" onchange="doFilter();">
                                Egmore, Conti Travels</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Egmore-9:15 PM" class="clsBoarding" onchange="doFilter();">
                                Egmore-9:15 PM</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Ekkattuthangal" class="clsBoarding" onchange="doFilter();">
                                Ekkattuthangal</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Golden Beach" class="clsBoarding" onchange="doFilter();">
                                Golden Beach</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Guduvacherry" class="clsBoarding" onchange="doFilter();">
                                Guduvacherry</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Guduvancheri" class="clsBoarding" onchange="doFilter();">
                                Guduvancheri</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Guduvancherry" class="clsBoarding" onchange="doFilter();">
                                Guduvancherry</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Guduvancherry 9940645900" class="clsBoarding" onchange="doFilter();">
                                Guduvancherry 9940645900</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Guduvancherry Bus Stand" class="clsBoarding" onchange="doFilter();">
                                Guduvancherry Bus Stand</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Guduvanchery" class="clsBoarding" onchange="doFilter();">
                                Guduvanchery</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Guduvanchery busstop" class="clsBoarding" onchange="doFilter();">
                                Guduvanchery busstop</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="GUINDY" class="clsBoarding" onchange="doFilter();">
                                GUINDY</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Guindy" class="clsBoarding" onchange="doFilter();">
                                Guindy</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Guindy 9.30PM Cbe" class="clsBoarding" onchange="doFilter();">
                                Guindy 9.30PM Cbe</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Guindy Subway" class="clsBoarding" onchange="doFilter();">
                                Guindy Subway</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Guindy- Alandur Post Office" class="clsBoarding" onchange="doFilter();">
                                Guindy- Alandur Post Office</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Guindy-9:20 PM" class="clsBoarding" onchange="doFilter();">
                                Guindy-9:20 PM</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Hindu Mission Hospital" class="clsBoarding" onchange="doFilter();">
                                Hindu Mission Hospital</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Hotel Mamalla" class="clsBoarding" onchange="doFilter();">
                                Hotel Mamalla</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="indian oil petrorl bunk,koyembedu" class="clsBoarding" onchange="doFilter();">
                                indian oil petrorl bunk,koyembedu</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Kalpakkam" class="clsBoarding" onchange="doFilter();">
                                Kalpakkam</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Kanchipuram" class="clsBoarding" onchange="doFilter();">
                                Kanchipuram</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Kanchipuram Bypass" class="clsBoarding" onchange="doFilter();">
                                Kanchipuram Bypass</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Kanchipuram-10:45 PM" class="clsBoarding" onchange="doFilter();">
                                Kanchipuram-10:45 PM</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Kasi Theatre" class="clsBoarding" onchange="doFilter();">
                                Kasi Theatre</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Kasi Theatre Bus Stop" class="clsBoarding" onchange="doFilter();">
                                Kasi Theatre Bus Stop</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Kathipara Junction" class="clsBoarding" onchange="doFilter();">
                                Kathipara Junction</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Kattankulathur" class="clsBoarding" onchange="doFilter();">
                                Kattankulathur</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Kaveripakkam" class="clsBoarding" onchange="doFilter();">
                                Kaveripakkam</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Kovalam Toll" class="clsBoarding" onchange="doFilter();">
                                Kovalam Toll</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Koyambedu" class="clsBoarding" onchange="doFilter();">
                                Koyambedu</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="koyambedu" class="clsBoarding" onchange="doFilter();">
                                koyambedu</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="KOYAMBEDU" class="clsBoarding" onchange="doFilter();">
                                KOYAMBEDU</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Koyambedu 9.30PM cbe" class="clsBoarding" onchange="doFilter();">
                                Koyambedu 9.30PM cbe</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Koyambedu Kfc" class="clsBoarding" onchange="doFilter();">
                                Koyambedu Kfc</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Koyambedu Offic" class="clsBoarding" onchange="doFilter();">
                                Koyambedu Offic</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Koyambedu Omni Bus Stand" class="clsBoarding" onchange="doFilter();">
                                Koyambedu Omni Bus Stand</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Koyambedu Omni Bus Terminus-9:00 PM" class="clsBoarding" onchange="doFilter();">
                                Koyambedu Omni Bus Terminus-9:00 PM</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Koyambedu SSR Travels" class="clsBoarding" onchange="doFilter();">
                                Koyambedu SSR Travels</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="KOYEMBADU-CITY" class="clsBoarding" onchange="doFilter();">
                                KOYEMBADU-CITY</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Koyembedu" class="clsBoarding" onchange="doFilter();">
                                Koyembedu</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="KOYEMBEDU" class="clsBoarding" onchange="doFilter();">
                                KOYEMBEDU</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Koyembedu New Parveen Terminus" class="clsBoarding" onchange="doFilter();">
                                Koyembedu New Parveen Terminus</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Koyembedu-10:00 PM" class="clsBoarding" onchange="doFilter();">
                                Koyembedu-10:00 PM</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Koyembedu-9:00 PM" class="clsBoarding" onchange="doFilter();">
                                Koyembedu-9:00 PM</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Madhya Kailash" class="clsBoarding" onchange="doFilter();">
                                Madhya Kailash</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Maduraival-10:15 PM" class="clsBoarding" onchange="doFilter();">
                                Maduraival-10:15 PM</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Maduranthagam Bye Pass" class="clsBoarding" onchange="doFilter();">
                                Maduranthagam Bye Pass</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Maduranthagam Bypass" class="clsBoarding" onchange="doFilter();">
                                Maduranthagam Bypass</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Maduravoyal" class="clsBoarding" onchange="doFilter();">
                                Maduravoyal</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Maduravoyal Bypass" class="clsBoarding" onchange="doFilter();">
                                Maduravoyal Bypass</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Mahendhra City" class="clsBoarding" onchange="doFilter();">
                                Mahendhra City</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Mahendra City" class="clsBoarding" onchange="doFilter();">
                                Mahendra City</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="MAHENDRA CITY" class="clsBoarding" onchange="doFilter();">
                                MAHENDRA CITY</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="MAHENDRA CITY 9.30PM Cbe" class="clsBoarding" onchange="doFilter();">
                                MAHENDRA CITY 9.30PM Cbe</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Mahindra City" class="clsBoarding" onchange="doFilter();">
                                Mahindra City</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Mahindracity" class="clsBoarding" onchange="doFilter();">
                                Mahindracity</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Maraimalai Nagar" class="clsBoarding" onchange="doFilter();">
                                Maraimalai Nagar</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="MARAIMALAI NAGAR(KPN)" class="clsBoarding" onchange="doFilter();">
                                MARAIMALAI NAGAR(KPN)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Maraimalainagar" class="clsBoarding" onchange="doFilter();">
                                Maraimalainagar</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Maraimalar Nagar" class="clsBoarding" onchange="doFilter();">
                                Maraimalar Nagar</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Mathiyakailash" class="clsBoarding" onchange="doFilter();">
                                Mathiyakailash</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Medavakkam" class="clsBoarding" onchange="doFilter();">
                                Medavakkam</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Meenampakkam 9940645900" class="clsBoarding" onchange="doFilter();">
                                Meenampakkam 9940645900</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Melmaruvathur" class="clsBoarding" onchange="doFilter();">
                                Melmaruvathur</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="MELMARUVATHUR" class="clsBoarding" onchange="doFilter();">
                                MELMARUVATHUR</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Mmda Signal" class="clsBoarding" onchange="doFilter();">
                                Mmda Signal</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Nanganallur" class="clsBoarding" onchange="doFilter();">
                                Nanganallur</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="NERKUNDRAM" class="clsBoarding" onchange="doFilter();">
                                NERKUNDRAM</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Omni Bus Stand" class="clsBoarding" onchange="doFilter();">
                                Omni Bus Stand</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Opp Toyotta Showroom" class="clsBoarding" onchange="doFilter();">
                                Opp Toyotta Showroom</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="PALLAVARAM" class="clsBoarding" onchange="doFilter();">
                                PALLAVARAM</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Pallavaram" class="clsBoarding" onchange="doFilter();">
                                Pallavaram</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Pallavaram 9.30PM Cbe" class="clsBoarding" onchange="doFilter();">
                                Pallavaram 9.30PM Cbe</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Pallavaram Bus Stop" class="clsBoarding" onchange="doFilter();">
                                Pallavaram Bus Stop</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Pallikaranai" class="clsBoarding" onchange="doFilter();">
                                Pallikaranai</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Parcel office" class="clsBoarding" onchange="doFilter();">
                                Parcel office</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Perugalathur" class="clsBoarding" onchange="doFilter();">
                                Perugalathur</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Perungalalthur" class="clsBoarding" onchange="doFilter();">
                                Perungalalthur</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Perungalaltur" class="clsBoarding" onchange="doFilter();">
                                Perungalaltur</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Perungalaltur 9.30PM Cbe" class="clsBoarding" onchange="doFilter();">
                                Perungalaltur 9.30PM Cbe</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Perungalaltur-9:50 PM" class="clsBoarding" onchange="doFilter();">
                                Perungalaltur-9:50 PM</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="perungalathur" class="clsBoarding" onchange="doFilter();">
                                perungalathur</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="PERUNGALATHUR" class="clsBoarding" onchange="doFilter();">
                                PERUNGALATHUR</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Perungalathur" class="clsBoarding" onchange="doFilter();">
                                Perungalathur</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Perungalathur Akash Bhavan" class="clsBoarding" onchange="doFilter();">
                                Perungalathur Akash Bhavan</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Perungalathur Bus Stop" class="clsBoarding" onchange="doFilter();">
                                Perungalathur Bus Stop</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Perungalathur Near Police Booth and Kamarajar Statue-9:50 PM" class="clsBoarding" onchange="doFilter();">
                                Perungalathur Near Police Booth and Kamarajar Statue-9:50 PM</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Perungalathur off" class="clsBoarding" onchange="doFilter();">
                                Perungalathur off</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Perungalathur Rathibharathi Travels" class="clsBoarding" onchange="doFilter();">
                                Perungalathur Rathibharathi Travels</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Poonamallee" class="clsBoarding" onchange="doFilter();">
                                Poonamallee</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Poonamallee Bypass" class="clsBoarding" onchange="doFilter();">
                                Poonamallee Bypass</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Poonamallee(KFC)" class="clsBoarding" onchange="doFilter();">
                                Poonamallee(KFC)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Poonamallee-10:30 PM" class="clsBoarding" onchange="doFilter();">
                                Poonamallee-10:30 PM</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Porur" class="clsBoarding" onchange="doFilter();">
                                Porur</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Porur Toll" class="clsBoarding" onchange="doFilter();">
                                Porur Toll</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Porur Toll Gate" class="clsBoarding" onchange="doFilter();">
                                Porur Toll Gate</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Porur Toll gate" class="clsBoarding" onchange="doFilter();">
                                Porur Toll gate</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Porur Tollgate" class="clsBoarding" onchange="doFilter();">
                                Porur Tollgate</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Potheri" class="clsBoarding" onchange="doFilter();">
                                Potheri</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Rohini Theatre" class="clsBoarding" onchange="doFilter();">
                                Rohini Theatre</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="santhi petrol punk" class="clsBoarding" onchange="doFilter();">
                                santhi petrol punk</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Santhi Petrol Punk" class="clsBoarding" onchange="doFilter();">
                                Santhi Petrol Punk</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Selaiyur" class="clsBoarding" onchange="doFilter();">
                                Selaiyur</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Shanthi petrol bunk" class="clsBoarding" onchange="doFilter();">
                                Shanthi petrol bunk</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Shanthi Petrol Pump" class="clsBoarding" onchange="doFilter();">
                                Shanthi Petrol Pump</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="ShanthiPetrolbunk" class="clsBoarding" onchange="doFilter();">
                                ShanthiPetrolbunk</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="ShanthiPetrolbunk 9.30PM Cbe" class="clsBoarding" onchange="doFilter();">
                                ShanthiPetrolbunk 9.30PM Cbe</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Shanti Petrol Bunk" class="clsBoarding" onchange="doFilter();">
                                Shanti Petrol Bunk</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Singaperumal Koil" class="clsBoarding" onchange="doFilter();">
                                Singaperumal Koil</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Singaperumal koil" class="clsBoarding" onchange="doFilter();">
                                Singaperumal koil</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Singaperumal Koil - Welcome Travels" class="clsBoarding" onchange="doFilter();">
                                Singaperumal Koil - Welcome Travels</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Singaperumal Koil 9.30PM Cbe" class="clsBoarding" onchange="doFilter();">
                                Singaperumal Koil 9.30PM Cbe</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="SingaperumalKoil" class="clsBoarding" onchange="doFilter();">
                                SingaperumalKoil</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="SP Kovil (Singaperumal Kovil)" class="clsBoarding" onchange="doFilter();">
                                SP Kovil (Singaperumal Kovil)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Sriperumbudur" class="clsBoarding" onchange="doFilter();">
                                Sriperumbudur</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Sriperumbudur Toll Gate" class="clsBoarding" onchange="doFilter();">
                                Sriperumbudur Toll Gate</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="SRM COLLEGE" class="clsBoarding" onchange="doFilter();">
                                SRM COLLEGE</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Srm College" class="clsBoarding" onchange="doFilter();">
                                Srm College</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="SRM COLLEGE 9.30PM Cbe" class="clsBoarding" onchange="doFilter();">
                                SRM COLLEGE 9.30PM Cbe</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="SRM COLLEGE Off" class="clsBoarding" onchange="doFilter();">
                                SRM COLLEGE Off</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="SRM COLLEGE-10:05 PM" class="clsBoarding" onchange="doFilter();">
                                SRM COLLEGE-10:05 PM</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="SRM Univercity" class="clsBoarding" onchange="doFilter();">
                                SRM Univercity</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Srm University" class="clsBoarding" onchange="doFilter();">
                                Srm University</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="srm university" class="clsBoarding" onchange="doFilter();">
                                srm university</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="SRM University" class="clsBoarding" onchange="doFilter();">
                                SRM University</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="SRM UNIVERSITY" class="clsBoarding" onchange="doFilter();">
                                SRM UNIVERSITY</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Srm University Entrance" class="clsBoarding" onchange="doFilter();">
                                Srm University Entrance</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Srp Tool (Pickup Van/Bus)" class="clsBoarding" onchange="doFilter();">
                                Srp Tool (Pickup Van/Bus)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="T  Nagar" class="clsBoarding" onchange="doFilter();">
                                T  Nagar</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="T Nagar" class="clsBoarding" onchange="doFilter();">
                                T Nagar</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="T.Nagar -Parveen Travels (P) Ltd" class="clsBoarding" onchange="doFilter();">
                                T.Nagar -Parveen Travels (P) Ltd</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="tambaram" class="clsBoarding" onchange="doFilter();">
                                tambaram</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Tambaram" class="clsBoarding" onchange="doFilter();">
                                Tambaram</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Tambaram 9.30PM Cbe" class="clsBoarding" onchange="doFilter();">
                                Tambaram 9.30PM Cbe</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Tambaram Hindu" class="clsBoarding" onchange="doFilter();">
                                Tambaram Hindu</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Tambaram-9:30 PM" class="clsBoarding" onchange="doFilter();">
                                Tambaram-9:30 PM</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="thambaram" class="clsBoarding" onchange="doFilter();">
                                thambaram</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="THAMBARAM" class="clsBoarding" onchange="doFilter();">
                                THAMBARAM</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Thambaram Pru" class="clsBoarding" onchange="doFilter();">
                                Thambaram Pru</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Tharamani" class="clsBoarding" onchange="doFilter();">
                                Tharamani</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Tharamani (Pickup Van/Bus)" class="clsBoarding" onchange="doFilter();">
                                Tharamani (Pickup Van/Bus)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Thiruvanmiyur" class="clsBoarding" onchange="doFilter();">
                                Thiruvanmiyur</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Thiruvanmiyur(Adyar Bakery)" class="clsBoarding" onchange="doFilter();">
                                Thiruvanmiyur(Adyar Bakery)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Tidel Park" class="clsBoarding" onchange="doFilter();">
                                Tidel Park</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Tindivanam" class="clsBoarding" onchange="doFilter();">
                                Tindivanam</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Urapakkam" class="clsBoarding" onchange="doFilter();">
                                Urapakkam</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Urapakkam-9:55 PM" class="clsBoarding" onchange="doFilter();">
                                Urapakkam-9:55 PM</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="URAPKKAM" class="clsBoarding" onchange="doFilter();">
                                URAPKKAM</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Urappakam" class="clsBoarding" onchange="doFilter();">
                                Urappakam</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Urappakkam" class="clsBoarding" onchange="doFilter();">
                                Urappakkam</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Urappakkam 9.30PM Cbe" class="clsBoarding" onchange="doFilter();">
                                Urappakkam 9.30PM Cbe</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Uthandi Toll" class="clsBoarding" onchange="doFilter();">
                                Uthandi Toll</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Uttandi Toll" class="clsBoarding" onchange="doFilter();">
                                Uttandi Toll</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Vadapalani" class="clsBoarding" onchange="doFilter();">
                                Vadapalani</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Vadapalani 9.30PM Cbe" class="clsBoarding" onchange="doFilter();">
                                Vadapalani 9.30PM Cbe</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Vadapalani Bus Stop" class="clsBoarding" onchange="doFilter();">
                                Vadapalani Bus Stop</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Vadapalani Offic" class="clsBoarding" onchange="doFilter();">
                                Vadapalani Offic</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Vandallor Zoo" class="clsBoarding" onchange="doFilter();">
                                Vandallor Zoo</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="VANDALLUR (PICKUP VAN -3)" class="clsBoarding" onchange="doFilter();">
                                VANDALLUR (PICKUP VAN -3)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Vandaloor" class="clsBoarding" onchange="doFilter();">
                                Vandaloor</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="vandaloor" class="clsBoarding" onchange="doFilter();">
                                vandaloor</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Vandaloor 9.30PM Cbe" class="clsBoarding" onchange="doFilter();">
                                Vandaloor 9.30PM Cbe</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Vandalur" class="clsBoarding" onchange="doFilter();">
                                Vandalur</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="VANDALUR" class="clsBoarding" onchange="doFilter();">
                                VANDALUR</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Velachery" class="clsBoarding" onchange="doFilter();">
                                Velachery</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Velappanchavadi" class="clsBoarding" onchange="doFilter();">
                                Velappanchavadi</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Velappanchavadi Bus Stop" class="clsBoarding" onchange="doFilter();">
                                Velappanchavadi Bus Stop</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Vellore" class="clsBoarding" onchange="doFilter();">
                                Vellore</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Velloure Bypass" class="clsBoarding" onchange="doFilter();">
                                Velloure Bypass</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Villupuram" class="clsBoarding" onchange="doFilter();">
                                Villupuram</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="WALLTAX ROAD" class="clsBoarding" onchange="doFilter();">
                                WALLTAX ROAD</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Walltax Road" class="clsBoarding" onchange="doFilter();">
                                Walltax Road</label>
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
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Annur" class="clsDropping" onchange="doFilter();">
                                Annur</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Avinashi" class="clsDropping" onchange="doFilter();">
                                Avinashi</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Avinashi  Bypass" class="clsDropping" onchange="doFilter();">
                                Avinashi  Bypass</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Avinashi by pass" class="clsDropping" onchange="doFilter();">
                                Avinashi by pass</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Avinashi By Pass Junction" class="clsDropping" onchange="doFilter();">
                                Avinashi By Pass Junction</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Avinashi Road" class="clsDropping" onchange="doFilter();">
                                Avinashi Road</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Bhavani" class="clsDropping" onchange="doFilter();">
                                Bhavani</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="CBE-omni bus stand" class="clsDropping" onchange="doFilter();">
                                CBE-omni bus stand</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Chinniampalayam" class="clsDropping" onchange="doFilter();">
                                Chinniampalayam</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Chinnyampalayam" class="clsDropping" onchange="doFilter();">
                                Chinnyampalayam</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Chithode By Pass" class="clsDropping" onchange="doFilter();">
                                Chithode By Pass</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="chithra airport" class="clsDropping" onchange="doFilter();">
                                chithra airport</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Chitra" class="clsDropping" onchange="doFilter();">
                                Chitra</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Citra" class="clsDropping" onchange="doFilter();">
                                Citra</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Coimbatore" class="clsDropping" onchange="doFilter();">
                                Coimbatore</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="coimbatore" class="clsDropping" onchange="doFilter();">
                                coimbatore</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Coimbatore Airport" class="clsDropping" onchange="doFilter();">
                                Coimbatore Airport</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Coimbatore By pass" class="clsDropping" onchange="doFilter();">
                                Coimbatore By pass</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Coimbatore Omni Bus Stand" class="clsDropping" onchange="doFilter();">
                                Coimbatore Omni Bus Stand</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Coimbatore omni bus stand" class="clsDropping" onchange="doFilter();">
                                Coimbatore omni bus stand</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Erode" class="clsDropping" onchange="doFilter();">
                                Erode</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="ERODE" class="clsDropping" onchange="doFilter();">
                                ERODE</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Erode Bypass" class="clsDropping" onchange="doFilter();">
                                Erode Bypass</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="GandhiPuram" class="clsDropping" onchange="doFilter();">
                                GandhiPuram</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Gandhipuram" class="clsDropping" onchange="doFilter();">
                                Gandhipuram</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Gandhipuram Bus Stand" class="clsDropping" onchange="doFilter();">
                                Gandhipuram Bus Stand</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Gandhipuram-06:05:00" class="clsDropping" onchange="doFilter();">
                                Gandhipuram-06:05:00</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Gandhipuram-06:45:00" class="clsDropping" onchange="doFilter();">
                                Gandhipuram-06:45:00</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Gandhipuramm" class="clsDropping" onchange="doFilter();">
                                Gandhipuramm</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Gandipuram" class="clsDropping" onchange="doFilter();">
                                Gandipuram</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Gandthipuram" class="clsDropping" onchange="doFilter();">
                                Gandthipuram</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Ghandipuram" class="clsDropping" onchange="doFilter();">
                                Ghandipuram</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="GOBI" class="clsDropping" onchange="doFilter();">
                                GOBI</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Gobichettipalaiyam" class="clsDropping" onchange="doFilter();">
                                Gobichettipalaiyam</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Gopichettipalayam" class="clsDropping" onchange="doFilter();">
                                Gopichettipalayam</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Hope Collage" class="clsDropping" onchange="doFilter();">
                                Hope Collage</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Hope College" class="clsDropping" onchange="doFilter();">
                                Hope College</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Hopes" class="clsDropping" onchange="doFilter();">
                                Hopes</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Hopes College" class="clsDropping" onchange="doFilter();">
                                Hopes College</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="hopes college" class="clsDropping" onchange="doFilter();">
                                hopes college</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Hopes College-06:30:00" class="clsDropping" onchange="doFilter();">
                                Hopes College-06:30:00</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="karumathammanpatti" class="clsDropping" onchange="doFilter();">
                                karumathammanpatti</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Karumathampatti" class="clsDropping" onchange="doFilter();">
                                Karumathampatti</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Kavindapadi(Chithode)" class="clsDropping" onchange="doFilter();">
                                Kavindapadi(Chithode)</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="KMCH" class="clsDropping" onchange="doFilter();">
                                KMCH</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Kmch" class="clsDropping" onchange="doFilter();">
                                Kmch</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="KMCH AIRPORT" class="clsDropping" onchange="doFilter();">
                                KMCH AIRPORT</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Kovilpalayam" class="clsDropping" onchange="doFilter();">
                                Kovilpalayam</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Kovilpallayam" class="clsDropping" onchange="doFilter();">
                                Kovilpallayam</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Kurumbapalayam" class="clsDropping" onchange="doFilter();">
                                Kurumbapalayam</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="L n T Bypass Coimbatore" class="clsDropping" onchange="doFilter();">
                                L n T Bypass Coimbatore</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Lakshmi Mill Cornner" class="clsDropping" onchange="doFilter();">
                                Lakshmi Mill Cornner</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="MSS Parcel Office" class="clsDropping" onchange="doFilter();">
                                MSS Parcel Office</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Nava India" class="clsDropping" onchange="doFilter();">
                                Nava India</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Near Omni Busstand" class="clsDropping" onchange="doFilter();">
                                Near Omni Busstand</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Neelambur" class="clsDropping" onchange="doFilter();">
                                Neelambur</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="omni bus stand" class="clsDropping" onchange="doFilter();">
                                omni bus stand</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Omni Bus Stand" class="clsDropping" onchange="doFilter();">
                                Omni Bus Stand</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="OMNI Bus Stand-06:20:00" class="clsDropping" onchange="doFilter();">
                                OMNI Bus Stand-06:20:00</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="OMNI Bus Stand-06:30:00" class="clsDropping" onchange="doFilter();">
                                OMNI Bus Stand-06:30:00</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Omni Bus stand^^09362625500 Omni Bus stand, shope No. 2,Gandhipura" class="clsDropping" onchange="doFilter();">
                                Omni Bus stand^^09362625500 Omni Bus stand, shope No. 2,Gandhipura</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Omni Busstand" class="clsDropping" onchange="doFilter();">
                                Omni Busstand</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Ondipudhur" class="clsDropping" onchange="doFilter();">
                                Ondipudhur</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Pappampatti Perivu" class="clsDropping" onchange="doFilter();">
                                Pappampatti Perivu</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Perumanallur" class="clsDropping" onchange="doFilter();">
                                Perumanallur</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Perundurai" class="clsDropping" onchange="doFilter();">
                                Perundurai</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Pillamedu" class="clsDropping" onchange="doFilter();">
                                Pillamedu</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Puliampatti" class="clsDropping" onchange="doFilter();">
                                Puliampatti</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Puliyampatti" class="clsDropping" onchange="doFilter();">
                                Puliyampatti</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="RAMNAGAR" class="clsDropping" onchange="doFilter();">
                                RAMNAGAR</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="salem" class="clsDropping" onchange="doFilter();">
                                salem</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="SALEM" class="clsDropping" onchange="doFilter();">
                                SALEM</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="saravanampatti" class="clsDropping" onchange="doFilter();">
                                saravanampatti</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Saravanampatti" class="clsDropping" onchange="doFilter();">
                                Saravanampatti</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="SATHY" class="clsDropping" onchange="doFilter();">
                                SATHY</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Sathyamangalam" class="clsDropping" onchange="doFilter();">
                                Sathyamangalam</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Sathymangalam" class="clsDropping" onchange="doFilter();">
                                Sathymangalam</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Siddhapudur" class="clsDropping" onchange="doFilter();">
                                Siddhapudur</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Singanallur" class="clsDropping" onchange="doFilter();">
                                Singanallur</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Sitra" class="clsDropping" onchange="doFilter();">
                                Sitra</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Sulur Bus Stand" class="clsDropping" onchange="doFilter();">
                                Sulur Bus Stand</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Texcity Bus Depot" class="clsDropping" onchange="doFilter();">
                                Texcity Bus Depot</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Thudiyalur" class="clsDropping" onchange="doFilter();">
                                Thudiyalur</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Toll gate byepass jn. Coimbatore,^^09362625500, Toll gate" class="clsDropping" onchange="doFilter();">
                                Toll gate byepass jn. Coimbatore,^^09362625500, Toll gate</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Ttc Bus Stand" class="clsDropping" onchange="doFilter();">
                                Ttc Bus Stand</label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" val="Walayar" class="clsDropping" onchange="doFilter();">
                                Walayar</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-9" >
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
                          <div class="col-xs-6 col-sm-1">
                            <div class="trav_ticket"> mTicket </div>
                          </div>
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
                      <div class="page-content-wrapper" >
                        <div id="" class="travels" avaseat="16" >
                          <div dep="1260">
                            <div class="travels_search">
                              <div class="container-fluid">
                                <div class="row">
                                  <div class="col-xs-6 col-sm-4">
                                    <div class="travels_name">
                                      <ul>
                                        <li><strong>CRM  Raja Travels</strong></li>
                                        <li><small>Non A/C Semisleeper (2+2)</small></li>
                                        <li><small class="text-muted" style="text-decoration: underline;cursor:pointer;" onclick="openCPolicy(&quot;<tr><td>0 to 4 hours before journey time Cancellation charge is 100%</td></tr><tr><td>4 to 12 hours before journey time Cancellation charge is 50%</td></tr><tr><td>12 to 24 hours before journey time Cancellation charge is 25%</td></tr><tr><td>24 hours before journey time Cancellation charge is 10%</td></tr>&quot;);">Cancel Policy</small></li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="col-xs-6 col-sm-3">
                                    <ul class="travel_time">
                                      <li><span>09:00 PM <span class="text-muted">>></span> 06:15 AM</span></li>
                                      <li><span>Duration : 09:15 Hrs</span></li>
                                    </ul>
                                  </div>
                                  <div class="col-xs-6 col-sm-2">
                                    <ul class="travel_seats">
                                      <li><strong>16 seats</strong></li>
                                    </ul>
                                  </div>
                                  <div class="col-xs-6 col-sm-1">
                                    <div class="mobile-ticket-disabled">
                                    <ul class="travel_mobileticket">
                                    <li>5</li>
                                    </ul>
                                    </div>
                                  </div>
                                  <div class="col-xs-6 col-sm-2">
                                    <ul class="travel_far">
                                      <li>
                                        <div class="rupee"></div>
                                        <div class="hidden-xs">
                                          <p></p>
                                          <div class="cost_of_ticket"><strong><i class="fa fa-inr"></i></strong><strong>450</strong> </div>
                                          <p></p>
                                        </div>
                                        <div class="visible-xs">
                                          <div id="toggle2">
                                            <div class="cost_of_ticket"><a onclick="getTripDetails(&quot;100001616980488344&quot;,0,1260,1815,&quot;false&quot;,1,9493);" class="glyphicon glyphicon-chevron-right" id="view_seats_mobile"><span class="ruppe_icon"><i class="fa fa-inr"></i> </span> 450 &nbsp; </a></div>
                                          </div>
                                        </div>
                                      </li>
                                      <div class="hidden-xs">
                                        <div id="toggle3">
                                          <li>
                                            <button type="button" id="btnViewSeats" class="btn btn-primary" onclick="getTripDetails(&quot;100001616980488344&quot;,0,1260,1815,&quot;false&quot;,1,9493);">View Seats</button>
                                          </li>
                                        </div>
                                      </div>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="divSeatsView1" tripid="100001616980488344" arr="1815" dep="1260" isidreq="0" class="bus_tickets_block">
                              <div class="row">
                                <div class="view_seats_1" id="view_seats100001616980488344" style="overflow: hidden; display: block;">
                                  <div class="modal-body">
                                    <div class="row">
                                      <div class="col-md-8">
                                        <div class="mainFF">
                                          <div class="row">
                                            <div class="seat-layout-1">
                                              <div class="col-md-12 bus_background">
                                                <div class="low-dek-seat-arrange">
                                                  <div class="lowerDeck">
                                                    <div class="lowerLabel"></div>
                                                    <div class="lower-seats-area">
                                                      <div style="top:104px; left:120px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="22 | fare=Rs.450.00" available="false" ladies="false" zindex="0" length="1" title1="22" fare1="450.00" stax="0.00" basefare="450.00" class="bookedSeat"><strong>22</strong></span></div>
                                                      <div style="top:104px; left:144px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="23 | fare=Rs.450.00" available="true" ladies="false" zindex="0" length="1" title1="23" fare1="450.00" stax="0.00" basefare="450.00" class="availableSeat"><strong>23</strong></span></div>
                                                      <div style="top:78px; left:144px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="24 | fare=Rs.450.00" available="true" ladies="false" zindex="0" length="1" title1="24" fare1="450.00" stax="0.00" basefare="450.00" class="availableSeat"><strong>24</strong></span></div>
                                                      <div style="top:26px; left:144px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="25 | fare=Rs.450.00" available="true" ladies="false" zindex="0" length="1" title1="25" fare1="450.00" stax="0.00" basefare="450.00" class="availableSeat"><strong>25</strong></span></div>
                                                      <div style="top:0px; left:144px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="26 | fare=Rs.450.00" available="true" ladies="false" zindex="0" length="1" title1="26" fare1="450.00" stax="0.00" basefare="450.00" class="availableSeat"><strong>26</strong></span></div>
                                                      <div style="top:0px; left:168px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="27 | fare=Rs.450.00" available="true" ladies="false" zindex="0" length="1" title1="27" fare1="450.00" stax="0.00" basefare="450.00" class="availableSeat"><strong>27</strong></span></div>
                                                      <div style="top:26px; left:168px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="28 | fare=Rs.450.00" available="true" ladies="false" zindex="0" length="1" title1="28" fare1="450.00" stax="0.00" basefare="450.00" class="availableSeat"><strong>28</strong></span></div>
                                                      <div style="top:78px; left:168px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="29 | fare=Rs.450.00" available="false" ladies="false" zindex="0" length="1" title1="29" fare1="450.00" stax="0.00" basefare="450.00" class="bookedSeat"><strong>29</strong></span></div>
                                                      <div style="top:104px; left:168px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="30 | fare=Rs.450.00" available="false" ladies="false" zindex="0" length="1" title1="30" fare1="450.00" stax="0.00" basefare="450.00" class="bookedSeat"><strong>30</strong></span></div>
                                                      <div style="top:104px; left:192px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="31 | fare=Rs.450.00" available="true" ladies="false" zindex="0" length="1" title1="31" fare1="450.00" stax="0.00" basefare="450.00" class="availableSeat"><strong>31</strong></span></div>
                                                      <div style="top:0px; left:48px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="10 | fare=Rs.450.00" available="false" ladies="false" zindex="0" length="1" title1="10" fare1="450.00" stax="0.00" basefare="450.00" class="bookedSeat"><strong>10</strong></span></div>
                                                      <div style="top:78px; left:192px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="32 | fare=Rs.450.00" available="true" ladies="false" zindex="0" length="1" title1="32" fare1="450.00" stax="0.00" basefare="450.00" class="availableSeat"><strong>32</strong></span></div>
                                                      <div style="top:0px; left:72px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="11 | fare=Rs.450.00" available="false" ladies="false" zindex="0" length="1" title1="11" fare1="450.00" stax="0.00" basefare="450.00" class="bookedSeat"><strong>11</strong></span></div>
                                                      <div style="top:52px; left:192px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="33 | fare=Rs.450.00" available="true" ladies="false" zindex="0" length="1" title1="33" fare1="450.00" stax="0.00" basefare="450.00" class="availableSeat"><strong>33</strong></span></div>
                                                      <div style="top:26px; left:72px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="12 | fare=Rs.450.00" available="false" ladies="false" zindex="0" length="1" title1="12" fare1="450.00" stax="0.00" basefare="450.00" class="bookedSeat"><strong>12</strong></span></div>
                                                      <div style="top:26px; left:192px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="34 | fare=Rs.450.00" available="true" ladies="false" zindex="0" length="1" title1="34" fare1="450.00" stax="0.00" basefare="450.00" class="availableSeat"><strong>34</strong></span></div>
                                                      <div style="top:78px; left:72px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="13 | fare=Rs.450.00" available="false" ladies="false" zindex="0" length="1" title1="13" fare1="450.00" stax="0.00" basefare="450.00" class="bookedSeat"><strong>13</strong></span></div>
                                                      <div style="top:0px; left:192px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="35 | fare=Rs.450.00" available="true" ladies="false" zindex="0" length="1" title1="35" fare1="450.00" stax="0.00" basefare="450.00" class="availableSeat"><strong>35</strong></span></div>
                                                      <div style="top:104px; left:0px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="36 | fare=Rs.450.00" available="false" ladies="false" zindex="0" length="1" title1="36" fare1="450.00" stax="0.00" basefare="450.00" class="bookedSeat"><strong>36</strong></span></div>
                                                      <div style="top:104px; left:72px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="14 | fare=Rs.450.00" available="false" ladies="false" zindex="0" length="1" title1="14" fare1="450.00" stax="0.00" basefare="450.00" class="bookedSeat"><strong>14</strong></span></div>
                                                      <div style="top:104px; left:96px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="15 | fare=Rs.450.00" available="false" ladies="false" zindex="0" length="1" title1="15" fare1="450.00" stax="0.00" basefare="450.00" class="bookedSeat"><strong>15</strong></span></div>
                                                      <div style="top:78px; left:96px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="16 | fare=Rs.450.00" available="false" ladies="false" zindex="0" length="1" title1="16" fare1="450.00" stax="0.00" basefare="450.00" class="bookedSeat"><strong>16</strong></span></div>
                                                      <div style="top:26px; left:96px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="17 | fare=Rs.450.00" available="false" ladies="false" zindex="0" length="1" title1="17" fare1="450.00" stax="0.00" basefare="450.00" class="bookedSeat"><strong>17</strong></span></div>
                                                      <div style="top:0px; left:96px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="18 | fare=Rs.450.00" available="false" ladies="false" zindex="0" length="1" title1="18" fare1="450.00" stax="0.00" basefare="450.00" class="bookedSeat"><strong>18</strong></span></div>
                                                      <div style="top:0px; left:120px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="19 | fare=Rs.450.00" available="false" ladies="false" zindex="0" length="1" title1="19" fare1="450.00" stax="0.00" basefare="450.00" class="bookedSeat"><strong>19</strong></span></div>
                                                      <div style="top:26px; left:0px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="1 | fare=Rs.450.00" available="false" ladies="false" zindex="0" length="1" title1="1" fare1="450.00" stax="0.00" basefare="450.00" class="bookedSeat"><strong>1</strong></span></div>
                                                      <div style="top:0px; left:0px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="2 | fare=Rs.450.00" available="false" ladies="false" zindex="0" length="1" title1="2" fare1="450.00" stax="0.00" basefare="450.00" class="bookedSeat"><strong>2</strong></span></div>
                                                      <div style="top:0px; left:24px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="3 | fare=Rs.450.00" available="false" ladies="false" zindex="0" length="1" title1="3" fare1="450.00" stax="0.00" basefare="450.00" class="bookedSeat"><strong>3</strong></span></div>
                                                      <div style="top:26px; left:24px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="4 | fare=Rs.450.00" available="false" ladies="false" zindex="0" length="1" title1="4" fare1="450.00" stax="0.00" basefare="450.00" class="bookedSeat"><strong>4</strong></span></div>
                                                      <div style="top:78px; left:24px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="5 | fare=Rs.450.00" available="false" ladies="false" zindex="0" length="1" title1="5" fare1="450.00" stax="0.00" basefare="450.00" class="bookedSeat"><strong>5</strong></span></div>
                                                      <div style="top:104px; left:24px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="6 | fare=Rs.450.00" available="false" ladies="false" zindex="0" length="1" title1="6" fare1="450.00" stax="0.00" basefare="450.00" class="bookedSeat"><strong>6</strong></span></div>
                                                      <div style="top:104px; left:48px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="7 | fare=Rs.450.00" available="false" ladies="false" zindex="0" length="1" title1="7" fare1="450.00" stax="0.00" basefare="450.00" class="bookedSeat"><strong>7</strong></span></div>
                                                      <div style="top:78px; left:48px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="8 | fare=Rs.450.00" available="true" ladies="false" zindex="0" length="1" title1="8" fare1="450.00" stax="0.00" basefare="450.00" class="availableSeat"><strong>8</strong></span></div>
                                                      <div style="top:26px; left:48px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="9 | fare=Rs.450.00" available="true" ladies="false" zindex="0" length="1" title1="9" fare1="450.00" stax="0.00" basefare="450.00" class="availableSeat"><strong>9</strong></span></div>
                                                      <div style="top:26px; left:120px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="20 | fare=Rs.450.00" available="false" ladies="false" zindex="0" length="1" title1="20" fare1="450.00" stax="0.00" basefare="450.00" class="bookedSeat"><strong>20</strong></span></div>
                                                      <div style="top:78px; left:120px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="21 | fare=Rs.450.00" available="false" ladies="false" zindex="0" length="1" title1="21" fare1="450.00" stax="0.00" basefare="450.00" class="bookedSeat"><strong>21</strong></span></div>
                                                    </div>
                                                    <div class="bpListVal"></div>
                                                    <div class="clear"></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="seat-layout-1">
                                              <div class="col-md-12 bus_background">
                                                <div class="low-dek-seat-arrange">
                                                  <div class="lowerDeck">
                                                    <div class="lowerLabel"></div>
                                                    <div class="lower-seats-area">
                                                      <div style="top:104px; left:216px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="10A | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="10A" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>10A</strong></span></div>
                                                      <div style="top:78px; left:216px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="10B | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="10B" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>10B</strong></span></div>
                                                      <div style="top:26px; left:216px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="10D | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="10D" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>10D</strong></span></div>
                                                      <div style="top:0px; left:216px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="10E | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="10E" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>10E</strong></span></div>
                                                      <div style="top:104px; left:168px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="8A | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="8A" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>8A</strong></span></div>
                                                      <div style="top:78px; left:168px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="8B | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="8B" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>8B</strong></span></div>
                                                      <div style="top:26px; left:168px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="8D | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="8D" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>8D</strong></span></div>
                                                      <div style="top:104px; left:72px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="4A | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="4A" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>4A</strong></span></div>
                                                      <div style="top:0px; left:168px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="8E | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="8E" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>8E</strong></span></div>
                                                      <div style="top:78px; left:72px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="4B | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="4B" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>4B</strong></span></div>
                                                      <div style="top:26px; left:72px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="4D | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="4D" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>4D</strong></span></div>
                                                      <div style="top:0px; left:72px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="4E | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="4E" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>4E</strong></span></div>
                                                      <div style="top:104px; left:240px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="11A | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="11A" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>11A</strong></span></div>
                                                      <div style="top:78px; left:240px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="11B | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="11B" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>11B</strong></span></div>
                                                      <div style="top:26px; left:240px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="11D | fare=Rs.700.00" available="true" ladies="false" zindex="0" length="1" title1="11D" fare1="700.00" stax="0.00" basefare="700.00" class="availableSeat"><strong>11D</strong></span></div>
                                                      <div style="top:0px; left:240px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="11E | fare=Rs.700.00" available="true" ladies="false" zindex="0" length="1" title1="11E" fare1="700.00" stax="0.00" basefare="700.00" class="availableSeat"><strong>11E</strong></span></div>
                                                      <div style="top:104px; left:192px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="9A | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="9A" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>9A</strong></span></div>
                                                      <div style="top:78px; left:192px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="9B | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="9B" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>9B</strong></span></div>
                                                      <div style="top:26px; left:192px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="9D | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="9D" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>9D</strong></span></div>
                                                      <div style="top:104px; left:96px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="5A | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="5A" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>5A</strong></span></div>
                                                      <div style="top:0px; left:192px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="9E | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="9E" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>9E</strong></span></div>
                                                      <div style="top:78px; left:96px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="5B | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="5B" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>5B</strong></span></div>
                                                      <div style="top:26px; left:96px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="5D | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="5D" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>5D</strong></span></div>
                                                      <div style="top:104px; left:0px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="1A | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="1A" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>1A</strong></span></div>
                                                      <div style="top:0px; left:96px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="5E | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="5E" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>5E</strong></span></div>
                                                      <div style="top:78px; left:0px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="1B | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="1B" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>1B</strong></span></div>
                                                      <div style="top:26px; left:0px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="1D | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="1D" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>1D</strong></span></div>
                                                      <div style="top:0px; left:0px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="1E | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="1E" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>1E</strong></span></div>
                                                      <div style="top:104px; left:264px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="12A | fare=Rs.700.00" available="true" ladies="false" zindex="0" length="1" title1="12A" fare1="700.00" stax="0.00" basefare="700.00" class="availableSeat"><strong>12A</strong></span></div>
                                                      <div style="top:78px; left:264px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="12B | fare=Rs.700.00" available="true" ladies="false" zindex="0" length="1" title1="12B" fare1="700.00" stax="0.00" basefare="700.00" class="availableSeat"><strong>12B</strong></span></div>
                                                      <div style="top:52px; left:264px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="12C | fare=Rs.700.00" available="true" ladies="false" zindex="0" length="1" title1="12C" fare1="700.00" stax="0.00" basefare="700.00" class="availableSeat"><strong>12C</strong></span></div>
                                                      <div style="top:26px; left:264px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="12D | fare=Rs.700.00" available="true" ladies="false" zindex="0" length="1" title1="12D" fare1="700.00" stax="0.00" basefare="700.00" class="availableSeat"><strong>12D</strong></span></div>
                                                      <div style="top:0px; left:264px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="12E | fare=Rs.700.00" available="true" ladies="false" zindex="0" length="1" title1="12E" fare1="700.00" stax="0.00" basefare="700.00" class="availableSeat"><strong>12E</strong></span></div>
                                                      <div style="top:104px; left:120px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="6A | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="6A" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>6A</strong></span></div>
                                                      <div style="top:78px; left:120px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="6B | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="6B" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>6B</strong></span></div>
                                                      <div style="top:26px; left:120px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="6D | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="6D" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>6D</strong></span></div>
                                                      <div style="top:104px; left:24px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="2A | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="2A" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>2A</strong></span></div>
                                                      <div style="top:0px; left:120px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="6E | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="6E" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>6E</strong></span></div>
                                                      <div style="top:78px; left:24px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="2B | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="2B" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>2B</strong></span></div>
                                                      <div style="top:26px; left:24px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="2D | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="2D" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>2D</strong></span></div>
                                                      <div style="top:0px; left:24px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="2E | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="2E" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>2E</strong></span></div>
                                                      <div style="top:104px; left:144px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="7A | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="7A" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>7A</strong></span></div>
                                                      <div style="top:78px; left:144px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="7B | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="7B" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>7B</strong></span></div>
                                                      <div style="top:26px; left:144px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="7D | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="7D" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>7D</strong></span></div>
                                                      <div style="top:104px; left:48px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="3A | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="3A" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>3A</strong></span></div>
                                                      <div style="top:0px; left:144px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="7E | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="7E" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>7E</strong></span></div>
                                                      <div style="top:78px; left:48px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="3B | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="3B" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>3B</strong></span></div>
                                                      <div style="top:26px; left:48px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="3D | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="3D" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>3D</strong></span></div>
                                                      <div style="top:0px; left:48px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="3E | fare=Rs.700.00" available="false" ladies="false" zindex="0" length="1" title1="3E" fare1="700.00" stax="0.00" basefare="700.00" class="bookedSeat"><strong>3E</strong></span></div>
                                                    </div>
                                                    <div class="bpListVal"></div>
                                                    <div class="clear"></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="seat-layout-1">
                                              <div class="col-md-12 bus_background">
                                                <div class="low-dek-seat-arrange">
                                                  <div class="lowerDeck">
                                                    <div class="lowerLabel"></div>
                                                    <div class="lower-seats-area">
                                                      <div style="top:0px; left:168px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="22 | fare=Rs.500.00" available="false" ladies="false" zindex="0" length="1" title1="22" fare1="500.00" stax="0.00" basefare="500.00" class="bookedSeat"><strong>22</strong></span></div>
                                                      <div style="top:26px; left:168px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="23 | fare=Rs.500.00" available="false" ladies="false" zindex="0" length="1" title1="23" fare1="500.00" stax="0.00" basefare="500.00" class="bookedSeat"><strong>23</strong></span></div>
                                                      <div style="top:78px; left:168px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="24 | fare=Rs.500.00" available="true" ladies="false" zindex="0" length="1" title1="24" fare1="500.00" stax="0.00" basefare="500.00" class="availableSeat"><strong>24</strong></span></div>
                                                      <div style="top:78px; left:192px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="25 | fare=Rs.500.00" available="true" ladies="false" zindex="0" length="1" title1="25" fare1="500.00" stax="0.00" basefare="500.00" class="availableSeat"><strong>25</strong></span></div>
                                                      <div style="top:26px; left:192px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="26 | fare=Rs.500.00" available="true" ladies="false" zindex="0" length="1" title1="26" fare1="500.00" stax="0.00" basefare="500.00" class="availableSeat"><strong>26</strong></span></div>
                                                      <div style="top:0px; left:192px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="27 | fare=Rs.500.00" available="true" ladies="false" zindex="0" length="1" title1="27" fare1="500.00" stax="0.00" basefare="500.00" class="availableSeat"><strong>27</strong></span></div>
                                                      <div style="top:0px; left:216px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="28 | fare=Rs.500.00" available="true" ladies="false" zindex="0" length="1" title1="28" fare1="500.00" stax="0.00" basefare="500.00" class="availableSeat"><strong>28</strong></span></div>
                                                      <div style="top:26px; left:216px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="29 | fare=Rs.500.00" available="true" ladies="false" zindex="0" length="1" title1="29" fare1="500.00" stax="0.00" basefare="500.00" class="availableSeat"><strong>29</strong></span></div>
                                                      <div style="top:52px; left:216px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="30 | fare=Rs.500.00" available="true" ladies="false" zindex="0" length="1" title1="30" fare1="500.00" stax="0.00" basefare="500.00" class="availableSeat"><strong>30</strong></span></div>
                                                      <div style="top:78px; left:216px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="31 | fare=Rs.500.00" available="true" ladies="false" zindex="0" length="1" title1="31" fare1="500.00" stax="0.00" basefare="500.00" class="availableSeat"><strong>31</strong></span></div>
                                                      <div style="top:0px; left:72px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="10 | fare=Rs.500.00" available="false" ladies="false" zindex="0" length="1" title1="10" fare1="500.00" stax="0.00" basefare="500.00" class="bookedSeat"><strong>10</strong></span></div>
                                                      <div style="top:26px; left:72px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="11 | fare=Rs.500.00" available="false" ladies="false" zindex="0" length="1" title1="11" fare1="500.00" stax="0.00" basefare="500.00" class="bookedSeat"><strong>11</strong></span></div>
                                                      <div style="top:78px; left:72px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="12 | fare=Rs.500.00" available="false" ladies="false" zindex="0" length="1" title1="12" fare1="500.00" stax="0.00" basefare="500.00" class="bookedSeat"><strong>12</strong></span></div>
                                                      <div style="top:78px; left:96px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="13 | fare=Rs.500.00" available="true" ladies="false" zindex="0" length="1" title1="13" fare1="500.00" stax="0.00" basefare="500.00" class="availableSeat"><strong>13</strong></span></div>
                                                      <div style="top:26px; left:96px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="14 | fare=Rs.500.00" available="true" ladies="false" zindex="0" length="1" title1="14" fare1="500.00" stax="0.00" basefare="500.00" class="availableSeat"><strong>14</strong></span></div>
                                                      <div style="top:0px; left:96px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="15 | fare=Rs.500.00" available="true" ladies="false" zindex="0" length="1" title1="15" fare1="500.00" stax="0.00" basefare="500.00" class="availableSeat"><strong>15</strong></span></div>
                                                      <div style="top:0px; left:120px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="16 | fare=Rs.500.00" available="false" ladies="false" zindex="0" length="1" title1="16" fare1="500.00" stax="0.00" basefare="500.00" class="bookedSeat"><strong>16</strong></span></div>
                                                      <div style="top:26px; left:120px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="17 | fare=Rs.500.00" available="false" ladies="false" zindex="0" length="1" title1="17" fare1="500.00" stax="0.00" basefare="500.00" class="bookedSeat"><strong>17</strong></span></div>
                                                      <div style="top:78px; left:120px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="18 | fare=Rs.500.00" available="true" ladies="false" zindex="0" length="1" title1="18" fare1="500.00" stax="0.00" basefare="500.00" class="availableSeat"><strong>18</strong></span></div>
                                                      <div style="top:78px; left:144px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="19 | fare=Rs.500.00" available="true" ladies="false" zindex="0" length="1" title1="19" fare1="500.00" stax="0.00" basefare="500.00" class="availableSeat"><strong>19</strong></span></div>
                                                      <div style="top:78px; left:0px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="1 | fare=Rs.500.00" available="false" ladies="false" zindex="0" length="1" title1="1" fare1="500.00" stax="0.00" basefare="500.00" class="bookedSeat"><strong>1</strong></span></div>
                                                      <div style="top:26px; left:0px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="2 | fare=Rs.500.00" available="true" ladies="false" zindex="0" length="1" title1="2" fare1="500.00" stax="0.00" basefare="500.00" class="availableSeat"><strong>2</strong></span></div>
                                                      <div style="top:0px; left:0px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="3 | fare=Rs.500.00" available="true" ladies="false" zindex="0" length="1" title1="3" fare1="500.00" stax="0.00" basefare="500.00" class="availableSeat"><strong>3</strong></span></div>
                                                      <div style="top:0px; left:24px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="4 | fare=Rs.500.00" available="true" ladies="false" zindex="0" length="1" title1="4" fare1="500.00" stax="0.00" basefare="500.00" class="availableSeat"><strong>4</strong></span></div>
                                                      <div style="top:26px; left:24px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="5 | fare=Rs.500.00" available="true" ladies="false" zindex="0" length="1" title1="5" fare1="500.00" stax="0.00" basefare="500.00" class="availableSeat"><strong>5</strong></span></div>
                                                      <div style="top:78px; left:24px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="6 | fare=Rs.500.00" available="false" ladies="false" zindex="0" length="1" title1="6" fare1="500.00" stax="0.00" basefare="500.00" class="bookedSeat"><strong>6</strong></span></div>
                                                      <div style="top:78px; left:48px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="7 | fare=Rs.500.00" available="false" ladies="false" zindex="0" length="1" title1="7" fare1="500.00" stax="0.00" basefare="500.00" class="bookedSeat"><strong>7</strong></span></div>
                                                      <div style="top:26px; left:48px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="8 | fare=Rs.500.00" available="true" ladies="false" zindex="0" length="1" title1="8" fare1="500.00" stax="0.00" basefare="500.00" class="availableSeat"><strong>8</strong></span></div>
                                                      <div style="top:0px; left:48px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="9 | fare=Rs.500.00" available="true" ladies="false" zindex="0" length="1" title1="9" fare1="500.00" stax="0.00" basefare="500.00" class="availableSeat"><strong>9</strong></span></div>
                                                      <div style="top:26px; left:144px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="20 | fare=Rs.500.00" available="true" ladies="false" zindex="0" length="1" title1="20" fare1="500.00" stax="0.00" basefare="500.00" class="availableSeat"><strong>20</strong></span></div>
                                                      <div style="top:0px; left:144px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="21 | fare=Rs.500.00" available="true" ladies="false" zindex="0" length="1" title1="21" fare1="500.00" stax="0.00" basefare="500.00" class="availableSeat"><strong>21</strong></span></div>
                                                    </div>
                                                    <div class="bpListVal"></div>
                                                    <div class="clear"></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="seat-layout">
                                              <div class="col-md-12 bus_background">
                                                <div class="upperDeck">
                                                  <div class="upperLabel"></div>
                                                  <div class="upper-seats-area">
                                                    <div style="top:26px; left:48px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="U5 | fare=Rs.963.00" available="false" ladies="true" zindex="1" length="2" title1="U5" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>U5</strong></span></div>
                                                    <div style="top:0px; left:48px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="U6 | fare=Rs.963.00" available="false" ladies="true" zindex="1" length="2" title1="U6" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>U6</strong></span></div>
                                                    <div style="top:0px; left:96px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="U7 | fare=Rs.963.00" available="false" ladies="false" zindex="1" length="2" title1="U7" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>U7</strong></span></div>
                                                    <div style="top:26px; left:96px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="U8 | fare=Rs.963.00" available="false" ladies="false" zindex="1" length="2" title1="U8" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>U8</strong></span></div>
                                                    <div style="top:78px; left:96px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="U9 | fare=Rs.963.00" available="false" ladies="false" zindex="1" length="2" title1="U9" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>U9</strong></span></div>
                                                    <div style="top:26px; left:144px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="U11 | fare=Rs.963.00" available="false" ladies="false" zindex="1" length="2" title1="U11" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>U11</strong></span></div>
                                                    <div style="top:78px; left:144px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="U10 | fare=Rs.963.00" available="false" ladies="false" zindex="1" length="2" title1="U10" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>U10</strong></span></div>
                                                    <div style="top:0px; left:192px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="U13 | fare=Rs.963.00" available="true" ladies="false" zindex="1" length="2" title1="U13" fare1="963.00" stax="0.00" basefare="963.00" class="availableSleeper"><strong>U13</strong></span></div>
                                                    <div style="top:0px; left:144px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="U12 | fare=Rs.963.00" available="false" ladies="false" zindex="1" length="2" title1="U12" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>U12</strong></span></div>
                                                    <div style="top:78px; left:192px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="U15 | fare=Rs.963.00" available="false" ladies="false" zindex="1" length="2" title1="U15" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>U15</strong></span></div>
                                                    <div style="top:26px; left:192px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="U14 | fare=Rs.963.00" available="true" ladies="false" zindex="1" length="2" title1="U14" fare1="963.00" stax="0.00" basefare="963.00" class="availableSleeper"><strong>U14</strong></span></div>
                                                    <div style="top:0px; left:0px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="U1 | fare=Rs.963.00" available="false" ladies="true" zindex="1" length="2" title1="U1" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>U1</strong></span></div>
                                                    <div style="top:26px; left:0px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="U2 | fare=Rs.963.00" available="false" ladies="true" zindex="1" length="2" title1="U2" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>U2</strong></span></div>
                                                    <div style="top:78px; left:0px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="U3 | fare=Rs.963.00" available="false" ladies="false" zindex="1" length="2" title1="U3" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>U3</strong></span></div>
                                                    <div style="top:78px; left:48px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="U4 | fare=Rs.963.00" available="false" ladies="false" zindex="1" length="2" title1="U4" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>U4</strong></span></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="seat-layout-1">
                                              <div class="col-md-12 bus_background">
                                                <div class="low-dek-seat-arrange">
                                                  <div class="lowerDeck">
                                                    <div class="lowerLabel"></div>
                                                    <div class="lower-seats-area">
                                                      <div style="top:0px; left:0px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="L1 | fare=Rs.963.00" available="false" ladies="true" zindex="0" length="2" title1="L1" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>L1</strong></span></div>
                                                      <div style="top:26px; left:0px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="L2 | fare=Rs.963.00" available="false" ladies="true" zindex="0" length="2" title1="L2" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>L2</strong></span></div>
                                                      <div style="top:78px; left:0px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="L3 | fare=Rs.963.00" available="false" ladies="false" zindex="0" length="2" title1="L3" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>L3</strong></span></div>
                                                      <div style="top:78px; left:48px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="L4 | fare=Rs.963.00" available="false" ladies="false" zindex="0" length="2" title1="L4" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>L4</strong></span></div>
                                                      <div style="top:26px; left:48px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="L5 | fare=Rs.963.00" available="false" ladies="true" zindex="0" length="2" title1="L5" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>L5</strong></span></div>
                                                      <div style="top:0px; left:48px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="L6 | fare=Rs.963.00" available="false" ladies="true" zindex="0" length="2" title1="L6" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>L6</strong></span></div>
                                                      <div style="top:78px; left:144px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="L10 | fare=Rs.963.00" available="false" ladies="true" zindex="0" length="2" title1="L10" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>L10</strong></span></div>
                                                      <div style="top:0px; left:96px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="L7 | fare=Rs.963.00" available="false" ladies="false" zindex="0" length="2" title1="L7" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>L7</strong></span></div>
                                                      <div style="top:26px; left:96px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="L8 | fare=Rs.963.00" available="false" ladies="false" zindex="0" length="2" title1="L8" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>L8</strong></span></div>
                                                      <div style="top:0px; left:144px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="L12 | fare=Rs.963.00" available="false" ladies="true" zindex="0" length="2" title1="L12" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>L12</strong></span></div>
                                                      <div style="top:78px; left:96px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="L9 | fare=Rs.963.00" available="false" ladies="false" zindex="0" length="2" title1="L9" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>L9</strong></span></div>
                                                      <div style="top:26px; left:144px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="L11 | fare=Rs.963.00" available="false" ladies="true" zindex="0" length="2" title1="L11" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>L11</strong></span></div>
                                                      <div style="top:26px; left:192px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="L14 | fare=Rs.963.00" available="true" ladies="true" zindex="0" length="2" title1="L14" fare1="963.00" stax="0.00" basefare="963.00" class="availableLadiesSleeper"><strong>L14</strong></span></div>
                                                      <div style="top:0px; left:192px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="L13 | fare=Rs.963.00" available="false" ladies="true" zindex="0" length="2" title1="L13" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>L13</strong></span></div>
                                                      <div style="top:78px; left:192px; position:absolute; padding:0pt;"><span style="cursor:pointer;" onclick="chgcls(this);" title="L15 | fare=Rs.963.00" available="false" ladies="false" zindex="0" length="2" title1="L15" fare1="963.00" stax="0.00" basefare="963.00" class="bookedSleeper"><strong>L15</strong></span></div>
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
                                              <div class="yourSeats">Seat(s) : <span id="spnSeat100001616980488344" style="color: red;"></span></div>
                                              <div class="totalAmount">Base Fare : Rs. <span id="spnAmt100001616980488344" style="color: red;">0.00</span></div>
                                              <div class="totalAmount">Service Tax : Rs. <span id="spnSerAmt100001616980488344" style="color: red;">NA</span></div>
                                              <div class="totalAmount">Total Fare : Rs. <span id="spnTotAmt100001616980488344" style="color: red;">0.00</span></div>
                                            </div>
                                            <div class="clear"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <div class="row">
                                      <div class="col-xs-6 col-sm-6">
                                        <div class="button_select">
                                          <select id="ddlBoarding100001616980488344" class="form-control">
                                            <option value="0">Select Boarding</option>
                                            <option value="1008771">Koyambedu (09:00 PM)</option>
                                            <option value="1008773">Vadapalani (09:10 PM)</option>
                                            <option value="1008775">Ashok Pillar (09:15 PM)</option>
                                            <option value="1008777">Guindy (09:25 PM)</option>
                                            <option value="1008779">Shanti Petrol Bunk (09:35 PM)</option>
                                            <option value="1008782">Pallavaram (09:45 PM)</option>
                                            <option value="1008785">Chrompet (09:50 PM)</option>
                                            <option value="1008788">Tambaram (09:55 PM)</option>
                                            <option value="1008790">Perungalathur (10:05 PM)</option>
                                            <option value="1008791">Srm University (10:20 PM)</option>
                                            <option value="1008793">Chengalpet (10:35 PM)</option>
                                            <option value="1008794">Maduranthagam Bye Pass (11:05 PM)</option>
                                            <option value="1008795">Melmaruvathur (11:40 PM)</option>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-xs-6 col-sm-2">
                                        <div class="button_close">
                                          <button type="button" onclick="doContinue(this);" class="btn btn-primary">Continue</button>
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