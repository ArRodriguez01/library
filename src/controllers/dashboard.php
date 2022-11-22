<?php
    //render template home
    require 'src/render.php';
    $title="Tus cosas";
    
    echo render('dashboard',['title'=>$title]);