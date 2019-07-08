<?php
  error_reporting(E_ERROR | E_WARNING | E_PARSE);
  if (!isset($_POST["usuario"]) || !isset($_POST["fono"])) {
    echo "<script> window.location.href='../index.php';</script>";
  }else {
    if ($_POST["usuario"]==""||$_POST["fono"]=="") {
      echo "<script> window.location.href='../index.php';</script>";
    }else {
      require_once 'recaptchalib.php';
      $secret = "6LdG56YUAAAAAA7ewHt19tpjI_u7jSotUGj37z6m";
      // empty response
      $response = null;
      // check secret key
      $reCaptcha = new ReCaptcha($secret);
      // if submitted check response
        if ($_POST["g-recaptcha-response"]) {
            $response = $reCaptcha->verifyResponse(
                $_SERVER["REMOTE_ADDR"],
                $_POST["g-recaptcha-response"]
            );
        }
      if($response != null && $response->success) {
          try {
            $nombre_usuario = $_POST["usuario"];
            $telefono_usuario = $_POST["fono"];
            $codigo_fecha = date("YmdHis");
            if ($_POST["email"]=="") {
              $email_usuario="No incluye";
            }else {
              $email_usuario=$_POST["email"];
            }

            require('dbcall.php');
            if (!$cnn) {
              die("Conexion fallida :" . mysqli_connect_error());
            }else {
              $sql = mysqli_prepare($cnn, "INSERT INTO contacto_formulario (id,nombre,telefono,email,fecha_solicitud) VALUES (NULL,?,?,?,?)");
              mysqli_stmt_bind_param($sql,"siss",utf8_decode($nombre_usuario),utf8_decode($telefono_usuario),utf8_decode($email_usuario),utf8_decode($codigo_fecha));

              if (mysqli_stmt_execute($sql) == TRUE) {
                    echo "<script>window.location.href='../admision.php?estatemodal=true';</script>";
              }else {
                echo "<script>window.location.href='../admision.php'?estatemodal=false';</script>";
              }
            }
          } catch (\Exception $e) {
            echo "Fallo al enviar la solicitud, reintente";
          }
      }else {
        echo"<script>alert('No se pudo validar el captcha, reintente'); window.history.back();</script>";
      }
    }


  }

 ?>
