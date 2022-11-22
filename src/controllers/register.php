<?php
    //render template home
    require 'src/render.php';
    $title="REGISTRATE";
    echo render('register',['title'=>$title]);