<?php
    include 'partials/header.tpl.php';
    ?>
<?php
    include 'partials/nav.tpl.php';
?>
    <?php if(!isset($_COOKIE["cookmail"])&&!isset($_COOKIE["cookpassword"])&&!isset($_COOKIE["cookuser"])):?>
        <form action="?url=logaction" method="POST">
        <h5><?=$title;?></h5>
        <input name="mail" placeholder="Correo electrónico" id="mail" type="mail">
        
        <input name="password" placeholder="Contraseña" id="passwd" type="password">
        <div class="recuerdameDiv">
        <label class="recuerdame">Recuerdame en este equipo</label><input name="remember" id="recordar" type="checkbox">
        
        </div>
        <button id="send" class="buttons">ENVIAR</button>
    </form>
    <?php else:?>
        <p>Tiene una cookie del user: <?=$_COOKIE["cookuser"];?> de la ultima sesión:<?=date('l,d,F Y;H:i:s');?></p>
        <form action="?url=cookie" method="POST">
        <button name="login" value="">Iniciar sesión</button>
        <br>
        <button name="destroy" value="">No logear</button>
        </form>
        <?php endif;?>
    
</body>
</html>