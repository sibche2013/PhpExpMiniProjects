<?php

//Load Init.php
  require_once 'init.php';

//Get File Size Format
function sizeFormat($size) {
  $mod = 1024;
  //String Into Array
  $units = explode(' ','B KB MB GB TB PB');
  for ($i = 0; $size > $mod; $i++) {
      $size /= $mod;
  }
  return round($size, 2) . ' ' . $units[$i];
}

//Show Files & Folders
function fileManager(){
  //Current Location
  $currentLocation=getcwd();
  //Back To Previous Folder
  $currentURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $backTo = dirname($currentURL, 1);
  $str="";
  $str.= "<div class='fileManager'>$currentLocation";
  $str.="<a href='$backTo'><br>Back To Previous Page</a>";
    foreach (glob("*") as $filename) {
      //Check Type Folder Or File
      $type=(is_file($filename))? "File":"Folder";
      //Link To Folders
      $link=(!is_file($filename))?"<a href='".$filename."'>$filename</a>":$filename;
      $str.= "<div class=''>$link <span class='fileSize'> " . sizeFormat(filesize($filename)) . "| $type</span></div>";
  }
  $str.= "</div>";
  echo $str;
}