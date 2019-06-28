<?php
  error_reporting(E_ERROR | E_WARNING | E_PARSE);
  if (!isset($_POST["btn_editar_actividad"])) {
    echo "<script> window.location.href='../ingreso.html';</script>";
  }else {
    try {
      $id_actividad_vieja = $_POST["id_editar_actividad"];
      $nuevo_nombre_actividad = $_POST["nombre_editar_actividad"];
      $nueva_fecha_actividad = $_POST["fecha_editar_actividad"];

    } catch (\Exception $e) {
      echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0006');window.location.href='../administracion/menu_principal.php';</script>";
    }
    if ($id_actividad_vieja=="" || $nuevo_nombre_actividad=="" || $nueva_fecha_actividad=="") {
        echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0006');</script>";
    }else {
      try {
        //Transforma la primera letra a Uppercase
        $nombre_actividad = ucfirst($nuevo_nombre_actividad);

        require ("dbcall.php");
        if (!$cnn) {
            die("Conexion Fallida: " . mysqli_connect_error());
        }else{
            //Ingresa los datos
            $sql = mysqli_prepare($cnn,"UPDATE actividades SET nombre_actividad=?,fecha_actividad=? WHERE (id_actividad=?)");
            mysqli_stmt_bind_param($sql,"ssi",utf8_decode($nombre_actividad),$nueva_fecha_actividad,$id_actividad_vieja);
            if (mysqli_stmt_execute($sql) == TRUE) {
                echo "<script> window.alert('Actividad modificada con exito');window.location.href='../administracion/administrar_actividad.php';</script>";
            }else {
                echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0006');window.location.href='../administracion/menu_principal.php';</script>";
            }
        }
      } catch (\Exception $e) {
        echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0006');window.location.href='../administracion/menu_principal.php';</script>";
      }

    }
  }
 ?>
