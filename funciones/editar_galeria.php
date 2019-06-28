<?php
if (!isset($_POST["btn_editar_noticia"])) {
  echo "<script> window.location.href='../ingreso.html';</script>";
}else {
  $id_galeria_a_editar = $_POST["id_galeria"];
  $cod_galeria_a_editar = $_POST["cod_galeria"];
  $nom_galeria_a_editar = utf8_decode($_POST["nombre_galeria_editar"]);
  $int_galeria_a_editar = utf8_decode($_POST["intro_galeria_editar"]);

  if ($id_galeria_a_editar=="" || $cod_galeria_a_editar=="" || $nom_galeria_a_editar=="" || $int_galeria_a_editar=="") {
    echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0023'); window.history.back();</script>";
  }else {
    try {
      require ("dbcall.php");
      if (!$cnn) {
          die("Conexion Fallida: " . mysqli_connect_error());
      }else{
        $sql = mysqli_prepare($cnn,"UPDATE datos_galerias SET titulo_galeria = ?, intro_galeria = ? WHERE (id_galeria = ? AND codigo_galeria = ?)");
        mysqli_stmt_bind_param($sql,"ssii",$nom_galeria_a_editar,$int_galeria_a_editar,$id_galeria_a_editar,$cod_galeria_a_editar);
        if (mysqli_stmt_execute($sql) == TRUE) {
          echo "<script> window.alert('Galeria modificada con exito'); window.location.href='../administracion/administrar_album.php';</script>";
        }else {
            echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0007');window.location.href='../administracion/menu_principal.php';</script>";
        }

      }
    } catch (\Exception $e) {
      echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0023'); window.history.back();</script>";
    }

  }
}


 ?>
