<?php
    include 'partials/header.tpl.php';
    ?>

<?php
    include 'partials/nav.tpl.php';
?>
<body>
<h5><?=$title;?></h5>
<main>
    
    <form action="?url=settingaction" method="POST"> 
    <h3>Personalización</h3>

    <div class="pers">
    <label>Color fondo</label>
    <select name="colorfondo" class="buttonPer">
        <option value="white">Blanco</option>
        <option value="lightgray">Negro</option>
        <option value="#8BC4E0">Azul</option>
    </select>
    </div>
    <button id="bt1" class="buttons">Guardar</button>
    </form>
</main>
</body>
</html>