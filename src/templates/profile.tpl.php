<?php
    include 'partials/header.tpl.php';
    ?>
<body>
 
<?php
    include 'partials/nav.tpl.php';
?>
     <h5><?=$title;?></h5>
     <div class="detalles">
    <h2>Detalles de usuario</h2><br>
    Nombre: <?=$_SESSION['user']->uname;?><br>
    Correo: <?=$_SESSION['user']->email;?><br>
    Rol:    <?=$_SESSION['user']->rol;?>
    </div>
</body>
</html>