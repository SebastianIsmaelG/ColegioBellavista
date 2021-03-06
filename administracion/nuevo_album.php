
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
    <script src="../js/dropzone.js"></script>
    <script src="http://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/dropzone.css">
    <script type="text/javascript">
      function myFunction() {
        $( "#inputHelpBlockcampos").hide();
      }
    </script>
    <script type="text/javascript">
      function ocultar(){
        $( "#galleryfiles" ).hide();
      }
    </script>
    <title>Nuevo Álbum CB</title>
  </head>
  <body onload="ocultar();">
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
            <li class="breadcrumb-item"><a href="menu_principal.php?label=noticias">Seccion Galeria</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nuevo Álbum</li>
          </ol>
        </nav>
      </div>
    </section>
    <section>
      <div class="container py-2">
        <div class="row">
          <div class="col-lg-12">
            <div class="py-2">
              <h5 class="title_red">NUEVO ÁLBUM</h5>
              <hr>
            </div>
          </div>
        </div>
      </div>
      <div class="container py-2">
        <div class="row">
            <div class="col-lg-12">
              <div class="py-2">
                <label class="control-label label_menu sr-only" for=""> Titulo del álbum</label>
                <form class=""><input type="text" name="titulo_album" onkeyup="myFunction()" id="titulo_album" class="form-control"  maxlength="60" placeholder="Titular del album" aria-describedby="titulo_help" required>
                <small id="titulo_help" class="form-text text-muted">Maximo 60 caracteres</small>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="py-2">
                <label class="control-label label_menu sr-only" for="introduccion_noticia"> Introducción de la galeria</label>

                <textarea name="introduccion_album" id="intro_album" onkeyup="myFunction()" class="form-control" rows="3" cols="80" maxlength="150" placeholder="Introducción de la publicación" aria-describedby="intro_help" required></textarea>
                <small id="intro_help" class="form-text text-muted">Maximo 150 caracteres, el texto ingresado se muestra en la vista previa de la publicación.</small>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="py-2">
                <button type="button" class="btn btn-primary" name="button" id="enviarDatos">Crear nueva galeria</button></form>
                <small class="text-danger" id="inputHelpBlockcampos"></small>
              </div>
            </div>
            <div class="col-lg-12">
              <br>
              <div id="galleryfiles">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <form action="../funciones/upload_gallery.php" class="dropzone" id="my-dropzone" enctype="multipart/form-data"><input type="hidden" id="respuesta" name="inputdropzoneID" value=""></form>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 colxs-12">
                    <div class="form-group">
                      <button id="submit-all" class="btn btn-success" onclick="fileload();">Subir archivos</button>
                      <span id="contentloaded" class="text-danger font-weight-bold h6"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    <!--Scripts-->
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
    <script type="text/javascript">
      Dropzone.options.myDropzone = {
        // Prevents Dropzone from uploading dropped files immediately
        autoProcessQueue: false,
        parallelUploads: 50,
        init: function() {
          var submitButton = document.querySelector("#submit-all")
              myDropzone = this; // closure

          submitButton.addEventListener("click", function() {
            myDropzone.processQueue(); // Tell Dropzone to process all queued files.
          });

          // You might want to show the submit button only when
          // files are dropped here:
          this.on("addedfile", function() {
            // Show submit button here and/or inform user to click it.
          });

        }
        };
    </script>
    <script type="text/javascript">
      $('#enviarDatos').click(function(){

        var tituloGaleria=document.getElementById('titulo_album').value;
        var introGaleria=document.getElementById('intro_album').value;

        if ($('#titulo_album').val().length == 0 ||  $('#intro_album').val().length == 0 ) {
          $( "#inputHelpBlockcampos" ).show();
          document.getElementById("inputHelpBlockcampos").innerHTML = "Complete los campos requeridos";
          return false;
        }
        $( "#enviarDatos" ).prop( "disabled", true );

        var Ruta="titulo="+tituloGaleria+"&intro="+introGaleria;

        $.ajax({
          url: '../funciones/ingresar_galeria.php',
          type: 'POST',
          data: Ruta
        })
        .done(function(res){
          $( "#galleryfiles" ).show();
          $('#respuesta').val(res);
        })

      });
    </script>
    <script type="text/javascript">
      function fileload(){
        document.getElementById("contentloaded").innerHTML = " Ya subidos todos los archivos puede salir de esta ventana";
        this.disabled=true;
      }
    </script>
    <script type="text/javascript">
      $( document ).ready(function() {
      $( "#titulo_album" ).focus();
      });
    </script>
  </body>
</html>
