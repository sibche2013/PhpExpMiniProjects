<?php
//Base Url of your Project
const BASE_URL = 'http://phpexp.test/7learn/exam/2/';
//Base Path Of your Project
const BASE_PATH = 'C:\\lara\\www\\phpexp\\7learn\\exam\\2\\';
//Path Of Json Database
const EMAIL_DB = BASE_PATH . 'db\\emails.json';
const SITE_TITLE = 'مینی پروژه 2 : تماس با بخش های مختلف سایت - فرمی بسازید که کاربر بتواند پیامی را به بخش های مختلف سایت (فنی،
مالی، مدیریت، پشتیبانی) ارسال کند.';
require_once 'functions.php';
//Check Form is sent with post method Or not ?
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //Save Emails On Json File
  saveEmail((object)$_POST);
  //Send Email with PHPMailer Class
  sendContactMail($_POST['name'],$_POST['email'],$_POST['subject'],$_POST['deartment'],$_POST['text']);
}
