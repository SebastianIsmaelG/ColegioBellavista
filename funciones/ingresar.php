<?php
if (isset($_POST["btn_ingreso_usuario"])) {
    try {
      session_start();
      $usuario = $_POST["nombre_usuario"];
      $password = $_POST["password_usuario"];
      if ($usuario=="" || $password=="") {
          echo "<script> window.alert('Ha ocurrrido un error contacte al administrador. COD:0001');window.location.href='../ingreso.html';</script>"; //SCRIPT CORRECTO
      }else{
        require ("dbcall.php");
        if (!$cnn) {
            die("Conexion Fallida: " . mysqli_connect_error());
        }else{
                //Comprobar el hash y acceder
                try {
                    require ("dbcall.php");
                    if (!$cnn) {
                        die("Conexion Fallida: " . mysqli_connect_error());
                    }else{
                      //El nombre de usuario es unique por ende solo debe arrojar 1
                      $sql = mysqli_prepare($cnn,"SELECT password_usuario FROM usuarios WHERE nombre_usuario = ?");
                      mysqli_stmt_bind_param($sql,"s",$usuario);
                      $rs = mysqli_stmt_execute($sql);

                      mysqli_stmt_store_result($sql);
                      $contar = mysqli_stmt_num_rows($sql);
                      if ($contar == 0) {
                        echo "<script> window.alert('Usuario y/o contraseña incorrectos, reintente');window.location.href='../ingreso.html';</script>";
                      }else {
                          mysqli_stmt_bind_result($sql, $pass);
                          while ($fila = mysqli_stmt_fetch($sql)) {
                              $password_hash = $pass;
                          }
                          //Comprueba el hash con la contraseña ingresada
                          if (password_verify($password,$password_hash)) {
                            $_SESSION["usuario_administracion"]=$usuario;
                            echo "<script> window.location.href='../paginas_administracion/menu_principal.php';</script>";//Aceder
                          }else {
                            echo "<script> window.alert('Usuario y/o contraseña incorrectos, reintente');window.location.href='../ingreso.html';</script>";
                          }
                      }

                    }

                } catch (\Exception $e) {
                  echo "laksñdlskñ";
                }
        }
      }

    } catch (\Exception $e) {
        echo "<script> window.alert('Ha ocurrrido un error contacte al administrador. COD:0001');window.location.href='../ingreso.html';</script>";
    }

}else {
  echo "<script>window.location= '../ingreso.html'</script>";
}


 ?>
