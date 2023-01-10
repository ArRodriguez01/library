<?php
    include 'templates/header.view.php';
    ?>
    <main>
      <form action='/register/register' method='POST'>
         <label>Mail</label>
        <input type='text' name='mail' id='mail' placeholder='mail' ><br>
        <label>Username</label>
        <input type='text' name='username' id='username' placeholder='username'><br>
        <label>Password</label>
        <input type='password' name='password' id='password' placeholder='password'><br>
        <button>Register</button><br>
    </form>
</main>