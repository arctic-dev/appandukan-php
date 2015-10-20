<?php

class LoginController extends BaseController {

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
		return View::make('login');
	}
	public function postValidate()
	{
		$postData = Input::all();
					$rules = array(
						'userId'=>'required',
						'userKey'=>'required',
						);
					
					
					$validator = Validator::make($postData, $rules);
					if ($validator->fails()) 
					{
					return Redirect::to('/')->withInput()->withErrors($validator);
					}
					else
					{
					/*Session::put('user_type','AD');
					Session::put('user_id','2');
					Session::put('user_name','adtest');
					
					Session::put('clientip',Input::get('clientIp'));
			
					return Redirect::to('admin/dashboard');*/
		
		 	
									
		$input=json_encode(Input::all());
	$req=Sample::login($input);
	$response=json_decode($req); //print_r($response[0]);exit;
	if(isset($response->status))
	{
	if($response->status=="failure")
	{
		return Redirect::to('/')->with('failure',$response->message);
	}
	else
	{
		if($response->userType=="SA")
		{
			Session::put('reg_type',"AD");
			Session::put('user_type',$response->userType);
		 	Session::put('user_id',$response->userIdPk);
		 	Session::put('user_name',$response->userId);
			Session::put('clientip',Input::get('clientIp'));
			return Redirect::to('superadmin/dashboard');
		}
		elseif($response->userType=="AD")
		{
			Session::put('reg_type',"FR");
			Session::put('user_type',$response->userType);
		 	Session::put('user_id',$response->userIdPk);
		 	Session::put('user_name',$response->userId);
			Session::put('clientip',Input::get('clientIp'));
			
			return Redirect::to('admin/dashboard');	
		}
		elseif($response->userType=="FR")
		{
			Session::put('reg_type',"RT");
			Session::put('user_type',$response->userType);
		 	Session::put('user_id',$response->userIdPk);
		 	Session::put('user_name',$response->userId);
			Session::put('clientip',Input::get('clientIp'));
			
			return Redirect::to('franchise/dashboard');
		}
		elseif($response->userType=="RT")
		{
			Session::put('reg_type',"SR");
			Session::put('user_type',$response->userType);
		 	Session::put('user_id',$response->userIdPk);
		 	Session::put('user_name',$response->userId);
			Session::put('clientip',Input::get('clientIp'));
			
			return Redirect::to('retailer/dashboard');
		}
		elseif($response->userType=="SR")
		{
			Session::put('reg_type',"RT");
			Session::put('user_type',$response->userType);
		 	Session::put('user_id',$response->userIdPk);
		 	Session::put('user_name',$response->userId);
			Session::put('clientip',Input::get('clientIp'));
			
			return Redirect::to('subretailer/dashboard');
		}
		
	}
	}
	else
	{
		return Redirect::to('/')->with('failure','sorry., please try again later');
	}
}

}
public function getLogout()
{
	Session::forget('user_type');

		Session::forget('user_id');

 

		Session::flush();

		 

		return Redirect::to('/')->with('success','Logged out Successfully');

}
}
