<?php
include "function.php";

if(isset($_GET['restaurante'])) {
    $searchTerm = $_GET['restaurante'];

    // Obtener los restaurantes por nombre
    $restaurants = getRestaurantesPorNombre($searchTerm);
} else {
    // Si no se ha proporcionado un término de búsqueda, muestra todos los restaurantes
    $restaurants = getBusquedaRestaurantes(9);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/EstilosB.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
       <!-- Fonts de google--> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">

    <title>Busqueda</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/Reserva Ya!-logos.jpeg" alt="Logo de la página web">
        </div>
        <div class="barra-busqueda">
            <form action="Busqueda.php" method="GET">
                <input type="text" name="restaurante" placeholder="Buscar...">
                <button type="submit" aria-label="Buscar restaurante">
                    <i class="bx bx-search-alt-2" alt="Barra de búsqueda"></i>
                </button>
            </form>
        </div>
        <section class = 'seccion-iconos'>
            <div class="seccion-redes">
                <i class="bx bxl-instagram" alt="logo de facebook"></i>
                <i class="bx bxl-facebook-circle" alt= 'logo de instagram'></i> 
                <i class="bx bx-user" alt= 'logo de usuario'></i> 
            </div>
        <div class="seccion-calendario">
            <i class="bx bx-calendar" alt = 'seccion de calendario de reservas'></i>
        </div>
    </section>
    </header>
    <div class ='encabezado'>
        <h2 class='titulo'>Restaurantes Encontrados</h2>
        <hr>
    </div>
    <section class="contenedor">
        <section class="filters">
        <form id="filterform" action="category.php" method="POST">
            <h2>Filtros</h2>
                <h3>Tipo de Comida</h3>
                <div class="checkbox-group1">
                <?php $comidas = getTipoComida(); ?>
                    <?php foreach ($comidas as $comida) { ?>
                        <div>
                            <label for="<?php echo ucfirst($comida) ?>">
                                <input type="checkbox" id="<?php echo ucfirst($comida) ?>" name="tipoComida[]" value="<?php echo ucfirst($comida) ?>">
                                <?php echo ucfirst($comida) ?>
                            </label>
                        </div>
                    <?php } ?>
                </div>
                <hr>
                <div>
                    <h3>Costos</h3>
                    <div class="checkbox-group">
                    <?php $costos = getCosto(); ?>
                    <?php foreach ($costos as $costo) { ?>
                        <div>
                            <label for="<?php echo ucfirst($costo) ?>">
                                <input type="checkbox" id="<?php echo ucfirst($costo) ?>" name="costo[]" value="<?php echo ucfirst($costo) ?>">
                                <?php echo ucfirst($costo) ?>
                            </label>
                        </div>
                    <?php } ?>
                </div>
                    <hr>
                </div>
                <h3>Tipo de Restaurantes</h3>
                <div class="checkbox-group">
                <?php $locales = getTipolocal(); ?>
                    <?php foreach ($locales as $local) { ?>
                        <div>
                            <label for="<?php echo ucfirst($local) ?>">
                                <input type="checkbox" id="<?php echo ucfirst($local) ?>" name="tipoLocal[]" value="<?php echo ucfirst($local) ?>">
                                <?php echo ucfirst($local) ?>
                            </label>
                        </div>
                    <?php } ?>
                <hr>
                <div>
                    <h3>Facilidades</h3>
                    <div class="checkbox-group">
                    <?php $facilidades = getFacilidades(); ?>
                        <?php foreach ($facilidades as $facilidad) { ?>
                            <div>
                            <label for="<?php echo ucfirst($facilidad) ?>">
                                <input type="checkbox" id="<?php echo ucfirst($facilidad) ?>" name="facilidad[]" value="<?php echo ucfirst($facilidad) ?>">
                                <?php echo ucfirst($facilidad) ?>
                            </label>
                        </div>
                    <?php } ?>
                    <hr>
                </div>
                <input type="submit" value="Filtrar">
        </form>
        </section>
        <div class="principal">
        <?php if ($restaurants && is_array($restaurants)) : ?>
            <?php foreach ($restaurants as $restaurant) : ?>
                <!-- Aquí muestras los resultados -->
                <div class='contenedor-restaurante'>
                    <a href="Giorgios.html" class="enlace-restaurante">
                        <img src="<?php echo $restaurant['image']?>" alt='Imagen del restaurante'>
                        <div class='local'>
                            <p><?php echo $restaurant['tipo_comida'] ?></p>
                            <p><?php echo $restaurant['tipo_local'] ?></p>
                        </div>
                        <div class='atributos'>
                            <h3 id="nombreRest"><?php echo $restaurant['nombre'] ?></h3>
                            <span class="nota"><?php echo $restaurant['estrellas'] ?></span>
                            <p><strong>Ubicación:</strong> <?php echo $restaurant['provincia'] ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>No se encontraron restaurantes.</p>
        <?php endif; ?>
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
