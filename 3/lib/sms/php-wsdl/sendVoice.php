<?php
// turn off the WSDL cache
ini_set("soap.wsdl_cache_enabled", "0");
try {
	$client = new SoapClient("http://37.130.202.188/class/sms/wsdlservice/server.php?wsdl");
	$user = "";
    $pass = "";
    $repeat = "1";                     //1 to 3 
	$toNum = array("9122900000");             
	$fileUrl = "http://file_url";      //mp3 or wav
	
	$type = "";  
	$time = '';    			//If you want to send in the future  ==> $time = '2016-07-30'
	
	echo $client->sendvoice($user,$pass,$repeat,$toNum,$type,$fileUrl,$time);
	echo $status;
} catch (SoapFault $ex) {
    echo $ex->faultstring;
}
?>
