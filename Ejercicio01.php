<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Primera tabla con los datos de las variables
    mostrados mediante echo y print_r con la variable dentro -->
    
    <h1>Primera Tabla</h1>
        <table>
            <tr>
                <td>
                    <?php
                        $nombre = "Darío";
                        echo"<br>Mi nombre: ";
                        print_r($nombre);
                    ?>
                </td>
                <td>
                    <?php
                        $apellido = "Cester";
                        $segundoApellido = "Aguirre";
                        echo"<br>Mis apellidos: ";
                        print_r($apellido);
                        print_r($segundoApellido);
                    ?>
                </td>
                <td>
                    <?php
                        $edad = "19";
                        echo"<br>Mi edad: ";
                        print_r($edad);
                    ?>
                </td>
                <td>
                    <?php
                        $email = "dcesteraguirrre@gmail.com";
                        echo"<br>Mis email: ";
                        print_r($email);
                    ?>
                </td>
            </tr>
        </table>
     <!-- Segunda tabla con los datos de las variables
    mostrados mediante echo y las variables  mediante concatenación -->
    <h1>Segunda Tabla</h1>
        <table>
                 <?php
                    echo "<br>Mi nombre: " . $nombre . "<br>Mis apellidos: " . $apellido . $segundoApellido . 
                    "<br>Mi edad: " . $edad . "<br>Mi email: " . $email; 
                ?>
        </table>
</body>
</html>


