<?php

class Sample {

 

     
public static function all()
    {
         $url = "http://192.168.1.117:8080/manage/user/subusers/".Session::get('user_id');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        return $responsepurge;

    }
public static function users($id)
    {
         $url = "http://192.168.1.117:8080/manage/user/subusers/".$id;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        return $responsepurge;

    }
    public static function login($data)
    {
         $url = "http://localhost/restapi/user/login";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        return $responsepurge;
    }
    public static function create($data)
    {
         $url = "http://192.168.1.117:8080/manage/user/create";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        return $responsepurge;
    }
    public static function mobile($data)
    {
         $url = 'http://192.168.1.117:8080/manage/user/check/mobile/'.$data;
         //echo $url;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        return $responsepurge;
    }
    public static function mail($data)
    {
         $url = 'http://192.168.1.117:8080/manage/user/check/email/';
         //echo $url;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        return $responsepurge;
    }
    public static function name($data)
    {
         $url = 'http://192.168.1.117:8080/manage/user/check/id/'.$data;
         //echo $url;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        
        $responsepurge = curl_exec($ch);
        return $responsepurge;
    }
    public static function category($data)
    {
         $url = 'http://192.168.1.117:8080/manage/products/available/'.$data;
         //echo $url;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        //$responsepurge='{"products":[{"prodCode":"1001","prodStatus":1},{"prodCode":"1002","prodStatus":1},{"prodCode":"1101","prodStatus":1}]}';
        return json_decode($responsepurge);
    }
    public static function creditdebit($data)
    {
         $url = 'http://192.168.1.117:8080/manage/user/balance/add';
         //echo $url;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        return $responsepurge;
    }
    public static function user($data)
    {
         $url = 'http://192.168.1.117:8080/manage/user/'.$data;
         //echo $url;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        return json_decode($responsepurge);
    
    }
    public static function update($data)
    {
         $url = 'http://192.168.1.117:8080/manage/user/update';
         //echo $url;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
        return json_decode($responsepurge);
    }
}