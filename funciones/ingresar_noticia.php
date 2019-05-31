<!DOCTYPE HTML>
<?php
  error_reporting(E_ERROR | E_WARNING | E_PARSE);
  //Forzamos el inicio con un usuario administrativo y pasamos los datos para almacenar al usuario que hizo la noticia
  session_start();
  require ("session_usuario.php");

  if (isset($_POST["btn_preview_noticia"])) {
    $titulo_noticia = $_POST["titular_noticia"];
    $intro_noticia = $_POST["introduccion_noticia"];
    $cuerpo_noticia = $_POST["cuerpo_noticia"];
    $fecha_publicacion = date('d-m-Y');

    if ($titulo_noticia=="" || $intro_noticia=="" || $cuerpo_noticia=="" || $fecha_publicacion=="") {
      echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0008'); window.history.back();</script>";
    }
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
                          <p class='font-weight-bold'><span> <img src='../images/iconos/marcador-email.png' alt='' width='18' height='18'></span> directorbellavista@machali.cl</p>
                        </div>
                      </li>
                      <li class='nav-item'>
                        <div>
                          <p class='font-weight-bold'><span><img src='../images/iconos/marcador-teléfono.png' alt='' width='18' height='18'></span> (9) 93492280</p>
                        </div>
                      </li>
                      <li class='nav-item'>
                        <div>
                          <p class='font-weight-bold'><span><img src='../images/iconos/marcador-localidad.png' alt='' width='18' height='18'></span> Calle John Kennedy # 178, Coya – Machalí</p>
                        </div>
                      </li>
                    </ul>
                </div>
                <div class='cotainer-fluid' style='background-color:#e04155;'>
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
                            <a class='nav-link navbar_titulo' href='#'>INICIO <span class='sr-only'>INICIO</span></a>
                          </li>
                          <li class='nav-item dropdown navheader'>
                            <a class='nav-link dropdown-toggle navbar_titulo' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' href='#'>INSTITUCIÓN</a>
                            <div class='dropdown-menu background_navbar' aria-labelledby='navbarDropdown'>
                                <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='#'>Centro Educativo</a>
                                <a class='dropdown-item text-uppercase text-light background_navbar font-weight-bold' href='#'>Admisión</a>
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
                          <h4 class='text-uppercase py-2'>$titulo_noticia</h4>
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
                              <div style='display: inline-block;'><span class='shared_label text-muted'>Comparte esta publicación</span></div>
                              <div class='' style='display: inline-block;'><div class='fb-share-button' data-href='https://developers.facebook.com/docs/plugins/' data-layout='button' data-size='small'><a target='_blank' href='https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse' class='fb-xfbml-parse-ignore'>Compartir</a></div></div>
                              <div class='whatsapp' style='display: inline-block;'><a href='whatsapp://send?text=URL' data-action='share/whatsapp/share'><img src='../images/temporales/image.jpg' alt='' height='30px;' width='80px;' style='border-radius:3px;'></a></div>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class='col-lg-3 col-md-12 col-sm-12 col-xs-12 d-none d-lg-block border_aside'>
                    </div>
                </div>
              </div>";
        echo "<footer class='container-fluid py-3 bg-dark noseleccionable'>
                <div class='row'>
                  <div class='col-12 col-md'>
                    <div class='container-fluid'>
                      <div class='row'>
                        <div class='col-lg-12 col-sm-12 logotipo'>
                          <div class='mx-auto' style='width:90px;'>
                            <img src='../images/utilidad/insignia.png' width='76' height='80' class='d-block mb-12 noseleccionable' role='img' focusable='false' alt=''>
                          </div>
                        </div>
                        <div class='col-lg-12 col-sm-12 text-center'>
                            <p class='text-muted font-weight-bold' style='padding-top:5px;'>Colegio Bellavista</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class='col-6  col-md'>
                    <h5>Contacto</h5>
                    <ul class='list-unstyled text-small'>
                      <li><p class='text-muted'><span> <img src='../images/iconos/marcador-email.png' alt='' width='18' height='18'></span> directorbellavista@machali.cl</p></li>
                      <li><p class='text-muted'><span><img src='../images/iconos/marcador-teléfono.png' alt='' width='18' height='18'></span> (9) 93492280</p></li>
                      <li><p class='text-muted'><span><img src='../images/iconos/marcador-localidad.png' alt='' width='18' height='18'></span> Calle John Kennedy # 178, Coya – Machalí</p></li>
                    </ul>
                  </div>
                  <div class='col-6  col-md'>
                    <h5>Institución</h5>
                    <ul class='list-unstyled text-small'>
                      <li><a class='text-muted' href='#'>Resource</a></li>
                      <li><a class='text-muted' href='#'>Resource name</a></li>
                      <li><a class='text-muted' href='#'>Another resource</a></li>
                      <li><a class='text-muted' href='#'>Final resource</a></li>
                      <li><a class='text-muted' href='ingreso.html'>Ingreso Administración</a></li>
                    </ul>
                  </div>
                  <div class='col-6  col-md'>
                    <h5>Resources</h5>
                    <ul class='list-unstyled text-small'>
                      <li><a class='text-muted' href='#'>Business</a></li>
                      <li><a class='text-muted' href='#'>Education</a></li>
                      <li><a class='text-muted' href='#'>Government</a></li>
                      <li><a class='text-muted' href='#'>Gaming</a></li>
                    </ul>
                  </div>
                  <div class='col-6  col-md'>
                    <h5>Redes Sociales</h5>
                    <ul class='list-unstyled text-small'>
                      <li><a class='text-muted' href='#'>Facebook</a></li>
                      <li><a class='text-muted' href='#'>Youtube</a></li>
                      <li><a class='text-muted' href='#'>Twitter</a></li>
                    </ul>
                  </div>
                </div>
              </footer>";
          echo "<section class='button_save_editor'>
                  <div class='div_button_editor'>
                    <div class='label_button_save_editor py-1 noseleccionable'>
                      <button class='btn btn-warning' style='color:white !important;' type='button' onclick='goBack()'>Volver al editor</button>
                    </div>
                  </div>
                </section>";
          echo "<section class='button_save_borrador'>
                  <div class='div_button_borrador'>
                    <div class='label_button_save_borrador py-1 noseleccionable'>
                      <form method='post' action='guardar_borrador_noticia.php'>
                        <input type='hidden' name='borrador_usuario_autor' value='$us'>
                        <input type='hidden' name='borrador_noticia_titulo' value='$titulo_noticia'>
                        <input type='hidden' name='borrador_noticia_intro' value='$intro_noticia'>
                        <input type='hidden' name='borrador_noticia_cuerpo' value='$cuerpo_noticia'>
                        <button class='btn btn-primary' name='btn_save_borrador' type='submit' value='Guardar en borrador'><span>Guardar en borrador</span></button>
                      </form>
                    </div>
                  </div>
                </section>";
          echo "<section class='button_save'>
                  <div class='div_button'>
                    <div class='label_button_save py-1 noseleccionable'>
                      <form method='post' action='ingresar_noticia.php'>
                        <input type='hidden' name='titular_noticia' value='$titulo_noticia'>
                        <input type='hidden' name='introduccion_noticia' value='$intro_noticia'>
                        <input type='hidden' name='cuerpo_noticia' value='$cuerpo_noticia'>
                        <button class='btn btn-success' name='btn_nueva_noticia' type='submit'><span>Subir Noticia</span></button>
                      </form>
                    </div>
                  </div>
                </section>";

          echo "
            <div id='fb-root'></div>
            <script async defer crossorigin='anonymous' src='https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.3'></script>
            <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
            <script src='../js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
            <script>
              function goBack() {
                window.history.back();
              }
            </script>
            </body>
          </html>";

  }else {
    if (isset($_POST["btn_nueva_noticia"])) {
      //Almacena la noticia directamente
      $titulo_noticia = $_POST["titular_noticia"];
      $intro_noticia = $_POST["introduccion_noticia"];
      $cuerpo_noticia = $_POST["cuerpo_noticia"];
      $fecha_publicacion = date('Y-m-d');
      $usuario_autor = $us;

      if ($titulo_noticia=="" || $intro_noticia=="" || $cuerpo_noticia=="" || $fecha_publicacion=="" || $usuario_autor=="") {
        echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0008');</script>";
      }else {
        require ("dbcall.php");
        if (!$cnn) {
            die("Conexion Fallida: " . mysqli_connect_error());
        }else {
          $sql = mysqli_prepare($cnn,"INSERT INTO noticias (id_noticia, usuario_autor, titulo_noticia, fecha_noticia, intro_noticia, cuerpo_noticia) VALUES (NULL,?,?,?,?,?)");
          mysqli_stmt_bind_param($sql,"sssss",utf8_decode($usuario_autor),utf8_decode($titulo_noticia),$fecha_publicacion,utf8_decode($intro_noticia),utf8_decode($cuerpo_noticia));
          if (mysqli_stmt_execute($sql) == TRUE) {
              echo "<script> window.alert('Noticia subida con exito');window.location.href='../paginas_administracion/menu_principal.php';</script>";
          }else {
              echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0008');window.location.href='../paginas_administracion/menu_principal.php';</script>";
          }
        }

      }

    }else {
      echo "<script>window.location= '../ingreso.html'</script>";
    }

  }
//  echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0008');window.location.href='../paginas_administracion/menu_principal.php';</script>";
 ?>
