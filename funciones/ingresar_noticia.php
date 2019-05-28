<!DOCTYPE HTML>
<?php
  //Forzamos el inicio con un usuario administrativo y pasamos los datos para almacenar al usuario que hizo la noticia
  session_start();
  require ("session_usuario.php");

  if (isset($_POST["btn_preview_noticia"])) {
    $titulo_noticia = $_POST["titular_noticia"];
    $intro_noticia = $_POST["introduccion_noticia"];
    $cuerpo_noticia = $_POST["cuerpo_noticia"];
    $fecha_publicacion = date('d-m-Y');

    echo "<html>
            <head>
              <meta charset='utf-8'>
              <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
              <link rel='stylesheet' type='text/css' href='../css/style.css'>
              <link rel='stylesheet' href='../css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
              <link rel='shortcut icon' href='../images/utilidad/favicon.ico' />
              <title>Preview</title>
            </head>
            <body>
              <header>
                <div class='container-fluid d-block d-sm-none bg-dark'>
                    <ul class='nav justify-content-center bg-dark'>
                      <li class='nav-item'>
                        <div style='padding-right:6px;'>
                          <p class='font-weight-bold'><span> <img src='images/iconos/marcador-email.png' alt='' width='18' height='18'></span> directorbellavista@machali.cl</p>
                        </div>
                      </li>
                      <li class='nav-item'>
                        <div>
                          <p class='font-weight-bold'><span><img src='images/iconos/marcador-teléfono.png' alt='' width='18' height='18'></span> (9) 93492280</p>
                        </div>
                      </li>
                      <li class='nav-item'>
                        <div>
                          <p class='font-weight-bold'><span><img src='images/iconos/marcador-localidad.png' alt='' width='18' height='18'></span> Calle John Kennedy # 178, Coya – Machalí</p>
                        </div>
                      </li>
                    </ul>
                </div>
                <div class='cotainer-fluid'>
                  <div class='container'>
                    <center>
                      <div class='row'>
                        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                          <div class='py-2'>
                            <img src='../images/utilidad/insignia.png' width='76' height='80' alt=''>
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
                  <div class='container '>
                    <nav class='navbar navbar-expand-lg navbar-light bg-light noseleccionable'>
                      <a class='navbar-brand font-weight-bold text-uppercase d-lg-none' style='color:rgb(0, 0, 0,0.6)' href='index.html'>Menu Principal</a>
                      <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                        <span class='navbar-toggler-icon'></span>
                      </button>
                      <div class='collapse navbar-collapse' id='navbarNav'>
                        <ul class='navbar-nav mx-auto' style='width:100%;'>
                          <li class='nav-item navheader'>
                            <a class='nav-link navbar_titulo' href='index.html'>INICIO <span class='sr-only'>INICIO</span></a>
                          </li>
                          <li class='nav-item dropdown navheader'>
                            <a class='nav-link dropdown-toggle navbar_titulo' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' href='#'>INSTITUCIÓN</a>
                            <div class='dropdown-menu background_navbar' aria-labelledby='navbarDropdown'>
                                <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='#'>Centro Educativo</a>
                                <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='#'>Equipo Docente</a>
                                <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='#'>Infraestructura</a>
                                <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='#'>Noticias</a>
                                <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='#'>Actividades</a>
                                <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='#'>Galeria</a>
                            </div>
                          </li>
                          <li class='nav-item navheader'>
                            <a class='nav-link navbar_titulo' href='#'>HISTORIA</a>
                          </li>
                          <li class='nav-item navheader'>
                            <a class='nav-link navbar_titulo' href='#' tabindex='-1'>CONTACTO</a>
                          </li>
                        </ul>
                      </div>
                    </nav>
                  </div>
                </div>
              </header>
              <br>
              <div class='container'>
                <div class='row'>
                  <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <section>
                      <div class='breadcumb_noticia'>
                        <nav aria-label='breadcrumb'>
                          <ol class='breadcrumb'>
                            <li class='breadcrumb-item'><a href='#'>Institución</a></li>
                            <li class='breadcrumb-item'><a href='#'>Noticias</a></li>
                          </ol>
                        </nav>
                      </div>
                    </section>
                  </div>
                </div>
              </div>";
        echo "<div class='container bg-light'>
                <div class='row'>
                    <div class='col-lg-9 col-md-12 col-sm-12 col-xs-12'>
                      <div class='row'>
                        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                          <h4 class='text-uppercase'>$titulo_noticia</h4>
                          <hr>
                        </div>
                        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                          <div class='row'>
                            <div class='col-lg-6 col-md-6 col-sm-6 col-xs-6' style='width:70%;'>
                              <div class='container'>Escrito por $nombres_session $apellidos_session</div>
                            </div>
                            <div class='col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right' style='width:30%;'>
                              <div class='container'>$fecha_publicacion</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class='row'>
                          <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                            <div class='container py-3'>
                              $cuerpo_noticia
                            </div>
                            <div class='container py-2 text-right'>
                            <div class=''><div class='fb-share-button' data-href='https://developers.facebook.com/docs/plugins/' data-layout='button' data-size='small'><a target='_blank' href='https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse' class='fb-xfbml-parse-ignore'>Compartir</a></div></div>
                            <div class='whatsapp'><a href='whatsapp://send?text=URL' data-action='share/whatsapp/share'><img src='../images/temporales/image.jpg' alt='' height='30px;' width='80px;' style='border-radius:3px;'></a></div>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class='col-lg-3 col-md-12 col-sm-12 col-xs-12 d-none d-lg-block border_solid'>
                    </div>
                </div>
              </div>";

          echo "
            <div id='fb-root'></div>
            <script async defer crossorigin='anonymous' src='https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.3'></script>
            <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
            <script src='../js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
            </body>
          </html>";

  }else {
    if (isset($_POST["btn_nueva_noticia"])) {
      echo "new";
    }else {
      echo "<script>window.location= '../ingreso.html'</script>";
    }
  }
//  echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0008');window.location.href='../paginas_administracion/menu_principal.php';</script>";
 ?>
