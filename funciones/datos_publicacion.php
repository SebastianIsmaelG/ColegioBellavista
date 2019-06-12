<?php
  if (isset($_GET["name"])&& isset($_GET["publicacion"])) {
    $titulo = $_GET["name"];
    $id = $_GET["publicacion"];

    try {
      require('dbcall.php');

      if (!$cnn) {
        die("Conexion Fallida: " . mysqli_connect_error());
      }else{
        //Sentencia de busqueda Noticia
        setlocale(LC_TIME, 'es_CO.UTF-8');

        $sql = mysqli_prepare($cnn,"SELECT n.titulo_noticia, n.fecha_noticia, u.nombre, u.apellido, n.cuerpo_noticia
        FROM noticias as n
        INNER JOIN usuarios as u ON u.nombre_usuario = n.usuario_autor WHERE (n.id_noticia = ?)");

        mysqli_stmt_bind_param($sql,"i",$id);
        $rs = mysqli_stmt_execute($sql);
        mysqli_stmt_bind_result($sql,$e_titulo,$e_fecha,$e_nombre,$e_apellido,$e_cuerpo);
        while ($fila = mysqli_stmt_fetch($sql)){
          $titulo_publicacion = utf8_encode($e_titulo);
          $fecha_publicacion = strftime("%d de %B, %G", strtotime($e_fecha));
          $nombre_autor = utf8_encode($e_nombre);
          $apellido_autor  = utf8_encode($e_apellido);
          $cuerpo_publicacion = utf8_encode($e_cuerpo);
        }

      }

    } catch (\Exception $e) {
        echo "<script> alert('Ha ocurrido un error al solicitar la informacion, contacte al administrador. COD:0016');</script>";
    }


  }else {
    echo "<script> history.back();</script>";
  }

 ?>
