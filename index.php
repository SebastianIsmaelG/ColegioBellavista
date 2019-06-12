<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="theme-color" content="#E03C3B">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="shortcut icon" href="images/utilidad/favicon.ico" />
        <title>Colegio Bellavista</title>
    </head>
    <body class="sadas">
        <header>
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
              <nav class='navbar navbar-expand-lg navbar-light bg-light noseleccionable'>
                <a class='navbar-brand font-weight-bold text-uppercase d-lg-none' style='color:rgb(0, 0, 0,0.6)' href='#'>Menu Principal</a>
                <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                  <span class='navbar-toggler-icon'></span>
                </button>
                <div class='collapse navbar-collapse' id='navbarNav' >
                  <ul class='navbar-nav mx-auto' style='width:100%;'>
                    <li class='nav-item navheader'>
                      <a class='nav-link navbar_titulo line_hover' href='index.php'>INICIO<span class='sr-only'>INICIO</span></a>
                    </li>
                    <li class='nav-item dropdown navheader'>
                      <a class='nav-link dropdown-toggle navbar_titulo line_hover' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' href='#'>INSTITUCIÓN</a>
                      <div class='dropdown-menu background_navbar' aria-labelledby='navbarDropdown'>
                          <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='educativo.html'>Centro Educativo</a>
                          <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='equipo.php'>Equipo Docente</a>
                          <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='noticias.php'>Noticias</a>
                          <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='actividades.php'>Actividades</a>
                          <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='galerias.php'>Galeria</a>
                          <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='admision.html'>Historia</a>
                      </div>
                    </li>
                    <li class='nav-item navheader'>
                      <a class='nav-link navbar_titulo line_hover' href='historia.html'>ADMISIÓN <span class="ano_actual"></span></a>
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
          <!--Datos almacenados-->
          <?php
            try {
              require('funciones/datos_index.php');
              setlocale(LC_TIME, 'es_CO.UTF-8');
            } catch (\Exception $e) {
              echo "<script> alert('Ha ocurrido un error al solicitar la informacion, contacte al administrador. COD:0014');</script>";
            }
          ?>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12"><!--Columna Izquierda Slider-Noticias-->
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="slider">
                      <div id="carouselExampleIndicators" class="carousel slide border_solid" data-ride="carousel" data-interval="3000">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="images/slider/FRONT_COLEGIO.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/slider/IMG_20181121_103445.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/slider/IMG_20190329_100645.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_bottom">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="encabezado_secciones">
                          <h4><a href="#" class="text-decoration-none text-light">Noticias Destacadas</a></h4>
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
                        <div class="contenido_secciones">
                          <!--Noticia 1-->
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="seccion_noticias">
                                <div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <a class="text-decoration-none" href="noticia.php?name=<?php if (isset($titulo_noticia_1)) {echo $titulo_noticia_1;}else {echo "";} ?>&publicacion=<?php if (isset($id_noticia_1)) {echo $id_noticia_1;}else {echo "";} ?>" ><h5 class="font-weight-bold text-danger"><?php if (isset($titulo_noticia_1)) {echo $titulo_noticia_1;}else {echo "";} ?></h5></a>
                                  </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <p><?php if (isset($intro_noticia_1)) {echo $intro_noticia_1;}else {echo "";} ?><span>...<a href="noticia.php?name=<?php if (isset($titulo_noticia_1)) {echo $titulo_noticia_1;}else {echo "";} ?>&publicacion=<?php if (isset($id_noticia_1)) {echo $id_noticia_1;}else {echo "";} ?>">ver mas»</a></span></p>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left" style="width:50%;">
                                    <span class="text-justify"><small class="font-weight-bold "><?php if (isset($fecha_noticia_1)) {
                                      echo strftime("%d de %B, %G", strtotime($fecha_noticia_1));}else {echo "";} ?></small></span>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right" style="width:50%;">
                                    <div class="social-share">
                                      <a href="#" target="_blank" class="text-decoration-none text-light">
                                      <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook"  height="25px" width="25px" class="icon_zoom"/>
                                      </a>
                                      <a href="#" target="_blank" class="text-decoration-none text-light">
                                      <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" height="25px" width="25px" class="icon_zoom" />
                                      </a>
                                      <a href="#" target="_blank" class="text-decoration-none text-light" >
                                      <img src="images/iconos/whatsapp-48.png" alt="whatsapp" height="35px" width="35px" class="icon_zoom" />
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--Noticia 2-->
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="seccion_noticias">
                                <div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <a class="text-decoration-none" href="noticia.php?name=<?php if (isset($titulo_noticia_2)) {echo $titulo_noticia_2;}else {echo "";} ?>&publicacion=<?php if (isset($id_noticia_2)) {echo $id_noticia_2;}else {echo "";} ?>" ><h5 class="font-weight-bold text-danger"><?php if (isset($titulo_noticia_2)) {echo $titulo_noticia_2;}else {echo "";} ?></h5></a>
                                  </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <p><?php if (isset($intro_noticia_2)) {echo $intro_noticia_2;}else {echo "";} ?><span>...<a href="noticia.php?name=<?php if (isset($titulo_noticia_2)) {echo $titulo_noticia_2;}else {echo "";} ?>&publicacion=<?php if (isset($id_noticia_2)) {echo $id_noticia_2;}else {echo "";} ?>" >ver mas»</a></span></p>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left" style="width:50%;">
                                    <span class="text-justify"><small class="font-weight-bold "><?php if (isset($fecha_noticia_2)) {

                                      echo strftime("%d de %B, %G", strtotime($fecha_noticia_2));}else {echo "";} ?></small></span>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right" style="width:50%;">
                                    <div class="social-share">
                                      <a href="#" target="_blank" class="text-decoration-none text-light">
                                      <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook"  height="25px" width="25px" class="icon_zoom"/>
                                      </a>
                                      <a href="#" target="_blank" class="text-decoration-none text-light">
                                      <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" height="25px" width="25px" class="icon_zoom" />
                                      </a>
                                      <a href="#" target="_blank" class="text-decoration-none text-light" >
                                      <img src="images/iconos/whatsapp-48.png" alt="whatsapp" height="35px" width="35px" class="icon_zoom" />
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--Noticia 3-->
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="seccion_noticias">
                                <div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <a class="text-decoration-none" href="noticia.php?name=<?php if (isset($titulo_noticia_3)) {echo $titulo_noticia_3;}else {echo "";} ?>&publicacion=<?php if (isset($id_noticia_3)) {echo $id_noticia_3;}else {echo "";} ?>" ><h5 class="font-weight-bold text-danger"><?php if (isset($titulo_noticia_3)) {echo $titulo_noticia_3;}else {echo "";} ?></h5></a>
                                  </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <p><?php if (isset($intro_noticia_3)) {echo $intro_noticia_3;}else {echo "";} ?><span>...<a href="noticia.php?name=<?php if (isset($titulo_noticia_3)) {echo $titulo_noticia_3;}else {echo "";} ?>&publicacion=<?php if (isset($id_noticia_3)) {echo $id_noticia_3;}else {echo "";} ?>" >ver mas»</a></span></p>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left" style="width:50%;">
                                    <span class="text-justify"><small class="font-weight-bold "><?php if (isset($fecha_noticia_3)) {

                                      echo strftime("%d de %B, %G", strtotime($fecha_noticia_3));}else {echo "";} ?></small></span>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right" style="width:50%;">
                                    <div class="social-share">
                                      <a href="#" target="_blank" class="text-decoration-none text-light">
                                      <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook"  height="25px" width="25px" class="icon_zoom"/>
                                      </a>
                                      <a href="#" target="_blank" class="text-decoration-none text-light">
                                      <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" height="25px" width="25px" class="icon_zoom" />
                                      </a>
                                      <a href="#" target="_blank" class="text-decoration-none text-light" >
                                      <img src="images/iconos/whatsapp-48.png" alt="whatsapp" height="35px" width="35px" class="icon_zoom" />
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--Noticia 4-->
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="seccion_noticias">
                                <div class="row">
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <a class="text-decoration-none" href="noticia.php?name=<?php if (isset($titulo_noticia_4)) {echo $titulo_noticia_4;}else {echo "";} ?>&publicacion=<?php if (isset($id_noticia_4)) {echo $id_noticia_4;}else {echo "";} ?>" ><h5 class="font-weight-bold text-danger"><?php if (isset($titulo_noticia_4)) {echo $titulo_noticia_4;}else {echo "";} ?></h5></a>
                                  </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <p><?php if (isset($intro_noticia_4)) {echo $intro_noticia_4;}else {echo "";} ?><span>...<a href="noticia.php?name=<?php if (isset($titulo_noticia_4)) {echo $titulo_noticia_4;}else {echo "";} ?>&publicacion=<?php if (isset($id_noticia_4)) {echo $id_noticia_4;}else {echo "";} ?>" >ver mas»</a></span></p>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left" style="width:50%;">
                                    <span class="text-justify"><small class="font-weight-bold "><?php if (isset($fecha_noticia_4)) {
                                      echo strftime("%d de %B, %G", strtotime($fecha_noticia_4));}else {echo "";} ?></small></span>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right" style="width:50%;">
                                    <div class="social-share">
                                      <a href="#" target="_blank" class="text-decoration-none text-light">
                                      <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook"  height="25px" width="25px" class="icon_zoom"/>
                                      </a>
                                      <a href="#" target="_blank" class="text-decoration-none text-light">
                                      <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" height="25px" width="25px" class="icon_zoom" />
                                      </a>
                                      <a href="#" target="_blank" class="text-decoration-none text-light" >
                                      <img src="images/iconos/whatsapp-48.png" alt="whatsapp" height="35px" width="35px" class="icon_zoom" />
                                      </a>
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
                </div>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12"><!--Columna Derecha Contacto-Actividades y otras secciones-->
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="container">
                      <div class="box_container d-none d-sm-block">
                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="encabezado_secciones">
                              <h4><a href="#" class="text-decoration-none text-light">Contacto</a></h4>
                            </div>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
                            <div class="contenido_secciones">
                              <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div style="padding:3px;">
                                    <p class="font-weight-bold"><span> <img src="images/iconos/marcador-email.png" alt="" width="18" height="18"></span> directorbellavista@machali.cl</p>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div style="padding:3px;">
                                    <p class="font-weight-bold"><span><img src="images/iconos/marcador-teléfono.png" alt="" width="18" height="18"></span> (9) 93492280</p>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div style="padding:3px;">
                                    <p class="font-weight-bold"><span><img src="images/iconos/marcador-localidad.png" alt="" width="18" height="18"></span> Calle John Kennedy # 178, Coya – Machalí</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="container">
                      <div class="box_container">
                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="encabezado_secciones">
                              <h4><a href="galerias.php" class="text-decoration-none text-light">Galeria</a></h4>
                            </div>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
                            <div class="contenido_secciones noseleccionable">
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                  <div class="container_thumbnail">
                                    <img src="images/galerias/cuartorealidadvirtual/IMG_20190329_090042.jpg" alt="" class="img-responsive img-thumbnail album-image">
                                    <div class="album-container">
                                      <div class="album-text">
                                          <p class="title_content_album">Ver Álbum</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                  <div class="container_thumbnail">
                                    <img src="images/galerias/baileentretenido/IMG_20181121_104944.jpg" alt="" class="img-responsive img-thumbnail album-image">
                                    <div class="album-container">
                                      <div class="album-text">
                                          <p class="title_content_album">Ver Álbum</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                  <div class="container_thumbnail">
                                    <a href="https://unsplash.it/1200/768.jpg?image=100" data-toggle="lightbox" data-gallery="gallery3">
                                        <img src="images/galerias/diadelecturacra/IMG_20190425_092606.jpg" class="img-fluid img-thumbnail album-image">
                                    </a>
                                    <div class="album-container">
                                      <div class="album-text">
                                          <p class="title_content_album">Ver Álbum</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 d-none d-sm-block">
                                  <div class="container_thumbnail">
                                    <img src="images/galerias/cuartorealidadvirtual/IMG_20190329_090042.jpg" alt="" class="img-responsive img-thumbnail album-image">
                                    <div class="album-container">
                                      <div class="album-text">
                                        <p class="title_content_album">Ver Álbum</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 d-none d-sm-block">
                                  <div class="container_thumbnail">
                                    <img src="images/galerias/baileentretenido/IMG_20181121_104944.jpg" alt="" class="img-responsive img-thumbnail album-image">
                                    <div class="album-container">
                                      <div class="album-text">
                                        <p class="title_content_album">Ver Album</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 d-none d-sm-block">
                                  <div class="container_thumbnail">
                                    <img src="images/galerias/diadelecturacra/IMG_20190425_092606.jpg" alt="" class="img-responsive img-thumbnail album-image">
                                    <div class="album-container">
                                      <div class="album-text">
                                        <p class="title_content_album">Ver Álbum</p>
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
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="container">
                      <div class="box_container">
                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="encabezado_secciones">
                              <h4><a href="actividades.php" class="text-decoration-none text-light">Calendario Actividades</a></h4>
                            </div>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
                            <div class="contenido_secciones noseleccionable">
                              <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="container_actividad text-center">
                                    <a href="actividades.php" class="text-decoration-none text-dark">
                                      <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center">
                                          <span> <img src="images/iconos/calendario-color.png" alt="" width="30" height="30"></span>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 text-center ">
                                          <p class="font-weight-bold"> <?php if (isset($titulo_actividad_1)) {echo $titulo_actividad_1; }else{echo "";} ?></p>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">
                                          <p class="font-weight-bold"> <?php if (isset($fecha_actividad_1)) {echo $fecha_actividad_1; }else{echo "";} ?></p>
                                        </div>
                                      </div>
                                    </a>
                                  </div>
                                  <div class="container_actividad text-center">
                                    <a href="actividades.php" class="text-decoration-none text-dark">
                                      <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center">
                                          <span> <img src="images/iconos/calendario-color.png" alt="" width="30" height="30"></span>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 text-center ">
                                          <p class="font-weight-bold"> <?php if (isset($titulo_actividad_2)) {echo $titulo_actividad_2; }else{echo "";} ?></p>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">
                                          <p class="font-weight-bold"> <?php if (isset($fecha_actividad_2)) {echo $fecha_actividad_2; }else{echo "";} ?></p>
                                        </div>
                                      </div>
                                    </a>
                                  </div>
                                  <div class="container_actividad text-center">
                                    <a href="actividades.php" class="text-decoration-none text-dark">
                                      <div class="row">
                                      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center">
                                        <span> <img src="images/iconos/calendario-color.png" alt="" width="30" height="30"></span>
                                      </div>
                                      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 text-center ">
                                        <p class="font-weight-bold"> <?php if (isset($titulo_actividad_3)) {echo $titulo_actividad_3; }else{echo "";} ?></p>
                                      </div>
                                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">
                                        <p class="font-weight-bold"> <?php if (isset($fecha_actividad_3)) {echo $fecha_actividad_3; }else{echo "";} ?></p>
                                      </div>
                                    </div>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="container">
                      <div class="box_container">
                        <div class="encabezado_secciones">
                          <a href="admision.html" class="text-decoration-none"><img src="images/utilidad/ADMISION-2019.jpg" alt=""></a>
                        </div>
                      </div>
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
        <script language=javascript>
        function nuevaventana (URL){
           window.open(URL,"ventana1","width=600,height=300,scrollbars=NO")
        }
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="text/javascript">
          var ano = (new Date).getFullYear();
          $(document).ready(function() {
          $(".ano_actual").text( ano );
          });
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js.map"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js.map"></script>
        <script type="text/javascript">
          $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                    event.preventDefault();
                    $(this).ekkoLightbox();
              });
        </script>
    </body>
</html>
