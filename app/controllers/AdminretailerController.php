<?php

class AdminretailerController extends BaseController {

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
		$admindata=Sample::all();
		$userdata=json_decode($admindata); 
		if($userdata && $userdata->status=="success")
		{
			$senddata=$userdata->subUsers;
			return View::make('admin.retailer.selectview')->with('senddata',$senddata);
	
		}
		else
		{
			return Redirect::to('admin/noservice');
		}
		
		}
	public function getManageview()
	{
		$admindata=Sample::users(Session::get('admin_id'));
		//print_r($admindata); exit;
		$userdata=json_decode($admindata); 
		if($userdata && $userdata->status=="success")
		{
			$senddata=$userdata->subUsers;
		}
		else
		{
		$senddata="";
		}
	return View::make('admin.retailer.manageview')->with('senddata',$senddata);
			
	}
	
	public function postRet()
	{
		Session::put('admin_id',Input::get('userId'));
		return Redirect::to('admin/retailer/manageview');
		//print_r(Session::get('admin_id')); exit;
	}
	
	public function getDashboard()
	{
		return View::make('admin.retailer.dashboard');
	}
	public function getAdd()
	{
		$data=Sample::all();
		//print_r($data); exit;
		$senddata1=json_decode($data);
		$senddata=$senddata1->subUsers;
		$categorydata=Sample::category(Session::get('user_name'));
		if($categorydata)
		{
		$category=$categorydata->categories;
		$products=$categorydata->products;
		}
		else
		{
		$category='';
		$products='';
		}
		
		return View::make('admin.retailer.addview')->with('senddata',$senddata)->with('category',$category)->with('products',$products);
	}
	
	public function postCreate()
	{
		$postData = Input::all();
					$rules = array(
									'userName' => 'required|min:5',
									'userEmail'=>'required|email',
									'userMobile' => 'required|min:10|numeric',
									'userAddress1'=>'required',
									'userAddress2'=>'required',
									'userPincode'=>'required|min:6|numeric',
									'currentUserIdPk'=>'required',
									'userCity'=>'required',
									'userState'=>'required',
									'userId'=>'required|alpha_num',
									'userKey'=>'required|min:6|alpha_num',
									'cpass'=>'required|min:6|same:userKey',
									'userStatus'=>'required',	
									'prodCode'=>'required',								
									
									);
					$validator = Validator::make($postData, $rules);
					if ($validator->fails()) 
					{
					return Redirect::to('admin/retailer/add')->withInput()->withErrors($validator);
					}
					else
					{
					

		$data=Input::get('prodCode');
		//print_r($data);
		
		foreach ($data as $prodcode) {
			$products[]=array(

				'prodCode'=>$prodcode,
				'prodStatus'=>'1');
		}
		$prodCodes=array(
			'products'=>$products);
		//print_r(json_encode($prodCodes));
		//exit;

		$input=json_encode(Input::except('prodCode','check-all','cpass'));
		$finaloutput=array_merge(Input::except('prodCode','check-all','cpass'),$prodCodes);
		$op1=json_encode($finaloutput); 
		//print_r($op1); exit;
		$op=Sample::create($op1);
		$output=json_decode($op);
		if(isset($output->status))
		{
	if($output->status=='failure')
	{
		return Redirect::to('admin/retailer/add')->with('failure', $output->message);
	}
	else
	{
		return Redirect::to('admin/retailer')->with('sucess','registerd successfully');
	}
	}
	else
	{
		return Redirect::to('admin/retailer/add')->with('failure', 'sorry., Please try again later');
	}
}
		//return Redirect::to('admin/retailer');
	}
	
	public function postStore()
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
									'prodCode'=>'required',
																		
									
									);
									
					$validator = Validator::make($postData, $rules);
					if ($validator->fails()) 
					{
					return Redirect::to('admin/retailer/show/'.Input::get('userIdPk'))->withInput()->withErrors($validator);
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
					return Redirect::to('admin/retailer/show/'.Input::get('userIdPk'))->withInput()->withErrors($validator1);
					}
					else
					{
					$input=json_encode(Input::except('_token','cpass'));
					$data=Input::get('prodCode');
		//print_r($data);
		
		foreach ($data as $prodcode) {
			$products[]=array(

				'prodCode'=>$prodcode,
				'prodStatus'=>'1');
		}
		$prodCodes=array(
			'products'=>$products);
		//print_r(json_encode($prodCodes));
		//
		$input=json_encode(Input::except('prodCode','check-all','cpass'));
		$finaloutput=array_merge(Input::except('_token','prodCode','check-all','cpass'),$prodCodes);
		$op1=json_encode($finaloutput);
		//echo $op1;
		$update=Sample::update($op1);
		//print_r($update);exit;
		if($update && $update->status=="success")
		{
		return Redirect::to('admin/retailer/manageview')->with('success',$update->message);
		}
		else
		{
		return Redirect::to('admin/retailer/show/'.Input::get('userIdPk'))->with('failure',"something went wrong");
		
		}
					
					}
					}
					else
					{
					$input=json_encode(Input::except('_token','userKey','cpass'));
					//print_r($input);
					$data=Input::get('prodCode');
		//print_r($data);
		
		foreach ($data as $prodcode) {
			$products[]=array(

				'prodCode'=>$prodcode,
				'prodStatus'=>'1');
		}
		$prodCodes=array(
			'products'=>$products);
		//print_r(json_encode($prodCodes));
		//
		$input=json_encode(Input::except('prodCode','check-all','cpass'));
		$finaloutput=array_merge(Input::except('_token','prodCode','userKey','check-all','cpass'),$prodCodes);
		$op1=json_encode($finaloutput);
		//echo $op1;
		$update=Sample::update($op1);
		//print_r($update);exit;
		if($update && $update->status=="success")
		{
		return Redirect::to('admin/retailer/manageview')->with('success',$update->message);
		}
		else
		{
		return Redirect::to('admin/franchise/show/'.Input::get('userIdPk'))->with('failure',"something went wrong");
		
		}
					}
					
					}
	}
	
	public function getShow($id)
	{
		$userdata=Sample::user($id);
		if($userdata && $userdata->status=="success")
		{
		$userproducts=Sample::category($userdata->userId);
		$adminproducts=Sample::category($userdata->parentId);
		
		$usercategory=$userproducts->categories;
		$userproduct=$userproducts->products;
		$admincategory=$adminproducts->categories;
		$adminproduct=$adminproducts->products;
		return View::make('admin.retailer.editview')->with('userdata',$userdata)->with('usercategory',$usercategory)->with('userproduct',$userproduct)->with('admincategory',$admincategory)->with('adminproduct',$adminproduct);
	}
	else
	{
	return Redirect::to('admin/noservice');
	}
	}
	

}
