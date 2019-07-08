<?php
  try {
    require('dbcall.php');
    if (!$cnn) {
      die("Conexion Fallida: " . mysqli_connect_error());
    }else{
      $sql = "SELECT imagen,border FROM imagenes_utilidades WHERE (id = 1)";
      $result = mysqli_query($cnn, $sql);
      while($row = mysqli_fetch_row($result)) {
        $imagen_admision = $row["0"];
        $border_admision = $row["1"];
      }

    }
  } catch (\Exception $e) {
    echo "<script> alert('Ha ocurrido un error al solicitar la informacion, contacte al administrador. COD:0038');</script>";
  }



 ?>
