<?php
  session_start();
  require ("session_usuario.php");

  if (!isset($_POST["btn_cambiar_imagen"])) {
    echo "<script> window.location.href='../ingreso.html';</script>";
  }else {
    //comprobar foto reemplazar por la que esta y guardar en db
    $border_div = $_POST["input_border"];
    $image_div_name = $_FILES['imagen_index']['name'];
    $image_div_type  = $_FILES['imagen_index']['type'];
    $image_div_tam   = $_FILES['imagen_index']['size'];
    $imagen_old_name = $_POST["old_imagen_index"];

    if ($border_div ==""||$imagen_old_name=="") {
      echo "<script> window.alert('Ha ocurrrido un error al recuperar los datos, reintente. COD:0040');window.history.back();</script>";
    }else {
      if ($image_div_name!="") {
        if ($image_div_type=="image/jpeg" ||$image_div_type=="image/png" ||$image_div_type=="image/gif" ||$image_div_type=="image/jpg" ) {
          if ($image_div_tam <=3000000) {
            if (file_exists("../images/utilidad/$imagen_old_name")) {
                unlink("../images/utilidad/$imagen_old_name");
            }

            $carpeta = $_SERVER['DOCUMENT_ROOT'] . '/Proyectos/ColegioBellavista/images/utilidad/';
            //mover imagen a directorio temporal
            move_uploaded_file($_FILES['imagen_index']['tmp_name'],$carpeta.$image_div_name);

            //Renombramos el archivo subido
            $codigo_fecha = date("YmdHis");
            $no_aleatorio = rand(100,999);
            $codigojunto = $codigo_fecha.$no_aleatorio; //17 digitos aleatoreos

            list($nombre,$ext)= explode(".",$image_div_name);
            $nombre_nuevo = "$codigojunto"."."."$ext" ;
            //renombra
            rename("../images/utilidad/$image_div_name","../images/utilidad/$nombre_nuevo");
            //Almacenamos
            require ("dbcall.php");
            if (!$cnn) {
                die("Conexion Fallida: " . mysqli_connect_error());
            }else {
              $sql = mysqli_prepare($cnn,"UPDATE imagenes_utilidades SET imagen=?, border=? WHERE(id=1)");
              mysqli_stmt_bind_param($sql,"ss",$nombre_nuevo,$border_div);

              if (mysqli_stmt_execute($sql) == TRUE) {
                  echo "<script> window.alert('Imagen actualizada con exito');window.location.href='../administracion/administrar_admision.php';</script>";
              }else {
                  echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0040');window.location.href='../administracion/menu_principal.php';</script>";
              }
            }

          }else {
            echo "<script> window.alert('La imagen ingresada no cumple con los requerimientos: Excede el tamaño permitido (3mb)'); window.history.back();</script>";
          }
        }else {
          echo "<script> window.alert('La imagen ingresada no cumple con los requerimientos: Imagen File (JPEG,PNG,GIF,JPG)'); window.history.back();</script>";
        }
      }else {
        //Actualizamos sin cambiar la foto
        require ("dbcall.php");
        if (!$cnn) {
            die("Conexion Fallida: " . mysqli_connect_error());
        }else {
          $sql = mysqli_prepare($cnn,"UPDATE imagenes_utilidades SET border=? WHERE(id=1)");
          mysqli_stmt_bind_param($sql,"s",$border_div);

          if (mysqli_stmt_execute($sql) == TRUE) {
              echo "<script> window.alert('Imagen actualizada con exito');window.location.href='../administracion/administrar_admision.php';</script>";
          }else {
              echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0040');window.location.href='../administracion/menu_principal.php';</script>";
          }
        }
      }
    }
  }

 ?>
