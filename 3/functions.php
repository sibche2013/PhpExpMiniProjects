<?php

//Load Init.php
  require_once 'init.php';
  //For get SMSs From json file
function getSMSs($return_assoc = 0)
{
    $smss  = json_decode(file_get_contents(SMS_DB), $return_assoc);
    return array_reverse((array)$smss);
}

//Send & Save SMS
function sendSMS($number, $msg,$sms)
{
  $url = "37.130.202.188/services.jspd";
		
  $rcpt_nm = array($number);
  $param = array
        (
          'uname'=>'sibche2013',
          'pass'=>'YourPass',
          'from'=>'+98100020400',
          'message'=>$msg,
          'to'=>json_encode($rcpt_nm),
          'op'=>'send'
        );
        
  $handler = curl_init($url);             
  curl_setopt($handler, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($handler, CURLOPT_POSTFIELDS, $param);                       
  curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
  $response2 = curl_exec($handler);
  
  $response2 = json_decode($response2);
  //Sent Or No
  $res_code = $response2[0];
  //Bulk Code
  $res_data = $response2[1];

    //Save SMS into Json DB
    $smss  = getSMSs(1);
    $sms['codeSMS']=$res_data;
    $sms=(object)$sms;
    $smss[] = (array)$sms;
    $smss_json = json_encode($smss);
    file_put_contents(SMS_DB, $smss_json);

    setcookie('SendMsg', 'پیام شما با موفقیت ارسال شد.', time() + (1), "/"); // 1 Second
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
//Sms Credit
function getCredit(){
   ini_set("soap.wsdl_cache_enabled", "0");
$client = new SoapClient("http://37.130.202.188/class/sms/wsdlservice/server.php?wsdl");
$user = "sibche2013";
$pass = "YourPass";
echo round($client->GetCredit($user,$pass));
}
//Get SMS Status
function getStatus($id){
  ini_set("soap.wsdl_cache_enabled", "0");
$client = new SoapClient("http://37.130.202.188/class/sms/wsdlservice/server.php?wsdl");
$user = "sibche2013";
$pass = "YourPass";

echo $client->GetDelivery($user,$pass,$id);
}