<?php

class RetailerhotelController extends BaseController {

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
	
if(Session::has('THOT'))
{
	$input=array(
	"ClientId"=>"ApiIntegration",
	"UserName"=>"appan",
	"Password"=>"appan@1234",
	"LoginType"=> "2",
	"EndUserIp"=>Session::get('clientip'),
	);
	$login=Hotel::login(json_encode($input));
	Session::put('token_id',$login->TokenId);
	//print_r(Session::all());
	$countryinput=Jsonhotel::country();
	$countryoutput=Hotel::country($countryinput);
	if($countryoutput && ($countryoutput->Status==1))
	{
	$countrydata=Xmltoarray::arr($countryoutput->CountryList);
	//print_r($countrydata['COUNTRIES']['COUNTRY']); exit;
		return View::make('retailer.hotel.addview')->with('city',$countrydata['COUNTRIES']['COUNTRY']);
}
else
{
return View::make('retailer.service');
}
}	
else
{
return View::make('retailer.static');
}

}
	public function  getDestinationcity($id)
	{
	

	$cityinput=Jsonhotel::city($id);
	$cityoutput=Hotel::destinationcities($cityinput);
	$citydata=Xmltoarray::arr($cityoutput->DestinationCityList);
	//print_r($citydata['CITIES']['CITY']); exit;
	foreach ($citydata['CITIES']['CITY'] as $cities)
	{
	echo"<option value=".$cities['CITYID'].">".$cities['CITYNAME']."</option>";
	}
	}
	
	public function getSearch()
	{
	$searchinput=Jsonhotel::search(Input::all());
	$searchoutput=Hotel::search($searchinput);
//print_r($searchinput); exit;
	if($searchoutput && $searchoutput->HotelSearchResult->Error->ErrorCode==0)
	{
	return View::make('retailer.hotel.roomdetails')->with('searchoutput',$searchoutput)->with('input',Input::all());
	}
	else
	{
	return View::make('retailer.service');
	
	}
	
	}
	public function getRoomdescription()
	{
	$searchinput=Jsonhotel::hotelinfo(Input::get('hotelcode'),Input::get('resultindex'),Input::get('traceid'));
	$hotelinfo=Hotel::hotelinfo($searchinput);
	$roominfo=Hotel::roominfo($searchinput);
	//print_r($searchinput); 
	//print_r($hotelinfo); 
	//echo "<pre>";
	//print_r($roominfo); 
	//exit;
	if($hotelinfo && $hotelinfo->HotelInfoResult->Error->ErrorCode==0)
	{
	return View::make('retailer.hotel.roomdescription')->with('hotelinfo',$hotelinfo)->with('roominfo',$roominfo)->with('input',Input::all());
	}
	else
	{
	return View::make('retailer.service');
	
	}
	}
	
	
	
	public function getBlockroom()
	{
	//print_r(Input::all());
	//exit;
	$blockroominput=Jsonhotel::blockroom(Input::all());
	$blockroomoutput=Hotel::blockroom($blockroominput);
	//print_r($blockroominput);exit;
	if($blockroomoutput && $blockroomoutput->BlockRoomResult->Error->ErrorCode=="0")
	{
		return View::make('retailer.hotel.book')->with('blockroomoutput',$blockroomoutput)->with('input',Input::all());
	}

	}
	public function getBookroom()
	{
	//print_r(Input::all()); exit;
	$bookroom=Jsonhotel::bookroom(Input::all());
	$bookroomoutput=Hotel::bookroom($bookroom);
	//print_r($bookroomoutput);
	return View::make('retailer.hotel.sucess')->with('bookroomoutput',$bookroomoutput);
	}
	
}