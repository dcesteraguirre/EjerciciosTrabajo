<?php

class App
{
//recogemos los argumentos mediante este metodo
public function run()
{
    if (isset($_GET['method'])) 
    {
        $method = $_GET['method'];
    } 
    else 
    {
        $method = 'index';
    }
    $this->$method();
}

//con esta funcion mostramos el index de views
public function index()
{
  include('views/index.php');
}
  public function fibonacci()
  {
    include('views/cabecera.html');
    echo "<h1>SECUENCIA DE FIBONACCI</h1>";
    //Declaramos dos variables que serán los dos primeros número de
    //la secuencia de Fibonacci
    $var1 = 0;
    $var2 = 1;


    //Mostramos el primer número de la serie de Fibonacci
    echo $var1 . "<br>";

    //Bucle que realiza 10 sucesiones de la secuencia de Fibonacci
    for ($i=0; $i < 1000000; $i++) { 
        
        //Variable temporal que guardar el número de la primera variable
        $temp = $var1;

        //La primera variable pasa a contener el valor de la segunda
        $var1 = $var2;

        //Sumamos el valor de temp y var1
        $var2 = $temp + $var1;

        echo $var1 . "<br>";
    }
  }

  //funcion para calcular las potencias de 2
  public function potencias2()
  {
    for($i=0; $i<24; $i++){
        $numero = 2;
        $numero_al_cuadrado = pow($numero, 2);// Potencia 2
        $numero = $numero_al_cuadrado; //la variable numero pasa a contener el numero
        //calculado para hacer su cuadrado en la siguiente fase del bucel
        echo "El número elevado al cuadrado es $numero_al_cuadrado";
    }

    
  }

  //funcion para caclular el factorial
  public function factorial(){
    $num = 1;
        echo"0! = 1 <br>";
        //bucle que se ejecuta mientras el numero no pase del millon
        for($i=1;$num<1000000;$i++)
        {
            //la variable num pasa a ser ella misma multplicada por
            //la secuencia en la que se encuentre el bloque
            $num = $num*$i;   
            
            //si el numero es menor a un millon se mostrara como factorial de ese numero
            if($num <=1000000)
            {
            echo"$i! = ";
            echo"$num<br>";
            }
        }    
  }

  //funcion para calcular numero primos
  public function primos()
    {
        echo"<hr><br>";
        //el bucle se repite hasta que la variable i llege a 10000
        for($i = 2;$i < 10000; $i++)
        {
            $primo = true;
            for ($ii=2; $ii < $i; $ii++) 
            { 
                //si i es divisible entre ii no es primo
                if($i % $ii == 0)
                {
                    $primo = false;
                }
                
            }
            //todos los numero que no hayan sido divisibles entre ii
            //solo pueden ser divisble entre ellos y 1 por lo que son primos
            //y se muestra mediante echo
            if($primo)
                {
                    echo"$i<br>";
                }
        }
    }  

}
?>