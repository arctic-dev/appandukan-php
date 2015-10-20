<?php

class AdminrechargeController extends BaseController {

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

		return View::make('admin.dashboard.dashboard');
	}
	
public static function getPrepaid()
{
 
	$input=array(
			'currentUserIdPk'=>Session::get('user_id'),
			'currentUserId'=>Session::get('user_name'),
			'prodCode'=>'1001',
			'limit'=>'0',
			);
$inputencode=json_encode($input);
			$mobilerechargeall=Services::rechargehistory($inputencode);
			if($mobilerechargeall && $mobilerechargeall->status=="success")
			{
				$mobilerecharge=$mobilerechargeall->Rechargehistory[0];
				$mobilerechargetotal=$mobilerechargeall->Rechargetotal;
				$mobilerechargecommission=$mobilerechargeall->Rechargecommission;
				//echo "<pre>";
				//print_r($mobilerecharge);exit;
				return View::make('admin.recharge.rechargehistory')->with('mobilerecharge',$mobilerecharge)
				->with('mobilerechargetotal',$mobilerechargetotal)->with('mobilerechargecommission',$mobilerechargecommission);
			}
			elseif( $mobilerechargeall && $mobilerechargeall->status=="failure")
			{
				$mobilerecharge="";
				$mobilerechargetotal="";
				$mobilerechargecommission="";
				return View::make('admin.recharge.rechargehistory')->with('mobilerecharge',$mobilerecharge)
				->with('mobilerechargetotal',$mobilerechargetotal)->with('mobilerechargecommission',$mobilerechargecommission)
				->with('failure',$mobilerechargeall->message);
			
				
				
			}
			else
			{
				return Redirect::to('admin/noservice');
			}
}
public static function getPostpaid()
{
 
	$input=array(
			'currentUserIdPk'=>Session::get('user_id'),
			'currentUserId'=>Session::get('user_name'),
			'prodCode'=>'1002',
			'limit'=>'0',
			);
$inputencode=json_encode($input);
			$mobilerechargeall=Services::rechargehistory($inputencode);
			if($mobilerechargeall->status=="success")
			{
				$mobilerecharge=$mobilerechargeall->Rechargehistory[0];
				$mobilerechargetotal=$mobilerechargeall->Rechargetotal;
				$mobilerechargecommission=$mobilerechargeall->Rechargecommission;
				//echo "<pre>";
				//print_r($mobilerecharge);exit;
				return View::make('admin.recharge.rechargehistory')->with('mobilerecharge',$mobilerecharge)
				->with('mobilerechargetotal',$mobilerechargetotal)->with('mobilerechargecommission',$mobilerechargecommission);
			}
			elseif($mobilerechargeall->status=="failure")
			{
				$mobilerecharge="";
				$mobilerechargetotal="";
				$mobilerechargecommission="";
				return View::make('admin.recharge.rechargehistory')->with('mobilerecharge',$mobilerecharge)
				->with('mobilerechargetotal',$mobilerechargetotal)->with('mobilerechargecommission',$mobilerechargecommission)
				->with('failure',$mobilerechargeall->message);
			
				
				
			}
			else
			{
				return Redirect::to('admin/noservice');
			}
}
public static function getDth()
{
 
	$input=array(
			'currentUserIdPk'=>Session::get('user_id'),
			'currentUserId'=>Session::get('user_name'),
			'prodCode'=>'1101',
			'limit'=>'0',
			);
$inputencode=json_encode($input);
			$mobilerechargeall=Services::rechargehistory($inputencode);
			if($mobilerechargeall->status=="success")
			{
				$mobilerecharge=$mobilerechargeall->Rechargehistory[0];
				$mobilerechargetotal=$mobilerechargeall->Rechargetotal;
				$mobilerechargecommission=$mobilerechargeall->Rechargecommission;
				//echo "<pre>";
				//print_r($mobilerecharge);exit;
				return View::make('admin.recharge.rechargehistory')->with('mobilerecharge',$mobilerecharge)
				->with('mobilerechargetotal',$mobilerechargetotal)->with('mobilerechargecommission',$mobilerechargecommission);
			}
			elseif($mobilerechargeall->status=="failure")
			{
				$mobilerecharge="";
				$mobilerechargetotal="";
				$mobilerechargecommission="";
				return View::make('admin.recharge.rechargehistory')->with('mobilerecharge',$mobilerecharge)
				->with('mobilerechargetotal',$mobilerechargetotal)->with('mobilerechargecommission',$mobilerechargecommission)
				->with('failure',$mobilerechargeall->message);
			
				
				
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
public function getReceipt($id,$couponno,$name,$date)
{

	return View::make('admin.recharge.receipt')->with('id',$id)->with('couponno',$couponno)->with('name',$name)->with('date',$date);
	
}

public function getCoupon()
{
	return View::make('admin.recharge.coupon');
}

public function postUploadcsv()
{
	$csvfile=Input::file('fileupload');
	if($csvfile)
	{
		
		$filename=str_random(8).$csvfile->getClientOriginalName();
		$destinationPath = './public/coupons/';
		$uploadSuccess = $csvfile->move($destinationPath,$filename);	
	}
	else
	{
		$filename=="";
	}
	
	$coupon=CSV::fromFile(public_path().'/coupons/'.$filename)->toArray(); 
	$input=json_encode(array('coupon' => $coupon));
	$output=Services::pancoupons($input);
	//print_r($input);
	//print_r($output);exit;
	if($output && $output->status=="success")
	{
		return Redirect::to('admin/recharge/coupon')->with('success',$output->message);
	}
	elseif($output && $output->status=="failure")
	{
		return Redirect::to('admin/recharge/coupon')->with('failure',$output->message);	
	}

	
}


}
