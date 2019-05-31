<?php
  if (!isset($_POST["btn_eliminar_actividad"])) {
    echo "<script> window.location.href='../ingreso.html';</script>";
  }else {
    $id_actividad_vieja = $_POST["id_eliminar_actividad"];

    if ($id_actividad_vieja == "") {
      echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0007'); window.history.back();</script>";
    }else {
      try {
        require ("dbcall.php");
        if (!$cnn) {
            die("Conexion Fallida: " . mysqli_connect_error());
        }else{
            //Ingresa los datos
            $sql = mysqli_prepare($cnn,"DELETE FROM actividades WHERE (actividades.id_actividad=?)");
            mysqli_stmt_bind_param($sql,"i",$id_actividad_vieja);
            if (mysqli_stmt_execute($sql) == TRUE) {
                echo "<script> window.alert('Actividad eliminada con exito');window.location.href='../paginas_administracion/administrar_actividad.php';</script>";
            }else {
                echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0007');window.location.href='../paginas_administracion/menu_principal.php';</script>";
            }
        }


      } catch (\Exception $e) {
        echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0007');</script>";
      }
    }
  }
 ?>
