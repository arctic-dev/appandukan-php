<?php

class Xmlflight {

 

     
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
        $xmlDoc->createElement("bus:GetAllCities"));
		
		
		

    $xmlDoc->formatOutput = true;
//print_r($xmlDoc); 
return $xmlDoc->saveXML();


    }
public static function getpan()
    {
         $url = "http://192.168.1.114:8080/ApDuManagement/pan49a/getForm/".Session::get('user_name');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        return $responsepurge;

    }
	public static function provider($data)
    {
         $url = "http://192.168.1.114:8080/ApDuManagement/recharge/provider/".$data;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        return json_decode($responsepurge);

    }
	public static function newrecharge($data)
    {
         $url = "http://192.168.1.114:8080/ApDuManagement/recharge/new/";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        return json_decode($responsepurge);

    }
	public static function rechargedetails($data)
    {
         $url = "http://192.168.1.114:8080/ApDuManagement/recharge/completed/";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        return json_decode($responsepurge);

    }
}