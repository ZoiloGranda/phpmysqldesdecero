<?php
//ac = 1 es agregar, 2 modificar, 3 eliminar
$accion = $_GET["ac"];
if (isset($_POST["titulo"]) && isset($_POST["contenido"])) {
  $titulo = $_POST["titulo"];
  $contenido = $_POST["contenido"];
}
$conexion = mysqli_connect("localhost", "root","","db_noticias");

switch ($accion) {
  case 1:
  //insertar noticia
  $consulta = "INSERT INTO `noticias`(`id`, `titulo`, `contenido`) VALUES (NULL, '$titulo', '$contenido')";
    mysqli_query($conexion,$consulta);
    echo "Se agregó correctamente la noticia<br>";
    break;

    case 2:
    //modificar noticia
    $id = $_POST["id"];
    $consulta = "UPDATE `noticias` SET `titulo`='$titulo',`contenido`='$contenido' WHERE id= $id";
    mysqli_query($conexion, $consulta);
    echo "Actualizado correctamente<br>";
      break;
    case 3:
      //eliminar noticia
      $id = $_GET["id"];
      $consulta = "DELETE FROM noticias WHERE id= $id";
      mysqli_query($conexion, $consulta);
      echo "Eliminado correctamente<br>";
        break;
  default:
    echo "no se realiza ninguna accion";
    break;
}
 ?>
<a href="index.php">Ver noticias</a>
