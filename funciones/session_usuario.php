<?php
if (!isset($_SESSION["usuario_administracion"])) {
       echo "<script> window.location.href='../ingreso.html';</script>";
  }else {
      //Toma nombre y apellidos para la session
        try {
          require ("dbcall.php");

          if (!$cnn) {
            die("Conexion Fallida: " . mysqli_connect_error());
          }else{
            $sql = mysqli_prepare($cnn,"SELECT u.nombre,u.apellido FROM usuarios as u WHERE (nombre_usuario = ?)");
            mysqli_stmt_bind_param($sql, "s", $_SESSION["usuario_administracion"]);
            $rs = mysqli_stmt_execute($sql);

            mysqli_stmt_bind_result($sql, $ns, $aps);
              while ($fila = mysqli_stmt_fetch($sql)) {
                  $nombres_session = $ns; //dato de session
                  $apellidos_session = $aps; //dato de session
              }
            mysqli_close($cnn);
          }

        } catch (\Exception $e) {
          echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0002');window.location.href='../ingreso.html';</script>";
      }
  } ?>
