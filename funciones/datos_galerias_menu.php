<!DOCTYPE html>
<?php
  try {
    require('dbcall.php');
    if (!$cnn) {
      die("Conexion Fallida: " . mysqli_connect_error());
    }else {

      $paginacion  = 6;
      if (isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
      }else {
        $pagina = 1;
      }

      //Bloque para el conteo de resultados de la consulta
      $sqlCount = mysqli_prepare($cnn,"SELECT COUNT(*) AS TD FROM (SELECT g.id_galeria,g.codigo_galeria,g.titulo_galeria
      FROM datos_galerias as g) as tt");
      mysqli_stmt_execute($sqlCount);
      mysqli_stmt_bind_result($sqlCount,$rc);

      while ($fila = mysqli_stmt_fetch($sqlCount)) {
        $rowCount = $rc;
      }

    }

    $empiezaPaginacion = ($pagina-1) *  $paginacion;
    //Container
    echo "<div class='container'>
      <section class='display_center'>
        <div class='row'>";

    //Consulta SQL
    $sql = mysqli_prepare($cnn,"SELECT g.id_galeria,g.codigo_galeria,g.titulo_galeria,g.intro_galeria
    FROM datos_galerias as g
    ORDER BY g.id_galeria ASC LIMIT ?,?");

    mysqli_stmt_bind_param($sql,"ii",$empiezaPaginacion,$paginacion);
    mysqli_stmt_execute($sql);
    mysqli_stmt_bind_result($sql,$ID,$COD,$TITULO,$INTRO);

    while ($fila = mysqli_stmt_fetch($sql)) {
        #declaracion dentro del bucle
            $setid = utf8_encode($ID);
            $setcodigo = utf8_encode($COD);
            $settitulo = utf8_encode($TITULO);
            $setintro = utf8_encode($INTRO);
            //Se crea el contenido dinamico

            //Trae el constructor y mezcla los datos
            require('funciones/constructor_galerias.php');
    }
    echo " </div>
          </section>
          </div>
          <br>";

  } catch (\Exception $e) {

  }


 ?>
