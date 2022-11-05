<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/default.css">
    <title>Document</title>
</head>
<body>
    <!-- incluimos la cabecera en ambas vistas -->
    <?php
    require('views/cabecera.html');
    ?>
    <hr>
    <h1>Index del <?= $this->name ?></h1>
    <br>
    Vamos a hacer <?= $this->ejercicio ?>
</body>
</html>