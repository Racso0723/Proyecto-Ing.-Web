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
        <script src="https://kit.fontawesome.com/8680de2650.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
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
              <select id="nombre_rest" name="nombre_rest" required>
                <option value="">Seleccionar restaurante</option>
                <option value="Mole o Mas">Mole o Mas </option>
                <option value="Global Palate">Global Palate</option>
                <option value="Raices Naturales"> Raices Naturales</option>
                <option value="Giorgios">Giorgios</option>
                <option value="Don Ming">Don Ming</option>
                <option value="Sabores Indigenas"> Sabores Indigenas</option>
                <option value="El Bernabeu">El Bernabeu</option>
                <option value="Kessler Galimany">Kessler Galimany</option>
                <option value="Rincon del Cafe"> Rincon del Cafe</option>
              </select>
              
            </div>
            <div class="form-group">
              <button type="submit">Realizar reserva</button>
            </div>
            <div id="errores">
                <?php flash('correcto') ?>
                <?php flash('numero') ?>
                <?php flash('sesion') ?>
                <?php flash('horario') ?>
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
<div class="footerContainer">
    <div class="socialIcons"> 
        <a href=""><i class = "fa-brands fa-facebook"></i></a>
        <a href=""><i class = "fa-brands fa-instagram"></i></a>
        <a href=""><i class = "fa-brands fa-twitter"></i></a>
    </div>
    <div class="footerNav">
        <ul>
            <li><a href="InicialPrueba.php">Inicial</a></li>
            <li><a href="historialReservas.php">Historial de Reservas</a></li>
            <li><a href="Reservas.php">Hacer Reserva</a></li>
            <li><a href="../controllers/Users.php?q=logout">Logout</a></li>
        </ul>
    </div> 
    <div class="footerBottom">
        <p>Copyright 2023; Elaborado por <span class="designer"> Oscar & Javier </span></p>
    </div>
</div>
</footer>
</body>
</html>