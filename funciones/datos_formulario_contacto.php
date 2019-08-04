<?php
if (isset($_GET["btn_search"]) && isset($_GET["input_busqueda"])) {
  try {
    require ("dbcall.php");
    if (!$cnn) {
        die("Conexion Fallida: " . mysqli_connect_error());
    }else{
      $numero = 0;
      $modalwindow1 = 0;
      $modalwindow2 = 0;

      $factor_busquedaGET = utf8_decode($_GET["input_busqueda"]);
      $factor_busqueda_titulo = "'%".$factor_busquedaGET."%'";
      $factor_busqueda_fecha = "'%".$factor_busquedaGET."%'";

      //RowCount
      $sqlCount = "SELECT COUNT(*) AS TD FROM (SELECT id,nombre FROM contacto_formulario WHERE (nombre LIKE $factor_busqueda_titulo OR fecha_solicitud LIKE $factor_busqueda_fecha))as TT";
      $rs = mysqli_query($cnn,$sqlCount);
      while ($fila = mysqli_fetch_row($rs)) {
        $rowCount = $fila["0"];
      }
      if ($rowCount=="0") {
        echo "<div class='container d-flex justify-content-center'><span class='text-muted font-weight-bold'>Sin resultados</span></div>";
      }else {
        //Paginacion
        $paginacion  = 10;
        if (isset($_GET['pagina'])) {
          $pagina = $_GET['pagina'];
        }else {
          $pagina = 1;
        }
        $empiezaPaginacion = ($pagina-1) *  $paginacion;
        //Se crea la tabla dinamicamente
        $sql = mysqli_prepare($cnn,"SELECT id,nombre,telefono,email,fecha_solicitud FROM contacto_formulario WHERE (nombre LIKE $factor_busqueda_titulo OR fecha_solicitud LIKE $factor_busqueda_fecha) ORDER BY fecha_solicitud ASC LIMIT ?,?");
        mysqli_stmt_bind_param($sql,"ii",$empiezaPaginacion,$paginacion);
        mysqli_stmt_execute($sql);
        mysqli_stmt_bind_result($sql,$ID,$E_NOMBRE,$TELEFONO,$E_EMAIL,$E_FECHA);

        //Se dibuja la tabla
        echo "<div class='table-responsive'><table class='table table-bordered table-hover font_open' id='tabla_actividades'>
        <thead class='thead-dark'>
        <tr>
        <th>Fecha</th>
        <th>Nombres</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Eliminar Solicitud</th>
        </tr>
        </Thread>
        <tbody>";
        while ($fila = mysqli_stmt_fetch($sql)) {
            $NOMBRE= utf8_encode($E_NOMBRE);
            $FECHA = strftime("%d - %m - %G", strtotime($E_FECHA));
            echo "<tr>
                    <td><p>$FECHA</p></td>
                    <td><p>$NOMBRE</p></td>
                    <td><p>$TELEFONO</p></td>
                    <td><p>$E_EMAIL</p></td>
                    <td><form method='post' action='../funciones/eliminar_peticion_contacto.php'><input type='hidden' name='id_eliminar' value='$ID'><button type='submit' name='btn_eliminar_solicitud' class='btn btn-danger'>Eliminar</button></form></td>
                  </tr>";
                  $modalwindow1++;
                  $modalwindow2++;
        }
        echo "</tbody></table></div>";

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
                           <a class='page-link ' id='paginacion_links' href='administrar_peticiones.php?input_busqueda=dasd&btn_search=Buscar&pagina=".($pagina-1)."'>&laquo; Anterior</a>
                         </li>
                         <li class='page-item'>
                           <a class='page-link ' id='paginacion_links' href='administrar_peticiones.php?input_busqueda=dasd&btn_search=Buscar&pagina=1' aria-label='Goto page 1'>1</a>
                         </li>";
                         for ($i=2; $i <=$ceil ; $i++) {
                           echo "<li class='page-item'><a class='page-link' id='paginacion_links' href='administrar_peticiones.php?input_busqueda=dasd&btn_search=Buscar&pagina=".$i."' aria-label='Goto page $i'>$i</a></li>";
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
                             echo "<li class='page-item $condicionalDisable3'><a class='page-link' id='paginacion_links' href='administrar_peticiones.php?input_busqueda=dasd&btn_search=Buscar&pagina=".$i."' aria-label='Goto page $i'>$i</a></li>";
                           }

                         }

                   echo "<li class='page-item $condicionalDisable2'>
                           <a class='page-link ' id='paginacion_links' href='administrar_peticiones.php?input_busqueda=dasd&btn_search=Buscar&pagina=".($pagina+1)."' >Siguiente &raquo;</a>
                         </li>";
           echo "</ul></nav>
                 </section>";


      }

    }

  } catch (\Exception $e) {
      echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0005');</script>";
  }


}else {
  try {
    require ("dbcall.php");
    if (!$cnn) {
        die("Conexion Fallida: " . mysqli_connect_error());
    }else{
      $numero = 0;
      $modalwindow1 = 0;
      $modalwindow2 = 0;
      //RowCount
      $sqlCount = "SELECT COUNT(*) AS TD FROM (SELECT id,nombre FROM contacto_formulario)as TT";
      $rs = mysqli_query($cnn,$sqlCount);
      while ($fila = mysqli_fetch_row($rs)) {
        $rowCount = $fila["0"];
      }
      if ($rowCount=="0") {
        echo "<div class='container d-flex justify-content-center'><span class='text-muted font-weight-bold'>Sin resultados</span></div>";
      }else {
        //Paginacion
        $paginacion  = 10;
        if (isset($_GET['pagina'])) {
          $pagina = $_GET['pagina'];
        }else {
          $pagina = 1;
        }
        $empiezaPaginacion = ($pagina-1) *  $paginacion;
        //Se crea la tabla dinamicamente
        $sql = mysqli_prepare($cnn,"SELECT id,nombre,telefono,email,fecha_solicitud FROM contacto_formulario ORDER BY fecha_solicitud ASC LIMIT ?,?");
        mysqli_stmt_bind_param($sql,"ii",$empiezaPaginacion,$paginacion);
        mysqli_stmt_execute($sql);
        mysqli_stmt_bind_result($sql,$ID,$E_NOMBRE,$TELEFONO,$E_EMAIL,$E_FECHA);

        //Se dibuja la tabla
        echo "<div class='table-responsive'><table class='table table-bordered table-hover font_open' id='tabla_actividades'>
        <thead class='thead-dark'>
        <tr>
        <th>Fecha</th>
        <th>Nombres</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Eliminar Solicitud</th>
        </tr>
        </Thread>
        <tbody>";
        while ($fila = mysqli_stmt_fetch($sql)) {
            $NOMBRE= utf8_encode($E_NOMBRE);
            $FECHA = strftime("%d - %m - %G", strtotime($E_FECHA));
            echo "<tr>
                    <td><p>$FECHA</p></td>
                    <td><p>$NOMBRE</p></td>
                    <td><p>$TELEFONO</p></td>
                    <td><p>$E_EMAIL</p></td>
                    <td><form method='post' action='../funciones/eliminar_peticion_contacto.php'><input type='hidden' name='id_eliminar' value='$ID'><button type='submit' name='btn_eliminar_solicitud' class='btn btn-danger'>Eliminar</button></form></td>
                  </tr>";
                  $modalwindow1++;
                  $modalwindow2++;
        }
        echo "</tbody></table></div>";

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
                           <a class='page-link ' id='paginacion_links' href='administrar_peticiones.php?pagina=".($pagina-1)."'>&laquo; Anterior</a>
                         </li>
                         <li class='page-item'>
                           <a class='page-link ' id='paginacion_links' href='administrar_peticiones.php?pagina=1' aria-label='Goto page 1'>1</a>
                         </li>";
                         for ($i=2; $i <=$ceil ; $i++) {
                           echo "<li class='page-item'><a class='page-link' id='paginacion_links' href='administrar_peticiones.php?pagina=".$i."' aria-label='Goto page $i'>$i</a></li>";
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
                             echo "<li class='page-item $condicionalDisable3'><a class='page-link' id='paginacion_links' href='administrar_peticiones.php?pagina=".$i."' aria-label='Goto page $i'>$i</a></li>";
                           }

                         }

                   echo "<li class='page-item $condicionalDisable2'>
                           <a class='page-link ' id='paginacion_links' href='administrar_peticiones.php?pagina=".($pagina+1)."' >Siguiente &raquo;</a>
                         </li>";
           echo "</ul></nav>
                 </section>";


      }

    }

  } catch (\Exception $e) {
      echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0005');</script>";
  }


}
 ?>
