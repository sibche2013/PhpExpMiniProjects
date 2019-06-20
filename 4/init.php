<?php
//Base Url of your Project
const BASE_URL = 'http://phpexp.test/7learn/exam/4/';
//Base Path Of your Project
const BASE_PATH = 'C:\\lara\\www\\phpexp\\7learn\\exam\\4\\';
//Files Path
const FILES_PATH= BASE_PATH. 'files\\';
const SITE_TITLE = 'مینی پروژه 4 : آپلود و حذف فایل - فرمی را برای آپلود فایل ایجاد کنید که کاربر بتواند فایلهای خود را سمت سرور
آپلود کند و هر زمان که خواست بتواند آن ها را از طریق فرمی دیگر حذف
کند!';
require_once 'functions.php';
//Check Form is sent with post method Or not ?
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //Upload File In File Directory
  move_uploaded_file($_FILES['file']['tmp_name'],FILES_PATH.$_FILES['file']['name']);
  addCookie('SendMsg', 'فایل مورد نظربا موفقیت آپلود شد.');
}
if(($_SERVER['REQUEST_METHOD'] == "GET") && (!empty($_GET['removeFile']))){
  removeFile($_GET['removeFile']);
  addCookie('SendMsg', 'فایل مورد نظربا موفقیت حذف شد.');
}



