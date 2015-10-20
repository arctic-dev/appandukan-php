<?php

class Xmlicash {

 public $terminalid=200008;
 public $loginkey=6450785924;
 public $merchantid=8;
     
public static function registernonkyc($data)
    {
	$terminal=new Xmlicash();
	$transid=getdate();
	$tranid=$transid[0];
	//header("Content-Type: text/xml");
	$registerdata='<REGISTRATIONREQUEST>
	<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<AGENTID>'.Session::get('user_name').'</AGENTID>
<TRANSACTIONID>'.$tranid.'</TRANSACTIONID>
<KYCFLAG>'.$data['kyc'].'</KYCFLAG>
<USERNAME>'.$data['firstname'].'</USERNAME>
<USERMIDDLENAME>'.$data['middlename'].'</USERMIDDLENAME>
<USERLASTNAME>'.$data['lastname'].'</USERLASTNAME>
<USERMOTHERSMAIDENNAME>'.$data['maidenname'].'</USERMOTHERSMAIDENNAME>
<USERDATEOFBIRTH>'.$data['dob'].'</USERDATEOFBIRTH>
<USEREMAILID>'.$data['mail'].'</USEREMAILID>
<USERMOBILENO>'.$data['mobilenumber'].'</USERMOBILENO>
<USERSTATE>'.$data['state'].'</USERSTATE>
<USERCITY>'.$data['city'].'</USERCITY>
<USERADDRESS>'.$data['address'].'</USERADDRESS>
<PINCODE>'.$data['pincode'].'</PINCODE>
<USERIDPROOFTYPE></USERIDPROOFTYPE>
<USERIDPROOF></USERIDPROOF>
<IDPROOFURL></IDPROOFURL>
<USERADDRESSPROOFTYPE></USERADDRESSPROOFTYPE>
<USERADDRESSPROOF></USERADDRESSPROOF>
<ADDRESSPROOFURL></ADDRESSPROOFURL>
<PARAM1></PARAM1>
<PARAM2></PARAM2>
<PARAM3></PARAM3>
<PARAM4></PARAM4>
<PARAM5></PARAM5>
	</REGISTRATIONREQUEST>';
	
	
     $xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:REGISTRATION"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerdata));
		
		
		

    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
//print_r($xmlDoc->saveXML()); exit;


    }public static function registerkyc($data,$idpath,$addrpath)
    {
	$terminal=new Xmlicash();
	$transid=getdate();
	$tranid=$transid[0];
	//header("Content-Type: text/xml");
	$registerdata='<REGISTRATIONREQUEST>
	<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<AGENTID>'.Session::get('user_name').'</AGENTID>
<TRANSACTIONID>'.$tranid.'</TRANSACTIONID>
<KYCFLAG>'.$data['kyc'].'</KYCFLAG>
<USERNAME>'.$data['firstname'].'</USERNAME>
<USERMIDDLENAME>'.$data['middlename'].'</USERMIDDLENAME>
<USERLASTNAME>'.$data['lastname'].'</USERLASTNAME>
<USERMOTHERSMAIDENNAME>'.$data['maidenname'].'</USERMOTHERSMAIDENNAME>
<USERDATEOFBIRTH>'.$data['dob'].'</USERDATEOFBIRTH>
<USEREMAILID>'.$data['mail'].'</USEREMAILID>
<USERMOBILENO>'.$data['mobilenumber'].'</USERMOBILENO>
<USERSTATE>'.$data['state'].'</USERSTATE>
<USERCITY>'.$data['city'].'</USERCITY>
<USERADDRESS>'.$data['address'].'</USERADDRESS>
<PINCODE>'.$data['pincode'].'</PINCODE>
<USERIDPROOFTYPE>'.$data['useridprooftype1'].'</USERIDPROOFTYPE>
<USERIDPROOF>'.$data['Idproofno'].'</USERIDPROOF>
<IDPROOFURL>'.$idpath.'</IDPROOFURL>
<USERADDRESSPROOFTYPE>'.$data['addressproof'].'</USERADDRESSPROOFTYPE>
<USERADDRESSPROOF>'.$data['addproofno'].'</USERADDRESSPROOF>
<ADDRESSPROOFURL>'.$addrpath.'</ADDRESSPROOFURL>
<PARAM1></PARAM1>
<PARAM2></PARAM2>
<PARAM3></PARAM3>
<PARAM4></PARAM4>
<PARAM5></PARAM5>
	</REGISTRATIONREQUEST>';
	
	
     $xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:REGISTRATION"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerdata));
		
		
		

    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
//print_r($xmlDoc->saveXML()); exit;


    }
	public static function kycupload($data,$idpath,$addrpath)
    {
	$terminal=new Xmlicash();
	$transid=getdate();
	$tranid=$transid[0];
	//header("Content-Type: text/xml");
	$registerdata='<KYCUPLOADREQUEST>
	<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<CARDNO>'.Session::get('cardno').'</CARDNO>
<AGENTID>'.Session::get('user_name').'</AGENTID>
<KYCFLAG>'.$data['kyc'].'</KYCFLAG>
<USERNAME>'.$data['firstname'].'</USERNAME>
<USERMIDDLENAME>'.$data['middlename'].'</USERMIDDLENAME>
<USERLASTNAME>'.$data['lastname'].'</USERLASTNAME>
<USERMOTHERSMAIDENNAME>'.$data['maidenname'].'</USERMOTHERSMAIDENNAME>
<USERDATEOFBIRTH>'.$data['dob'].'</USERDATEOFBIRTH>
<USEREMAILID>'.$data['mail'].'</USEREMAILID>
<USERSTATE>'.$data['state'].'</USERSTATE>
<USERCITY>'.$data['city'].'</USERCITY>
<USERADDRESS>'.$data['address'].'</USERADDRESS>
<PINCODE>'.$data['pincode'].'</PINCODE>
<IDPROOFTYPE>'.$data['useridprooftype1'].'</IDPROOFTYPE>
<IDPROOF>'.$data['Idproofno'].'</IDPROOF>
<IDPROOFURL>'.$idpath.'</IDPROOFURL>
<ADDRESSPROOFTYPE>'.$data['addressproof'].'</ADDRESSPROOFTYPE>
<ADDRESSPROOF>'.$data['addproofno'].'</ADDRESSPROOF>
<ADDRESSPROOFURL>'.$addrpath.'</ADDRESSPROOFURL>

	</KYCUPLOADREQUEST>';
	
	
     $xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:KYCUPLOAD"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerdata));
		
		
		

    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
//print_r($xmlDoc->saveXML()); exit;


    }
public static function registerotp($tranid)
{ 	
$terminal=new Xmlicash();
 $registerotp='
<SENDERRESENDOTPREQUEST>
<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<TRANSACTIONID>'.$tranid.'</TRANSACTIONID>
<AGENTID>'.Session::get('user_name').'</AGENTID>
<PARAM1></PARAM1>
<PARAM2></PARAM2>
<PARAM3></PARAM3>
<PARAM4></PARAM4>
<PARAM5></PARAM5>
</SENDERRESENDOTPREQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:SENDERRESENDOTP"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
}
public static function otpverify($input)
{ 	
$terminal=new Xmlicash();
 $registerotp='
<SENDERREGISTERREQUEST>>
<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<TRANSACTIONID>'.$input['transid'].'</TRANSACTIONID>
<OTP>'.$input['otp'].'</OTP>
<AGENTID>'.Session::get('user_name').'</AGENTID>
<PARAM1></PARAM1>
<PARAM2></PARAM2>
<PARAM3></PARAM3>
<PARAM4></PARAM4>
<PARAM5></PARAM5>
</SENDERREGISTERREQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:SENDERREGISTER"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
}
public static function loginvalidate($input)
{ 	
$terminal=new Xmlicash();
 $registerotp='
<LOGIN_V2REQUEST>
<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<USERMOBILENO>'.$input['mobilenumber'].'</USERMOBILENO>
<AGENTID>'.Session::get('user_name').'</AGENTID>
<PARAM1>'.$input['pin'].'</PARAM1>
<PARAM2></PARAM2>
<PARAM3></PARAM3>
<PARAM4></PARAM4>
<PARAM5></PARAM5>
</LOGIN_V2REQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:LOGIN_V2"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
}
public static function loginotp($input)
{ 	
$terminal=new Xmlicash();
 $registerotp='
<VALIDATELOGIN_V1REQUEST>
<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<USERMOBILENO>'.$input['mobilenumber'].'</USERMOBILENO>
<AGENTID>'.Session::get('user_name').'</AGENTID>
<OTP>'.$input['otp'].'</OTP>
<PARAM1></PARAM1>
<PARAM2></PARAM2>
<PARAM3></PARAM3>
<PARAM4></PARAM4>
<PARAM5></PARAM5>
</VALIDATELOGIN_V1REQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:VALIDATELOGIN_V1"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
}
public static function loginotpgenerate($input)
{ 	
$terminal=new Xmlicash();
 $registerotp='
<LOGINRESENDOTPREQUEST>
<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<USERMOBILENO>'.$input.'</USERMOBILENO>
<AGENTID>'.Session::get('user_name').'</AGENTID>
<PARAM1></PARAM1>
<PARAM2></PARAM2>
<PARAM3></PARAM3>
<PARAM4></PARAM4>
<PARAM5></PARAM5>
</LOGINRESENDOTPREQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:LOGINRESENDOTP"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
}
public static function forgetpin($input)
{ 	
$terminal=new Xmlicash();
 $registerotp='
<FORGOTPINREQUEST>
<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<USERMOBILENO>'.$input['mobilenumber'].'</USERMOBILENO>
</FORGOTPINREQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:FORGOTPIN"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
}
public static function addbene($input)
{ 	
$terminal=new Xmlicash();
$transid=getdate();
	$tranid=$transid[0];
	Session::put('bentranid',$tranid);
 $registerotp='
<ADDBENEFICIARYREQUEST>
<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<CARDNO>'.Session::get('cardno').'</CARDNO>
<AGENTID>'.Session::get('user_name').'</AGENTID>
<TRANSACTIONID>'.$tranid.'</TRANSACTIONID>
<BENENAME>'.$input['benname'].'</BENENAME>
<MMID>'.(isset($input['benmmid'])?$input['benmmid']:'').'</MMID>
<BENEMOBILE>'.(isset($input['benmobile'])?$input['benmobile']:'').'</BENEMOBILE>
<BANKNAME>'.(isset($input['bankname'])?$input['bankname']:'').'</BANKNAME>
<BRANCHNAME>'.(isset($input['branchname'])?$input['branchname']:'').'</BRANCHNAME>
<CITY>'.(isset($input['city'])?$input['city']:'').'</CITY>
<STATE>'.(isset($input['state'])?$input['state']:'').'</STATE>
<IFSCCODE>'.(isset($input['ifsc'])?$input['ifsc']:'').'</IFSCCODE>
<ACCOUNTNO>'.(isset($input['accno'])?$input['accno']:'').'</ACCOUNTNO>
<PARAM1></PARAM1>
<PARAM2></PARAM2>
<PARAM3></PARAM3>
<PARAM4></PARAM4>
<PARAM5></PARAM5>
</ADDBENEFICIARYREQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:ADDBENEFICIARY"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
}
public static function benresendotp()
{ 	
$terminal=new Xmlicash();
$transid=getdate();
	$tranid=$transid[0];
 $registerotp='
<BENERESENDOTPREQUEST>
<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<CARDNO>'.Session::get('cardno').'</CARDNO>
<AGENTID>'.Session::get('user_name').'</AGENTID>
<PARAM1></PARAM1>
<PARAM2></PARAM2>
<PARAM3></PARAM3>
<PARAM4></PARAM4>
<PARAM5></PARAM5>
</BENERESENDOTPREQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:BENERESENDOTP"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
}
public static function benotpverify($input)
{ 	
$terminal=new Xmlicash();
$transid=getdate();
	$tranid=$transid[0];
 $registerotp='
<BENEREGISTERREQUEST>
<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<CARDNO>'.Session::get('cardno').'</CARDNO>
<AGENTID>'.Session::get('user_name').'</AGENTID>
<OTP>'.$input['otp'].'</OTP>
<BENEID>'.$input['benid'].'</BENEID><PARAM1></PARAM1>
<PARAM2></PARAM2>
<PARAM3></PARAM3>
<PARAM4></PARAM4>
<PARAM5></PARAM5>
</BENEREGISTERREQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:BENEREGISTER"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
}
public static function viewben()
{ 	
$terminal=new Xmlicash();
$transid=getdate();
	$tranid=$transid[0];
 $registerotp='
<VIEWBENEFICIARYREQUEST>
<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<CARDNO>'.Session::get('cardno').'</CARDNO>
<AGENTID>'.Session::get('user_name').'</AGENTID>
<PARAM1></PARAM1>
<PARAM2></PARAM2>
<PARAM3></PARAM3>
<PARAM4></PARAM4>
<PARAM5></PARAM5>
</VIEWBENEFICIARYREQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:VIEWBENEFICIARY"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
}

public static function removeben($id)
{ 	
$terminal=new Xmlicash();
$transid=getdate();
	$tranid=$transid[0];
 $registerotp='
<REMOVEBENEFICIARYREQUEST>
<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<CARDNO>'.Session::get('cardno').'</CARDNO>
<AGENTID>'.Session::get('user_name').'</AGENTID>
<BENEID>'.$id.'</BENEID>
<PARAM1></PARAM1>
<PARAM2></PARAM2>
<PARAM3></PARAM3>
<PARAM4></PARAM4>
<PARAM5></PARAM5>
</REMOVEBENEFICIARYREQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:REMOVEBENEFICIARY"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
}
public static function benremoveresendotp()
{ 	
$terminal=new Xmlicash();
$transid=getdate();
	$tranid=$transid[0];
 $registerotp='
<BENEREMPOVERESENDOTPREQUEST>
<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<CARDNO>'.Session::get('cardno').'</CARDNO>
<AGENTID>'.Session::get('user_name').'</AGENTID>

<PARAM1></PARAM1>
<PARAM2></PARAM2>
<PARAM3></PARAM3>
<PARAM4></PARAM4>
<PARAM5></PARAM5>
</BENEREMOVERESENDOTPREQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:BENEREMOVERESENDOTP"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
}
public static function removebenotpverify($input)
{ 	
$terminal=new Xmlicash();
$transid=getdate();
	$tranid=$transid[0];
 $registerotp='
<REMOVEBENEOTPREQUEST>
<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<CARDNO>'.Session::get('cardno').'</CARDNO>
<AGENTID>'.Session::get('user_name').'</AGENTID>
<OTP>'.$input['otp'].'</OTP>
<BENEID>'.$input['benid'].'</BENEID>
<BENESTATUS>11</BENESTATUS>
<PARAM1></PARAM1>
<PARAM2></PARAM2>
<PARAM3></PARAM3>
<PARAM4></PARAM4>
<PARAM5></PARAM5>
</REMOVEBENEOTPREQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:REMOVEBENEOTP"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
}

public static function mmidtransfer($input)
{
$terminal=new Xmlicash();
$transid=getdate();
	$tranid=$transid[0];
	Session::put('tranid',$tranid);
 $registerotp='
<TRANSACTION_V3REQUEST>
<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<CARDNO>'.Session::get('cardno').'</CARDNO>
<TRANSTYPE>0</TRANSTYPE>
<TRANSTYPEDESC>'.$input['mmid'].'</TRANSTYPEDESC>
<BENEMOBILE>'.$input['benemobile'].'</BENEMOBILE>
<IFSCCODE></IFSCCODE>
<OTP></OTP>
<TRANSAMOUNT>'.$input['transamount'].'</TRANSAMOUNT>
<SERVICECHARGE>0.00</SERVICECHARGE>
<REMARKS>'.$input['remark'].'</REMARKS>
<BENEID>'.$input['benid'].'</BENEID>
<MERCHANTTRANSID>'.$tranid.'</MERCHANTTRANSID>
<AGENTID>'.Session::get('user_name').'</AGENTID>
<PARAM1></PARAM1>
<PARAM2></PARAM2>
<PARAM3></PARAM3>
<PARAM4>'.Session::get('security_key').'</PARAM4>
<PARAM5></PARAM5>
</TRANSACTION_V3REQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:TRANSACTION_V3"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
}
public static function transfer($input)
{
$terminal=new Xmlicash();
$transid=getdate();
	$tranid=$transid[0];
	Session::put('tranid',$tranid);
 $registerotp='
<TRANSACTION_V3REQUEST>
<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<CARDNO>'.Session::get('cardno').'</CARDNO>
<TRANSTYPE>'.($input['type']==1?2:8).'</TRANSTYPE>
<TRANSTYPEDESC>'.$input['accno'].'</TRANSTYPEDESC>
<BENEMOBILE>'.$input['benemobile'].'</BENEMOBILE>
<IFSCCODE>'.$input['ifsc'].'</IFSCCODE>
<OTP></OTP>
<TRANSAMOUNT>'.$input['transamount'].'</TRANSAMOUNT>
<SERVICECHARGE>'.Session::get('servicecharge').'</SERVICECHARGE>
<REMARKS>'.$input['remark'].'</REMARKS>
<BENEID>'.$input['benid'].'</BENEID>
<MERCHANTTRANSID>'.$tranid.'</MERCHANTTRANSID>
<AGENTID>'.Session::get('user_name').'</AGENTID>
<PARAM1>'.(0.55/100*$input['transamount']).'</PARAM1>
<PARAM2></PARAM2>
<PARAM3></PARAM3>
<PARAM4>'.Session::get('security_key').'</PARAM4>
<PARAM5></PARAM5>
</TRANSACTION_V3REQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:TRANSACTION_V3"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
}
public static function tranenquiry()
{
$terminal=new Xmlicash();
$transid=getdate();
	$tranid=$transid[0];
	
 $registerotp='
<TRANSACTIONREQUERYREQUEST>
<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<TRANSACTIONID>'.Session::get('tranid').'</TRANSACTIONID>
<AGENTID>'.Session::get('user_name').'</AGENTID>
<PARAM1></PARAM1>
<PARAM2></PARAM2>
<PARAM3></PARAM3>
<PARAM4></PARAM4>
<PARAM5></PARAM5>
</TRANSACTIONREQUERYREQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:TRANSACTIONREQUERY"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
}
public static function transhistory($input)
{
$terminal=new Xmlicash();
$transid=getdate();
	$tranid=$transid[0];
	
 $registerotp='
<TRANSACTIONHISTORYREQUEST>
<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<CARDNO>'.Session::get('cardno').'</CARDNO>
<FROMDATE>'.$input['fromdate'].'</FROMDATE>
<TODATE>'.$input['todate'].'</TODATE>
<TRANSTYPE>'.$input['transtype'].'</TRANSTYPE>
<TRANSMODE>'.$input['transmode'].'</TRANSMODE>
</TRANSACTIONHISTORYREQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:TRANSACTIONHISTORY"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
}
public static function agenttranshistory($input)
{
$terminal=new Xmlicash();
$transid=getdate();
	$tranid=$transid[0];
	
 $registerotp='
<AGENTTRANSACTIONHISTORYREQUEST>
<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<FROMDATE>'.$input['fromdate'].'</FROMDATE>
<TODATE>'.$input['todate'].'</TODATE>
<AGENTID>'.Session::get('user_name').'</AGENTID>
<TRANSTYPE>'.$input['transtype'].'</TRANSTYPE>
<TRANSMODE>'.$input['transmode'].'</TRANSMODE>
<TRANSACTIONID>'.$tranid.'</TRANSACTIONID>
</AGENTTRANSACTIONHISTORYREQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:AGENTTRANSACTIONHISTORY"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
}

public static function cashlimit()
{
$terminal=new Xmlicash();
$transid=getdate();
	$tranid=$transid[0];
	
 $registerotp='
<CHECKCARDBALANCEREQUEST>
<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<CARDNO>'.Session::get('cardno').'</CARDNO>
<AGENTID>'.Session::get('user_name').'</AGENTID>
</CHECKCARDBALANCEREQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:CHECKCARDBALANCE"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
}
public static function updateben($input)
{
$terminal=new Xmlicash();
$transid=getdate();
	$tranid=$transid[0];
	
 $registerotp='
<EDITBENEFICIARYREQUEST>
<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<CARDNO>'.Session::get('cardno').'</CARDNO>
<AGENTID>'.Session::get('user_name').'</AGENTID>
<FLAG>'.$input['type'].'</FLAG>
<MMID>'.(isset($input['benmmid'])?$input['benmmid']:'').'</MMID>
<BENEMOBILE>'.(isset($input['benmobile'])?$input['benmobile']:'').'</BENEMOBILE>
<BANKNAME>'.(isset($input['bankname'])?$input['bankname']:'').'</BANKNAME>
<BRANCHNAME>'.(isset($input['branchname'])?$input['branchname']:'').'</BRANCHNAME>
<CITY>'.(isset($input['city'])?$input['city']:'').'</CITY>
<STATE>'.(isset($input['state'])?$input['state']:'').'</STATE>
<IFSCCODE>'.(isset($input['ifsc'])?$input['ifsc']:'').'</IFSCCODE>
<ACCOUNTNO>'.(isset($input['accno'])?$input['accno']:'').'</ACCOUNTNO>
<BENEID>'.$input['beneid'].'</BENEID>
<PARAM1></PARAM1>
<PARAM2></PARAM2>
<PARAM3></PARAM3>
<PARAM4></PARAM4>
<PARAM5></PARAM5>
</EDITBENEFICIARYREQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:EDITBENEFICIARY"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
}

public static function topupcheck()
{
$terminal=new Xmlicash();
$transid=getdate();
	$tranid=$transid[0];
	
 $registerotp='
<CHECKTOPUPLIMITREQUEST>
<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<CARDNO>'.Session::get('cardno').'</CARDNO>
<AGENTID>'.Session::get('user_name').'</AGENTID>
</CHECKTOPUPLIMITREQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:CHECKTOPUPLIMIT"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
}


public static function topup($input)
{
$terminal=new Xmlicash();
$transid=getdate();
	$tranid=$transid[0];
	
 $registerotp='
<TOPUP_V2REQUEST>
<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<CARDNO>'.Session::get('cardno').'</CARDNO>
<AGENTID>'.Session::get('user_name').'</AGENTID>
<TOPUPAMOUNT>'.$input['transamount'].'</TOPUPAMOUNT>
<TOPUPTRANSID>'.$tranid.'</TOPUPTRANSID>
<MOBILE>'.Session::get('MOBILE').'</MOBILE>
<REGIONID>5</REGIONID>
<SERVICECHARGE>'.(0.30 / 100 * $input['transamount']).'</SERVICECHARGE>
<PARAM1></PARAM1>
<PARAM2>'.Session::get('security_key').'</PARAM2>
<PARAM3></PARAM3>
<PARAM4></PARAM4>
<PARAM5></PARAM5>
</TOPUP_V2REQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:TOPUP_V2"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
}

public static function neftcancelotp($tranid,$date)
{
$terminal=new Xmlicash();

	
 $registerotp='
<NEFTCANCELREQUEST>
<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<CARDNO>'.Session::get('cardno').'</CARDNO>
<AGENTID>'.Session::get('user_name').'</AGENTID>
<MERCHANTTRANSID>'.$tranid.'</MERCHANTTRANSID>
<TRANSDATE>'.date('m/d/Y',$date).'</TRANSDATE>
<OTPSTATUS>0</OTPSTATUS>
<PARAM1></PARAM1>
<PARAM2></PARAM2>
<PARAM3></PARAM3>
<PARAM4></PARAM4>
<PARAM5></PARAM5>
</NEFTCANCELREQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:NEFTCANCELOTP"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
}

public static function neftcancel($input)
{
$terminal=new Xmlicash();
$transid=getdate();
	$tranid=$transid[0];
	
	
 $registerotp='
<NEFTCANCELTRANSACTIONREQUEST>
<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
<CARDNO>'.Session::get('cardno').'</CARDNO>
<AGENTID>'.Session::get('user_name').'</AGENTID>
<MERCHANTTRANSID>'.$input['tranid'].'</MERCHANTTRANSID>
<TRANSDATE>'.date('m/d/Y',$input['date']).'</TRANSDATE>
<REFUNDTRANSID>'.$tranid.'</REFUNDTRANSID>
<OTP>'.$input['otp'].'</OTP>
<PARAM1></PARAM1>
<PARAM2></PARAM2>
<PARAM3></PARAM3>
<PARAM4></PARAM4>
<PARAM5></PARAM5>
</NEFTCANCELTRANSACTIONREQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:NEFTCANCELTRANSACTION"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();
}
public static function servicecharge($data)
{
$terminal=new Xmlicash();
$transid=getdate();
	$tranid=$transid[0];
	
	
 $registerotp='
<SERVICECHARGEREQUEST>
					<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
					<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
					<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
					<CARDNO>'.Session::get('cardno').'</CARDNO>
					<AGENTID>'.Session::get('user_name').'</AGENTID>
					<BENEID>'.$data['benid'].'</BENEID>
					<TRANSAMOUNT>'.$data['transamount'].'</TRANSAMOUNT>
					<TRANSTYPE>'.($data['type']==1?2:8).'</TRANSTYPE>
					<TRANSTYPEDESC>'.$data['accno'].'</TRANSTYPEDESC>
					<REGIONID>1</REGIONID>
					<PARAM1></PARAM1>
					<PARAM2></PARAM2>
					<PARAM3></PARAM3>
					<PARAM4></PARAM4>
					<PARAM5></PARAM5>
					</SERVICECHARGEREQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:SERVICECHARGE"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();	
}
public static function channelpartnerlimit()
{
$terminal=new Xmlicash();
$transid=getdate();
	$tranid=$transid[0];
	
	
 $registerotp='
<CHANNELPARTNERLIMITREQUEST>
					<TERMINALID>'.$terminal->terminalid.'</TERMINALID>
					<LOGINKEY>'.$terminal->loginkey.'</LOGINKEY>
					<MERCHANTID>'.$terminal->merchantid.'</MERCHANTID>
					</CHANNELPARTNERLIMITREQUEST>';
$xmlDoc = new DOMDocument();
	 $root = $xmlDoc->appendChild(
        $xmlDoc->createElement("soap:Envelope"));

	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:soap"))->appendChild(
        $xmlDoc->createTextNode("http://schemas.xmlsoap.org/soap/envelope/"));
	$root->appendChild(
        $xmlDoc->createAttribute("xmlns:tem"))->appendChild(
        $xmlDoc->createTextNode("http://tempuri.org/"));
		$header=$root->appendChild(
        $xmlDoc->createElement("soap:Header"," "));
		
		$body=$root->appendChild(
        $xmlDoc->createElement("soap:Body"));
		$requestdata=$body->appendChild(
        $xmlDoc->createElement("tem:CHANNELPARTNERLIMIT"));
		$requestdata->appendChild(
        $xmlDoc->createElement("tem:RequestData",$registerotp));
	
    $xmlDoc->formatOutput = true;
return $xmlDoc->saveXML();	
}

}