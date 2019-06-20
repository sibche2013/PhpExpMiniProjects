<?php
//Base Url of your Project
const BASE_URL = 'http://phpexp.test/7learn/exam/14/';
//Base Path Of your Project
const BASE_PATH = 'C:\\lara\\www\\phpexp\\7learn\\exam\\14\\';
const SITE_TITLE = 'مینی پروژه 14 : جستجو - اطلاعات کاربران سایت رو در یک فایل به اسم  users.txtداریم. یک فرم
جستجو بنویسید که در حین تایپ به صورت ایجکس کاربرهای پیدا شده در
فایل با آن کیورد را در زیر فرم جستجو نمایش دهد';
const USERS_DB= BASE_PATH. 'db\\users.txt';
require_once 'functions.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //Get Search Value
  $searchValue=$_POST['search'];
  //Get File Lines In An Array
  $lines = file(USERS_DB);
  if (empty($searchValue)) {
    echo "لطفا کلمه مورد نظر را برای جستجو وارد نمایید.";
  }else{
    foreach ($lines as $key => $value) {
          if (strpos($value, $searchValue)!==false) {
            $value=str_replace('-', '<br>', $value);
              $str=str_replace($searchValue, '<strong>'.$searchValue.'</strong>', $value)."<br>";
              echo $str;
          }
    }
    
  }
}