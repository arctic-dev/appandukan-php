<?php

class SubretailerhotelController extends BaseController {

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
	$input=Xmlhotel::country();
	$data=Hotel::country($input);
	$output=Xmltoarray::arr($data);
	$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['GETCOUNTRYLISTRESPONSE'] ['GETCOUNTRYLISTRESULT']['COUNTRYLIST']['STRING']; 
	
	//print_r($city); exit;
		return View::make('subretailer.hotel.addview')->with('city',$city);
	}
	public function  getDestinationcity($id)
	{
	

	$input=Xmlhotel::city($id);
	$data=Hotel::destinationcities($input);
	$output=Xmltoarray::arr($data);
	$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['GETDESTINATIONCITYLISTRESPONSE'] ['GETDESTINATIONCITYLISTRESULT']['CITYLIST']['WSCITY']; 
	//print_r($city); exit;
	foreach ($city as $cities)
	{
	echo"<option value=".$cities['CITYCODE'].">".$cities['CITYNAME']."</option>";
	}
	}
	}
