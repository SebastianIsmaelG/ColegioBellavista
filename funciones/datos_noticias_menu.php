<!DOCTYPE html>
<?php
  try {
    require('dbcall.php');
    //Cambio de zona horaria
    setlocale(LC_ALL, 'es_CL.UTF-8');

    if (!$cnn) {
      die("Conexion Fallida: " . mysqli_connect_error());
    }else{
      //Ya sabes para que es
      $paginacion  = 5;

      if (isset($_GET['pag'])) {
        $pagina = $_GET['pag'];
      }else {
        $pagina = 1;
      }
      $empiezaPaginacion = ($pagina-1) *  $paginacion;

      //Sentencia Sql
      $sql = mysqli_prepare($cnn,"SELECT n.id_noticia,n.titulo_noticia, n.intro_noticia, n.fecha_noticia
      FROM noticias as n ORDER BY n.fecha_noticia ASC LIMIT ?,?");
      mysqli_stmt_bind_param($sql,"ii",$empiezaPaginacion,$paginacion);

      mysqli_stmt_execute($sql);
      mysqli_stmt_bind_result($sql,$id,$titulo,$intro,$fecha);

      while ($fila = mysqli_stmt_fetch($sql)) {

        $setid = utf8_encode($id);
        $settitulo = utf8_encode($titulo);
        $setintro = utf8_encode($intro);
        $setfecha_n = utf8_encode($fecha);
        $setfecha_c = strftime("%d de %B, %Y", strtotime($setfecha_n));
        //se crea el contenido e incrusta los datos
        require('constructor_noticias.php');
      }

    }
  } catch (\Exception $e) {
    echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0017');</script>";
  }

 ?>
