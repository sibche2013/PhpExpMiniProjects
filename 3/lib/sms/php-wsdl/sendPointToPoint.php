<?php
// turn off the WSDL cache
ini_set("soap.wsdl_cache_enabled", "0");
try {
	$client = new SoapClient("http://37.130.202.188/class/sms/wsdlservice/server.php?wsdl",array('trace' => 1));
	$user = "";
	$pass = "";
	$fromNum = "";
	$toNum = array("9121111111","9122222222");
	$messageContent = array("تست 1","تست 2");
	$op  = "pointtopoint";
	//If you want to send in the future  ==> $time = '2016-07-30'

	$time = '';

	echo $client->SendSMS($fromNum,$toNum,$messageContent,$user,$pass,$time,$op);
	echo $status;
} catch (SoapFault $ex) {
	echo $ex->faultstring;
}
?>
