<?php
//Base Url of your Project
const BASE_URL = 'http://phpexp.test/7learn/exam/11/';
const BASE_PATH = 'C:\\lara\\www\\phpexp\\7learn\\exam\\11\\';
const SITE_TITLE = 'مینی پروژه 11 : گالری - یک صفحه  phpبنویسید که لیست تصاویر کنار خود را به شما نشان داده و
هر تصویر را در ابعاد کوچکی در صفحه وب نشان دهد';
const IMG_PATH= BASE_PATH. 'images\\';
require_once 'functions.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //Upload File In File Directory
  move_uploaded_file($_FILES['image']['tmp_name'],IMG_PATH.$_FILES['image']['name']);
  addCookie('SendMsg', 'تصویر مورد نظر با موفقیت آپلود شد.');
}