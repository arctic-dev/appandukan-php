<?php

class Services {

 

     
public static function pancreate($data)
    {
         $url = "http://192.168.1.117:8080/manage/pan49a/create/";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        return $responsepurge;

    }
public static function getpan()
    {
         $url = "http://192.168.1.117:8080/manage/pan49a/getForm/".Session::get('user_name');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        return $responsepurge;

    }
    public static function pancoupons($data)
    {
         $url = "http://localhost/restapi/pancardoffline/importcoupon";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        //print_r($responsepurge); exit;
        return json_decode($responsepurge);

    }
	public static function provider($data)
    {
         $url = "http://192.168.1.117:8080/manage/recharge/provider/".$data;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        return json_decode($responsepurge);

    }
	public static function credit($data)
    {
         $url = "http://192.168.1.117:8080/manage/user/finance/subuser/".$data;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        return json_decode($responsepurge);

    }
	public static function newrecharge($data)
    {
         $url = "http://192.168.1.117:8080/manage/recharge/new/";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        return json_decode($responsepurge);

    }
	public static function rechargedetails($data)
    {
         $url = "http://192.168.1.117:8080/manage/recharge/completed/";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
		//return $responsepurge;
       /* $responsepurge='{
    "message": "Recharge details returned successfully",
    "completedRecharges": [
        {
            "provider": "Airtel",
            "prodCode": "1001",
            "number": "7894561325",
            "amount": "100.0",
            "createdAt": "1440170258000",
            "createdBy": "sam2",
            "transactionId": "1000218927872",
            "status": "success",
            "refundStatus": null
        },
        {
            "provider": "Airtel",
            "prodCode": "1001",
            "number": "7894561325",
            "amount": "100.0",
            "createdAt": "1440170258000",
            "createdBy": "sam2",
            "transactionId": "1000218927873",
            "status": "success",
            "refundStatus": null
        },
        {
            "provider": "Airtel",
            "prodCode": "1001",
            "number": "7894561325",
            "amount": "100.0",
            "createdAt": "1440170258000",
            "createdBy": "sam2",
            "transactionId": "1000218927874",
            "status": "success",
            "refundStatus": null
        },
        {
            "provider": "Airtel",
            "prodCode": "1001",
            "number": "7894561325",
            "amount": "100.0",
            "createdAt": "1440170258000",
            "createdBy": "sam2",
            "transactionId": "1000218927875",
            "status": "success",
            "refundStatus": null
        }
    ],
    "status": "success"
}'; */
		return json_decode($responsepurge);

    }
    public static function rechargehistory($data)
    {
         $url = "http://localhost/restapi/recharge/history";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        //echo $responsepurge; exit;
      
        return json_decode($responsepurge);

    }
    public static function serviceprepaid($data)
    {
         $url = "http://localhost/restapi/service/service";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        //return $responsepurge;
      
        return json_decode($responsepurge);

    }
    public static function addproductitr($data)
    {
         $url = "http://192.168.1.117:8080/manage/itrx/create/";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        //return $responsepurge;
      
        return json_decode($responsepurge);

    }
    public static function newitr($data)
    {
         $url = "http://192.168.1.117:8080/manage/itrx/formregtn";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        //return $responsepurge;
      
        return json_decode($responsepurge);

    }
    public static function itrhistory($data)
    {
         $url = "http://192.168.1.117:8080/manage/itrx/list";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        //return $responsepurge;
      
        return json_decode($responsepurge);

    }
    public static function itrhistoryuser($data)
    {
         $url = "http://192.168.1.117:8080/manage/itrx/createdby";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        //return $responsepurge;
      
        return json_decode($responsepurge);

    }
    public static function itrusers($data)
    {
         $url = "http://192.168.1.117:8080/manage/user/prodaccess";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        //return $responsepurge;
      
        return json_decode($responsepurge);

    }
        public static function panhistory($data)
    {
         $url = "http://localhost/restapi/pancardoffline/history";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        //return $responsepurge;
      
        return json_decode($responsepurge);

    }
       public static function commission($data)
    {
         $url = "http://localhost/restapi/service/commission";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        //return $responsepurge;
      
        return $responsepurge;

    }

}