<?php
  error_reporting(E_ERROR | E_PARSE);
  session_start();
  require ("../funciones/session_usuario.php");
  if (!isset($_POST["btn_modificar_noticia"])) {
      echo "<script> window.location.href='../ingreso.html';</script>";
  }else {
    try {
      $id = $_POST["id_noticia"];
      $titulo = $_POST["titular_noticia"];
      $intro = $_POST["introduccion_noticia"];
      $cuerpo = $_POST["cuerpo_noticia"];
      if ($titulo==""||$intro==""||$cuerpo=="") {
        echo "<script> window.alert(' Ha ocurrrido un error al recuperar los datos, reintente. COD:0011');window.history.back();</script>";
      }else {
        require ("dbcall.php");
        if (!$cnn) {
            die("Conexion Fallida: " . mysqli_connect_error());
        }else {
          $sql = mysqli_prepare($cnn,"UPDATE NOTICIAS SET titulo_noticia=?,intro_noticia=?,cuerpo_noticia=? WHERE(id_noticia=?)");
          mysqli_stmt_bind_param($sql,"sssi",utf8_decode($titulo),utf8_decode($intro),utf8_decode($cuerpo),$id);
          if (mysqli_stmt_execute($sql) == TRUE) {
              echo "<script> window.alert('Publicación actualizada con exito');window.location.href='../paginas_administracion/menu_principal.php';</script>";
          }else {
              echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0008');window.location.href='../paginas_administracion/menu_principal.php';</script>";
          }
        }
      }
    } catch (\Exception $e) {
        echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0011');</script>";
    }

  }
 ?>
