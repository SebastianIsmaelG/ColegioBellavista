<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
if (!isset($_SESSION["usuario_administracion"])) {
       echo "<script> window.location.href='../ingreso.html';</script>";
  }else {
      //Toma nombre y apellidos para la session
        try {
          require ("dbcall.php");

          if (!$cnn) {
            die("Conexion Fallida: " . mysqli_connect_error());
          }else{
            $sql = mysqli_prepare($cnn,"SELECT u.nombre_usuario, u.nombre,u.apellido FROM usuarios as u WHERE (nombre_usuario = ?)");
            mysqli_stmt_bind_param($sql, "s",$_SESSION["usuario_administracion"]); //utf8_encode($_SESSION["usuario_administracion"])
            $rs = mysqli_stmt_execute($sql);

            mysqli_stmt_bind_result($sql,$us, $ns, $aps);
              while ($fila = mysqli_stmt_fetch($sql)) {
                  $usuario_session = $us; //clave unica de session
                  $nombres_session = $ns; //dato de sessionu tf8_encode($ns);
                  $apellidos_session = $aps; //dato de session utf8_encode($aps);
              }
            mysqli_close($cnn);
          }

        } catch (\Exception $e) {
          echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0002');window.location.href='../ingreso.html';</script>";
      }
  } ?>
