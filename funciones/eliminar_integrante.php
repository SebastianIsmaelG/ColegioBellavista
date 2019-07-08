<?php
session_start();
require ("session_usuario.php");
  if (!isset($_POST["btn_eliminar_integrante"])) {
    echo "<script> window.location.href='../ingreso.html';</script>";
  }else {
    $ID_integrante = $_POST["id_eliminar_integrante"];

    if ($ID_integrante == "") {
      echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0037'); window.history.back();</script>";
    }else {
      try {
        require ("dbcall.php");
        if (!$cnn) {
            die("Conexion Fallida: " . mysqli_connect_error());
        }else{
            //Ingresa los datos
            $sql = mysqli_prepare($cnn,"DELETE FROM equipo_trabajadores WHERE (id=?)");
            mysqli_stmt_bind_param($sql,"i",$ID_integrante);
            if (mysqli_stmt_execute($sql) == TRUE) {
                echo "<script> window.alert('Datos eliminados con exito');window.location.href='../administracion/administrar_equipo.php';</script>";
            }else {
                echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0037');window.location.href='../administracion/menu_principal.php';</script>";
            }
        }


      } catch (\Exception $e) {
        echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0037');</script>";
      }
    }
  }
 ?>
