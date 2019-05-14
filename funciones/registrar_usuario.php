<?php
if (isset($_POST["btn_registro_usuario"])) {
  try {
    $nombre_real = $_POST["nombre_real_usuario"];
    $apellido_real = $_POST["apellido_real_usuario"];
    $usuario = $_POST["nombre_usuario"];
    $email = $_POST["email_usuario"];
    $password = $_POST["password_usuario"];
    $confirm_password = $_POST["cmf_password_usuario"];

    if ($nombre_real == "" || $apellido_real == "" || $usuario=="" || $password=="" || $email =="") {
        echo "<script> window.alert('Ha ocurrrido un error contacte al administrador. COD:0001');window.location.href='../ingreso.html';</script>"; //SCRIPT CORRECTO
    }else {
      require ("dbcall.php");
      if (!$cnn) {
          die("Conexion Fallida: " . mysqli_connect_error());
      }else{
            $sql = mysqli_prepare($cnn,"SELECT * FROM usuarios WHERE nombre_usuario = ?");
            mysqli_stmt_bind_param($sql,"s",$usuario);
            $rs = mysqli_stmt_execute($sql);

                  mysqli_stmt_store_result($sql);
            $contar = mysqli_stmt_num_rows($sql);

                  if ($contar==0) {
                      if ($password == $confirm_password) {

                        try {
                          require ("dbcall.php");
                          if (!$cnn) {
                              die("Conexion Fallida: " . mysqli_connect_error());
                          }else{
                              //Encriptado hash para la contraseña
                              $password_cifrada = password_hash($password,PASSWORD_DEFAULT);

                              $sql = mysqli_prepare($cnn,"INSERT INTO usuarios (nombre, apellido, nombre_usuario, password_usuario, email) VALUES (?,?,?,?,?)");
                              mysqli_stmt_bind_param($sql,"sssss",$nombre_real, $apellido_real, $usuario, $password_cifrada,$email);
                              $rs = mysqli_stmt_execute($sql);

                              mysqli_stmt_free_result($sql);
                              mysqli_close($cnn);

                              echo "<script> window.alert('Usuario almacenado con exito!');window.location.href='../paginas_administracion/registrar_usuario.html';</script>";

                          }
                        } catch (\Exception $e) {
                          echo "<script> window.alert('Ha ocurrrido un error contacte al administrador. COD:0001');window.location.href='../ingreso.html';</script>";

                        }

            }else {
                echo "<script> window.alert('Ha ocurrrido un error contacte al administrador. COD:0001');window.location.href='../ingreso.html';</script>";

            }
        }else {
            echo "<script> window.alert('Ha ocurrrido un error contacte al administrador. COD:0001');window.location.href='../ingreso.html';</script>";


        }

      }
    }

  } catch (\Exception $e) {
    echo "<script>alert('Ha ocurrrido un error contacte al administrador. COD:0001 ');</script>";
  }

}else {
  echo "<script>window.location= '../ingreso.html'</script>";
}


 ?>
