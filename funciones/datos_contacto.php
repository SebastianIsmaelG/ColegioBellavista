<?php
  try {
    require('dbcall.php');
    if (!$cnn) {
      die("Conexion Fallida: " . mysqli_connect_error());
    }else{
      $sql = "SELECT id,email,telefono,ubicacion FROM datos_contacto";
      $results = mysqli_query($cnn, $sql);
      while($row = mysqli_fetch_assoc($results)) {
                $rows[] = $row;
      }
      //Datos de contacto
      $id_contacto = $rows[0]["id"];
      $email_contacto = $rows[0]["email"];
      $telefono_contacto = $rows[0]["telefono"];
      $ubicacion_contacto = utf8_encode($rows[0]["ubicacion"]);

    }
  } catch (\Exception $e) {
    echo "<script> alert('Ha ocurrido un error al solicitar la informacion, contacte al administrador. COD:0026');</script>";
  }



 ?>
