<?php


		//$type = "credit";					//etebari
		//$type = "fixed";					//sabet
		
		$url = "37.130.202.188/services.jspd";
		$param = array
					(
						'uname'=>'',
						'pass'=>'',
						'city_id'=>'',
						'number_type'=>$type,
						'op'=>'countrypreid'
					);
					
		$handler = curl_init($url);             
		curl_setopt($handler, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($handler, CURLOPT_POSTFIELDS, $param);                       
		curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
		$response2 = curl_exec($handler);
		
		$response2 = json_decode($response2);
		$res_code = $response2[0];
		$res_data = $response2[1];
		
		
		echo $res_data;


?>