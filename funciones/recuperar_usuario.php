<?php
  if (!isset($_POST["input_recover_password"])) {
    echo "<script> window.location.href='../ingreso.html';</script>";
  }else {
    try {
      $email_recover = $_POST["email_verificacion"];
      if ($email_recover =="") {
        echo "<script> window.alert('No pudo comprobar los datos,reintente. COD:0003');window.location.href='../ingreso.html';</script>";
      }else {
        try {

          //Se envia al correo de verificacion PD: Este contenido esta en construccion hasta el levantamiento hosting!
            $contenido= "Este es un mensaje de prueba";
            $asunto = "Recuperar contraseña";
            $headers = "MIME-Version:1.0\r\n";
            $headers .= "Content-type: text/html; charset=utf-8\r\n";
            $headers .="From: Colegio Bellavista Recuperar cuenta < $email_recover >\r\n";
            $exito = mail($email_recover,$asunto,$contenido,$headers);
            if ($exito == true) {
              echo "exito";
            }else {
              echo "error";
            }

        } catch (\Exception $e) {
            echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0003');window.location.href='../ingreso.html';</script>";
        }

      }
    } catch (\Exception $e) {
        echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0003');window.location.href='../ingreso.html';</script>";
    }

  }

 ?>
