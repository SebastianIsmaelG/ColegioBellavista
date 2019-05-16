<?php if (isset($_POST["btn_nueva_actividad"])) {
  $nombre = $_POST["nombre_actividad"];
  $fecha = $_POST["fecha_actividad"];

  if ($nombre=="" || $fecha =="") {
      echo "<script> window.alert('Ha ocurrrido un error al ingresar los datos. COD:0004'); window.history.back();</script>";
  }else {
    try {
      //Transforma la primera letra a Uppercase
      $nombre_actividad = ucfirst($nombre);

      require ("dbcall.php");
      if (!$cnn) {
          die("Conexion Fallida: " . mysqli_connect_error());
      }else{
          //Ingresa los datos
          $sql = mysqli_prepare($cnn,"INSERT INTO actividades (id_actividad, nombre_actividad, fecha_actividad) VALUES (NULL,?,?)");
          mysqli_stmt_bind_param($sql,"ss",$nombre_actividad,$fecha);
          if (mysqli_stmt_execute($sql) == TRUE) {
              echo "<script> window.alert('Actividad ingresada con exito');window.location.href='../paginas_administracion/nueva_actividad.php';</script>";
          }else {
              echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0004');window.location.href='../paginas_administracion/menu_principal.php';</script>";
          }
      }
    } catch (\Exception $e) {
      echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0004');window.location.href='../paginas_administracion/menu_principal.php';</script>";
    }

  }

}else {
    echo "<script>window.location= '../ingreso.html'</script>";
} ?>