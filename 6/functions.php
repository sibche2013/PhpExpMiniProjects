<?php

//Load Init.php
  require_once 'init.php';
  //For Add Cookie
function addCookie($name,$msg,$time)
{
  setcookie($name, $msg, time() + ($time), '/');
  setcookie('SendMsg', "کوکی $name شما با موفقیت افزوده شد.", time() + (1), "/"); // 1 Second
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}

//For Delete Cookies
function deleteCookies($name){
  setcookie ($name, "", time() - 3600, '/');
  setcookie('SendMsg', "کوکی $name شما با موفقیت حذف شد.", time() + (1), "/"); // 1 Second
    header('Location: ' . BASE_URL);
}