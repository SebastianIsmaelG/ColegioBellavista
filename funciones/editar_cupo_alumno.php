<?php
session_start();
require ("session_usuario.php");
if (isset($_POST["btn_editar_slider"])) {

  try {
    $id_curso = $_POST["id_curso"];
    $nuevo_cupo = $_POST["nuevo_valor"];
    if ($id_curso==""||$nuevo_cupo=="") {
      echo "<script>alert('Ha ocurrido un error al tomar los datos, reintente'); window.history.back();</script>";
    }else {
      require('dbcall.php');
      if (!$cnn) {
        die("Conexion Fallida: " . mysqli_connect_error());
      }else {
          $sql = mysqli_prepare($cnn,"UPDATE vacantes_alumnos SET cupos_disponibles=? WHERE (id=?)");
          mysqli_stmt_bind_param($sql,"ii",$nuevo_cupo,$id_curso);
          if (mysqli_stmt_execute($sql)==TRUE) {
            echo "<script>alert('Datos Modificados con exito'); window.location.href='../administracion/administrar_admision.php';</script>";
          }else {
            echo "<script>alert('Ha ocurrido inesperado contacte al administrador. COD:0031'); window.location.href='../administracion/menu_principal.php';</script>";
          }
      }

    }
  } catch (\Exception $e) {
    echo "<script>alert('Ha ocurrido inesperado contacte al administrador. COD:0031'); window.location.href='../administracion/menu_principal.php';</script>";
  }

}
