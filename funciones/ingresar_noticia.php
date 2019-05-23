<!DOCTYPE HTML>
<?php
  if (isset($_POST["btn_preview_noticia"])) {
    $titulo_noticia = $_POST["titular_noticia"];
    $intro_noticia = $_POST["introduccion_noticia"];
    $cuerpo_noticia = $_POST["cuerpo_noticia"];
    //$_Post Imagen 1
    $nombre_fotografia1 = $_FILES['imagen1']['name'];
    $tipo_fotografia1   = $_FILES['imagen1']['type'];
    $tam_fotografia1   = $_FILES['imagen1']['size'];
    $ruta_fotografia1 = $_FILES['imagen1']['tmp_name'];

    $carpeta = $_SERVER['DOCUMENT_ROOT'] . '/Proyectos/ColegioBellavista/images/temporales/';
    //mover imagen a directorio temporal
    move_uploaded_file($_FILES['imagen1']['tmp_name'],$carpeta.$nombre_fotografia1);


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
              <div class='container'>
                <div class='row'>
                  <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <h4>$titulo_noticia</h4>
                    <br>
                  </div>
                </div>
                <div class='row'>
                  <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <label>$intro_noticia</label>
                    <hr>
                    <br>
                  </div>
                </div>
                <div class='row'>
                  <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div>
                      $cuerpo_noticia
                    </div>
                  </div>
                </div>
              </div>


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
