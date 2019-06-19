<?php
  error_reporting(E_ERROR | E_WARNING | E_PARSE);
  try {
    require ("dbcall.php");
    if (!$cnn) {
        die("Conexion Fallida: " . mysqli_connect_error());
    }else{
      $numero = 0;
      $modalwindow1 = 0;
      $modalwindow2 = 0;
      //RowCount
      $sqlCount = "SELECT COUNT(*) AS TD FROM (SELECT titulo_noticia,fecha_noticia,intro_noticia,foto_intro_noticia FROM noticias)as TT";
      $rs = mysqli_query($cnn,$sqlCount);
      if (mysqli_num_rows($rs)==0) {
          echo "Sin resultados";
      }else {
        while ($fila = mysqli_fetch_row($rs)) {
          $rowCount = $fila["0"];
        }
      }

      //Paginacion
      $paginacion  = 8;
      if (isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
      }else {
        $pagina = 1;
      }
      $empiezaPaginacion = ($pagina-1) *  $paginacion;
      //Se crea la tabla dinamicamente
      $sql = mysqli_prepare($cnn,"SELECT id_noticia,titulo_noticia,fecha_noticia,intro_noticia,foto_intro_noticia, cuerpo_noticia FROM noticias ORDER BY fecha_noticia DESC LIMIT ?,?");
      mysqli_stmt_bind_param($sql,"ii",$empiezaPaginacion,$paginacion);
      mysqli_stmt_execute($sql);
      mysqli_stmt_bind_result($sql,$idn,$etn,$fn,$ein,$efin,$ecn);

      //Se dibuja la tabla
      echo "<div class='table-responsive'><table class='table table-bordered table-hover font_open' id='tabla_actividades'><thead class='thead-dark'><tr><th>Titulo Noticia</th><th>Fecha Publicación</th><th>Editar Publicación</th><th>Eliminar Publicación</th></tr></Thread><tbody>";
      while ($fila = mysqli_stmt_fetch($sql)) {
        $tn = utf8_encode($etn);
        $in = utf8_encode($ein);
        $fin = utf8_encode($efin);
        $cn = utf8_encode($ecn);
          echo "<tr>
                  <td><p>$tn</p></td>
                  <td><p>$fn</p></td>
                  <td><form action='../funciones/editar_noticia.php' method='post'>
                  <input type='hidden' name='id_noticia' value='$idn'>
                  <input type='hidden' name='titulo_noticia' value='$tn'>
                  <input type='hidden' name='fecha_noticia' value='$fn'>
                  <input type='hidden' name='intro_noticia' value='$in'>
                  <input type='hidden' name='foto_intro_noticia' value='$fin'>
                  <input type='hidden' name='cuerpo_noticia' value='$cn'>
                  <button type='submit' name='btn_editar_noticia' class='btn btn-success'>Editar</button>
                  </form>
                  <td><button class='btn btn-danger' data-toggle='modal' data-target='#ModalCenterEliminar$modalwindow2'>Eliminar</button>
                  <div class='modal fade' id='ModalCenterEliminar$modalwindow2' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                    <div class='modal-dialog modal-dialog-centered' role='document'>
                      <div class='modal-content'>
                        <div class='modal-header'>
                          <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>ELIMINAR NOTICIA</h6>
                          <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                          </button>
                        </div>
                        <div class='modal-body'>
                          <div class='container'><form action='../funciones/eliminar_noticia.php' method='post'>
                            <div class='form-group text-left'>
                              <label for='nombre_editar_actividad' class='font_open font-weight-bold'>¿Esta seguro que desea eliminar esta publicación?</label>
                              <hr>
                              <p><span class='font_open font-weight-bold'>Titulo Noticia: </span>$tn </p>
                              <p><span class='font_open font-weight-bold'>Fecha Publicación: </span>$fn </p>
                            </div>
                          </div>
                        </div>
                        <div class='modal-footer'>
                          <input type='hidden' name='id_noticia' value='$idn'>
                          <input type='submit' class='btn btn-danger' name='btn_eliminar_noticia' value='Eliminar'></form>
                        </div>
                      </div>
                    </div>
                  </div></td>
                </tr>";
                $modalwindow1++;
                $modalwindow2++;
      }
      echo "</tbody></table></div>";

      //Se crea nav de paginacion
      $total_paginas = ceil($rowCount / $paginacion ); //$rowCount viene de la linea 16
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

        echo "<section class='container ' style='padding-top:10px;'>
                <nav aria-label='Page navigation'>
                  <ul class='pagination justify-content-center'>
                    <li class='page-item $condicionalDisable1'>
                      <a class='page-link ' id='paginacion_links' href='administrar_actividad.php?pagina=".($pagina-1)."'>&laquo; Anterior</a>
                    </li>
                    <li class='page-item'>
                      <a class='page-link ' id='paginacion_links' href='administrar_actividad.php?pagina=1' aria-label='Goto page 1'>1</a>
                    </li>";

                    for ($i=2; $i <=$total_paginas ; $i++) {
                      echo "<li class='page-item'><a class='page-link' id='paginacion_links' href='administrar_actividad.php?pagina=".$i."' aria-label='Goto page $i'>$i</a></li>";
                    }
              echo "<li class='page-item $condicionalDisable2'>
                      <a class='page-link ' id='paginacion_links' href='administrar_actividad.php?pagina=".($pagina+1)."' >Siguiente &raquo;</a>
                    </li>";
      echo "</ul></nav>
            </section>";


    }

  } catch (\Exception $e) {
      echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0005');</script>";
  }


 ?>
