<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sitio Web</title>
    <link rel="stylesheet" href="/css/estilos.css">
  </head>
  <body>
    <div class="contenedor">
      <header>
        <h1>Sitio Web</h1>
        <p>Aplicando conocimientos</p>
        <?php include "./modulos/menu.php"; ?>
      </header>
      <div class="contenido">
        <h1>Formulario de contacto</h1>
        <?php
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];
        $contenido = "El usuario $nombre, email $email, envió el siguiente mensaje <br> $mensaje";
        mail("zgranda@gmail.com", "Mensaje desde la web", $contenido);
        echo "Mensaje Enviado";
         ?>
      </div>
      <footer>
      <div class="separador"></div>
      <p>Copyright 2017</p>
    </footer>
    </div>
  </body>
</html>
