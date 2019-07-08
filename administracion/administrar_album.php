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
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <title>Álbumes Almacenados CB</title>
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
            <li class="breadcrumb-item"><a href="menu_principal.php?label=actividades">Seccion Galerias</a></li>
            <li class="breadcrumb-item active" aria-current="page">Álbumes Almacenadas</li>
          </ol>
        </nav>
      </div>
    </section>
    <section>
      <div class="container py-2">
        <div class="row">
          <div class="col-lg-12">
            <div class="py-2">
              <h5 class="title_red">ÁLBUMES ALMACENADOS</h5>
              <hr>
            </div>
          </div>
        </div>
      </div>
      <div class="container py-2">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="py-2 text-center">
              <form class="form-inline" action="administrar_album.php" method="get">
               <div class="form-group col-9">
                 <input id="input_busqueda_actividades" name="input_busqueda" class="form-control" type="text" placeholder="Filtrar por titulo" style="width:100%;">
               </div>
               <div class="form-group col-3">
                 <input type="submit" class="btn btn-primary" name="btn_search" value="Buscar">
               </div>
              </form>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="py-2 text-center">
              <?php require ("../funciones/datos_albumes.php") ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--SCRIPTS-->
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
      $( document ).ready(function() {
      $( "#input_busqueda_actividades" ).focus();
      });
    </script>
  </body>
</html>
