<?php
    include_once '../helpers/sesion_helper.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/EstilosR.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
       <!-- Fonts de google--> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">

    <title>Reservas</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/Reserva Ya!-logos.jpeg" alt="Logo de la página web">
        </div>
        <div class="Titulo">
            <h1>Reservas</h1>
        </div>
        <section class = 'seccion-iconos'>
            <div class="seccion-redes">
                <i class="bx bxl-instagram" alt="logo de facebook"></i>
                <i class="bx bxl-facebook-circle" alt= 'logo de instagram'></i> 
                <a href="../controllers/Users.php?q=logout">
                    <i class="bx bxs-log-out" alt= "simbolo salir sesión Logout"></i>
                </a>
            </div>
        <div class="seccion-calendario">
            <i class="bx bx-calendar" alt = 'seccion de calendario de reservas'></i>
        </div>
        </section>
    </header>
    <section class="container">
        <div class="form-container">
          <h1>Reservar en nuestro restaurante <?php echo $_SESSION['username']; ?> </h1>
          <form action="..\controllers\Reservas.php" method="post"> 
            <div class="form-group">
                <input type = 'hidden' name="type" value="reserva">
                <label for="num-persons">Número de personas:</label>
                <input type="number" id="num_personas" name="num_personas" placeholder= 'Ingrese el numero de personas' required>
            </div>              
            <div class="form-group">
              <label for="reservation-date">Fecha de reserva:</label>
              <input type="text" id="fecha" placeholder= 'YYYY-MM-DD' name="fecha" required>
            </div>
            <div class="form-group">
              <label for="reservation-time">Hora de reserva:</label>
              <input type="text" id="hora" name="hora"  placeholder= 'Ingrese hora a su reserva'required>
            </div>
            <div class="form-group">
              <label for="reservation-time">Nombre del Restaurante:</label>
              <input type="text" id="nombre_rest" name="nombre_rest"  placeholder= 'Ingrese el nombre del restaurante' required>
              
            </div>
            <div class="form-group">
              <button type="submit">Realizar reserva</button>
            </div>
            <div id="errores">
                <?php flash('correcto') ?>
                <?php flash('sesion') ?>
                <?php flash('horario') ?>
                <?php flash('nombre') ?>
                <?php flash('hora') ?>
                <?php flash('fecha') ?>
            </div>
          </form>
        </div>
        <div class="reserva-image">
          <img src="img/Reservas.jpg" alt="imagen reservas"/>
        </div>
    </section>
    <footer>
        <div id="info-footer">
            <ul>
                <p>©Copyright 2023 ReservaYa</p>
                <hr>
                <p>Contáctenos:507-6567-6768</p>
            </ul>
        </div>
        <div id="info-enlaces">
            <ul>
                <li><a href="InicialPrueba.html">Página de Inicio</a></li>
                <li><a href="calendario_reservas.html">Calendario de Reservas</a></li>
            </ul>
        </div>
        <div id="redes-footer">
            <a href="https://www.facebook.com">
                <i class="bx bxl-facebook-circle" alt="logo de facebook"></i>
            </a>
            <a href="https://www.instagram.com">
                <i class="bx bxl-instagram" alt= 'logo de instagram'></i>
            </a>
        </div>
</footer>
</body>
</html>