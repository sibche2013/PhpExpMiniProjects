<?php

//Load Init.php
  require_once 'init.php';

//Add Cookie Function
function addCookie($name,$msg,$time=1)
{
  setcookie($name, $msg, time() + ($time), '/');
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}
//Slider -->http://slippry.com/
  //For get Image Details From json file
function getImages($return_assoc = 0)
{
      $imgs  = json_decode(file_get_contents(IMG_DB), $return_assoc);
      return array_reverse((array)$imgs);
}
  //Write image Details To json file
function saveImage(stdClass $name){
    $imgs  = getImages(1);
    $imgs[] = (array)$name;
    $imgs_json = json_encode($imgs);
      file_put_contents(IMG_DB, $imgs_json);
      return true;
}