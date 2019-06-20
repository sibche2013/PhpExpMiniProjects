<?php
//Base Url of your Project
const BASE_URL = 'http://phpexp.test/7learn/exam/5-15/';
//Base Path Of your Project
const BASE_PATH = 'C:\\lara\\www\\phpexp\\7learn\\exam\\5-15\\';
//Path Of Json Database
const LOG_DB = BASE_PATH . 'logs\\logs.txt';
const PER_PAGE = 20;
const SITE_TITLE = 'مینی پروژه 5 و 15 : لاگ کردن بازدید ها و صفحه بندی پروژه - اطلاعات مختلف بازدید از تمام صفحات وب در یک پوشه را در یک فایل لاگ
کنید. هر لاگ در یک خط. حاوی زمان بازدید و  IPکاربر و ... - در پروژه  5که لاگ بازدیدها را ثبت کردید، یک فایل  logs.phpبنویسید که
لاگ ها را با قابلیت انتخاب صفحه نمایش دهید. در هر صفحه  20لاگ
نشان داده شود';
require_once 'functions.php';