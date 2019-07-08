<?php
  error_reporting(E_ERROR | E_PARSE);
  session_start();
  require ("session_usuario.php");
  if (!isset($_POST["btn_modificar_noticia"])) {
      echo "<script> window.location.href='../ingreso.html';</script>";
  }else {
    try {
      $id = $_POST["id_noticia"];
      $titulo = $_POST["titular_noticia"];
      $intro = $_POST["introduccion_noticia"];
      $nombre_fotografia_intro_old = $_POST["foto_intro_noticia_old"];
      $cuerpo = $_POST["cuerpo_noticia"];

      $nombre_fotografia_intro = $_FILES['foto_intro_noticia']['name'];
      $tipo_fotografia_intro  = $_FILES['foto_intro_noticia']['type'];
      $tam_fotografia_intro   = $_FILES['foto_intro_noticia']['size'];
      //Comprueba si ingreso una imagen en el input file
      if ($nombre_fotografia_intro=="") {
        $nombre_fotografia = $nombre_fotografia_intro_old;
      }else {
        $nombre_fotografia = $nombre_fotografia_intro;
      }


      if ($titulo==""||$intro==""||$cuerpo==""||$nombre_fotografia_intro_old=="") {
        echo "<script> window.alert(' Ha ocurrrido un error al recuperar los datos, reintente. COD:0011');window.history.back();</script>";
      }else {
        require ("dbcall.php");
        if (!$cnn) {
            die("Conexion Fallida: " . mysqli_connect_error());
        }else {
          $sqlcount = mysqli_prepare($cnn,"SELECT foto_intro_noticia from noticias WHERE (id_noticia=?)");
          mysqli_stmt_bind_param($sqlcount,"i",$id);
          if (mysqli_stmt_execute($sqlcount)==TRUE) {

            mysqli_stmt_store_result($sqlcount);
            $contar = mysqli_stmt_num_rows($sqlcount);

            if ($contar == 0) {
              echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0011');window.location.href='../administracion/menu_principal.php';</script>";
            }else {

                mysqli_stmt_bind_result($sqlcount, $fv);
                while ($fila = mysqli_stmt_fetch($sqlcount)) {
                    $foto_en_db = $fv;
                }
                if ($foto_en_db == $nombre_fotografia) {
                  // code... solo actualiza db omite foto
                    $sql = mysqli_prepare($cnn,"UPDATE NOTICIAS SET titulo_noticia=?,intro_noticia=?,cuerpo_noticia=? WHERE(id_noticia=?)");
                    mysqli_stmt_bind_param($sql,"sssi",utf8_decode($titulo),utf8_decode($intro),utf8_decode($cuerpo),$id);

                    if (mysqli_stmt_execute($sql) == TRUE) {
                        echo "<script> window.alert('Publicación actualizada con exito');window.location.href='../administracion/administrar_noticia.php';</script>";
                    }else {
                        echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:00011');window.location.href='../administracion/menu_principal.php';</script>";
                    }
                }else {
                  // code... reemplazamos subimos y borramos la anterior
                  if ($tipo_fotografia_intro=="image/jpeg" ||$tipo_fotografia_intro=="image/png" ||$tipo_fotografia_intro=="image/gif" ||$tipo_fotografia_intro=="image/jpg" ) {
                    if ($tam_fotografia_intro<=3000000) {
                        try {
                          //Borramos la imagen vieja
                          unlink("../images/noticias/images/$nombre_fotografia_intro_old");

                          $carpeta = $_SERVER['DOCUMENT_ROOT'] . '/Proyectos/ColegioBellavista/images/noticias/images/';
                          //mover imagen a directorio temporal
                          move_uploaded_file($_FILES['foto_intro_noticia']['tmp_name'],$carpeta.$nombre_fotografia_intro);

                          //Constructor para obtener un nombre unico
                          //Renombramos el archivo subido
                          $codigo_fecha = date("YmdHis");
                          $no_aleatorio = rand(100,999);
                          $codigojunto = $codigo_fecha.$no_aleatorio; //17 digitos aleatoreos

                          list($nombre,$ext)= explode(".",$nombre_fotografia_intro);
                          $nombre_nuevo = "$codigojunto"."."."$ext" ;
                          //renombra
                          rename("../images/noticias/images/$nombre_fotografia_intro","../images/noticias/images/$nombre_nuevo");

                          //Almacena los datos
                          $sql = mysqli_prepare($cnn,"UPDATE noticias SET titulo_noticia=?,intro_noticia=?, foto_intro_noticia = ?, cuerpo_noticia=? WHERE(id_noticia=?)");
                          mysqli_stmt_bind_param($sql,"ssssi",utf8_decode($titulo),utf8_decode($intro),utf8_decode($nombre_nuevo), utf8_decode($cuerpo),$id);

                          if (mysqli_stmt_execute($sql) == TRUE) {
                              echo "<script> window.alert('Publicación actualizada con exito');window.location.href='../administracion/administrar_noticia.php';</script>";
                          }else {
                              echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:00011');window.location.href='../administracion/menu_principal.php';</script>";
                          }


                        } catch (\Exception $e) {
                          echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:00011');window.location.href='../administracion/menu_principal.php';</script>";
                        }

                    }else {
                        echo "<script> window.alert('La imagen ingresada no cumple con los requerimientos: Excede el tamaño permitido (3mb)'); window.history.back();</script>";
                    }
                  }else {
                      echo "<script> window.alert('La imagen ingresada no cumple con los requerimientos: Imagen File (JPEG,PNG,GIF,JPG)'); window.history.back();</script>";
                  }

                }

            }
          }else {
            echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0011');window.location.href='../administracion/menu_principal.php';</script>";
          }

        }
      }
    } catch (\Exception $e) {
        echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0011');</script>";
    }

  }
 ?>
