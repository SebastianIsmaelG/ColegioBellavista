<?php
  try {
    require ("dbcall.php");
    if (!$cnn) {
        die("Conexion Fallida: " . mysqli_connect_error());
    }else{
      $sql = "SELECT ds.id_slider,ds.imagen_slider FROM datos_slider as ds";

      $results = mysqli_query($cnn, $sql);
      $rows = [];
      while($row = mysqli_fetch_assoc($results)) {
                $rows[] = $row;
      }
      $url_slider = '../images/slider/';
      //Imagen 1
      $id_slider1 = $rows[0]["id_slider"];
      $img_slider1 = $rows[0]["imagen_slider"];
      //Imagen 2
      $id_slider2 = $rows[1]["id_slider"];
      $img_slider2 = $rows[1]["imagen_slider"];
      //Imagen 3
      $id_slider3 = $rows[2]["id_slider"];
      $img_slider3 = $rows[2]["imagen_slider"];
    }
  } catch (\Exception $e) {
    echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0005');</script>";
  }

 ?>
