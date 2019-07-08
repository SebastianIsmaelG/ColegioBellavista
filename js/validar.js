function validar() {
  if ($('#is').val().length == 0) {
    return false;
  }else {
    var inputsearch = $("#is").val();
    switch (inputsearch) {
      case 'Nueva Actividad':
        window.location.replace('nueva_actividad.php');
        break;
      case 'Administrar Actividad':
        window.location.href = 'administrar_actividad.php';
        break;
      case 'Nueva Noticia':
        window.location.href = 'nueva_noticia.php';
        break;
      case 'Administrar Noticia':
        window.location.href = 'administrar_noticia.php';
        break;
      case 'Administrar Borradores':
        window.location.href = 'administrar_borradores.php';
        break;
      case 'Nuevo Álbum':
        window.location.href = 'nuevo_album.php';
        break;
      case 'Administrar Álbumes':
        window.location.href = 'administrar_album.php';
        break;
      case 'Nuevo Integrante':
        window.location.href = 'nuevo_equipo.php';
        break;
      case 'Administrar Datos Integrantes':
        window.location.href = 'administrar_equipo.php';
        break;
      case 'Administrar imagenes Slider':
        window.location.href = 'administrar_slider.php';
        break;
      case 'Administrar Datos Contacto':
        window.location.href = 'administrar_contacto.php';
        break;
      case 'Administrar Datos Admisión':
        window.location.href = 'administrar_admision.php';
        break;
      case 'Datos Formulario Admisión':
        window.location.href = 'administrar_peticiones.php';
        break;
      default:
      return false;
    }
  }
};
