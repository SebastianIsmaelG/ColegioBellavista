<!DOCTYPE html>
<?php
  session_start();
  require ("../funciones/session_usuario.php");
 ?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="../images/utilidad/favicon.ico" />
    <title>Menu Administracion CB</title>
  </head>
  <body>
    <section>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary noseleccionable">
        <a class="navbar-brand font-weight-bold text-uppercase" href="menu_principal.php">Menu Administración</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <div class="navbar-brand detail_user">
                <img src="../images/iconos/admin-color.png" width="25" height="25" class="d-inline-block align-top" alt="">
                  <span class="text-break titulo_user"><small><?php echo "<span class='font-weight-bolder'>Usuario: </span>$nombres_session $apellidos_session"; ?></small></span>
                <a title="Cerrar Sesión" href="../funciones/logout.php"><img src="../images/iconos/logout-color.png" width="30" height="30" class="d-inline-block align-top" alt=""></a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar secciones.." aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </div>
      </nav>
    </section>
    <br>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div style="padding:10px;">
              <h4><span class="title_red">SECCIÓN</span> ACTIVIDADES</h4>
              <hr>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="container_buttons">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                  <a href="nueva_actividad.php"><img src="../images/utilidad/feed-96.png" class="img-responsive hover_image" height="100" width="100"></a>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                  <a href="nueva_actividad.php" class="nav-link"> Nueva Actividad</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="container_buttons">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                  <a href="administrar_actividad.php"><img src="../images/utilidad/saved-96.png" class="img-responsive hover_image" height="100" width="100"></a>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                  <a href="administrar_actividad.php" class="nav-link"> Administrar Actividades </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
      </div>
      <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div style="padding:10px;">
                <h4><span class="title_red">SECCIÓN</span> NOTICIAS</h4>
                <hr>
              </div>
            </div>
          </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <div class="container_buttons">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <a href="nueva_noticia.php"><img src="../images/utilidad/news-480.png" class="img-responsive hover_image" height="100" width="100"></a>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <a href="nueva_noticia.php" class="nav-link"> Nueva Noticia</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <div class="container_buttons">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <a href="administrar_noticia.php"><img src="../images/utilidad/saved-96.png" class="img-responsive hover_image" height="100" width="100"></a>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <a href="administrar_noticia.php" class="nav-link"> Administrar Noticias</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <div class="container_buttons">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <a href="administrar_borradores.php"><img src="../images/utilidad/borrar-64.png" class="img-responsive hover_image" height="100" width="100"></a>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <a href="administrar_borradores.php" class="nav-link"> Administrar Borradores</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <br>
      </div>
      <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div style="padding:10px;">
                <h4><span class="title_red">SECCIÓN</span> GALERIAS</h4>
                <hr>
              </div>
            </div>
          </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <div class="container_buttons">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <a href="nuevo_album.php"><img src="../images/utilidad/gallery-80.png" class="img-responsive hover_image" height="100" width="100"></a>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <a href="nuevo_album.php" class="nav-link"> Nuevo Álbum</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <div class="container_buttons">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <a href="administrar_album.php"><img src="../images/utilidad/pictures-folderb-80.png" class="img-responsive hover_image" height="100" width="100"></a>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <a href="administrar_album.php" class="nav-link"> Administrar Álbumes </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <br>
      </div>
      <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div style="padding:10px;">
                <h4><span class="title_red">SECCIÓN</span> EQUIPO DOCENTE</h4>
                <hr>
              </div>
            </div>
          </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <div class="container_buttons">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <a href="#"><img src="../images/utilidad/user-80.png" class="img-responsive hover_image" height="100" width="100"></a>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <a href="#" class="nav-link"> Administrar Datos Integrantes</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <br>
      </div>
      <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div style="padding:10px;">
                <h4><span class="title_red">SECCIÓN</span> SLIDER PRINCIPAL</h4>
                <hr>
              </div>
            </div>
          </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <div class="container_buttons">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <a href="administrar_slider.php"><img src="../images/utilidad/slider-128.png" class="img-responsive hover_image" height="100" width="100"></a>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <a href="administrar_slider.php" class="nav-link"> Administrar Imagenes Slider</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <br>
      </div>
      <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div style="padding:10px;">
                <h4><span class="title_red">SECCIÓN</span> CONTACTO</h4>
                <hr>
              </div>
            </div>
          </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <div class="container_buttons">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <a href="administrar_contacto.php"><img src="../images/utilidad/contacts-80.png" class="img-responsive hover_image" height="100" width="100"></a>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <a href="administrar_contacto.php" class="nav-link"> Administrar Datos Contacto</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <br>
      </div>
      <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div style="padding:10px;">
                <h4><span class="title_red">SECCIÓN</span> CENTRO EDUCATIVO</h4>
                <hr>
              </div>
            </div>
          </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <div class="container_buttons">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <a href="#"><img src="../images/utilidad/school-80.png" class="img-responsive hover_image" height="100" width="100"></a>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <a href="#" class="nav-link"> Administrar Datos Centro Educativo</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <br>
      </div>
    </section>

    <!--SCRIPTS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
