<?php

    echo "<h1>Paises</h1>";
    //Creamos un arrays con 4 strings que contienen el nombre de 4 paises
    $paises = ["España", "Francia", "Irlanda", "Argentina"];

    //Para cada elemento del array paises se mete dentro de la varibale pais
    //y se repite para cada elemento del array.
    foreach($paises as $pais){
        //Se muestra por pantalla la variable pais
        echo $pais . " ";
    }
?>