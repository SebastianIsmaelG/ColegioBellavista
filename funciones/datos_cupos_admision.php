<?php
  try {
    require('dbcall.php');
    if (!$cnn) {
      die("Conexion Fallida: " . mysqli_connect_error());
    }else{
      $sql = "SELECT id,curso,cupos_disponibles FROM vacantes_alumnos";
      $results = mysqli_query($cnn, $sql);
      while($row = mysqli_fetch_assoc($results)) {
                $rows[] = $row;
      }
      //Prekinder
      $id0= $rows[0]["id"];
      $curso0= utf8_encode($rows[0]["curso"]);
      $cupos0= $rows[0]["cupos_disponibles"];
      //kinder
      $id1= $rows[1]["id"];
      $curso1= utf8_encode($rows[1]["curso"]);
      $cupos1= $rows[1]["cupos_disponibles"];
      //1° basico
      $id2= $rows[2]["id"];
      $curso2= utf8_encode($rows[2]["curso"]);
      $cupos2= $rows[2]["cupos_disponibles"];
      //2° basico
      $id3= $rows[3]["id"];
      $curso3= utf8_encode($rows[3]["curso"]);
      $cupos3= $rows[3]["cupos_disponibles"];
      //3° basico
      $id4= $rows[4]["id"];
      $curso4= utf8_encode($rows[4]["curso"]);
      $cupos4= $rows[4]["cupos_disponibles"];
      //4° basico
      $id5= $rows[5]["id"];
      $curso5= utf8_encode($rows[5]["curso"]);
      $cupos5= $rows[5]["cupos_disponibles"];
      //5° basico
      $id6= $rows[6]["id"];
      $curso6= utf8_encode($rows[6]["curso"]);
      $cupos6= $rows[6]["cupos_disponibles"];
      //6° basico
      $id7= $rows[7]["id"];
      $curso7= utf8_encode($rows[7]["curso"]);
      $cupos7= $rows[7]["cupos_disponibles"];
      //7° basico
      $id8= $rows[8]["id"];
      $curso8= utf8_encode($rows[8]["curso"]);
      $cupos8= $rows[8]["cupos_disponibles"];
      //8° basico
      $id9= $rows[9]["id"];
      $curso9= utf8_encode($rows[9]["curso"]);
      $cupos9= $rows[9]["cupos_disponibles"];


    }
  } catch (\Exception $e) {
    echo "<script> alert('Ha ocurrido un error al solicitar la informacion, contacte al administrador. COD:0030');</script>";
  }



 ?>
