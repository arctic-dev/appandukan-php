<?php

class Jsonhotel {

 

     
public static function country()
    {
	//header("Content-Type: text/xml");

     $xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soapenv:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soapenv"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:hot"))->appendChild(
        $xmlDoc->createTextNode("http://TekTravel/HotelBookingApi"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soapenv:Header"));
		$authenticationdata=$header->appendChild(
        $xmlDoc->createElement("hot:AuthenticationData"));
		//$authenticationdata->appendChild(
        //$xmlDoc->createElement("hot:SiteName",""));
		//$authenticationdata->appendChild(
        //$xmlDoc->createElement("hot:AccountCode",""));
		$authenticationdata->appendChild(
        $xmlDoc->createElement("hot:UserName","appan"));
		$authenticationdata->appendChild(
        $xmlDoc->createElement("hot:Password","appan@1234"));
		$body=$root->appendChild(
        $xmlDoc->createElement("soapenv:Body"));
		$body->appendChild(
        $xmlDoc->createElement("hot:GetCountryList"));
		
		
		

    $xmlDoc->formatOutput = true;
//print_r($xmlDoc); 
return $xmlDoc->saveXML();


    }
	public static function city($id)
    {
	//header("Content-Type: text/xml");

     $xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soapenv:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soapenv"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:hot"))->appendChild(
        $xmlDoc->createTextNode("http://TekTravel/HotelBookingApi"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soapenv:Header"));
		$authenticationdata=$header->appendChild(
        $xmlDoc->createElement("hot:AuthenticationData"));
		//$authenticationdata->appendChild(
        //$xmlDoc->createElement("bus:SiteName",""));
		//$authenticationdata->appendChild(
        //$xmlDoc->createElement("bus:AccountCode",""));
		$authenticationdata->appendChild(
        $xmlDoc->createElement("hot:UserName","appan"));
		$authenticationdata->appendChild(
        $xmlDoc->createElement("hot:Password","appan@1234"));
		$body=$root->appendChild(
        $xmlDoc->createElement("soapenv:Body"));
		$destination=$body->appendChild(
        $xmlDoc->createElement("hot:GetDestinationCityList"));
		$destinationcity=$destination->appendChild(
        $xmlDoc->createElement("hot:request"));
		$destinationcity->appendChild(
        $xmlDoc->createElement("hot:CountryName",$id));
		
		
		

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
        $xmlDoc->createTextNode("http://www.w3.org/2003/05/soap-envelope"));
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

}