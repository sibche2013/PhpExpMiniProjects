<?php

//Load Init.php
  require_once 'init.php';
  require_once 'lib/jdf.php';
//Save User Comment
function saveComments($colors, $continent)
{
  //Join Colors Array
  $checkBox = implode(',', $colors);
  //Comment Line For Save In comments.txt
    $lineComment= $checkBox ."-".$continent."-".$GLOBALS['_SERVER']['REMOTE_ADDR']."\n";
    file_put_contents(COMMENT_DB, $lineComment, FILE_APPEND);
    addCookie('SendMsg','نظر شما با موفقیت ثبت شد.');
}
//Count Number Of Colors | Number Of IPs | Number Of Continents 
function countCIC($color){
  $count = file_get_contents(COMMENT_DB);
  return substr_count($count,$color);
}
//Add Cookie
function addCookie($name,$msg,$time=1)
{
  setcookie($name, $msg, time() + ($time), '/');
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}