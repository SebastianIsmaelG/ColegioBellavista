<?php
  session_start();
  require ("session_usuario.php");
  if (!isset($_POST["btn_nuevo_horario"])) {
    echo "<script> window.location.href='../ingreso.html';</script>";
  }else {
    try {
      $file_horario_name = $_FILES['file_horario']['name'];
      $file_horario_type  = $_FILES['file_horario']['type'];
      $file_horario_size  = $_FILES['file_horario']['size'];
      if ($file_horario_type!="application/pdf" || $file_horario_name=="" || $file_horario_size>=1000000) {
        echo "<script> window.alert('El archivo ingresado no cumple los parametros COD:0041'); windows.history.back();</script>";
      }else {
        if (file_exists("../images/utilidad/apoderadospdf.pdf")) {
          unlink("../images/utilidad/apoderadospdf.pdf");

          $carpeta = $_SERVER['DOCUMENT_ROOT'] . '/Proyectos/ColegioBellavista/images/utilidad/';
          //mover imagen a directorio temporal
          move_uploaded_file($_FILES['file_horario']['tmp_name'],$carpeta.$file_horario_name);
          rename("../images/utilidad/$file_horario_name","../images/utilidad/apoderadospdf.pdf");

          echo "<script> window.alert('Modificación exitosa.');window.location.href='../administracion/administrar_horario.php';</script>";
        }else {
          echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0041');</script>";
        }
      }
    } catch (\Exception $e) {

    }

  }
 ?>
