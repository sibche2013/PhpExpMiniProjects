<?php
//Base Url of your Project
const BASE_URL = 'http://phpexp.test/7learn/exam/6/';
//Base Path Of your Project
const BASE_PATH = 'C:\\lara\\www\\phpexp\\7learn\\exam\\6\\';
const SITE_TITLE = 'مینی پروژه 6 : مدیریت کوکی ها - یک صفحه  PHPبنویسید که با رابط کاربر بتوانید کوکی تعریف کنید و یا
کوکی های موجود در مرورگر را حذف کنید.';
require_once 'functions.php';
//Check Form is sent with post method Or not ?
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //Add Cookie
  addCookie($_POST['name'],$_POST['text'],$_POST['time']);
}elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
  //Remove Cookie
  if (isset($_GET['removeCookie'])) {
    deleteCookies($_GET['removeCookie']);
  }
}