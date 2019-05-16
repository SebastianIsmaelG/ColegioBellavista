<?php
  try {
    require ("dbcall.php");
    if (!$cnn) {
        die("Conexion Fallida: " . mysqli_connect_error());
    }else{
      $numero = 0;
      $modalwindow1 = 0;
      $modalwindow2 = 0;
      //RowCount
      $sqlCount = "SELECT COUNT(*) AS TD FROM (SELECT nombre_actividad,fecha_actividad FROM actividades)as TT";
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
      $sql = mysqli_prepare($cnn,"SELECT nombre_actividad, fecha_actividad FROM actividades ORDER BY fecha_actividad DESC LIMIT ?,?");
      mysqli_stmt_bind_param($sql,"ii",$empiezaPaginacion,$paginacion);
      mysqli_stmt_execute($sql);
      mysqli_stmt_bind_result($sql,$na,$fa);

      //Se dibuja la tabla
      echo "<div class='table-responsive'><table class='table table-bordered table-hover font_open' id='tabla_actividades'><thead class='thead-dark'><tr><th>Nombre Actividad</th><th>Fecha Actividad</th><th>Editar Actividad</th><th>Eliminar Actividad</th></tr></Thread><tbody>";
      while ($fila = mysqli_stmt_fetch($sql)) {

          echo "<tr>
                  <td><p>$na</p></td>
                  <td><p>$fa</p></td>
                  <td><button class='btn btn-success' data-toggle='modal' data-target='#ModalCenterEditar$modalwindow1' >Editar</button>
                  <div class='modal fade' id='ModalCenterEditar$modalwindow1' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                    <div class='modal-dialog modal-dialog-centered' role='document'>
                      <div class='modal-content'>
                        <div class='modal-header'>
                          <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>EDITAR ACTIVIDAD</h6>
                          <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                          </button>
                        </div>
                        <div class='modal-body'>
                          <div class='container-fluid'>
                            <div class='row'>
                              <form action='#'>
                                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                                  <div class='form-group'>
                                    <input class='form-control' type='text' name='editar_nombre' value='$na'>
                                  </div>
                                  <div class='form-group'>
                                    <input class='form-control' type='date' name='editar_fecha' value='$fa'>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div class='modal-footer'>
                          <button type='button' class='btn btn-primary'>Guardar Cambios</button>
                        </div>
                      </div>
                    </div>
                  </div></td>
                  <td><button class='btn btn-danger' data-toggle='modal' data-target='#ModalCenterEliminar$modalwindow2'>Eliminar</button>
                  <div class='modal fade' id='ModalCenterEliminar$modalwindow2' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                    <div class='modal-dialog modal-dialog-centered' role='document'>
                      <div class='modal-content'>
                        <div class='modal-header'>
                          <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>ELIMINAR ACTIVIDAD</h6>
                          <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                          </button>
                        </div>
                        <div class='modal-body'>
                          ...
                        </div>
                        <div class='modal-footer'>
                          <button type='button' class='btn btn-primary'>Save changes</button>
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