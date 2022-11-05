<?php
    echo "<h1>Número divisibles entre 3</h1>";
    //Bucle que en el que se declara el número que va a ser dividio entre tres
    //y aumenta en uno cada vez que se realiza el bucle, desde el 1 hasta el 10.
    for($numeroDivisible = 1; $numeroDivisible < 10; $numeroDivisible++){
        //si el numero por el que se ha dividio entre 3, el resto es 0
        //lo muestra mediante un echo.
        if($numeroDivisible%3===0){
            echo $numeroDivisible . " es divisible entre 3. ";
            echo "<br>";
        }
    }
?>