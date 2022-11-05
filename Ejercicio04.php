<?php 
    echo "<h1>SECUENCIA DE FIBONACCI</h1>";
    //Declaramos dos variables que serán los dos primeros número de
    //la secuencia de Fibonacci
    $var1 = 0;
    $var2 = 1;


    //Mostramos el primer número de la serie de Fibonacci
    echo $var1 . "<br>";

    //Bucle que realiza 10 sucesiones de la secuencia de Fibonacci
    for ($i=0; $i < 10; $i++) { 
        
        //Variable temporal que guardar el número de la primera variable
        $temp = $var1;

        //La primera variable pasa a contener el valor de la segunda
        $var1 = $var2;

        //Sumamos el valor de temp y var1
        $var2 = $temp + $var1;

        echo $var1 . "<br>";
    }
?>