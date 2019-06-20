<?php

//Load Init.php
  require_once 'init.php';

//Show Menu
function menu($data, $parent=0)
{
    $res='';
    foreach ($data as $arr) {
      //Check Is There a menu with that parent_id?
        if ($arr['parent_id']==$parent) {
          $res.='<li>'.$arr['link']; 
          $sub=menu($data, $arr['id']);
          //if menu has child print them until last
            if ($sub) {
                $res.='<ul class="sub-menu">'.$sub.'</ul>';
            }
            $res.='</li>';
        }
    }
    return $res;
}