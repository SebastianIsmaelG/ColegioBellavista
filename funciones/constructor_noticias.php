<?php
  //Datos incrustados van a noticias.php
  echo "<section class='bg-white border my-2 shadow-border' >
    <div class='container'>
      <div class='row'>
        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
          <div class='py-2'>
            <a class='text-decoration-none' href='noticia.php?name=$setitulo&publicacion=$setid'><h2 class='text-danger'> $setitulo </h2></a>
          </div>
        </div>
        <div class='col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left' style='width:50%;'>
          <span class='text-justify'><img src='images/iconos/calendario-color.png' alt='' width='20' height='20' ><small class='font_open font-weight-bold' >  "; echo strftime("%d de %B del %Y", strtotime($setfecha)); echo "</small></span>
        </div>
        <div class='col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right' style='width:50%;'>
          <div class='social-share'>
            <a href='#' target='_blank' class='text-decoration-none text-light'>
            <img src='images/iconos/facebook.png' alt='Facebook'  height='25px' width='25px' class='icon_zoom'/>
            </a>
            <a href='#' target='_blank' class='text-decoration-none text-light'>
            <img src='images/iconos/twitter.png' alt='Twitter' height='25px' width='25px' class='icon_zoom' />
            </a>
            <a href='#' target='_blank' class='text-decoration-none text-light' >
            <img src='images/iconos/whatsapp-48.png' alt='whatsapp' height='35px' width='35px' class='icon_zoom' />
            </a>
          </div>
        </div>
        <div class='col-lg-10 col-md-12 col-sm-12 col-xs-12'> <!--No sm no xs-->
          <div class='py-2'>
            <div style='background-image: url(images/noticias/images/$setfotointro);background-position: 0 0;background-repeat: no-repeat;background-size: cover;background-position: center;padding: 70px 0;border-style: solid;border-width: thin;border-color: black;height: 200px;'></div>
          </div>
        </div>
        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
          <div class='my-2 py-2 px-2 bg-light text-justify'>
            <p>$setintro<span>... <a href='noticia.php?name=$setitulo&publicacion=$setid'>Leer mas »</a></span></p>
          </div>
        </div>
      </div>
    </div>
  </section>";
 ?>
