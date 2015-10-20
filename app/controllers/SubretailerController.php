<?php

class SubRetailerController extends BaseController {

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
				$category=Sample::category(Session::get('user_name'));
if($category && $category->status=="success")
{
$products=$category->products;
foreach($products as $product)
{
Session::put($product->shortName,$product->prodCode);
}
}
		return View::make('subretailer.index');
	}
	public function getRegister()
	{
		return View::make('subretailer.edit');
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
					return Redirect::to('Subretailer/register')->withInput()->withErrors($validator);
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
		return Redirect::to('Subretailer/register')->with('failure', $output->message);
	}
	else
	{
		return Redirect::to('Subretailer/register')->with('sucess','registerd successfully');
	}
	}
	else
	{
		return Redirect::to('Subretailer/register')->with('failure', 'sorry., Please try again later');
	}
}
}
public static function getProfile()
{
$userdata=Sample::user(Session::get('user_id'));
if($userdata && $userdata->status=="success")
{
	return View::make('subretailer.editview')->with('userdata',$userdata);
}
else
{
return View::make('subretailer.service');
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
					return Redirect::to('subretailer/dashboard/profile')->withInput()->withErrors($validator);
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
					return Redirect::to('subretailer/dashboard/profile')->withInput()->withErrors($validator1);
					}
					else
					{
					$input=json_encode(Input::except('_token','cpass'));
					$update=Sample::update($input);
		//print_r($update);exit;
		if($update && $update->status=="success")
		{
		return Redirect::to('subretailer/dashboard/profile')->with('success',$update->message);
		}
		else
		{
		return Redirect::to('subretailer/dashboard/profile')->with('failure',"something went wrong");
		
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
		return Redirect::to('subretailer/dashboard/profile')->with('success',$update->message);
		}
		else
		{
		return Redirect::to('subretailer/dashboard/profile')->with('failure',"something went wrong");
		
		}}
					
					}

					}
public static function getDthrecharge()
{
$category=Sample::category(Session::get('user_name'));


if($category)
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
$products=$category->products;
foreach($products as $product)
{
if($product->prodCode=='1101')
{
$serviceprovider1=Services::provider($product->prodCode);
$serviceprovider=$serviceprovider1->providers;
return View::make('subretailer.dth.dth_recharge')->with('serviceprovider',$serviceprovider)->with('mobilerecharge',$mobilerecharge);

}



}
return View::make('subretailer.static');
}
else
{
return View::make('subretailer.service');
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
					return Redirect::to('subretailer/dashboard/dthrecharge')->withInput()->withErrors($validator);
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
					return Redirect::to('subretailer/dashboard/dthrecharge')->with('failure', $op->message);
	
					}
					else
					{
					return Redirect::to('subretailer/dashboard/dthrecharge')->with('success', 'recharge done successfully');
	
					}
					}
					else{
					return Redirect::to('subretailer/dashboard/dthrecharge')->with('failure', 'sorry., please try again later');
	
					}


	return Redirect::to('Subretailer/dashboard/dthrecharge')->with('sucess',"Recharge Done successfully");
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
return View::make('subretailer.dth.manager_dthrecharge')->with('serviceprovider',$serviceprovider)->with('mobilerecharge',$mobilerecharge);

}



}
return View::make('subretailer.static');
}
else
{
return View::make('subretailer.service');
}



	//return View::make('subretailer.dth.manager_dthrecharge');
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
return View::make('subretailer.mobile.mobile_recharge_postpaid')->with('serviceprovider',$serviceprovider)->with('mobilerecharge',$mobilerecharge);

}



}
return View::make('subretailer.static');
}
else
{
return View::make('subretailer.service');
}
	}
public static function postMpospaidrecharge()
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
					return Redirect::to('subretailer/dashboard/mposrecharge')->withInput()->withErrors($validator);
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
					return Redirect::to('subretailer/dashboard/mposrecharge')->with('failure', $op->message);
	
					}
					else
					{
					return Redirect::to('subretailer/dashboard/mposrecharge')->with('success', 'recharge done successfully');
	
					}
					}
					else{
					return Redirect::to('subretailer/dashboard/mposrecharge')->with('failure', 'sorry., please try again later');
	
					}

	//return Redirect::to('Subretailer/dashboard/mpostrecharge')->with('sucess',"Recharge Done successfully");
}
}
public static function getMprerecharge()
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
$category=Sample::category(Session::get('user_name'));
if($category)
{
$products=$category->products;
foreach($products as $product)
{
if($product->prodCode=='1001')
{
$serviceprovider1=Services::provider($product->prodCode);
$serviceprovider=$serviceprovider1->providers;
return View::make('subretailer.mobile.mobile_recharge_prepaid')->with('serviceprovider',$serviceprovider)->with('mobilerecharge',$mobilerecharge);

}



}
return View::make('subretailer.static');

}
else
{
return View::make('service');

}
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
					return Redirect::to('subretailer/dashboard/mprerecharge')->withInput()->withErrors($validator);
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
					return Redirect::to('subretailer/dashboard/mprerecharge')->with('failure', $op->message);
	
					}
					else
					{
					return Redirect::to('subretailer/dashboard/mprerecharge')->with('success', 'recharge done successfully');
	
					}
					}
					else{
					return Redirect::to('subretailer/dashboard/mprerecharge')->with('failure', 'sorry., please try again later');
	
					}
		
	//return Redirect::to('subretailer/dashboard/mprerecharge')->with('sucess',"Recharge Done successfully");
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
return View::make('subretailer.mobile.manager_prerecharge')->with('serviceprovider',$serviceprovider)->with('mobilerecharge',$mobilerecharge);

}



}
return View::make('subretailer.static');

}
else
{
return View::make('subretailer.service');

}


	//return View::make('subretailer.mobile.manager_recharge');
}
public static function getMobilerechargepost()
{
$category=Sample::category(Session::get('user_name'));
if($category)
{
$products=$category->products;
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
return View::make('subretailer.mobile.manager_recharge')->with('serviceprovider',$serviceprovider)->with('mobilerecharge',$mobilerecharge);

}



}
return View::make('subretailer.static');

}
else
{
return View::make('subretailer.service');

}


	//return View::make('subretailer.mobile.manager_recharge');
}
public static function getPancard()
{
$category=Sample::category(Session::get('user_name'));
if($category)
{
$products=$category->products;
foreach($products as $product)
{
if($product->prodCode=='2001')
{

	return View::make('subretailer.pancard.addview');
}
}
return View::make('subretailer.static');


}
else
{
return View::make('service');
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
									"contactNo"=>'required|min:5|numeric',
									"emailId"=>'required|min:5|email',	
							);
					$validator = Validator::make($postData, $rules);
					if ($validator->fails()) 
					{
					return Redirect::to('subretailer/dashboard/pancard')->withInput()->withErrors($validator);
					}
					else
					{
						$dob=array('dob'=>date('Y-m-d', strtotime(Input::get('dob'))));
						//echo $dob; exit;
						$finalotuput=array_merge(Input::except('_token','dob'),$dob);
						//print_r($finalotuput);
						$input=json_encode($finalotuput);
						//print_r($input); 
						//exit;
						$op=Services::pancreate($input);
		$output=json_decode($op);
		if(isset($output->status))
		{
	if($output->status=='failure')
	{
		return Redirect::to('subretailer/dashboard/pancard')->with('failure', $output->message);
	}
	else
	{
		return Redirect::to('subretailer/dashboard/pancardmanage')->with('sucess','registerd successfully');
	}
	}
	else
	{
		return Redirect::to('subretailer/dashboard/pancard')->with('failure', 'sorry., Please try again later');
	}
	return Redirect::to('subretailer/dashboard/pancardmanage')->with('sucess',"Recharge Done successfully");
}
}
public static function getPancardmanage()
{
	$category=Sample::category(Session::get('user_name'));
if($category)
{
$products=$category->products;
foreach($products as $product)
{
if($product->prodCode=='2001')
{
$sendata=Services::getpan();
	$senddata=json_decode($sendata);
	//print_r($sendata); exit;
	if($sendata && $senddata->status=="success")
	{
	
	$pandata=$senddata->panForms;
	return View::make('subretailer.pancard.manageview')->with('pandata',$pandata);
	
	}
	else
	{
	$pandata="";
	return View::make('subretailer.pancard.manageview')->with('pandata',$pandata);

	}
	}
	
	
	}
	}
	else
	{
	return View::make('service');
	
	}
	}
public function getReceipt($id,$couponno,$name,$date)
{

	return View::make('subretailer.pancard.receipt')->with('id',$id)->with('couponno',$couponno)->with('name',$name)->with('date',$date);
	
}
public static function getMailcheck($email)
{
 
	$input=array(
		'userEmail'=>$email,
		);
	$input1=json_encode($input);
	//print_r($input1); exit;

	$output=Sample::mail($input1);
	print_r($output);
}
public static function getMobilecheck($id)
{
	
	//check whether mobile number exists
	$output=Sample::mobile($id);
	print_r($output);
}
public static function getUsercheck($id)
{
	
	//echo $id;
	$output=Sample::name($id);
	print_r($output);
}
}
