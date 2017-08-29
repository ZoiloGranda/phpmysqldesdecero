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
        <p>Por favor ingrese los datos</p>
        <form class="" action="enviar.php" method="post">
          <p>Nombre</p>
          <input type="text" name="nombre" value="">
          <p>Email</p>
          <input type="email" name="email" value="">
          <p>Mensaje</p>
          <textarea name="mensaje" rows="8" cols="80"></textarea>
          <br>
          <input type="submit" name="" value="Enviar">
        </form>
      </div>
      <footer>
      <div class="separador"></div>
      <p>Copyright 2017</p>
    </footer>
    </div>
  </body>
</html>
