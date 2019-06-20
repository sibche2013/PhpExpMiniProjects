<?php

//Load Init.php
  require_once 'init.php';

//Used For This Gallery=> https://fancyapps.com/fancybox/3/
function gallery(){
  $str="";
  $str.= "<div class='gallery'>";
    foreach (glob("*.{jpg,png,gif,JPG,jpeg}",GLOB_BRACE) as $filename) {
      echo '<a data-fancybox="gallery" href="'.$filename.'"><img class="thumbnail" src="'.$filename.'"></a>';
  }
  $str.= "</div>";
  echo $str;
}
//Add Cookie Function
function addCookie($name,$msg,$time=1)
{
  setcookie($name, $msg, time() + ($time), '/');
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}