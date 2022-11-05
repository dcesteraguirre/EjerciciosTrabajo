<?php
    echo "<h2>Lista de divisores de 100</h2>";
    //Declaramos la constante numero
    const num = 13;
    
    //Variable que contiene el numero de divisores de la constante
    $numeroDivisores = 0;

    //Declaramos un indice que mientras sea menor que la constante aumentara
    for($i = 1; $i <= num; $i++){

        //si la constante entre el indice su resto es 0 muestra un echo con la
        //información de que es divisible y el numero de divisores uamenta en 1.
        if(num % $i == 0){
            echo "<br>" . $i . " es divisible entre ". num;
            $numeroDivisores++;
        }
    }
    
    //Si el numero de divisores es 2 la constante es un numero primo.
    if($numeroDivisores == 2){
        echo "<br><h3> Es Primo </h3>";
    }

?>