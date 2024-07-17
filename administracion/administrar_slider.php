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
    <link rel="stylesheet" href="../css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="shortcut icon" href="../images/utilidad/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
      <script src="../js/jquery-3.4.1.min.js"></script>
    <title>Administrar Slider CB</title>
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
            <li class="breadcrumb-item"><a href="menu_principal.php?label=actividades">Sección Slider</a></li>
            <li class="breadcrumb-item active" aria-current="page">Administrar Slider</li>
          </ol>
        </nav>
      </div>
    </section>
    <section>
      <div class="container py-2">
        <div class="row">
          <div class="col-lg-12">
            <div class="py-2">
              <h5 class="title_red">DATOS SLIDER ALMACENADOS</h5>
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
                  require ("../funciones/datos_sliders.php");
                } catch (\Exception $e) {
                  echo "<script> console.log('Error al recibir datos de datos_sliders.php')</script>";
                  }
               ?>
               <div class='table-responsive'>
                 <table class='table table-bordered table-hover font_open' id='tabla_actividades'>
                   <thead class='thead-dark'>
                     <tr>
                      <th>Nombre Archivo</th>
                      <th>Ver Imagen</th>
                      <th>Cambiar Imagen</th>
                    </tr>
                  </Thread>
                  <tbody>
                    <tr>
                      <td><p><?php echo $img_slider1; ?></p></td>
                      <td><a class="" target="_blank"  href="<?php echo $url_slider.$img_slider1; ?>">Vista Previa</a></td>
                      <td><input type="button" class="btn btn-success" name="" value="Modificar" data-toggle='modal' data-target='#ModalCenterEditar1'>

                        <div class='modal fade' id='ModalCenterEditar1' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                          <div class='modal-dialog modal-dialog-centered' role='document'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>EDITAR IMAGEN</h6>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                  <span aria-hidden='true'>&times;</span>
                                </button>
                              </div>
                              <div class='modal-body'>
                                <div class='container'><form action='../funciones/editar_slider.php' method='post' enctype="multipart/form-data">
                                  <div class='form-group text-left'>
                                    <label for='nombre_galeria_editar' class='font_open'>Seleccionar imagen</label>
                                    <div class="custom-file">
                                       <input type="file" class="custom-file-input" name="fotografia_slider" id="customFile">
                                       <label class="custom-file-label" for="customFile">Buscar archivo...</label>
                                    </div>
                                    <small id="intro_help" class="form-text text-muted">
                                      Tamaño maximo 3mb. La resolución recomendada para la imagen es de 3250px x 1600px.
                                    </small>
                                  </div>
                                </div>
                              </div>
                              <div class='modal-footer'>
                                <input type="hidden" name="imagen_antigua" value="<?php echo $img_slider1; ?>">
                                <input type='hidden' name='cod_SLIDER' value='<?php echo $id_slider1 ?>'>
                                <input type='submit' class='btn btn-success' name='btn_editar_slider' value='Editar'></form>
                              </div>
                            </div>
                          </div>
                        </div>

                       </td>
                    </tr>
                    <tr>
                      <td><p><?php echo $img_slider2; ?></p></td>
                      <td><a class="" target="_blank"  href="">Vista Previa</a></td>
                      <td><input type="button" class="btn btn-success" name="" value="Modificar" data-toggle='modal' data-target='#ModalCenterEditar2'>

                        <div class='modal fade' id='ModalCenterEditar2' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                          <div class='modal-dialog modal-dialog-centered' role='document'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>EDITAR IMAGEN</h6>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                  <span aria-hidden='true'>&times;</span>
                                </button>
                              </div>
                              <div class='modal-body'>
                                <div class='container'><form action='../funciones/editar_slider.php' method='post' enctype="multipart/form-data">
                                  <div class='form-group text-left'>
                                    <label for='nombre_galeria_editar' class='font_open'>Seleccionar imagen</label>
                                    <div class="custom-file">
                                       <input type="file" class="custom-file-input" name="fotografia_slider" id="customFile">
                                       <label class="custom-file-label" for="customFile">Buscar archivo...</label>
                                    </div>
                                    <small id="intro_help" class="form-text text-muted">
                                      Tamaño maximo 3mb. La resolución recomendada para la imagen es de 3250px x 1600px.
                                    </small>
                                  </div>
                                </div>
                              </div>
                              <div class='modal-footer'>
                                <input type="hidden" name="imagen_antigua" value="<?php echo $img_slider2; ?>">
                                <input type='hidden' name='cod_SLIDER' value='<?php echo $id_slider2 ?>'>
                                <input type='submit' class='btn btn-success' name='btn_editar_slider' value='Editar'></form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><p><?php echo $img_slider3; ?></p></td>
                      <td><a class="" target="_blank" href="">Vista Previa</a></td>
                      <td><input type="button" class="btn btn-success" name="" value="Modificar" data-toggle='modal' data-target='#ModalCenterEditar3'>

                        <div class='modal fade' id='ModalCenterEditar3' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                          <div class='modal-dialog modal-dialog-centered' role='document'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>EDITAR IMAGEN</h6>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                  <span aria-hidden='true'>&times;</span>
                                </button>
                              </div>
                              <div class='modal-body'>
                                <div class='container'><form action='../funciones/editar_slider.php' method='post' enctype="multipart/form-data">
                                  <div class='form-group text-left'>
                                    <label for='nombre_galeria_editar' class='font_open'>Seleccionar imagen</label>
                                    <div class="custom-file">
                                       <input type="file" class="custom-file-input" name="fotografia_slider" id="customFile">
                                       <label class="custom-file-label" for="customFile">Buscar archivo...</label>
                                    </div>
                                    <small id="intro_help" class="form-text text-muted">
                                      Tamaño maximo 3mb. La resolución recomendada para la imagen es de 3250px x 1600px.
                                    </small>
                                  </div>
                                </div>
                              </div>
                              <div class='modal-footer'>
                                <input type="hidden" name="imagen_antigua" value="<?php echo $img_slider3; ?>">
                                <input type='hidden' name='cod_SLIDER' value='<?php echo $id_slider3 ?>'>
                                <input type='submit' class='btn btn-success' name='btn_editar_slider' value='Editar'></form>
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

    <!--SCRIPTS-->
    <script src="../js/buscador.js"></script>
    <script src="../js/app.js"></script>
    <script src="../js/validar.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>

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
  </body>
</html>
