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
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d87f74a5e6.js"></script>
    <title>Contacto Colegio Bellavista</title>
  </head>
  <body>
    <?php
      try {
        require('funciones/datos_contacto.php');
      } catch (\Exception $e) {
        echo "<script> alert('Ha ocurrido un error al solicitar la informacion, contacte al administrador. COD:0014');</script>";
      }

     ?>
    <header class="header_color">
        <div class="container-fluid d-block d-sm-none color_1">
            <ul class="nav justify-content-center color_1">
              <li class="nav-item">
                <div style="padding-right:6px;">
                  <p class="font-weight-bold font_contact"><span> <img src="images/iconos/marcador-email.png" alt="" width="18" height="18"></span> <?php echo $email_contacto; ?></p>
                </div>
              </li>
              <li class="nav-item">
                <div>
                  <p class="font-weight-bold font_contact"><span><img src="images/iconos/marcador-telefono.png" alt="" width="18" height="18"></span> <?php echo $telefono_contacto; ?></p>
                </div>
              </li>
              <li class="nav-item">
                <div>
                  <p class="font-weight-bold font_contact"><span><img src="images/iconos/marcador-localidad.png" alt="" width="18" height="18"></span> <?php echo $ubicacion_contacto; ?></p>
                </div>
              </li>
            </ul>
        </div>
        <div class='container-fluid'>
          <center>
            <div class='row'>
              <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                <div class='py-2'>
                  <a href="index.php"><img src='images/utilidad/insignia.png' width='76' height='80' alt=''></a>
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
          <nav class='navbar navbar-expand-lg navbar-light bg-light noseleccionable shadow-border-nr border border-white'>
            <a class='navbar-brand font-weight-bold text-uppercase d-lg-none' style='color:rgb(0, 0, 0,0.6)' href='#'>Menu Principal</a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
              <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNav'>
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
                  <a class='nav-link navbar_titulo line_hover' href='admision.php' tabindex='-1'>ADMISIÓN <span class="ano_actual"></span></a>
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
                <li class="breadcrumb-item active" aria-current="page"><small>CONTACTO</small></li>
              </ol>
            </nav>
          </div>
          <hr>
          <div class="container py-3">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <h3 class="">INFORMACIÓN DE CONTACTO</h3>
                  <div class="container py-1 px-1">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="border_bottom py-2">
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                              <div class="col-12">
                                <div><i class="fas fa-envelope" style="font-size: 1.5em; color: Tomato;"></i><span class="font_roboto" style="font-size: 20px;"> Email</span></div>
                              </div>
                              <div class="col-12">
                                <div class="px-2">
                                  <p class="font_open_nosize"><?php echo $email_contacto; ?></p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                              <div class="col-12">
                                <div><i class="fas fa-phone-alt" style="font-size: 1.5em; color: Tomato;"></i><span class="font_roboto" style="font-size: 20px;"> Teléfono</span></div>
                              </div>
                              <div class="col-12">
                                <div class="px-2">
                                  <p class="font_open_nosize"><?php echo $telefono_contacto; ?></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="border_bottom py-2">
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="col-12">
                                <div><i class="fas fa-map-marker-alt" style="font-size: 1.5em; color: Tomato;"></i><span class="font_roboto" style="font-size: 20px;"> Ubicación</span></div>
                              </div>
                              <div class="col-12">
                                <div class="px-2">
                                  <p class="font_open_nosize"><?php echo $ubicacion_contacto; ?></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="border_bottom py-2">
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="col-12">
                                  <div><i class="fas fa-photo-video" style="font-size: 1.5em; color: Tomato;"></i><span class="font_roboto" style="font-size: 20px;"> Redes Sociales</span></div>
                              </div>
                              <div class="col-12">
                                <div class="px-2">
                                  <div class="py-2">
                                    <a href="https://www.facebook.com/Colegio-Bellavista-1328489143963284/" class="icon_social_contacto facebook_icon"><i class="fab fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/colegio_bellavista/" class="icon_social_contacto instagram_icon"><i class="fab fa-instagram" color=""></i></a>
                                    <a href="#" class="icon_social_contacto yotube_icon"><i class="fab fa-youtube"></i></a>
                                    <a href="#" class="icon_social_contacto twitter_icon"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="icon_social_contacto pinterest_icon"><i class="fab fa-pinterest"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="py-1 px-1">
                    <div class="google-maps">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d1961.4638056396166!2d-70.52805318326574!3d-34.20213163143744!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x966353d579bba2e3%3A0x356bc22b3e796167!2sColegio+Bellavista!5e1!3m2!1ses!2scl!4v1560268336500!5m2!1ses!2scl" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
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
            <li><p class="text-muted"><span><img src="images/iconos/marcador-telefono.png" alt="telefono" width="18" height="18"></span>&nbsp;<?php echo $telefono_contacto; ?></p></li>
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
            <img src="images/iconos/facebook.png" alt="Facebook"  height="25px" width="25px" class="icon_zoom"/>
            </a>
          </div>
          <div class="custom_display">
            <a href="#" target="_blank" class="text-decoration-none text-light">
            <img src="images/iconos/twitter.png" alt="Twitter" height="25px" width="25px" class="icon_zoom" />
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
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      var ano = (new Date).getFullYear();
      $(document).ready(function() {
      $(".ano_actual").text( ano );
      });
    </script>
  </body>
</html>
