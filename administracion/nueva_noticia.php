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
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../ckeditor/ckeditor.js"></script>
    <title>Nueva Noticia CB</title>
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
          <div class="buscador" id="bs1"></div>
          <button class="btn btn-success my-2 my-sm-0" onclick="return validar();" type="button">Buscar</button>
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
                  <input type="text" class="form-control" name="titular_noticia" id="titulo_noticia" placeholder="Titular de la noticia" required aria-describedby="titulo_help">
                  <small id="titulo_help" class="form-text text-muted">
                    Maximo 200 caracteres
                  </small>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="control-label label_menu sr-only" for="introduccion_noticia"> Introducción de la noticia</label>
                  <textarea name="introduccion_noticia" class="form-control" rows="2" cols="80" maxlength="200" placeholder="Introducción de la noticia" required aria-describedby="intro_help"></textarea>
                  <small id="intro_help" class="form-text text-muted">
                    Maximo 200 caracteres, el texto ingresado se muestra en la vista previa de la publicación.
                  </small>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <div class="custom-file">
                     <input type="file" class="custom-file-input" name="foto_intro_noticia" id="customFile" required>
                     <label class="custom-file-label" for="customFile">Buscar archivo...</label>
                  </div>
                  <small id="intro_help" class="form-text text-muted">
                    Tamaño maximo 3mb. La imagen ingresada se mostrara en la introduccion de la seccion noticias, es importante que represente a la publicación.
                  </small>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="control-label label_menu sr-only" for="cuerpo_noticia"> Cuerpo de la noticia</label>
                  <textarea name="cuerpo_noticia" id="cuerpo_noticia" rows="30" cols="80"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 text-right">
                <input type="submit" class="btn btn-info" name="btn_preview_noticia" value="Vista Previa">
                <input type="submit" class="btn btn-danger" name="btn_guardar_borrador" value="Guardar Borrador">
                <input type="submit" class="btn btn-success" name="btn_nueva_noticia" value="Subir Noticia">
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!--SCRIPTS-->
    <script type="text/javascript">
       CKEDITOR.replace( 'cuerpo_noticia', {
        language: 'es',
        uiColor: '#9AB8F3',
        filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
       filebrowserImageBrowseUrl: '../ckfinder/ckfinder.html?type=Images',
       filebrowserFlashBrowseUrl: '../ckfinder/ckfinder.html?type=Flash',
       filebrowserUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
       filebrowserImageUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
       filebrowserFlashUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
      });
    </script>
    <script src="../js/buscador.js"></script>
    <script src="../js/app.js"></script>
    <script src="../js/validar.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $('ul li').click(function(){
      console.log($(this).html());
      });
    </script>
    <script type="text/javascript">
      function show(){
        $(".haja").show();
      }
    </script>
    <script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    </script>
    <script type="text/javascript">
      $( document ).ready(function() {
      $( "#titulo_noticia" ).focus();
      });
    </script>
  </body>
</html>
