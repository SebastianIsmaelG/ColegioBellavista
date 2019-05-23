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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=7shzku874p8s9dkpqj1ywrozttfkzt8efthe0njwz1f84jwp"></script>
    <script>
      tinymce.init({
        selector: '#textarea_cuerpo_noticia'
      });
    </script>

    <title>Nueva Noticia CB</title>
  </head>
  <body>
    <section>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary noseleccionable">
        <a class="navbar-brand font-weight-bold text-uppercase" href="menu_principal.php">Nueva Noticia</a>
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
    <section>
      <div class="container py-4">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="menu_principal.php">Menu Principal</a></li>
            <li class="breadcrumb-item"><a href="menu_principal.php?label=noticias">Seccion Noticias</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nueva Noticia</li>
          </ol>
        </nav>
      </div>
    </section>
    <section>
      <div class="container py-2">
        <div class="row">
          <div class="col-lg-12">
            <div class="py-2">
              <h5 class="title_red">NUEVA NOTICIA</h5>
              <hr>
            </div>
          </div>
        </div>
      </div>
      <div class="container py-2">
        <div class="row">
          <div class="col-lg-12">
            <div class="">
              <p class="font-weight-bold"> * Las noticias ingresadas se mostraran en orden descendente desde la que posea la fecha mas actual </p>
            </div>
          </div>
        </div>
        <div class="">
          <form action="../funciones/ingresar_noticia.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="control-label label_menu sr-only" for=""> Titulo de la noticia</label>
                  <input type="text" class="form-control" name="titular_noticia" placeholder="Titular de la noticia" required autofocus>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="control-label label_menu sr-only" for=""> Introducción de la noticia</label>
                  <textarea name="introduccion_noticia" class="form-control" rows="2" cols="80" maxlength="200" placeholder="Introducción de la noticia" required></textarea>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="control-label label_menu sr-only" for=""> Cuerpo de la noticia</label>
                  <textarea name="cuerpo_noticia" id="textarea_cuerpo_noticia" class="form-control" rows="20" cols="80"></textarea>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <label class="h5"> Imagenes anexas</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="py-2">
                        <div class="">
                          <input type="file" class="btn btn-info" name="imagen1" style="padding-left:5px;">
                        </div>
                      </div>
                      <div class="py-2">
                        <div class="">
                          <input type="file" class="btn btn-info" name="imagen2" style="padding-left:5px;">
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="py-2">
                        <div class="">
                          <input type="file" class="btn btn-info" name="imagen3" style="padding-left:5px;">
                        </div>
                      </div>
                      <div class="py-2">
                        <div class="">
                          <input type="file" class="btn btn-info" name="imagen4" style="padding-left:5px;">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 text-right">
                <input type="submit" class="btn btn-info" name="btn_preview_noticia" value="Vista Previa">
                <input type="submit" class="btn btn-success" name="btn_nueva_noticia" value="Subir Noticia">
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>


    <!--SCRIPTS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
