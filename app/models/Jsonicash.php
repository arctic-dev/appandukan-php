<?php

class Jsonicash {

 
     
public static function registernonkyc($data)
    {
	//header("Content-Type: text/xml");
    	
	$registerdata=array(
	//"tranid"=>$tranid,
"kyc"=>$data['kyc'],
"username"=>$data['firstname'],
"usermiddlename"=>$data['middlename'],
"userlastname"=>$data['lastname'],
"usermothermaidename"=>$data['maidenname'],
"userdateofbirth"=>$data['dob'],
"useremail"=>$data['mail'],
"icc_usermobile"=>$data['mobilenumber'],
"userstate"=>$data['state'],
"usercity"=>$data['city'],
"useraddress"=>$data['address'],
"userpincode"=>$data['pincode'],
"useridprooftype"=>' ',
"useridproof"=>' ',
"useridproofurl"=>' ',
"useraddrprooftype"=>' ',
"useraddrproof"=>' ',
"useraddrproofurl"=>' ',
"usercreatedby"=>Session::get('user_name'),
"clientip"=>Session::get('clientip'),
	
		);

    return json_encode($registerdata);

    }

    public static function updateuser($data,$input)
    {
    $updatauser=array(
    	'usermobile' =>$data['MOBILE'],
    	'balance'=>$data['BALANCE'],
    	'cardno'=>$data['CARDNO'],
    	'security_key'=>$data['SECURITYKEY'],
    	'request_by'=>Session::get('user_name'),
    	'tranid'=>$input['transid'], 
    	'kycstatus'=>$data['KYCSTATUS'], 
    	);
    return json_encode($updatauser);
    }
    public static function registerkyc($data,$idpath,$addrpath)
    {
	
	//header("Content-Type: text/xml");
		$registerdata=array(
	//"tranid"=>$tranid,
"kyc"=>$data['kyc'],
"username"=>$data['firstname'],
"usermiddlename"=>$data['middlename'],
"userlastname"=>$data['lastname'],
"usermothermaidename"=>$data['maidenname'],
"userdateofbirth"=>$data['dob'],
"useremail"=>$data['mail'],
"icc_usermobile"=>$data['mobilenumber'],
"userstate"=>$data['state'],
"usercity"=>$data['city'],
"useraddress"=>$data['address'],
"userpincode"=>$data['pincode'],
"useridprooftype"=>$data['useridprooftype1'],
"useridproof"=>$data['Idproofno'],
"useridproofurl"=>$idpath,
"useraddrprooftype"=>$data['addressproof'],
"useraddrproof"=>$data['addproofno'],
"useraddrproofurl"=>$addrpath,
"usercreatedby"=>Session::get('user_name'),
"clientip"=>Session::get('clientip'),
	
		);

    return json_encode($registerdata);



	
	
     

    }
	public static function kycupload($data,$idpath,$addrpath)
    {
	

	$registerdata=array(	
		"cardno"=>Session::get('cardno'),
	"kyc"=>$data['kyc'],
"username"=>$data['firstname'],
"usermiddlename"=>$data['middlename'],
"userlastname"=>$data['lastname'],
"usermothermaidename"=>$data['maidenname'],
"userdateofbirth"=>$data['dob'],
"useremail"=>$data['mail'],
"icc_usermobile"=>$data['mobilenumber'],
"userstate"=>$data['state'],
"usercity"=>$data['city'],
"useraddress"=>$data['address'],
"userpincode"=>$data['pincode'],
"useridprooftype"=>$data['useridprooftype1'],
"useridproof"=>$data['Idproofno'],
"useridproofurl"=>$idpath,
"useraddrprooftype"=>$data['addressproof'],
"useraddrproof"=>$data['addproofno'],
"useraddrproofurl"=>$addrpath,
"usercreatedby"=>Session::get('user_name'),
"clientip"=>Session::get('clientip'));
	
	
     
return json_encode($registerdata);
//print_r($xmlDoc->saveXML()); exit;


    }
public static function loginvalidate($data)
{ 	
 $registerotp=array(
 	'mobilenumber' =>Session::get('MOBILE') ,
	'kycstatus'=>Session::get('KYCSTATUS'),
	'mmid'=>Session::get('MMID'),
	'balance'=>$data['CHECKCARDBALANCERESPONSE']['BALANCE'],
	'request'=>Session::get('user_name'),
	'transactionlimit'=>Session::get('TRANSACTIONLIMIT'),
	'consumedlimit'=>$data['CHECKCARDBALANCERESPONSE']['CONSUMEDLIMIT'],
	'remaininglimit'=>$data['CHECKCARDBALANCERESPONSE']['REMAININGLIMIT'],
	'security_key'=>Session::get('security_key')
	 );
 return json_encode($registerotp);
}
public static function addbene($input,$beneid)
{ 	
 $registerotp=array(
"cardno"=>Session::get('cardno'),
"created_by"=>Session::get('user_name'),
"beneid"=>$beneid,
"tranid"=>Session::get('bentranid'),
"bename"=>$input['benname'],
"benmmid"=>(isset($input['benmmid'])?$input['benmmid']:''),
"benmobile"=>(isset($input['benmobile'])?$input['benmobile']:''),
"benbankname"=>(isset($input['bankname'])?$input['bankname']:''),
"benbranchname"=>(isset($input['branchname'])?$input['branchname']:''),
"bencity"=>(isset($input['city'])?$input['city']:''),
"benstate"=>(isset($input['state'])?$input['state']:''),
"benifsc"=>(isset($input['ifsc'])?$input['ifsc']:''),
"benaccno"=>(isset($input['accno'])?$input['accno']:'')
);
return json_encode($registerotp);
}

public static function mmidtransfer($input)
{
	
 $registerotp=array(
"cardno"=>Session::get('cardno'),
"trantype"=>0,
"trandesc"=>$input['mmid'],
"tranmobile"=>$input['benemobile'],
"ifsccode"=>"",
"tranamount"=>$input['transamount'],
"servicecharge"=>((Session::get('cardno')==Session::get('trancard'))?0.00:(0.55/100*$input['transamount'])),
"remark"=>$input['remark'],
"beneid"=>$input['benid'],
"tranid"=>Session::get('tranid'),
"createdby"=>Session::get('user_name'),
"security_key"=>Session::get('security_key')
);
 return json_encode($registerotp);

}
public static function transtatus($id)
{
	if($id==1 || $id==3)
	{
		$var="failure";
	}
	elseif ($id==0) {
		$var="success";
	}
 $registerotp=array(
"cardno"=>Session::get('cardno'),
"tranid"=>Session::get('tranid'),
"transtatus"=>$var);
return json_encode($registerotp);
}
public static function transfer($input)
{
$terminal=new Xmlicash();
 $registerotp=array(
 	"cardno"=>Session::get('cardno'),
"trantype"=>($input['type']==1?2:8),
"trandesc"=>$input['accno'],
"tranmobile"=>$input['benemobile'],
"ifsccode"=>$input['ifsc'],
"tranamount"=>$input['transamount'],
"servicecharge"=>$_SESSION['SERVICECHARGE'],
"remark"=>$input['remark'],
"beneid"=>$input['benid'],
"tranid"=>Session::get('tranid'),
"createdby"=>Session::get('user_name'),
"security_key"=>Session::get('security_key')
);
return json_encode($registerotp);
}
public static function updateben($input)
{
 $registerotp=array(
"cardno"=>Session::get('cardno'),
"edited_by"=>Session::get('user_name'),
"flag"=>$input['type'],
"benmmid"=>(isset($input['benmmid'])?$input['benmmid']:''),
"benmobile"=>(isset($input['benmobile'])?$input['benmobile']:''),
"benbankname"=>(isset($input['bankname'])?$input['bankname']:''),
"benbranchname"=>(isset($input['branchname'])?$input['branchname']:''),
"bencity"=>(isset($input['city'])?$input['city']:''),
"benstate"=>(isset($input['state'])?$input['state']:''),
"benifsc"=>(isset($input['ifsc'])?$input['ifsc']:''),
"benaccno"=>(isset($input['accno'])?$input['accno']:''),
"benid"=>$input['beneid'],
);

return json_encode($registerotp);
}
public static function removeben($data)
{
	$registerotp=array(
		"beneid"=>$data['benid'],
		"cardno"=>Session::get('cardno')
		);
	return json_encode($registerotp);
}

public static function topupavail($input)
{
	
 $registerotp=array(
"cardno"=>Session::get('cardno'),
"request"=>Session::get('user_name'),
"topuplimit"=>$input['TOPUPLIMIT'],
"facelimit"=>$input['FACEVALUE'],
"currentlimit"=>$input['CURRENTVALUE']
);
return json_encode($registerotp);
}


public static function topup($input,$id)
{
 $registerotp=array(
"cardno"=>Session::get('cardno'),
"created_by"=>Session::get('user_name'),
"topup"=>$input['amount'],
"mobileno"=>Session::get('MOBILE'),
"service"=>$input['service'],
"security_key"=>Session::get('security_key'),
"tranid"=>$id
);
return json_encode($registerotp);
}



}