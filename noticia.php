<!DOCTYPE html>
<!--Trae el contenido de la publicacion si falla retrocede-->
<?php
  try {
    require('funciones/datos_publicacion.php');
    require('funciones/datos_publi_mas_vistas.php');
    $nc = contador($vistas_publicacion,$id);
  } catch (\Exception $e) {
      echo "<script> window.history.back();</script>";
  }
 ?>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name="theme-color" content="#E03C3B">
    <link rel='stylesheet' type='text/css' href='css/style.css'>
    <link rel='stylesheet' href='css/bootstrap.min.css'  crossorigin='anonymous'>
    <link rel='shortcut icon' href='images/utilidad/favicon.ico' />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title><?php echo $titulo ?></title>
    <meta name="description" content="<?php echo $intro_publicacion ?>">
  </head>
  <body>
    <?php require('funciones/datos_contacto.php'); ?>
    <div class="loader-page">
    </div>
    <div id="fb-root"></div>
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
                  <a href="index.php"><img src="images/utilidad/insignia.png" width="76" height="80" role="img" focusable="false" alt=""></a>
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
    <br>
    <div class="container bg-light shadow-border">
      <section>
        <br>
        <div class="container bg-light">
          <div class="container py-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php"><small>INICIO</small></a></li>
                <li class="breadcrumb-item"><a href="index.html"><small>INSTITUCIÓN</small></a></li>
                <li class="breadcrumb-item active" aria-current="page"><small>NOTICIAS</small></li>
              </ol>
            </nav>
          </div>
        </div>
      </section>
      <section>
        <div class='container bg-light '>
              <div class='row'>
                  <div class='col-lg-9 col-md-12 col-sm-12 col-xs-12 bg-white'>
                    <div class='row'>
                      <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <h4 class='text-uppercase py-3'><?php if (isset($titulo_publicacion)) {echo $titulo_publicacion; }else{echo "";} ?></h4>
                        <hr>
                      </div>
                      <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class='row'>
                          <div class='col-lg-6 col-md-6 col-sm-6 col-xs-6' style='width:50%;'>
                            <div class='container-fluid'><small class="text-secondary">Autor </small><small class="text-danger font-weight-bold"><?php if (isset($nombre_autor)) {echo $nombre_autor; }else{echo "";} ?> <?php if (isset($apellido_autor)) {echo $apellido_autor; }else{echo "";} ?> </small></div>
                          </div>
                          <div class='col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right' style='width:50%;'>
                            <div class='container-fluid font-weight-bold text-secondary'><small><?php if (isset($fecha_publicacion)) {echo $fecha_publicacion; }else{echo "";} ?></small></div>
                            <div class='container-fluid font-weight-bold text-secondary'><span><img src="images/iconos/icons8-visible.png" alt="visitas"  height="15px" width="15px"><small class="font-weight-bold">&nbsp;&nbsp;<?php if (isset($nc)) {echo $nc; }else{echo "";} ?></small></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class='row'>
                        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                          <div class='container py-3'>
                            <div class="text-justify cuerpo_noticia font_open_nosize px-3" style="text-indent: 40px;">
                              <?php if (isset($cuerpo_publicacion)) {echo $cuerpo_publicacion; }else{echo "";} ?>
                            </div>
                          </div>
                          <div class='container py-2 text-right'>
                            <div class="social-share">
                              <span class="text-muted font-weight-bold">Compartir &nbsp;</span>
                              <a href="#" target="_blank" class="text-decoration-none text-light">
                              <img src="images/iconos/facebook.png" alt="Facebook"  height="25px" width="25px" class="icon_zoom"/>
                              </a>
                              <a href="#" target="_blank" class="text-decoration-none text-light">
                              <img src="images/iconos/twitter.png" alt="Twitter" height="25px" width="25px" class="icon_zoom" />
                              </a>
                              <a href="#" target="_blank" class="text-decoration-none text-light" >
                              <img src="images/iconos/whatsapp-48.png" alt="whatsapp" height="35px" width="35px" class="icon_zoom" />
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="container display_center py-2 rounded" style="background-color: #eee;border-left: 7px solid #cecece;">
                            <div class="fb-comments" data-href="http://localhost:8090/Proyectos/ColegioBellavista/noticia.php" data-width="" data-numposts="8"></div>
                          </div>
                          <br>
                        </div>
                    </div>
                  </div>
                  <div class='col-lg-3 col-md-12 col-sm-12 col-xs-12 d-none d-lg-block'>
                    <div class="my-2 bg-white">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="">
                            <a class="text-decoration-none" href="#"><img src="images/utilidad/banner_instagram.jpg" alt=""></a>
                          </div>
                        </div>
                        <div class="col-lg-12 d-none d-lg-block">
                          <iframe src="//lightwidget.com/widgets/848dc7aa797d583c98a4acd84b239dff.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
                        </div>
                        <!-- divs sm
                        <div class="col-lg-12">
                          <div class="">
                            <a class="text-decoration-none" href="#"><img src="images/utilidad/banner_instagram.jpg" alt=""></a>
                          </div>
                        </div>
                        <div class="col-lg-12 d-lg-none d-xl-none">
                          <iframe src="//lightwidget.com/widgets/d6adeb8094e05563affc956162c833b3.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
                        </div>-->
                        <div class="col-lg-12">
                          <div class="">
                            <a class="text-decoration-none" href="#"><img src="images/utilidad/banner_facebook.jpg" alt=""></a>
                          </div>
                        </div>
                        <div class="col-lg-12 d-none d-lg-block">
                          <iframe class="display_center" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FColegio-Bellavista-1328489143963284%2F&tabs=timeline&width=250&height=450&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="100%" height="450" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
      </section>
    </div>
    <br>
    <div class="container bg-light">
      <div class="row">
        <div class="col-12 py-1">
          <h4>PUBLICACIONES MAS VISITADAS</h4>
        </div>
        <!--Col pensado para dispositivos moviles XS EN SM Y MD SE PODRA VER LA INTRO PARA ACAPAR ESPACIO-->
        <div class="col-4 col-12 d-block d-md-none">
          <div class="related_box my-2 hover_box_info">
            <a href="noticia.php?name=<?php if (isset($titulo_mv_0)) {echo $titulo_mv_0; }else {echo '';} ?>&publicacion=<?php if (isset($id_mv_0)) {echo $id_mv_0;}else {echo '';} ?>" class="text-decoration-none text-dark">
              <div class="row py-2">
                <div class="col-5">
                <!--Fotografia-->
                  <div class="mx-1">
                    <img src="<?php if (isset($fintro_mv_0) && $fintro_mv_0!="") { echo $ruta_noticias.$fintro_mv_0;}else{ echo $ruta_no_image;} ?>" alt="Intro Publicacion" style="object-fit:cover;">
                  </div>
                </div>
                <div class="col-7">
                <!--Informacion-->
                <div class="px-1">
                  <h6 class="text-uppercase text-left hover_title_info"><?php if (isset($titulo_mv_0)) { echo $titulo_mv_0;}else{echo "";}?></h6>
                  <small><?php if (isset($intro_mv_0)) { echo substr($intro_mv_0, 0, 65)." ...";}else{echo "";}?></small>
                </div>
              </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-4 col-12 d-block d-md-none">
          <div class="related_box my-2 hover_box_info">
            <a href="noticia.php?name=<?php if (isset($titulo_mv_1)) {echo $titulo_mv_1; }else {echo '';} ?>&publicacion=<?php if (isset($id_mv_1)) {echo $id_mv_1;}else {echo '';} ?>" class="text-decoration-none text-dark">
              <div class="row py-2">
                <div class="col-5">
                <!--Fotografia-->
                  <div class="mx-1">
                    <img src="<?php if (isset($fintro_mv_1) && $fintro_mv_1!="") { echo $ruta_noticias.$fintro_mv_1;}else{ echo $ruta_no_image;} ?>" alt="Intro Publicacion" style="object-fit:cover;">
                  </div>
                </div>
                <div class="col-7">
                <!--Informacion-->
                <div class="px-1">
                  <h6 class="text-uppercase text-left hover_title_info"><?php if (isset($titulo_mv_1)) { echo $titulo_mv_1;}else{echo "";}?></h6>
                  <small><?php if (isset($intro_mv_1)) { echo substr($intro_mv_1, 0, 65)." ...";}else{echo "";}?></small>
                </div>
              </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-4 col-12 d-block d-md-none">
          <div class="related_box my-2 hover_box_info">
            <a href="noticia.php?name=<?php if (isset($titulo_mv_2)) {echo $titulo_mv_2; }else {echo '';} ?>&publicacion=<?php if (isset($id_mv_2)) {echo $id_mv_2;}else {echo '';} ?>" class="text-decoration-none text-dark">
              <div class="row py-2">
                <div class="col-5">
                <!--Fotografia-->
                  <div class="mx-1">
                    <img src="<?php if (isset($fintro_mv_2) && $fintro_mv_2!="") { echo $ruta_noticias.$fintro_mv_2;}else{ echo $ruta_no_image;} ?>" alt="Intro Publicacion" style="object-fit:cover;">
                  </div>
                </div>
                <div class="col-7">
                <!--Informacion-->
                <div class="px-1">
                  <h6 class="text-uppercase text-left hover_title_info"><?php if (isset($titulo_mv_2)) { echo $titulo_mv_2;}else{echo "";}?></h6>
                  <small><?php if (isset($intro_mv_2)) { echo substr($intro_mv_2, 0, 65)." ...";}else{echo "";}?></small>
                </div>
              </div>
              </div>
            </a>
          </div>
        </div>
        <!--Fin del col-->

        <!--Col para dispositivos lg +-->
        <div class="col-3 d-none d-md-block">
          <div class="related_box my-2 hover_box_info">
            <a href="noticia.php?name=<?php if (isset($titulo_mv_0)) {echo $titulo_mv_0; }else {echo '';} ?>&publicacion=<?php if (isset($id_mv_0)) {echo $id_mv_0;}else {echo '';} ?>" class="text-decoration-none text-dark">
              <div class="row py-2">
                <div class="col-12">
                  <div class="mx-1">
                    <!--Fotografia-->
                    <img src="<?php if (isset($fintro_mv_0) && $fintro_mv_0!="") { echo $ruta_noticias.$fintro_mv_0;}else{ echo $ruta_no_image;} ?>" alt="Intro Publicacion" style="object-fit:cover;">
                  </div>
                </div>
                <div class="col-12">
                  <div class="mx-2 my-2">
                    <!--Informacion-->
                    <h6><?php if (isset($titulo_mv_0)) { echo $titulo_mv_0;}?></h6>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-3 d-none d-md-block">
          <div class="related_box my-2 hover_box_info">
            <a href="noticia.php?name=<?php if (isset($titulo_mv_1)) {echo $titulo_mv_1; }else {echo '';} ?>&publicacion=<?php if (isset($id_mv_1)) {echo $id_mv_1;}else {echo '';} ?>" class="text-decoration-none text-dark">
              <div class="row py-2">
                <div class="col-12">
                  <div class="mx-1">
                    <!--Fotografia-->
                    <img src="<?php if (isset($fintro_mv_1) && $fintro_mv_1!="") { echo $ruta_noticias.$fintro_mv_1;}else{ echo $ruta_no_image;} ?>" alt="Intro Publicacion" style="object-fit:cover;">
                  </div>
                </div>
                <div class="col-12">
                  <div class="mx-2 my-2">
                    <!--Informacion-->
                    <h6><?php if (isset($titulo_mv_1)) { echo $titulo_mv_1;}?></h6>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-3 d-none d-md-block">
          <div class="related_box my-2 hover_box_info">
            <a href="noticia.php?name=<?php if (isset($titulo_mv_2)) {echo $titulo_mv_2; }else {echo '';} ?>&publicacion=<?php if (isset($id_mv_2)) {echo $id_mv_2;}else {echo '';} ?>" class="text-decoration-none text-dark">
              <div class="row py-2">
                <div class="col-12">
                  <div class="mx-1">
                    <!--Fotografia-->
                    <img src="<?php if (isset($fintro_mv_2) && $fintro_mv_2!="") { echo $ruta_noticias.$fintro_mv_2;}else{ echo $ruta_no_image;} ?>" alt="Intro Publicacion" style="object-fit:cover;">
                  </div>
                </div>
                <div class="col-12">
                  <div class="mx-2 my-2">
                    <!--Informacion-->
                    <h6><?php if (isset($titulo_mv_2)) { echo $titulo_mv_2;}?></h6>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-3 d-none d-md-block">
          <div class="related_box my-2 hover_box_info">
            <a href="noticia.php?name=<?php if (isset($titulo_mv_3)) {echo $titulo_mv_3; }else {echo '';} ?>&publicacion=<?php if (isset($id_mv_3)) {echo $id_mv_3;}else {echo '';} ?>" class="text-decoration-none text-dark">
              <div class="row py-2">
                <div class="col-12">
                  <div class="mx-1">
                    <!--Fotografia-->
                    <img src="<?php if (isset($fintro_mv_3) && $fintro_mv_3!="") { echo $ruta_noticias.$fintro_mv_3;}else{ echo $ruta_no_image;} ?>" alt="Intro Publicacion" style="object-fit:cover;">
                  </div>
                </div>
                <div class="col-12">
                  <div class="mx-2 my-2">
                    <!--Informacion-->
                    <h6><?php if (isset($titulo_mv_3)) { echo $titulo_mv_3;}?></h6>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- fin del col -->
      </div>
    </div>
    <br>
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

    <!--javascript-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
      $(window).on('load', function () {
          setTimeout(function () {
        $(".loader-page").css({visibility:"hidden",opacity:"0"})
      }, 1000);

      });
    </script>
    <script language=javascript>
    function nuevaventana (URL){
       window.open(URL,"ventana1","width=600,height=300,scrollbars=NO")
    }
    </script>
    <!-- LightWidget WIDGET --><script src="js/lightwidget.js"></script>
    <script async defer crossorigin='anonymous' src='https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.3'></script>
    <script src='js/jquery-3.4.1.min.js'></script>
    <script src='js/popper.min.js'  crossorigin='anonymous'></script>
    <script src='js/bootstrap.min.js'  crossorigin='anonymous'></script>
    <script type="text/javascript">
      var ano = (new Date).getFullYear();
      $(document).ready(function() {
      $(".ano_actual").text( ano );
      });
    </script>
  </body>
</html>
