<?php
  session_start();
  setlocale(LC_ALL, 'es_CL.UTF-8');
  error_reporting(E_ERROR | E_WARNING | E_PARSE);
  require("session_usuario.php");

  if (!isset($_POST["titulo"]) || !isset($_POST["intro"])) {
    echo "<script> window.location.href='index.php';</script>";
  }else {
    try {
      $titulo_album = $_POST["titulo"];
      $intro_album = $_POST["intro"];
      //codigo unico para identificar la galeria
      $codigo_fecha = date("YmdHis");
      $no_aleatorio = rand(100,999);
      $codigojunto = $codigo_fecha.$no_aleatorio; //17 digitos aleatoreos

      require('dbcall.php');
      if (!$cnn) {
        die("Conexion fallida :" . mysqli_connect_error());
      }else {
        $sql = mysqli_prepare($cnn, "INSERT INTO datos_galerias (id_galeria,codigo_galeria,titulo_galeria,intro_galeria) VALUES (NULL,?,?,?)");
        mysqli_stmt_bind_param($sql,"iss",utf8_decode($codigojunto),utf8_decode($titulo_album),utf8_decode($intro_album));

        if (mysqli_stmt_execute($sql) == TRUE) {
            //Ahora buscamos la id de la galeria para pasarla conjunto con las imagenes
            $sql2 = mysqli_prepare($cnn,"SELECT dg.id_galeria FROM datos_galerias as dg WHERE (dg.titulo_galeria = ? and dg.intro_galeria = ? and dg.codigo_galeria=?)");
            mysqli_stmt_bind_param($sql2,"ssi",utf8_decode($titulo_album),utf8_decode($intro_album),$codigojunto);
            if (mysqli_stmt_execute($sql2) == TRUE) {

              mysqli_stmt_bind_result($sql2,$ID);
              while ($fila = mysqli_stmt_fetch($sql2)) {
                $id_galeria = $ID;
                echo "$id_galeria";
              }

            }else {
              echo "<script> console.log('error sql');</script>";
            }

        }else {
          echo "<script> console.log('Ocurrio un error al crear la galeria, contacte al administrador. COD:0020');</script>";
        }

      }


    } catch (\Exception $e) {
      echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0020');</script>";
    }

  }


 ?>
