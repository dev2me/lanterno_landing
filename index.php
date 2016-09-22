<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Lanterno</title>
    <?php include("metas.php"); ?>
  </head>
  <body>
    <!-- Secciones principales -->
    <?php include("navegacion.php"); ?>
    <?php include("slider.php"); ?>

    <!-- Validaciones para las rutas-->
    <?php
    $_GET['a'] = (isset($_GET['a']))?$_GET['a']:"Inicio";
    
    switch ($_GET["a"]) {
      case 'Inicio':
        include("principal.php");
      break;
      case 'Contacto':
        echo "Este es una ruta de contacto";
      break;
      case 'atraccion':
        include("pages/atraccion_talento.php");
      break;
      default:
        echo "No existe esta url";
      break;
    }
  ?>
  <?php include("footer.php"); ?>
  <?php include("scripts.php"); ?>
  </body>
</html>
