<?php
    include_once '../helpers/sesion_helper.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/EstilosPrueba.css">
    <script src="js/principal.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <script src="https://kit.fontawesome.com/8680de2650.js"></script>
       <!-- Fonts de google--> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">

    <title>ReservaYA!</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/Logo.png" alt="Logo de la página web">
        </div>
        <div class="barra-busqueda">
            <input type="text" placeholder="Buscar...">
            <button id="boton-busqueda" aria-label="Buscar restaurante">
                <i class="bx bx-search-alt-2" alt="Barra de búsqueda"></i>
            </button>
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
            <a href="Reservas.php">
                <i class="bx bx-calendar" alt = 'seccion de calendario de reservas'></i>
            </a>
        </div>
        </section>
    </header>
    <section id = 'titulo'>
        <h2> Recomendado para tí <?php echo $_SESSION['username']; ?></h2>
        <p>Te recomendamos que le pongas un ojo a los siguientes restaurantes</p>
    </section>
    <section id = 'restaurante1'>
            <div class = 'contenedor-restaurante'>
                <a href="Giorgios.html" class="enlace-restaurante">
                    <img src="img/Pizzeria.jpg" alt = 'Imagen del restaurante Giorgios'>
                        <div class = 'local'>
                            <p>Comida Italiana</p>
                            <p>Pizzeria</p>
                        </div>
                        <div class = 'atributos'>
                            <h3 id="nombreRest">Giorgios</h3>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <p><strong>Ubicación:</strong> Panamá</p> 
                        </div>         
                </a>
            </div>
            <div class = 'contenedor-restaurante'>
                <a href="Don Ming.html" class="enlace-restaurante">
                    <img src="img/RChino.jpg" alt = 'Imagen del restaurante Don Ming'>
                        <div class = 'local'>
                            <p>Comida China</p>
                            <p>Familiar</p>
                        </div>
                        <div class = 'atributos'>
                            <h3 id="nombreRest">Don Ming</h3>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <p><strong>Ubicación:</strong> Coclé</p> 
                        </div>         
                </a>
            </div>
            <div class = 'contenedor-restaurante'>
                <a href="Global Palate.html" class="enlace-restaurante">
                    <img src="img/RInternacional.jpg" alt = 'Imagen del restaurante Global Palate'>
                        <div class = 'local'>
                            <p>Comida Global</p>
                            <p>Buffet</p>
                        </div>
                        <div class = 'atributos'>
                            <h3 id="nombreRest">Global Palate</h3>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <p><strong>Ubicación:</strong> Chiriquí</p> 
                        </div>         
                </a>
            </div>
            <div class = 'contenedor-restaurante'>
                <a href="SaboresIndigenas.html" class="enlace-restaurante">
                    <img src="img/RPeruano.jpg" alt = 'Imagen del restaurante SaboresIndigenas'>
                        <div class = 'local'>
                            <p>Comida Peruana</p>
                            <p>Gourmet</p>
                        </div>
                        <div class = 'atributos'>
                            <h3 id="nombreRest">Sabores Indígenas</h3>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <p><strong>Ubicación:</strong> Panamá</p> 
                        </div>         
                </a>
            </div>
            <div class = 'contenedor-restaurante'>
                <a href="Bernabeu.html" class="enlace-restaurante">
                    <img src="img/REspanol.jpg" alt = 'Imagen del restaurante Bernabeu'>
                        <div class = 'local'>
                            <p>Comida Española</p>
                            <p>Cafetería</p>
                        </div>
                        <div class = 'atributos'>
                            <h3 id="nombreRest">El Bernabeu</h3>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <p><strong>Ubicación:</strong> Panamá</p> 
                        </div>         
                </a>
            </div>
            <div class = 'contenedor-restaurante'>
                <a href="MoleMas.html" class="enlace-restaurante">
                    <img src="img/RMexicano.jpg" alt = 'Imagen del restaurante Mole Y Más'>
                        <div class = 'local'>
                            <p>Comida Mexicana</p>
                            <p>Cafetería</p>
                        </div>
                        <div class = 'atributos'>
                            <h3 id="nombreRest">Mole y Más</h3>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <p><strong>Ubicación:</strong> Panamá</p> 
                        </div>         
                </a>
            </div>
            <div class = 'contenedor-restaurante'>
                <a href="kessler Pastry.html" class="enlace-restaurante">
                    <img src="img/Pasteleria.jpg" alt = 'Imagen del restaurante Kessler Pastry'>
                        <div class = 'local'>
                            <p>Postres</p>
                            <p>Pastelería</p>
                        </div>
                        <div class = 'atributos'>
                            <h3 id="nombreRest">Kessler Galimany</h3>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <p><strong>Ubicación:</strong> Panamá</p> 
                        </div>         
                </a>
            </div>
            <div class = 'contenedor-restaurante'>
                <a href="Rincon del Cafe.html" class="enlace-restaurante">
                    <img src="img/Cafeteria.jpg" alt = 'Imagen del restaurante Rincon del Café'>
                        <div class = 'local'>
                            <p>Comida Panameña</p>
                            <p>Cafetería</p>
                        </div>
                        <div class = 'atributos'>
                            <h3 id="nombreRest">Rincón del Café</h3>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <p><strong>Ubicación:</strong> Herrera</p> 
                        </div>         
                </a>
            </div>
            <div class = 'contenedor-restaurante'>
                <a href="Fonda Ramon.html" class="enlace-restaurante">
                    <img src="img/Fonda.jpg" alt = 'Imagen de la Fonda Ramón'>
                        <div class = 'local'>
                            <p>Comida Panameña</p>
                            <p>Fonda</p>
                        </div>
                        <div class = 'atributos'>
                            <h3 id="nombreRest">Fonda Ramón</h3>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <span class="nota">★</span>
                                <p><strong>Ubicación:</strong> Panamá Oeste</p> 
                        </div>         
                </a>
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
                    <li><a href="InicialPrueba.php">Página de Inicio</a></li>
                    <li><a href="historialReservas.php">Historial Reservas</a></li>
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
