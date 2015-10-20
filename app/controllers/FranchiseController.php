<?php

class FranchiseController extends BaseController {

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
		$userdata=Sample::user(Session::get('user_id'));

if($userdata && $userdata->status=="success")
{
	return View::make('franchise.editview')->with('userdata',$userdata);
}
else
{
return Redirect::to('franchise/noservice');
}
	}
	
public static function postStore()
{
$postData = Input::all();
					$rules = array(
									'userName' => 'required|min:5',
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
					return Redirect::to('franchise/profile')->withInput()->withErrors($validator);
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
					return Redirect::to('franchise/profile')->withInput()->withErrors($validator1);
					}
					else
					{
					$input=json_encode(Input::except('_token','cpass'));
					$update=Sample::update($input);
		//print_r($update);exit;
		if($update && $update->status=="success")
		{
		return Redirect::to('franchise/profile')->with('success',$update->message);
		}
		else
		{
		return Redirect::to('franchise/profile')->with('failure',"something went wrong");
		
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
		return Redirect::to('franchise/profile')->with('success',$update->message);
		}
		else
		{
		return Redirect::to('franchise/profile')->with('failure',"something went wrong");
		
		}
		}
					
					}
}
public function noservice()
{
	return View::make('franchise.service');
}
}
