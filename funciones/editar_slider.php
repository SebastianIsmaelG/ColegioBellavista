<?php
session_start();
require ("session_usuario.php");
  if (!isset($_POST["btn_editar_slider"])) {
    echo "<script> window.location.href='../ingreso.html';</script>";
  }else {
    try {
      $fotografia_antigua = $_POST["imagen_antigua"];
      $cod_slider = $_POST["cod_SLIDER"];

      $nombre_fotografia = $_FILES["fotografia_slider"]['name'];
      $tipo_fotografia  = $_FILES["fotografia_slider"]['type'];
      $tam_fotografia  = $_FILES["fotografia_slider"]['size'];
      $dir_temporal = $_FILES["fotografia_slider"]['tmp_name'];

      switch ($tipo_fotografia) {
        case 'image/jpeg':
            $original = imagecreatefromjpeg($dir_temporal);
        break;
        case 'image/png':
          $original = imagecreatefrompng($dir_temporal);
        break;
        case 'image/gif':
          $original = imagecreatefromgif($dir_temporal);
        break;
        case 'image/jpg':
            $original = imagecreatefromjpeg($dir_temporal);
        break;

        default:
          $original = imagecreatefromjpeg($dir_temporal);
          break;
      }
      $alto_fotografia = imagesy($original);
      $ancho_fotografia  = imagesx($original);


      if ($cod_slider==""||$nombre_fotografia==""||$fotografia_antigua=="") {
        echo "<script> alert('Ha ocurrido un error inesperado contacte al administador, COD:0026'); window.history.back();<script>";
      }else {
        if ($tipo_fotografia=="image/jpeg" ||$tipo_fotografia=="image/png" ||$tipo_fotografia=="image/gif" ||$tipo_fotografia=="image/jpg" ){
          if ($tam_fotografia<=3000000) {
            if ($alto_fotografia=="1600" || $ancho_fotografia=="3250") {
              try {
                //Borramos la imagen vieja
                if (file_exists("../images/slider/$fotografia_antigua")) {
                  unlink("../images/slider/$fotografia_antigua");
                  echo "<script>console.log('Imageneliminada');</script>";
                }
                //Se sube el nuevo
                $carpeta = $_SERVER['DOCUMENT_ROOT'] . '/Proyectos/ColegioBellavista/images/slider/';
                //mover imagen a directorio temporal
                move_uploaded_file($_FILES['fotografia_slider']['tmp_name'],$carpeta.$nombre_fotografia);

                //Se renombra
                  //codigo unico para identificar la imagen
                    $codigo_fecha = date("YmdHis");
                    $no_aleatorio = rand(100,999);
                    $codigojunto = $codigo_fecha.$no_aleatorio; //17 digitos aleatoreos

                  list($nombre,$ext)= explode(".",$nombre_fotografia);
                  $nombre_nuevo = "$codigojunto"."."."$ext" ;
                  //renombra
                  rename("../images/slider/$nombre_fotografia","../images/slider/$nombre_nuevo");
                  //Se guarda en la db
                  try {
                    require ("dbcall.php");
                    if (!$cnn) {
                        die("Conexion Fallida: " . mysqli_connect_error());
                    }else {
                      $sql = mysqli_prepare($cnn,"UPDATE datos_slider SET imagen_slider=? WHERE (id_slider=?)");
                      mysqli_stmt_bind_param($sql,"ii",$nombre_nuevo,$cod_slider);
                      if (mysqli_stmt_execute($sql)==TRUE) {
                        echo "<script> window.alert('Imagen Modificada');window.location.href='../administracion/administrar_slider.php';</script>";
                      }else {
                        echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0026');window.location.href='../administracion/menu_principal.php';</script>";
                      }
                    }
                  } catch (\Exception $e) {
                    echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0026');window.location.href='../administracion/menu_principal.php';</script>";
                  }



              } catch (\Exception $e) {
                echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0026');window.location.href='../administracion/menu_principal.php';</script>";
              }
            }else {
              echo "<script> alert('El formato de la imagen no cumple los requisitos de resolucion 1600px Alto, 3250px Ancho'); window.history.back();<script>";
            }

          }else {
            echo "<script> alert('El tamaño de la imagen no cumple los requisitos: 3MB'); window.history.back();<script>";
          }
        }else {
          echo "<script> alert('El formato de la imagen no cumple los requisitos: Imagen File'); window.history.back();<script>";
        }
      }






    } catch (\Exception $e) {
      echo "<script> alert('Ha ocurrido un error inesperado contacte al administador. COD:0026');window.location.href='../administracion/menu_principal.php';<script>";
    }

  }



 ?>
