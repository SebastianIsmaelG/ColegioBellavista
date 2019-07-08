<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
 if (isset($_POST["btn_nuevo_integrante"])) {
  $nombre2 = $_POST["nombre_integrante"];
  $categoria = $_POST["categoria_integrante"];

  if ($nombre2=="" || $categoria =="") {
      echo "<script> window.alert('Ha ocurrrido un error al ingresar los datos. COD:0035'); window.history.back();</script>";
  }else {
    try {
      //Transforma la primera letra a Uppercase
      $nombre = ucfirst($nombre2);

      require ("dbcall.php");
      if (!$cnn) {
          die("Conexion Fallida: " . mysqli_connect_error());
      }else{
          //Ingresa los datos
          $sql = mysqli_prepare($cnn,"INSERT INTO equipo_trabajadores (id,nombre,tipo) VALUES (NULL,?,?)");
          mysqli_stmt_bind_param($sql,"si",utf8_decode($nombre),$categoria);
          if (mysqli_stmt_execute($sql) == TRUE) {
              echo "<script> window.alert('Integrante ingresado con exito');window.location.href='../administracion/nuevo_equipo.php';</script>";
          }else {
              echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0035');window.location.href='../administracion/menu_principal.php';</script>";
          }
      }
    } catch (\Exception $e) {
      echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0035');window.location.href='../administracion/menu_principal.php';</script>";
    }

  }

}else {
    echo "<script>window.location= '../ingreso.html'</script>";
} ?>
