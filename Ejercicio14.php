<?php
//si se realiza el subbmit envio y no esta vacio sigue
if(isset($_POST["envio"]) && !empty($_POST["envio"])){
        //introducimos en las variables numero el primer operando
        //en la variable operador el operador eleguido,
        //y en la variable numero 2 el operando 2
        $numero = $_POST["numero1"];
        $operador = $_POST["operador"];
        $numero2 = $_POST["numero2"];
        //iremos variando la opcion según el operador elegido en el formulario
        switch($operador){
            case "+":
                $resultado = $numero + $numero2;
            break;

            case "-":
                $resultado = $numero - $numero2;
            break;

            case "*":
                $resultado = $numero * $numero2;
            break;

            case "/":
                $resultado = $numero / $numero2;
            break;

            default:
                $resultado = 0;
            break;
            }
        }
    //Resultado de la operación
    echo "El resultado es " . $resultado;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="miformu" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <p>
            <label for="">Operando 1:</label>
            <input type="number" name="numero1" value="" required>
        </p>
        <p>
            <label for="">Operando 2:</label>
            <input type="number" name="numero2" value="" required>
        </p>
        <!-- mediante este select se elige la operacion a realizar entre los operandos -->
        <select name="operador" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>

        </select>
         <!-- enviamos los datos a traves del submit -->
        <input type="submit" name="envio" value="Enviar">
    </form>
</body>
</html>