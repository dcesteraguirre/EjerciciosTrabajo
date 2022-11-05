<?php

  session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
  <body>
    <h1>Bienvenido <?= $_SESSION['name'] ?></h1>

    <h2>Lista de deseos</h2>
      <h4><a href="?method=vaciar">Vaciar lista de deseos</a></h4>
      <h4><a href="?method=destruir">Cerrar sesión</a></h4>
    <ul>
      <pre>
      <?php
      $deseos=$_SESSION['deseos'];
      if (count($deseos)) {
        foreach ($deseos as $id => $deseo) {
          echo "<li> Deseo número $id: " . $deseo . ' <a href="?method=delete&id=' . $id . '"> borrar</a> </li>';
        }
      } else {
        echo "No hay deseos todavía";
      }
      ?>
    </ul>
    
    <hr>
    <h2>Alta de nuevos deseos</h2>
    <form action="?method=nuevo" method="post">
      <label for="nuevo">Nuevo deseo</label>
      <input type="text" name="nuevo">
      
      <input type="submit" value="nuevo">
    </form>
    
  </body>
</html>