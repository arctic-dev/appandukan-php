<?php

class Jsonhotel {

 

     
public static function country()
    {
	//header("Content-Type: text/xml");
	$data=array(
	"ClientId"=> "ApiIntegration",
    "EndUserIp"=> Session::get('clientip'),
    "TokenId"=>Session::get('token_id'),
	);

	return json_encode($data);
    }
	public static function city($id)
    {
	//header("Content-Type: text/xml");

    $data=array(
	"CountryCode"=>$id,
	"ClientId"=> "ApiIntegration",
    "EndUserIp"=> Session::get('clientip'),
    "TokenId"=>Session::get('token_id'),
	
	);

	return json_encode($data);
    }
	public static function search($data)
	{
	//print_r($data);
	
	function addage($childagecount,$data)
	{
	static $i=0;
	if($childagecount>0)
	{
	$arr=array();
	for($j=0;$j<$childagecount;$j++)
	{
	
	$arr1[]=$data['childage'][$i];
	$i++;
	}
	return $arr1;
	}
	
	}
	// exit;
	for($i=0;$i<$data['NoOfRooms'];$i++)
	{
	$arr[]=array(
	"ChildAge"=>$data['nochild'][$i]>0?addage($data['nochild'][$i],$data):null,
	"NoOfAdults"=>$data['noadult'][$i],
	"NoOfChild"=>$data['nochild'][$i],
	
	);
	}
	$RoomGuests=array('RoomGuests'=>$arr);
	//print_r($arr); 
	$date=date('d/m/Y',strtotime($data['CheckInDate']));
	$input=array(
	"BookingMode"=>"5",
	"CheckInDate"=>$date,
	"NoOfNights"=>$data['NoOfNights'],
	"CountryCode"=>$data['CountryCode'],
	"CityId"=>$data['CityId'],
	"ResultCount"=>"20",
	"PreferredCurrency"=>"INR",
	"GuestNationality"=>$data['GuestNationality'],
	"NoOfRooms"=>$data['NoOfRooms'],
	"MaxRating"=>$data['MaxRating'],
	"MinRating"=>$data['MinRating'],
	"EndUserIp"=>Session::get('clientip'),
	"TokenId"=>Session::get('token_id'),
	);
	$finalinput=array_merge($input,$RoomGuests);
	$sampleinput='{
    "BookingMode": 5,
    "CheckInDate": "18/10/2015",
    "NoOfNights": 2,
    "CountryCode": "IN",
    "CityId": 10409,
    "ResultCount": 0,
    "PreferredCurrency": "INR",
    "GuestNationality": "IN",
    "NoOfRooms": 2,
    "PreferredHotel": "",
    "MaxRating": 5,
    "MinRating": 1,
    "ReviewScore": 0,
    "IsNearBySearchAllowed": false,
    "EndUserIp": "122.166.124.118",
    "TokenId": "b46c2316-26c3-4449-bb03-4eaebc3ed9ea",
    "RoomGuests": [
        {
            "NoOfAdults": 1,
            "NoOfChild": 1,
            "ChildAge": [
                "7"
            ]
        },
        {
            "NoOfAdults": 1,
            "NoOfChild": 0,
            "ChildAge": []
        }
    ]
}';
	return json_encode($finalinput);
	//return $sampleinput;
	
	}
	public static function hotelinfo($hotelcode,$resultindex,$index)
	{
	$input=array(
	"ResultIndex"=>$resultindex,
	"HotelCode"=>$hotelcode,
	"EndUserIp"=>Session::get('clientip'),
	"TokenId"=>Session::get('token_id'),
	"TraceId"=>$index,
	);
	return json_encode($input);
	}
	
	public static function blockroom($input)
	{
	for($i=0;$i<count($input['RoomIndex']);$i++)
	{
	$roomdetails[]=array(
	"RoomIndex"=>$input['RoomIndex'][$i],
	"RoomTypeCode"=>$input['RoomTypeCode'][$i],
	"RoomTypeName"=>$input['RoomTypeName'][$i],
	"RatePlanCode"=>$input['RatePlanCode'][$i],
	"BedTypeCode"=> null,
    "SmokingPreference"=> 0,
    "Supplements"=> null,
	"Price"=>array(
	"CurrencyCode"=>"INR",
	"RoomPrice"=>$input['RoomPrice'][$i],
	"Tax"=>$input['Tax'][$i],
	"ExtraGuestCharge"=>$input['ExtraGuestCharge'][$i],
	"ChildCharge"=>$input['ChildCharge'][$i],
	"OtherCharges"=>$input['OtherCharges'][$i],
	
	"Discount"=>$input['Discount'][$i],
	"PublishedPrice"=>$input['PublishedPrice'][$i],
	"PublishedPriceRoundedOff"=>$input['PublishedPriceRoundedOff'][$i],
	"OfferedPrice"=>$input['OfferedPrice'][$i],
	"OfferedPriceRoundedOff"=>$input['OfferedPriceRoundedOff'][$i],
	"AgentCommission"=>$input['AgentCommission'][$i],
	"AgentMarkUp"=>$input['AgentMarkUp'][$i],
	"ServiceTax"=>$input['ServiceTax'][$i],
	"TDS"=>$input['TDS'][$i],
	)
	);
	}
	$blockroom=array(
	"ResultIndex"=>$input['ResultIndex'],
	"HotelCode"=>$input['HotelCode'],
	"HotelName"=>$input['HotelName'],
	"GuestNationality"=>$input['guestnationality'],
	"NoOfRooms"=>$input['noofrooms'],
	"IsVoucherBooking"=>true,
	"ClientReferenceNo"=>0,
	
	"HotelRoomsDetails"=>$roomdetails,
	"EndUserIp"=>Session::get('clientip'),
	"TokenId"=>Session::get('token_id'),
	"TraceId"=>$input['traceid'],
	);
	return json_encode($blockroom); 
	//exit;
	}
	
	public static function Bookroom($data)
	{
	$ad=explode('-',$data['noadult']);
	$ch=explode('-',$data['nochild']);
	$age=explode('-',$data['age']);
	
	function passenger($adult,$child,$addd,$age)
	{
	static $count=0;
	$final=$adult+$child;
	for($j=0;$j<$final;$j++)
	{
	$HotelPassenger[]=array(
					"Title"=> $addd['Title'][$count],
                    "FirstName"=> $addd['FirstName'][$count],
                    "MiddleName"=> $addd['MiddleName'][$count],
                    "LastName"=> $addd['LastName'][$count],
                   "Phoneno"=> isset($addd['Phoneno'][$count])?$addd['Phoneno'][$count]:null,
                    "Email"=> isset($addd['Email'][$count])?$addd['Email'][$count]:null,
                    "PaxType"=> $addd['PaxType'][$count],
                    "LeadPassenger"=> $addd['LeadPassenger'][$count],
					"Age"=> $addd['PaxType'][$count]==2?age($age):0,
                    "PassportNo"=> isset($addd['PassportNo'][$count])?$addd['PassportNo'][$count]:null,
                    "PassportIssueDate"=> isset($addd['PassportIssueDate'][$count])?$addd['PassportIssueDate'][$count]:null,
                    "PassportExpDate"=> isset($addd['PassportExpDate'][$count])?$addd['PassportExpDate'][$count]:null
	);
	$count++;
	
	}
	return $HotelPassenger;
	}
	function age($age)
	{
	static $countage=-1;
	$countage++;
	return $age[$countage];
	}
	
	for($i=0;$i<count($data['RoomIndex']);$i++)
	{
	$roomdetails[]=array(
	"RoomIndex"=>$data['RoomIndex'][$i],
	"RoomTypeCode"=>$data['RoomTypeCode'][$i],
	"RoomTypeName"=>$data['RoomTypeName'][$i],
	"RatePlanCode"=>$data['RatePlanCode'][$i],
	"BedTypeCode"=> null,
    "SmokingPreference"=> 0,
    "Supplements"=> null,
	"Price"=>array(
	"CurrencyCode"=>"INR",
	"RoomPrice"=>$data['RoomPrice'][$i],
	"Tax"=>$data['Tax'][$i],
	"ExtraGuestCharge"=>$data['ExtraGuestCharge'][$i],
	"ChildCharge"=>$data['ChildCharge'][$i],
	"OtherCharges"=>$data['OtherCharges'][$i],
	
	"Discount"=>$data['Discount'][$i],
	"PublishedPrice"=>$data['PublishedPrice'][$i],
	"PublishedPriceRoundedOff"=>$data['PublishedPriceRoundedOff'][$i],
	"OfferedPrice"=>$data['OfferedPrice'][$i],
	"OfferedPriceRoundedOff"=>$data['OfferedPriceRoundedOff'][$i],
	"AgentCommission"=>$data['AgentCommission'][$i],
	"AgentMarkUp"=>$data['AgentMarkUp'][$i],
	"ServiceTax"=>$data['ServiceTax'][$i],
	"TDS"=>$data['TDS'][$i],
	),
	"HotelPassenger"=>passenger($ad[$i],$ch[$i],$data,$age)
	
	);
	}
	$bookroom=array(
	"ResultIndex"=>$data['ResultIndex'],
	"HotelCode"=>$data['HotelCode'],
	"HotelName"=>$data['HotelName'],
	"GuestNationality"=>$data['guestnationality'],
	"NoOfRooms"=>$data['noofrooms'],
	"IsVoucherBooking"=>true,
	"ClientReferenceNo"=>0,
	
	"HotelRoomsDetails"=>$roomdetails,
	"EndUserIp"=>Session::get('clientip'),
	"TokenId"=>Session::get('token_id'),
	"TraceId"=>$data['traceid'],
	);
	
	return json_encode($bookroom);
	}
}