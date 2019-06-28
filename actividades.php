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
    <title>Actividades Colegio Bellavista</title>
  </head>
  <body >
    <header style="background-color:#E03C3B;">
        <div class="container-fluid d-block d-sm-none" style="background-color:#e6e6e6;">
            <ul class="nav justify-content-center" style="background-color:#e6e6e6;">
              <li class="nav-item">
                <div style="padding-right:6px;">
                  <p class="font-weight-bold"><span> <img src="images/iconos/marcador-email.png" alt="" width="18" height="18"></span> directorbellavista@machali.cl</p>
                </div>
              </li>
              <li class="nav-item">
                <div>
                  <p class="font-weight-bold"><span><img src="images/iconos/marcador-teléfono.png" alt="" width="18" height="18"></span> (9) 93492280</p>
                </div>
              </li>
              <li class="nav-item">
                <div>
                  <p class="font-weight-bold"><span><img src="images/iconos/marcador-localidad.png" alt="" width="18" height="18"></span> Calle John Kennedy # 178, Coya – Machalí</p>
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
          <nav class='navbar navbar-expand-lg navbar-light bg-light noseleccionable shadow-border-nr shadow-border-nr'>
            <a class='navbar-brand font-weight-bold text-uppercase d-lg-none' style='color:rgb(0, 0, 0,0.6)' href='#'>Menu Principal</a>
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
                      <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='educativo.html'>Centro Educativo</a>
                      <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='equipo.php'>Equipo Docente</a>
                      <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='noticias.php'>Noticias</a>
                      <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='actividades.php'>Actividades</a>
                      <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='galerias.php'>Galeria</a>
                      <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='historia.html'>Historia</a>
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
          <div class="container py-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php"><small>INICIO</small></a></li>
                <li class="breadcrumb-item"><a href="#"><small>INSTITUCIÓN</small></a></li>
                <li class="breadcrumb-item active" aria-current="page"><small>CALENDARIO ACTIVIDADES</small></li>
              </ol>
            </nav>
          </div>
          <hr>
          <div class="container py-2">
            <div class="form-group">
              <form action="actividades.php" class="form-inline" method="GET" onSubmit="return validar();">
                <div class="form-group col-lg-8 col-md-7 col-sm-7 col-xs-7" style="width:70%">
                  <label for="input_busqueda_actividades" class="sr-only">Busqueda Actividades</label>
                  <input type="search" id="input_busqueda_actividades" class="form-control" name="text_input_busqueda_actividades" placeholder="Buscar actividades.." style="width:100%;">
                </div>
                <div class="form-group col-lg-4 col-md-3 col-sm-3 col-xs-3" style="width:30%">
                  <input type="submit" name="btn_bd" class="btn btn-primary" value="Busqueda">
                </div>
                <div class="col-lg-10">
                  <small id="inputHelpBlock" class="form-text text-muted"></small>
                </div>
              </form>
            </div>
            <div class="container">
              <div class="row">
                <!--Primera columna - Actividad-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 custom-actividad">
                  <div class="container-fluid">
                    <div class="box_container">
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center custom-actividad2">
                          <div class="encabezado_secciones2">
                            <h5><a href="#" class="text-decoration-none text-light">ACTIVIDAD</a></h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Segunda columna - Fecha-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 custom-actividad">
                  <div class="container-fluid">
                    <div class="box_container">
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center custom-actividad2">
                          <div class="encabezado_secciones2">
                            <h5><a href="#" class="text-decoration-none text-light">Fecha</a></h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Datos almacenados-->
            <?php
              try {
                if (isset($_GET["btn_bd"])) {
                  require('funciones/datos_actividades_menu_search.php');
                }else {
                  require('funciones/datos_actividades_menu.php');
                }
              } catch (\Exception $e) {
                echo "<script> alert('Ha ocurrido un error al solicitar la informacion, contacte al administrador. COD:0019');</script>";
              }
            ?>
            <br>
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
            <li><p class="text-muted"><span><img src="images/iconos/marcador-email.png" alt="" width="18" height="16"></span>&nbsp;directorbellavista@machali.cl</p></li>
            <li><p class="text-muted"><span><img src="images/iconos/marcador-teléfono.png" alt="" width="18" height="18"></span>&nbsp;(9) 93492280</p></li>
            <li><p class="text-muted"><span><img src="images/iconos/marcador-localidad.png" alt="" width="18" height="18"></span>&nbsp;Calle John Kennedy # 178, Coya – Machalí</p></li>
          </ul>
        </div>
        <div class="col-6  col-md">
          <h5>Institución</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="educativo.html">Centro Educativo</a></li>
            <li><a class="text-muted" href="admision.php">Admisión <span class="ano_actual"></span></a></li>
            <li><a class="text-muted" href="equipo.php">Equipo Docente</a></li>
            <li><a class="text-muted" href="historia.html">Historia</a></li>
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
          <div style="display: inline-block;padding-right:2px;">
            <a href="#" target="_blank" class="text-decoration-none text-light">
            <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook"  height="25px" width="25px" class="icon_zoom"/>
            </a>
          </div>
          <div style="display: inline-block;padding-right:2px;">
            <a href="#" target="_blank" class="text-decoration-none text-light">
            <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" height="25px" width="25px" class="icon_zoom" />
            </a>
          </div>
          <div style="display: inline-block;padding-right:2px;">
            <a href="#" target="_blank" class="text-decoration-none text-light" >
            <img src="images/iconos/youtube-play-48.png" alt="Youtube" height="32px" width="32px" class="icon_zoom" />
            </a>
          </div>
          <div style="display: inline-block;padding-right:2px;">
            <a href="#" target="_blank" class="text-decoration-none text-light" >
            <img src="images/iconos/icons8-instagram-48.png" alt="Instagram" height="28px" width="28px" class="icon_zoom" />
            </a>
          </div>
        </div>
      </div>
    </footer>

    <!--SCRIPTS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
    function nuevaventana (URL){
       window.open(URL,"ventana1","width=600,height=300,scrollbars=NO")
    }
    </script>
    <script type="text/javascript">
      function validar() {
        if ($('#input_busqueda_actividades').val().length == 0) {
          document.getElementById("inputHelpBlock").innerHTML = "Ingrese una frase o palabra clave y presione Busqueda";
          return false;
        }
      };
    </script>
    <script type="text/javascript">
      var ano = (new Date).getFullYear();
      $(document).ready(function() {
      $(".ano_actual").text( ano );
      });
    </script>
  </body>
</html>
