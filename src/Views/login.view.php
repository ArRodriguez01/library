<?php
    include 'templates/header.view.php';
    ?>
    <main>
      <form action='/login/login' method='POST'>
        <label>Username</label>
        <input type='text' name='username' id='username' placeholder='username' ><br>
        <label>Password</label>
        <input type='password' name='password' id='password' placeholder='password'><br>
        <button>Log in</button>
    </form>
</main>
