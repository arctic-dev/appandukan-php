<?php

class SuperAdminController extends BaseController {

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
		return View::make('superadmin.register');
	}
	public function getRegister()
	{
		return View::make('superadmin.register');
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
					return Redirect::to('Superadmin/register')->withInput()->withErrors($validator);
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
		return Redirect::to('Superadmin/register')->with('failure', $output->message);
	}
	else
	{
		return Redirect::to('Superadmin/register')->with('sucess','registerd successfully');
	}
	}
	else
	{
		return Redirect::to('Superadmin/register')->with('failure', 'sorry., Please try again later');
	}
}
}
public static function getProfile()
{
$userdata=Sample::user(Session::get('user_id'));

if($userdata && $userdata->status=="success")
{
	//return View::make('superadmin.editview')->with('userdata',$userdata);
}
else
{
return View::make('superadmin.service');
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
					return Redirect::to('superadmin/profile')->withInput()->withErrors($validator);
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
					return Redirect::to('superadmin/profile')->withInput()->withErrors($validator1);
					}
					else
					{
					$input=json_encode(Input::except('_token','cpass'));
					print_r($input);
					}
					}
					else
					{
					$input=json_encode(Input::except('_token','userKey','cpass'));
					print_r($input);
					}
					
					}
}

public static function postMailcheck()
{
	print_r(Input::all());
}

}
