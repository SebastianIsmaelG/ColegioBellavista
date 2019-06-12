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
    <title>Noticias Colegio Bellavista</title>
  </head>
  <body>
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
                  <a href="index.php"<img src='images/utilidad/insignia.png' width='76' height='80' alt=''><img src='images/utilidad/insignia.png' width='76' height='80' alt=''></a>
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
          <nav class='navbar navbar-expand-lg navbar-light bg-light noseleccionable'>
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
                      <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='galeria.php'>Galeria</a>
                        <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='historia.html'>Historia</a>
                  </div>
                </li>
                <li class='nav-item navheader'>
                  <a class='nav-link navbar_titulo line_hover' href='admision.html'>ADMISIÓN <span class="ano_actual"></span></a>
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
        <div class="container bg-light">
          <div class="container py-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php"><small>INICIO</small></a></li>
                <li class="breadcrumb-item"><a href="#"><small>INSTITUCIÓN</small></a></li>
                <li class="breadcrumb-item active" aria-current="page"><small>NOTICIAS</small></li>
              </ol>
            </nav>
          </div>
          <hr>
          <div class="container py-2">
            <div class="form-group">
              <input type="search" id="input_busqueda_actividades" class="form-control" name="" value="" placeholder="Buscar publicaciones..">
            </div>
          </div>
          <div class="container py-2">
            <div class="row">
              <div class="col-lg-9">
                <!--Datos almacenados-->
                <?php
                  try {
                    require('funciones/datos_noticias_menu.php');
                  } catch (\Exception $e) {
                    echo "<script> alert('Ha ocurrido un error al solicitar la informacion, contacte al administrador. COD:0014');</script>";
                  }
                ?>
                <div class="container">
                  <div class="form-group display_center">
                    <button class="btn btn-primary btn-lg" type="button" name="button">Ver mas</button>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="my-2 bg-white">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="">
                        <a class="text-decoration-none" href="https://www.instagram.com/sebastian_isamel_/"><img src="images/utilidad/banner_instagram.jpg" alt=""></a>
                      </div>
                    </div>
                    <div class="col-lg-12 d-none d-lg-block">
                      <iframe src="//lightwidget.com/widgets/d33f0bbcab1157c3b31911be86ab9b8d.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
                    </div>
                    <div class="col-lg-12 d-lg-none d-xl-none">
                      <iframe src="//lightwidget.com/widgets/d6adeb8094e05563affc956162c833b3.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
                    </div>
                    <div class="col-lg-12">
                      <div class="">
                        <a class="text-decoration-none" href="#"><img src="images/utilidad/banner_facebook.jpg" alt=""></a>
                      </div>
                    </div>
                    <div class="col-lg-12 d-none d-lg-block">
                      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FColegio-Bellavista-1328489143963284%2F&tabs=timeline&width=250&height=800&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="250" height="800" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div class="col-lg-12 d-lg-none d-xl-none">
                        <!--Facebook Peque-->
                    </div>
                  </div>
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
            <li><p class="text-muted"><span><img src="images/iconos/marcador-email.png" alt="" width="18" height="16"></span>&nbsp;directorbellavista@machali.cl</p></li>
            <li><p class="text-muted"><span><img src="images/iconos/marcador-teléfono.png" alt="" width="18" height="18"></span>&nbsp;(9) 93492280</p></li>
            <li><p class="text-muted"><span><img src="images/iconos/marcador-localidad.png" alt="" width="18" height="18"></span>&nbsp;Calle John Kennedy # 178, Coya – Machalí</p></li>
          </ul>
        </div>
        <div class="col-6  col-md">
          <h5>Institución</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="educativo.html">Centro Educativo</a></li>
            <li><a class="text-muted" href="admision.html">Admisión <span class="ano_actual"></span></a></li>
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
    <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
    <script async defer crossorigin='anonymous' src='https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.3'></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      var ano = (new Date).getFullYear();
      $(document).ready(function() {
      $(".ano_actual").text( ano );
      });
    </script>
  </body>
</html>
