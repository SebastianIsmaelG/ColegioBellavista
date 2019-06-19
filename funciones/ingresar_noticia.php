<!DOCTYPE HTML>
<?php
  error_reporting(E_ERROR | E_WARNING | E_PARSE);
  //Forzamos el inicio con un usuario administrativo y pasamos los datos para almacenar al usuario que hizo la noticia
  session_start();
  require ("session_usuario.php");

  //Ver Vista Previa
  if (isset($_POST["btn_preview_noticia"])) {
    //Cambio de zona horaria
    setlocale(LC_ALL, 'es_CL.UTF-8');

    $usuario_autor = $us;
    $titulo_noticia = $_POST["titular_noticia"];
    $intro_noticia = $_POST["introduccion_noticia"];
    $nombre_fotografia_intro = $_FILES['foto_intro_noticia']['name'];
    $tipo_fotografia_intro  = $_FILES['foto_intro_noticia']['type'];
    $tam_fotografia_intro   = $_FILES['foto_intro_noticia']['size'];
    $cuerpo_noticia = $_POST["cuerpo_noticia"];
    $fecha_publicacion = date('d-m-Y');
    $fecha_publicacion_convertida = strftime("%d de %B, %G", strtotime($fecha_publicacion));

    if ($titulo_noticia=="" || $intro_noticia=="" || $cuerpo_noticia=="" || $fecha_publicacion=="" || $nombre_fotografia_intro=="") {
      echo "<script> window.alert(' Ha ocurrrido un error al recuperar los datos, reintente. COD:0008');window.history.back();</script>";
    }else{
      echo "<html>
        <head>
          <meta charset='utf-8'>
          <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
          <meta name='theme-color' content='#E03C3B'>
          <link rel='stylesheet' type='text/css' href='../css/style.css'>
          <link rel='stylesheet' href='../css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
          <link rel='shortcut icon' href='../images/utilidad/favicon.ico' />
          <link href='https://fonts.googleapis.com/css?family=Open+Sans&display=swap' rel='stylesheet'>
          <title>$titulo_noticia</title>
          <script async defer crossorigin='anonymous' src='https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.3'></script>
        </head>
        <body style='background-color:#F8F9FA;'>
          <div id='fb-root'></div>
          <header style='background-color:#E03C3B;'>
              <div class='container-fluid d-block d-sm-none' style='background-color:#e6e6e6;'>
                  <ul class='nav justify-content-center' style='background-color:#e6e6e6;'>
                    <li class='nav-item'>
                      <div style='padding-right:6px;'>
                        <p class='font-weight-bold'><span> <img src='../images/iconos/marcador-email.png' alt='email' width='18' height='18'></span> directorbellavista@machali.cl</p>
                      </div>
                    </li>
                    <li class='nav-item'>
                      <div>
                        <p class='font-weight-bold'><span><img src='../images/iconos/marcador-teléfono.png' alt='fono' width='18' height='18'></span> (9) 93492280</p>
                      </div>
                    </li>
                    <li class='nav-item'>
                      <div>
                        <p class='font-weight-bold'><span><img src='../images/iconos/marcador-localidad.png' alt='address' width='18' height='18'></span> Calle John Kennedy # 178, Coya – Machalí</p>
                      </div>
                    </li>
                  </ul>
              </div>
              <div class='container-fluid'>
                <center>
                  <div class='row'>
                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                      <div class='py-2'>
                        <a href='#'><img src='../images/utilidad/insignia.png' width='76' height='80' alt=''></a>
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
                        <a class='nav-link navbar_titulo line_hover' href='#'>INICIO <span class='sr-only'>INICIO</span></a>
                      </li>
                      <li class='nav-item dropdown navheader'>
                        <a class='nav-link dropdown-toggle navbar_titulo line_hover' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' href='#'>INSTITUCIÓN</a>
                        <div class='dropdown-menu background_navbar' aria-labelledby='navbarDropdown'>
                            <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='#'>Centro Educativo</a>
                            <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='#'>Equipo Docente</a>
                            <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='#'>Noticias</a>
                            <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='#'>Actividades</a>
                            <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='#'>Galeria</a>
                            <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='#'>Historia</a>
                        </div>
                      </li>
                      <li class='nav-item navheader'>
                        <a class='nav-link navbar_titulo line_hover' href='#'>ADMISIÓN <span class='ano_actual'></span></a>
                      </li>
                      <li class='nav-item navheader'>
                        <a class='nav-link navbar_titulo line_hover' href='#' tabindex='-1'>CONTACTO</a>
                      </li>
                    </ul>
                  </div>
                </nav>
              </div>
          </header>
          <br>
          <div class='container bg-light shadow-border'>
            <section>
              <br>
              <div class='container bg-light'>
                <div class='container py-3'>
                  <nav aria-label='breadcrumb'>
                    <ol class='breadcrumb'>
                      <li class='breadcrumb-item'><a href='#'><small>INICIO</small></a></li>
                      <li class='breadcrumb-item'><a href='#'>INSTITUCIÓN</a></li>
                      <li class='breadcrumb-item active' aria-current='page'>NOTICIAS</li>
                    </ol>
                  </nav>
                </div>
              </div>
            </section>
            <section>
              <div class='container bg-light'>
                    <div class='row'>
                        <div class='col-lg-9 col-md-12 col-sm-12 col-xs-12 bg-white'>
                          <div class='row'>
                            <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                              <h4 class='text-uppercase py-3'>$titulo_noticia</h4>
                              <hr>
                            </div>
                            <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                              <div class='row'>
                                <div class='col-lg-6 col-md-6 col-sm-6 col-xs-6' style='width:70%;'>
                                  <div class='container'><span>Escrito por $us </span></div>
                                </div>
                                <div class='col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right' style='width:30%;'>
                                  <div class='container'> $fecha_publicacion_convertida</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class='row'>
                              <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                                <div class='container py-3'>
                                  <div class='font_open text-justify' style='text-indent: 40px;'>
                                    $cuerpo_noticia
                                  </div>
                                </div>
                                <div class='container py-2 text-right'>
                                  <div class='social-share'>
                                    <span>Compartir &nbsp;</span>
                                    <a href='#' target='_blank' class='text-decoration-none text-light'>
                                    <img src='https://simplesharebuttons.com/images/somacro/facebook.png' alt='Facebook'  height='25px' width='25px' class='icon_zoom'/>
                                    </a>
                                    <a href='#' target='_blank' class='text-decoration-none text-light'>
                                    <img src='https://simplesharebuttons.com/images/somacro/twitter.png' alt='Twitter' height='25px' width='25px' class='icon_zoom' />
                                    </a>
                                    <a href='#' target='_blank' class='text-decoration-none text-light' >
                                    <img src='../images/iconos/whatsapp-48.png' alt='whatsapp' height='35px' width='35px' class='icon_zoom' />
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                                <div class='container display_center py-2' style='background-color: #eee;border-left: 7px solid #cecece;'>
                                  <div class='fb-comments' data-href='http://localhost:8090/Proyectos/ColegioBellavista/noticia.php' data-width='' data-numposts='8'></div>
                                </div>
                              </div>
                          </div>
                        </div>
                        <div class='col-lg-3 col-md-12 col-sm-12 col-xs-12 d-none d-lg-block'>
                          <div class='my-2 bg-white'>
                            <div class='row'>
                              <div class='col-lg-12'>
                                <div>
                                  <a class='text-decoration-none' href='#'><img src='../images/utilidad/banner_instagram.jpg' alt=''></a>
                                </div>
                              </div>
                              <div class='col-lg-12 d-none d-lg-block'>
                                <iframe src='//lightwidget.com/widgets/848dc7aa797d583c98a4acd84b239dff.html' scrolling='no' allowtransparency='true' class='lightwidget-widget' style='width:100%;border:0;overflow:hidden;'></iframe>
                              </div>
                              <!-- divs sm
                              <div class='col-lg-12'>
                                <div class='col-lg-12'>
                                  <a class='text-decoration-none' href='#'><img src='../images/utilidad/banner_instagram.jpg' alt=''></a>
                                </div>
                              </div>
                              <div class='col-lg-12 d-lg-none d-xl-none'>
                                <iframe src='//lightwidget.com/widgets/d6adeb8094e05563affc956162c833b3.html' scrolling='no' allowtransparency='true' class='lightwidget-widget' style='width:100%;border:0;overflow:hidden;'></iframe>
                              </div>-->
                              <div class='col-lg-12'>
                                <div>
                                  <a class='text-decoration-none' href='#'><img src='../images/utilidad/banner_facebook.jpg' alt=''></a>
                                </div>
                              </div>
                              <div class='col-lg-12 d-none d-lg-block'>
                                <iframe src='https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FColegio-Bellavista-1328489143963284%2F&tabs=timeline&width=250&height=450&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId' width='250' height='450' style='border:none;overflow:hidden' scrolling='no' frameborder='0' allowTransparency='true' allow='encrypted-media'></iframe>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
            </section>
          </div>
          <footer class='container-fluid py-3 bg-dark noseleccionable'>
            <div class='row'>
              <div class='col-12 col-md'>
                <div class='container-fluid'>
                  <div class='row'>
                    <div class='col-lg-12 col-sm-12 logotipo'>
                      <div class='mx-auto' style='width:90px;'>
                        <img src='../images/utilidad/insignia.png' width='76' height='80' class='d-block mb-12 noseleccionable' role='img' focusable='false' alt=''>
                      </div>
                    </div>
                    <div class='col-lg-12 col-sm-12 text-center '>
                        <p class='text-muted font-weight-bold' style='padding-top:5px;'>Colegio Bellavista</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class='col-12  col-md'>
                <h5>Contacto</h5>
                <ul class='list-unstyled text-small'>
                  <li><p class='text-muted'><span><img src='../images/iconos/marcador-email.png' alt='' width='18' height='16'></span>&nbsp;directorbellavista@machali.cl</p></li>
                  <li><p class='text-muted'><span><img src='../images/iconos/marcador-teléfono.png' alt='' width='18' height='18'></span>&nbsp;(9) 93492280</p></li>
                  <li><p class='text-muted'><span><img src='../images/iconos/marcador-localidad.png' alt='' width='18' height='18'></span>&nbsp;Calle John Kennedy # 178, Coya – Machalí</p></li>
                </ul>
              </div>
              <div class='col-6  col-md'>
                <h5>Institución</h5>
                <ul class='list-unstyled text-small'>
                  <li><a class='text-muted' href='#'>Centro Educativo</a></li>
                  <li><a class='text-muted' href='#'>Admisión <span class='ano_actual'></span></a></li>
                  <li><a class='text-muted' href='#'>Equipo Docente</a></li>
                  <li><a class='text-muted' href='#'>Historia</a></li>
                  <li><a class='text-muted' href='#'>Contacto</a></li>
                </ul>
              </div>
              <div class='col-6  col-md'>
                <h5>Mas Contenidos</h5>
                <ul class='list-unstyled text-small'>
                  <li><a class='text-muted' href='#'>Noticias</a></li>
                  <li><a class='text-muted' href='#'>Actividades</a></li>
                  <li><a class='text-muted' href='#'>Galeria</a></li>
                  <li><a class='text-muted' href='#'>Ingreso Administración</a></li>
                </ul>
              </div>
              <div class='col-12  col-md'>
                <h5>Redes Sociales</h5>
                <div style='display: inline-block;padding-right:2px;'>
                  <a href='#' target='_blank' class='text-decoration-none text-light'>
                  <img src='https://simplesharebuttons.com/images/somacro/facebook.png' alt='Facebook'  height='25px' width='25px' class='icon_zoom'/>
                  </a>
                </div>
                <div style='display: inline-block;padding-right:2px;'>
                  <a href='#' target='_blank' class='text-decoration-none text-light'>
                  <img src='https://simplesharebuttons.com/images/somacro/twitter.png' alt='Twitter' height='25px' width='25px' class='icon_zoom' />
                  </a>
                </div>
                <div style='display: inline-block;padding-right:2px;'>
                  <a href='#' target='_blank' class='text-decoration-none text-light' >
                  <img src='../images/iconos/youtube-play-48.png' alt='Youtube' height='32px' width='32px' class='icon_zoom' />
                  </a>
                </div>
                <div style='display: inline-block;padding-right:2px;'>
                  <a href='#' target='_blank' class='text-decoration-none text-light' >
                  <img src='../images/iconos/icons8-instagram-48.png' alt='Instagram' height='28px' width='28px' class='icon_zoom' />
                  </a>
                </div>
              </div>
            </div>
          </footer>

          <!--javascript-->
          <script language=javascript>
          function nuevaventana (URL){
             window.open(URL,'ventana1','width=600,height=300,scrollbars=NO')
          }
          </script>
          <!-- LightWidget WIDGET --><script src='https://cdn.lightwidget.com/widgets/lightwidget.js'></script>
          <script async defer crossorigin='anonymous' src='https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.3'></script>
          <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
          <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
          <script src='../js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
          <script>
            function goBack() {
              window.history.back();
            }
          </script>
          <script type='text/javascript'>
            var ano = (new Date).getFullYear();
            $(document).ready(function() {
            $('.ano_actu'email'').text( ano );
            });
          </script>
        </body>
      </html>";
    }

  }

  //Ingresar Publicación
  if (isset($_POST["btn_nueva_noticia"])) {
    //Almacena la noticia directamente
    $titulo_noticia = $_POST["titular_noticia"];
    $intro_noticia = $_POST["introduccion_noticia"];
    $nombre_fotografia_intro = $_FILES['foto_intro_noticia']['name'];
    $tipo_fotografia_intro  = $_FILES['foto_intro_noticia']['type'];
    $tam_fotografia_intro   = $_FILES['foto_intro_noticia']['size'];
    $cuerpo_noticia = $_POST["cuerpo_noticia"];
    $fecha_publicacion = date('Y-m-d');
    $usuario_autor = $us;

    if ($titulo_noticia=="" || $intro_noticia=="" || $cuerpo_noticia=="" || $fecha_publicacion=="" || $usuario_autor=="" || $nombre_fotografia_intro=="") {
      echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0008');</script>";
    }else {
      if ($tipo_fotografia_intro=="image/jpeg" ||$tipo_fotografia_intro=="image/png" ||$tipo_fotografia_intro=="image/gif" ||$tipo_fotografia_intro=="image/jpg" ) {
        if ($tam_fotografia_intro<=3000000) {
          //Comienza el guardado
            require ("dbcall.php");
            if (!$cnn) {
                die("Conexion Fallida: " . mysqli_connect_error());
            }else {

              try {
                  $carpeta = $_SERVER['DOCUMENT_ROOT'] . '/Proyectos/ColegioBellavista/images/noticias/images/';
                  //mover imagen a directorio temporal
                  move_uploaded_file($_FILES['foto_intro_noticia']['tmp_name'],$carpeta.$nombre_fotografia_intro);

                  //Constructor para obtener un nombre unico
                  //Renombramos el archivo subido
                  $codigo_fecha = date("YmdHis");
                  $no_aleatorio = rand(100,999);
                  $codigojunto = $codigo_fecha.$no_aleatorio; //17 digitos aleatoreos

                  list($nombre,$ext)= explode(".",$nombre_fotografia_intro);
                  $nombre_nuevo = "$codigojunto"."."."$ext" ;
                  //renombra
                  rename("../images/noticias/images/$nombre_fotografia_intro","../images/noticias/images/$nombre_nuevo");

                  $sql = mysqli_prepare($cnn,"INSERT INTO noticias (id_noticia, usuario_autor, titulo_noticia, fecha_noticia, intro_noticia, foto_intro_noticia, cuerpo_noticia) VALUES (NULL,?,?,?,?,?,?)");
                  mysqli_stmt_bind_param($sql,"ssssss",utf8_decode($usuario_autor),utf8_decode($titulo_noticia),$fecha_publicacion,utf8_decode($intro_noticia),utf8_decode($nombre_nuevo),utf8_decode($cuerpo_noticia));
                  if (mysqli_stmt_execute($sql) == TRUE) {
                      echo "<script> window.alert('Noticia subida con exito');window.location.href='../paginas_administracion/menu_principal.php';</script>";
                  }else {
                    echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0008');window.location.href='../paginas_administracion/menu_principal.php';</script>";
                  }
              } catch (\Exception $e) {
                  echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0008');</script>";
              }

            }
        }else {
          echo "<script> window.alert('La imagen ingresada no cumple con los requerimientos: Excede el tamaño permitido (3mb)'); window.history.back();</script>";
        }
      }else {
        echo "<script> window.alert('La imagen ingresada no cumple con los requerimientos: Imagen File (JPEG,PNG,GIF,JPG)'); window.history.back();</script>";
      }

    }

  }

  //Guardar Borrador
 if (isset($_POST["btn_guardar_borrador"])) {
   try {

     $titulo_noticia = $_POST["titular_noticia"];
     $intro_noticia = $_POST["introduccion_noticia"];
     $nombre_fotografia_intro = $_FILES['foto_intro_noticia']['name'];
     $tipo_fotografia_intro  = $_FILES['foto_intro_noticia']['type'];
     $tam_fotografia_intro   = $_FILES['foto_intro_noticia']['size'];
     $cuerpo_noticia = $_POST["cuerpo_noticia"];
     $fecha_publicacion = date('Y-m-d');
     $usuario_autor = $us;

     if ($titulo_noticia=="" || $intro_noticia=="" || $cuerpo_noticia=="" || $fecha_publicacion=="" || $usuario_autor=="" || $nombre_fotografia_intro=="") {
       echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0008');</script>";
     }else {
       if ($tipo_fotografia_intro=="image/jpeg" ||$tipo_fotografia_intro=="image/png" ||$tipo_fotografia_intro=="image/gif" ||$tipo_fotografia_intro=="image/jpg" ) {
         if ($tam_fotografia_intro<=3000000) {
           //Comienza el guardado
             require ("dbcall.php");
             if (!$cnn) {
                 die("Conexion Fallida: " . mysqli_connect_error());
             }else {

               try {
                   $carpeta = $_SERVER['DOCUMENT_ROOT'] . '/Proyectos/ColegioBellavista/images/noticias/images/';
                   //mover imagen a directorio temporal
                   move_uploaded_file($_FILES['foto_intro_noticia']['tmp_name'],$carpeta.$nombre_fotografia_intro);

                   //Constructor para obtener un nombre unico
                   //Renombramos el archivo subido
                   $codigo_fecha = date("YmdHis");
                   $no_aleatorio = rand(100,999);
                   $codigojunto = $codigo_fecha.$no_aleatorio; //17 digitos aleatoreos

                   list($nombre,$ext)= explode(".",$nombre_fotografia_intro);
                   $nombre_nuevo = "$codigojunto"."."."$ext" ;
                   //renombra
                   rename("../images/noticias/images/$nombre_fotografia_intro","../images/noticias/images/$nombre_nuevo");

                   $sql = mysqli_prepare($cnn,"INSERT INTO borradores (id_noticia, usuario_autor, fecha_noticia, titulo_noticia, intro_noticia, foto_intro_noticia, cuerpo_noticia) VALUES (NULL,?,?,?,?,?,?)");
                   mysqli_stmt_bind_param($sql,"ssssss",utf8_decode($usuario_autor),$fecha_publicacion,utf8_decode($titulo_noticia),utf8_decode($intro_noticia),utf8_decode($nombre_nuevo),utf8_decode($cuerpo_noticia));
                   if (mysqli_stmt_execute($sql) == TRUE) {
                       echo "<script> window.alert('Noticia subida con exito');window.location.href='../paginas_administracion/menu_principal.php';</script>";
                   }else {
                     echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0008');window.location.href='../paginas_administracion/menu_principal.php';</script>";
                   }
               } catch (\Exception $e) {
                   echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0008');</script>";

               }

             }
         }else {
           echo "<script> window.alert('La imagen ingresada no cumple con los requerimientos: Excede el tamaño permitido (3mb)'); window.history.back();</script>";
         }
       }else {
         echo "<script> window.alert('La imagen ingresada no cumple con los requerimientos: Imagen File (JPEG,PNG,GIF,JPG)'); window.history.back();</script>";
       }

     }

   } catch (\Exception $e) {
     echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0008');window.location.href='../paginas_administracion/menu_principal.php';</script>";
   }

 }



//  echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0008');window.location.href='../paginas_administracion/menu_principal.php';</script>";
 ?>
