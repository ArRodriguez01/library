<?php
    require 'src/db.php';
    // coger $_REQUEST['mail'] y ['password']
    // comprobar si existen
    // Si existe => dashboard y abrir sesion user
    // Si no existe => volver a home o formulario
    $db=connectMysql($dsn,$dbuser,$dbpass);
   
    if(!empty($_POST['mail'])&& !empty($_POST['password'])){
        if(isset($_POST['mail'])&&isset($_POST['password'])){
            $mail=filter_input(INPUT_POST,'mail',FILTER_SANITIZE_EMAIL);
            $passwd=filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
            if(auth($db,$mail,$passwd)){
                header('Location:?url=dashboard');
                if($_POST['remember']){
                    setcookie("cookmail",$_POST['mail']);
                    setcookie("cookpassword",$_POST['password']);
                    setcookie("cookuser",$_SESSION['user']->uname);
                    setcookie("cooktime",getdate());
                }
            }else{
                header('Location:?url=login');
            }
            
            
            
            
        }
    }