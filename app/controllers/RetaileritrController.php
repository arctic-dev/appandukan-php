<?php

class RetaileritrController extends BaseController {

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
		
		//Session::put('ITR',4001);
		if(Session::has('ITR'))
		{
		return View::make('retailer.itr.addview');
	
		}
		else
		{
		return View::make('retailer.itr.register');
		}
		}
		
		public function postRegister()
		{
			$photo=Input::file('picture');
		$date=getdate();	
		if($photo)
		{
		//print_r($photo);
		$filename=$date[0].$photo->getClientOriginalName();
		//echo $filename;
		$destinationPath = './assets/itr/picture';
		$uploadSuccess = $photo->move($destinationPath,$filename);	
		}
		
			$Input=array(
				"userId"=>Session::get('user_name'),
				"userLink"=>$filename,
				"prodCode"=>"3009"
				);
			$data=json_encode($Input);
			$output=Services::addproductitr($data);
			//($output);exit;
			if($output && $output->status=="success")
			{
				Session::put('ITR','4001');
				return Redirect::to('retailer/itr')->with('success',"product added succeddfully");

			}
			elseif($output && $output->status=="error") {
				return Redirect::to('retailer/itr')->with('failure',$output->message);
			}
			else
			{
				return Redirect::to('retailer/itr')->with('failure','service temproily down., try again later');
			}
			
		}
	
	public function postCreate()
	{
	$pan=Input::file('pan');
	$bankstatement=Input::file('bank');
	$addrproof=Input::file('addrproof');
	$form16=Input::file('form16');
	$tds=Input::file('tds');
	$itr=Input::file('itrcopy');
	$fyear=Input::file('fyear');
	//print_r($form16);
	$date=getdate();	
	if($form16)
	{
		//print_r($form16);
	$filename=$date[0].$form16->getClientOriginalName();
	echo $filename;
	$destinationPath = './assets/itr/form16';
	$uploadSuccess = $form16->move($destinationPath,$filename);	
	}
	else
	{
	$filename="";
	}
	if($tds)
	{
	$tdsfile=$date[0].$tds->getClientOriginalName();
	echo $filename;
	$destinationPath = './assets/itr/tds';
	$uploadSuccess = $tds->move($destinationPath,$tdsfile);	
	}
	else
	{
	$tdsfile="";
	}
	if($itr)
	{
	$itrcopyfile=$date[0].$itr->getClientOriginalName();
	echo $filename;
	$destinationPath = './assets/itr/itrcopy';
	$uploadSuccess = $itr->move($destinationPath,$itrcopyfile);	
	}
	else
	{
	$itrcopyfile="";
	}
	
	if($fyear)
	{
	$fyearfile=$date[0].$fyear->getClientOriginalName();
	echo $filename;
	$destinationPath = './assets/itr/fyear';
	$uploadSuccess = $fyear->move($destinationPath,$fyearfile);	
	}
	else
	{
	$fyearfile="";
	}
	if($addrproof && $pan &&$bankstatement)
	{
	$panfile=$date[0].$pan->getClientOriginalName();
	$addrfile=$date[0].$addrproof->getClientOriginalName();
	$bankfile=$date[0].$bankstatement->getClientOriginalName();
	
	$destinationPath = './assets/itr/pan';
	$uploadSuccess = $pan->move($destinationPath,$panfile);	
	$destinationPath = './assets/itr/addressproof';
	$uploadSuccess = $addrproof->move($destinationPath,$addrfile);	
	$destinationPath = './assets/itr/bankfile';
	$uploadSuccess = $bankstatement->move($destinationPath,$bankfile);	
	}
	else
	{
	$panfile="";
	$addrfile="";
	$bankfile="";
	
	
	}
	$input=array(
	"itrName"=>Input::get('name'),
	"itrPan"=>$panfile,
	"itrAddrproof"=>$addrfile,
	"itrBankstatement"=>$bankfile,
	"itrForm"=>$filename,
	"itrTdcertificate"=>$tdsfile,
	"itrPrevitr"=>$itrcopyfile,
	"itrBankname"=>Input::get('bankacname'),
	"itrBankaccttype"=>Input::get('actype'),
	"itrBankacctno"=>Input::get('accno'),
	"itrBankIfsc"=>Input::get('ifsccode'),
	"itrFyear"=>$fyearfile,
	"itrMobileno"=>Input::get('mobileno'),
	"itrEmail"=>Input::get('email'),
	"itrStatus"=>0,
	"itrCreatedby"=>Session::get('user_name'),
	"itrClientip"=>Session::get('clientip')
	);
	$data =json_encode($input);
	$output=Services::newitr($data);
			print_r($data); exit;
			if($output && $output->status=="success")
			{
				
				return Redirect::to('retailer/itr/manage')->with('success',"itr Submitted successfully");

			}
			elseif ($output && $output->status=="error") 
			{
				return Redirect::to('retailer/itr')->with('failure',$output->message);
			}
			else
			{
				return Redirect::to('retailer/itr')->with('failure','something went wrong');
			}
	
	}
	public function getManage()
	{
		$output=Services::itrhistoryuser(json_encode(array("itrCreatedby"=>Session::get('user_name'))));
		//print_r($output);exit;
	if($output && $output->status=="success")
	{
	return View::make('retailer.itr.manageview')->with('itrhistory',$output->itUploads);	
	}
	if($output && $output->status=="failure")
	{
	return View::make('retailer.itr.manageview')->with('data',"");	
	}	
	else
	{
	return View::make('retailer/service');	
	}
	}
}
