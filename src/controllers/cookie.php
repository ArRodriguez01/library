<?php
require 'src/db.php';
if(isset($_POST['destroy'])||isset($_POST['login'])){
    
    if(isset($_POST['destroy'])){
        setcookie('cookmail',"",time() - 3600);
        setcookie('cookpassword',"",time() - 3600);
        setcookie('cookuser',"",time() - 3600);
        setcookie('cooktime',"",time() - 3600);
        header('Location:?url=login');
    }else{
        if(isset($_COOKIE["cookmail"])&&isset($_COOKIE["cookpassword"])&&isset($_COOKIE["cookuser"])){
            $db=connectMysql($dsn,$dbuser,$dbpass);
            $mail=$_COOKIE["cookmail"];
            $passwd=$_COOKIE["cookpassword"];
            if(auth($db,$mail,$passwd)){
                header('Location:?url=dashboard');
            }else{
                header('Location:?url=login');
            }
        }setcookie("cooktime",getdate());
    }
}else{
    header('Location:?url=login');
}




