<?php

    echo "<h1>Paises</h1>";
    //INtroducimos los paises en el array de uno en uno
    $paises[] = "España";
    $paises[] = "Francia";
    $paises[] = "Irlanda";
    $paises[] = "Argentina";
    //Para cada elemento del array paises se mete dentro de la varibale pais
    //y se repite para cada elemento del array.
    foreach($paises as $pais){
        //Se muestra por pantalla la variable pais
        echo $pais . " ";
    }
?>