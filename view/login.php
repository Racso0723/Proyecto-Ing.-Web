<?php
    include_once '../helpers/sesion_helper.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilologP.css"/>
    <title>Bienvenido</title>
</head>
<body>
<div class="container" id="container">
  <div class="form-container sign-in-container">
        <form action="../controllers/Users.php" method="post">
      <h1>Logea aquí</h1>
      <span>Usa tu correo o ID</span>
            <input type = 'hidden' name="type" value="login">
      <input type="text" id="username" name="username" placeholder="Ingrese su nombre de usuario o email" required>
      <input type="password" id="pass" name="pass" placeholder="Ingrese su contraseña" required>
      <br>
      <?php flash('login')?>
      <br>
      <button>Comenzar</button>
    </form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-right">
        <h1>Primera vez?</h1>
        <p>Unete y reservaYA en los mejores restaurantes del país.</p>
        <a href = singup.php>
          <button class="ghost" id="signUp">Regístrate</button>
        </a>
      </div>
    </div>
  </div>
</div>
</body>
</html>