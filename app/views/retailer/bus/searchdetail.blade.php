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
        <li>Search Bus Tickets</li>
      </ol>
      <h1>Search Bus Tickets</h1>
     
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
                      <?php  //exit;
            foreach($busdetail as $busdata)
            
            {
            $outputD[]=valueunique($busdetail,'DEPARTURETIME',$busdata['DEPARTURETIME']);
              
            }
            
            $outputdeptime=array_unique($outputD);
             //print_r($output);exit;

?>
                      <div class="panel panel-default">
                        <div class="panel-heading"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                          <h4 class="panel-title"> Departing Times </h4>
                          </a> </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                          <div id="divBoardingList" class="panel-body" style="padding: 0px 8px 8px 8px;">
                             <?php foreach($outputdeptime as $bustype){if($bustype!="DEPARTURETIME")
                {?>
                            <div class="checkbox">
                              <label>
                
                
                                <input type="checkbox" val="{{$bustype}}" class="clsArrivingtime" onchange="doFilter();">
                                {{date('H:i:sa',strtotime($bustype))}}</label>
                            </div>
              <?php } }?>
                            
                          </div>
                        </div>
                      </div>
                      <?php  //exit;
            foreach($busdetail as $busdata)
            
            {
            $outputA[]=valueunique($busdetail,'ARRIVALTIME',$busdata['ARRIVALTIME']);
              
            }
            
            $outputarrtime=array_unique($outputA);
             //print_r($output);exit;

?>
                      <div class="panel panel-default">
                        <div class="panel-heading"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour">
                          <h4 class="panel-title"> Arrival Time </h4>
                          </a> </div>
                        <div id="collapsefour" class="panel-collapse collapse">
                          <div id="divDroppingList" class="panel-body" style="padding: 0px 8px 8px 8px;">
                             <?php foreach($outputarrtime as $bustype){if($bustype!="ARRIVALTIME")
                {?>
                            <div class="checkbox">
                              <label>
                
                
                                <input type="checkbox" val="{{$bustype}}" class="clsDepartingtime" onchange="doFilter();">
                                {{date('H:i:sa',strtotime($bustype))}}</label>
                            </div>
              <?php } }?>
                            
                          </div>
                        </div>
                      </div>
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
                              <script>
$( document ).ready(function() {
 var id1="0";
 
    $( "#view_seats_mobile" ).click(function() {

  $( "#divSeatsView1" ).toggle( "slow", function() {
   
  });
});


    $( "#btnViewSeats" ).click(function() {

  $( ".bus_tickets_block" ).toggle( "slow", function() {
   
  });
});

});
function test(id,type,travelname,starttime,endtime,source)
{
	if ($.trim($("#btnViewSeats_" + id).text()) == "View Seats") {
	id1=id;
	$( "#btnViewSeats_"+id).text('processing...,');
var dateofjourney='<?php echo $dateofjourney; ?>';
$.ajax({

     url: '<?php echo url();?>/retailer/bus/seatlayout',
     async: false,
     type : 'GET',

     data : {id:id, type:type,travelname:travelname,starttime:starttime,endtime:endtime,source:source,dateofjourney:dateofjourney },

     success : function(data)

     {
        //alert(data);
		var obj=jQuery.parseJSON(data);
		//alert(obj[0].WSBUSSEATDETAIL.length);
		var List="";
		var List1="";
		for(var i=0;i<obj.length;i++)
		{
		$.each(obj[i].WSBUSSEATDETAIL, function () {
			if(this.ISUPPER=="false")
			{
			//alert(this.SEATNAME);
			List += "<div style='top:" + (this.ROWNO * 26) + "px; left:" + (this.COLUMNNO * 24) + "px; position:absolute; padding:0pt;'><span style='cursor:pointer;' onclick='chgcls(this);' title='" + this.SEATNAME + " | fare=Rs." + this.SEATFARE + "' available= " + this.SEATSTATUS + "  ladies=" + this.ISLADIES + " zindex=" + this.WIDTH + " length=" + this.HEIGHT + " title1='" + this.SEATNAME+ "' fare1=" + this.SEATFARE + " sTax=" + this.PRICE.SERVICETAX + " baseFare=" + this.SEATFARE + " class='" + checkseat('1', this.HEIGHT, this.ISLADIES, this.SEATSTATUS) + "'><strong>" + this.SEATNAME + "</strong></span></div>";
            }
			
		});
		
		var isUp=false;
		$.each(obj[i].WSBUSSEATDETAIL, function () {
			if(this.ISUPPER=="true")
			{
				
			//alert(this.SEATNAME);
			List1 += "<div style='top:" + (this.ROWNO * 26) + "px; left:" + (this.COLUMNNO * 24) + "px; position:absolute; padding:0pt;'><span style='cursor:pointer;' onclick='chgcls(this);' title='" + this.SEATNAME + " | fare=Rs." + this.SEATFARE + "' available= " + this.SEATSTATUS + "  ladies=" + this.ISLADIES + " zindex=" + this.WIDTH + " length=" + this.HEIGHT + " title1='" + this.SEATNAME+ "' fare1=" + this.SEATFARE + " sTax=" + this.SERVICETAX + " baseFare=" + this.SEATFARE + " class='" + checkseat('1', this.HEIGHT, this.ISLADIES, this.SEATSTATUS) + "'><strong>" + this.SEATNAME + "</strong></span></div>";
            }
			
			
		});
		 
		}
       $('#lowerseat_'+id).html(List);
	   if(List1)
	   {
	   $('#upperseat_'+id).html(List1);
       $('#upperdeck_'+id).show();
       } else
	   {
		  $('#upperdeck_'+id).hide();  
	   }
	   
	   $( "#divSeatsView_"+id ).toggle( "slow", function() {
			$( "#btnViewSeats_"+id).text('Hide Seats');

  });
        
       
     }
 });	
}
else
{
$( "#divSeatsView_"+id ).toggle( "slow", function() {
			$( "#btnViewSeats_"+id).text('View Seats');

  });
}
}
function checkseat(zindex, length, ladiesSeat, available) {
    var seatMode = "";

    switch (length) {
        case "1":
		//alert(length);
            switch (available) {
                case "1":
                    switch (ladiesSeat) {
                        case "true":
                            seatMode = "availableLadiesSeat";
                            break;
                        default:
                            seatMode = "availableSeat";
                    }
                    break;
                default:
                    seatMode = "bookedSeat";
                    break;
            }
            break;
        case "2":
            switch (available) {
                case "1":
                    switch (ladiesSeat) {
                        case "true":
                            seatMode = "availableLadiesSleeper";
                            break;
                        default:
                            seatMode = "availableSleeper";
                    }
                    break;
                default:
                    seatMode = "bhseat";
                    break;
            }
            break;
    }

    return seatMode;
}
function seatInfo(seatNo, basefare, servicetax, fare, seatType) {
    return {
        seatNo: seatNo,
        basefare: basefare,
        servicetax: servicetax,
        fare: fare,
        seatType: seatType
    }
}
var seatList = [];
function chgcls(obj) { //alert(id1);
    if (seatList.length < 6 || $(obj).attr("class").indexOf("selected") != -1) {
        var Baseamt = parseFloat($("#spnAmt" + id1 + "").text());
        var STax = parseFloat($("#spnSerAmt" + id1 + "").text() == "NA" ? "0.0" : $("#spnSerAmt" + id1 + "").text());
        var amt = parseFloat($("#spnTotAmt" + id1 + "").text());

        var className = $(obj).attr("class");
		//alert(className);
        if ($(obj).attr("available") == "1") {
            if ((className.indexOf("available") != -1)||(className.indexOf("h") != -1)) {
                $(obj).attr("class", className.replace("available", "selected"));
				//$(obj).attr("class", className.replace("hseat", "selectedSleeper"));
				
                Baseamt += parseFloat($(obj).attr("baseFare"));
                STax += parseFloat($(obj).attr("sTax"));
                amt += parseFloat($(obj).attr("fare1"));

                seatList.push(seatInfo($(obj).attr("title1"), $(obj).attr("baseFare"), $(obj).attr("sTax"), $(obj).attr("fare1"), $(obj).attr("ladies")));

                $("#spnAmt" + id1 + "").text(Baseamt.toFixed(2));
                $("#spnSerAmt" + id1 + "").text((STax == 0 ? "NA" : STax.toFixed(2)));
                $("#spnTotAmt" + id1 + "").text(amt.toFixed(2));
				$("#totalamount_" + id1 + "").val(amt.toFixed(2));

                var seatNoList = [];
                $.each(seatList, function () {
                    seatNoList.push(this.seatNo);
                });
                $("#spnSeat_" + id1 + "").text(seatNoList.join(", "));
            $("#totalseat_" + id1 + "").val(seatNoList.join(", "));
            }
            else {
                $(obj).attr("class", className.replace("selected", "available"));
				//$(obj).attr("class", className.replace("selectedSleeper", "hseat"));
				

                Baseamt -= parseFloat($(obj).attr("baseFare"));
                STax -= parseFloat($(obj).attr("sTax"));
                amt -= parseFloat($(obj).attr("fare1"));

                seatList = jQuery.grep(seatList, function (value) { return value.seatNo != $(obj).attr("title1"); });

                $("#spnAmt" + id1 + "").text(Baseamt.toFixed(2));
                $("#spnSerAmt" + id1 + "").text((STax == 0 ? "NA" : STax.toFixed(2)));
                $("#spnTotAmt" + id1 + "").text(amt.toFixed(2));
                $("#totalamount_" + id1 + "").val(amt.toFixed(2));

                var seatNoList = [];
                $.each(seatList, function () {
                    seatNoList.push(this.seatNo);
                });
                $("#spnSeat_" + id1 + "").text(seatNoList.join(", "));
				$("#totalseat_" + id1 + "").val(seatNoList.join(", "));
            
            }
        }
    }
}
var jsonBus1='<?php echo  json_encode($busdetail);?>';
 var jsonBus=jQuery.parseJSON(jsonBus1);
 //alert(JSON.stringify(jsonBus));
 var tempjson=jsonBus;
function doFilter()
{
jsonBus=tempjson;
var searchTravelsType=[];
var searchdeaprtingtime=[];
var searcharrivingtime=[];
$(".clsTravelsType").each(function () {
        if ($(this).is(":checked")) {
		
            searchTravelsType.push($(this).attr("val"));
        }
    });
	
	if (searchTravelsType.length > 0) {
        jsonBus = $.grep(jsonBus, function (val, idx) {
            return ($.inArray($.trim(val.BUSTYPE), searchTravelsType) != -1);
        });
    }
    $(".clsDepartingtime").each(function () {
        if ($(this).is(":checked")) {
    
            searchdeaprtingtime.push($(this).attr("val"));
        }
    });
  
  if (searchdeaprtingtime.length > 0) {
        jsonBus = $.grep(jsonBus, function (val, idx) {
            return ($.inArray($.trim(val.ARRIVALTIME), searchdeaprtingtime) != -1);
        });
    }
    $(".clsArrivingtime").each(function () {
        if ($(this).is(":checked")) {
    
            searcharrivingtime.push($(this).attr("val"));
        }
    });
  
  if (searcharrivingtime.length > 0) {
        jsonBus = $.grep(jsonBus, function (val, idx) {
            return ($.inArray($.trim(val.DEPARTURETIME), searcharrivingtime) != -1);
        });
    }
	//alert(jsonBus);
	ListAvailableTrips();
}

function ListAvailableTrips() {
    var List = "";

    if (jsonBus[0].ROUTEID) {
        $.each(jsonBus, function (idx, val) {
		var ROUTEID=this.ROUTEID;
		var cancelpolicy=this.CANCELPOLICY;
		//alert (JSON.stringify(cancelpolicy));//to see object values in alert
		
		for (var key in cancelpolicy) {
   var object=cancelpolicy[key];
					for (var key1 in object) {
					var object2=object[key1];
					 for (var key2 in object2) {
					 var object3=object2[key2];
					 var CANCELLATIONCHARGETYPE=object3.CANCELLATIONCHARGETYPE;
					 var CANCELLATIONCHARGE=object3.CANCELLATIONCHARGE;
					 var TIMEBEFOREDEPT=object3.TIMEBEFOREDEPT;
   				}
				}
				}
		//alert(CANCELLATIONCHARGETYPE);
           // TravelList.push($.trim(this.TRAVELNAME).replace(/\s{2,}/g, ' '));
            //TravelTypeList.push(this.BUSTYPE);

            /*var BList = this.boardingTimes;
            if (!$.isArray(this.boardingTimes)) {
                BList = jQuery.makeArray(this.boardingTimes);
            }
            $.each(BList, function () {
                BoardingList.push($.trim(this.bpName));
            });

            var DList = this.droppingTimes;
            if (!$.isArray(this.droppingTimes)) {
                DList = jQuery.makeArray(this.droppingTimes);
            }
            $.each(DList, function () {
                DroppingList.push($.trim(this.bpName));
            });*/
			List+="<div class='' style='background-color: rgba(255, 255, 255, 0.77);'>";
            List += "<div id='div" + this.ROUTEID + "' class='travels' AvaSeat=" + this.availableSeats + ">";
            List += "<div class='row' DEP=" + this.DEPARTURETIME + ">";
            List += "<div class='travels_search'>";
            List += "<div class='container-fluid'>";
            List += "<div class='row'>";
            List += "<div class='col-xs-6 col-sm-4'>";
            List += "<div class='travels_name'>";
            List += "<ul>";
            List += "<li><strong>" + this.TRAVELNAME + "</strong></li>";
            List += "<li><small>" + this.BUSTYPE + "</small></li>";
            //List += "<li><small class='text-muted' style='text-decoration: underline;cursor:pointer;' onclick='openCPolicy(\"" + genCanPoli(this.cancellationPolicy) + "\");'>Cancel Policy</small></li>";
            List += "</ul>";
            List += "</div>";
            List += "</div>";
            List += "<div class='col-xs-6 col-sm-3'>";
            List += "<ul class='travel_time'>";
            List += "<li><span>" + this.DEPARTURETIME + " <span class='text-muted'>&#187;</span> " + this.ARRIVALTIME + "</li>";
            
            List += "</ul>";
            List += "</div>";
            List += "<div class='col-xs-6 col-sm-2'>";
            List += "<ul>";
            List += "<li><strong>" + this.AVAILABLESEATS + " seats</strong></li>";
            List += "</ul>";
            List += "</div>";
            List += "<div class='col-xs-6 col-sm-1'>";
            List += "<div class='mobile-ticket" + (this.mTicketEnabled == "true" ? "" : "-disabled") + "'><div class='hidden-xs'>5</div></div>";
            List += "</div>";
            List += "<div class='col-xs-6 col-sm-2'>";
            List += "<ul>";
            List += "<li>";
            List += "<div class='rupee'>";
            List += "</div>";
            List += "<div class='hidden-xs'>";
            List += "<p>";
            List += "<div class='cost_of_ticket'>";
            List += "<strong><i class='fa fa-inr'></i></strong><strong>" + this.AVAILABLEFARES + "</strong> </div>";
            List += "</p>";
            List += "</div>";
            List += "<div class='visible-xs'>";
            List += "<div id='toggle2'>";
            List += "<div class='cost_of_ticket'>";
            List += "<span class='ruppe_icon'></span> " + this.AVAILABLEFARES + " &nbsp; <a onclick='test(\"" + this.ROUTEID + "\",\"" + this.BUSTYPE + "\",\"" + this.TRAVELNAME + "\",\"" + this.DEPARTURETIME + "\",\"" + this.ARRIVALTIME + "\",\"" + this.BUSSOURCE + ",\"" + this.BUSSOURCE + "\");' class='glyphicon glyphicon-chevron-right'";
            List += "id='view_seats_mobile'></a>";
            List += "</div>";
            List += "</div>";
            List += "</div>";
            List += "</li>";
            List += "<div class='hidden-xs'>";
            List += "<div id='toggle3'>";
            List += "<li><button type='button' id='btnViewSeats_" + this.ROUTEID + "' class='btn btn-primary' " + (this.availableSeats == 0 ? "disabled='disabled'" : "") + " onclick='test(\"" + this.ROUTEID + "\",\"" + this.BUSTYPE + "\",\"" + this.TRAVELNAME + "\",\"" + this.DEPARTURETIME + "\",\"" + this.ARRIVALTIME + "\",\"" + this.BUSSOURCE + "\");'>" + (this.availableSeats == 0 ? "Sold" : "View Seats") + "</button> </li>";
            List += "</div>";
            List += "</div>";
            List += "</ul>";
            List += "</div>";
            List += "</div>";
            
			List += "<div id='divSeatsView_" + this.ROUTEID + "' TripId='" + this.ROUTEID + "'  class='bus_tickets_block'>";
        List += "<div class='row'>";
        List += "<div class='view_seats_1' id='view_seats" + this.ROUTEID + "'>";
        List += "<div class='modal-body'>";
        List += "<div class='row'>";
        List += "<div class='col-md-6'>";
        List += "<div class='mainFF'>";
        List += "<div class='row'>";
		List += "<div class='seat-layout-1'>";
		List += "<div class='col-md-12'>";
		List += "<div class='low-dek-seat-arrange'>";
		List += "<div class='upperDeck' id='upperdeck_"+this.ROUTEID+"'>";
		List += "<div class='upperLabel'></div>";
		List += "<div class='upper-seats-area' id='upperseat_"+this.ROUTEID+"'>";
		List += "</div>";
		List += "</div>";
		List += "<div class='lowerDeck'>";
		List += "<div class='lowerLabel'></div>";
		List += "<div class='lower-seats-area' id='lowerseat_"+this.ROUTEID+"'>";
		List += "</div>";
		List += "</div>";
		List += "</div>";
		List += "</div>";
		
		List += "</div>";
		List += "<div class='bpListVal'></div>";
            List += "<div class='clear'></div>";
            List += "</div>";
            List += "</div>";
            List += "</div>";
			List += "<div class='col-md-4' id='row_align'>";
        List += "<div class='row'>";
        List += "<div class='col-md-4'>";
        List += "<div class='seatSelectionMeta'>";
        List += "<ol class='seatsDefn' style='display: block;'>";
        List += "<li class='availableSeat'><span>Available Seat</span></li>";
        List += "<li class='availableLadiesSeat'><span>Reserved for ladies</span></li>";
        List += "<li class='selectedSeat'><span>Selected Seat</span></li>";
        List += "<li class='bookedSeat'><span>Booked Seat</span></li>";
        List += "</ol>";
        List += "<div class='brdr'></div>";
        List += "<div class='yourSeats'>Seat(s) : <span id='spnSeat" + this.ROUTEID + "' style='color: red;'></span></div>";
        List += "<div class='totalAmount'>Base Fare : Rs. <span id='spnAmt" + this.ROUTEID + "' style='color: red;'>0.00</span></div>";
        List += "<div class='totalAmount'>Service Tax : Rs. <span id='spnSerAmt" + this.ROUTEID + "' style='color: red;'>NA</span></div>";
        List += "<div class='totalAmount'>Total Fare : Rs. <span id='spnTotAmt" + this.ROUTEID + "' style='color: red;'>0.00</span></div>";
        List += "</div>";
        List += "<div class='clear'>";
        List += "</div>";
        List += "</div>";
        List += "</div>";
        List += "</div>";
        List += "</div>";
        List += "</div>";
        List += "<div class='modal-footer'>";
        List += "<div class='row'>";
		List+="<form method='get' action='<?php echo url('retailer/bus/book')?>' onsubmit='return validateForm(\""+this.ROUTEID+"\")'>";
		
        List += "<div class='col-xs-6 col-sm-6'>";
        List += "<div class='button_select'>";
		List+="<input type='hidden' name='routeid' value="+this.ROUTEID+">";
		List+="<input type='hidden' name='sourceid' value='<?php echo $input['formplace']?>'>";
		List+="	<input type='hidden' name='destinationid' value='<?php echo $input['toplace']?>'>";
		List+="	<input type='hidden' name='sourcename' value='<?php echo $input['sourcename']?>'>";
		List+="	<input type='hidden' name='destinationname' value='<?php echo $input['destinationname']?>'>";
		List+="	<input type='hidden' name='dateofjourney' value='<?php echo $input['formdate']?>'>";
		List+="	<input type='hidden' name='deptime' value="+this.DEPARTURETIME+">";
		List+="	<input type='hidden' name='arrtime' value="+this.ARRIVALTIME+">";
		List+="	<input type='hidden' name='bustype' value='"+this.BUSTYPE+"'>";
		List+="	<input type='hidden' name='travelname' value='"+this.TRAVELNAME+"'>";
		List+="	<input type='hidden' name='canceldep' value="+TIMEBEFOREDEPT+">";
		List+="	<input type='hidden' name='cancelchargetype' value="+CANCELLATIONCHARGETYPE+">";
		List+="	<input type='hidden' name='cancelcharge' value="+CANCELLATIONCHARGE+">";
		List+="<input type='hidden' name='seats' id='totalseat_"+this.ROUTEID+"' >";
		List+="<input type='hidden' name='amount' id='totalamount_"+this.ROUTEID+"' value=''>";
        List += "<select id='ddlBoarding" + this.ROUTEID + "' name='boarding' required='required' class='form-control'>";
        List += "<option value=''>Select Boarding</option>";
        $.each(jsonBus, function () {
            if (ROUTEID == this.ROUTEID) {
                BusType = this.BUSTYPE;
                Travels = this.TRAVELNAME;
                IsMTicket = (this.mTicketEnabled == "true" ? "1" : "0")

                var Boardingobj = this.BOARDINGPOINTSDETAILS;

				//alert(Object.getOwnPropertyNames ( Boardingobj ));
                //if (!$.isArray(Boardingobj)) { Boardingobj = jQuery.makeArray(Boardingobj); }
				//alert(Boardingobj.length);
					for (var key in Boardingobj) {
   var object=Boardingobj[key];
					for (var key1 in object) {
					var object2=object[key1];
					 for (var key2 in object2) {
					 var object3=object2[key2];
   				
				   List += "<option value='" + object3.CITYPOINTID + "'>" + object3.CITYPOINTLOCATION + "</option>";
              
}
  }         }     /*$.each(Boardingobj, function () {
				
                alert(Boardingobj);
                    List += "<option value='" + this.CITYPOINTID + "'>" + this.CITYPOINTLOCATION + "</option>";
                });*/
            }
        });
        List += "</select>";
			
        List += "</div>";
		
		
        List += "</div>";
        List += "<div class='col-xs-6 col-sm-2'>";
        List +="<div id='formerror"+this.ROUTEID+"'></div>";
        List += "<div class='button_close'>";
        List += "<button type='submit'  class='btn btn-primary'>Continue</button>";
        List += "</div>";
        List += "</div>";
		List += "</form>";
		
        List += "</div>";
        List += "</div>";
        List += "</div>";
        List += "</div>";
        List += "</div>";
		List += "</div>";
            List += "</div>";
            List += "</div>";
            List += "</div>";

            
        
        });
    }

    if (List.length == 0 || jsonBus[0].ROUTEID == undefined) {
        List = notFound;
    }

    

    $("#divBusList").html(List);

    

   
}
function validateForm(id)
{
  
  var seat=$('#totalseat_'+id).val();
  //alert(id);
  if((seat=="")||(seat=="undefined"))
  {
    
    $('#formerror'+id).text('please select seat');
  return false;
  }
  else
  {
    $('#formerror'+id).text('');
    
    return true;
  }

}

</script>
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
                                    
									<form method="get" action="<?php echo url();?>/retailer/bus/book" onsubmit="return validateForm('{{$busdata['ROUTEID']}}');">
                                      <div class="col-xs-6 col-sm-6">
									  <?php if($busdata['CANCELPOLICY']){
									  foreach($busdata['CANCELPOLICY'] as $cancel){
									  foreach($cancel['WSCANCELLATIONPOLICIES'] as $cancel1){
									 }}}?>  <div class="button_select">
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
										<input type="hidden" name="canceldep"  value="{{$cancel1['TIMEBEFOREDEPT']}}">
                                        <input type="hidden" name="cancelchargetype"  value="{{$cancel1['CANCELLATIONCHARGETYPE']}}">
                                        <input type="hidden" name="cancelcharge"  value="{{$cancel1['CANCELLATIONCHARGE']}}">
                                        <input type="hidden" name="seats" id="totalseat_{{$busdata['ROUTEID']}}" value="">
                                        <input type="hidden" name="amount" id="totalamount_{{$busdata['ROUTEID']}}" value="">
                                          <select id="ddlBoarding{{$busdata['ROUTEID']}}" name="boarding" required="required" class="form-control">
                                           <option value="">Select Boarding</option>
                                            
										   <?php foreach($busdata['BOARDINGPOINTSDETAILS'] as $boardingdetail)
										   {foreach ($boardingdetail['WSCITYPOINTDETAILS'] as $boarding){?>
                                            <option value="{{$boarding['CITYPOINTID']}}">{{$boarding['CITYPOINTLOCATION']}}</option>
                                            <?php } }?>
                                            </select>
                                        </div>
                                      </div>
                                      <div class="col-xs-6 col-sm-2">
                                      <div id="formerror{{$busdata['ROUTEID']}}"></div>
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