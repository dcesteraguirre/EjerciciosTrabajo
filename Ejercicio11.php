<?php
    echo "<h1>Datos del formulario</h1>";
    //recibimos los datos si se ha obtenido a través de GET en el html
    // un elemento con el nombre titulo
    if(isset($_GET['titulo']) && !empty($_GET["titulo"]) ){
        // se introduce el dato obtenido del elemento con nombre titulo del html
        // en la variable titulo
        $titulo = $_GET['titulo'];
        echo "<br> El nombre del titulo introducido es : " . $titulo;
    }
    else{
        //mensaje si no se ha introdudcio ningun valor en ese campo titulo en el formulario
        echo "<br><h2>No has introducido ningun titulo</h2>";
    }

    if(isset($_GET['autor']) && !empty($_GET["autor"]) ){
        $autor = $_GET['autor'];
        echo "<br> El nombre del titulo introducido es : " . $autor;
    }
    else{
        echo "<br><h2>No has introducido ningun autor</h2>";
    }

    if(isset($_GET['editorial']) && !empty($_GET["editorial"]) ){
        $editorial = $_GET['editorial'];
        echo "<br> El nombre del titulo introducido es : " . $editorial;
    }
    else{
        echo "<br><h2>No has introducido ninguna editorial</h2>";
    }

    if(isset($_GET['paginas']) && !empty($_GET["paginas"]) ){
        $paginas = $_GET['paginas'];
        echo "<br> El nombre del titulo introducido es : " . $paginas;
    }
    else{
        echo "<br><h2>No has introducido ninguna página</h2>";
    }
?>