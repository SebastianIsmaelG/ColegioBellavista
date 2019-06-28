<?php
//Hacer consulta sql para llamar las fotos de la galeria $setid=1
$sqlphoto = mysqli_prepare($cnn,"SELECT id_imagen, nombre_imagen FROM imagenes_galerias WHERE (id_galeria = ?)");
mysqli_stmt_bind_param($sqlphoto,"i",$ID);
mysqli_stmt_execute($sqlphoto);
mysqli_stmt_bind_result($sqlphoto,$idimg,$nameimg);
$url_galeria = 'images/galerias/';
$url_photo_none = 'images/utilidad/no_photo_available.jpg';
$foto_uno = 0;

while ($fila2 = mysqli_stmt_fetch($sqlphoto)) {
  if ($foto_uno == 0) {
    echo "<div class='col-lg-4 col-md-6 col-sm-12 col-xs-12'>
      <div style='padding:3px;'>
        <div class='card'>
          <a href='' class='text-decoration-none'><img src='";
          if(isset($nameimg)){
            echo $url_galeria.$nameimg;
          }else{
            echo $url_photo_none;
          }
          echo"' class='card-img-top' alt='imagen'></a>
          <div class='card-body'>
            <div class='row'>
              <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left'>
                <span class='h6 text-left'>$settitulo</span>
              </div>
              <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify'>
                <span style='font-size:12px;'>$setintro</span>
              </div>
              <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right'>
                <div class='' style='display:inline-block;'>
                  <span class='font-weight-bold text-danger' style='font-size:11px;'>Compartir</span>
                </div>
                <div style='display: inline-block;padding-right:2px;'>
                  <a href='#' target='_blank' class='text-decoration-none text-light'>
                  <img src='images/iconos/facebook.png' alt='Facebook'  height='18px' width='18px' class='icon_zoom'/>
                  </a>
                </div>
                <div style='display: inline-block;padding-right:2px;'>
                  <a href='' target='_blank' class='text-decoration-none text-light'>
                  <img src='images/iconos/whatsapp-48.png' alt='Twitter' height='25px' width='25px' class='icon_zoom' />
                  </a>
                </div>
                <div style='display: inline-block;padding-right:2px;'>
                  <a href='' target='_blank' class='text-decoration-none text-light' >
                  <img src='images/iconos/twitter.png' alt='Instagram' height='18px' width='18px' class='icon_zoom' />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>";
  }
  $foto_uno++;
  if ($foto_uno > 1) {
    echo "<div data-toggle='lightbox' data-gallery='gallery1' data-remote='$url_galeria$nameimg'></div>";
  }
}

 ?>
