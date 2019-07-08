<?php
session_start();
require ("session_usuario.php");

  error_reporting(E_ERROR | E_WARNING | E_PARSE);
  if (!isset($_POST["btn_editar_integrante"])) {
    echo "<script> window.location.href='../ingreso.html';</script>";
  }else {
    try {
      $ID_integrante = $_POST["id_editar_integrante"];
      $NOMBRE_integrante = $_POST["nombre_editar_integrante"];
      $CATE_integrante = $_POST["categoria_editar_integrante"];

    } catch (\Exception $e) {
      echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0036');window.location.href='../administracion/menu_principal.php';</script>";
    }
    if ($ID_integrante=="" || $NOMBRE_integrante=="" || $CATE_integrante=="") {
        echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0036');windows.history.back();</script>";
    }else {
      try {
        //Transforma la primera letra a Uppercase
        $NOM_integrante = ucfirst($NOMBRE_integrante);
        switch ($CATE_integrante) {
          case 'Administracion':
            $CAT_integrante = "1";
            break;
          case 'Funcionarios':
              $CAT_integrante = "2";
          break;
          default:
            // code...
            break;
        }

        require ("dbcall.php");
        if (!$cnn) {
            die("Conexion Fallida: " . mysqli_connect_error());
        }else{
            //Ingresa los datos
            $sql = mysqli_prepare($cnn,"UPDATE equipo_trabajadores SET nombre=?,tipo=? WHERE (id=?)");
            mysqli_stmt_bind_param($sql,"ssi",utf8_decode($NOM_integrante),$CAT_integrante,$ID_integrante);
            if (mysqli_stmt_execute($sql) == TRUE) {
                echo "<script> window.alert('Datos modificados con exito');window.location.href='../administracion/administrar_equipo.php';</script>";
            }else {
                echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0036');window.location.href='../administracion/menu_principal.php';</script>";
            }
        }
      } catch (\Exception $e) {
        echo "<script> window.alert('Ha ocurrrido un error inesperado contacte al administrador. COD:0036');window.location.href='../administracion/menu_principal.php';</script>";
      }

    }
  }
 ?>
