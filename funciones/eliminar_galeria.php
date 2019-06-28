<?php
  if (!isset($_POST["btn_eliminar_galeria"])) {
    echo "<script> window.location.href='../ingreso.html';</script>";
  }else {
    $id_galeria = $_POST["id_galeria"];
    $cod_galeria = $_POST["codigo_galeria"];

    if ($id_galeria == "" || $cod_galeria=="") {
      echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0022'); window.location.href='../administracion/administrar_album.php';</script>";
    }else {
      try {
        require ("dbcall.php");
        if (!$cnn) {
            die("Conexion Fallida: " . mysqli_connect_error());
        }else{
            //Buscamos las fotos correspondientes al album
            $sqlFind = mysqli_prepare($cnn,"SELECT nombre_imagen FROM imagenes_galerias WHERE (id_galeria = ?)");
            mysqli_stmt_bind_param($sqlFind,"i",$id_galeria);
            mysqli_stmt_execute($sqlFind);
            mysqli_stmt_store_result($sqlFind);

            if (mysqli_stmt_num_rows($sqlFind)==0) {
              //Ahora solo queda borrar el album
              $sqlDROP = mysqli_prepare($cnn,"DELETE FROM datos_galerias WHERE (id_galeria = ?)");
              mysqli_stmt_bind_param($sqlDROP,"i",$id_galeria);
              if (mysqli_stmt_execute($sqlDROP)==TRUE) {
                echo "<script>alert('Galeria Eliminada con exito'); window.location.href='../administracion/administrar_album.php';</script>";
              }else {
                echo "<script>alert('Ha ocurrido un error inesperado contacte al administrador, COD:0022');</script>";
              }
            }else {
              //Se buscan las fotos y se eliminan del servidor
              mysqli_stmt_bind_result($sqlFind,$n_img);
              $ruta = "../images/galerias/";
              while ($fila = mysqli_stmt_fetch($sqlFind)) {
                $fotografia = $ruta.$n_img;
                if (file_exists($fotografia)) {
                  unlink($fotografia);
                  echo "<script>console.log('Imagen $n_img eliminada');</script>";

                  //Borrar la db
                  $sqlDelete = mysqli_prepare($cnn,"DELETE FROM imagenes_galerias WHERE (id_galeria = ?)");
                  mysqli_stmt_bind_param($sqlDelete,"i",$id_galeria);
                  if (mysqli_stmt_execute($sqlDelete)==TRUE) {
                    echo "<script>console.log('Imagen $n_img eliminada de la base de datos');</script>";
                  }
                  //Ahora solo queda borrar el album
                  $sqlDROP = mysqli_prepare($cnn,"DELETE FROM datos_galerias WHERE (id_galeria = ?)");
                  mysqli_stmt_bind_param($sqlDROP,"i",$id_galeria);
                  if (mysqli_stmt_execute($sqlDROP)==TRUE) {
                    echo "<script>alert('Galeria Eliminada con exito'); window.location.href='../administracion/administrar_album.php';</script>";
                  }else {
                    echo "<script>alert('Ha ocurrido un error inesperado contacte al administrador, COD:0022');</script>";
                  }

                }else {
                  echo "<script>console.log('Imagen $fotografia .- no ha sido encontrada');</script>";
                  //Buscamos si esta en la db y se intenta eliminar
                  $sqlDelete = mysqli_prepare($cnn,"DELETE FROM imagenes_galerias WHERE (id_galeria = ?)");
                  mysqli_stmt_bind_param($sqlDelete,"i",$id_galeria);
                  if (mysqli_stmt_execute($sqlDelete)==TRUE) {
                    echo "<script>console.log('Imagen $n_img eliminada de la base de datos');</script>";
                  }
                  //Ahora solo queda borrar el album
                  $sqlDROP = mysqli_prepare($cnn,"DELETE FROM datos_galerias WHERE (id_galeria = ?)");
                  mysqli_stmt_bind_param($sqlDROP,"i",$id_galeria);
                  if (mysqli_stmt_execute($sqlDROP)==TRUE) {
                    echo "<script>alert('Galeria Eliminada con exito'); window.location.href='../administracion/administrar_album.php';</script>";
                  }else {
                    echo "<script>alert('Ha ocurrido un error inesperado contacte al administrador, COD:0022');</script>";
                  }

                }

              }
            
            }

        }


      } catch (\Exception $e) {
        echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0022');</script>";
      }
    }
  }
 ?>
