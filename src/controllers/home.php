<?php
    //render template home
    require 'src/render.php';
    $title="BIENVENIDOS";
    
    echo render('home',['title'=>$title]);