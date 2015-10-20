<?php

class Hotel {

 public static function login($data)
    {
         $url = "http://api.tektravels.com/SharedServices/SharedData.svc/rest/Authenticate";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		//curl_setopt($ch, CURLOPT_HEADER, array('Accept-Encoding:gzip, deflate'));		
                            
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
		curl_close($ch);
        return json_decode($responsepurge);

    }

     
public static function country($data)
    {
         $url = "http://api.tektravels.com/SharedServices/SharedData.svc/rest/CountryList";
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
public static function destinationcities($data)
    {
         $url = "http://api.tektravels.com/SharedServices/SharedData.svc/rest/DestinationCityList";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
		curl_close($ch);
        return json_decode($responsepurge);

    }
	public static function search($data)
    {
         $url = "http://api.tektravels.com/BookingEngineService_Hotel/hotelservice.svc/rest/GetHotelResult/";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$responsepurge = curl_exec($ch);
		/*$responsepurge='{
"HotelSearchResult": {
"ResponseStatus": 1,
"Error": {
"ErrorCode": 0,
"ErrorMessage": ""
},
"TraceId": "625e8d04-afdc-496c-bb43-39ba59554f89",
"CityId": "14621",
"CheckInDate": "2014-12-28T00:00:00",
"CheckOutDate": "2014-12-30T00:00:00",
"PreferredCurrency": "INR",
"NoOfRooms": 4,
"RoomGuests": [
{
"NoOfAdults": 2,
"NoOfChild": 1,
"ChildAge": [0]
},
{
"NoOfAdults": 1,
"NoOfChild": 1,
"ChildAge": [12]
Universal Hotel API
Version: 10.0
Page 58 of 133
},
{
"NoOfAdults": 1,
"NoOfChild": 2,
"ChildAge": [
4,
0
]
},
{
"NoOfAdults": 1,
"NoOfChild": 0,
"ChildAge": null
}
],
"HotelResults": [
{
"ResultIndex": 1,
"HotelCode": "128407",
"HotelName": "Nieuw Slotania Hotel",
"HotelCategory": "",
"StarRating": 3,
"HotelDescription": "This charming urban hotel is located near the A10 highway giving it quick and easy access to many parts of the area. The centre of Amsterdam is only 15
Universal Hotel API
Version: 10.0
Page 59 of 133
minutes away by bus or car. Across the street from the establishment guests will find one of Amsterdam's newest shopping centres which offers plenty of opportunities to guests who need some shopping therapy. The hotel is a comfortable city residence that opens its doors to welcome both tourist and business travellers. All of its accommodation units are comfortably decorated and feature a private bathroom. Some units are also provided with a bath. Pay-TV is available for guests' entertainment. ",
"HotelPromotion": "Child discount",
"HotelPolicy": "Online Price",
"HotelPicture": "http://b2b.tektravels.com/imageresource.aspx?img=9eMP+0FIIChAnwOW/84dgWcpXl1h0cFuDrz1NcxYiSGF9UbCT9nFc2FFE2pDWfGzQvcyQXogaNxeyCgQodc3Nw==",
"HotelAddress": "SLOTERMEERLAAN 133 1063 JN AMSTERDAM NL, Amsterdam, , 1063 JN",
"HotelContactNo": "",
"HotelMap": null,
"Latitude": "",
"Longitude": "",
"HotelLocation": null,
"Price": {
"CurrencyCode": "INR",
"RoomPrice": 38072.18,
"Tax": 0,
"ExtraGuestCharge": 0,
"ChildCharge": 0,
"OtherCharges": 0,
"Discount": 0,
"PublishedPrice": 38072.18,
Universal Hotel API
Version: 10.0
Page 60 of 133
"PublishedPriceRoundedOff": 38072,
"OfferedPrice": 38072.18,
"OfferedPriceRoundedOff": 38072,
"AgentCommission": 0,
"AgentMarkUp": 4965.94,
"ServiceTax": 0,
"TDS": 0
},
"RoomDetails": []
},
{
"ResultIndex": 2,
"HotelCode": "84536",
"HotelName": "Bastion Zaandam-Zuid",
"HotelCategory": "",
"StarRating": 3,
"HotelDescription": "The hotel is situated near exit 1 on the A8. The hotel now has 40 standard rooms and 40 deluxe rooms and the facilities on offer to guests include a lobby area with a 24-hour check out service, air conditioning, lift access, a bar, a restaurant and WLAN/Internet access. The rooms are personal, comfortable and offer good facilities. They come with a bathroom with shower, a direct dial telephone, satellite TV, individually adjustable heating, a radio, Internet access, air conditioning and a safe. Guests may enjoy their breakfast and midday meal in buffet form. The midday meal is, additionally, available à la carte or from a set menu as is the evening meal. ",
"HotelPromotion": "Non-refundable rate. No amendments permitted",
"HotelPolicy": "Non refundable rate",
Universal Hotel API
Version: 10.0
Page 61 of 133
"HotelPicture": "http://b2b.tektravels.com/imageresource.aspx?img=9eMP+0FIIChAnwOW/84dgWcpXl1h0cFuUbeKvyH2Tj0A0yEtDMCm3LFWpr9t8gksvfTKcQn4ZJHS2ZG0Pf5k0w==",
"HotelAddress": "WIBAUTSTRAAT 278 1505HR ZAANDAM NL, Amsterdam, , 1505HR",
"HotelContactNo": "",
"HotelMap": null,
"Latitude": "",
"Longitude": "",
"HotelLocation": null,
"Price": {
"CurrencyCode": "INR",
"RoomPrice": 46114,
"Tax": 0,
"ExtraGuestCharge": 0,
"ChildCharge": 0,
"OtherCharges": 0,
"Discount": 0,
"PublishedPrice": 46114,
"PublishedPriceRoundedOff": 46114,
"OfferedPrice": 46114,
"OfferedPriceRoundedOff": 46114,
"AgentCommission": 0,
"AgentMarkUp": 6014.87,
"ServiceTax": 0,
Universal Hotel API
Version: 10.0
Page 62 of 133
"TDS": 0
},
"RoomDetails": []
},
{
"ResultIndex": 3,
"HotelCode": "90391",
"HotelName": "Lloyd Hotel and Cultural Embassy",
"HotelCategory": "",
"StarRating": 3,
"HotelDescription": "This charming city hotel is an epitome of innovation. Listed as national monument, dating back to 1921, it has been converted into a hotel and is now a true showcase for Dutch architecture and design. By just exploring its halls the guests can see a number of impressive objects of the local art and culture that date back to the beginning of the 20th century. Due to its sheer size it is also an outstanding venue for business meetings and conferences. Its unusual range of spaces and its innovative design features can accommodate for any type of even. Its perfect location in the fashionable Eastern Docklands puts its guests in an area awash with fascinating cultural, architectural and shopping highlights. They will be short stroll away from many of Amsterdam's cultural hotspots including Holland's biggest jazz club, the brand-new concert hall, and the Stedelijk Museum of Modern Art. ",
"HotelPromotion": "Child discount",
"HotelPolicy": "Non refundable rate",
"HotelPicture": "http://b2b.tektravels.com/imageresource.aspx?img=9eMP+0FIIChAnwOW/84dgWcpXl1h0cFuUbeKvyH2Tj3bphtv5YHBINNqYM6khRQ7SqyQf5KYHMy4WzYA+gqHPQ==",
"HotelAddress": "OOSTELIJKE HANDELSKADE 34 1019 BN AMSTERDAM NL, Amsterdam, , 1019 BN",
"HotelContactNo": "",
Universal Hotel API
Version: 10.0
Page 63 of 133
"HotelMap": null,
"Latitude": "",
"Longitude": "",
"HotelLocation": null,
"Price": {
"CurrencyCode": "INR",
"RoomPrice": 76777.59,
"Tax": 0,
"ExtraGuestCharge": 0,
"ChildCharge": 0,
"OtherCharges": 0,
"Discount": 0,
"PublishedPrice": 76777.59,
"PublishedPriceRoundedOff": 76778,
"OfferedPrice": 76777.59,
"OfferedPriceRoundedOff": 76778,
"AgentCommission": 0,
"AgentMarkUp": 10014.47,
"ServiceTax": 0,
"TDS": 0
},
"RoomDetails": []
},
{
Universal Hotel API
Version: 10.0
Page 64 of 133
"ResultIndex": 4,
"HotelCode": "30719",
"HotelName": "Omega Hotel",
"HotelCategory": "",
"StarRating": 3,
"HotelDescription": "This welcoming city hotel lies in the heart of Amsterdam, close to the concert hall. In the nearest vicinity guests may find plenty of museums and the famous Vondel Park. Links to the transport network are to be found nearby as well as a diversity of shopping and entertainment venues, all around 75 m away. The nearest nightclub and bar facilities are to be found within about 2 km away. This elegant hotel comprises a total of 32 rooms. Facilities include a lobby with a 24-hour reception desk. A bar and a public Internet terminal with charge are all featured within the hotel. The tastefully decorated rooms are fully - equipped, including Internet connection. Breakfast may be selected from a buffet. ",
"HotelPromotion": "Non-refundable rate. No amendments permitted",
"HotelPolicy": "Non refundable rate",
"HotelPicture": "http://b2b.tektravels.com/imageresource.aspx?img=9eMP+0FIIChAnwOW/84dgWcpXl1h0cFuUbeKvyH2Tj0x1ch0FwXxeBKJ77z9pwNwghTQdy0Hyy5sZAEiPFEMOg==",
"HotelAddress": "JACOB OBRECHTSTRAAT 33 1071 KG AMSTERDAM NL, Amsterdam, , 1071 KG",
"HotelContactNo": "",
"HotelMap": null,
"Latitude": "",
"Longitude": "",
"HotelLocation": null,
"Price": {
"CurrencyCode": "INR",
"RoomPrice": 48592.02,
Universal Hotel API
Version: 10.0
Page 65 of 133
"Tax": 0,
"ExtraGuestCharge": 0,
"ChildCharge": 0,
"OtherCharges": 0,
"Discount": 0,
"PublishedPrice": 48592.02,
"PublishedPriceRoundedOff": 48592,
"OfferedPrice": 48592.02,
"OfferedPriceRoundedOff": 48592,
"AgentCommission": 0,
"AgentMarkUp": 6338.09,
"ServiceTax": 0,
"TDS": 0
},
"RoomDetails": []
}
]
}}';*/
		curl_close($ch);
		//print_r($responsepurge);exit;
        return json_decode($responsepurge);

}
public static function hotelinfo($data)
    {
         $url = "http://api.tektravels.com/BookingEngineService_Hotel/hotelservice.svc/rest/GetHotelInfo/";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
		curl_close($ch);
        return json_decode($responsepurge);

    }
	public static function roominfo($data)
    {
         $url = "http://api.tektravels.com/BookingEngineService_Hotel/hotelservice.svc/rest/GetHotelRoom/";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
		curl_close($ch);
        return json_decode($responsepurge);

    }
	public static function blockroom($data)
    {
         $url = "http://api.tektravels.com/BookingEngineService_Hotel/hotelservice.svc/rest/BlockRoom/";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
		curl_close($ch);
        return json_decode($responsepurge);

    }
	public static function bookroom($data)
    {
         $url = "http://api.tektravels.com/BookingEngineService_Hotel/hotelservice.svc/rest/Book/";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                       
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $responsepurge = curl_exec($ch);
		curl_close($ch);
        return json_decode($responsepurge);

    }
}