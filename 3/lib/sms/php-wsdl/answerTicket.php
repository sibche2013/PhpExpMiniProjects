
<?php
// turn off the WSDL cache
ini_set("soap.wsdl_cache_enabled", "0");
try {
    $client = new SoapClient("http://37.130.202.188/class/sms/wsdlservice/server.php?wsdl");
    $user = "";
    $pass = "";
    $ticket_id = "";
    $description = 'توضیحات';
    $file = 'http://yoururl/file.zip';   /// .zip

    echo $client->AnswerTicket($user,$pass,$ticket_id,$description,$file);
    echo $status;
} catch (SoapFault $ex) {
    echo $ex->faultstring;
}
?>

