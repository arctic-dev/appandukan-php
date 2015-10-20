<?php

class RetailericashController extends BaseController {

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
	return View::make('retailer.icashcard.addview');
		}

		public function getManage()
		{
			$input=Xmlicash::viewben();
		$data=Icash::registerkyc($input);
		$output=Xmltoarray::arr($data); 
		$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['VIEWBENEFICIARYRESPONSE']['VIEWBENEFICIARYRESULT']; 
			$output1=Xmltoarray::arr($city);
			$cashlimitin=Xmlicash::cashlimit();
		$cashlimitxml=Icash::registerkyc($cashlimitin);
		$cashlimitout=Xmltoarray::arr($cashlimitxml); 
		$city=$cashlimitout['SOAP:ENVELOPE']['SOAP:BODY']['CHECKCARDBALANCERESPONSE']['CHECKCARDBALANCERESULT']; 
			$cashlimitout1=Xmltoarray::arr($city);
			 $jsoninput=Jsonicash::loginvalidate($cashlimitout1);
			 $jsonresult=Icash::loginupdate($jsoninput);
		
		//print_r($jsonresult); //exit;
		//echo "<pre>";
		//print_r(Session::all()); //exit;
			return View::make('retailer.icashcard.manageview')->with('getarray',$output1)->with('cashlimitout1',$cashlimitout1);
		}
		public function getViewuser()
		{
			return View::make('retailer.icashcard.viewuser');
		}
		public function getKycupload()
		{
			return View::make('retailer.icashcard.kycupload');
		}

	public function postCreate()
	{
		if(Input::get('kyc')=="2")
		{
			//Session::put('user_name','rttest');
			$idproof=Input::file('Idproof');
			$addrproof=Input::file('addrproof');
			if($idproof && $addrproof)
			{
				$date=getdate();
			$filename=$date[0].$idproof->getClientOriginalName();
			echo $filename;
			$destinationPath = './assets/idproof/';

		     $uploadSuccess = $idproof->move($destinationPath,$filename);


		    $addressname=$date[0].$addrproof->getClientOriginalName();
			//echo $filename;
			$destinationPath = './assets/addrproof/';

		     $uploadSuccess = $addrproof->move($destinationPath,$addressname);
		     $idpath=url('assets/idproof/'.$filename);
		     echo $idpath; //exit;
		     $addrpath=url('assets/addrproof/'.$addressname);
		     //echo $addrpath; exit;
		     
		     $input=Xmlicash::registerkyc(Input::get(),$idpath,$addrpath);
		     if($jsonresult && $jsonresult->status=="1")
			{
				$input=Xmlicash::registerotp($jsonresult->tranid);
		//print_r($input);
	$data=Icash::registerkyc($input);
	$output=Xmltoarray::arr($data); //print_r($output); 
	//exit;
	$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['SENDERRESENDOTPRESPONSE']['SENDERRESENDOTPRESULT']; 
	$output2=Xmltoarray::arr($city); //print_r($output2); exit;
	if($output2['SENDERRESENDOTPRESPONSE']['STATUSCODE']==0)
	{
		return View::make('retailer.icashcard.otpregister')->with('transactionid',$output1['REGISTRATIONRESPONSE']['STATUS']);
		
	}
	else
	{

	return View::make('retailer.icashcard.addview')->with('failure',"sorry., try again later");
			
	}
			}
			else
			{

	$data=Icash::registerkyc($input);
	$output=Xmltoarray::arr($data); //print_r($output); exit;
	$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['REGISTRATIONRESPONSE']['REGISTRATIONRESULT']; 
	$output1=Xmltoarray::arr($city); //print_r($output); exit;
	if($output1['REGISTRATIONRESPONSE']['STATUSCODE']==0)
	{
		return View::make('retailer.icashcard.otpregister')->with('transactionid',$output1['REGISTRATIONRESPONSE']['TRANSACTIONID']);
		}
	elseif($output1['REGISTRATIONRESPONSE']['STATUSCODE']==20)
	{
		$input=Xmlicash::registerotp($output1['REGISTRATIONRESPONSE']['STATUS']);
		//print_r($input);
	$data=Icash::registerkyc($input);
	$output=Xmltoarray::arr($data); //print_r($output); 
	//exit;
	$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['SENDERRESENDOTPRESPONSE']['SENDERRESENDOTPRESULT']; 
	$output2=Xmltoarray::arr($city); //print_r($output2); exit;
	if($output2['SENDERRESENDOTPRESPONSE']['STATUSCODE']==0)
	{
		return View::make('retailer.icashcard.otpregister')->with('transactionid',$output1['REGISTRATIONRESPONSE']['STATUS']);
		
	}
	else
	{

	return View::make('retailer.icashcard.addview')->with('failure',"sorry., try again later");
			
	}	
	}
	else
	{
	return Redirect::to('retailer/icash')->with('failure',$output1['REGISTRATIONRESPONSE']['STATUS']);
		
	}	

			}
		}


		}
		else
		{
			//print_r(Input::get('mobilenumber'));
			$input=Xmlicash::registernonkyc(Input::get());
			//$jsoninput=Jsonicash::registernonkyc(Input::get());
			//exit;
			//$jsonresult=Icash::registerkycjson($jsoninput);
			//print_r($jsonresult); exit;
			if($jsonresult && $jsonresult->status=="1")
			{
				$input=Xmlicash::registerotp($jsonresult->tranid);
		//print_r($input);
	$data=Icash::registerkyc($input);
	$output=Xmltoarray::arr($data); //print_r($output); 
	//exit;
	$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['SENDERRESENDOTPRESPONSE']['SENDERRESENDOTPRESULT']; 
	$output2=Xmltoarray::arr($city); //print_r($output2); exit;
	if($output2['SENDERRESENDOTPRESPONSE']['STATUSCODE']==0)
	{
		return View::make('retailer.icashcard.otpregister')->with('transactionid',$output1['REGISTRATIONRESPONSE']['STATUS']);
		
	}
	else
	{

	return View::make('retailer.icashcard.addview')->with('failure',"sorry., try again later");
			
	}
			}
			else
			{
	$data=Icash::registerkyc($input);
	$output=Xmltoarray::arr($data); //print_r($output); exit;
	$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['REGISTRATIONRESPONSE']['REGISTRATIONRESULT']; 
	$output1=Xmltoarray::arr($city); //print_r($output); exit;
	if($output1['REGISTRATIONRESPONSE']['STATUSCODE']==0)
	{
		return View::make('retailer.icashcard.otpregister')->with('transactionid',$output1['REGISTRATIONRESPONSE']['TRANSACTIONID']);
	}
	elseif($output1['REGISTRATIONRESPONSE']['STATUSCODE']==20)
	{
			$input=Xmlicash::registerotp($output1['REGISTRATIONRESPONSE']['STATUS']);
		//print_r($input);
	$data=Icash::registerkyc($input);
	$output=Xmltoarray::arr($data); //print_r($output); 
	//exit;
	$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['SENDERRESENDOTPRESPONSE']['SENDERRESENDOTPRESULT']; 
	$output2=Xmltoarray::arr($city); //print_r($output2); exit;
	if($output2['SENDERRESENDOTPRESPONSE']['STATUSCODE']==0)
	{
		return View::make('retailer.icashcard.otpregister')->with('transactionid',$output1['REGISTRATIONRESPONSE']['STATUS']);
		
	}
	else
	{

	return View::make('retailer.icashcard.addview')->with('failure',"sorry., try again later");
			
	}
	}

	else
	{
	return Redirect::to('retailer/icash')->with('failure',$output['REGISTRATIONRESPONSE']['STATUS']);
		
	}
}
		}
	}

	public function getOtp()
	{
	$input=Xmlicash::otpverify(Input::all());	//print_r($input);	
	$data=Icash::registerkyc($input);
	$output=Xmltoarray::arr($data); //print_r($output); 
	$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['SENDERREGISTERRESPONSE']['SENDERREGISTERRESULT']; 
	$output1=Xmltoarray::arr($city); //print_r($output1); exit;
	if($output1['SENDERREGISTERRESPONSE']['STATUSCODE']==0)
	{
$registercomplete=Jsonicash::updateuser($output1['SENDERREGISTERRESPONSE'],Input::all());
		$updateuser=Icash::updateuser($registercomplete);
		return Redirect::to('retailer/icash/login');
	}
	else
	{
	return View::make('retailer.icashcard.otpregister')->with('failure','Please enter OTP again')->with('transactionid',Input::get('transid'));
	
	}
}
public function postUpdatekyc()
{
	$idproof=Input::file('Idproof');
			$addrproof=Input::file('addrproof');
			if($idproof && $addrproof)
			{
				$date=getdate();
			$filename=$date[0].$idproof->getClientOriginalName();
			echo $filename;
			$destinationPath = './assets/idproof/';

		     $uploadSuccess = $idproof->move($destinationPath,$filename);


		    $addressname=$date[0].$addrproof->getClientOriginalName();
			//echo $filename;
			$destinationPath = './assets/addrproof/';

		     $uploadSuccess = $addrproof->move($destinationPath,$addressname);
		     $idpath=url('assets/idproof/'.$filename);
		     echo $idpath; //exit;
		     $addrpath=url('assets/addrproof/'.$addressname);
		     //echo $addrpath; exit;
		     
		     $input=Xmlicash::kycupload(Input::get(),$idpath,$addrpath);

	$data=Icash::registerkyc($input);
	$output=Xmltoarray::arr($data); //print_r($output); exit;
	$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['KYCUPLOADRESPONSE']['KYCUPLOADRESULT']; 
	$output1=Xmltoarray::arr($city); //print_r($output1); exit;
	if($output1['KYCUPLOADRESPONSE']['STATUSCODE']==0)
	{
//jsoninput=Jsonicash::kycupload(Input::get(),$idpath,$addrpath);
		//$jsonresult=Icash::kycupload($jsoninput);
		//print_r($jsoninput); exit;

		Session::put('NAME',$output1['KYCUPLOADRESPONSE']['NAME']);
		Session::put('MIDDLENAME',$output1['KYCUPLOADRESPONSE']['MIDDLENAME']);
		Session::put('LASTNAME',$output1['KYCUPLOADRESPONSE']['LASTNAME']);
		Session::put('DOB',$output1['KYCUPLOADRESPONSE']['DOB']);
		Session::put('EMAILID',$output1['KYCUPLOADRESPONSE']['EMAILID']);
		Session::put('PINCODE',$output1['KYCUPLOADRESPONSE']['PINCODE']);
		Session::put('ADDRESS',$output1['KYCUPLOADRESPONSE']['ADDRESS']);
		Session::put('CITY',$output1['KYCUPLOADRESPONSE']['CITY']);
		Session::put('STATE',$output1['KYCUPLOADRESPONSE']['STATE']);
		Session::put('MOBILE',$output1['KYCUPLOADRESPONSE']['MOBILE']);
		Session::put('MOTHERMAIDENNAME',$output1['KYCUPLOADRESPONSE']['MOTHERMAIDENNAME']);
		Session::put('TRANSACTIONLIMIT',$output1['KYCUPLOADRESPONSE']['TRANSACTIONLIMIT']);
		Session::put('MMID',$output1['KYCUPLOADRESPONSE']['MMID']);
		Session::put('KYCSTATUS',$output1['KYCUPLOADRESPONSE']['KYCSTATUS']);
		
		return Redirect::to('retailer/icash/manage')->with('success',$output1['KYCUPLOADRESPONSE']['STATUS']);
	}
	else
	{
		return Redirect::to('retailer/icash/kycupload')->with('failure',$output1['KYCUPLOADRESPONSE']['STATUS']);
	}
}
}
public function getMpin()
{
	print_r(Input::all());
}
public function getLogin()
{
	return View::make('retailer.icashcard.login');
}

public function getLoginvalidate()
{
$input=Xmlicash::loginvalidate(Input::all());
$data=Icash::registerkyc($input);
$output=Xmltoarray::arr($data); //print_r($output); 
$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['LOGIN_V2RESPONSE']['LOGIN_V2RESULT']; 
$output1=Xmltoarray::arr($city); //print_r($output1); exit;
	
if($output1['LOGIN_V2RESPONSE']['STATUSCODE']==0)
{
	if($output1['LOGIN_V2RESPONSE']['OTPSTATUS']==0)
	{

		Session::put('cardno',$output1['LOGIN_V2RESPONSE']['CARDNO']);
		Session::put('security_key',$output1['LOGIN_V2RESPONSE']['SECURITYKEY']);
		Session::put('NAME',$output1['LOGIN_V2RESPONSE']['NAME']);
		Session::put('MIDDLENAME',$output1['LOGIN_V2RESPONSE']['MIDDLENAME']);
		Session::put('LASTNAME',$output1['LOGIN_V2RESPONSE']['LASTNAME']);
		Session::put('DOB',$output1['LOGIN_V2RESPONSE']['DOB']);
		Session::put('EMAILID',$output1['LOGIN_V2RESPONSE']['EMAILID']);
		Session::put('PINCODE',$output1['LOGIN_V2RESPONSE']['PINCODE']);
		Session::put('ADDRESS',$output1['LOGIN_V2RESPONSE']['ADDRESS']);
		Session::put('CITY',$output1['LOGIN_V2RESPONSE']['CITY']);
		Session::put('STATE',$output1['LOGIN_V2RESPONSE']['STATE']);
		Session::put('BALANCE',$output1['LOGIN_V2RESPONSE']['BALANCE']);
		Session::put('MOBILE',$output1['LOGIN_V2RESPONSE']['MOBILE']);
		Session::put('MOTHERMAIDENNAME',$output1['LOGIN_V2RESPONSE']['MOTHERMAIDENNAME']);
		Session::put('TRANSACTIONLIMIT',$output1['LOGIN_V2RESPONSE']['TRANSACTIONLIMIT']);
		Session::put('MMID',$output1['LOGIN_V2RESPONSE']['MMID']);
		Session::put('KYCSTATUS',$output1['LOGIN_V2RESPONSE']['KYCSTATUS']);
		//print_r($output1); exit;
		return Redirect::to('retailer/icash/manage')->with('success','user Logged in Successfully');	
	}
	else
	{
		return View::make('retailer.icashcard.loginotp')->with('mobilenumber',Input::get('mobilenumber'));
	}
}
elseif($output1['LOGIN_V2RESPONSE']['STATUSCODE']==20)
{
$input=Xmlicash::registerotp($output1['LOGIN_V2RESPONSE']['STATUS']);
		//print_r($input);
	$data=Icash::registerkyc($input);
	$output=Xmltoarray::arr($data); //print_r($output); 
	//exit;
	$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['SENDERRESENDOTPRESPONSE']['SENDERRESENDOTPRESULT']; 
	$output2=Xmltoarray::arr($city); //print_r($output2); exit;
	if($output2['SENDERRESENDOTPRESPONSE']['STATUSCODE']==0)
	{
		return View::make('retailer.icashcard.otpregister')->with('transactionid',$output1['LOGIN_V2RESPONSE']['STATUS']);
		
	}
	else
	{
		return View::make('retailer.icashcard.login')->with('failure','Sorry please try again later');
	}
}
elseif($output1['LOGIN_V2RESPONSE']['STATUSCODE']==21)
{
return Redirect::to('retailer/icash')->with('failure',$output1['LOGIN_V2RESPONSE']['STATUS']);
}
else
{
	return Redirect::to('retailer/icash/login')->with('failure',$output1['LOGIN_V2RESPONSE']['STATUS']);
}
	}


	public function getLoginotp()
	{
	$input=Xmlicash::loginotp(Input::all());
$data=Icash::registerkyc($input);
$output=Xmltoarray::arr($data); //print_r($output); exit;
$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['VALIDATELOGIN_V1RESPONSE']['VALIDATELOGIN_V1RESULT']; 
$output1=Xmltoarray::arr($city); //print_r($output1); 
	
	}

	public function getLoginotpgenerate($mobilenumber)
	{
	$input=Xmlicash::loginotpgenerate($mobilenumber);
$data=Icash::registerkyc($input);
$output=Xmltoarray::arr($data); //print_r($output);
$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['LOGINRESENDOTPRESPONSE']['LOGINRESENDOTPRESULT']; 
$output1=Xmltoarray::arr($city); //print_r($output1); 
	
	}

	public function getForgetpin()
	{
		return View::make('retailer.icashcard.forgetpin');
	}
	public function getForgetpinvalidate()
	{
	$input=Xmlicash::forgetpin(Input::all());
$data=Icash::registerkyc($input);
$output=Xmltoarray::arr($data); 
$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['FORGOTPINRESPONSE']['FORGOTPINRESULT']; 
$output1=Xmltoarray::arr($city); //print_r($output1); 
if($output1['FORGOTPINRESPONSE']['STATUSCODE']==0)
{
	return Redirect::to('retailer/icash/forgetpin')->with('success',$output1['FORGOTPINRESPONSE']['STATUS']);
}
else
{
	return Redirect::to('retailer/icash/forgetpin')->with('failure',$output1['FORGOTPINRESPONSE']['STATUS']);
}

	}

	public function getAddbeneficiary()
	{
		return View::make('retailer.icashcard.beneficiaryadd');
	}

	public function getAddbene()
	{
		//print_r(Input::all());
		$input=Xmlicash::addbene(Input::all());
		$data=Icash::registerkyc($input);
		$output=Xmltoarray::arr($data); 
		//print_r($output);
		$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['ADDBENEFICIARYRESPONSE']['ADDBENEFICIARYRESULT']; 

		$output1=Xmltoarray::arr($city); //print_r($output1); 
if($output1['ADDBENEFICIARYRESPONSE']['STATUSCODE']==0)
{
	//$jsoninput=Jsonicash::addbene(Input::all(),$output1['ADDBENEFICIARYRESPONSE']['BENEID']);
	//$jsonresult=Icash::addbene($jsoninput);
	//print_r($jsoninput); exit;
	return Redirect::to('retailer/icash/benotp/'.$output1['ADDBENEFICIARYRESPONSE']['BENEID']);
	}
else
{
	return Redirect::to('retailer/icash/addbeneficiary')->with('failure',$output1['ADDBENEFICIARYRESPONSE']['STATUS']);
}
}

public function getBenotp($id)
{
	return View::make('retailer.icashcard.beneotp')->with('benid',$id);

}

	
	public function getBenotpresend($id)
	{
		$input=Xmlicash::benresendotp();
		$data=Icash::registerkyc($input);
		$output=Xmltoarray::arr($data); 
		return Redirect::to('retailer/icash/benotp/'.$id);
	
		//print_r($output);
	}

	public function getBeneotp()

	{
		$input=Xmlicash::benotpverify(Input::all());
		$data=Icash::registerkyc($input);
		$output=Xmltoarray::arr($data); 
		$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['BENEREGISTERRESPONSE']['BENEREGISTERRESULT']; 

		$output1=Xmltoarray::arr($city);
		//print_r($output); exit;
		if($output1['BENEREGISTERRESPONSE']['STATUSCODE']==0)
		{
		return Redirect::to('retailer/icash/manage');
	}
	else
	{
		return Redirect::to('retailer/icash/benotp/'.Input::get('benid'))->with('failure',$output1['BENEREGISTERRESPONSE']['STATUS']);
	}

	}

	public function getRemoveben($id)
	{
	$input=Xmlicash::removeben($id);
		$data=Icash::registerkyc($input);
		$output=Xmltoarray::arr($data); 
		$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['REMOVEBENEFICIARYRESPONSE']['REMOVEBENEFICIARYRESULT']; 

		$output1=Xmltoarray::arr($city);
		//print_r($output); exit;
		if($output1['REMOVEBENEFICIARYRESPONSE']['STATUSCODE']==0)
		{
		return Redirect::to('retailer/icash/removebenotp/'.$id);
	}
	else
	{
		return Redirect::to('retailer/icash/manage')->with('failure',$output1['REMOVEBENEFICIARYRESPONSE']['STATUS']);
	}
}

	public function getRemovebenotp($id)
	{
	 return View::make('retailer.icashcard.removebeneotp')->with('id',$id);	
	}

	public function getRemoveotpresend($id)
	{
		$input=Xmlicash::benremoveresendotp();
		$data=Icash::registerkyc($input);
		$output=Xmltoarray::arr($data); 
		return Redirect::to('retailer/icash/removebenotp/'.$id);

	}
	public function getRemovebeneotp()

	{
		$input=Xmlicash::removebenotpverify(Input::all());
		$data=Icash::registerkyc($input);
		$output=Xmltoarray::arr($data); 
		$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['REMOVEBENEOTPRESPONSE']['REMOVEBENEOTPRESULT']; 

		$output1=Xmltoarray::arr($city);
		//print_r($output); exit;
		if($output1['REMOVEBENEOTPRESPONSE']['STATUSCODE']==0)
		{
//jsoninput=Jsonicash::removeben(Input::all());
			//$jsonresult=Icash::removebene($jsoninput);
			//print_r($jsoninput);exit;

		return Redirect::to('retailer/icash/manage');
	}
	else
	{
		return Redirect::to('retailer/icash/benotp/'.Input::get('benid'))->with('failure',$output1['REMOVEBENEOTPRESPONSE']['STATUS']);
	}

	}

	public function getEditben($beneid,$type,$mobilenumber,$benename)
	{
		return View::make('retailer.icashcard.beneficiaryedit')->with('beneid',$beneid)->with('type',$type)
		->with('mobilenumber',$mobilenumber)->with('benename',$benename);	
	}
	
	public function getUpdateben()
	{
		$input=Xmlicash::updateben(Input::all());
		$data=Icash::registerkyc($input);
		$output=Xmltoarray::arr($data);
		$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['EDITBENEFICIARYRESPONSE']['EDITBENEFICIARYRESULT']; 
		$output1=Xmltoarray::arr($city);
		//print_r($output1);	exit;
		if($output1['EDITBENEFICIARYRESPONSE']['STATUSCODE']==1)
	{
		return Redirect::to('retailer/icash/editben/'.Input::get('beneid').'/'.Input::get('type').'/'.Input::get('benmobile').
		'/'.Input::get('benname'))->with('failure',$output1['EDITBENEFICIARYRESPONSE']['STATUS']);
	}
	else
	{
		//$jsoninput=Jsonicash::updateben(Input::all());
		//$jsonresult=Icash::updateben($jsoninput);
		return Redirect::to('retailer/icash/manage')->with('success','Updated successfully');
	}
	}

	public function getMmidtransfer($mmid,$name,$mobile,$id)
	{
	return View::make('retailer.icashcard.mmidtransfer')->with('mmid',$mmid)->with('name',$name)->with('mobile',$mobile)->with('id',$id);
	}
	public function getMmidtrans()
	{
		$input=Xmlicash::mmidtransfer(Input::all());
		$data=Icash::registerkyc($input);
		$output=Xmltoarray::arr($data);
		$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['TRANSACTION_V3RESPONSE']['TRANSACTION_V3RESULT']; 
		$output1=Xmltoarray::arr($city);
		//$jsoninput=Jsonicash::mmidtransfer(Input::all());
		//$jsonresult=Icash::transfer($jsoninput);
		//print_r($input); exit;
		if($output1['TRANSACTION_V3RESPONSE']['STATUSCODE']==0)
		{

			//$jsoninput=Jsonicash::transtatus($output1['TRANSACTION_V3RESPONSE']['STATUSCODE']);
			//$jsonresult=Icash::transtatus($jsoninput);
		return Redirect::to('retailer/icash/manage');
	}
	elseif($output1['TRANSACTION_V3RESPONSE']['STATUSCODE']==1 || $output1['TRANSACTION_V3RESPONSE']['STATUSCODE']==3)
	{
		$jsoninput=Jsonicash::transtatus($output1['TRANSACTION_V3RESPONSE']['STATUSCODE']);
			$jsonresult=Icash::transtatus($jsoninput);
		
		return Redirect::to('retailer/icash/mmidtransfer/'.Input::get('mmid').'/'.Input::get('benename').'/'.Input::get('benemobile').'/'.Input::get('benid'))->with('failure',$output1['TRANSACTION_V3RESPONSE']['STATUS']);
	}
	elseif($output1['TRANSACTION_V3RESPONSE']['STATUSCODE']==2)
	{
		//print_r($output);
		//print_r(Session::all());
		return View::make('retailer.icashcard.transwaitrespose');
	}
	
	}
	public function getTranenquiry()
	{
		$input=Xmlicash::tranenquiry();
		$data=Icash::registerkyc($input);
		$output=Xmltoarray::arr($data);
		//print_r($output); exit;
		$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['TRANSACTIONREQUERYRESPONSE']['TRANSACTIONREQUERYRESULT']; 
		$output1=Xmltoarray::arr($city);
		
		if($output1['TRANSACTIONREQUERYRESPONSE']['STATUSCODE']==0)
		{
			$jsoninput=Jsonicash::transtatus($output1['TRANSACTIONREQUERYRESPONSE']['STATUSCODE']);
			$jsonresult=Icash::transtatus($jsoninput);
		
		
		return Redirect::to('retailer/icash/manage')->with('success',$output1['TRANSACTIONREQUERYRESPONSE']['STATUS']);
	}
	elseif($output1['TRANSACTIONREQUERYRESPONSE']['STATUSCODE']==1 || $output1['TRANSACTIONREQUERYRESPONSE']['STATUSCODE']==3 || $output1['TRANSACTIONREQUERYRESPONSE']['STATUSCODE']==4)
	{
		$jsoninput=Jsonicash::transtatus($output1['TRANSACTIONREQUERYRESPONSE']['STATUSCODE']);
			$jsonresult=Icash::transtatus($jsoninput);
		
		
		return Redirect::to('retailer/icash/manage')->with('failure',$output1['TRANSACTIONREQUERYRESPONSE']['STATUS']);
	}
	
	}
	public function getTransfer($ifsc,$name,$mobile,$accno,$benid)
	{
	return View::make('retailer.icashcard.transfer')->with('ifsc',$ifsc)->with('name',$name)->with('mobile',$mobile)->with('accno',$accno)->with('benid',$benid);
	}
	
	public function getTrans()
	{
		$checkbalancein=Xmlicash::servicecharge(Input::all());
		$checkbalancexml=Icash::registerkyc($checkbalancein);
		$checkbalanceout=Xmltoarray::arr($checkbalancexml);
		$jsonresult=Icash::topupcard();
		$city=$checkbalanceout['SOAP:ENVELOPE']['SOAP:BODY']['SERVICECHARGERESPONSE']['SERVICECHARGERESULT'];
		$output1=Xmltoarray::arr($city);	
			//print_r($output1);
		//print_r($jsonresult);
		if($output1 && $output1['SERVICECHARGERESPONSE']['STATUSCODE']==0)
		{
			print_r($output1);
			Session::put('servicecharge',$output1['SERVICECHARGERESPONSE']['SERVICECHARGE']);
			if($output1['SERVICECHARGERESPONSE']['TOPUPFLAG']==1)
			{
				
			if($jsonresult->impsbalance>Input::get('transamount'))
			{
				$input=Xmlicash::topup(Input::all());
				$data=Icash::registerkyc($input);
				$output=Xmltoarray::arr($data);
				$jsonresult=Icash::transferamount(Input::get('transamount'));	
				$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['TOPUP_V2RESPONSE']['TOPUP_V2RESULT']; 
				$output1=Xmltoarray::arr($city);
				if($output1['TOPUP_V2RESPONSE']['STATUSCODE']==0)
				{
				$xmlinput=Xmlicash::channelpartnerlimit();
		$jsonresult=Icash::registerkyc($xmlinput);
		$output=Xmltoarray::arr($jsonresult); 
		$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['CHANNELPARTNERLIMITRESPONSE']['CHANNELPARTNERLIMITRESULT']; 
			$output1=Xmltoarray::arr($city);
			//print_r($output1); exit;
		

		
		if($output1 && $output1['CHANNELPARTNERLIMITRESPONSE']['STATUSCODE']==0)
		{
			
			$admin=Icash::updatebalance($output1['CHANNELPARTNERLIMITRESPONSE']['LIMIT']);
			//print_r($admin);
			}
			$input=Xmlicash::transfer(Input::all());
		$data=Icash::registerkyc($input);
		$output=Xmltoarray::arr($data);
		$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['TRANSACTION_V3RESPONSE']['TRANSACTION_V3RESULT']; 
		$output1=Xmltoarray::arr($city);
		//print_r($input);exit;
		$jsoninput=Jsonicash::transfer(Input::all());
		$jsonresult=Icash::transfer($jsoninput);
		//print_r($jsoninput); exit;
		

		if($output1['TRANSACTION_V3RESPONSE']['STATUSCODE']==0)
		{
			$jsoninput=Jsonicash::transtatus($output1['TRANSACTION_V3RESPONSE']['STATUSCODE']);
			$jsonresult=Icash::transtatus($jsoninput);
		
		return Redirect::to('retailer/icash/manage')->with('success',$output1['TRANSACTION_V3RESPONSE']['STATUS']);
	}
	elseif($output1['TRANSACTION_V3RESPONSE']['STATUSCODE']==1 || $output1['TRANSACTION_V3RESPONSE']['STATUSCODE']==3)
	{
		$jsoninput=Jsonicash::transtatus($output1['TRANSACTION_V3RESPONSE']['STATUSCODE']);
			$jsonresult=Icash::transtatus($jsoninput);
		
		return Redirect::to('retailer/icash/transfer/'.Input::get('ifsc').'/'.Input::get('benname').'/'.Input::get('benemobile').'/'.Input::get('accno').'/'.Input::get('benid').'_'.Input::get('type'))->with('failure',$output1['TRANSACTION_V3RESPONSE']['STATUS']);
	}
	elseif($output1['TRANSACTION_V3RESPONSE']['STATUSCODE']==2)
	{
		//print_r($output);
		//print_r(Session::all());
		return View::make('retailer.icashcard.transwaitrespose');
	}		
				}
				else
				{
					return Redirect::to('retailer/icash/manage')->with('failure',"something went wrong");	
			
				}
	
			}
			else
			{
			return Redirect::to('retailer/icash/manage')->with('failure',"Balance is low");	
					
			}	
			}
			else
			{
				//print_r($output1);
				//echo "hi"; exit;
			$input=Xmlicash::transfer(Input::all());
		$data=Icash::registerkyc($input);
		$output=Xmltoarray::arr($data);
		$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['TRANSACTION_V3RESPONSE']['TRANSACTION_V3RESULT']; 
		$output1=Xmltoarray::arr($city);
		//print_r($input);exit;
		$jsoninput=Jsonicash::transfer(Input::all());
		$jsonresult=Icash::transfer($jsoninput);
		//print_r($jsoninput); exit;
		

		if($output1['TRANSACTION_V3RESPONSE']['STATUSCODE']==0)
		{
			$jsoninput=Jsonicash::transtatus($output1['TRANSACTION_V3RESPONSE']['STATUSCODE']);
			$jsonresult=Icash::transtatus($jsoninput);
		
		return Redirect::to('retailer/icash/manage')->with('success',$output1['TRANSACTION_V3RESPONSE']['STATUS']);
	}
	elseif($output1['TRANSACTION_V3RESPONSE']['STATUSCODE']==1 || $output1['TRANSACTION_V3RESPONSE']['STATUSCODE']==3)
	{
		$jsoninput=Jsonicash::transtatus($output1['TRANSACTION_V3RESPONSE']['STATUSCODE']);
			$jsonresult=Icash::transtatus($jsoninput);
		
		return Redirect::to('retailer/icash/transfer/'.Input::get('ifsc').'/'.Input::get('benname').'/'.Input::get('benemobile').'/'.Input::get('accno').'/'.Input::get('benid').'_'.Input::get('type'))->with('failure',$output1['TRANSACTION_V3RESPONSE']['STATUS']);
	}
	elseif($output1['TRANSACTION_V3RESPONSE']['STATUSCODE']==2)
	{
		//print_r($output);
		//print_r(Session::all());
		return View::make('retailer.icashcard.transwaitrespose');
	}		
				}
			}
		//exit;
		
	
	}

	public function getViewtransaction()

	{
		$transferdata="";
		 return View::make('retailer.icashcard.transhistory')->with('transferdata',$transferdata);
	}

	public function getTranshistory()
	{
		$input=Xmlicash::transhistory(Input::all());
		$data=Icash::registerkyc($input);
		$output=Xmltoarray::arr($data);
		$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['TRANSACTIONHISTORYRESPONSE']['TRANSACTIONHISTORYRESULT']; 
		
		$output1=Xmltoarray::arr($city); //print_r($input); exit;
		if($output1['TRANSACTIONHISTORYRESPONSE']['STATUSCODE']==0)
		{
			return View::make('retailer.icashcard.transhistory')->with('transferdata',$output1['TRANSACTIONHISTORYRESPONSE']);
		}
		else
		{
			return Redirect::to('retailer/icash/viewtransaction')->with('failure',$output1['TRANSACTIONHISTORYRESPONSE']['STATUS']);
		}
		
	}
	public function getAgenttransaction()

	{
		//$input=Jsonicash::agenttranshistory();
		$transferdata=Icash::transferhistory();
		//print_r($transferdata); exit;
		if($transferdata && $transferdata->status=="success")
		{
		 return View::make('retailer.icashcard.agenttranshistory')->with('transferdata',$transferdata);
		}
		else
		{
			$transferdata="";
		return View::make('retailer.icashcard.agenttranshistory')->with('transferdata',$transferdata);
			
		}
	}

	public function getAgenttranshistory()
	{
		$input=Xmlicash::agenttranshistory(Input::all());
		$data=Icash::registerkyc($input);
		$output=Xmltoarray::arr($data);
		$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['AGENTTRANSACTIONHISTORYRESPONSE']['AGENTTRANSACTIONHISTORYRESULT']; 
		
		$output1=Xmltoarray::arr($city); 
		//print_r($input); exit;
		if($output1['AGENTTRANSACTIONHISTORYRESPONSE']['STATUSCODE']==0)
		{
			return View::make('retailer.icashcard.agenttranshistory')->with('transferdata',$output1['AGENTTRANSACTIONHISTORYRESPONSE']);
		}
		else
		{
			return Redirect::to('retailer/icash/agenttransaction')->with('failure',$output1['AGENTTRANSACTIONHISTORYRESPONSE']['STATUS']);
		}
		
	}
public function getTopup()
{
		$jsonresult=Icash::topupcard();
		//print_r($jsonresult);exit;
		if($jsonresult && $jsonresult->status=="success")
		{
			
		return View::make('retailer.icashcard.topupmain')->with('data',$jsonresult->impsbalance);
		}
		else
		{
			return Redirect::to('retailer/icash')->with('failure',"service unavailable");
		}
}
public function getTopupcal()
{
		$amount=Input::get('amount');
		$jsonresult=Icash::topupval(Input::get('amount'));
		//print_r($jsonresult); exit;
		if($jsonresult && $jsonresult->status=="success")
		{ 
		
		$service=(0.20*$amount)/100;
		//echo $service;
		$total=$amount+$service;
		return Redirect::to('retailer/icash/topup')->with('success',"Balance added to imps  Wallet");

		}
		else
		{
			return Redirect::to('retailer/icash/topup')->with('failure',"insufficient Balance at user account");
		}
}
public function getTopupfin()
{
		$input=Xmlicash::topup(Input::all());
		$data=Icash::registerkyc($input);
		$output=Xmltoarray::arr($data);
		//print_r($input);	
		$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['TOPUP_V2RESPONSE']['TOPUP_V2RESULT']; 
		$output1=Xmltoarray::arr($city);
		//print_r($output1); exit;
		if($output1['TOPUP_V2RESPONSE']['STATUSCODE']==0)
		{
			$jsoninput=Jsonicash::topup(Input::all(),$output1['TOPUP_V2RESPONSE']['TOPUPTRANSID']);
			$jsonresult=Icash::topupnew($jsoninput);
			//print_r($jsoninput);exit;
			return Redirect::to('retailer/icash/topup')->with('success',$output1['TOPUP_V2RESPONSE']['STATUS']);

		}
		else
		{
			return Redirect::to('retailer/icash/topup')->with('failure',$output1['TOPUP_V2RESPONSE']['STATUS']);
		}
}
public function getNeftcancelotp($tranid,$date)
{
		$input=Xmlicash::neftcancelotp($tranid,$date);
		$data=Icash::registerkyc($input);
		$output=Xmltoarray::arr($data);
		//print_r(date('m/d/Y',$date));	
		$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['NEFTCANCELOTPRESPONSE']['NEFTCANCELOTPRESULT']; 
		$output1=Xmltoarray::arr($city);
		//print_r($output1); exit;
		if($output1['NEFTCANCELOTPRESPONSE']['STATUSCODE']==0)
		{
			return Redirect::to('retailer/icash/neftcancel/'.$tranid.'/'.$date)->with('success',$output1['NEFTCANCELOTPRESPONSE']['STATUS']);

		}
		else
		{
			return Redirect::to('retailer/icash/viewtransaction')->with('failure',$output1['NEFTCANCELOTPRESPONSE']['STATUS']);
		}
}
public function getNeftcancel($tranid,$date)
{
	return View::make('retailer.icashcard.neftotp')->with('transid',$tranid)->with('date',$date);	
}

public function getNeftcanceltran()
{
		$input=Xmlicash::neftcancel(Input::all());
		$data=Icash::registerkyc($input);
		$output=Xmltoarray::arr($data);
			
		$city=$output['SOAP:ENVELOPE']['SOAP:BODY']['NEFTCANCELTRANSACTIONRESPONSE']['NEFTCANCELTRANSACTIONRESULT']; 
		$output1=Xmltoarray::arr($city);
		//print_r($output1); exit;
		if($output1['NEFTCANCELTRANSACTIONRESPONSE']['STATUSCODE']==0)
		{
			$jsoninput=Jsonicash::neftcancel(Input::all(),$output1['NEFTCANCELTRANSACTIONRESPONSE']['STATUSCODE']);
			$jsonresult=Icash::neftcancel($jsoninput);

			return Redirect::to('retailer/icash/viewtransaction')->with('success',$output1['NEFTCANCELTRANSACTIONRESPONSE']['STATUS']);

		}
		else
		{
			$jsoninput=Jsonicash::neftcancel(Input::all(),$output1['NEFTCANCELTRANSACTIONRESPONSE']['STATUSCODE']);
			$jsonresult=Icash::neftcancel($jsoninput);
			//print_r($jsoninput); exit;
			
			return Redirect::to('retailer/icash/viewtransaction')->with('failure',$output1['NEFTCANCELTRANSACTIONRESPONSE']['STATUS']);
		}
}

public function getLogout()
{
	
		Session::forget('cardno');
		Session::forget('security_key');
		Session::forget('NAME');
		Session::forget('MIDDLENAME');
		Session::forget('LASTNAME');
		Session::forget('DOB');
		Session::forget('EMAILID');
		Session::forget('PINCODE');
		Session::forget('ADDRESS');
		Session::forget('CITY');
		Session::forget('STATE');
		Session::forget('MOBILE');
		Session::forget('MOTHERMAIDENNAME');
		Session::forget('TRANSACTIONLIMIT');
		Session::forget('MMID');
		Session::forget('KYCSTATUS');
		Session::forget('tranid');
		return Redirect::to('retailer/icash/login')->with('success',"logged out successfully");
}

	
}
