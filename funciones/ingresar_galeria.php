<?php
  session_start();
  require("session_usuario.php");

  if (!isset($_POST["titulo"]) || !isset($_POST["intro"])) {
    // code...
  }else {
    try {
      $titulo_album = $_POST["titulo"];
      $intro_album = $_POST["intro"];

      require('dbcall.php');
      if (!$cnn) {
        die("Conexion fallida :" . mysqli_connect_error());
      }else {
        $sql = "INSERT INTO "
      }


    } catch (\Exception $e) {
      echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0020');</script>";
    }

  }


 ?>
