<?php
//Base Url of your Project
const BASE_URL = 'http://phpexp.test/7learn/exam/1/';
//Base Path Of your Project
const BASE_PATH = 'C:\\lara\\www\\phpexp\\7learn\\exam\\1\\';
//Path Of Json Database
const EMAIL_DB = BASE_PATH . 'db\\emails.json';
//Site Title
const SITE_TITLE = 'مینی پروژه 1 : تماس با - فرمی بسازید که کاربر بتواند پیامی را به مدیر سایت ایمیل کنید.';
require_once 'functions.php';
//Check Form is sent with post method Or not ?
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //Save Emails On Json File
  saveEmail((object)$_POST);
  //Send Email with PHPMailer Class
  sendContactMail($_POST['name'],$_POST['email'],$_POST['subject'],$_POST['text']);
}
