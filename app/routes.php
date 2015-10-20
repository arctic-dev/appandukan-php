<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::filter('SA', function()
{
  if(!Session::has('user_type') || (Session::get('user_type')!="SA"))
    {
      return Redirect::to('/');
    }
   
});
Route::filter('AD', function()
{
  if(!Session::has('user_type') || (Session::get('user_type')!="AD"))
    {
      return Redirect::to('/');
    }
   
});
Route::filter('FR', function()
{
  if(!Session::has('user_type') || (Session::get('user_type')!="FR"))
    {
      return Redirect::to('/');
    }
   
});
Route::filter('RT', function()
{
  if(!Session::has('user_type') || (Session::get('user_type')!="RT"))
    {
      return Redirect::to('/');
    }
   
});
Route::filter('SR', function()
{
  if(!Session::has('user_type') || (Session::get('user_type')!="SR"))
    {
      return Redirect::to('/');
    }
   
});


Route::when('superadmin/*','SA');
Route::when('admin/*','AD');
Route::when('franchise/*','FR');
Route::when('retailer/*','RT');
Route::when('subretailer/*','SR');


/* user superadmins starts */
Route::controller('superadmin/dashboard','SuperadmindashboardController');
Route::controller('superadmin/sitesettings','SuperadminsitesettingsController');
Route::controller('superadmin/admin','SuperadminadminController');
Route::controller('superadmin/franchise','SuperadminfranchiseController');
Route::controller('superadmin/retailer','SuperadminretailerController');
Route::controller('superadmin/subretailer','SuperadminsubretailerController');
Route::controller('superadmin/creditdebit','SuperadmincreditdebitController');
Route::controller('superadmin','SuperadminController');


/* user superadmins ends */
/* user admins starts */
Route::controller('admin/dashboard','AdmindashboardController');
Route::controller('admin/franchise','AdminfranchiseController');
Route::controller('admin/retailer','AdminretailerController');
Route::controller('admin/subretailer','AdminsubretailerController');
Route::controller('admin/creditdebit','AdmincreditdebitController');
//Route::controller('superadmin','AdminController');
Route::controller('admin/profile','AdminController');
Route::controller('admin/recharge','AdminrechargeController');
Route::controller('admin/icash','AdminicashController');
Route::controller('admin/service','AdminserviceController');
Route::controller('admin/report','AdminreportController');
Route::controller('admin/itr','AdminitrController');
Route::get('admin/noservice','AdminController@noservice');


/* user admins ends */

/* user franchise starts */
Route::controller('franchise/dashboard','FranchisedashboardController');
Route::controller('franchise/retailer','FranchiseretailerController');
Route::controller('franchise/subretailer','FranchisesubretailerController');
Route::controller('franchise/creditdebit','FranchisecreditdebitController');
Route::controller('franchise/profile','FranchiseController');
Route::get('franchise/noservice','FranchiseController@noservice');



/* user Franchise ends */

/* user retailer starts */
Route::controller('retailer/dashboard','RetailerdashboardController');
Route::controller('retailer/subretailer','RetailersubretailerController');
Route::controller('retailer/creditdebit','RetailercreditdebitController');
Route::controller('retailer/bus','RetailerbusController');
Route::controller('retailer/flight','RetailerflightController');
Route::controller('retailer/itr','RetaileritrController');
Route::controller('retailer/hotel','RetailerhotelController');
Route::controller('retailer/icash','RetailericashController');
Route::get('retailer/noservice','RetailerController@noservice');
Route::get('retailer/static','RetailerController@static');

Route::controller('retailer','RetailerController');


/* user Retailer ends */
/* user subretailer starts */
Route::controller('subretailer/dashboard','SubretailerController');
Route::controller('subretailer/bus','SubretailerbusController');
//Route::controller('subretailer/flight','SubretailerflightController');
//Route::controller('subretailer/hotel','SubretailerhotelController');
/* user subretailer ends*/


Route::controller('login','LoginController');
Route::controller('/','HomeController');
