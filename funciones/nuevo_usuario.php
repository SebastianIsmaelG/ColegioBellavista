<?php
if (isset($_POST["btn_registro_usuario"])) {
  try {
    $nombre_real = $_POST["nombre_real_usuario"];
    $apellido_real = $_POST["apellido_real_usuario"];
    $usuario_real = $_POST["nombre_usuario"];
    $password_real = $_POST["password_usuario"];

    if ($nombre_real = "" || $apellido_real = "" || $usuario_real="" || $password_real="") {
        echo "<script>alert('Ha ocurrrido un error contacte al administrador. COD:0001 '); window.location= '../ingreso.html</script>";
    }else {
      // Seguir aqui
    }

  } catch (\Exception $e) {
    echo "<script>alert('Ha ocurrrido un error contacte al administrador. COD:0001 ');</script>";
    echo $e->getMessage();
    echo "asss";
  }

}else {
  echo "<script>window.location= '../ingreso.html'</script>";
}


 ?>
