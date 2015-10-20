<?php

class AdminserviceController extends BaseController {

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
		$input=json_encode(array(
			'currentUserIdPk'=>Session::get('user_id'),
			'currentUserId'=>Session::get('user_name'),
			'prodCode'=>'1001',
			));
		$prepaid=Services::serviceprepaid($input);
		//print_r($prepaid);
			if($prepaid && $prepaid->status=="success")
			{
				return View::make('admin.services.manageview')->with('service',$prepaid->serviceprepaid);
			}
			else
			{
				return Redirect::to('admin/noservice');			
			}
	}
	

public static function getPostpaid()
{
 
	$input=json_encode(array(
			'currentUserIdPk'=>Session::get('user_id'),
			'currentUserId'=>Session::get('user_name'),
			'prodCode'=>'1002',
			'limit'=>'0',
			));
$prepaid=Services::serviceprepaid($input);
		//print_r($prepaid); exit;
			if($prepaid && $prepaid->status=="success")
			{
				return View::make('admin.services.manageview')->with('service',$prepaid->serviceprepaid);
			}
			else
			{
				return Redirect::to('admin/noservice');			
			}
			}
public static function getDth()
{
 
	$input=json_encode(array(
			'currentUserIdPk'=>Session::get('user_id'),
			'currentUserId'=>Session::get('user_name'),
			'prodCode'=>'1101',
			'limit'=>'0',
			));
$prepaid=Services::serviceprepaid($input);
		//print_r($prepaid);
			if($prepaid && $prepaid->status=="success")
			{
				return View::make('admin.services.manageview')->with('service',$prepaid->serviceprepaid);
			}
			else
			{
				return Redirect::to('admin/noservice');			
			}
			}
public static function getPan()
{
 
	$input=array(
			'currentUserIdPk'=>Session::get('user_id'),
			'currentUserId'=>Session::get('user_name'),
			'limit'=>'0',
			);
			$inputencode=json_encode($input);
			$panrechargeall=Services::panhistory($inputencode);
			if($panrechargeall->status=="success")
			{
				$panhistory=$panrechargeall->Panhistory;
				//echo "<pre>";
				//print_r($panrechargeall);exit;
				return View::make('admin.recharge.panhistory')->with('pandata',$panhistory);
				}
			elseif($panrechargeall->status=="failure")
			{
				$panhistory="";
				return View::make('admin.recharge.panhistory')->with('pandata',$panhistory)
				->with('failure',$panrechargeall->message);
			
				
				
			}
			else
			{
				return Redirect::to('admin/noservice');
			}
}
public function postCommission()
	
	{
		$input=json_encode(Input::all());
		$jsonresult=Services::commission($input);
		echo $jsonresult;
	
	}
}
