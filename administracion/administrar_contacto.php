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
    <script src="../js/jquery-3.4.1.min.js"></script>
    <title>Administrar Contacto CB</title>
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
            <li class="breadcrumb-item"><a href="menu_principal.php?label=actividades">Sección Contacto</a></li>
            <li class="breadcrumb-item active" aria-current="page">Administrar Contacto</li>
          </ol>
        </nav>
      </div>
    </section>
    <section>
      <div class="container py-2">
        <div class="row">
          <div class="col-lg-12">
            <div class="py-2">
              <h5 class="title_red">DATOS CONTACTO</h5>
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
                  require('../funciones/datos_contacto.php');
                } catch (\Exception $e) {
                  echo "<script> console.log('Error al recibir datos de datos_contaacto.php')</script>";
                  }
               ?>
               <div class='table-responsive'>
                 <table class='table table-bordered table-hover font_open' id='tabla_actividades'>
                   <thead class='thead-dark'>
                     <tr>
                      <th colspan="2">Datos Contacto</th>
                    </tr>
                  </Thread>
                  <tbody>
                    <tr>
                      <td> <p class="font_open_nosize font-weight-bold">Email</p></td>
                      <td><input type="button" class="btn btn-success" name="" value="Modificar" data-toggle='modal' data-target='#ModalCenterEditaremail'>

                        <div class='modal fade' id='ModalCenterEditaremail' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                          <div class='modal-dialog modal-dialog-centered' role='document'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>EDITAR EMAIL</h6>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                  <span aria-hidden='true'>&times;</span>
                                </button>
                              </div>
                              <div class='modal-body'>
                                <div class='container'><form action='../funciones/editar_contacto.php' method='post'>
                                  <div class='form-group text-left'>
                                    <label for='nombre_galeria_editar' class='font_open'>Ingrese el nuevo valor</label>
                                    <input type="text" class="form-control" name="input_editar_email" value="<?php echo $email_contacto; ?>" maxlength="40" required>
                                    <small id="intro_help" class="form-text text-muted">
                                      Maximo 40 caracteres.
                                    </small>
                                  </div>
                                </div>
                              </div>
                              <div class='modal-footer'>
                                <input type='hidden' name='id_contacto' value='<?php echo $id_contacto; ?>'>
                                <input type='submit' class='btn btn-success' name='btn_editar_email' value='Modificar'></form>
                              </div>
                            </div>
                          </div>
                        </div>

                       </td>
                    </tr>
                    <tr>
                      <td><p class="font_open_nosize font-weight-bold">Telefono</p></td>
                      <td><input type="button" class="btn btn-success" name="" value="Modificar" data-toggle='modal' data-target='#ModalCenterEditartelefono'>
                        <div class='modal fade' id='ModalCenterEditartelefono' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                          <div class='modal-dialog modal-dialog-centered' role='document'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>EDITAR TELEFONO</h6>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                  <span aria-hidden='true'>&times;</span>
                                </button>
                              </div>
                              <div class='modal-body'>
                                <div class='container'><form action='../funciones/editar_contacto.php' method='post'>
                                  <div class='form-group text-left'>
                                    <label for='nombre_galeria_editar' class='font_open'>Ingrese el nuevo valor</label>
                                    <input type="text" class="form-control" name="input_editar_telefono" onkeypress="return soloNumeros(event)" value="<?php echo $telefono_contacto; ?>" maxlength="40" required>
                                    <small id="intro_help" class="form-text text-muted">
                                      Maximo 40 caracteres. Solo se pueden ingresar numeros y signos.
                                    </small>
                                  </div>
                                </div>
                              </div>
                              <div class='modal-footer'>
                                <input type='hidden' name='id_contacto' value='<?php echo $id_contacto ?>'>
                                <input type='submit' class='btn btn-success' name='btn_editar_telefono' value='Modificar'></form>
                              </div>
                            </div>
                          </div>
                        </div>
                       </td>
                    </tr>
                    <tr>
                      <td><p class="font_open_nosize font-weight-bold">Ubicación</p></td>
                      <td><input type="button" class="btn btn-success" name="" value="Modificar" data-toggle='modal' data-target='#ModalCenterEditarubicacion'>

                        <div class='modal fade' id='ModalCenterEditarubicacion' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                          <div class='modal-dialog modal-dialog-centered' role='document'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <h6 class='modal-title font-weight-bold' id='exampleModalLongTitle'>EDITAR UBICACIÓN</h6>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                  <span aria-hidden='true'>&times;</span>
                                </button>
                              </div>
                              <div class='modal-body'>
                                <div class='container'><form action='../funciones/editar_contacto.php' method='post'>
                                  <div class='form-group text-left'>
                                    <label for='nombre_galeria_editar' class='font_open'>Ingrese el nuevo valor</label>
                                    <input type="text" class="form-control" name="input_editar_ubicacion" value="<?php echo $ubicacion_contacto; ?>" maxlength="40" required>
                                    <small id="intro_help" class="form-text text-muted">
                                      Maximo 40 caracteres.
                                    </small>
                                  </div>
                                </div>
                              </div>
                              <div class='modal-footer'>
                                <input type='hidden' name='id_contacto' value='<?php echo $id_contacto; ?>'>
                                <input type='submit' class='btn btn-success' name='btn_editar_ubicacion' value='Modificar'></form>
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
    <script src="../js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
    <script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    </script>
  </body>
</html>
