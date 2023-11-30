<?php

function dbConnect()
{
    $connection = mysqli_connect('localhost', 'id21438984_root', 'Aranda.Jimenez1', 'id21438984_reservaya');

    if (!$connection) {
        die("Conexion a la Base de Datos ha fallado: " . mysqli_connect_error());
    }

    return $connection;
}

function getTipoComida()
{
    $mysqli = dbConnect();
    $result = $mysqli->query("SELECT DISTINCT tipo_comida FROM restaurantes");
    $comidas = array();
    while ($row = $result->fetch_assoc()) {
        $comidas[] = $row['tipo_comida'];
    }
    return $comidas;
}

function getTipolocal()
{
    $mysqli = dbConnect();
    $result = $mysqli->query("SELECT DISTINCT tipo_local FROM restaurantes");
    $locales = array();
    while ($row = $result->fetch_assoc()) {
        $locales[] = $row['tipo_local'];
    }
    return $locales;
}

function getCosto()
{
    $mysqli = dbConnect();
    $result = $mysqli->query("SELECT DISTINCT costo FROM restaurantes");
    $costos = array();
    while ($row = $result->fetch_assoc()) {
        $costos[] = $row['costo'];
    }
    return $costos;
}

function getFacilidades()
{
    $mysqli = dbConnect();
    $result = $mysqli->query("SELECT DISTINCT facilidades FROM restaurantes");
    $facilidades = array();
    while ($row = $result->fetch_assoc()) {
        $facilidades[] = $row['facilidades'];
    }
    return $facilidades;
}

function getRestaurantesPorNombre($nombre) {
    $mysqli = dbConnect();
    $nombre = $mysqli->real_escape_string($nombre); // Evitar inyección SQL

    $query = "SELECT * FROM restaurantes WHERE nombre LIKE '%$nombre%'";
    $result = $mysqli->query($query);

    if ($result) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return []; // Manejo de errores según sea necesario
    }
}


function getBusquedaRestaurantes($int)
{
    $mysqli = dbConnect();
    $result = $mysqli->query("SELECT * FROM restaurantes ORDER BY rand() LIMIT $int");
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    return $data;
}

function getFilteredRestaurants($selectedComidas, $selectedLocales, $selectedCostos, $selectedFacilidades) {
    $mysqli = dbConnect();
    $comidas = implode("','", $selectedComidas);
    $locales = implode("','", $selectedLocales);
    $costos = implode("','", $selectedCostos);
    $facilidades = implode("','", $selectedFacilidades);

    $query = "SELECT * FROM restaurantes WHERE 
        (tipo_comida IN ('$comidas') OR 
        tipo_local IN ('$locales') OR 
        costo IN ('$costos') OR 
        facilidades IN ('$facilidades'))";

    $result = $mysqli->query($query);

    if ($result) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return []; // Manejo de errores según sea necesario
    }
}

function getCommentsByRestaurantName($restaurant_name) {
    $mysqli = dbConnect();
    $restaurant_name = $mysqli->real_escape_string($restaurant_name); // Evitar inyección SQL

    $query = "SELECT * FROM comentarios WHERE restaurant_name = '$restaurant_name'";
    $result = $mysqli->query($query);

    if ($result && $result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return []; // Retorna un array vacío si no hay comentarios o hay errores
    }
}

function insertComment($restaurant_name, $username, $comment, $rating) {
    $mysqli = dbConnect();
    $restaurant_name = $mysqli->real_escape_string($restaurant_name);
    $username = $mysqli->real_escape_string($username);
    $comment = $mysqli->real_escape_string($comment);
    $rating = $mysqli->real_escape_string($rating);

    $query = "INSERT INTO comentarios (restaurant_name, username, comment, rating) VALUES ('$restaurant_name', '$username', '$comment', '$rating')";

    return $mysqli->query($query);
}

