<?php
    //datos acceso a .env
    $dbhost=$_ENV['DB_HOST'];
    $dbname=$_ENV['DB_NAME']; //base datos
    $dsn="mysql:host={$dbhost};dbname={$dbname};charset=utf8mb4";
    $dbuser=$_ENV['DB_USER'];
    $dbpass=$_ENV['DB_PASSWORD'];