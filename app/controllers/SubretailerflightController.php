<?php

class SubretailerflightController extends BaseController {

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
		return View::make('subretailer.flight.searchview');
	}
	public function  getSample()
	{
	

	$input=Xmlbus::city();
	$data=Bus::cities($input);
	$output=Xmltoarray::arr($data);
	$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['GETALLCITIESRESPONSE'] ['GETALLCITIESRESULT']['WSBUSCITYLIST']['WSBUSCITYLIST']; 
	foreach ($city as $cities)
	{
	print_r($cities);
	echo "<pre>";
	}
	}
	}
