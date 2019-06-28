<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//Forzamos el inicio con un usuario administrativo y pasamos los datos para almacenar al usuario que hizo la noticia
session_start();
require ("session_usuario.php");

if (isset($_POST["btn_subir_noticia"])) {

  //Almacena la noticia
  $titulo_noticia = $_POST["titular_noticia"];
  $intro_noticia = $_POST["introduccion_noticia"];
  $cuerpo_noticia = $_POST["cuerpo_noticia"];
  $fecha_publicacion = date('Y-m-d');
  $usuario_autor = $us;

  if ($titulo_noticia=="" || $intro_noticia=="" || $cuerpo_noticia=="" || $fecha_publicacion=="" || $usuario_autor=="") {
    echo "<script> window.alert(' Ha ocurrrido un error al recuperar los datos, reintente. COD:0013');window.history.back();</script>";
  }else{
    require ("dbcall.php");
    if (!$cnn) {
        die("Conexion Fallida: " . mysqli_connect_error());
    }else {
      $sql = mysqli_prepare($cnn,"INSERT INTO noticias (id_noticia, usuario_autor, titulo_noticia, fecha_noticia, intro_noticia, cuerpo_noticia) VALUES (NULL,?,?,?,?,?)");
      mysqli_stmt_bind_param($sql,"sssss",utf8_decode($usuario_autor),utf8_decode($titulo_noticia),$fecha_publicacion,utf8_decode($intro_noticia),utf8_decode($cuerpo_noticia));
      if (mysqli_stmt_execute($sql) == TRUE) {
          echo "<script> window.alert('Noticia subida con exito');window.location.href='../administracion/menu_principal.php';</script>";
      }else {
          echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0013');window.location.href='../administracion/menu_principal.php';</script>";
      }
    }

  }
}else {
  if (isset($_POST["btn_actualizar_borrador"])) {
    //Almacena la noticia
    try {
      $id = $_POST["id_noticia"];
      $titulo_noticia = $_POST["titular_noticia"];
      $intro_noticia = $_POST["introduccion_noticia"];
      $cuerpo_noticia = $_POST["cuerpo_noticia"];
      $fecha_publicacion = date('Y-m-d');
      $usuario_autor = $us;
    } catch (\Exception $e) {
      echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0013');window.location.href='../administracion/menu_principal.php';</script>";
    }

    if ($titulo_noticia=="" || $intro_noticia=="" || $cuerpo_noticia=="" || $fecha_publicacion=="" || $usuario_autor=="") {
      echo "<script> window.alert(' Ha ocurrrido un error al recuperar los datos, reintente. COD:0013');window.history.back();</script>";
    }else{
      require ("dbcall.php");
      if (!$cnn) {
          die("Conexion Fallida: " . mysqli_connect_error());
      }else {
        $sql = mysqli_prepare($cnn,"UPDATE borradores SET titulo_noticia=?,intro_noticia=?,cuerpo_noticia=? WHERE(id_noticia=?)");
        mysqli_stmt_bind_param($sql,"sssi",utf8_decode($titulo_noticia),utf8_decode($intro_noticia),utf8_decode($cuerpo_noticia),$id);
        if (mysqli_stmt_execute($sql) == TRUE) {
            echo "<script> window.alert('Publicación actualizada con exito');window.location.href='../administracion/menu_principal.php';</script>";
        }else {
            echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0008');window.location.href='../administracion/menu_principal.php';</script>";
        }
      }

    }
  }else {
    // code... A LA NADA
  }
}

 ?>
