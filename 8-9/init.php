<?php
//Base Url of your Project
const BASE_URL = 'http://phpexp.test/7learn/exam/8-9/';
//Base Path Of your Project
const BASE_PATH = 'C:\\lara\\www\\phpexp\\7learn\\exam\\8-9\\';
//Path Of Json Database
const COMMENT_DB = BASE_PATH . 'db\\comments.txt';
const COLORS_CODE = array('dodgerblue','#ff4646','forestgreen','#323232');
const COLORS_LABEL = array('آبی','قرمز','سبز','مشکی');
const COLORS_TITLE = 'جدول و چارت نظر سنجی رنگ های مورد علاقه کاربران';
const CONTINENT_LABEL = array('آفریقا','اروپا','آمریکا','استرالیا');
const CONTINENT_TITLE = 'جدول و چارت نظر سنجی قاره های مورد علاقه کاربران';
const SITE_TITLE = 'مینی پروژه 8 و 9 : نظر سنجی و محافظت از نظر سنجی - فرم ارسال کامنت را ایجاد کنید و همه کامنت های ارسال شده را در یک فایل
ذخیر کرده و آن ها را با اطلاعاتشان در یک صفحه نشان دهید - با استفاده از فایل ها یک فرم نظرسنجی واقعی ایجاد کنید';
require_once 'functions.php';
//Check Form is sent with post method Or not ?
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //Get User IP
    $userIP=$GLOBALS['_SERVER']['REMOTE_ADDR'];  
    //Check User Voted Befor Or No
    if (countCIC($userIP)==1) {
        addCookie('SendMsg','شما قبلا رای دادین! فقط یه مرتبه میتونید رای بدین@');
    }else{
    //Save Comments
        saveComments($_POST['colors'], $_POST['continent']);
    }
}