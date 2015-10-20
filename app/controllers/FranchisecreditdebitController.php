<?php

class FranchisecreditdebitController extends BaseController {

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
	$creditamount1=Services::credit(Session::get('user_id'));
	if($creditamount1 && $creditamount1->status=="success")
	{
	$creditamount=$creditamount1->subUsers;
	
	
		return View::make('franchise.creditdebit.manageview')->with('creditamount',$creditamount);
	}
	else
	{
		return Redirect::to('franchise/noservice');
	}
	
	
	}
	public function getDashboard()
	{
		return View::make('franchise.creditdebit.dashboard');
	}
	public function getAdd()
	{
	$admindata=Sample::all();
		$userdata=json_decode($admindata); 
		if($userdata && $userdata->status=="success")
		{
			$senddata=$userdata->subUsers;
			return View::make('franchise.creditdebit.addview')->with('senddata',$senddata);
	
		}
		else
		{
			return Redirect::to('franchise/noservice');
		}
		
		}
	
	public function postCreate()
	{
	$input=json_encode(Input::except('_token'));
		//print_r($input); exit;
		$op=Sample::creditdebit($input);
		$output=json_decode($op);
		if(isset($output->status))
		{
	if($output->status=='failure')
	{
		return Redirect::to('franchise/creditdebit/add')->with('failure', $output->message);
	}
	else
	{
		return Redirect::to('franchise/creditdebit')->with('sucess',$output->message);
	}
	}
	else
	{
		return Redirect::to('franchise/creditdebit/add')->with('failure', 'sorry., Please try again later');
	}
		//return Redirect::to('franchise/creditdebit');
	}
	
	

}
