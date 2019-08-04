<?php
if (isset($_GET["btn_search"]) && isset($_GET["input_busqueda"])) {
  error_reporting(E_ERROR | E_WARNING | E_PARSE);
  try {
    require ("dbcall.php");
    if (!$cnn) {
        die("Conexion Fallida: " . mysqli_connect_error());
    }else{
      $numero = 0;
      $modalwindow1 = 0;
      $modalwindow2 = 0;
      $modalwindow3 = 0;

      $factor_busquedaGET = utf8_decode($_GET["input_busqueda"]);
      $factor_busqueda_titulo = "'%".$factor_busquedaGET."%'";

      //RowCount
      $sqlCount = "SELECT COUNT(*) AS TD FROM (SELECT id_galeria,codigo_galeria,titulo_galeria,intro_galeria FROM datos_galerias WHERE (titulo_galeria LIKE $factor_busqueda_titulo))as TT";
      $rs = mysqli_query($cnn,$sqlCount);
      while ($fila = mysqli_fetch_row($rs)) {
        $rowCount = $fila["0"];
      }
      if ($rowCount=="0") {
        echo "<div class='container d-flex justify-content-center'><span class='text-muted font-weight-bold'>Sin resultados</span></div>";
      }else {
        //Paginacion
        $paginacion  = 6;
        if (isset($_GET['pagina'])) {
          $pagina = $_GET['pagina'];
        }else {
          $pagina = 1;
        }
        $empiezaPaginacion = ($pagina-1) *  $paginacion;
        //Se crea la tabla dinamicamente
        $sql = mysqli_prepare($cnn,"SELECT id_galeria,codigo_galeria,titulo_galeria,intro_galeria FROM datos_galerias WHERE (titulo_galeria LIKE $factor_busqueda_titulo) ORDER BY id_galeria DESC LIMIT ?,?");
        mysqli_stmt_bind_param($sql,"ii",$empiezaPaginacion,$paginacion);
        mysqli_stmt_execute($sql);
        mysqli_stmt_bind_result($sql,$idg,$cg,$etg,$eig);

        //Se dibuja la tabla
        echo "<div class='table-responsive'><table class='table table-bordered table-hover font_open' id='tabla_actividades'><thead class='thead-dark'><tr><th>Titulo Galeria</th><th>Introducción Galeria</th><th>Editar Publicación</th><th>Eliminar Publicación</th></tr></Thread><tbody>";
        while ($fila = mysqli_stmt_fetch($sql)) {
          $titulo_galeria = utf8_encode($etg);
          $intro_galeria = utf8_encode($eig);
            echo "<tr>
                    <td><p>$titulo_galeria</p></td>
                    <td><p>$intro_galeria</p></td>
                    <td>
                    <button name='btn_editar_borrador' class='btn btn-success' data-toggle='modal' data-target='#ModalCenterEditar$modalwindow3'>Editar</button>
                    <div class='modal fade' id='ModalCenterEditar$modalwindow3' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                      <div class='modal-dialog modal-dialog-centered' role='document'>
                        <div class='modal-content'>
                          <div class='modal-header'>
                            <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>EDITAR GALERIA</h6>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                              <span aria-hidden='true'>&times;</span>
                            </button>
                          </div>
                          <div class='modal-body'>
                            <div class='container'><form action='../funciones/editar_galeria.php' method='post'>
                              <div class='form-group text-left'>
                                <label for='nombre_galeria_editar' class='font_open'>Titulo Galeria</label>
                                <input type='text' id='nombre_galeria_editar' name='nombre_galeria_editar' class='form-control' maxlength='60' value='$titulo_galeria'>
                              </div>
                              <div class='form-group text-left'>
                                <label for='intro_galeria_editar' class='font_open'>Intro Galeria</label>
                                <textarea id='intro_galeria_editar' name='intro_galeria_editar' class='form-control' rows='3' cols='80' maxlength='150'>$intro_galeria</textarea>
                              </div>
                            </div>
                          </div>
                          <div class='modal-footer'>
                            <input type='hidden' name='id_galeria' value='$idg'>
                            <input type='hidden' name='cod_galeria' value='$cg'>
                            <input type='submit' class='btn btn-success' name='btn_editar_noticia' value='Editar'></form>
                          </div>
                        </div>
                      </div>
                    </div>
                    </td>
                    <td><button class='btn btn-danger' data-toggle='modal' data-target='#ModalCenterEliminar$modalwindow2'>Eliminar</button>
                    <div class='modal fade' id='ModalCenterEliminar$modalwindow2' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                      <div class='modal-dialog modal-dialog-centered' role='document'>
                        <div class='modal-content'>
                          <div class='modal-header'>
                            <h6 class='modal-title font-weight-bold text-danger' id='exampleModalLongTitle'>ELIMINAR GALERIA</h6>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                              <span aria-hidden='true'>&times;</span>
                            </button>
                          </div>
                          <div class='modal-body'>
                            <div class='container'><form action='../funciones/eliminar_galeria.php' method='post'>
                              <div class='form-group text-left'>
                                <label for='nombre_editar_actividad' class='font_open font-weight-bold'>¿Esta seguro que desea eliminar esta galeria? <br> Todos los archivos y comentarios seran eliminados</label>
                                <hr>
                                <p><span class='font_open font-weight-bold'>Codigo Galeria: </span>$cg </p>
                                <p><span class='font_open font-weight-bold'>Titulo Galeria: </span>$titulo_galeria </p>
                              </div>
                            </div>
                          </div>
                          <div class='modal-footer'>
                            <input type='hidden' name='id_galeria' value='$idg'>
                            <input type='hidden' name='codigo_galeria' value='$cg'>
                            <input type='submit' class='btn btn-danger' name='btn_eliminar_galeria' value='Eliminar'></form>
                          </div>
                        </div>
                      </div>
                    </div></td>
                  </tr>";
                  $modalwindow1++;
                  $modalwindow2++;
                  $modalwindow3++;
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
                           <a class='page-link ' id='paginacion_links' href='administrar_album.php?input_busqueda=$factor_busquedaGET&btn_search=Buscar&pagina=".($pagina-1)."'>&laquo; Anterior</a>
                         </li>
                         <li class='page-item'>
                           <a class='page-link ' id='paginacion_links' href='administrar_album.php?input_busqueda=$factor_busquedaGET&btn_search=Buscar&pagina=1' aria-label='Goto page 1'>1</a>
                         </li>";
                         for ($i=2; $i <=$ceil ; $i++) {
                           echo "<li class='page-item'><a class='page-link' id='paginacion_links' href='administrar_album.php?input_busqueda=$factor_busquedaGET&btn_search=Buscar&pagina=".$i."' aria-label='Goto page $i'>$i</a></li>";
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
                             echo "<li class='page-item $condicionalDisable3'><a class='page-link' id='paginacion_links' href='administrar_album.php?input_busqueda=$factor_busquedaGET&btn_search=Buscar&pagina=".$i."' aria-label='Goto page $i'>$i</a></li>";
                           }

                         }

                   echo "<li class='page-item $condicionalDisable2'>
                           <a class='page-link ' id='paginacion_links' href='administrar_album.php?input_busqueda=$factor_busquedaGET&btn_search=Buscar&pagina=".($pagina+1)."' >Siguiente &raquo;</a>
                         </li>";
           echo "</ul></nav>
                 </section>";
      }


}
  } catch (\Exception $e) {
      echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0005');</script>";
  }


}else {
  error_reporting(E_ERROR | E_WARNING | E_PARSE);
  try {
    require ("dbcall.php");
    if (!$cnn) {
        die("Conexion Fallida: " . mysqli_connect_error());
    }else{
      $numero = 0;
      $modalwindow1 = 0;
      $modalwindow2 = 0;
      $modalwindow3 = 0;
      //RowCount
      $sqlCount = "SELECT COUNT(*) AS TD FROM (SELECT id_galeria,codigo_galeria,titulo_galeria,intro_galeria FROM datos_galerias)as TT";
      $rs = mysqli_query($cnn,$sqlCount);
      while ($fila = mysqli_fetch_row($rs)) {
        $rowCount = $fila["0"];
      }
      if ($rowCount=="0") {
        echo "<div class='container d-flex justify-content-center'><span class='text-muted font-weight-bold'>Sin resultados</span></div>";
      }else {
        //Paginacion
        $paginacion  = 6;
        if (isset($_GET['pagina'])) {
          $pagina = $_GET['pagina'];
        }else {
          $pagina = 1;
        }
        $empiezaPaginacion = ($pagina-1) *  $paginacion;
        //Se crea la tabla dinamicamente
        $sql = mysqli_prepare($cnn,"SELECT id_galeria,codigo_galeria,titulo_galeria,intro_galeria FROM datos_galerias ORDER BY id_galeria DESC LIMIT ?,?");
        mysqli_stmt_bind_param($sql,"ii",$empiezaPaginacion,$paginacion);
        mysqli_stmt_execute($sql);
        mysqli_stmt_bind_result($sql,$idg,$cg,$etg,$eig);

        //Se dibuja la tabla
        echo "<div class='table-responsive'><table class='table table-bordered table-hover font_open' id='tabla_actividades'><thead class='thead-dark'><tr><th>Titulo Galeria</th><th>Introducción Galeria</th><th>Editar Publicación</th><th>Eliminar Publicación</th></tr></Thread><tbody>";
        while ($fila = mysqli_stmt_fetch($sql)) {
          $titulo_galeria = utf8_encode($etg);
          $intro_galeria = utf8_encode($eig);
            echo "<tr>
                    <td><p>$titulo_galeria</p></td>
                    <td><p>$intro_galeria</p></td>
                    <td>
                    <button name='btn_editar_borrador' class='btn btn-success' data-toggle='modal' data-target='#ModalCenterEditar$modalwindow3'>Editar</button>
                    <div class='modal fade' id='ModalCenterEditar$modalwindow3' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                      <div class='modal-dialog modal-dialog-centered' role='document'>
                        <div class='modal-content'>
                          <div class='modal-header'>
                            <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>EDITAR GALERIA</h6>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                              <span aria-hidden='true'>&times;</span>
                            </button>
                          </div>
                          <div class='modal-body'>
                            <div class='container'><form action='../funciones/editar_galeria.php' method='post'>
                              <div class='form-group text-left'>
                                <label for='nombre_galeria_editar' class='font_open'>Titulo Galeria</label>
                                <input type='text' id='nombre_galeria_editar' name='nombre_galeria_editar' class='form-control' maxlength='60' value='$titulo_galeria'>
                              </div>
                              <div class='form-group text-left'>
                                <label for='intro_galeria_editar' class='font_open'>Intro Galeria</label>
                                <textarea id='intro_galeria_editar' name='intro_galeria_editar' class='form-control' rows='3' cols='80' maxlength='150'>$intro_galeria</textarea>
                              </div>
                            </div>
                          </div>
                          <div class='modal-footer'>
                            <input type='hidden' name='id_galeria' value='$idg'>
                            <input type='hidden' name='cod_galeria' value='$cg'>
                            <input type='submit' class='btn btn-success' name='btn_editar_noticia' value='Editar'></form>
                          </div>
                        </div>
                      </div>
                    </div>
                    </td>
                    <td><button class='btn btn-danger' data-toggle='modal' data-target='#ModalCenterEliminar$modalwindow2'>Eliminar</button>
                    <div class='modal fade' id='ModalCenterEliminar$modalwindow2' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                      <div class='modal-dialog modal-dialog-centered' role='document'>
                        <div class='modal-content'>
                          <div class='modal-header'>
                            <h6 class='modal-title font-weight-bold text-danger' id='exampleModalLongTitle'>ELIMINAR GALERIA</h6>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                              <span aria-hidden='true'>&times;</span>
                            </button>
                          </div>
                          <div class='modal-body'>
                            <div class='container'><form action='../funciones/eliminar_galeria.php' method='post'>
                              <div class='form-group text-left'>
                                <label for='nombre_editar_actividad' class='font_open font-weight-bold'>¿Esta seguro que desea eliminar esta galeria? <br> Todos los archivos y comentarios seran eliminados</label>
                                <hr>
                                <p><span class='font_open font-weight-bold'>Codigo Galeria: </span>$cg </p>
                                <p><span class='font_open font-weight-bold'>Titulo Galeria: </span>$titulo_galeria </p>
                              </div>
                            </div>
                          </div>
                          <div class='modal-footer'>
                            <input type='hidden' name='id_galeria' value='$idg'>
                            <input type='hidden' name='codigo_galeria' value='$cg'>
                            <input type='submit' class='btn btn-danger' name='btn_eliminar_galeria' value='Eliminar'></form>
                          </div>
                        </div>
                      </div>
                    </div></td>
                  </tr>";
                  $modalwindow1++;
                  $modalwindow2++;
                  $modalwindow3++;
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
                           <a class='page-link ' id='paginacion_links' href='administrar_album.php?pagina=".($pagina-1)."'>&laquo; Anterior</a>
                         </li>
                         <li class='page-item'>
                           <a class='page-link ' id='paginacion_links' href='administrar_album.php?pagina=1' aria-label='Goto page 1'>1</a>
                         </li>";
                         for ($i=2; $i <=$ceil ; $i++) {
                           echo "<li class='page-item'><a class='page-link' id='paginacion_links' href='administrar_album.php?pagina=".$i."' aria-label='Goto page $i'>$i</a></li>";
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
                             echo "<li class='page-item $condicionalDisable3'><a class='page-link' id='paginacion_links' href='administrar_album.php?pagina=".$i."' aria-label='Goto page $i'>$i</a></li>";
                           }

                         }

                   echo "<li class='page-item $condicionalDisable2'>
                           <a class='page-link ' id='paginacion_links' href='administrar_album.php?pagina=".($pagina+1)."' >Siguiente &raquo;</a>
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
