<?php
if (isset($_POST["inputdropzoneID"])) {
    $ID_galeria = $_POST["inputdropzoneID"];
}else {
  $ID_galeria =rand(100,999);
  echo "<script>alert('Ocurrio un error de sistema contacte al administrador. COD:0021')</script>";
}

$ds          = DIRECTORY_SEPARATOR;  //1

$storeFolder = '../images/galerias';   //2

if (!empty($_FILES)) {
    $nombre_archivo = $_FILES['file']['name'];
    $tempFile = $_FILES['file']['tmp_name'];          //3

    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4

    $targetFile =  $targetPath.$_FILES['file']['name'];  //5

    move_uploaded_file($tempFile,$targetFile); //6

    //Se renombra el file

    //codigo unico para identificar la galeria
      $codigo_fecha = date("YmdHis");
      $no_aleatorio = rand(100,999);
      $codigojunto = $codigo_fecha.$no_aleatorio; //17 digitos aleatoreos

    list($nombre,$ext)= explode(".",$nombre_archivo);
    $nombre_nuevo = "$codigojunto"."."."$ext" ;
    //renombra
    rename("../images/galerias/$nombre_archivo","../images/galerias/$nombre_nuevo");

    try {
      //Guardamos el string de la imagen en la db
      require('dbcall.php');
      if (!$cnn) {
        die("Conexion fallida :" . mysqli_connect_error());
      }else {
        $sql = mysqli_prepare($cnn,"INSERT INTO imagenes_galerias (id_imagen,id_galeria,nombre_imagen) VALUES (NULL,?,?)");
        mysqli_stmt_bind_param($sql,"ii",$ID_galeria,$nombre_nuevo);
        if (mysqli_stmt_execute($sql)==TRUE) {
          echo "<script>console.log(imagen :$nombre_nuevo, insertada en galeria:$id_galeria);</script>";
        }else {
          echo "<script>alert('Ocurrio un error inesperado contacte al administrador. COD:0021')</script>";
        }
      }

    } catch (\Exception $e) {
      echo "<script>alert('Ocurrio un error inesperado contacte al administrador. COD:0021')</script>";
    }


}
?>
