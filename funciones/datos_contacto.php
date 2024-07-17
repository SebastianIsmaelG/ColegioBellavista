<?php
  try {
    require('dbcall.php');
    if (!$cnn) {
      die("Conexion Fallida: " . mysqli_connect_error());
    }else{
      $sql = "SELECT id,email,telefono,ubicacion FROM datos_contacto";
      $result2 = mysqli_query($cnn, $sql);
      while($row = mysqli_fetch_assoc($result2)) {

                $id_contacto = $row["id"];
                $email_contacto = $row["email"];
                $telefono_contacto = $row["telefono"];
                $ubicacion_contacto = $row["ubicacion"];//utf8_encode($row["ubicacion"]);
      }


    }
  } catch (\Exception $e) {
    echo "<script> alert('Ha ocurrido un error al solicitar la informacion, contacte al administrador. COD:0026');</script>";
  }



 ?>
