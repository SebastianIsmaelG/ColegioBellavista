<?php
  error_reporting(E_ERROR | E_WARNING | E_PARSE);
  if (!isset($_POST["btn_save_borrador"])) {
    echo "<script> window.location.href='../ingreso.html';</script>";
  }else {
    try {
      $usuario = $_POST["borrador_usuario_autor"];
      $titulo = $_POST["borrador_noticia_titulo"];
      $intro = $_POST["borrador_noticia_intro"];
      $cuerpo = $_POST["borrador_noticia_cuerpo"];
      $fecha_publicacion = date('Y-m-d');

      if ($usuario=="" || $titulo=="" || $intro=="" || $cuerpo=="") {
        echo "<script> window.alert(' Ha ocurrrido un error al recuperar los datos, reintente. COD:0009');window.history.back();</script>";
      }else{
      }else {
        require ("dbcall.php");
        if (!$cnn) {
            die("Conexion Fallida: " . mysqli_connect_error());
        }else {
          //Guardamos los datos
          $sql = mysqli_prepare($cnn,"INSERT INTO borradores (id_noticia, usuario_autor, fecha_noticia, titulo_noticia, intro_noticia, cuerpo_noticia)
          VALUES (NULL,?,?,?,?,?)");
          mysqli_stmt_bind_param($sql,"sssss",utf8_decode($usuario),$fecha_publicacion,utf8_decode($titulo),utf8_decode($intro),utf8_decode($cuerpo));
          if (mysqli_stmt_execute($sql) == TRUE) {
              echo "<script> window.alert('Guardado en borrador');window.location.href='../paginas_administracion/menu_principal.php';</script>";
          }else {
              echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0009');window.location.href='../paginas_administracion/menu_principal.php';</script>";
          }
        }
      }
    } catch (\Exception $e) {
      echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0009');window.location.href='../paginas_administracion/menu_principal.php';</script>";
    }

  }

 ?>
