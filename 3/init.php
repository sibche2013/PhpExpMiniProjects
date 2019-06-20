<?php
//Base Url of your Project
const BASE_URL = 'http://phpexp.test/7learn/exam/3/';
//Base Path Of your Project
const BASE_PATH = 'C:\\lara\\www\\phpexp\\7learn\\exam\\3\\';
//Path Of Json Database
const SMS_DB = BASE_PATH . 'db\\sms.json';
const SITE_TITLE = 'مینی پروژه 3 : ارسال SMS - فرمی را ایجاد کنید که با ورود شما تماس و متن پیامک، یک  smsبه آن
شماره ارسال گردد. (نیازمند پنل  smsهستید که  apiداشته باشید)';
require_once 'functions.php';
//Check Form is sent with post method Or not ?
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //Send & Save SMS with API
  sendSMS($_POST['number'],$_POST['text'],$_POST);
}