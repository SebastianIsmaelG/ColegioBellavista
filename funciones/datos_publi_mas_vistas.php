<?php
  try {
    if (!isset($id)) {
    echo "<script> console.log('No existe la variable id para realizar la consulta');</script>";
    }else {
      $ruta_noticias = "images/noticias/images/";
      $ruta_no_image = "images/utilidad/no_photo_available.jpg";
      require("dbcall.php");
      if (!$cnn) {
          die("Conexion Fallida: " . mysqli_connect_error());
      }else{
        //Quitar el id de la noticia actual en la consulta
        $sql = "SELECT id_noticia, titulo_noticia, intro_noticia, foto_intro_noticia FROM noticias WHERE ( id_noticia <> $id ) ORDER BY vistas DESC LIMIT 4";
        $results = mysqli_query($cnn, $sql);

        if (mysqli_query($cnn, $sql)==TRUE) {
          if(mysqli_num_rows($results)>=4){
            $rows = [];

            while($row = mysqli_fetch_assoc($results)) {
                      $rows[] = $row;
            }
            //row0
            $id_mv_0 = $rows[0]["id_noticia"];
            $titulo_mv_0 = utf8_encode($rows[0]["titulo_noticia"]);
            $intro_mv_0 = utf8_encode($rows[0]["intro_noticia"]);
            $fintro_mv_0 = utf8_encode($rows[0]["foto_intro_noticia"]);
            //row1
            $id_mv_1 = $rows[1]["id_noticia"];
            $titulo_mv_1 = utf8_encode($rows[1]["titulo_noticia"]);
            $intro_mv_1 = utf8_encode($rows[1]["intro_noticia"]);
            $fintro_mv_1 = utf8_encode($rows[1]["foto_intro_noticia"]);
            //row2
            $id_mv_2 = $rows[2]["id_noticia"];
            $titulo_mv_2 = utf8_encode($rows[2]["titulo_noticia"]);
            $intro_mv_2 = utf8_encode($rows[2]["intro_noticia"]);
            $fintro_mv_2 = utf8_encode($rows[2]["foto_intro_noticia"]);
            //row3
            $id_mv_3 = $rows[3]["id_noticia"];
            $titulo_mv_3 = utf8_encode($rows[3]["titulo_noticia"]);
            $intro_mv_3 = utf8_encode($rows[3]["intro_noticia"]);
            $fintro_mv_3 = utf8_encode($rows[3]["foto_intro_noticia"]);
          }else {
            echo "";
          }

        }else {
          echo "<script> window.alert('Ha ocurrido un error inesperado contacte al administrador. COD:0041')</script>";
        }

      }
    }

  } catch (\Exception $e) {
    echo "<script> window.alert('Ha ocurrido un error inesperado contacte al administrador. COD:0041')</script>";
  }



 ?>
