<?php

class XmlBus {

 

     
public static function city()
    {
	//header("Content-Type: text/xml");

     $xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://www.w3.org/2003/05/soap-envelope"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:bus"))->appendChild(
        $xmlDoc->createTextNode("http://192.168.0.131/TT/BusBookingAPI"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"));
		$authenticationdata=$header->appendChild(
        $xmlDoc->createElement("bus:AuthenticationData"));
		//$authenticationdata->appendChild(
        //$xmlDoc->createElement("bus:SiteName",""));
		//$authenticationdata->appendChild(
        //$xmlDoc->createElement("bus:AccountCode",""));
		$authenticationdata->appendChild(
        $xmlDoc->createElement("bus:UserName","appan"));
		$authenticationdata->appendChild(
        $xmlDoc->createElement("bus:Password","appan@1234"));
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$body->appendChild(
        $xmlDoc->createElement("bus:GetAllBusSourceCities"));
		
		
		

    $xmlDoc->formatOutput = true;
//print_r($xmlDoc); 
return $xmlDoc->saveXML();


    }
	public static function destinationcity($id)
    {
	//header("Content-Type: text/xml");

     $xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://www.w3.org/2003/05/soap-envelope"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:bus"))->appendChild(
        $xmlDoc->createTextNode("http://192.168.0.131/TT/BusBookingAPI"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"));
		$authenticationdata=$header->appendChild(
        $xmlDoc->createElement("bus:AuthenticationData"));
		//$authenticationdata->appendChild(
        //$xmlDoc->createElement("bus:SiteName",""));
		//$authenticationdata->appendChild(
        //$xmlDoc->createElement("bus:AccountCode",""));
		$authenticationdata->appendChild(
        $xmlDoc->createElement("bus:UserName","appan"));
		$authenticationdata->appendChild(
        $xmlDoc->createElement("bus:Password","appan@1234"));
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$destination=$body->appendChild(
        $xmlDoc->createElement("bus:GetBusDestinationBySourceCityCode"));
		$destination->appendChild(
        $xmlDoc->createElement("bus:sourceCityCode",$id));
		
		
		

    $xmlDoc->formatOutput = true;
//print_r($xmlDoc); 
return $xmlDoc->saveXML();


    }
	public static function busdetail($data)
    {
	//print_r($data); exit;
	$date=date('Y-m-d',strtotime($data['formdate']));
	//header("Content-Type: text/xml");

     $xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soapenv:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soapenv"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:bus"))->appendChild(
        $xmlDoc->createTextNode("http://192.168.0.131/TT/BusBookingAPI"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soapenv:Header"));
		$authenticationdata=$header->appendChild(
        $xmlDoc->createElement("bus:AuthenticationData"));
		//$authenticationdata->appendChild(
        //$xmlDoc->createElement("bus:SiteName",""));
		//$authenticationdata->appendChild(
        //$xmlDoc->createElement("bus:AccountCode",""));
		$authenticationdata->appendChild(
        $xmlDoc->createElement("bus:UserName","appan"));
		$authenticationdata->appendChild(
        $xmlDoc->createElement("bus:Password","appan@1234"));
		$body=$root->appendChild(
        $xmlDoc->createElement("soapenv:Body"));
		$searchrequest=$body->appendChild(
        $xmlDoc->createElement("bus:Search"));
		$search=$searchrequest->appendChild(
        $xmlDoc->createElement("bus:wsBusSearchRequest"));
		$search->appendChild(
       $xmlDoc->createElement("bus:SourceId",$data['formplace']));
		$search->appendChild(
       $xmlDoc->createElement("bus:DestinationId",$data['toplace']));
		$search->appendChild(
       $xmlDoc->createElement("bus:DateOfJourney",$date));
		$search->appendChild(
       $xmlDoc->createElement("bus:SourceName",$data['sourcename']));
		$search->appendChild(
       $xmlDoc->createElement("bus:DestinationName",$data['destinationname']));
		$search->appendChild(
       $xmlDoc->createElement("bus:IsDomestic",'1'));
		
		
		

    $xmlDoc->formatOutput = true;
//print_r($xmlDoc); 
return $xmlDoc->saveXML();


    }
public static function seatlayout($data)
    {
	//print_r($data); exit;
		//header("Content-Type: text/xml");

     $xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soapenv:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soapenv"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:bus"))->appendChild(
        $xmlDoc->createTextNode("http://192.168.0.131/TT/BusBookingAPI"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soapenv:Header"));
		$authenticationdata=$header->appendChild(
        $xmlDoc->createElement("bus:AuthenticationData"));
		//$authenticationdata->appendChild(
        //$xmlDoc->createElement("bus:SiteName",""));
		//$authenticationdata->appendChild(
        //$xmlDoc->createElement("bus:AccountCode",""));
		$authenticationdata->appendChild(
        $xmlDoc->createElement("bus:UserName","appan"));
		$authenticationdata->appendChild(
        $xmlDoc->createElement("bus:Password","appan@1234"));
		$body=$root->appendChild(
        $xmlDoc->createElement("soapenv:Body"));
		$getseatlayout=$body->appendChild(
        $xmlDoc->createElement("bus:GetSeatLayOut"));
		$wsseatlayoutdetailrequest=$getseatlayout->appendChild(
        $xmlDoc->createElement("bus:wsSeatLayoutDetailRequest"));
		$wsbussearchresult=$wsseatlayoutdetailrequest->appendChild(
        $xmlDoc->createElement("bus:WSBusSearchResult"));
		$wsbussearchresult->appendChild(
       $xmlDoc->createElement("bus:RouteId",$data['id']));
		$wsbussearchresult->appendChild(
       $xmlDoc->createElement("bus:BusType",$data['type']));
		$wsbussearchresult->appendChild(
       $xmlDoc->createElement("bus:TravelName",$data['travelname']));
		$wsbussearchresult->appendChild(
       $xmlDoc->createElement("bus:DepartureTime",$data['starttime']));
		$wsbussearchresult->appendChild(
       $xmlDoc->createElement("bus:ArrivalTime",$data['endtime']));
		$wsbussearchresult->appendChild(
       $xmlDoc->createElement("bus:BusSource",$data['source']));
		$wsbussearchresult->appendChild(
       $xmlDoc->createElement("bus:Price",' '));
		$wsseatlayoutdetailrequest->appendChild(
        $xmlDoc->createElement("bus:DateOfJourney",$data['dateofjourney']));
		$wsseatlayoutdetailrequest->appendChild(
        $xmlDoc->createElement("bus:SessionId",Session::get('session_id')));
		
		

    $xmlDoc->formatOutput = true;
//print_r($xmlDoc); 
return $xmlDoc->saveXML();


    }

	public static function book($input)
	{
	$seats=explode(',',$input['seats']);
	
	//header("Content-Type: text/plain");
	$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soapenv:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soapenv"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:bus"))->appendChild(
        $xmlDoc->createTextNode("http://192.168.0.131/TT/BusBookingAPI"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soapenv:Header"));
		$authenticationdata=$header->appendChild(
        $xmlDoc->createElement("bus:AuthenticationData"));
		//$authenticationdata->appendChild(
        //$xmlDoc->createElement("bus:SiteName",""));
		//$authenticationdata->appendChild(
        //$xmlDoc->createElement("bus:AccountCode",""));
		$authenticationdata->appendChild(
        $xmlDoc->createElement("bus:UserName","appan"));
		$authenticationdata->appendChild(
        $xmlDoc->createElement("bus:Password","appan@1234"));
		$body=$root->appendChild(
        $xmlDoc->createElement("soapenv:Body"));
		$book=$body->appendChild(
		$xmlDoc->createElement("bus:Book"));
		$wsBookRequest=$book->appendChild(
		$xmlDoc->createElement("bus:wsBookRequest"));
		$wsBookRequest->appendChild(
		$xmlDoc->createElement("bus:BusId",0));
		$wsBookRequest->appendChild(
		$xmlDoc->createElement("bus:SourceId",$input['sourceid']));
		$wsBookRequest->appendChild(
		$xmlDoc->createElement("bus:DestinationId",$input['destinationid']));
		$wsBookRequest->appendChild(
		$xmlDoc->createElement("bus:SourceName",$input['sourcename']));
		$wsBookRequest->appendChild(
		$xmlDoc->createElement("bus:DestinationName",$input['destinationname']));
		$wsBookRequest->appendChild(
		$xmlDoc->createElement("bus:DateOfJourney",$input['dateofjourney']));
		$wsBookRequest->appendChild(
		$xmlDoc->createElement("bus:BusSource","RedBus"));
		$wsBookRequest->appendChild(
		$xmlDoc->createElement("bus:IsDomestic","1"));
		$wsBookRequest->appendChild(
		$xmlDoc->createElement("bus:RouteId",$input['routeid']));
		$wsBookRequest->appendChild(
		$xmlDoc->createElement("bus:BusType",$input['bustype']));
		$wsBookRequest->appendChild(
		$xmlDoc->createElement("bus:TravelName",$input['travelname']));
		$wsBookRequest->appendChild(
		$xmlDoc->createElement("bus:NoOfSeats",count($seats)));
		$wsBookRequest->appendChild(
		$xmlDoc->createElement("bus:DepartureTime",$input['deptime']));
		$wsBookRequest->appendChild(
		$xmlDoc->createElement("bus:ArrivalTime",$input['arrtime']));
		$wsBookRequest->appendChild(
		$xmlDoc->createElement("bus:TotalFare",$input['amount']));
		$boardingpoint=$wsBookRequest->appendChild(
		$xmlDoc->createElement("bus:BoardingPointdetails"));
		$boardingpoint->appendChild(
		$xmlDoc->createElement("bus:CityPointId",$input['boarding']));
		$boardingpoint->appendChild(
		$xmlDoc->createElement("bus:BusId",0));
		$cancelpolicy=$wsBookRequest->appendChild(
		$xmlDoc->createElement("bus:CancelPolicy"));
		$WSCancellationPolicies=$cancelpolicy->appendChild(
		$xmlDoc->createElement("bus:WSCancellationPolicies"));
		$WSCancellationPolicies->appendChild(
		$xmlDoc->createElement("bus:TimeBeforeDept",$input['canceldep']));
		$WSCancellationPolicies->appendChild(
		$xmlDoc->createElement("bus:CancellationChargeType",$input['cancelchargetype']));
		$WSCancellationPolicies->appendChild(
		$xmlDoc->createElement("bus:CancellationCharge",$input['cancelcharge']));
		$PaxDetail=$wsBookRequest->appendChild(
		$xmlDoc->createElement("bus:PaxDetail"));
		for($i=0;$i<count($input['Title']);$i++)
		{
		$PaxDetail->appendChild(
		$xmlDoc->createElement("bus:BusId",0));
		$PaxDetail->appendChild(
		$xmlDoc->createElement("bus:PaxId",$i+1));
		$PaxDetail->appendChild(
		$xmlDoc->createElement("bus:Title",$input['Title'][$i]));
		$PaxDetail->appendChild(
		$xmlDoc->createElement("bus:FirstName",$input['FirstName'][$i]));
		$PaxDetail->appendChild(
		$xmlDoc->createElement("bus:Age",$input['Age'][$i]));
		$PaxDetail->appendChild(
		$xmlDoc->createElement("bus:PhoneNo",$input['phone']));
		$PaxDetail->appendChild(
		$xmlDoc->createElement("bus:EMail",$input['email']));
		$PaxDetail->appendChild(
		$xmlDoc->createElement("bus:Gender",$input['Title'][$i]=="Mr"?"male":"female"));
		
		
		}
		$SeatsDetail=$wsBookRequest->appendChild(
		$xmlDoc->createElement("bus:SeatsDetail"));
		foreach($seats as $seat)
		{
		$WSBusSeatDetail=$SeatsDetail->appendChild(
		$xmlDoc->createElement("bus:WSBusSeatDetail"));
		
		$WSBusSeatDetail->appendChild(
		$xmlDoc->createElement("bus:BusId",0));
		$WSBusSeatDetail->appendChild(
		$xmlDoc->createElement("bus:SeatId",0));
		$WSBusSeatDetail->appendChild(
		$xmlDoc->createElement("bus:SeatName",$seat));
		
		$WSBusSeatDetail->appendChild(
		$xmlDoc->createElement("bus:Price",""));
		
		}
		
		
		
		$wsBookRequest->appendChild(
		$xmlDoc->createElement("bus:SessionId",Session::get('session_id')));
		
		
		
		
		
		
		
		
		
	 $xmlDoc->formatOutput = true;
//print_r($xmlDoc->saveXML()); EXIT;
return $xmlDoc->saveXML();	
	}
}