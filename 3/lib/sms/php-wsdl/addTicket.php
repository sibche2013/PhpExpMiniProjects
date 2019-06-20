
<?php
// turn off the WSDL cache
ini_set("soap.wsdl_cache_enabled", "0");
try {
    $client = new SoapClient("http://37.130.202.188/class/sms/wsdlservice/server.php?wsdl");
    $user = "";
    $pass = "";
    $subject = 'موضوع';
    $description = 'توضیحات';
    $type = 'fiscal';   //'fiscal','webservice','problem','lineservices'
    $importance = 'low';  //'low','middle','quick','acute'
    $sms_notification = 'yes'; //'yes','no'
    $file = 'http://yoururl/file.zip';   /// .zip

    echo $client->AddTicket($user,$pass,$subject,$description,$type,$importance,$sms_notification,$file);
    echo $status;
} catch (SoapFault $ex) {
    echo $ex->faultstring;
}
?>

