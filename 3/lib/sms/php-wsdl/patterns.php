<?php
	$client = new SoapClient("http://37.130.202.188/class/sms/wsdlservice/server.php?wsdl"); 
	$user = ""; 
	$pass = ""; 
	$fromNum = "+98100009"; 
	$toNum = array("9360000994"); 
	$pattern_code = "139"; 
	$input_data = array( "tracking-code" => "1054 4-41","name" => "PAnel"); 

	echo $client->sendPatternSms($fromNum,$toNum,$user,$pass,$pattern_code,$input_data);
?>
