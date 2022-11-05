<?php
    echo "<h2>Lista de los jugadores</h2>";
    //Declaramos el array con cinco cadenas de caracteres de cada jugador.
    $jugadores = ["Jugador1","Jugador2","Jugador3","Jugador4","Jugador5"];

    //Lista desordenada
    echo"<ul>";
    //Cada elemento del array jugadores se introduce en la variable jugador
    foreach($jugadores as $jugador){
        //Muestra cada jugador introducido en la varibale jugador, se muestra en
        //cada etiqueta de la li de la lista desordenada
        echo "<li>" . $jugador . "</li><br>";
    }

    echo "<h2>Posicion de los jugadores en el array</h2>";
    //Mostramos un array con la posicion que ocupa cada jugador en el array
    print_r($jugadores);
    echo"</ul>";
?>