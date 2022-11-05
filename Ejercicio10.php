<?php
    echo "<h2>Lista de los jugadores</h2>";
    //Declaramos un array asociativo con los elementos
    //nombre y el numero que ocupa en el array
    $jugadores = array(
        'nombre0' => 'Jugador0, base',
        'nombre1' => 'Jugador1, escolta',
        'nombre2' => 'Jugador2, alero',
        'nombre3' => 'Jugador3, alapivot',
        'nombre4' => 'Jugador4, pivot'    
    );
    

    //Cada elemento del array jugadores se introduce en la variable jugador
    foreach ($jugadores as $clave => $valor){
        //Muestra cada jugador introducido en la varibale jugador, con su nombre,
        //y su clave valor
        echo $clave . ": " . $valor . "<br>";
    }

?>