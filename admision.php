<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#E03C3B">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/utilidad/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Admisión Colegio Bellavista</title>
    <script type="text/javascript">
          function getParameterByName(name, url) {
          if (!url) url = window.location.href;
          name = name.replace(/[\[\]]/g, '\\$&');
          var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
              results = regex.exec(url);
          if (!results) return null;
          if (!results[2]) return '';
          return decodeURIComponent(results[2].replace(/\+/g, ' '));
      }
      function openModal(){
        var open_modal = getParameterByName('estatemodal');
        if (open_modal =="true"){
        //Abre el modal que quieras
          $('#Modalsend').modal();
        }
        if (open_modal =="false"){
        //Abre el modal que quieras
          $('#Modalsenderror').modal();
        }
      }
    </script>
    <script type="text/javascript">
      function comprobar_form(){
        if (document.getElementById('input1').value == ""){
          document.getElementById("inputHelpBlockcampos1").innerHTML = "Complete los campos requeridos";
            return false;
        }else{
          if (document.getElementById('input2').value == "" ) {
            document.getElementById("inputHelpBlockcampos2").innerHTML = "Complete los campos requeridos";
              return false;
          }else {
            document.form_contacto.submit()
          }
        }
      }
    </script>
    <script type="text/javascript">
      function hideHelp() {
        $( "#inputHelpBlockcampos1").hide();

      }
      function hideHelp2(){
        $( "#inputHelpBlockcampos2").hide();
      }
    </script>
  </head>
  <body onpaste="return false" onload="openModal()">
    <?php
     try {
       require("funciones/datos_cupos_admision.php");
       require('funciones/datos_contacto.php');
      } catch (\Exception $e) {
        echo "<script>console.log('error al tomar los datos desde datos_cupos_admision.php');</script>";
      }
       ?>
    <div class="modal fade" id="Modalsend" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-body border border-light bg-danger rounded">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-12 text-white">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="col-12 text-center text-white font-weight-bold">
                      <p style="font-size: 1.1rem;">Formulario enviado con exito</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <div class="modal fade" id="Modalsenderror" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-dialog-centered" role="document">
             <div class="modal-content">
               <div class="modal-body border border-light bg-danger rounded">
                 <div class="container-fluid">
                   <div class="row">
                     <div class="col-12 text-white">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="col-12 text-center text-white font-weight-bold">
                       <p style="font-size: 1.1rem;">Ocurrio un error al enviar el formulario, reintente</p>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
    <header class="header_color">
        <div class="container-fluid d-block d-sm-none color_1">
            <ul class="nav justify-content-center color_1">
              <li class="nav-item">
                <div style="padding-right:6px;">
                  <p class="font-weight-bold"><span> <img src="images/iconos/marcador-email.png" alt="email" width="18" height="18"></span> <?php echo $email_contacto; ?></p>
                </div>
              </li>
              <li class="nav-item">
                <div>
                  <p class="font-weight-bold"><span><img src="images/iconos/marcador-teléfono.png" alt="telefono" width="18" height="18"></span> <?php echo $telefono_contacto; ?></p>
                </div>
              </li>
              <li class="nav-item">
                <div>
                  <p class="font-weight-bold"><span><img src="images/iconos/marcador-localidad.png" alt="direccion" width="18" height="18"></span> <?php echo $ubicacion_contacto; ?></p>
                </div>
              </li>
            </ul>
        </div>
        <div class='container-fluid'>
          <center>
            <div class='row'>
              <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                <div class='py-2'>
                  <a href="index.php" class="text-decoration-none"><img src='images/utilidad/insignia.png' width='76' height='80' alt=''></a>
                </div>
              </div>
              <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                <div class='py-1'>
                  <span class='bellavista_title'>COLEGIO BELLAVISTA</span>
                </div>
              </div>
            </div>
          </center>
        </div>
        <div class='container'>
          <nav class='navbar navbar-expand-lg navbar-light bg-light noseleccionable shadow-border-nr'>
            <a class='navbar-brand font-weight-bold text-uppercase d-lg-none' style='color:rgb(0, 0, 0,0.6)' href='../index.php'>Menu Principal</a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
              <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNav' >
              <ul class='navbar-nav mx-auto' style='width:100%;'>
                <li class='nav-item navheader'>
                  <a class='nav-link navbar_titulo line_hover' href='index.php'>INICIO <span class='sr-only'>INICIO</span></a>
                </li>
                <li class='nav-item dropdown navheader'>
                  <a class='nav-link dropdown-toggle navbar_titulo line_hover' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' href='#'>INSTITUCIÓN</a>
                  <div class='dropdown-menu background_navbar' aria-labelledby='navbarDropdown'>
                      <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='educativo.php'>Centro Educativo</a>
                      <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='equipo.php'>Equipo Docente</a>
                      <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='noticias.php'>Noticias</a>
                      <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='actividades.php'>Actividades</a>
                      <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='galerias.php'>Galeria</a>
                      <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='historia.php'>Historia</a>
                  </div>
                </li>
                <li class='nav-item navheader'>
                  <a class='nav-link navbar_titulo line_hover' href='admision.php'>ADMISIÓN <span class="ano_actual"></span></a>
                </li>
                <li class='nav-item navheader'>
                  <a class='nav-link navbar_titulo line_hover' href='contacto.php' tabindex='-1'>CONTACTO</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
    </header>
    <section>
        <br>
        <div class="container bg-light shadow-border">
          <div class="container py-2">
            <div class="container py-2">
              <h2 class="text-center text-danger">ADMISIÓN <span class="ano_actual"></h2>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <p class="font_open">Phasellus tincidunt eget augue nec semper. Nam congue facilisis porttitor. Nullam egestas enim sed libero placerat accumsan. Nulla vel mauris a magna condimentum consectetur id ac purus. Nam eleifend quam vel elit imperdiet rutrum. Nulla lacinia sit amet lectus at sollicitudin. Curabitur maximus mi eget risus pretium, ac semper lectus rutrum. Aliquam scelerisque rhoncus ipsum non congue. Sed vel convallis risus. Nunc sodales, lorem suscipit molestie ultrices, elit nisi volutpat velit, eget efficitur eros ante viverra lacus. Aliquam eget lacus bibendum, ultrices libero a, ullamcorper eros. Maecenas commodo dolor vitae lorem porttitor iaculis. Suspendisse ut enim nisi. Mauris at finibus massa.</p>
                  <p class="font_open">Las Postulaciones de Pre-Kinder a 8° año Basico 2019 se deberán realizar a través del Sistema de Admisión Escolar.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <iframe width="100%;" height="315" src="https://www.youtube.com/embed/T5Bn3I7WzJI" allowfullscreen></iframe>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="container">
                    <div class="text-center">
                      <table class="table table-bordered font-weight-bold">
                        <tr class="bg-danger text-light">
                          <td><h4>CUPOS DISPONIBLES</h4></td>
                        </tr>
                        <tr class="bg-info text-light">
                          <td>Pre-Kinder : <span id="vacantes_pk"><?php if(isset($cupos0)){echo $cupos0;}else{echo "";} ?></span> Vacantes</td>
                        </tr>
                        <tr class="bg-info text-light">
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;Kinder : <span id="vacantes_k"><?php if(isset($cupos1)){echo $cupos1;}else{echo "";} ?></span> Vacantes</td>
                        </tr>
                        <tr class="bg-info text-light">
                          <td>1° Básico : <span id="vacantes_1"><?php if(isset($cupos2)){echo $cupos2;}else{echo "";} ?></span> Vacantes</td>
                        </tr>
                        <tr class="bg-info text-light">
                          <td>2° Básico :  <span id="vacantes_2"><?php if(isset($cupos3)){echo $cupos3;}else{echo "";} ?></span> Vacantes</td>
                        </tr>
                        <tr class="bg-info text-light">
                          <td>3° Básico :  <span id="vacantes_3"><?php if(isset($cupos4)){echo $cupos4;}else{echo "";} ?></span>  Vacantes</td>
                        </tr>
                        <tr class="bg-info text-light">
                          <td>4° Básico :  <span id="vacantes_4"><?php if(isset($cupos5)){echo $cupos5;}else{echo "";} ?></span> Vacantes</td>
                        </tr>
                        <tr class="bg-info text-light">
                          <td>5° Básico :  <span id="vacantes_5"><?php if(isset($cupos6)){echo $cupos6;}else{echo "";} ?></span>  Vacantes</td>
                        </tr>
                        <tr class="bg-info text-light">
                          <td>6° Básico :  <span id="vacantes_6"><?php if(isset($cupos7)){echo $cupos7;}else{echo "";} ?></span>  Vacantes</td>
                        </tr>
                        <tr class="bg-info text-light">
                          <td>7° Básico :  <span id="vacantes_7"><?php if(isset($cupos8)){echo $cupos8;}else{echo "";} ?></span>  Vacantes</td>
                        </tr>
                        <tr class="bg-info text-light">
                          <td>8° Básico :  <span id="vacantes_8"><?php if(isset($cupos9)){echo $cupos9;}else{echo "";} ?></span> Vacantes</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <section class="py-3 px-5 rounded" style="background-color: #bfbfbf">
                    <form class="" action="funciones/formulario_admision.php" name="form_contacto" method="post">
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <h5 class="text-center">FORMULARIO DE CONTACTO</h5>
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label for="" class="sr-only"></label>
                            <input type="text" class="form-control" id="input1" name="usuario"  onkeyup="hideHelp();"onkeypress="return soloLetras(event);" placeholder="Nombre*" maxlength="50">
                            <small class="text-danger" id="inputHelpBlockcampos1"></small>
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label for="" class="sr-only"></label>
                            <input type="text" class="form-control" id="input2" name="fono" onkeyup="hideHelp2();"  onkeypress="return soloNumeros(event);" placeholder="Telefono*" maxlength="11">
                            <small class="text-danger" id="inputHelpBlockcampos2"></small>
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label for="" class="sr-only"></label>
                            <input type="email" class="form-control" id="input3" name="email" placeholder="Email" maxlength="50">
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LdG56YUAAAAAFiVKPhpgo9q4iUSEQ4w-zWavLNC"></div>
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <input type="button" class="btn btn-primary font-weight-bold " id="enviarDatos" onclick="comprobar_form()" name="post_form" name="button" style="width:100%;" value="Enviar">
                          </div>
                        </div>
                      </div>
                    </form>
                  </section>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
    </section>
    <footer class="container-fluid py-3 bg-dark noseleccionable">
      <div class="row">
        <div class="col-12 col-md">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 col-sm-12 logotipo">
                <div class="mx-auto" style="width:90px;">
                  <img src="images/utilidad/insignia.png" width="76" height="80" class="d-block mb-12 noseleccionable" role="img" focusable="false" alt="">
                </div>
              </div>
              <div class="col-lg-12 col-sm-12 text-center ">
                  <p class=" text-muted font-weight-bold" style="padding-top:5px;">Colegio Bellavista</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12  col-md">
          <h5>Contacto</h5>
          <ul class="list-unstyled text-small">
            <li><p class="text-muted"><span><img src="images/iconos/marcador-email.png" alt="email" width="18" height="16"></span>&nbsp;<?php echo $email_contacto; ?></p></li>
            <li><p class="text-muted"><span><img src="images/iconos/marcador-teléfono.png" alt="telefono" width="18" height="18"></span>&nbsp;<?php echo $telefono_contacto; ?></p></li>
            <li><p class="text-muted"><span><img src="images/iconos/marcador-localidad.png" alt="ubicacion" width="18" height="18"></span>&nbsp;<?php echo $ubicacion_contacto; ?></p></li>
          </ul>
        </div>
        <div class="col-6  col-md">
          <h5>Institución</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="educativo.php">Centro Educativo</a></li>
            <li><a class="text-muted" href="admision.php">Admisión <span class="ano_actual"></span></a></li>
            <li><a class="text-muted" href="equipo.php">Equipo Docente</a></li>
            <li><a class="text-muted" href="historia.php">Historia</a></li>
            <li><a class="text-muted" href="contacto.php">Contacto</a></li>
          </ul>
        </div>
        <div class="col-6  col-md">
          <h5>Mas Contenidos</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="noticias.php">Noticias</a></li>
            <li><a class="text-muted" href="actividades.php">Actividades</a></li>
            <li><a class="text-muted" href="galerias.php">Galeria</a></li>
            <li><a class="text-muted" href="ingreso.html">Ingreso Administración</a></li>
          </ul>
        </div>
        <div class="col-12  col-md">
          <h5>Redes Sociales</h5>
          <div class="custom_display">
            <a href="https://www.facebook.com/Colegio-Bellavista-1328489143963284/" target="_blank" class="text-decoration-none text-light">
            <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook"  height="25px" width="25px" class="icon_zoom"/>
            </a>
          </div>
          <div class="custom_display">
            <a href="#" target="_blank" class="text-decoration-none text-light">
            <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" height="25px" width="25px" class="icon_zoom" />
            </a>
          </div>
          <div class="custom_display">
            <a href="#" target="_blank" class="text-decoration-none text-light" >
            <img src="images/iconos/youtube-play-48.png" alt="Youtube" height="32px" width="32px" class="icon_zoom" />
            </a>
          </div>
          <div class="custom_display">
            <a href="https://www.instagram.com/colegio_bellavista/" target="_blank" class="text-decoration-none text-light" >
            <img src="images/iconos/icons8-instagram-48.png" alt="Instagram" height="28px" width="28px" class="icon_zoom" />
            </a>
          </div>
        </div>
      </div>
    </footer>

    <!--SCRIPTS-->
    <script language=javascript>
    function nuevaventana (URL){
       window.open(URL,"ventana1","width=600,height=300,scrollbars=NO")
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
    <script src="js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="text/javascript">
      var ano = (new Date).getFullYear();
      $(document).ready(function() {
      $(".ano_actual").text( ano );
      });
    </script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
