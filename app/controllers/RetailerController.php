<?php

class RetailerController extends BaseController {

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
		return View::make('retailer.register');
	}
	public function getRegister()
	{
		return View::make('retailer.register');
	}
	public function postCreate()
	{
		$postData = Input::all();
					$rules = array(
									'userName' => 'required|min:5|alpha',
									'userEmail'=>'required|email',
									'userMobile' => 'required|min:10|numeric',
									'userAddress1'=>'required',
									'userAddress2'=>'required',
									'userPincode'=>'required|min:6|numeric',
									'userCity'=>'required',
									'userState'=>'required',
									'userId'=>'required|alpha',
									'userKey'=>'required|min:6|alphanumeric',
									'cpass'=>'required|min:6|same:userKey',
									'userStatus'=>'required',									
									
									);
					$validator = Validator::make($postData, $rules);
					if ($validator->fails()) 
					{
					return Redirect::to('Retailer/register')->withInput()->withErrors($validator);
					}
					else
					{
					

		$input=json_encode(Input::all());
		print_r($input); //exit;
		$op=Sample::create($input);
		$output=json_decode($op);
		if(isset($output->status))
		{
	if($output->status=='failure')
	{
		return Redirect::to('Retailer/register')->with('failure', $output->message);
	}
	else
	{
		return Redirect::to('Retailer/register')->with('sucess','registerd successfully');
	}
	}
	else
	{
		return Redirect::to('Retailer/register')->with('failure', 'sorry., Please try again later');
	}
}
}
public static function getProfile()
{
$userdata=Sample::user(Session::get('user_id'));

if($userdata && $userdata->status=="success")
{
	return View::make('retailer.editview')->with('userdata',$userdata);
}
else
{
return View::make('retailer/noservice');
}
}
public static function postStore()
{
$postData = Input::all();
					$rules = array(
									'userName' => 'required|min:5|alpha',
									'userEmail'=>'required|email',
									'userMobile' => 'required|min:10|numeric',
									'userAddress1'=>'required',
									'userAddress2'=>'required',
									'userPincode'=>'required|min:6|numeric',
									'userCity'=>'required',
									'userState'=>'required',
									'userId'=>'required|alphanum',
																		
									
									);
									
					$validator = Validator::make($postData, $rules);
					if ($validator->fails()) 
					{
					return Redirect::to('retailer/profile')->withInput()->withErrors($validator);
					}
					else
					{
					if(Input::has('userKey'))
									{
									$rulespass = array('userKey'=>'required|min:6|alphanum',
													'cpass'=>'required|min:6|same:userKey'
													);
									$validator1 = Validator::make($postData, $rulespass);
					if ($validator1->fails()) 
					{
					return Redirect::to('retailer/profile')->withInput()->withErrors($validator1);
					}
					else
					{
					$input=json_encode(Input::except('_token','cpass'));
					$update=Sample::update($input);
		//print_r($update);exit;
		if($update && $update->status=="success")
		{
		return Redirect::to('retailer/profile')->with('success',$update->message);
		}
		else
		{
		return Redirect::to('retailer/profile')->with('failure',"something went wrong");
		
		}
		}
					}
					else
					{
					$input=json_encode(Input::except('_token','userKey','cpass'));
					$update=Sample::update($input);
		//print_r($update);exit;
		if($update && $update->status=="success")
		{
		return Redirect::to('retailer/profile')->with('success',$update->message);
		}
		else
		{
		return Redirect::to('retailer/profile')->with('failure',"something went wrong");
		
		}
		}
					
					}

}
public static function getDthrecharge()
{
	$input=array(
			'currentUserIdPk'=>Session::get('user_id'),
			'currentUserId'=>Session::get('user_name'),
			'prodCode'=>'1101',
			'limit'=>'20',
			);
$inputencode=json_encode($input);
			$mobilerechargeall=Services::rechargedetails($inputencode);
			if($mobilerechargeall->status=="success")
			{
			$mobilerecharge=$mobilerechargeall->submittedRecharges;
		}
		else
		{
		$mobilerecharge="";	
		}


$category=Sample::category(Session::get('user_name'));
if($category && $category->status=="success")
{
$products=$category->products;
foreach($products as $product)
{
if($product->prodCode=='1101')
{
$serviceprovider1=Services::provider($product->prodCode);
$serviceprovider=$serviceprovider1->providers;
return View::make('retailer.dth.dth_recharge')->with('serviceprovider',$serviceprovider)->with('mobilerecharge',$mobilerecharge);

	}
	}
	return Redirect::to('retailer/static');
}
else
{
	return Redirect::to('retailer/service');
}

	
}
public static function postDrecharge()
{
$postData = Input::all();
					$rules = array(
																		
									'provider'=>'required', 
									'number'=>'required|min:10|numeric', 
									'amount'=>'required|numeric', 
									'prodCode'=>'required',

									);
					$validator = Validator::make($postData, $rules);
					if ($validator->fails()) 
					{
					return Redirect::to('retailer/dthrecharge')->withInput()->withErrors($validator);
					}
					else
					{
					$input=json_encode(Input::all());
					$op=Services::newrecharge($input);
					if(isset($op->status))
					{
					if($op->status=="failure")
					{
					return Redirect::to('retailer/dthrecharge')->with('failure', $op->message);
	
					}
					else
					{
					return Redirect::to('retailer/dthrecharge')->with('success', 'recharge done successfully');
	
					}
					}
					else{
					return Redirect::to('retailer/dthrecharge')->with('failure', 'sorry., please try again later');
	
					}

	//return Redirect::to('Retailer/dthrecharge')->with('sucess',"Recharge Done successfully");
}
}
public static function getDthrechargemanage()
{
$category=Sample::category(Session::get('user_name'));
if($category)
{
$products=$category->products;
foreach($products as $product)
{
if($product->prodCode=='1101')
{
$input=array(
			'currentUserIdPk'=>Session::get('user_id'),
			'currentUserId'=>Session::get('user_name'),
			'prodCode'=>'1101',
			'limit'=>'20',
			);
$inputencode=json_encode($input);
			$mobilerechargeall=Services::rechargedetails($inputencode);
			if($mobilerechargeall->status=="success")
			{
			$mobilerecharge=$mobilerechargeall->submittedRecharges;
		}
		else
		{
		$mobilerecharge="";	
		}

$serviceprovider1=Services::provider($product->prodCode);
$serviceprovider=$serviceprovider1->providers;
return View::make('retailer.dth.manager_dthrecharge')->with('serviceprovider',$serviceprovider)->with('mobilerecharge',$mobilerecharge);

}

}
return View::make('retailer.static');
}
else
{
return View::make('retailer.service');
}

	
}

public static function getMposrecharge()
{
	


$category=Sample::category(Session::get('user_name'));
if($category)
{
$input=array(
			'currentUserIdPk'=>Session::get('user_id'),
			'currentUserId'=>Session::get('user_name'),
			'prodCode'=>'1002',
			'limit'=>'20',
			);
$inputencode=json_encode($input);
			$mobilerechargeall=Services::rechargedetails($inputencode);
			//print_r($input); exit;
			if($mobilerechargeall->status=="success")
			{
			$mobilerecharge=$mobilerechargeall->submittedRecharges;
		}
		else
		{
		$mobilerecharge="";	
		}
$products=$category->products;
foreach($products as $product)
{
if($product->prodCode=='1002')
{
$serviceprovider1=Services::provider($product->prodCode);
$serviceprovider=$serviceprovider1->providers;
return View::make('retailer.mobile.mobile_recharge_postpaid')->with('serviceprovider',$serviceprovider)->with('mobilerecharge',$mobilerecharge);

}
}
return View::make('retailer.static');
}
else
{
return View::make('retailer.service');
}

	//return View::make('retailer.mobile_recharge_postpaid');
}
public static function postMpostpaidrecharge()
{
$postData = Input::all();
					$rules = array(
																		
									'provider'=>'required', 
									'number'=>'required|min:10|numeric', 
									'amount'=>'required|numeric', 
									'prodCode'=>'required',

									);
					$validator = Validator::make($postData, $rules);
					if ($validator->fails()) 
					{
					return Redirect::to('retailer/mposrecharge')->withInput()->withErrors($validator);
					}
					else
					{
					$input=json_encode(Input::all());
					//print_r($input); exit;
					$op=Services::newrecharge($input);
					if(isset($op->status))
					{
					if($op->status=="failure")
					{
					return Redirect::to('retailer/mposrecharge')->with('failure', $op->message);
	
					}
					else
					{
					return Redirect::to('retailer/mposrecharge')->with('success', $op->message);
	
					}
					}
					else{
					return Redirect::to('retailer/mposrecharge')->with('failure', 'sorry., please try again later');
	
					}

	//return Redirect::to('Retailer/mposrecharge')->with('sucess',"Recharge Done successfully");
}
}
public static function getMprerecharge()
{
	

$category=Sample::category(Session::get('user_name'));
if($category)
{
$products=$category->products;
foreach($products as $product)
{
if($product->prodCode=='1001')
{
$input=array(
			'currentUserIdPk'=>Session::get('user_id'),
			'currentUserId'=>Session::get('user_name'),
			'prodCode'=>'1001',
			'limit'=>'20',
			);
$inputencode=json_encode($input);
			$mobilerechargeall=Services::rechargedetails($inputencode);
			if($mobilerechargeall->status=="success")
			{
			$mobilerecharge=$mobilerechargeall->submittedRecharges;
		}
		else
		{
		$mobilerecharge="";	
		}

$serviceprovider1=Services::provider($product->prodCode);
$serviceprovider=$serviceprovider1->providers;
return View::make('retailer.mobile.mobile_recharge_prepaid')->with('serviceprovider',$serviceprovider)->with('mobilerecharge',$mobilerecharge);

}

}
return View::make('retailer.static');
}
else
{
return View::make('retailer.service');
}

	//return View::make('retailer.mobile_recharge_prepaid');
}
public static function postMprepaidrecharge()
{
$postData = Input::all();
					$rules = array(
																		
									'provider'=>'required', 
									'number'=>'required|min:10|numeric', 
									'amount'=>'required|numeric', 
									'prodCode'=>'required',

									);
					$validator = Validator::make($postData, $rules);
					if ($validator->fails()) 
					{
					return Redirect::to('retailer/mprerecharge')->withInput()->withErrors($validator);
					}
					else
					{
					$input=json_encode(Input::all());
					$op=Services::newrecharge($input);
					if(isset($op->status))
					{
					if($op->status=="failure")
					{
					return Redirect::to('retailer/mprerecharge')->with('failure', $op->message);
	
					}
					else
					{
					return Redirect::to('retailer/mprerecharge')->with('success', $op->message );
	
					}
					}
					else{
					return Redirect::to('retailer/mprerecharge')->with('failure', 'sorry., please try again later');
	
					}

	return Redirect::to('Retailer/mprerecharge')->with('sucess',"Recharge Done successfully");
}
}
public static function getMobilerechargepre()
{
$category=Sample::category(Session::get('user_name'));
if($category)
{
$products=$category->products;
foreach($products as $product)
{
if($product->prodCode=='1001')
{
$input=array(
			'currentUserIdPk'=>Session::get('user_id'),
			'currentUserId'=>Session::get('user_name'),
			'prodCode'=>'1001',
			'limit'=>'0',
			);
$inputencode=json_encode($input);
			$mobilerechargeall=Services::rechargedetails($inputencode);
			if($mobilerechargeall->status=="success")
			{
			$mobilerecharge=$mobilerechargeall->submittedRecharges;
		}
		else
		{
		$mobilerecharge="";	
		}

$serviceprovider1=Services::provider($product->prodCode);
$serviceprovider=$serviceprovider1->providers;
return View::make('retailer.mobile.manager_prerecharge')->with('serviceprovider',$serviceprovider)->with('mobilerecharge',$mobilerecharge);

}




}
return View::make('retailer.static');
}
else
{
return View::make('retailer.service');

}


	//return View::make('subretailer.mobile.manager_recharge');
}
public static function getMobilerechargepost()
{
$category=Sample::category(Session::get('user_name'));

if($category)
{
$products=$category->products;
//echo "<pre>";print_r(Session::all()); exit;
foreach($products as $product)
{

if($product->prodCode=='1002')
{

$input=array(
			'currentUserIdPk'=>Session::get('user_id'),
			'currentUserId'=>Session::get('user_name'),
			'prodCode'=>'1002',
			'limit'=>'0',
			);
$inputencode=json_encode($input);
			$mobilerechargeall=Services::rechargedetails($inputencode);
			if($mobilerechargeall->status=="success")
			{
			$mobilerecharge=$mobilerechargeall->submittedRecharges;
		}
		else
		{
		$mobilerecharge="";	
		}

$serviceprovider1=Services::provider($product->prodCode);
$serviceprovider=$serviceprovider1->providers;
return View::make('retailer.mobile.manager_recharge')->with('serviceprovider',$serviceprovider)->with('mobilerecharge',$mobilerecharge);

}

}
return View::make('retailer.static');
}
else
{
return View::make('retailer.service');

}


	//return View::make('subretailer.mobile.manager_recharge');
}


public static function getPancard()
{
$category=Sample::category(Session::get('user_name'));

if($category)
{
$products=$category->products;
//echo "<pre>";print_r(Session::all()); exit;
foreach($products as $product)
{

if($product->prodCode=='2001')
{
	return View::make('retailer.pancard.addview');
	}
	}
	return View::make('retailer.static');
}
else
{
return View::make('retailer.service');
}
}
public static function postPan()
{
	$postData = Input::all();
		
	$rules = array(
									"title"=>'required|alpha',
									"firstName"=>'required|min:5|alpha',
									"middleName"=>'required|min:5|alpha',
									"lastName"=>'required|min:5|alpha',
									"nameAbbrv"=>'required|min:5|alpha',
									"dob"=>'required|date',
									"fatherFname"=>'required|min:5|alpha',
									"fatherMname"=>'required|min:5|alpha',
									"fatherLname"=>'required|min:5|alpha',
									"countryCode"=>'required|min:5|numeric',
									"areaCode"=>'required|min:5|numeric',
									"contactNo"=>'required|min:10|numeric',
									"emailId"=>'required|min:5|email',	
							);
					$validator = Validator::make($postData, $rules);
					if ($validator->fails()) 
					{
					return Redirect::to('retailer/pancard')->withInput()->withErrors($validator);
					}
					else
					{
						$dob=array('dob'=>date('Y-m-d', strtotime(Input::get('dob'))));
						//echo $dob; exit;
						$finalotuput=array_merge(Input::except('_token','dob'),$dob);
						//print_r($finalotuput);
						$input=json_encode($finalotuput);
						$op=Services::pancreate($input);
		$output=json_decode($op);
		if(isset($output->status))
		{
	if($output->status=='failure')
	{
		return Redirect::to('retailer/pancard')->with('failure', $output->message);
	}
	else
	{
		return Redirect::to('retailer/pancardmanage')->with('sucess','registerd successfully');
	}
	}
	else
	{
		return Redirect::to('retailer/pancard')->with('failure', 'sorry., Please try again later');
	}
	return Redirect::to('retailer/pancardmanage')->with('sucess',"Recharge Done successfully");
}
}
public static function getPancardmanage()
{$category=Sample::category(Session::get('user_name'));

if($category)
{
$products=$category->products;
//echo "<pre>";print_r(Session::all()); exit;
foreach($products as $product)
{

if($product->prodCode=='2001')
{

	$sendata=Services::getpan();
	$senddata=json_decode($sendata);
	//print_r($senddata); exit;
	if($senddata)
	{
	$pandata=$senddata->panForms;	
	}

	return View::make('retailer.pancard.manageview')->with('pandata',$pandata);
}
}
return View::make('retailer.static');
}
else
{
return View::make('retailer.service');
}
}
public function getReceipt($id,$couponno,$name,$date)
{

	return View::make('retailer.pancard.receipt')->with('id',$id)->with('couponno',$couponno)->with('name',$name)->with('date',$date);
	
}


}
