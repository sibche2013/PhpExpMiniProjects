<?php


		//$type = "credit";					//etebari
		//$type = "fixed";					//sabet
		
		
		/*
			agar ersal koli ast be sorate :
				$city_id = json_encode(array("city_id1","city_id2"));
				unset($pre_id);
				
				
			agar ersal pish shomareh be sorate : 
				$city_id = "city_id1";
				$pre_id = json_encode(array("pre_id1","pre_id2"));
		
		*/
		
		
		$url = "37.130.202.188/services.jspd";
		$param = array
					(
						'uname'=>'',
						'pass'=>'',
						'city_id'=>$city_id,
						'pre_id'=>$pre_id,
						'number_type'=>$type,
						'op'=>'countrycount'
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