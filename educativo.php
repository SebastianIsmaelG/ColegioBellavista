<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#E03C3B">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"  crossorigin="anonymous">
    <link rel="shortcut icon" href="images/utilidad/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/ekko-lightbox.css">
    <title>Centro Educativo Colegio Bellavista</title>
  </head>
  <body>
    <?php require('funciones/datos_contacto.php'); ?>
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
                <li class="breadcrumb-item"><a href="#"><small>INSTITUCIÓN</small></a></li>
                <li class="breadcrumb-item active" aria-current="page"><small>CENTRO EDUCATIVO</small></li>
              </ol>
            </nav>
          </div>
          <hr>
          <div class="container py-2" >
            <div class="container py-2">
              <h2 class="text-center text-danger">COLEGIO BELLAVISTA</h2>
            </div>
            <div class="container py-2">
              <div class="imagen_bellavista"></div>
            </div>
            <div class="container font_lato py-2">
              <p>Esta misión es llevada a cabo por un equipo de docentes titulados en el área de la Educación Básica y Educación Diferencial con una larga trayectoria académica y profesional. El colegio imparte atención educacional en los niveles de Prebásica y Básica completa, con una matricula promedio  de 25 alumnos por curso. Además el colegio ofrece apoyo pedagógico a los alumnos que presentan necesidades educativas especiales a través de proyecto de integración  con especialista en el área (Psicólogo, Fonoaudiólogo, Asistente Social y Docente de Educación Diferencial). </p>
            </div>
            <div class="container py-2">
              <div class="border border-danger" style="background-color:#E03C3B;">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="py-2" style="border-bottom-style: solid;border-bottom-color: #ffffff;">
                          <h4 class="text-center text-white font_lato">DESCRIPCIÓN CENTRO EDUCATIVO</h4>
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                          <div class="px-3 py-2">
                            <p class=" text-white font_open"><span class="font-weight-bold">Nombre :</span> Colegio Bellavista</p>
                            <p class=" text-white font_open"><span class="font-weight-bold">Director :</span> Eduardo Cardenas Ortiz</p>
                            <p class=" text-white font_open"><span class="font-weight-bold">RBD :</span> 2251-9</p>
                            <p class=" text-white font_open"><span class="font-weight-bold">Dirección :</span> Calle John Kennedy # 178, Coya</p>
                            <p class=" text-white font_open"><span class="font-weight-bold">Comuna :</span> Machalí</p>
                            <p class=" text-white font_open"><span class="font-weight-bold">Dependencia :</span> Municipal</p>
                            <p class=" text-white font_open"><span class="font-weight-bold">Telefono :</span> 9 93492280</p>
                            <p class=" text-white font_open"><span class="font-weight-bold">Nivel y Modalidad :</span> Pre Kinder a 8° Basico</p>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="py-2 px-3">
                          <img src="images/utilidad/fondo-cielo-cut.jpg" class="img-fluid img-thumbnail" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container py-2">
              <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 py-3 px-3">
                  <h3 class="title_vision_mision text-danger">VISIÓN</h3>
                  <hr>
                  <p>Aspiramos a que nuestro establecimiento sea percibido por la comunidad educativa, con un ambiente grato y acogedor, donde todos sus alumnos aprendan y sean valorados como personas</p>
                  <p>Generamos espacios y ambientes propicios para un adecuado clima de convivencia escolar. Propiciamos el estudio, el trabajo y el espíritu de emprendimiento</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 py-3 px-3">
                  <img src="images/noticias/images/vision.jpg" alt="" class="img-fluid hover-shadow" />
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 d-none d-md-block py-3 px-3">
                  <img src="images/noticias/images/mision.jpg" alt="" class="img-fluid hover-shadow" />
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 py-3 px-3">
                  <h3 class="title_vision_mision text-danger">MISIÓN</h3>
                  <hr>
                  <p>Promover la formación de personas a traves de aprendizajes significativos, centradas en un ambiente propicio, lo que  permitira en educarnos en una formacioon valorica y en la entrega de habilidades necesarias para la continuidad de sus estudios y asi desenvolverse en una sociedad globalizada de permanentes cambios</p>
                </div>
                <div class="col-lg-6 d-block d-md-none py-3 px-3" >
                  <img src="images/noticias/images/mision.jpg" alt="" class="img-fluid hover-shadow" />
                </div>
              </div>
            </div>
            <div class="container py-2">
              <div class="border border-danger" style="background-color:#E03C3B;">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="py-2" style="border-bottom-style: solid;border-bottom-color: #ffffff;">
                          <h4 class="text-center text-white font_lato">INFRAESTRUCTURA</h4>
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="gallery">
                          <div class="row">
                            <div class="row justify-content-center">
                              <div class="col-md-12">
                                    <div class="row">
                                        <div class="py-2 px-3 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                          <div class="container-fluid px-4">
                                            <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="example-gallery">
                                                <img src="https://picsum.photos/400/300" class="img-fluid hover-shadow">
                                            </a>
                                          </div>
                                        </div>
                                        <div class="py-2 px-3 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                          <div class="container-fluid px-4">
                                            <a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox" data-gallery="example-gallery">
                                                <img src="https://picsum.photos/400/300" class="img-fluid hover-shadow">
                                            </a>
                                          </div>
                                        </div>
                                        <div class="py-2 px-3 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                          <div class="container-fluid px-4">
                                            <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox" data-gallery="example-gallery">
                                                <img src="https://picsum.photos/400/300" class="img-fluid hover-shadow" >
                                            </a>
                                          </div>
                                        </div>
                                        <div class="py-2 px-3 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                          <div class="container-fluid px-4">
                                            <a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox" data-gallery="example-gallery">
                                                <img src="https://picsum.photos/400/300" class="img-fluid hover-shadow">
                                            </a>
                                          </div>
                                        </div>
                                        <div class="py-2 px-3 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                          <div class="container-fluid px-4">
                                            <a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox" data-gallery="example-gallery">
                                                <img src="https://picsum.photos/400/300" class="img-fluid hover-shadow">
                                            </a>
                                          </div>
                                        </div>
                                        <div class="py-2 px-3 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                          <div class="container-fluid px-4">
                                            <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox" data-gallery="example-gallery">
                                                <img src="https://picsum.photos/400/300" class="img-fluid hover-shadow">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                              </div>
                            </div>
                            <!--Hidden Gallery-->
                            <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="https://unsplash.it/1200/768.jpg?image=257"></div>
                            <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="https://unsplash.it/1200/768.jpg?image=258"></div>
                            <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="https://unsplash.it/1200/768.jpg?image=259"></div>
                            <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="https://unsplash.it/1200/768.jpg?image=260"></div>
                            <div data-toggle="lightbox" data-gallery="example-gallery" data-remote="https://unsplash.it/1200/768.jpg?image=261"></div>
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="js/jquery-3.4.1.min.js" ></script>
    <script src="js/popper.min.js"  crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
      var ano = (new Date).getFullYear();
      $(document).ready(function() {
      $(".ano_actual").text( ano );
      });
    </script>
    <!-- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js.map"></script>
    <script type="text/javascript">
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
          });
    </script>
    <!-- -->
  </body>
</html>
