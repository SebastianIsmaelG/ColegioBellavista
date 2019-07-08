<?php
session_start();
require ("session_usuario.php");
if (isset($_POST["btn_editar_email"])) {

  try {
    $id_contacto = $_POST["id_contacto"];
    $email_nuevo = $_POST["input_editar_email"];
    if ($id_contacto==""||$email_nuevo=="") {
      echo "<script>alert('Ha ocurrido un error al tomar los datos, reintente'); window.history.back();</script>";
    }else {
      require('dbcall.php');
      if (!$cnn) {
        die("Conexion Fallida: " . mysqli_connect_error());
      }else {
          $sql = mysqli_prepare($cnn,"UPDATE datos_contacto SET email=? WHERE (id=?)");
          mysqli_stmt_bind_param($sql,"si",$email_nuevo,$id_contacto);
          if (mysqli_stmt_execute($sql)==TRUE) {
            echo "<script>alert('Datos Modificados con exito'); window.location.href='../administracion/administrar_contacto.php';</script>";
          }else {
            echo "<script>alert('Ha ocurrido inesperado contacte al administrador. COD:0028'); window.location.href='../administracion/menu_principal.php';</script>";
          }
      }

    }
  } catch (\Exception $e) {
    echo "<script>alert('Ha ocurrido inesperado contacte al administrador. COD:0028'); window.location.href='../administracion/menu_principal.php';</script>";
  }

}elseif (isset($_POST["btn_editar_telefono"])) {

  try {
    $id_contacto = $_POST["id_contacto"];
    $telefono_nuevo = $_POST["input_editar_telefono"];
    if ($id_contacto==""||$telefono_nuevo=="") {
      echo "<script>alert('Ha ocurrido un error al tomar los datos, reintente'); window.history.back();</script>";
    }else {
      require('dbcall.php');
      if (!$cnn) {
        die("Conexion Fallida: " . mysqli_connect_error());
      }else {
          $sql = mysqli_prepare($cnn,"UPDATE datos_contacto SET telefono=? WHERE (id=?)");
          mysqli_stmt_bind_param($sql,"si",$telefono_nuevo,$id_contacto);
          if (mysqli_stmt_execute($sql)==TRUE) {
            echo "<script>alert('Datos Modificados con exito'); window.location.href='../administracion/administrar_contacto.php';</script>";
          }else {
            echo "<script>alert('Ha ocurrido inesperado contacte al administrador. COD:0028'); window.location.href='../administracion/menu_principal.php';</script>";
          }
      }

    }
  } catch (\Exception $e) {
    echo "<script>alert('Ha ocurrido inesperado contacte al administrador. COD:0028'); window.location.href='../administracion/menu_principal.php';</script>";
  }
}elseif (isset($_POST["btn_editar_ubicacion"])) {

  try {
    $id_contacto = $_POST["id_contacto"];
    $ubicacion_nuevo = $_POST["input_editar_ubicacion"];
    if ($id_contacto==""||$ubicacion_nuevo=="") {
      echo "<script>alert('Ha ocurrido un error al tomar los datos, reintente'); window.history.back();</script>";
    }else {
      require('dbcall.php');
      if (!$cnn) {
        die("Conexion Fallida: " . mysqli_connect_error());
      }else {
          $sql = mysqli_prepare($cnn,"UPDATE datos_contacto SET ubicacion=? WHERE (id=?)");
          mysqli_stmt_bind_param($sql,"si",$ubicacion_nuevo,$id_contacto);
          if (mysqli_stmt_execute($sql)==TRUE) {
            echo "<script>alert('Datos Modificados con exito'); window.location.href='../administracion/administrar_contacto.php';</script>";
          }else {
            echo "<script>alert('Ha ocurrido inesperado contacte al administrador. COD:0028'); window.location.href='../administracion/menu_principal.php';</script>";
          }
      }

    }
  } catch (\Exception $e) {
    echo "<script>alert('Ha ocurrido inesperado contacte al administrador. COD:0028'); window.location.href='../administracion/menu_principal.php';</script>";
  }
}else {
  echo "<script> window.location.href='../ingreso.html';</script>";
}




 ?>
