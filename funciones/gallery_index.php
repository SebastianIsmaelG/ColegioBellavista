<?php
  try {
    require ("dbcall.php");
    if (!$cnn) {
        die("Conexion Fallida: " . mysqli_connect_error());
    }else{
      //Busqueda Galerias
      $sql = "SELECT dg.id_galeria,dg.titulo_galeria,dg.intro_galeria
      FROM datos_galerias as dg
      ORDER by rand() LIMIT 6";
      $results = mysqli_query($cnn, $sql);

      if(mysqli_num_rows($results)==TRUE){
        $rows = [];
        while($row = mysqli_fetch_assoc($results)) {
            $rows[] = $row;

            //Por cada row se saca el id, con el id se hace un bucle for para que con cada imagen del id se haga un div en un require externo
        }
        $count_dnone =1;
        $variable_dnone = 'd-none d-sm-block';
        //cuadro1
        $id_galeria_1 = $rows[0]["id_galeria"];
        $titulo_galeria_1 = utf8_encode($rows[0]["titulo_galeria"]);
        $intro_galeria_1 = utf8_encode($rows[0]["intro_galeria"]);
          if (!$cnn) {
            die("Conexion Fallida: " . mysqli_connect_error());
          }else{
              $sql2 = mysqli_prepare($cnn,"SELECT id_imagen, nombre_imagen FROM imagenes_galerias WHERE (id_galeria = ?)");
              mysqli_stmt_bind_param($sql2,"i",$id_galeria_1);
              mysqli_stmt_execute($sql2);
              mysqli_stmt_bind_result($sql2,$idimg,$nameimg);
              $url_galeria = 'images/galerias/';
              $url_photo_none = 'images/utilidad/no_photo_available.jpg';
              $foto_uno = 0;

              while ($fila = mysqli_stmt_fetch($sql2)) {
                if ($foto_uno == 0) {
                  echo "
                  <div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
                    <div class='container_thumbnail'>
                      <img src='";
                      if(isset($nameimg)){
                        echo $url_galeria.$nameimg;
                      }else{
                        echo $url_photo_none;
                      }
                  echo "' alt='Imagen Galeria' class='img-responsive img-thumbnail album-image'>
                      <div class='album-container'>
                        <div class='album-text'>
                          <a href='$url_galeria$nameimg' data-toggle='lightbox' class='text-decoration-none text-white' data-gallery='gallery1'><p class='title_content_album'>Ver Álbum</p></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  ";
                }
                $foto_uno++;
              if ($foto_uno > 1) {
                echo "<div data-toggle='lightbox' data-gallery='gallery1' data-remote='$url_galeria$nameimg'></div>";
              }

          }
        }

        //cuadro2
        $id_galeria_2 = $rows[1]["id_galeria"];
        $titulo_galeria_2 = utf8_encode($rows[1]["titulo_galeria"]);
        $intro_galeria_2 = utf8_encode($rows[1]["intro_galeria"]);
          if (!$cnn) {
            die("Conexion Fallida: " . mysqli_connect_error());
          }else{
              $sql3 = mysqli_prepare($cnn,"SELECT id_imagen, nombre_imagen FROM imagenes_galerias WHERE (id_galeria = ?)");
              mysqli_stmt_bind_param($sql3,"i",$id_galeria_2);
              mysqli_stmt_execute($sql3);
              mysqli_stmt_bind_result($sql3,$idimg,$nameimg);
              $url_galeria = 'images/galerias/';
              $url_photo_none = 'images/utilidad/no_photo_available.jpg';
              $foto_uno = 0;

              while ($fila = mysqli_stmt_fetch($sql3)) {
                if ($foto_uno == 0) {
                  echo "
                  <div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
                    <div class='container_thumbnail'>
                      <img src='";
                      if(isset($nameimg)){
                        echo $url_galeria.$nameimg;
                      }else{
                        echo $url_photo_none;
                      }
                  echo "' alt='Imagen Galeria' class='img-responsive img-thumbnail album-image'>
                      <div class='album-container'>
                        <div class='album-text'>
                          <a href='$url_galeria$nameimg' data-toggle='lightbox' class='text-decoration-none text-white' data-gallery='gallery2'><p class='title_content_album'>Ver Álbum</p></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  ";
                }
                $foto_uno++;
              if ($foto_uno > 1) {
                echo "<div data-toggle='lightbox' data-gallery='gallery2' data-remote='$url_galeria$nameimg'></div>";
              }

          }
        }

        //cuadro3
        $id_galeria_3 = $rows[2]["id_galeria"];
        $titulo_galeria_3 = utf8_encode($rows[2]["titulo_galeria"]);
        $intro_galeria_3 = utf8_encode($rows[2]["intro_galeria"]);
          if (!$cnn) {
            die("Conexion Fallida: " . mysqli_connect_error());
          }else{
              $sql4 = mysqli_prepare($cnn,"SELECT id_imagen, nombre_imagen FROM imagenes_galerias WHERE (id_galeria = ?)");
              mysqli_stmt_bind_param($sql4,"i",$id_galeria_3);
              mysqli_stmt_execute($sql4);
              mysqli_stmt_bind_result($sql4,$idimg,$nameimg);
              $url_galeria = 'images/galerias/';
              $url_photo_none = 'images/utilidad/no_photo_available.jpg';
              $foto_uno = 0;

              while ($fila = mysqli_stmt_fetch($sql4)) {
                if ($foto_uno == 0) {
                  echo "
                  <div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
                    <div class='container_thumbnail'>
                      <img src='";
                      if(isset($nameimg)){
                        echo $url_galeria.$nameimg;
                      }else{
                        echo $url_photo_none;
                      }
                  echo "' alt='Imagen Galeria' class='img-responsive img-thumbnail album-image'>
                      <div class='album-container'>
                        <div class='album-text'>
                          <a href='$url_galeria$nameimg' data-toggle='lightbox' class='text-decoration-none text-white' data-gallery='gallery3'><p class='title_content_album'>Ver Álbum</p></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  ";
                }
                $foto_uno++;
              if ($foto_uno > 1) {
                echo "<div data-toggle='lightbox' data-gallery='gallery3' data-remote='$url_galeria$nameimg'></div>";
              }

          }
        }

        //cuadro4
        $id_galeria_4 = $rows[3]["id_galeria"];
        $titulo_galeria_4 = utf8_encode($rows[3]["titulo_galeria"]);
        $intro_galeria_4 = utf8_encode($rows[3]["intro_galeria"]);
          if (!$cnn) {
            die("Conexion Fallida: " . mysqli_connect_error());
          }else{
              $sql5 = mysqli_prepare($cnn,"SELECT id_imagen, nombre_imagen FROM imagenes_galerias WHERE (id_galeria = ?)");
              mysqli_stmt_bind_param($sql5,"i",$id_galeria_4);
              mysqli_stmt_execute($sql5);
              mysqli_stmt_bind_result($sql5,$idimg,$nameimg);
              $url_galeria = 'images/galerias/';
              $url_photo_none = 'images/utilidad/no_photo_available.jpg';
              $foto_uno = 0;

              while ($fila = mysqli_stmt_fetch($sql5)) {
                if ($foto_uno == 0) {
                  echo "
                  <div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
                    <div class='container_thumbnail'>
                      <img src='";
                      if(isset($nameimg)){
                        echo $url_galeria.$nameimg;
                      }else{
                        echo $url_photo_none;
                      }
                  echo "' alt='Imagen Galeria' class='img-responsive img-thumbnail album-image'>
                      <div class='album-container'>
                        <div class='album-text'>
                          <a href='$url_galeria$nameimg' data-toggle='lightbox' class='text-decoration-none text-white' data-gallery='gallery4'><p class='title_content_album'>Ver Álbum</p></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  ";
                }
                $foto_uno++;
              if ($foto_uno > 1) {
                echo "<div data-toggle='lightbox' data-gallery='gallery4' data-remote='$url_galeria$nameimg'></div>";
              }

          }
        }

        //cuadro5
        $id_galeria_5 = $rows[4]["id_galeria"];
        $titulo_galeria_5 = utf8_encode($rows[4]["titulo_galeria"]);
        $intro_galeria_5 = utf8_encode($rows[4]["intro_galeria"]);
          if (!$cnn) {
            die("Conexion Fallida: " . mysqli_connect_error());
          }else{
              $sql6 = mysqli_prepare($cnn,"SELECT id_imagen, nombre_imagen FROM imagenes_galerias WHERE (id_galeria = ?)");
              mysqli_stmt_bind_param($sql6,"i",$id_galeria_5);
              mysqli_stmt_execute($sql6);
              mysqli_stmt_bind_result($sql6,$idimg,$nameimg);
              $url_galeria = 'images/galerias/';
              $url_photo_none = 'images/utilidad/no_photo_available.jpg';
              $foto_uno = 0;

              while ($fila = mysqli_stmt_fetch($sql6)) {
                if ($foto_uno == 0) {
                  echo "
                  <div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
                    <div class='container_thumbnail'>
                      <img src='";
                      if(isset($nameimg)){
                        echo $url_galeria.$nameimg;
                      }else{
                        echo $url_photo_none;
                      }
                  echo "' alt='Imagen Galeria' class='img-responsive img-thumbnail album-image'>
                      <div class='album-container'>
                        <div class='album-text'>
                          <a href='$url_galeria$nameimg' data-toggle='lightbox' class='text-decoration-none text-white' data-gallery='gallery5'><p class='title_content_album'>Ver Álbum</p></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  ";
                }
                $foto_uno++;
              if ($foto_uno > 1) {
                echo "<div data-toggle='lightbox' data-gallery='gallery5' data-remote='$url_galeria$nameimg'></div>";
              }

          }
        }

        //cuadro6
        $id_galeria_6 = $rows[5]["id_galeria"];
        $titulo_galeria_6 = utf8_encode($rows[5]["titulo_galeria"]);
        $intro_galeria_6 = utf8_encode($rows[5]["intro_galeria"]);
          if (!$cnn) {
            die("Conexion Fallida: " . mysqli_connect_error());
          }else{
              $sql7 = mysqli_prepare($cnn,"SELECT id_imagen, nombre_imagen FROM imagenes_galerias WHERE (id_galeria = ?)");
              mysqli_stmt_bind_param($sql7,"i",$id_galeria_6);
              mysqli_stmt_execute($sql7);
              mysqli_stmt_bind_result($sql7,$idimg,$nameimg);
              $url_galeria = 'images/galerias/';
              $url_photo_none = 'images/utilidad/no_photo_available.jpg';
              $foto_uno = 0;

              while ($fila = mysqli_stmt_fetch($sql7)) {
                if ($foto_uno == 0) {
                  echo "
                  <div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>


                    <div class='container_thumbnail'>
                      <img src='"; if(isset($nameimg)){ echo $url_galeria.$nameimg; }else{ echo $url_photo_none; }
                      echo "' alt='Imagen Galeria' class='img-responsive img-thumbnail album-image'>

                      <div class='album-container'>
                        <div class='album-text'>
                          <a href='$url_galeria$nameimg' data-toggle='lightbox' class='text-decoration-none text-white' data-gallery='gallery6'><p class='title_content_album'>Ver Álbum</p></a>
                        </div>
                      </div>

                    </div>
                  </div>
                  ";
                }
                $foto_uno++;
              if ($foto_uno > 1) {
                echo "<div data-toggle='lightbox' data-gallery='gallery6' data-remote='$url_galeria$nameimg'></div>";
              }

          }
        }

      }
    }
  } catch (\Exception $e) {
    echo "<script>console.log('Ha ocurrido un error inesperado, contacte al administador. COD:0024')</script>";
  }


 ?>


<!--
//Sentencia de busqueda galerias
$sql = "SELECT dg.id_galeria,dg.titulo_galeria,dg.intro_galeria
FROM datos_galerias as dg
ORDER by rand() LIMIT 6";
$results = mysqli_query($cnn, $sql);
if(mysqli_num_rows($results)>="6"){
  $rows = [];
  while($row = mysqli_fetch_assoc($results)) {
      $rows[] = $row;
      //Por cada row se saca el id, con el id se hace un bucle for para que con cada imagen del id se haga un div en un require externo
  }
  //cuadro1
  $id_galeria_1 = $rows[0]["id_galeria"];
  $titulo_galeria_1 = utf8_encode($rows[0]["titulo_galeria"]);
  $intro_galeria_1 = utf8_encode($rows[0]["intro_galeria"]);
  if (!$cnn) {
    die("Conexion Fallida: " . mysqli_connect_error());
  }else{
      //Select count

  }
  //LLamado imagenes cuadro1
  function ImagenesGaleria($id_galeria_1){
    for ($i=0; $i == $total_images ; $i++) {
      //Select all fotos y en el while se crea en div
      echo "<div></div>";
    }
  }
  //cuadro2
  $id_galeria_2 = $rows[1]["id_galeria"];
  $titulo_galeria_2 = utf8_encode($rows[1]["titulo_galeria"]);
  $intro_galeria_2 = utf8_encode($rows[1]["intro_galeria"]);
  //cuadro3
  $id_galeria_3 = $rows[2]["id_galeria"];
  $titulo_galeria_3 = utf8_encode($rows[2]["titulo_galeria"]);
  $intro_galeria_3 = utf8_encode($rows[2]["intro_galeria"]);
  //cuadro4
  $id_galeria_4 = $rows[3]["id_galeria"];
  $titulo_galeria_4 = utf8_encode($rows[3]["titulo_galeria"]);
  $intro_galeria_4 = utf8_encode($rows[3]["intro_galeria"]);
  //cuadro5
  $id_galeria_5 = $rows[4]["id_galeria"];
  $titulo_galeria_5 = utf8_encode($rows[4]["titulo_galeria"]);
  $intro_galeria_5 = utf8_encode($rows[4]["intro_galeria"]);
  //cuadro6
  $id_galeria_6 = $rows[5]["id_galeria"];
  $titulo_galeria_6 = utf8_encode($rows[5]["titulo_galeria"]);
  $intro_galeria_6 = utf8_encode($rows[5]["intro_galeria"]);

  //Fin de las declaraciones


}else {
  echo "";
}
-->
