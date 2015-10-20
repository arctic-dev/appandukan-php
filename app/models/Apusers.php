<?php



use Illuminate\Auth\UserTrait;

use Illuminate\Auth\UserInterface;

use Illuminate\Auth\Reminders\RemindableTrait;

use Illuminate\Auth\Reminders\RemindableInterface;



class Apusers extends Eloquent implements UserInterface, RemindableInterface {



	use UserTrait, RemindableTrait;

 

	 public  $timestamps = false;

	protected $table = 'ap_users';

	protected $primaryKey='user_id';

	protected $fillable = array('user_type','admin_id','user_parent','user_code','user_name','user_password','user_fname','user_lname','user_gender',
		'user_addr1','user_addr2','user_zipcode','user_city','user_state','user_email','user_mobile','user_fransise','user_status');

	public static function active($listingids)

	{

     return DB::table('ap_users')->whereIn('user_id',explode(",",$listingids))->update(array('user_status'=>1));

	

	/*$queries = DB::getQueryLog();

	$last_query = end($queries);

	print_r($last_query);exit;*/

	

	}

		public static function deactive($listingids)

	{

        return DB::table('ap_users')->whereIn('user_id',explode(",",$listingids))->update(array('user_status'=>0));

	}

 

	 

}

