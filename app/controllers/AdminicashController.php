<?php

class AdminicashController extends BaseController {

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
		$jsonresult=Icash::cardhistory();
		//print_r($jsonresult); exit;
		if($jsonresult && $jsonresult->status=="success")
		{
			return View::make('admin.icash.card')->with('carddetails',$jsonresult->cardhistory);
		}
		else
		{
			return Redirect::to('admin/noservice');
		}
		
	}
	public function getTopup()
	{
		$jsonresult=Icash::topuphistory();
		//print_r($jsonresult); exit;
		if($jsonresult && $jsonresult->status=="success")
		{
			return View::make('admin.icash.topup')->with('topupdetails',$jsonresult->topuphistory);
		}
		else
		{
			return Redirect::to('admin/noservice');
		}
		
	}
	public function getTransfer()
	{
		$jsonresult=Icash::transferhistoryall();
		//print_r($jsonresult); exit;
		if($jsonresult && $jsonresult->status=="success")
		{
			return View::make('admin.icash.transfer')->with('transferdata',$jsonresult->topuphistory);
		}
		else
		{
			return Redirect::to('admin/noservice');
		}
		
	}
	
	public function getBalance()
	{
		$xmlinput=Xmlicash::channelpartnerlimit();
		$jsonresult=Icash::registerkyc($xmlinput);
		$output=Xmltoarray::arr($jsonresult); 
		$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['CHANNELPARTNERLIMITRESPONSE']['CHANNELPARTNERLIMITRESULT']; 
			$output1=Xmltoarray::arr($city);
			//print_r($output1); exit;
		

		
		if($output1 && $output1['CHANNELPARTNERLIMITRESPONSE']['STATUSCODE']==0)
		{
			
			$admin=Icash::updatebalance($output1['CHANNELPARTNERLIMITRESPONSE']['LIMIT']);
			//print_r($admin);
			}
		else
		{
			return Redirect::to('admin/noservice');
		}
		
	}

	


}
