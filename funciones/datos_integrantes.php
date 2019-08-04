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

      //RowCount
      $sqlCount = "SELECT COUNT(*) AS TD FROM (SELECT id,nombre FROM equipo_trabajadores WHERE (nombre LIKE $factor_busqueda_titulo))as TT";
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
        $sql = mysqli_prepare($cnn,"SELECT id,nombre,tipo FROM equipo_trabajadores WHERE (nombre LIKE $factor_busqueda_titulo) ORDER BY id DESC LIMIT ?,?");
        mysqli_stmt_bind_param($sql,"ii",$empiezaPaginacion,$paginacion);
        mysqli_stmt_execute($sql);
        mysqli_stmt_bind_result($sql,$ID,$E_NOMBRE,$TIPO);

        //Se dibuja la tabla
        echo "<div class='table-responsive'><table class='table table-bordered table-hover font_open' id='tabla_actividades'>
        <thead class='thead-dark'>
        <tr>
        <th>Nombre</th>
        <th>Categoria</th>
        <th>Editar</th>
        <th>Eliminar</th>
        </tr>
        </Thread>
        <tbody>";
        while ($fila = mysqli_stmt_fetch($sql)) {
            $NOMBRE= utf8_encode($E_NOMBRE);
            if ($TIPO=="1") {
              $TIPO="Administración";
            }elseif ($TIPO=="2") {
              $TIPO="Funcionarios";
            }
            echo "<tr>
                    <td><p>$NOMBRE</p></td>
                    <td><p>$TIPO</p></td>
                    <td><button class='btn btn-success' data-toggle='modal' data-target='#ModalCenterEditar$modalwindow1' >Editar</button>
                    <div class='modal fade' id='ModalCenterEditar$modalwindow1' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                      <div class='modal-dialog modal-dialog-centered' role='document'>
                        <div class='modal-content'>
                          <div class='modal-header'>
                            <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>EDITAR DATOS INTEGRANTE</h6>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                              <span aria-hidden='true'>&times;</span>
                            </button>
                          </div>
                          <div class='modal-body'>
                            <div class='container'><form action='../funciones/editar_integrante.php' method='post'>
                              <div class='form-group text-left'>
                                <label for='nombre_editar_integrante' class='font_open'>Nombre Integrante</label>
                                <input type='text' name='nombre_editar_integrante' onkeypress='return soloLetras(event)' class='form-control' value='$NOMBRE'>
                              </div>
                              <div class='form-group text-left'>
                                <label for='editar_categoria_integrante' class='font_open'>Categoria Integrante</label>
                                <select name='categoria_editar_integrante' class='form-control'>
                                  <option value='$TIPO'>$TIPO</option>
                                  <option value='Administracion'>Administración</option>
                                  <option value='Funcionarios'>Funcionarios</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class='modal-footer'>
                            <input type='hidden' name='id_editar_integrante' value='$ID'>
                            <input type='submit' class='btn btn-primary' name='btn_editar_integrante' value='Guardar Cambios'></form>
                          </div>
                        </div>
                      </div>
                    </div></td>
                    <td><button class='btn btn-danger' data-toggle='modal' data-target='#ModalCenterEliminar$modalwindow2'>Eliminar</button>
                    <div class='modal fade' id='ModalCenterEliminar$modalwindow2' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                      <div class='modal-dialog modal-dialog-centered' role='document'>
                        <div class='modal-content'>
                          <div class='modal-header'>
                            <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>ELIMINAR INTEGRANTE</h6>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                              <span aria-hidden='true'>&times;</span>
                            </button>
                          </div>
                          <div class='modal-body'>
                            <div class='container'><form action='../funciones/eliminar_integrante.php' method='post'>
                              <div class='form-group text-left'>
                                <label class='font_open font-weight-bold'>¿Esta seguro que desea eliminar los datos?</label>
                                <hr>
                                <p ><span class='font_open font-weight-bold'>Nombre Integrante: </span> $NOMBRE</p>
                                <p ><span class='font_open font-weight-bold'>Categoria Integrante: </span> $TIPO</p>
                              </div>
                            </div>
                          </div>
                          <div class='modal-footer'>
                            <input type='hidden' name='id_eliminar_integrante' value='$ID'>
                            <input type='submit' class='btn btn-danger' name='btn_eliminar_integrante' value='Eliminar'></form>
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
                           <a class='page-link ' id='paginacion_links' href='administrar_equipo.php?input_busqueda=$factor_busquedaGET&btn_search=Buscar&pagina=".($pagina-1)."'>&laquo; Anterior</a>
                         </li>
                         <li class='page-item'>
                           <a class='page-link ' id='paginacion_links' href='administrar_equipo.php?input_busqueda=$factor_busquedaGET&btn_search=Buscar&pagina=1' aria-label='Goto page 1'>1</a>
                         </li>";
                         for ($i=2; $i <=$ceil ; $i++) {
                           echo "<li class='page-item'><a class='page-link' id='paginacion_links' href='administrar_equipo.php?input_busqueda=$factor_busquedaGET&btn_search=Buscar&pagina=".$i."' aria-label='Goto page $i'>$i</a></li>";
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
                             echo "<li class='page-item $condicionalDisable3'><a class='page-link' id='paginacion_links' href='administrar_equipo.php?input_busqueda=$factor_busquedaGET&btn_search=Buscar&pagina=".$i."' aria-label='Goto page $i'>$i</a></li>";
                           }

                         }

                   echo "<li class='page-item $condicionalDisable2'>
                           <a class='page-link ' id='paginacion_links' href='administrar_equipo.php?input_busqueda=$factor_busquedaGET&btn_search=Buscar&pagina=".($pagina+1)."' >Siguiente &raquo;</a>
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
      $sqlCount = "SELECT COUNT(*) AS TD FROM (SELECT id,nombre FROM equipo_trabajadores)as TT";
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
        $sql = mysqli_prepare($cnn,"SELECT id,nombre,tipo FROM equipo_trabajadores ORDER BY id DESC LIMIT ?,?");
        mysqli_stmt_bind_param($sql,"ii",$empiezaPaginacion,$paginacion);
        mysqli_stmt_execute($sql);
        mysqli_stmt_bind_result($sql,$ID,$E_NOMBRE,$TIPO);

        //Se dibuja la tabla
        echo "<div class='table-responsive'><table class='table table-bordered table-hover font_open' id='tabla_actividades'>
        <thead class='thead-dark'>
        <tr>
        <th>Nombre</th>
        <th>Categoria</th>
        <th>Editar</th>
        <th>Eliminar</th>
        </tr>
        </Thread>
        <tbody>";
        while ($fila = mysqli_stmt_fetch($sql)) {
            $NOMBRE= utf8_encode($E_NOMBRE);
            if ($TIPO=="1") {
              $TIPO="Administración";
            }elseif ($TIPO=="2") {
              $TIPO="Funcionarios";
            }
            echo "<tr>
                    <td><p>$NOMBRE</p></td>
                    <td><p>$TIPO</p></td>
                    <td><button class='btn btn-success' data-toggle='modal' data-target='#ModalCenterEditar$modalwindow1' >Editar</button>
                    <div class='modal fade' id='ModalCenterEditar$modalwindow1' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                      <div class='modal-dialog modal-dialog-centered' role='document'>
                        <div class='modal-content'>
                          <div class='modal-header'>
                            <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>EDITAR DATOS INTEGRANTE</h6>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                              <span aria-hidden='true'>&times;</span>
                            </button>
                          </div>
                          <div class='modal-body'>
                            <div class='container'><form action='../funciones/editar_integrante.php' method='post'>
                              <div class='form-group text-left'>
                                <label for='nombre_editar_integrante' class='font_open'>Nombre Integrante</label>
                                <input type='text' name='nombre_editar_integrante' onkeypress='return soloLetras(event)' class='form-control' value='$NOMBRE'>
                              </div>
                              <div class='form-group text-left'>
                                <label for='editar_categoria_integrante' class='font_open'>Categoria Integrante</label>
                                <select name='categoria_editar_integrante' class='form-control'>
                                  <option value='$TIPO'>$TIPO</option>
                                  <option value='Administracion'>Administración</option>
                                  <option value='Funcionarios'>Funcionarios</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class='modal-footer'>
                            <input type='hidden' name='id_editar_integrante' value='$ID'>
                            <input type='submit' class='btn btn-primary' name='btn_editar_integrante' value='Guardar Cambios'></form>
                          </div>
                        </div>
                      </div>
                    </div></td>
                    <td><button class='btn btn-danger' data-toggle='modal' data-target='#ModalCenterEliminar$modalwindow2'>Eliminar</button>
                    <div class='modal fade' id='ModalCenterEliminar$modalwindow2' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                      <div class='modal-dialog modal-dialog-centered' role='document'>
                        <div class='modal-content'>
                          <div class='modal-header'>
                            <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>ELIMINAR INTEGRANTE</h6>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                              <span aria-hidden='true'>&times;</span>
                            </button>
                          </div>
                          <div class='modal-body'>
                            <div class='container'><form action='../funciones/eliminar_integrante.php' method='post'>
                              <div class='form-group text-left'>
                                <label class='font_open font-weight-bold'>¿Esta seguro que desea eliminar los datos?</label>
                                <hr>
                                <p ><span class='font_open font-weight-bold'>Nombre Integrante: </span> $NOMBRE</p>
                                <p ><span class='font_open font-weight-bold'>Categoria Integrante: </span> $TIPO</p>
                              </div>
                            </div>
                          </div>
                          <div class='modal-footer'>
                            <input type='hidden' name='id_eliminar_integrante' value='$ID'>
                            <input type='submit' class='btn btn-danger' name='btn_eliminar_integrante' value='Eliminar'></form>
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
                           <a class='page-link ' id='paginacion_links' href='administrar_equipo.php?pagina=".($pagina-1)."'>&laquo; Anterior</a>
                         </li>
                         <li class='page-item'>
                           <a class='page-link ' id='paginacion_links' href='administrar_equipo.php?pagina=1' aria-label='Goto page 1'>1</a>
                         </li>";
                         for ($i=2; $i <=$ceil ; $i++) {
                           echo "<li class='page-item'><a class='page-link' id='paginacion_links' href='administrar_equipo.php?pagina=".$i."' aria-label='Goto page $i'>$i</a></li>";
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
                             echo "<li class='page-item $condicionalDisable3'><a class='page-link' id='paginacion_links' href='administrar_equipo.php?pagina=".$i."' aria-label='Goto page $i'>$i</a></li>";
                           }

                         }

                   echo "<li class='page-item $condicionalDisable2'>
                           <a class='page-link ' id='paginacion_links' href='administrar_equipo.php?pagina=".($pagina+1)."' >Siguiente &raquo;</a>
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
