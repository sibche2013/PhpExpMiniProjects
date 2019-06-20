
<?php
ini_set("soap.wsdl_cache_enabled", "0");
$client = new SoapClient("http://37.130.202.188/class/sms/wsdlservice/server.php?wsdl");

$username = '';
$password = '';
$ticket_id = '';

echo $client->GetTicketDetail($username,$password,$ticket_id);

?>