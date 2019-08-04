<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//Forzamos el inicio con un usuario administrativo y pasamos los datos para almacenar al usuario que hizo la noticia
session_start();
require ("session_usuario.php");

if (isset($_POST["btn_subir_noticia"])) {

  //Almacena la noticia
  $id_noticia = $_POST["id_noticia"];
  $titulo_noticia = $_POST["titular_noticia"];
  $intro_noticia = $_POST["introduccion_noticia"];
  $cuerpo_noticia = $_POST["cuerpo_noticia"];
  $fecha_publicacion = date('Y-m-d');
  $usuario_autor = $us;

  $foto_noticia_old = $_POST["foto_intro_noticia_old"];

  $nombre_fotografia_intro = $_FILES['foto_intro_noticia']['name'];
  $tipo_fotografia_intro  = $_FILES['foto_intro_noticia']['type'];
  $tam_fotografia_intro   = $_FILES['foto_intro_noticia']['size'];

  if ($nombre_fotografia_intro=="") {

    $fotografia_intro = $foto_noticia_old;
    //actualiza la db omite foto
      require ("dbcall.php");
      if (!$cnn) {
          die("Conexion Fallida: " . mysqli_connect_error());
      }else {
        $sql = mysqli_prepare($cnn,"INSERT INTO noticias (id_noticia, usuario_autor, titulo_noticia, fecha_noticia, intro_noticia, foto_intro_noticia, cuerpo_noticia) VALUES (NULL,?,?,?,?,?,?)");
        mysqli_stmt_bind_param($sql,"ssssss",utf8_decode($usuario_autor),utf8_decode($titulo_noticia),$fecha_publicacion,utf8_decode($intro_noticia),utf8_decode($fotografia_intro),utf8_decode($cuerpo_noticia));
        if (mysqli_stmt_execute($sql) == TRUE) {
          //Eliminar el borrador de la db
            $sqlDEL = mysqli_prepare($cnn,"DELETE FROM borradores WHERE (id_noticia=?)");
            mysqli_stmt_bind_param($sqlDEL,"i",$id_noticia);
            if (mysqli_stmt_execute($sqlDEL)==TRUE) {
              echo "<script> window.alert('Publicación subida con exito');window.location.href='../administracion/menu_principal.php';</script>";
            }else {
              echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0013');window.location.href='../administracion/menu_principal.php';</script>";
            }
          }else {
            echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0013');window.location.href='../administracion/menu_principal.php';</script>";
          }
        }

  }else {

    $fotografia_intro = $_FILES['foto_intro_noticia']['name'];
    $tipo_fotografia_intro  = $_FILES['foto_intro_noticia']['type'];
    $tam_fotografia_intro   = $_FILES['foto_intro_noticia']['size'];
    //Nueva fotografia
    if ($tipo_fotografia_intro=="image/jpeg" ||$tipo_fotografia_intro=="image/png" ||$tipo_fotografia_intro=="image/gif" ||$tipo_fotografia_intro=="image/jpg" ) {
        if ($tam_fotografia_intro<=3000000) {
          //Comienza a almacenar
          if ($id_noticia=="" || $titulo_noticia=="" || $intro_noticia==""  || $fotografia_intro==""  || $cuerpo_noticia=="" || $fecha_publicacion=="" || $usuario_autor=="") {
            echo "<script> window.alert(' Ha ocurrrido un error al recuperar los datos, reintente. COD:0013');window.history.back();</script>";
          }else{
            try {
              //Movemos imagen
              $carpeta = '../images/noticias/images/';
              //mover imagen a directorio temporal
              move_uploaded_file($_FILES['foto_intro_noticia']['tmp_name'],$carpeta.$fotografia_intro);

              //Constructor para obtener un nombre unico
              //Renombramos el archivo subido
              $codigo_fecha = date("YmdHis");
              $no_aleatorio = rand(100,999);
              $codigojunto = $codigo_fecha.$no_aleatorio; //17 digitos aleatoreos

              list($nombre,$ext)= explode(".",$fotografia_intro);
              $nombre_nuevo = "$codigojunto"."."."$ext" ;
              //renombra
              rename("../images/noticias/images/$fotografia_intro","../images/noticias/images/$nombre_nuevo");

            } catch (\Exception $e) {
              echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0013');</script>";
            }

            require ("dbcall.php");
            if (!$cnn) {
                die("Conexion Fallida: " . mysqli_connect_error());
            }else {
              $sql = mysqli_prepare($cnn,"INSERT INTO noticias (id_noticia, usuario_autor, titulo_noticia, fecha_noticia, intro_noticia, foto_intro_noticia, cuerpo_noticia) VALUES (NULL,?,?,?,?,?,?)");
              mysqli_stmt_bind_param($sql,"ssssss",utf8_decode($usuario_autor),utf8_decode($titulo_noticia),$fecha_publicacion,utf8_decode($intro_noticia),utf8_decode($nombre_nuevo),utf8_decode($cuerpo_noticia));
              if (mysqli_stmt_execute($sql) == TRUE) {
                //Eliminar el borrador de la db
                  $sqlDEL = mysqli_prepare($cnn,"DELETE FROM borradores WHERE (id_noticia=?)");
                  mysqli_stmt_bind_param($sqlDEL,"i",$id_noticia);
                  if (mysqli_stmt_execute($sqlDEL)==TRUE) {
                    echo "<script> window.alert('Publicación subida con exito');window.location.href='../administracion/menu_principal.php';</script>";
                  }else {
                    echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0013');window.location.href='../administracion/menu_principal.php';</script>";
                  }
              }else {
                  echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0013');window.location.href='../administracion/menu_principal.php';</script>";
              }
            }

          }

        }else {
          echo "<script> window.alert('La imagen no cumple con los parametros Imagen/3MB COD:0013');window.location.href='../administracion/menu_principal.php';</script>";
        }
    }else {
      echo "<script> window.alert('La imagen no cumple con los parametros IMAGEN/FILE COD:0013');window.location.href='../administracion/menu_principal.php';</script>";
    }

  }

}else {
  //REACER
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
