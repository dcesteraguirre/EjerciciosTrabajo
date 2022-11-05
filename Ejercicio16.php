<?php
    $contar=0;
    $nombres = "";
    //si se ha mandado datos a través del POST en el input contar continua
    if(isset($_POST["contar"])){
        $contar = $_POST["contar"];
        $nombres = $_POST["nombres"];//Guarda todos los nombres existentes
        $nombre = $_POST["nombre"];//Coje el nombre nuevo
        $nombres .= '<li>' . $nombre . "</li>";//Añade el nombre a todos los nombres
        $contar++;//la variable contar aumenta si el if se cumple
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Nombres a introducir</h2>
    <!-- si la variable nombre existe es porque se ha guardado los nombres anteriores -->
    <?php 
    if(!empty($nombre))
        echo "<ul>". $nombres . "</ul>";
    ?>
    <!-- Ponemos nombre al formulario, declaramos la ruta absoluta donde se enviaran los
    datos del formulario y el metodo POST que envía los datos al cuerpo. -->
    <form name="miformu" action="Ejercicio16.php" method="post">
        <p>
            <label for="nombre">Nombre 
            <?php echo $contar; ?><!-- Señala que numero va a ser el nombre a introducir -->
            <!-- declaramos en oculto el input, el nombre y el id del datos que enviarmeos -->
            <input hidden="hidden" type="text"  name="nombres" value="<?php echo $nombres; ?>">
            <!-- declaramos en oculto el input, el nombre y el id del datos que enviarmeos -->
            <input hidden="hidden" type="number" name="contar" value="<?php echo $contar; ?>" >
            <input type="text" name="nombre" id="numberA" >

        </p>
        <!-- enviamos los datos a traves del submit -->
        <input type="submit" name="envio" value="Enviar">
    </form>
</body>
</html>