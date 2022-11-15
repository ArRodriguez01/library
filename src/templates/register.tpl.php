<?php
    include 'partials/header.tpl.php';
    ?>
<?php
    include 'partials/nav.tpl.php';
?>
    <form action="?url=registeraction" method="POST">
        <h5><?=$title;?></h5>
        <input name="mail" placeholder="Correo electrónico" id="mail" type="mail">
        <input name="password" placeholder="Contraseña" id="passwd" type="password">
        <input name="uname" placeholder="Nombre de Usuario" id="uname" type="text">
        <select name="rol" id=rol class="buttons">
            <option value="alumno">Alumno</option>
            <option value="profesor">Profesor</option>
        </select>
        <button id="send" class="buttons">Registrate</button>
    </form>
</body>
</html>