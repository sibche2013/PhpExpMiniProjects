<?php
include_once "init.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= SITE_TITLE ?></title>
  <link rel="stylesheet" href="<?=BASE_URL?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=BASE_URL?>assets/css/bootstrap-rtl.min.css">
  <link rel="stylesheet" href="<?=BASE_URL?>assets/css/style.css">

</head>

<body>
  <div class="bg-light container p-5 mt-3">
    <?php 
if(isset($_COOKIE['SendMsg'])):?>
    <div class="alert alert-success" role="alert">
      <?php 
echo $_COOKIE['SendMsg'];
?>
    </div>
    <?php
endif;?>