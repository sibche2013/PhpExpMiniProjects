﻿<?php



		$url = "37.130.202.188/services.jspd";
		$param = array
					(
						'uname'=>'',
						'pass'=>'',
						'op'=>'checkmessage',
						'messageid'=>''
					);
					
		$handler = curl_init($url);             
		curl_setopt($handler, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($handler, CURLOPT_POSTFIELDS, $param);                       
		curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
		$response2 = curl_exec($handler);
		$response2 = json_decode($response2);
		
		if(isset($response2->statusMessage)){
			echo $response2->statusMessage;  
			echo '<br />';	
			echo $response2->validMessage;
		}else {
			$res_code = $response2[0];
			$res_data = $response2[1];
			echo $res_data;
		}


//statusMessage : Finish => پایان یافته, NoContactWithTheOperator => عدم برقراری با اپراتور, Interacting =>  در حال ارتباط, 
//                NoAuthentication => عدم احراز هویت, Active => فعال, NoSendSMS => عدم ارسال پیامک, Cancel => انصراف 

//validMessage: approve => تایید شده, cancel => رد شده, notconfirm => منتظر تایید
?>
