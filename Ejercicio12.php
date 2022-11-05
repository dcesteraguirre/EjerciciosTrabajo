<?php
echo "<h1>Datos del formulario</h1>";
    //recibimos los datos si se ha obtenido a través de GET en el html
    // un elemento con el nombre nombre
    if(isset($_GET['nombre']) && !empty($_GET["nombre"]) ){
        // se introduce el dato obtenido del elemento con nombre nombre del html
        // en la variable nombre
        $nombre = $_GET['nombre'];
        echo "<br> Saludos " . $nombre;
    }
    else{
        //si no hay datos enviados se devolvera a la página del forumlario a
        //a través de un header
        header('Location: http://ejercicios.local/EjerciciosTrabajo/Ejercicio12.html');
    }