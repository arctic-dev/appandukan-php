<?php

class RetailerdashboardController extends BaseController {

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
		return View::make('retailer.dashboard.dashboard');
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
