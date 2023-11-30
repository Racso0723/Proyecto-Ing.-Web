<?php
include "../models/function.php"; // Asegúrate de incluir el archivo que contiene las funciones de base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si se enviaron datos mediante POST

    // Recoge los datos del formulario
    $restaurant_name = $_POST['restaurant_name']; // Nombre del restaurante
    $username = $_POST['username']; // Nombre de usuario
    $comment = $_POST['comment']; // Comentario
    $rating = $_POST['rating']; // Calificación

    // Aquí podrías realizar validaciones de datos si es necesario

    // Llama a una función para insertar el comentario en la base de datos
    $success = insertComment($restaurant_name, $username, $comment, $rating);

    if ($success) {
        // Si se insertó el comentario exitosamente, redirecciona a la página del restaurante o a donde prefieras
        header("Location: ../view/$restaurant_name.php");
        exit();
    } else {
        // Manejo de errores si la inserción falla
        echo "Hubo un error al procesar tu comentario. Por favor, intenta nuevamente.";
    }
} else {
    // Si no se enviaron datos por POST, redirecciona a alguna página apropiada
    header("Location: alguna_pagina_de_error.php");
    exit();
}
