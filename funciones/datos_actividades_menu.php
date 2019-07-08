<!DOCTYPE html>
<?php
  try {
    require('dbcall.php');
    if (!$cnn) {
      die("Conexion Fallida: " . mysqli_connect_error());
    }else {
      //Cambio de zona horaria
      setlocale(LC_ALL, 'es_CL.UTF-8');
      //Paginacion

      $paginacion  = 8;
      if (isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
      }else {
        $pagina = 1;
      }

      //Bloque para el conteo de resultados de la consulta
      $sqlCount = mysqli_prepare($cnn,"SELECT COUNT(*) AS TD FROM (SELECT a.nombre_actividad, a.fecha_actividad
      FROM actividades as a) as tt");
      mysqli_stmt_execute($sqlCount);
      mysqli_stmt_bind_result($sqlCount,$rc);

      while ($fila = mysqli_stmt_fetch($sqlCount)) {
        $rowCount = $rc;
      }
    }
    if ($rowCount=="0") {
      echo "<span class='text-muted font-weight-bold text-center'>Sin resultados</span>";
    }else {
      $empiezaPaginacion = ($pagina-1) *  $paginacion;

      //Consulta SQL
      $sql = mysqli_prepare($cnn,"SELECT a.nombre_actividad, a.fecha_actividad
      FROM actividades as a
      ORDER BY a.fecha_actividad ASC LIMIT ?,?");

      mysqli_stmt_bind_param($sql,"ii",$empiezaPaginacion,$paginacion);
      mysqli_stmt_execute($sql);
      mysqli_stmt_bind_result($sql,$NOMBRE,$FECHA);

      while ($fila = mysqli_stmt_fetch($sql)) {
          #declaracion dentro del bucle
              $setnombre = utf8_encode($NOMBRE);
              $setfecha = utf8_encode($FECHA);
              //Se crea el contenido dinamico

              //Trae el constructor y mezcla los datos
              require('funciones/constructor_actividades.php');
      }

      //Se crea nav de paginacion
           $total_paginas = ceil($rowCount / $paginacion );

           //Condicional de disable para la paginacion
           if ($pagina==1) {
             $condicionalDisable1="disabled";
           }else {
             $condicionalDisable1="";
           }
           if ($pagina==$total_paginas) {
             $condicionalDisable2="disabled";
           }else {
             $condicionalDisable2="";
           }
           if ($total_paginas>=5) {
             $ceil=5;
           }else {
             $ceil=$total_paginas;
           }
             echo "<section class='container ' style='padding-top:10px;'>
                     <nav aria-label='Page navigation'>
                       <ul class='pagination justify-content-center'>
                         <li class='page-item $condicionalDisable1'>
                           <a class='page-link ' id='paginacion_links' href='actividades.php?pagina=".($pagina-1)."'>&laquo; Anterior</a>
                         </li>
                         <li class='page-item ";if ($pagina==1) {echo "active";} echo"'>
                           <a class='page-link' id='paginacion_links' href='actividades.php?pagina=1' aria-label='Goto page 1'>1</a>
                         </li>";
                         for ($i=2; $i <=$ceil ; $i++) {
                           echo "<li class='page-item "; if ($pagina==$i) {echo "active";} echo"'><a class='page-link' id='paginacion_links' href='actividades.php?pagina=".$i."' aria-label='Goto page $i'>$i</a></li>";
                         }
                         //
                         $condicionalDisable3="";
                         //11 quiero que se cuestione
                         if ($pagina<=5) {
                           // code...
                         }else {
                           if ($pagina==$total_paginas) {
                             $condicionalDisable3="disabled";
                             $i = $pagina;
                           }else {
                             $i = $pagina+1;
                             echo "<li class='page-item $condicionalDisable3'><a class='page-link' id='paginacion_links' href='actividades.php?pagina=".$i."' aria-label='Goto page $i'>$i</a></li>";
                           }

                         }

                   echo "<li class='page-item $condicionalDisable2'>
                           <a class='page-link ' id='paginacion_links' href='actividades.php?pagina=".($pagina+1)."' >Siguiente &raquo;</a>
                         </li>";
           echo "</ul></nav>
                 </section>";

    }

  } catch (\Exception $e) {

  }

 ?>
