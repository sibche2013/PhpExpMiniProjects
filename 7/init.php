<?php
//Base Url of your Project
const BASE_URL = 'http://phpexp.test/7learn/exam/7/';
//Base Path Of your Project
const BASE_PATH = 'C:\\lara\\www\\phpexp\\7learn\\exam\\7\\';
//Path Of Json Database
const COMMENT_DB = BASE_PATH . 'db\\comments.txt';
const SITE_TITLE = 'مینی پروژه 7 : کامنت گذاری - فرم ارسال کامنت را ایجاد کنید و همه کامنت های ارسال شده را در یک فایل
ذخیر کرده و آن ها را با اطلاعاتشان در یک صفحه نشان دهید.';
require_once 'functions.php';
//Check Form is sent with post method Or not ?
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //Save Comments
    saveComments($_POST['name'], $_POST['email'], $_POST['comment']);
}