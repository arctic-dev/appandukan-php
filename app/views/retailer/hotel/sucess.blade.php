@extends('layouts.retailer')
@section('content')
<style>
.msgbox{
border:2px solid white;
height:300px;
}
.cont{
  margin-top: 75px;
  padding-left: 150px;
}

</style>
<div class="container">
   <div class="row-fluid">
   <div class="container-fluid">
  <div class="col-md-6 msgbox">
  <?php if($bookroomoutput->BookResult->ResponseStatus=="1"){?>
<div class="cont">   
<p>Booking Status:{{$bookroomoutput->BookResult->HotelBookingStatus}}</p>
<p>Confirmation Number:{{$bookroomoutput->BookResult->HotelBookingStatus}}</p>
<p>Booking Reference Number:{{$bookroomoutput->BookResult->BookingRefNo}}</p>
<p>Booking ID:{{$bookroomoutput->BookResult->BookingId}}</p>
<div id="">please note Booking ID for fututre Use</div>
<a href="{{url('retailer/hotel')}}" class="btn btn-primary">ok</a>
</div>
<?php } else
{ ?>
<div class="cont">
<p>{{$bookroomoutput->BookResult->Error->ErrorMessage}}</p>
<a href="{{url('retailer/hotel')}}" class="btn btn-primary">ok</a>

</div>
<?php 
} ?> 
 </div>
  
   </div>
</div>
  </div>

@stop