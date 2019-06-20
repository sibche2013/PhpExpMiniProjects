<?php
//Base Url of your Project
const BASE_URL = 'http://phpexp.test/7learn/exam/12/';
//Base Path Of your Project
const BASE_PATH = 'C:\\lara\\www\\phpexp\\7learn\\exam\\12\\';
const SITE_TITLE = 'مینی پروژه 12 : اسلایدر - یک اسلایدر جی کوئری پیدا کنید که اطلاعات اسلاید ها و تصاویر را از سمت
سرور خوانده و آن ها را نشان دهد.';
const IMG_PATH= BASE_PATH. 'images\\';
const IMG_DB= BASE_PATH. 'db\\images.json';
require_once 'functions.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //Upload File In File Directory
  move_uploaded_file($_FILES['image']['tmp_name'],IMG_PATH.$_FILES['image']['name']);
  $images['img']['title']=$_POST['title'];
  $images['img']['loc']=$_FILES['image']['name'];
  saveImage((object)$images);
  addCookie('SendMsg', 'تصویر مورد نظر با موفقیت آپلود شد.');
}