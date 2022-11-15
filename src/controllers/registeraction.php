<?php
    require 'src/db.php';
    // coger $_REQUEST['mail'] y ['password']
    // comprobar si existen
    // Si existe => dashboard y abrir sesion user
    // Si no existe => volver a home o formulario
    $db=connectMysql($dsn,$dbuser,$dbpass);
    if(isset($_POST['mail'])&&isset($_POST['password'])&&isset($_POST['uname'])&&isset($_POST['rol'])){
        if(!empty($_POST['mail']) && !empty($_POST['password'])&& !empty($_POST['uname'])){
            $rol=filter_input(INPUT_POST,'rol',FILTER_SANITIZE_STRING);
            $mail=filter_input(INPUT_POST,'mail',FILTER_SANITIZE_EMAIL);
            $passwd=filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
            $uname=filter_input(INPUT_POST,'uname',FILTER_SANITIZE_STRING);
            if(registeruser($db,$mail,$passwd,$uname,$rol)){
                header('Location:?url=registergood');
            }else{
                header('Location:?url=register');
            }
        }

    }