<?php
    //render template home
    require 'src/render.php';
    $title="LOGEATE";
    echo render('login',['title'=>$title]);