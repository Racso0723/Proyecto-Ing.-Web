<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilosPlatillos.css">
    <script src="principal.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
       <!-- Fonts de google--> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">

    <title>Giorgios</title>
</head>
<body>
<header>
        <div class="logo">
            <img src="img/Logo.png" alt="Logo de la página web">
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
<section id = 'cocina'>
        <div id='container-titulo'>
            <div id="titulo">
                <h2> Giorgios</h2>
            </div>  
                <div id = 'etiquetas'>
                    <div class = 'tag'>
                        <div class="img-tag">
                            <i class="fas fa-parking"></i>
                        </div>
                        <div class="texto-tag">
                            <p>Parking</p>
                        </div>
                    </div>
                    <div class = 'tag'>
                        <div class="img-tag">
                            <i class="fas fa-baby-carriage"></i>
                        </div>
                        <div class="texto-tag">
                            <p>Adaptado a Bebes</p>
                        </div>
                    </div>  
                    <div class = 'tag'>
                        <div class="img-tag">
                            <i class="fas fa-wheelchair-move"></i>
                        </div>
                        <div class="texto-tag">
                            <p>Adaptado para Discapacitados</p>
                        </div>
                    </div>  
                </div>
            
        </div>
    <div id="info-rest">
        <div class = 'contenedor-rest'>
            <img src="img/Pizzeria.jpg" alt = 'Pizzeria Giorgios'>
        </div>
            <section id="detalles-rest">
                <div id="desc-rest">
                    <h3>Descripción del Restaurante</h3>
                    <p>"Fundada en 1970 por la familia italiana Rossi, 'La Famiglia' es un icónico rincón <br> de la auténtica Italia en Panamá. Durante más de 50 años, hemos deleitado a la <br>
                        comunidad con nuestras deliciosas pizzas al horno de leña y platos italianos<br>tradicionales. Nuestra pizzería es un símbolo de la unión familiar y la pasión por la <br> cocina casera italiana, donde cada visita es un viaje a la verdadera Italia".
                    </p>
                    <br><hr><br>
                    <p><strong>Correo Electrónico:</strong> giorgios@gmail.pa</p>
                    <p><strong>Número telefónico:</strong> 394-1122</p>
                    <p><strong>Horario:</strong> Desde las 7:00 a.m hasta las 10:00 p.m</p>
                    <div class="acciones">
                        <a href="Reservas.php">
                            <input type="submit" value="Hacer Reserva">
                        </a>
                        <a href="Menu/Menu.pdf">
                            <input type="submit" value="Ver Menú">
                        </a>

                    </div>
                </div> 
            </section>
        </div>
    </section>
    <div id="ofertas">
        <div id="Subtit">
            <h4>Platillos Ofrecidos </h4>
        </div>
    </div>
        <section id = 'distribucion'>
            <div class = 'contenedor-restaurante'>
                <img src="img/Margarita.jpg" alt = 'Imagen Pizza Margarita'>
                    <div class = 'local'>
                        <strong><p>Pizza Margarita</p></strong>
                        <strong><p>$21.00</p></strong>
                    </div>
                    <div class = 'atributos'>
                        <h4 id="nombreRest">Ingredientes:</h4>
                        <p id="ingredientes">Masa de pizza artesanal, salsa especial de la casa elaborada con tomates maduros, queso mozzarella importado de Italia, hojas frescas de albahaca,
                            aceite de oliva virgen extra de alta calidad, y sal marina premium.</p>
                    </div>         
            </div>
            <div class = 'contenedor-restaurante'>
                <img src="img/Alfredo.jpg" alt = 'Imagen Pizza Tipo Alfredo'>
                    <div class = 'local'>
                        <strong><p>Pizza Alfredo</p></strong>
                        <strong><p>$24.00</p></strong>
                    </div>
                    <div class = 'atributos'>
                        <h4 id="nombreRest">Ingredientes:</h4>
                        <p id="ingredientes">Masa de pizza artesanal, salsa especial de la casa elaborada con tomates maduros, queso mozzarella importado de Italia, hojas frescas de espinaca, aceite de oliva virgen extra de alta calidad, y sal marina premium.</p>
                    </div>         
            </div>
            <div class = 'contenedor-restaurante'>
                <img src="img/New York.jpg" alt = 'Imagen Pizza New York Style'>
                    <div class = 'local'>
                        <strong><p>Pizza Estilo New York</p></strong>
                        <strong><p>$19.00</p></strong>
                    </div>
                    <div class = 'atributos'>
                        <h4 id="nombreRest">Ingredientes:</h4>
                        <p id="ingredientes">Masa de pizza estilo New York, salsa de tomate, queso mozzarella, aceite de oliva, ajo, sal y pimienta.</p>
                    </div>         
            </div>
            <div class = 'contenedor-restaurante'>
                <img src="img/Mushroom.jpg" alt = 'Imagen Pizza de hongos'>
                    <div class = 'local'>
                        <strong><p>Mushroom Party</p></strong>
                        <strong><p>$26.00</p></strong>
                    </div>
                    <div class = 'atributos'>
                        <h4 id="nombreRest">Ingredientes:</h4>
                        <p id="ingredientes">Masa de pizza, salsa de tomate, queso mozzarella, mezcla de hongos de la casa, aceite de oliva, ajo, perejil, vino blanco, sal y pimienta.</p>
                    </div>         
            </div>
            <div class = 'contenedor-restaurante'>
                <img src="img/Combinacion.jpg" alt = 'Imagen de Pizza Combinación'>
                    <div class = 'local'>
                        <strong><p>Pizza Combo Loco</p></strong>
                        <strong><p>$25.00</p></strong>
                    </div>
                    <div class = 'atributos'>
                        <h4 id="nombreRest">Ingredientes:</h4>
                        <p id="ingredientes">Masa de pizza artesanal, salsa especial de la casa elaborada con tomates maduros, queso mozzarella importado de Italia, carne, hongos, peperoni sasonado, tocino
                            aceite de oliva virgen extra de alta calidad, y sal marina premium.</p>
                    </div>         
            </div>
        </section>
        <?php
        include "../models/function.php"; // Asegúrate de incluir el archivo que contiene las funciones de base de datos

        $restaurant_name = 'Giorgios'; // Reemplaza con el nombre real del restaurante

        $comments = getCommentsByRestaurantName($restaurant_name);

        ?>

        <div id="sec-comentarios">
            <div id="titulo-com">
                <h5>Comentarios</h5>
            </div>

            <!-- Formulario para que los usuarios dejen nuevos comentarios -->
            <div class="nuevo-comentario">
                <h5>Dejar un comentario</h5>
                <form action="../controllers/procesar_comentario.php" method="POST">
                    <input type="hidden" name="restaurant_name" value="<?php echo $restaurant_name; ?>">
                    <input type="text" name="username" placeholder="Nombre de usuario" required>
                    <textarea name="comment" placeholder="Tu comentario" required></textarea>
                    <div class="rating-input">
                        <input type="radio" id="star5" name="rating" value="5"><label for="star5">5</label>
                        <input type="radio" id="star4" name="rating" value="4"><label for="star4">4</label>
                        <input type="radio" id="star3" name="rating" value="3"><label for="star3">3</label>
                        <input type="radio" id="star2" name="rating" value="2"><label for="star2">2</label>
                        <input type="radio" id="star1" name="rating" value="1"><label for="star1">1</label>
                    </div>
                    <input type="submit" value="Enviar comentario">
                </form>
            </div>
            <br>
        </div>
         <?php
            if (!empty($comments)) {
                foreach ($comments as $comment) {
                    // Mostrar cada comentario
                    echo "<div class='comentario'>";
                    echo "<div class='usuario'>" . $comment['username'] . "</div>";
                    echo "<div class='contenido'>" . $comment['comment'] . "</div>";
                    
                    // Agregar sistema de calificación por estrellas
                    echo "<div class='rating'>";
                    $stars = $comment['rating']; // Supongamos que 'stars' es el campo de la base de datos que guarda la calificación
                    for ($i = 1; $i <= 5; $i++) {
                        if ($i <= $stars) {
                            echo "<i class='fas fa-star'></i>"; // Icono de estrella llena si la calificación es mayor o igual a $i
                        } else {
                            echo "<i class='far fa-star'></i>"; // Icono de estrella vacía si la calificación es menor a $i
                        }
                    }
                    echo "</div>"; // Cierre de div 'rating'
                    
                    echo "</div>"; // Cierre de div 'comentario'
                }
            } else {
                echo "<p>No hay comentarios aún.</p>";
            }
            ?>
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
                    <li><a href="../controllers/Users.php?q=logout">Login</a></li>
                </ul>
            </div> 
            <div class="footerBottom">
                <p>Copyright 2023; Elaborado por <span class="designer"> Oscar & Javier </span></p>
            </div>
        </div>
    </footer>
</body>
</html>
