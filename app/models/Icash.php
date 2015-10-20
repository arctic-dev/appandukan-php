<?php

class Icash {

 

     
public static function registerkyc($data)
    {
         $url = "http://202.54.157.77/wsNPCI/IMPSMethods.asmx";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
		curl_close($ch);
        return $responsepurge;

    }

public static function registerkycjson($data)
    {
         $url = "http://localhost/restapi/icash/create";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        curl_close($ch);
        return json_decode($responsepurge);

    }
    public static function updateuser($data)
    {
         $url = "http://localhost/restapi/icash/updateuser";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        curl_close($ch);
        return json_decode($responsepurge);

    }
    public static function loginupdate($data)
    {
         $url = "http://localhost/restapi/icash/loginupdate";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        curl_close($ch);
        return json_decode($responsepurge);

    }
    public static function addbene($data)
    {
         $url = "http://localhost/restapi/icash/addbene";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        curl_close($ch);
        return json_decode($responsepurge);

    }
    public static function removebene($data)
    {
         $url = "http://localhost/restapi/icash/removebene";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        curl_close($ch);
        return json_decode($responsepurge);

    }
    public static function updateben($data)
    {
         $url = "http://localhost/restapi/icash/updateben";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        curl_close($ch);
        return json_decode($responsepurge);

    }
    public static function topup($data)
    {
         $url = "http://localhost/restapi/icash/topup";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        curl_close($ch);
        return json_decode($responsepurge);

    }
    public static function topupnew($data)
    {
         $url = "http://localhost/restapi/icash/topupnew";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        curl_close($ch);
        return json_decode($responsepurge);

    }
    public static function transfer($data)
    {
         $url = "http://localhost/restapi/icash/transaction";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        curl_close($ch);
        return json_decode($responsepurge);

    }
    public static function transtatus($data)
    {
         $url = "http://localhost/restapi/icash/transtatus";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        curl_close($ch);
        return json_decode($responsepurge);

    }
    public static function neftcancel($data)
    {
         $url = "http://localhost/restapi/icash/transtatus";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        curl_close($ch);
        return json_decode($responsepurge);

    }
    public static function kycupload($data)
    {
         $url = "http://localhost/restapi/icash/updatekyc";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        curl_close($ch);
        return json_decode($responsepurge);

    }
    
    public static function transferhistory()
    {
         $url = "http://localhost/restapi/icash/agenthistory/".Session::get('user_name');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        curl_close($ch);
        return json_decode($responsepurge);

    }
    public static function topupcard()
    {
         $url = "http://localhost/restapi/icash/topupcard/".Session::get('user_name');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        curl_close($ch);
        return json_decode($responsepurge);

    }
    public static function topupval($value)
    {
         $url = "http://localhost/restapi/icash/topupval/".Session::get('user_name')."/".$value;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        curl_close($ch);
        return json_decode($responsepurge);

    }
	public static function transferamount($value)
    {
         $url = "http://localhost/restapi/icash/transfer/".Session::get('user_name')."/".$value;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        curl_close($ch);
        return json_decode($responsepurge);

    }
    public static function cardhistory()
    {
         $url = "http://localhost/restapi/icash";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        curl_close($ch);
        return json_decode($responsepurge);

    }
    public static function topuphistory()
    {
         $url = "http://localhost/restapi/icash/topuphistory";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        curl_close($ch);
        return json_decode($responsepurge);

    }
    public static function transferhistoryall()
    {
         $url = "http://localhost/restapi/icash/transferhistory";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        curl_close($ch);
        return json_decode($responsepurge);

    }
    public static function updatebalance($balance)
    {
         $url = "http://localhost/restapi/icash/balance/".$balance;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        curl_close($ch);
        return json_decode($responsepurge);

    }
    


}