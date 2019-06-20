<?php
// turn off the WSDL cache
ini_set("soap.wsdl_cache_enabled", "0");
try {
	$client = new SoapClient("http://37.130.202.188/class/sms/wsdlservice/server.php?wsdl");
	$user = "";
    $pass = "";
	$bulkid  =  "";

	echo $client->deleteperiod($user,$pass,$bulkid);
	echo $status;
} catch (SoapFault $ex) {
    echo $ex->faultstring;
}
?>