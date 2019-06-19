<!DOCTYPE html>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
require ("../funciones/session_usuario.php");
  if (!isset($_POST["btn_editar_noticia"])) {
      echo "<script> window.location.href='../ingreso.html';</script>";
  }else {

    $id_noticia = $_POST["id_noticia"];
    $fecha_noticia = $_POST["fecha_noticia"];
    $titulo_noticia = $_POST["titulo_noticia"];
    $intro_noticia = $_POST["intro_noticia"];
    $foto_intro_noticia = $_POST["foto_intro_noticia"];
    $cuerpo_noticia = $_POST["cuerpo_noticia"];

    if ($id_noticia==""||$fecha_noticia==""||$usuario_session==""||$titulo_noticia==""||$intro_noticia==""||$cuerpo_noticia=="" ||  $foto_intro_noticia=="") {
      echo "<script> window.alert('Ha ocurrrido un error al recuperar los datos, reintente. COD:0010');window.history.back();</script>";
    }
  }
 ?>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" type="text/css" href="../css/style.css">
     <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="shortcut icon" href="../images/utilidad/favicon.ico" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
     <script src="../ckeditor/ckeditor.js"></script>
     <title>Editar Noticia CB</title>
   </head>
   <body>
     <section>
       <nav class="navbar navbar-expand-lg navbar-dark bg-primary noseleccionable">
         <a class="navbar-brand font-weight-bold text-uppercase" href="editar_noticia.php">Editar Noticia</a>
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
             <li class="breadcrumb-item active" aria-current="page">Editar Noticia</li>
           </ol>
         </nav>
       </div>
     </section>
     <section>
       <div class="container py-2">
         <div class="row">
           <div class="col-lg-12">
             <div class="py-2">
               <h5 class="title_red">EDITAR NOTICIA</h5>
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
           <form action="../funciones/modificar_noticia.php" method="POST" enctype="multipart/form-data">
             <div class="row">
               <div class="col-lg-12">
                 <div class="form-group">
                   <label class="control-label label_menu " for=""> Titulo de la noticia</label>
                   <input type="text" class="form-control" name="titular_noticia" placeholder="Titular de la noticia" value="<?php echo $titulo_noticia ?>" required autofocus>
                   <small id="titulo_help" class="form-text text-muted">
                     Maximo 200 caracteres
                   </small>
                 </div>
               </div>
               <div class="col-lg-12">
                 <div class="form-group">
                   <label class="control-label label_menu " for=""> Introducción de la noticia</label>
                   <textarea name="introduccion_noticia" class="form-control" rows="4" cols="80" maxlength="200" placeholder="Introducción de la noticia" required><?php echo $intro_noticia ?></textarea>
                   <small id="intro_help" class="form-text text-muted">
                     Maximo 200 caracteres, el texto ingresado se muestra en la vista previa de la publicación.
                   </small>
                 </div>
               </div>
               <!--$foto_intro_noticia-->
               <div class="col-lg-12">
                 <div class="form-group">
                   <div class="custom-file">
                      <input type="hidden" name="foto_intro_noticia_old" value="<?php echo $foto_intro_noticia; ?>">
                      <input type="file" class="custom-file-input" name="foto_intro_noticia" id="customFile">
                      <label class="custom-file-label" for="customFile"><?php echo $foto_intro_noticia; ?></label>
                   </div>
                   <small id="intro_help" class="form-text text-muted">
                     Tamaño maximo 3mb. La imagen ingresada se mostrara en la introduccion de la seccion noticias, es importante que represente a la publicación.
                   </small>
                 </div>
               </div>
               <div class="col-lg-12">
                 <div class="form-group">
                   <label class="control-label label_menu " for=""> Cuerpo de la noticia</label>
                   <textarea name="cuerpo_noticia" id="cuerpo_noticia" rows="30" cols="80"><?php echo $cuerpo_noticia ?></textarea>
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col-lg-12 text-right">
                 <input type="hidden" name="id_noticia" value="<?php echo $id_noticia; ?>">
                 <input type="submit" class="btn btn-success" name="btn_modificar_noticia" value="Modificar Noticia">
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
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="../js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script>
     // Add the following code if you want the name of the file appear on select
     $(".custom-file-input").on("change", function() {
       var fileName = $(this).val().split("\\").pop();
       $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
     });
     </script>
   </body>
 </html>
