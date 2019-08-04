<?php
  if (isset($_GET["name"])&& isset($_GET["publicacion"])) {
    $titulo = $_GET["name"];
    $id = $_GET["publicacion"];

    try {
      require('dbcall.php');

      if (!$cnn) {
        die("Conexion Fallida: " . mysqli_connect_error());
      }else{
        //Cambio de zona horaria
        setlocale(LC_ALL, 'es_CL.UTF-8');

        $sql = mysqli_prepare($cnn,"SELECT n.titulo_noticia,n.intro_noticia, n.fecha_noticia, u.nombre, u.apellido, n.cuerpo_noticia, n.vistas
        FROM noticias as n
        INNER JOIN usuarios as u ON u.nombre_usuario = n.usuario_autor WHERE (n.id_noticia = ?)");

        mysqli_stmt_bind_param($sql,"i",$id);
        $rs = mysqli_stmt_execute($sql);
        mysqli_stmt_bind_result($sql,$e_titulo,$e_intro,$e_fecha,$e_nombre,$e_apellido,$e_cuerpo,$vistas);
        while ($fila = mysqli_stmt_fetch($sql)){
          $titulo_publicacion = utf8_encode($e_titulo);
          $intro_publicacion = utf8_encode($e_intro);
          $fecha_publicacion = strftime("%d de %B, %G", strtotime($e_fecha));
          $nombre_autor = utf8_encode($e_nombre);
          $apellido_autor  = utf8_encode($e_apellido);
          $cuerpo_publicacion = utf8_encode($e_cuerpo);
          $vistas_publicacion = $vistas;
        }
      }
    } catch (\Exception $e) {
        echo "<script> alert('Ha ocurrido un error al solicitar la informacion, contacte al administrador. COD:0016');</script>";
    }

    //Contador de visitas de la publicacion
    function contador($v,$nid){
      $contador =$v;
      //Comprobar si el $contador es igual a 999999, pues si es asi no siga contando
      if ($contador == 999999) {
        $contador = "+100mil";
      }else {
        //de otra forma SUMAR +1
        $contador = $contador+1;

        //Se inserta el nuevo registro en la db
        require('dbcall.php');
        if (!$cnn) {
          die("Conexion Fallida: " . mysqli_connect_error());
        }else{
          $sqlCount = mysqli_prepare($cnn,"UPDATE noticias SET vistas = ? WHERE (id_noticia = ?)");
          mysqli_stmt_bind_param($sqlCount,"ii",$contador,$nid);
          if (mysqli_stmt_execute($sqlCount)!=TRUE) {
            echo "<script> console.log('Error al sumar conteo visitas');</script>";
          }
        }
        if ($contador>=9999) {
          $contador="+10mil";
        }
      }
      $nuevo_computo = $contador;
      //Devuelve el nuevo valor
      return $nuevo_computo;
    }

  }else {
    echo "<script> history.back();</script>";
  }

 ?>
