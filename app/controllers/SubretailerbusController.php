<?php

class SubretailerbusController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		
	$input=Xmlbus::city();
	$data=Bus::sourcecities($input);
	$output=Xmltoarray::arr($data);
	$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['GETALLBUSSOURCECITIESRESPONSE'] ['GETALLBUSSOURCECITIESRESULT']['WSBUSCITYLIST']['WSBUSCITYLIST']; 
	//print_r($city);
		return View::make('subretailer.bus.search')->with('city',$city);
	}
	public function getDestination($cityid)
	{
	$input=Xmlbus::destinationcity($cityid);
	$data=Bus::sourcecities($input);
	$output=Xmltoarray::arr($data); //print_r($output); exit;
	$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['GETBUSDESTINATIONBYSOURCECITYCODERESPONSE'] ['GETBUSDESTINATIONBYSOURCECITYCODERESULT']['WSBUSCITYLIST']['WSBUSCITYLIST']; 
	//print_r($city); exit;
	
	echo "<option value=''> select city</option>";
					  

	foreach ($city as $cities)
	{
	echo "<option value=".$cities['REDBUSCITYCODE'].">".$cities['CITYNAME']."</option>";
	}
	}
	public function getBusdetail()
	{
	$input=Xmlbus::busdetail(Input::all());
	//$input="";
	$data=Bus::destinationcities($input);
	$output=Xmltoarray::arr($data); //print_r($output); 
	$busdetail=$output['SOAP:ENVELOPE']['SOAP:BODY']['SEARCHRESPONSE'] ['SEARCHRESULT']['BUSSEARCHRESULT']['WSBUSSEARCHRESULT']; 
	$dateofjourney=$output['SOAP:ENVELOPE']['SOAP:BODY']['SEARCHRESPONSE'] ['SEARCHRESULT']['DATEOFJOURNEY']; 
	Session::put('session_id',$output['SOAP:ENVELOPE']['SOAP:BODY']['SEARCHRESPONSE'] ['SEARCHRESULT']['SESSIONID']);
	//print_r(array_unique($busdetail)); exit;
	
		return View::make('subretailer.bus.searchdetail')->with('busdetail',$busdetail)->with('dateofjourney',$dateofjourney)->with('input',Input::all());
	}
	public function getSeatlayout()
	{
		$input=Xmlbus::seatlayout(Input::all());
	//print_r($input); exit;
	$data=Bus::destinationcities($input);
	$output=Xmltoarray::arr($data); 
	$html=$output['SOAP:ENVELOPE']['SOAP:BODY']['GETSEATLAYOUTRESPONSE']['GETSEATLAYOUTRESULT']['WSNEWSEATLAYOUTDETAILS']['HTMLLAYOUT'];
//echo $html;
	$seatlayout=$output['SOAP:ENVELOPE']['SOAP:BODY']['GETSEATLAYOUTRESPONSE']['GETSEATLAYOUTRESULT']['WSNEWSEATLAYOUTDETAILS']['WSSEATLAYOUTSTRUCTURE']['OBJSTRUCTSEATDETAILS']['ARRAYOFWSBUSSEATDETAIL']; 
	//echo json_encode($seatlayout);
	echo json_encode($seatlayout);
	
	}
	public function getBook()
	{
	print_r(Input::all());
	}
	}
