<?php
  if (!isset($_POST["btn_eliminar_noticia"])) {
    echo "<script> window.location.href='../ingreso.html';</script>";
  }else {
    $id_noticia = $_POST["id_noticia"];

    if ($id_noticia == "") {
      echo "<script> window.alert(' Ha ocurrrido un error al recuperar los datos, reintente. COD:0012');window.history.back();</script>";
    }else {
      try {
        require ("dbcall.php");
        if (!$cnn) {
            die("Conexion Fallida: " . mysqli_connect_error());
        }else{
            //Ingresa los datos
            $sql = mysqli_prepare($cnn,"DELETE FROM noticias WHERE (noticias.id_noticia=?)");
            mysqli_stmt_bind_param($sql,"i",$id_noticia);
            if (mysqli_stmt_execute($sql) == TRUE) {
                echo "<script> window.alert('Publicación eliminada con exito');window.location.href='../paginas_administracion/administrar_noticia.php';</script>";
            }else {
                echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0012');window.location.href='../paginas_administracion/menu_principal.php';</script>";
            }
        }
      } catch (\Exception $e) {
        echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0012');</script>";
      }
    }
  }
 ?>
