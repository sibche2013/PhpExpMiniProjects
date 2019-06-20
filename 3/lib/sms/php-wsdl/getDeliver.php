
<?php
ini_set("soap.wsdl_cache_enabled", "0");
$client = new SoapClient("http://37.130.202.188/class/sms/wsdlservice/server.php?wsdl");

$user = "";
$pass = "";
$uinqid = "";

echo $client->GetDelivery($user,$pass,$uniqid);

?>