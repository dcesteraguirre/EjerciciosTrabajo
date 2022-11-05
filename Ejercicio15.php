<?php
    if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
        // introducimos en la variable arrray los datos enviados por POST
        // del formulario que tenian nombre como name
        $array = array($_POST["nombre"]);
        // creamos una variable vector donde introducimos los datos mandados
        // en el formulario
        $vector=$_POST["nombre"];
        //contador declarado como 0
        $contador = 0;
        
       
        print_r($array);//Muestra los valores con su valor en el vector
        echo "</ul>";
        //Para cada elemento del array vector se mete dentro de la varibale a
        //y se repite para cada elemento del array.
        foreach($vector as $a ){
            echo "<br> Hola persona ". $contador ." : " . $a;
            $contador++;
        }
        
    }