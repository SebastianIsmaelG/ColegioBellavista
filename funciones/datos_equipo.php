<?php
echo "<div class='container'>
    <div class='text-white bg-danger py-3 px-4 font-weight-bold'>
      EQUIPO ADMINISTRATIVO
    </div>
    <div class='py-3'>
      <ul class='list-group'>";
try {
  require ("dbcall.php");
  if (!$cnn) {
      die("Conexion Fallida: " . mysqli_connect_error());
  }else{
    $sql1="SELECT nombre FROM equipo_trabajadores WHERE (tipo=1) ORDER BY nombre";
    $results = mysqli_query($cnn, $sql1);
    echo "<div class='row'>";
    while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
      $nombre = utf8_encode($row["nombre"]);
      echo "<li class='list-group-item font-weight-bold col-lg-5 col-md-5 col-sm-12 col-xs-12 mx-3 '>$nombre</li>";
    }
    echo "</div></ul>
    </div>
    <br>";
    echo "<div class='text-white bg-danger py-3 px-4 font-weight-bold'>
      EQUIPO FUNCIONARIOS
    </div>
    <div class='py-3'>
      <ul class='list-group'>";
      echo "<div class='row'>";

      $sql2="SELECT nombre FROM equipo_trabajadores WHERE (tipo=2) ORDER BY nombre";
      $results = mysqli_query($cnn, $sql2);
      while ($row2 = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
        $nombre = utf8_encode($row2["nombre"]);

        echo "<li class='list-group-item font-weight-bold col-lg-5 col-md-5 col-sm-12 col-xs-12 mx-3'>$nombre</li>";
      }
      echo "</div>";
      echo "</ul>
    </div>";
  }
} catch (\Exception $e) {
  echo "<script>window.alert('Ha ocurrido un error inesperado contacte al administrador. COD:0034')</script>";
}
?>
