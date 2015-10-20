@extends('layouts.retailer')
@section('content')
<style>
.whiteall{
color:#fff !important;

}
.selected-container {
  width: 713px!important;
  padding-right: 0!important;
}
.tab-container .tab-content {
  border: 1px solid #d2d3d6;
  border-top: 0;
  padding: 1px 6px;
  background-color: rgb(48, 6, 34);
  .contactDetails h2 {
  width: 714px !important;}
  
</style>

<link rel="stylesheet" href="<?php echo url('assets/admin'); ?>/css/ytPayment.css"  type="text/css" media="screen">
  
 
  <div class="form-group" style="display:none;">
  <label class="col-sm-3 control-label">Fullscreen Textarea</label>
  <div class="col-sm-6">
    <textarea class="form-control fullscreen"></textarea>
  </div>
</div>
        <section id="content">
            <div class="container">
                <div class="row">
                    <div id="main" class="col-md-9">
                          
             
							
			<div id="step1ccout"><div class="ytColm9">
			   <!-- hotel details starts here-->
			    <div class="detaiBox clearfix" style="margin-bottom: 10px;">
                  <h2 style="  color: #fff;">{{$input['HotelName']}}<div class="loaction-detail" style="  color: #fff;">
				  <span class="ico-rating ratinginstepone"><strong class="rating-4"></strong> </span></div></h2>
                  <!-- date choosen box starts-->
				  <!-- similar hotel box for days itenary starts here-->
                  <div class="travelDetails bor-btm">
						<article class="hotelBox">
							<section class="chKInfro">
								<span class="blockChk ml0">
								<label class="white">Check-in</label>
									<div class="Backdate">
										<span class="day">{{date('l',strtotime($input['CheckInDate']))}}</span>
										<ul class="noListStyle">
											<li class="date"> {{date('d',strtotime($input['CheckInDate']))}}</li>
											<li class="lastLi"> {{date('M',strtotime($input['CheckInDate']))}}</li>
										</ul>
									</div>
								</span>
								<span class="blockChk star-rat">
									<i class="paymentSpritePay nights"></i>
									<?php
$date1=date_create($input['CheckOutDate']);
$date2=date_create($input['CheckInDate']); 
$diff=date_diff($date2,$date1);
?>
									<p class="initCapClass">{{$diff->format("%a")}} Nights</p>
								</span>
								<span class="blockChk">
								<label>Check-out</label>
									<div class="Backdate">
										<span class="day">{{date('l',strtotime($input['CheckOutDate']))}}</span>
										<ul class="noListStyle">
											<li class="date"> {{date('d',strtotime($input['CheckOutDate']))}}</li>
											<li class="lastLi">{{date('M',strtotime($input['CheckOutDate']))}} </li>
										</ul>
									</div>
								</span>
							</section>
							<div class="abtHotel">
								<h3>{{$input['noofrooms']}} Room for {{$diff->format("%a")}} Night</h3>
								<ul>
								<?php
									$adults=explode('-',$input['noadult']);
									$child=explode('-',$input['nochild']);
									
								for($i=0;$i<$input['noofrooms'];$i++)
								{?>
									<li><span>Room {{$i+1}} - <span class="pax-Info-hotel">{{$adults[$i]}} Adult & {{$child[$i]}} childs</span></span></li>
								<?php } ?>
								</ul>
							</div>
							<!--room type starts here-->
								<div class="room-block" style="  color: rgb(222, 208, 208);">
									<span class="rum-type-txt">Room Type</span>
									<span class="rum-details">{{$input['RoomTypeName'][0]}}<span style="color:#c5c5c5"></span></span>
								</div>
							<!--room type ends here-->
							<div class="more-info">
								
									
									
									<a href="javascript:void(0);" class="readMoreCCOut"><span id="moreOrLessCCOut" style="margin-right: 5px;">Read More</span><span class="what-incl">(Inclusions, Cancellation Policy)</span><i class="paymentSpritePay icon-top paymentSpritePay-ccout icon-top-ccout"></i></a>
									<div class="xtra-info xtra-info-readMoreCCOut">
									<div class="similar-cont inclusionDiv">
										<span class="block-title">
											Inclusions
										</span>
										<span class="title-detail">
											
										</span>
									</div>
									<div class="similar-cont checkinTimeDiv">
										<span class="block-title">
											Check-in And Check-out Times
										</span>
										<span class="title-detail checkinTimeSpan">
											<span class="showcheckintime">Checkin Time : 12-00 PM</span><span class="showcheckouttime">, Checkout Time : 12-00 PM</span>
										</span>
									</div>
									<div class="similar-cont">
										<span class="block-title">
											Hotel Address
										</span>
										<span class="title-detail">
											Bhavans College Road<span class="invisible">,</span> ,&nbsp;Ahmedabad - 380001
										</span>
									</div>
									<div class="similar-cont" style="cursor:pointer;">
										<a class="flL mt5 cancelColor flL skyblue tooltips">Read cancellation Policy<span><h3>Cancellation Policy</h3>
<p class="cancellationText">First night cost (including taxes &amp; service charge) will be charged if you cancel this booking by 24-Sep-15 12:00 PM IST. ,No refund if you cancel this booking later than 24-Sep-15 12:00 PM IST. You might be charged upto the full cost of stay (including taxes &amp; service charge) if you do not check-in to the hotel. </p></span></a>
									</div>
								</div>
									
								
								
								
							</div>
						</article>
<div class="continueBtnArea invisible">
    <div class="contBtn">
        <input class="ytBtnOrange-chek " type="button" value="Continue" onclick="loginSuccessCallBack()">
    </div>
</div>   
                  </div>
				  <!-- similar hotel box for days itenary starts here-->
               </div>
			   <!-- hotel details ends here-->
					 <div id="abtDiv" class="TabContentBoxWidth invisible" style="margin-bottom: 10px;">
						<h2>ABT Login</h2>
						<div class="tab-containerHotel">
							<div class="abt_type">
								<ul>
				<li class="checked"><label>New Booking</label>&nbsp;<input type="radio" checked="checked" name="opType" value="ABT_NEW" class="ABT_NEW"></li>
				<li><label>Amendment</label>&nbsp;<input type="radio" name="opType" value="ABT_AMENDMENT" class="ABT_AMENDMENT"></li>
				<!--  li><label>Sold out</label>&nbsp;<input type="radio" name="opType" value="ABT_SOLDOUT" class="ABT_SOLDOUT"></li>
				<li><label>Package</label>&nbsp;<input type="radio" name="opType" value="ABT_PACKAGE" class="ABT_PACKAGE"></li-->
			</ul>
		</div>
		<div class="abt_login">
			<ul>
				<li id="abt_mailIdErrorP" class="invisible"><p style="color: #ff0000;">Invalid Email-Id</p></li>
				<li><label><strong>Email</strong></label><input type="text" id="abt_mailId" name="emailId"></li>
				<li><label><strong>YT Ref Number</strong></label><input type="text" id="abt_TYRefNum" name="YTRefNum"></li>
				<li><label>&nbsp;</label><input type="button" class="btnorg_new ytBtnHotel ytBtnOrangeHotel latoBold" value="Submit" onclick="submitAbtForm()"></li>
			</ul>                                                                                                                   
		</div>  
		</div>                                                                                                                
	</div>			   		
			
		<div class="flL" id="HomeGenDiscBannerContainer_removed"><style type="text/css">
#quickBookMessageDiv:hover {background-color: #ebeb94!important}
</style>


     <div style="z-index: 5200; background-color: rgb(0, 0, 0); opacity: 0.8; position: fixed; top: 0px; left: 0px; height: 1507px; width: 100%; display: none;" id="qbBlackDiv"></div>
     <iframe frameborder="0" scrolling="no" allowtransparency="true" style="width: 100%; height: 1507px; position: fixed; border: medium none; z-index: 5201; top: 0px; left: 0px; display: none;" id="qbRegIframe"></iframe>          
     
<!--[if IE 7]>
<script type="text/javascript">
  if(true) {
     $("#HomeGenDiscBannerContainer").html("");
  }
</script>
<![endif]--></div>
                <div id="commonSighin" style="margin-top:10px;" class="showccout mt10"><style> abbr,address,article,aside,audio,blockquote,caption,cite,code,dd,del,dfn,div,dl,dt,em,fieldset,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,html,i,iframe,img,ins,kbd,label,legend,li,mark,menu,nav,object,ol,p,pre,q,samp,section,small,span,strong,sub,sup,table,tbody,td,tfoot,th,thead,time,tr,ul,var,video{margin:0;padding:0;outline:0;vertical-align:baseline;background:0 0;font-family:latoRegular}article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display:block}html{font-family:LatoRegular;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0;font-family:LatoRegular;font-size:75%;}a{margin:0;padding:0;font-size:13px;vertical-align:baseline;background:0 0;color:#0095B9;text-decoration:none}a:focus{outline:0}a:active,a:hover{outline:0;color:#00668a}a:active{text-decoration:none}blockquote,q{quotes:none}blockquote:after,blockquote:before,q:after,q:before{content:'';content:none}ul{padding:0;margin:0}ul.noListStyle{margin-left:0;list-style:none}ul.noListStyle li{display:inline-block;vertical-align:top}table{border-collapse:collapse;border-spacing:0}img{border:0}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}legend{border:0;padding:0}button,input,select,textarea{font-family:inherit;font-size:13px;margin:0}button,input{line-height:normal}button,select{text-transform:none}button,html input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}::-webkit-input-placeholder{color:#a3a3a3;font-size:16px}::-moz-placeholder{color:#a3a3a3;font-size:16px}:-ms-input-placeholder{color:#a3a3a3;font-size:16px}input:-moz-placeholder{color:#a3a3a3;font-size:16px}input[type=text]:focus{box-shadow:0 1px 1px rgba(0,0,0,.075) inset,0 0 4px rgba(113,113,113,.6);outline:0;border-color:#000/9}input[type=radio]{box-sizing:border-box;padding:0;display:none}input[type=search]{-webkit-appearance:textfield}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}textarea{overflow:auto;vertical-align:top}.clearfix:after,.clearfix:before{display:table;line-height:0;content:""}.clearfix:after{clear:both}.latoBold{font-family:LatoBold}.ytContainerFluid{position:relative}.ytContainerFluid:after,.ytContainerFluid:before{display:table;line-height:0;content:""}.ytContainerFluid:after{clear:both}.ytContainerFixed{width:964px!important;margin:0 auto;position:relative}.ytContainerFixed:after,.ytContainerFixed:before{display:table;line-height:0;content:""}.ytContainerFixed:after{clear:both}.ytRow:after,.ytRow:before{display:table;line-height:0;content:""}.ytRow:after{clear:both}[class*=ytColm]{float:left;min-height:1px;margin-left:20px;// margin-left:10px;display:block}[class*=ytColm]:first-child{margin-left:0}.ytColm12{width:964px}.ytColm11{width:882px}.ytColm10{width:800px}.ytColm9{width:718px}.ytColm8{width:636px}.ytColm7{width:554px}.ytColm6{width:472px}.ytColm5{width:390px}.ytColm4{width:308px}.ytColm3{width:226px}.ytColm2{width:144px}.ytColm1{width:62px}.wfull{width:100%;float:left}.flL{float:left}.flLI{float:left!important}.flR{float:right}.flRI{float:right!important}.block{display:block!important}.hide{display:none}.hand{cursor:pointer}.relative{position:relative}.inline{display:inline}.inlineBlock{display:inline-block!important}.tar{text-align:right}.verAlignMid{vertical-align:middle}.b{font-weight:700}.txtItalic{font-style:italic;font-family:Comic Sans MS}.mauto{margin:0 auto!important}.borBot{border-bottom:none!important}.txtTiny{font-size:9px}.txt10{font-size:10px}.txtSmall{font-size:11px}.txtDefault{font-size:12px}.txt13{font-size:13px}.txtMedium{font-size:14px}.txtL{font-size:16px!important}.txtXL{font-size:20px}.txtXXL{font-size:22px}.txtXXXL{font-size:24px}.txtWhite{color:#fff}.txtDrkGrey{color:#333}.txtLgtGrey{color:#55544e}.txtYellow{color:#edc16c}.txtBlack{color:#000}.txtGrey{color:#666}.txtOrange{color:#ff7b02!important}.txtBlue{color:#2D84B9}.txtDBlue{color:#135669}.priceBlue{color:#78b9cb!important}.priceOrg{color:#e2a329}.bodyBgColor{background-color:#F8F9F9!important}.borderLgray{border-color:#F8F9F9!important}.Dblue{color:#03566c!important;font-family:latobold;font-size:16px!important}.horzSepr{border-top:1px solid #ccc;width:100%}.horzSeprB{border-bottom:1px solid #ccc;width:100%}.vertSepr{border-left:1px solid #ccc;height:100%;display:inline-block;position:relative}.boxBorder{border:1px solid #ECECEC}.mt20{margin-top:20px}.mt40{margin-top:40px}.mt50{margin-top:50px}.mt5{margin-top:5px!important}.mt3{margin-top:3px;// margin-top:0}.mt10{margin-top:10px}.mt15{margin-top:15px}.ml10{margin-left:10px}.ml15{margin-left:15px}.ml0{margin-left:0!important}.mr10{margin-right:10px}.mr14{margin-right:14px}.mb5{margin-bottom:5px}.mb10{margin-bottom:10px}.mb20{margin-bottom:20px}.mr20{margin-right:20px}.mt25{margin-top:30px}.ml5{margin-left:5px}.mr5{margin-right:5px}.pad5{padding:5px}.pb5{padding-bottom:5px}.pb10{padding-bottom:10px}.pad10{padding:10px}.padR20{padding-right:20px}.padL25{padding-left:25px}.contactDetails h2{width:701px;color:#666;background-color:#f2f5f6;padding:8px 0 8px 15px;position:relative;float:left;// height:26px;border-bottom:1px solid #D7D7D7;font-size:20px}.contactDetails .PaxInfo{background-color:#fff;display:inline-block;float:left;padding:17px 15px;width:676px}@font-face{font-family:LatoRegular;src:url(/content/social/fonts/lato-reg.eot);src:url(/content/social/fonts/lato-reg.eot) format('embedded-opentype'),url(/content/social/fonts/lato-reg.woff) format('woff'),url(/content/social/fonts/lato-reg.ttf) format('truetype'),url(/content/social/fonts/lato-reg.svg#LatoRegular) format('svg')}@font-face{font-family:LatoBold;src:url(/content/social/fonts/lato-bol.eot);src:url(/content/social/fonts/lato-bol.eot) format('embedded-opentype'),url(/content/social/fonts/lato-bol.woff) format('woff'),url(/content/social/fonts/lato-bol.ttf) format('truetype'),url(/content/social/fonts/lato-bol.svg#LatoBold) format('svg')}@font-face{font-family:WebRupee;src:url(/content/social/fonts/WebRupee.V2.0.eot);src:local('WebRupee'),url(/content/social/fonts/WebRupee.V2.0.ttf) format('truetype'),url(/content/social/fonts/WebRupee.V2.0.woff) format('woff'),url(/content/social/fonts/WebRupee.V2.0.svg) format('svg');font-weight:400;font-style:normal}.RupeeSign{font-family:WebRupee;margin:0;padding:0}.contactDetails h2 .loaction-detail,.detaiBox h2 .loaction-detail,.itinerarySec h2 .loaction-detail,.travelItenary h2 .loaction-detail{color:#666;font-size:16px;display:inline-block;font-weight:400}.contactDetails h2 .spl-txt,.detaiBox h2 .spl-txt,.itinerarySec h2 .spl-txt,.travelItenary h2 .spl-txt{color:#666;font-size:20px;display:inline-block;font-weight:400}.contactDetails h2 .loaction-detail .ico-rating{margin-top:5px;margin-left:5px}.loginBtnCont{width:100%;float:left;margin:10px 0}.loginBtnCont input{width:96%;float:left;font-size:20px;padding:10px 0}.yatraFb{background:url(/content/social/images/paymentSprite.png) no-repeat -4px -271px;cursor:pointer;display:block;height:45px;margin:10px 0 0 35px;width:214px}input[type=password],input[type=text]{margin-top:3px;background:#FFF;border:1px solid #CDCECF;box-shadow:0 2px 1px rgba(0,0,0,.075) inset;transition:border .2s linear 0s,box-shadow .2s linear 0s;padding:7px;font-family:LatoBold;font-size:16px;color:#999}.loginAreadiv{width:39%;float:left;padding:0 25px 0 0}.loginInfo .labeltxt{color:#989898;font-size:11px;display:block;margin-top:5px;float:left;width:100%}.PaxInfo .existnAcc{width:44%;padding-left:5%;float:right;min-height:200px;border-left:1px solid #c3c3c3;position:relative}.PaxInfo .existnAcc .ver-or{background-color:#FFF;border:1px solid #c3c3c3;border-radius:50%;color:#B6B6B6;font-size:14px;height:35px;left:-20px;line-height:34px;position:absolute;text-align:center;top:35%;width:35px}.PaxInfo .existnAcc .yatraFb{position:absolute;top:63px;left:23px}.selected-container{width:696px!important;padding-right:0!important}.loginBtnArea{display:inline-block;padding:5px 10px;width:686px}.loginBtnArea .contBtn{width:100px;float:right}.loginBtnArea .contBtnC{width:100px;margin:0 auto}.loginInfo .qbLogin{list-style-type:none;margin-left:0}.loginInfo .qbLogin li{border-bottom:none!important;padding:0!important}.loginInfo .qbLogin li input[type=submit]{margin-left:10px;margin-bottom:3px}.loginInfo .qbLogin .ytBtn{padding:.65em 1em;margin:-7px 0 0 10px}.loginInfo input[type=text]:disabled{background-color:#faf6f6}.w300{width:300px}.w240{width:256px!important}.w204{width:204px}.w120{width:120px}.w140{width:140px!important}.w110{width:110px}.w180{width:180px!important}.w150{width:150px}.w30,.w35{width:35px}.w45{width:45px}.sep-pay{border-bottom:1px solid #DFDFDF;height:1px;float:left;width:203px;margin:5px 0}.ytBtn{display:inline-block;padding:4px 6px 6px;margin-bottom:0;color:#333;text-align:center;text-shadow:0 1px 1px rgba(255,255,255,.75);vertical-align:middle;cursor:pointer;background-color:#f5f5f5;background-image:-moz-linear-gradient(top,#fff,#ededed);background-image:-webkit-gradient(linear,0 0,0 100%,from(#fff),to(#ededed));background-image:-webkit-linear-gradient(top,#fff,#ededed);background-image:-o-linear-gradient(top,#fff,#ededed);background-image:linear-gradient(to bottom,#fff,#ededed);background-repeat:repeat-x;border:1px solid #ccc;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;font-family:latobold}.ytBtn:focus,.ytBtn:hover,.ytBtn[disabled]{color:#333;text-decoration:none;background-color:#e6e6e6;background-image:-moz-linear-gradient(top,#fff,#dfdfdf);background-image:-webkit-gradient(linear,0 0,0 100%,from(#fff),to(#dfdfdf));background-image:-webkit-linear-gradient(top,#fff,#dfdfdf);background-image:-o-linear-gradient(top,#fff,#dfdfdf);background-image:linear-gradient(to bottom,#fff,#dfdfdf);background-repeat:repeat-x;border:1px solid #bbb}.ytBtn[type=submit],[type=button]{border-radius:3px}.ytBtnBlue{-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;text-decoration:none;border:none;position:relative;padding:.75em 1em;background:#0493b4;font-family:latoRegular;color:#fff;text-shadow:1px 1px #026785}.ytBtnBlue:focus,.ytBtnBlue:hover{color:#fff;background:#0493b4;text-shadow:1px 1px #026785;border:0}.ytBtnGreen{background-color:#35ac30;background-image:linear-gradient(to bottom,#3ce43a,#35ac30);background-repeat:repeat-x;border-color:rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);color:#FFF;text-shadow:0 -1px 0 rgba(0,0,0,.25)}.ytBtnGreen:focus,.ytBtnGreen:hover{color:#fff;background-color:#35ac30}.ytBtnOrange{color:#fff;text-shadow:0 -1px 0 rgba(0,0,0,.25);background-color:#FF7C00;background-image:-moz-linear-gradient(top,#FF7C00,#FF5600);background-image:-webkit-gradient(linear,0 0,0 100%,from(#FF7C00),to(#FF5600));background-image:-webkit-linear-gradient(top,#FF7C00,#FF5600);background-image:-o-linear-gradient(top,#FF7C00,#FF5600);background-image:linear-gradient(to bottom,#FF7C00,#FF5600);background-repeat:repeat-x;border-color:#FF4C00}.ytBtnOrange:focus,.ytBtnOrange:hover{color:#fff;background-color:#ec4200;background-image:-moz-linear-gradient(top,#ec4200,#e32e00);background-image:-webkit-gradient(linear,0 0,0 100%,from(#ec4200),to(#e32e00));background-image:-webkit-linear-gradient(top,#ec4200,#e32e00);background-image:-o-linear-gradient(top,#ec4200,#e32e00);background-image:linear-gradient(to bottom,#ec4200,#e32e00);background-repeat:repeat-x;border-color:#d12600;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ec4200', endColorstr='#e32e00', GradientType=0);filter:progid:DXImageTransform.Microsoft.gradient(enabled=false);transition:none}.s-hidden{visibility:hidden;padding-right:10px;border:1px}.popover{position:absolute;top:0;left:0;z-index:1010;display:none;text-align:left;white-space:normal;background-color:#fff;border:1px solid #DFDBDB;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;-webkit-box-shadow:0 5px 10px rgba(0,0,0,.2);-moz-box-shadow:0 5px 10px rgba(0,0,0,.2);box-shadow:0 5px 10px rgba(0,0,0,.2);-webkit-background-clip:padding-box;-moz-background-clip:padding;background-clip:padding-box;padding:1px}.popover.top{margin-top:-10px}.popover.right{margin-left:10px}.popover.bottom{margin-top:10px}.popover.left{margin-left:-10px}.popover-title{font-size:120%;font-weight:700;line-height:18px;color:#333;text-shadow:0 1px 1px rgba(255,255,255,.75);border-bottom:1px solid #DFDBDB;-webkit-border-radius:5px 5px 0 0;-moz-border-radius:5px 5px 0 0;border-radius:5px 5px 0 0;background: linear-gradient(to bottom,hsl(6%,70%,100%),#fff);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#eeeeee', GradientType=0);margin:0;padding:8px 14px}.popover-title:empty{display:none}.popover-content{padding:9px 14px}.contactDetails,.detaiBox{width:716px;float:left;border:1px solid #D7D7D7;box-shadow:0 0 3px -2px #333;border-radius:2px;position:relative}.contactDetails .more-flight,.detaiBox .more-flight{position:absolute;bottom:0;padding:20px;left:0;width:95%;font-size:14px}.custom-Radiobox{margin-top:3px}.ie8 .custom-Radiobox,.ie8 .custom-checkbox{zoom:1}.custom-checkbox>.box{position:relative;display:block;width:20px;height:20px;background:url(/content/social/images/ico-form-control.png) no-repeat scroll 0 -23px}.custom-checkbox>.box>.tick{position:absolute;width:20px;height:20px;background:url(/content/social/images/ico-form-control.png) no-repeat scroll;display:none}.custom-Radiobox>.box{position:relative;display:block;width:20px;height:20px;background:url(/content/social/images/ico-form-control.png) no-repeat scroll -20px -23px}.custom-Radiobox>.box>.tick{position:absolute;width:20px;height:20px;background:url(/content/social/images/ico-form-control.png) no-repeat scroll -20px 0;display:none}.ytcust .custom-Radiobox>.box>.tick,.ytcust .custom-checkbox>.box>.tick{left:1px;zoom:1}.custom-Radiobox.checked>.box>.tick,.custom-Radiobox>input:checked+.box>.tick,.custom-checkbox.checked>.box>.tick,.custom-checkbox>input:checked+.box>.tick{display:block}.custom-Radiobox>input,.custom-checkbox>input{position:absolute;outline:0;left:2;top:-4px;width:17px;height:17px;opacity:0;z-index:-999}.contactDetails .optDwm{margin-left:-5px;margin-right:5px;margin-top:5px}.commonSignInSection.forgotPwdPopUp .header{border-bottom:1px solid #dcdcdc;float:left;width:100%;background-color:#f5f5f5;border-radius:5px 5px 0 0}.commonSignInSection.forgotPwdPopUp h1{font-size:16px;color:#000;float:left;padding:18px}.commonSignInSection.forgotPwdPopUp{z-index:5002;width:440px;float:left;border:1px solid #dcdcdc;border-radius:5px;position:absolute;left:32%;top:32%;background-color:#fff;font-size:75%;font-family:Arial,Helvetica,sans-s erif;display:none}.commonSignInSection .forgotPwdDetail .forgotPwdContainer{padding:20px 17px;float:left;width:92%;background:#fff;margin-bottom:2px}.commonSignInSection .forgot-popup-close{background-position:-147px -142px;width:20px;height:20px;display:block;float:right;margin-top:15px;margin-right:9px font-size:20px;color:#666}.commonSignInSection .forgotPwdTxt{color:#666;font-size:14px}.commonSignInSection .forgotPwdBtn{color:#fff;border-width:1px;background-color:#006dcc;background-image:-moz-linear-gradient(top,#6aade3,#336dac);background-image:-webkit-gradient(linear,0 0,0 100%,from(#6aade3),to(#336dac));background-image:-webkit-linear-gradient(top,#6aade3,#336dac);background-image:-o-linear-gradient(top,#6aade3,#336dac);background-image:linear-gradient(to bottom,#6aade3,#336dac);background-repeat:repeat-x;border-color:#336dac #336dac #002a80;border-color:rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0044cc', GradientType=0);filter:progid:DXImageTransform.Microsoft.gradient(enabled=false);padding:9px 18px 10px;margin-top:0;margin-left:30px;text-decoration:none;text-align:center;vertical-align:middle;font-family:latobold;cursor:hand}.commonSignInSection .forgotPwdBtn[disabled]{cursor:auto;background:#ddd;border:0}.commonSignInSection .valid
ationErrorMessage{font-size:14px;width:100%;color:red;margin-top:5px;margin-bottom:5px;height:12px}.commonSignInSection .fbIcon{background-position:-186px -343px;float:left;height:28px;margin-top:10px;width:28px}.orSep{background-position:-73px -312px;top:auto;color:#FFF;font-family:latobold;font-size:18px;left:38%;padding:17px 0;position:absolute;text-align:center;width:55px;bottom:-17%}.loginSep.loginAreadiv .orSep.PaymentSprite{bottom:-12%}.fbLoggedin{width:45%;float:left;padding:10px 5px}.fbIcon{background-position:-186px -343px;height:28px;width:28px;float:left;margin-top:3px}.fbUserInfo{float:left;padding:0 10px}.fbLoggedin a{color:#569ece}.fbLoggedin .loginInfo{border-bottom:0}.usrMailInfo{padding:7px 0}.usrEngage{background-color:#F1F3F2;padding:8px 0;border-bottom:1px solid #d7d7d7;border-bottom:1px solid transparent;box-shadow:0 0 2px 0 #C3C4C4 inset}.ytFbBtn{display:inline-block;padding:4px 6px 6px;margin-bottom:0;color:#333;text-align:center;text-shadow:0 1px 1px rgba(255,255,255,.75);vertical-align:middle;cursor:pointer;background-image:-moz-linear-gradient(top,#fff,#ededed);background-image:-webkit-gradient(linear,0 0,0 100%,from(#fff),to(#ededed));background-image:-webkit-linear-gradient(top,#fff,#ededed);background-image:-o-linear-gradient(top,#fff,#ededed);background-image:linear-gradient(to bottom,#fff,#ededed);background-repeat:repeat-x;border:1px solid #ccc;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;font-family:latobold}.tab-container,.tab-container .tab-content{float:left;width:100%}.custom-Radiobox,.custom-checkbox{display:inline-block;float:left;position:relative}.loginInfo ul{float:left;width:100%}.loginInfo .checkAcc label{color:#333;font-size:14px;margin-left:10px;//float:left;}.loginInfo .checkAcc{margin:10px 0!important;width:100%}.loginInfo ul li,.loginInfo ul li div{float:left}.loginInfo{float:left;width:270px!important;position:relative} .fbButtonHighlight{border: 5px #e32e00;border-style: solid;border-radius: 10px;}</style>





<div id="forgot-pop-up-overlay" style="display:none; position: fixed; top: 0; left: 0; height: 100%; width: 100%; background-color: #969696;z-index: 1000; opacity:0.7;filter:alpha(opacity=60);" class="commonSignInSection">
</div>
<div id="forgotPwdPopup" class="forgotPwdPopUp commonSignInSection" style="position:fixed;">
	<div class="forgotPwdDetail">
		<div class="header">
			<h1>Forgot Password</h1>
			<span class="forgot-popup-close mt_15" onclick="onForgotPopUpClose();" style="font-size:16px;cursor:pointer">X</span>
		</div>	
		<div class="forgotPwdContainer" id="forgotPwdDiv">
			<ul class="noListStyle">
				<li>
					<span id="forgotPwdErrMsg" class="validationErrorMessage" style="display:none;"></span>
				</li>
				<li>
					<span class="forgotPwdTxt">Enter the email address associated with Yatra.com and click Submit.</span>
				</li>
			</ul>
			<div style="margin-top:10px;">
				<input type="text" autocomplete="off" id="forgot_email" style="padding:3px 7px 7px;" class="input w240 ie6Input required_field" data-errormsg="Please enter email address" data-regtype="email" placeholder="Enter email address">
				<input style="font-size:16px;padding:6px;width:100px;margin-left:5px" type="button" value="Submit" class="ytBtn ytBtnOrange latoBold simulateSubmit">
				<div id="pop-up-loader-img" style="display:none;padding: 15px; top: 50%; left: 45%;position: absolute;z-index: 10001;">
					<img src="https://secure.yatra.com/content/social/images/ajax-loader.gif">
				</div>
			</div>
		</div>
		<div class="forgotPwdContainer" id="pwdSentDiv" style="display:none;">
			<span class="forgotPwdTxt">Mail has been sent to the registered email address.</span>
		</div>
	</div>
</div>
	




<div class="contactDetails" data-triggervalidate="#userContinue" id="contactDetails">
   <div id="sign-in-body-ajax-loader" style="display:none; position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 10000; opacity:0.4;filter:alpha(opacity=60);">
      <div id="ams-img" style="padding: 15px; top: 50%; left: 45%;position: absolute;z-index: 10001;">
         <img src="https://secure.yatra.com/content/social/images/ajax-loader.gif">
      </div>
   </div>
   <h2 style="  background-color: rgb(48, 6, 34);">Guest Details</h2>
   <div class="tab-container">
      <div class="tab-content" id="tabSection">
         <div id="tab0" class="PaxInfo selected-container" style="  background-color: #300622;">
            <div class="loginAreadiv">
      
	       <!-- Continue as guest form container start here -->
               <div class="login-block loginInfo" id="guestLoginDiv">
			   
			   <form action="{{url('retailer/hotel/bookroom')}}">
			   <input type="hidden" name="ResultIndex" value="{{$input['ResultIndex']}}">
				<input type="hidden" name="HotelCode" value="{{$input['HotelCode']}}">
				<input type="hidden" name="traceid" value="{{$input['traceid']}}">
				<input type="hidden" name="noadult" value="{{$input['noadult']}}">
				<input type="hidden" name="nochild" value="{{$input['nochild']}}">
				
				<input type="hidden" name="age" value="{{$input['age']}}">
				<input type="hidden" name="HotelName" value="{{$input['HotelName']}}">
				<input type="hidden" name="noofrooms" value="{{$input['noofrooms']}}">
				<input type="hidden" name="CheckInDate" value="{{$input['CheckInDate']}}">
				<input type="hidden" name="CheckOutDate" value="{{$input['CheckOutDate']}}">
				<input type="hidden" name="guestnationality" value="{{$input['guestnationality']}}">
				<input type="hidden" name="CountryCode" value="{{$input['CountryCode']}}">
				<?php for($j=0;$j<$input['noofrooms'];$j++)
				{?>
				<input type="hidden" name="RoomIndex[]" value="{{$input['RoomIndex'][$j]}}">
				<input type="hidden" name="RoomTypeCode[]" value="{{$input['RoomTypeCode'][$j]}}">
				<input type="hidden" name="RoomTypeName[]" value="{{$input['RoomTypeName'][$j]}}">
				<input type="hidden" name="RatePlanCode[]" value="{{$input['RatePlanCode'][$j]}}">
				<input type="hidden" name="CurrencyCode" value="{{$input['CurrencyCode'][$j]}}">
				<input type="hidden" name="RoomPrice[]" value="{{$input['RoomPrice'][$j]}}">
				<input type="hidden" name="Tax[]" value="{{$input['Tax'][$j]}}">
				<input type="hidden" name="ExtraGuestCharge[]" value="{{$input['ExtraGuestCharge'][$j]}}">
				<input type="hidden" name="ChildCharge[]" value="{{$input['ChildCharge'][$j]}}">
				<input type="hidden" name="OtherCharges[]" value="{{$input['OtherCharges'][$j]}}">
				<input type="hidden" name="Discount[]" value="{{$input['Discount'][$j]}}">
				<input type="hidden" name="PublishedPrice[]" value="{{$input['PublishedPrice'][$j]}}">
				<input type="hidden" name="PublishedPriceRoundedOff[]" value="{{$input['PublishedPriceRoundedOff'][$j]}}">
				<input type="hidden" name="OfferedPrice[]" value="{{$input['OfferedPrice'][$j]}}">
				<input type="hidden" name="OfferedPriceRoundedOff[]" value="{{$input['OfferedPriceRoundedOff'][$j]}}">
				<input type="hidden" name="AgentCommission[]" value="{{$input['AgentCommission'][$j]}}">
				<input type="hidden" name="AgentMarkUp[]" value="{{$input['AgentMarkUp'][$j]}}">
				<input type="hidden" name="ServiceTax[]" value="{{$input['ServiceTax'][$j]}}">
				<input type="hidden" name="TDS[]" value="{{$input['TDS'][$j]}}">
				<?php } ?>
			   <div class="container">
			   <?php for($i=0;$i<$input['noofrooms'];$i++)
			   {?>
			   <h3>Guest Details for Room{{$i+1;}}</h3>
			   <ul class="noListStyle row">
                     
                  <?php for($adultcount=0;$adultcount<$adults[$i];$adultcount++)
				  { ?>
				  <li>
				  
				
				   Title<select class="form-control" name="Title[]">
                    <option value="mr">Mr.</option>
                    <option value="mrs">Mrs.</option>
                    <option value="miss">Miss.</option>
                    
                  </select>
                        </li>
                     <li>
                        <input type="text" name="FirstName[]" placeholder="Enter First name" class="w240 ie6Input required_field" id="guest_email">
                        <span class="labeltxt">Your booking details will be sent to this email address.</span>
                     </li>
                   <li>
                        <input type="text" name="MiddleName[]" placeholder="Enter Middle Name" class="w240 ie6Input required_field" id="guest_email">
                        </li>
						<li>
                        <input type="text" name="LastName[]" placeholder="Enter Last name" class="w240 ie6Input required_field" id="guest_email">
                        </li>
						<input type="hidden" name="PaxType[]" value="1">
						<li>were you lead Guest?
                        <select class="form-control" name="LeadPassenger[]">
                    <option value="true">YES</option>
                    <option value="false">NO</option></select>
					</li>
					
				   <?php if($input['guestnationality']!=$input['CountryCode'])
				   {?>
				   <li>
                        <input type="text" name="PassportNo[]" placeholder="Enter Passport Number" class="w240 ie6Input required_field" id="guest_email">
                   </li>
				   <li>
                        <input type="text" name="PassportIssueDate[]" placeholder="Enter Passport Issue Date" class="w240 ie6Input required_field" id="guest_email">
                   </li><li>
                        <input type="text" name="PassportExpDate[]" placeholder="Enter Passport Expiry Date" class="w240 ie6Input required_field" id="guest_email">
                   </li>
							
                   <?php } }?>
					<?php for($childcount=0;$childcount<$child[$i];$childcount++)
				  { ?>
				  <h3>Child info</h3>
				  <li>
					 Title<select class="form-control" name="Title[]">
                    <option value="mr">Mr.</option>
                   
                    <option value="miss">Miss.</option>
                    
                  </select>
                        </li>
                     <li>
                        <input type="text" name="FirstName[]" placeholder="Enter First name" class="w240 ie6Input required_field" id="guest_email">
                        <span class="labeltxt">Your booking details will be sent to this email address.</span>
                     </li>
                   <li>
                        <input type="text" name="MiddleName[]" placeholder="Enter Middle Name" class="w240 ie6Input required_field" id="guest_email">
                        </li>
						<li>
                        <input type="text" name="LastName[]" placeholder="Enter Last name" class="w240 ie6Input required_field" id="guest_email">
                        </li>
						<input type="hidden" name="PaxType[]" value="2">
						<input type="hidden" name="LeadPassenger[]" value="false">
						
                        
					</li>
					<?php if($input['guestnationality']!=$input['CountryCode'])
				   {?>
				   <li>
                        <input type="text" name="PassportNo[]" placeholder="Enter Passport number" class="w240 ie6Input required_field" id="guest_email">
                   </li>
				   <li>
                        <input type="text" name="PassportIssueDate[]" placeholder="Enter Passport Issue date" class="w240 ie6Input required_field" id="guest_email">
                   </li><li>
                        <input type="text" name="PassportExpDate[]" placeholder="Enter Passport expiry Date" class="w240 ie6Input required_field" id="guest_email">
                   </li>
							
                   <?php } }?>
						
			
		    </ul>
			<?php } ?>
			</div>
			<input type="submit" name="submit">
			</form>
               </div>
               <!-- Continue as guest form container end here -->
               
	      
            </div>
        		    		
                     </div>
      </div>

      
   </div>
</div>


</div>
              <!-- <div class="tabHead"><ul><li>ABT Login</li></ul></div>-->
            </div><div class="ytColm3">
               <aside class="travelItenary">
                  <div class="totalPayInf hotelPay">
                     <h2>Fare Details</h2>
                     <ul class="noListStyle">
                        <li class="first-chd">
						
                           <div class="label">Per room per night</div>
                           <div class="PriceSec"><span class="RupeeSign whiteall">Rs.</span><span class="ccoutRoomCost whiteall"></span></div>
                        </li>
                        <li>
                           <div class="label">{{$input['noofrooms']}} Room x {{$diff->format("%a")}} Night</div>
                           <div class="PriceSec whiteall"><span class="RupeeSign whiteall">Rs.</span>{{$input['RoomPrice'][0]}}</div>
                        </li>
                        <li>
                           <div class="label">Extra Guest Charges  	</div>
                           <div class="PriceSec"> <span class="RupeeSign whiteall">Rs.</span class="whiteall">{{$input['ExtraGuestCharge'][0]}}</div>
                        </li>
                        <li class="">
                            
                           
                           
                          	 <div class="label">Fees &amp; Taxes 	</div>
                           
                           
                           <div class="PriceSec whiteall"> <span class="RupeeSign whiteall">Rs.</span>{{$input['ServiceTax'][0]}}</div>
                        </li>
                     	
                        
                      	<li class="discountSecCCout invisible">
                           <div class="label">Discount	</div>
                           <div class="PriceSec"> <span class="RupeeSign whiteall">Rs.</span><span class="discountSecCCoutVal">{{$input['Discount'][0]}}</span></div>
                        </li>
                     </ul>
                     <div class="totalPrice">
                        <sub class="you-pay-txt" style="">You Pay</sub><small><sub class="RupeeSign whiteall">Rs.</sub><span class="totalStep2CCout">{{$input['OfferedPriceRoundedOff'][0]}}</span></small>
                     </div>
                  </div>
               </aside>
			  
            </div></div>				
							
							
                        </div>
                    </div>
                  </div>
           </section>
        
@stop