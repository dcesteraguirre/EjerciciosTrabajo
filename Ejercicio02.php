<?php

    echo"<h1>Tabla de multiplicar del 8</h1>";
    // Bucle que crea el número por el que se va a mutliplicar el 8, hasta el 10
    for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) { 
            //Variable que contiene el 8.
            $multiplicando = 8;
            // El resultado que mostramos de multplicar 8 por cada número
            // mostrado por echo y salto de linea
            $resultado = $multiplicador * $multiplicando;
            echo "$multiplicando x $multiplicador = $resultado ";
            echo "<br>";
        }
?>

