<!DOCTYPE html>
<?php
  session_start();
  require ("../funciones/session_usuario.php");
 ?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="../images/utilidad/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="../js/jscolor.js"></script>
    <title>Administrar Admisión CB</title>
  </head>
  <body>
    <section>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary noseleccionable">
        <a class="navbar-brand font-weight-bold text-uppercase" href="menu_principal.php">Menu Administración</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <div class="navbar-brand detail_user">
                <img src="../images/iconos/admin-color.png" width="25" height="25" class="d-inline-block align-top" alt="">
                  <span class="text-break titulo_user"><small><?php echo "<span class='font-weight-bolder'>Usuario: </span>$nombres_session $apellidos_session"; ?></small></span>
                <a title="Cerrar Sesión" href="../funciones/logout.php"><img src="../images/iconos/logout-color.png" width="30" height="30" class="d-inline-block align-top" alt=""></a>
              </div>
            </li>
          </ul>
          <div class="buscador" id="bs1"></div>
          <button class="btn btn-success my-2 my-sm-0" onclick="return validar();" type="button">Buscar</button>
        </div>
      </nav>
    </section>
    <section>
      <div class="container py-4">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="menu_principal.php">Menu Principal</a></li>
            <li class="breadcrumb-item"><a href="menu_principal.php?label=actividades">Sección Centro Educativo</a></li>
            <li class="breadcrumb-item active" aria-current="page">Administrar Datos Admisión</li>
          </ol>
        </nav>
      </div>
    </section>
    <section>
      <div class="container py-2">
        <div class="row">
          <div class="col-lg-12">
            <div class="py-2">
              <h5 class="title_red">DATOS CUPOS ALUMNOS ALMACENADOS</h5>
              <hr>
            </div>
          </div>
        </div>
      </div>
      <div class="container py-2">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="py-2 text-center">
              <?php
               try {
                  require ("../funciones/datos_cupos_admision.php");
                } catch (\Exception $e) {
                  echo "<script> console.log('Error al recibir datos de datos_sliders.php')</script>";
                  }
               ?>
               <div class='table-responsive'>
                 <table class='table table-bordered table-hover font_open' id='tabla_actividades'>
                   <thead class='thead-dark'>
                     <tr>
                      <th>Curso</th>
                      <th>Vacantes Disponibles</th>
                      <th>Cambiar Valor</th>
                    </tr>
                  </Thread>
                  <tbody>
                    <tr>
                      <td><p><?php echo $curso0; ?></p></td>
                      <td><p><?php echo $cupos0; ?></p></td>
                      <td><input type="button" class="btn btn-success" name="" value="Modificar" data-toggle='modal' data-target='#ModalCenterEditar0'>
                        <div class='modal fade' id='ModalCenterEditar0' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                          <div class='modal-dialog modal-dialog-centered' role='document'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>EDITAR VALOR</h6>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                  <span aria-hidden='true'>&times;</span>
                                </button>
                              </div>
                              <div class='modal-body'>
                                <div class='container'><form action='../funciones/editar_cupo_alumno.php' method='post'>
                                  <div class="form-group">
                                    <label for='nuevo_valor' class='font_open'>Ingrese el nuevo valor</label>
                                    <input type="text" class="form-control" name="nuevo_valor" value="<?php echo $cupos0; ?>" maxlength="2" onkeypress="return soloNumeros(event);" required>
                                  </div>
                                </div>
                              </div>
                              <div class='modal-footer'>
                                <input type='hidden' name='id_curso' value="<?php echo $id0; ?>">
                                <input type='submit' class='btn btn-success' name='btn_editar_slider' value='Modificar'></form>
                              </div>
                            </div>
                          </div>
                        </div>
                       </td>
                    </tr>
                    <tr>
                      <td><p><?php echo $curso1; ?></p></td>
                      <td><p><?php echo $cupos1; ?></p></td>
                      <td><input type="button" class="btn btn-success" name="" value="Modificar" data-toggle='modal' data-target='#ModalCenterEditar1'>
                        <div class='modal fade' id='ModalCenterEditar1' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                          <div class='modal-dialog modal-dialog-centered' role='document'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>EDITAR VALOR</h6>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                  <span aria-hidden='true'>&times;</span>
                                </button>
                              </div>
                              <div class='modal-body'>
                                <div class='container'><form action='../funciones/editar_cupo_alumno.php' method='post'>
                                  <div class="form-group">
                                    <label for='nuevo_valor' class='font_open'>Ingrese el nuevo valor</label>
                                    <input type="text" class="form-control" name="nuevo_valor" value="<?php echo $cupos1; ?>" maxlength="2" onkeypress="return soloNumeros(event);" required>
                                  </div>
                                </div>
                              </div>
                              <div class='modal-footer'>
                                <input type='hidden' name='id_curso' value="<?php echo $id1; ?>">
                                <input type='submit' class='btn btn-success' name='btn_editar_slider' value='Modificar'></form>
                              </div>
                            </div>
                          </div>
                        </div>
                       </td>
                    </tr>
                    <tr>
                      <td><p><?php echo $curso2; ?></p></td>
                      <td><p><?php echo $cupos2; ?></p></td>
                      <td><input type="button" class="btn btn-success" name="" value="Modificar" data-toggle='modal' data-target='#ModalCenterEditar2'>
                        <div class='modal fade' id='ModalCenterEditar2' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                          <div class='modal-dialog modal-dialog-centered' role='document'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>EDITAR VALOR</h6>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                  <span aria-hidden='true'>&times;</span>
                                </button>
                              </div>
                              <div class='modal-body'>
                                <div class='container'><form action='../funciones/editar_cupo_alumno.php' method='post'>
                                  <div class="form-group">
                                    <label for='nuevo_valor' class='font_open'>Ingrese el nuevo valor</label>
                                    <input type="text" class="form-control" name="nuevo_valor" value="<?php echo $cupos2; ?>" maxlength="2" onkeypress="return soloNumeros(event);" required>
                                  </div>
                                </div>
                              </div>
                              <div class='modal-footer'>
                                <input type='hidden' name='id_curso' value="<?php echo $id2; ?>">
                                <input type='submit' class='btn btn-success' name='btn_editar_slider' value='Modificar'></form>
                              </div>
                            </div>
                          </div>
                        </div>
                       </td>
                    </tr>
                    <tr>
                      <td><p><?php echo $curso3; ?></p></td>
                      <td><p><?php echo $cupos3; ?></p></td>
                      <td><input type="button" class="btn btn-success" name="" value="Modificar" data-toggle='modal' data-target='#ModalCenterEditar3'>
                        <div class='modal fade' id='ModalCenterEditar3' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                          <div class='modal-dialog modal-dialog-centered' role='document'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>EDITAR VALOR</h6>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                  <span aria-hidden='true'>&times;</span>
                                </button>
                              </div>
                              <div class='modal-body'>
                                <div class='container'><form action='../funciones/editar_cupo_alumno.php' method='post'>
                                  <div class="form-group">
                                    <label for='nuevo_valor' class='font_open'>Ingrese el nuevo valor</label>
                                    <input type="text" class="form-control" name="nuevo_valor" value="<?php echo $cupos3; ?>" maxlength="2" onkeypress="return soloNumeros(event);" required>
                                  </div>
                                </div>
                              </div>
                              <div class='modal-footer'>
                                <input type='hidden' name='id_curso' value="<?php echo $id3; ?>">
                                <input type='submit' class='btn btn-success' name='btn_editar_slider' value='Modificar'></form>
                              </div>
                            </div>
                          </div>
                        </div>
                       </td>
                    </tr>
                    <tr>
                      <td><p><?php echo $curso4; ?></p></td>
                      <td><p><?php echo $cupos4; ?></p></td>
                      <td><input type="button" class="btn btn-success" name="" value="Modificar" data-toggle='modal' data-target='#ModalCenterEditar4'>
                        <div class='modal fade' id='ModalCenterEditar4' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                          <div class='modal-dialog modal-dialog-centered' role='document'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>EDITAR VALOR</h6>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                  <span aria-hidden='true'>&times;</span>
                                </button>
                              </div>
                              <div class='modal-body'>
                                <div class='container'><form action='../funciones/editar_cupo_alumno.php' method='post'>
                                  <div class="form-group">
                                    <label for='nuevo_valor' class='font_open'>Ingrese el nuevo valor</label>
                                    <input type="text" class="form-control" name="nuevo_valor" value="<?php echo $cupos4; ?>" maxlength="2" onkeypress="return soloNumeros(event);" required>
                                  </div>
                                </div>
                              </div>
                              <div class='modal-footer'>
                                <input type='hidden' name='id_curso' value="<?php echo $id4; ?>">
                                <input type='submit' class='btn btn-success' name='btn_editar_slider' value='Modificar'></form>
                              </div>
                            </div>
                          </div>
                        </div>
                       </td>
                    </tr>
                    <tr>
                      <td><p><?php echo $curso5; ?></p></td>
                      <td><p><?php echo $cupos5; ?></p></td>
                      <td><input type="button" class="btn btn-success" name="" value="Modificar" data-toggle='modal' data-target='#ModalCenterEditar5'>
                        <div class='modal fade' id='ModalCenterEditar5' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                          <div class='modal-dialog modal-dialog-centered' role='document'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>EDITAR VALOR</h6>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                  <span aria-hidden='true'>&times;</span>
                                </button>
                              </div>
                              <div class='modal-body'>
                                <div class='container'><form action='../funciones/editar_cupo_alumno.php' method='post'>
                                  <div class="form-group">
                                    <label for='nuevo_valor' class='font_open'>Ingrese el nuevo valor</label>
                                    <input type="text" class="form-control" name="nuevo_valor" value="<?php echo $cupos5; ?>" maxlength="2" onkeypress="return soloNumeros(event);" required>
                                  </div>
                                </div>
                              </div>
                              <div class='modal-footer'>
                                <input type='hidden' name='id_curso' value="<?php echo $id5; ?>">
                                <input type='submit' class='btn btn-success' name='btn_editar_slider' value='Modificar'></form>
                              </div>
                            </div>
                          </div>
                        </div>
                       </td>
                    </tr>
                    <tr>
                      <td><p><?php echo $curso6; ?></p></td>
                      <td><p><?php echo $cupos6; ?></p></td>
                      <td><input type="button" class="btn btn-success" name="" value="Modificar" data-toggle='modal' data-target='#ModalCenterEditar6'>
                        <div class='modal fade' id='ModalCenterEditar6' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                          <div class='modal-dialog modal-dialog-centered' role='document'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>EDITAR VALOR</h6>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                  <span aria-hidden='true'>&times;</span>
                                </button>
                              </div>
                              <div class='modal-body'>
                                <div class='container'><form action='../funciones/editar_cupo_alumno.php' method='post'>
                                  <div class="form-group">
                                    <label for='nuevo_valor' class='font_open'>Ingrese el nuevo valor</label>
                                    <input type="text" class="form-control" name="nuevo_valor" value="<?php echo $cupos6; ?>" maxlength="2" onkeypress="return soloNumeros(event);" required>
                                  </div>
                                </div>
                              </div>
                              <div class='modal-footer'>
                                <input type='hidden' name='id_curso' value="<?php echo $id6; ?>">
                                <input type='submit' class='btn btn-success' name='btn_editar_slider' value='Modificar'></form>
                              </div>
                            </div>
                          </div>
                        </div>
                       </td>
                    </tr>
                    <tr>
                      <td><p><?php echo $curso7; ?></p></td>
                      <td><p><?php echo $cupos7; ?></p></td>
                      <td><input type="button" class="btn btn-success" name="" value="Modificar" data-toggle='modal' data-target='#ModalCenterEditar7'>
                        <div class='modal fade' id='ModalCenterEditar7' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                          <div class='modal-dialog modal-dialog-centered' role='document'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>EDITAR VALOR</h6>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                  <span aria-hidden='true'>&times;</span>
                                </button>
                              </div>
                              <div class='modal-body'>
                                <div class='container'><form action='../funciones/editar_cupo_alumno.php' method='post'>
                                  <div class="form-group">
                                    <label for='nuevo_valor' class='font_open'>Ingrese el nuevo valor</label>
                                    <input type="text" class="form-control" name="nuevo_valor" value="<?php echo $cupos7; ?>" maxlength="2" onkeypress="return soloNumeros(event);" required>
                                  </div>
                                </div>
                              </div>
                              <div class='modal-footer'>
                                <input type='hidden' name='id_curso' value="<?php echo $id7; ?>">
                                <input type='submit' class='btn btn-success' name='btn_editar_slider' value='Modificar'></form>
                              </div>
                            </div>
                          </div>
                        </div>
                       </td>
                    </tr>
                    <tr>
                      <td><p><?php echo $curso8; ?></p></td>
                      <td><p><?php echo $cupos8; ?></p></td>
                      <td><input type="button" class="btn btn-success" name="" value="Modificar" data-toggle='modal' data-target='#ModalCenterEditar8'>
                        <div class='modal fade' id='ModalCenterEditar8' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                          <div class='modal-dialog modal-dialog-centered' role='document'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>EDITAR VALOR</h6>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                  <span aria-hidden='true'>&times;</span>
                                </button>
                              </div>
                              <div class='modal-body'>
                                <div class='container'><form action='../funciones/editar_cupo_alumno.php' method='post'>
                                  <div class="form-group">
                                    <label for='nuevo_valor' class='font_open'>Ingrese el nuevo valor</label>
                                    <input type="text" class="form-control" name="nuevo_valor" value="<?php echo $cupos8; ?>" maxlength="2" onkeypress="return soloNumeros(event);" required>
                                  </div>
                                </div>
                              </div>
                              <div class='modal-footer'>
                                <input type='hidden' name='id_curso' value="<?php echo $id8; ?>">
                                <input type='submit' class='btn btn-success' name='btn_editar_slider' value='Modificar'></form>
                              </div>
                            </div>
                          </div>
                        </div>
                       </td>
                    </tr>
                    <tr>
                      <td><p><?php echo $curso9; ?></p></td>
                      <td><p><?php echo $cupos9; ?></p></td>
                      <td><input type="button" class="btn btn-success" name="" value="Modificar" data-toggle='modal' data-target='#ModalCenterEditar9'>
                        <div class='modal fade' id='ModalCenterEditar9' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                          <div class='modal-dialog modal-dialog-centered' role='document'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>EDITAR VALOR</h6>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                  <span aria-hidden='true'>&times;</span>
                                </button>
                              </div>
                              <div class='modal-body'>
                                <div class='container'><form action='../funciones/editar_cupo_alumno.php' method='post'>
                                  <div class="form-group">
                                    <label for='nuevo_valor' class='font_open'>Ingrese el nuevo valor</label>
                                    <input type="text" class="form-control" name="nuevo_valor" value="<?php echo $cupos9; ?>" maxlength="2" onkeypress="return soloNumeros(event);" required>
                                  </div>
                                </div>
                              </div>
                              <div class='modal-footer'>
                                <input type='hidden' name='id_curso' value="<?php echo $id9; ?>">
                                <input type='submit' class='btn btn-success' name='btn_editar_slider' value='Modificar'></form>
                              </div>
                            </div>
                          </div>
                        </div>
                       </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <?php require("../funciones/datos_images_utilidades.php"); ?>
      <div class="container py-2">
        <div class="row">
          <div class="col-lg-12">
            <div class="py-2">
              <h5 class="title_red">IMAGEN INDEX ADMISION ANUAL</h5>
              <hr>
            </div>
          </div>
        </div>
      </div>
      <div class="container py-2">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="py-2 text-center">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label class="control-label label_menu" for="archivo_imagen">Seleccionar Imagen</label>
                  </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <div class="custom-file"><form method="post" action="../funciones/almacenar_imagen_index.php" onsubmit="return validar();" enctype="multipart/form-data">
                        <input type="hidden" name="old_imagen_index" value="<?php echo $imagen_admision ?>">
                       <input type="file" class="custom-file-input" name="imagen_index" id="customFile" accept="image/*">
                       <label class="custom-file-label" for="customFile"><?php echo $imagen_admision ?></label>
                    </div>
                    <small class="form-text text-muted">
                        Tamaño maximo 3mb, solo archivos de imagen
                    </small>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label class="control-label label_menu" for="border_color">Seleccionar Color Borde</label>
                  </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <div class="">
                      <input class="jscolor form-control" name="input_border" id="jsoncolor_control" value="<?php echo   $border_admision ?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label class="control-label label_menu" for="">Vista Previa</label>
                  </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <div>
                      <div id="border-preview-zone">
                        <div id="file-preview-zone">
                          <img src="../images/utilidad/<?php echo $imagen_admision ?>" id="file-preview" alt="preview">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group display_center">
                    <input type="submit" class="btn btn-success" name="btn_cambiar_imagen" value="Guardar Cambios"></form>
                  </div>
                  <div class="form-group display_center">
                    <span class="text-danger font-weight-bold" id="text_help_image_index"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--SCRIPTS-->
    <script src="../js/buscador.js"></script>
    <script src="../js/app.js"></script>
    <script src="../js/validar.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      function validar(){
        if ( $('#jsoncolor_control').val().length == 0 ) {
          $('#text_help_image_index').html("Complete los campos correctamente");
          return false;
        }else {
          return true;
        }

      }
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        var colorborder = $("#jsoncolor_control").val();
        $("#border-preview-zone").css({"width": "395px","height": "128px","background-color": "#"+colorborder+"", "padding": "5px"});
      });

      $('#jsoncolor_control').on('input', function() {
        var colorborder = $("#jsoncolor_control").val();
        $("#border-preview-zone").css({"width": "395px","height": "128px","background-color": "#"+colorborder+"", "padding": "5px"});
      });
      $('#jsoncolor_control').on('change', function(){
        var colorborder = $("#jsoncolor_control").val();
        $("#border-preview-zone").css({"width": "395px","height": "128px","background-color": "#"+colorborder+"", "padding": "5px"});
      });
    </script>
    <script>
        function readFile(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                  //Comprueba si existe el elemento antes de la ejecucion, se elimina y prosigue
                  if ( $("#file-preview").length ) {
                      $("#file-preview").remove();

                      var filePreview = document.createElement('img');
                      filePreview.id = 'file-preview';
                      //e.target.result --> base64 data
                      filePreview.src = e.target.result;
                      console.log(e.target.result);
                      var previewZone = document.getElementById('file-preview-zone');
                      previewZone.appendChild(filePreview);
                  }else {
                    //Nuevo elemento temporal
                    var filePreview = document.createElement('img');
                    filePreview.id = 'file-preview';
                    //e.target.result --> base64 data
                    filePreview.src = e.target.result;
                    console.log(e.target.result);

                    var previewZone = document.getElementById('file-preview-zone');
                    previewZone.appendChild(filePreview);
                  }

                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        //Lee el elemento desde el input
        var fileUpload = document.getElementById('customFile');
        fileUpload.onchange = function (e) {
            readFile(e.srcElement);
        }

    </script>
    <script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    </script>
    <script type="text/javascript">
      $('ul li').click(function(){
      console.log($(this).html());
      });
    </script>
    <script type="text/javascript">
      function show(){
        $(".haja").show();
      }
    </script>
    <script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    </script>
    <script language="javascript">
        function soloNumeros(e){
              key = e.keyCode || e.which;
              tecla = String.fromCharCode(key).toLowerCase();
              letras = " 0123456789()/-";//caracteres permitidos
              especiales = "8-37-39-46";//teclas especiales ejem espacio, se puede ver en numero de la letra en el mapa de caracteres

              tecla_especial = false
              for(var i in especiales){
                   if(key == especiales[i]){
                       tecla_especial = true;
                       break;
                   }
               }

               if(letras.indexOf(tecla)==-1 && !tecla_especial){
                   return false;
               }
           }
           function soloLetras(e){
              key = e.keyCode || e.which;
              tecla = String.fromCharCode(key).toLowerCase();
              letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";//caracteres permitidos
              especiales = "8-37-39-46";//teclas especiales ejem espacio, se puede ver en numero de la letra en el mapa de caracteres

              tecla_especial = false
              for(var i in especiales){
                   if(key == especiales[i]){
                       tecla_especial = true;
                       break;
                   }
               }

               if(letras.indexOf(tecla)==-1 && !tecla_especial){
                   return false;
               }
           }
    </script>
  </body>
</html>
