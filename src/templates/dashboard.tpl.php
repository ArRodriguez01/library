<?php
    include 'partials/header.tpl.php';
    ?>
<?php
    include 'partials/nav.tpl.php';
?>

<h5><?=$title;?><?=$_SESSION['user']->uname;?>(<?=$_SESSION['user']->rol;?>)</h5>
    <?php if(($_SESSION['user'])->rol=="profesor"):?>
    <h3>Examenes por corregir<h3>
    <?php else:?>
    <h3>Tareas por terminar<h3>
    <?php endif;?>
</body>
</html>