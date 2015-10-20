<?php

class RetailersubretailerController extends BaseController {

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
		if($userdata)
		{
			$senddata=$userdata->subUsers;
		}
		
		return View::make('retailer.subretailer.manageview')->with('senddata',$senddata);
	}
	public function getDashboard()
	{
		return View::make('retailer.subretailer.dashboard');
	}
	public function getAdd()
	{
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
		
		
		return View::make('retailer.subretailer.addview')->with('category',$category)->with('products',$products);
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
					$messages=array(
						"prodCode.required"=>'please select a product for subretailer'
						);
					$validator = Validator::make($postData, $rules,$messages);
					if ($validator->fails()) 
					{

					return Redirect::to('retailer/subretailer/add')->withInput()->withErrors($validator);
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
		$finaloutput=array_merge(Input::except('prodCode','check-all','cpass','catgcode'),$prodCodes);
		$op1=json_encode($finaloutput); 
		//print_r($op1); exit;
		$op=Sample::create($op1);
		$output=json_decode($op);
		if(isset($output->status))
		{
	if($output->status=='failure')
	{
		return Redirect::to('retailer/subretailer/add')->with('failure', $output->message);
	}
	else
	{
		return Redirect::to('retailer/subretailer')->with('sucess','registerd successfully');
	}
	}
	else
	{
		return Redirect::to('retailer/subretailer/add')->with('failure', 'sorry., Please try again later');
	}
}
		//return Redirect::to('retailer/subretailer');
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
					return Redirect::to('retailer/subretailer/show/'.Input::get('userIdPk'))->withInput()->withErrors($validator);
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
					return Redirect::to('retailer/subretailer/show/'.Input::get('userIdPk'))->withInput()->withErrors($validator1);
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
		return Redirect::to('retailer/subretailer')->with('success',$update->message);
		}
		else
		{
		return Redirect::to('retailer/subretailer/show/'.Input::get('userIdPk'))->with('failure',"something went wrong");
		
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
		return Redirect::to('retailer/subretailer')->with('success',$update->message);
		}
		else
		{
		return Redirect::to('retailer/subretailer/show/'.Input::get('userIdPk'))->with('failure',"something went wrong");
		
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
		return View::make('retailer.subretailer.editview')->with('userdata',$userdata)->with('usercategory',$usercategory)->with('userproduct',$userproduct)->with('admincategory',$admincategory)->with('adminproduct',$adminproduct);
	}
	else
	{
	return View::make('retailer.service');
	}
	}
	

}