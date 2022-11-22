<?php
function connectMysql(string $dsn,string $dbuser,string $dbpass){
        try{
            $db = new PDO($dsn, $dbuser, $dbpass);
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $db->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

        }catch(PDOException $e){
            die( $e->getMessage());
            
        }
        return $db;
    }
    function auth($db,string $email,string $password):bool{
        $stmt=$db->prepare("SELECT * FROM users WHERE email=:email");
        $res=$stmt->execute([':email'=>$email]);
            if($stmt->rowCount()==1){
                $user=$stmt->fetchAll()[0];
                if(password_verify($password,$user->passw)){
                    $_SESSION['user']=$user;
                    return true;
                }
            }return false;
            
    }
    function registeruser($db,string $email,string $password,string $uname,string $rol):bool{
        $stmt=$db->prepare("INSERT INTO users(email,uname,passw,rol)VALUES(:email,:uname,:passwd,:rol) ");
        $cryptpasswd=password_hash($password,PASSWORD_BCRYPT,['cost'=>'4']);
        if($stmt->execute([':email'=>$email,':uname'=>$uname,':passwd'=>$cryptpasswd,':rol'=>$rol])){
            return true;
        }else{
            return false;
        }

    }
        
        

        
    