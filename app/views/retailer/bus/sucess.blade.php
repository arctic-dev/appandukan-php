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
  <?php if($bookroomoutput['SOAP:ENVELOPE']['SOAP:BODY']['BOOKRESPONSE']){?>
<div class="cont">   
<p>Booking Status:{{$bookroomoutput['SOAP:ENVELOPE']['SOAP:BODY']['BOOKRESPONSE']['BOOKRESULT']['STATUS']}}</p>

<a href="{{url('retailer/bus')}}" class="btn btn-primary">ok</a>
</div>
<?php } else
{ ?>
<div class="cont">
<p>{{$bookroomoutput->BookResult->Error->ErrorMessage}}</p>
</div>
<?php 
} ?> 
 </div>
  
   </div>
</div>
  </div>

@stop