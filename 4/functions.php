<?php
//Load Init.php
  require_once 'init.php';
//Remove A File
function removeFile($dir)
{
    if (file_exists($dir)) {
        unlink($dir);
    } else {
        echo "فایل مورد نظر شما در مکان $dir وجود ندارد!";
    }
}
//Add Cookie Function
function addCookie($name,$msg,$time=1)
{
  setcookie($name, $msg, time() + ($time), '/');
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}