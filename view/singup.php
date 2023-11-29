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
			<h1>Crea una cuenta</h1>
			<span>Rellena los siguientes campos: </span> 
      <input type = 'hidden' name="type" value="register">
			<input type="text" id="username" name="username" placeholder="Ingrese su nombre de usuario" required>
			<input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
      <input type="text" id="apellido" name="apellido" placeholder="Ingrese su apellido" required>
      <input type="number" id="edad" name="edad" placeholder="Ingrese su edad" required>
      <input type="text" id="email" name="correo" placeholder="Ingrese su Email" required>
      <input type="password" id="password" name="pass" placeholder="Ingrese su contraseña" required>
      <br>
			  <?php flash('register') ?>
			<br>
			<button>Regístrate</button>
		</form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-right">
				<h1>¿Ya tienes cuenta?</h1>
				<p>Si ya tienes cuenta deberías venir a esta sección</p>
        <a href = "login.php">
				  <button class="ghost" id="signIn">Logea Aquí</button>
        </a>
			</div>
    </div>
  </div>
  
</div>
</body>
</html>