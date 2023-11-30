<?php
    include_once '../helpers/sesion_helper.php';
    include_once '../models/Reserva.php'; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Attendance Dashboard | By Code Info</title>
  <link rel="stylesheet" href="estilos/historial_estilos.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <script src="https://kit.fontawesome.com/8680de2650.js"></script>
       <!-- Fonts de google--> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
<header>
  <div class="logo">
      <img src="img/Logo.png" alt="Logo de la página web">
  </div>
  <div class="barra-busqueda">
    <h1>Historial de Reservas</h1>
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
      <a href="HistorialReservas.php">
          <i class="bx bx-calendar" alt = 'seccion de calendario de reservas'></i>
      </a>
  </div>
  </section>
</header>
    
<section class="attendance">
  <div class="attendance-list">
    <h1>Listado de Reservas de: <?php echo $_SESSION['username']; ?></h1>
    <table class="table">
      <thead>
      <tr>
        <th>Nombre del Restaurante</th>
        <th>Número de Personas</th>
        <th>Fecha</th>
        <th>Hora</th>
      </tr>
    </thead>
    <tbody>
    <?php
      // Mostrar datos en la tabla
      $init = new Reserva;
      $reservas = $init->findReservas($_SESSION['username']);
      if (isset($reservas) && is_array($reservas)) {
        foreach ($reservas as $reserva) {
          
      ?>
          <tr> 
          <td> <?php echo $reserva->nombre_rest ?> </td>
          <td> <?php echo $reserva->num_personas ?> </td>
          <td> <?php echo $reserva->fecha ?> </td>
          <td> <?php echo $reserva->hora ?> </td>
           </tr> 
           <?php
        }
      } 
      else
      {
        echo "<tr><td colspan='4'>No hay reservas</td></tr>";
      }
      ?>
      </tbody>
    </table>
    <div class="form-group">
    <div>      
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
            <li><a href="HistorialReservas.php">Historial de Reservas</a></li>
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
