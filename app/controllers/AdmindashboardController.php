<?php

class AdmindashboardController extends BaseController {

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
public static function getRetailer($admin)
{
	//echo $admin;
	$senddata1=Sample::users($admin);
	$userdata=json_decode($senddata1);
	   if($userdata && $userdata->status=="success")
		{
			echo '<option value="">select Reatiler</option>';
	
			$senddata=$userdata->subUsers;
		
	             
	
	foreach ($senddata as $retailer) {
		if($retailer->parentIdPk==$admin)
		{
			echo '<option value="'.$retailer->userIdPk.'">'.$retailer->userId.'</option>';
		}
	}
	}
	else
	{
		echo "1";
	}
}
public static function getFranchiseprod($admin)
{
	$userdata=Sample::category($admin);
	//$userdata=json_decode($senddata);
	//print_r($userdata);exit;
	$category=$userdata->categories;
	$products=$userdata->products;
		foreach($category as $categories){
  echo "<li class='parent-list'><input type='checkbox' name=''  class='canine parent' />".$categories->fullName." <i class='fa fa-arrow-down'></i><ul>";
   foreach($products as $product)
   {
   	if($product->catgCode==$categories->catgCode){
   	echo "<li><input type='checkbox' name='prodCode[]' class='canine' id='' value='".$product->prodCode."'/>".$product->fullName."</li>";
	
	}
	}
		echo"</ul></li>";
}
}
public static function getRetailerprod($admin)
{
	$userdata=Sample::category($admin);
	//$userdata=json_decode($senddata);
	//print_r($userdata);exit;
	$category=$userdata->categories;
	$products=$userdata->products;
		foreach($category as $categories){
  echo "<li class='parent-list'><input type='checkbox' name=''  class='canine parent' />".$categories->fullName." <i class='fa fa-arrow-down'></i><ul>";
   foreach($products as $product)
   {
   	if($product->catgCode==$categories->catgCode){
   	echo "<li><input type='checkbox' name='prodCode[]' class='canine' id='' value='".$product->prodCode."'/>".$product->fullName."</li>";
	
	}
	}
		echo"</ul></li>";
}
}

}
