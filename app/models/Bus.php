<?php

class Bus {

 

     
public static function sourcecities($data)
    {
         $url = "http://api.tektravels.com/BusBookingAPI/Service.asmx";
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
public static function destinationcities($data)
    {
         $url = "http://api.tektravels.com/BusBookingAPI/Service.asmx";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
		
                       
               
		curl_close($ch);
        return $responsepurge;

    }

}