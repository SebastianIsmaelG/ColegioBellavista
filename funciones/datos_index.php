<?php
  try {
    require('dbcall.php');
    if (!$cnn) {
      die("Conexion Fallida: " . mysqli_connect_error());
    }else{
      //Cambio de zona horaria
      setlocale(LC_ALL, 'es_CL.UTF-8');

      //Sentencia de busqueda Noticias
      $sql = "SELECT n.id_noticia,n.titulo_noticia, n.intro_noticia, n.fecha_noticia
      FROM noticias as n
      ORDER by rand() LIMIT 4";
      $results = mysqli_query($cnn, $sql);
      if(mysqli_num_rows($results)>="4"){
        $rows = [];
        while($row = mysqli_fetch_assoc($results)) {
                  $rows[] = $row;
        }
        //Variables que van al index sustraidas de la consulta

        //cuadro1
        $id_noticia_1 = $rows[0]["id_noticia"];
        $titulo_noticia_1 = utf8_encode($rows[0]["titulo_noticia"]);
        $intro_noticia_1 = utf8_encode($rows[0]["intro_noticia"]);
        $fecha_noticia_1 = utf8_encode($rows[0]["fecha_noticia"]);

        //Cuadro2
        $id_noticia_2 = $rows[1]["id_noticia"];
        $titulo_noticia_2 = utf8_encode($rows[1]["titulo_noticia"]);
        $intro_noticia_2 = utf8_encode($rows[1]["intro_noticia"]);
        $fecha_noticia_2 = utf8_encode($rows[1]["fecha_noticia"]);
        //Cuadro3
        $id_noticia_3 = $rows[2]["id_noticia"];
        $titulo_noticia_3 = utf8_encode($rows[2]["titulo_noticia"]);
        $intro_noticia_3 = utf8_encode($rows[2]["intro_noticia"]);
        $fecha_noticia_3 = utf8_encode($rows[2]["fecha_noticia"]);

        $id_noticia_4 = $rows[3]["id_noticia"];
        $titulo_noticia_4 = utf8_encode($rows[3]["titulo_noticia"]);
        $intro_noticia_4 = utf8_encode($rows[3]["intro_noticia"]);
        $fecha_noticia_4 = utf8_encode($rows[3]["fecha_noticia"]);

        //Fin de las declaraciones
        //$rows[2]["modelo"]; //[la row] ["columna"]
        mysqli_free_result($results);

      }else {
        echo "";
      }

      //Sentencia de busqueda actividades
      $sql = "SELECT a.id_actividad, a.nombre_actividad, a.fecha_actividad
      FROM actividades as a
      ORDER by rand() LIMIT 3";

      $results = mysqli_query($cnn, $sql);
      if (mysqli_num_rows($results)>="3") {
        $rows = [];
        while($row = mysqli_fetch_assoc($results)) {
                  $rows[] = $row;
        }
        //Variables que van al index sustraidas de la consulta

        //cuadro1
        $id_actividad_1 = $rows[0]["id_actividad"];
        $titulo_actividad_1 = utf8_encode($rows[0]["nombre_actividad"]);
        $intro_actividad_1 = $rows[0]["fecha_actividad"];
        //Fecha convertida
        $fecha_actividad_1 = strftime("%d de %B", strtotime($intro_actividad_1));

        //Cuadro2
        $id_actividad_2 = $rows[1]["id_actividad"];
        $titulo_actividad_2 =  utf8_encode($rows[1]["nombre_actividad"]);
        $intro_actividad_2 = $rows[1]["fecha_actividad"];
        //Fecha convertida
        $fecha_actividad_2 = strftime("%d de %B", strtotime($intro_actividad_2));

        //Cuadro3
        $id_actividad_3 = $rows[2]["id_actividad"];
        $titulo_actividad_3 =  utf8_encode($rows[2]["nombre_actividad"]);
        $intro_actividad_3 = $rows[2]["fecha_actividad"];
        //Fecha convertida
        $fecha_actividad_3 = strftime("%d de %B", strtotime($intro_actividad_3));

        //Fin de las declaraciones
        mysqli_free_result($results);
      }else {
        echo "";
      }

    }

  } catch (\Exception $e) {
    echo "<script> alert('Ha ocurrido un error al solicitar la informacion, contacte al administrador. COD:0015');</script>";
  }

 ?>
