<?php
session_start();
require ("session_usuario.php");
  if (!isset($_POST["btn_eliminar_solicitud"])) {
    echo "<script> window.location.href='../ingreso.html';</script>";
  }else {
    $id_solicitud = $_POST["id_eliminar"];

    if ($id_solicitud == "") {
      echo "<script> window.alert(' Ha ocurrrido un error al recuperar los datos, reintente. COD:0033');window.history.back();</script>";
    }else {
      try {
        require ("dbcall.php");
        if (!$cnn) {
            die("Conexion Fallida: " . mysqli_connect_error());
        }else{
            //Ingresa los datos
            $sql = mysqli_prepare($cnn,"DELETE FROM contacto_formulario WHERE (id=?)");
            mysqli_stmt_bind_param($sql,"i",$id_solicitud);
            if (mysqli_stmt_execute($sql) == TRUE) {
                echo "<script> window.alert('Peticion eliminada con exito');window.location.href='../administracion/administrar_peticiones.php';</script>";
            }else {
                echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0033');window.location.href='../administracion/menu_principal.php';</script>";
            }
        }
      } catch (\Exception $e) {
        echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0033');</script>";
      }
    }
  }
 ?>
