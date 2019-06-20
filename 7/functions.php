<?php

//Load Init.php
  require_once 'init.php';
  require_once 'lib/jdf.php';
//Save Comments
function saveComments($name, $email, $comment)
{
    //Replace Enter Or New Line With \n Character
    $comment=str_replace("\n", "\\n", $comment);
    $lineComment=$name."-".$email."-".$comment."-".time()."\n";
    file_put_contents(COMMENT_DB, $lineComment, FILE_APPEND);
    setcookie('SendMsg', "نظر شما با موفقیت ثبت شد.", time() + (1), "/"); // 1 Second
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}