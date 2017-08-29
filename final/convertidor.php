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
        <h1>Convertidor</h1>
        <form class="" action="" method="get">
          <p>Digite el valor</p>
          <input type="text" name="valor" value="">
          <select class="" name="conversion">
            <option value="1">Kilos a Libras</option>
            <option value="2">Libras a Kilos</option>
          </select>
          <br>
          <input type="submit" name="" value="Convertir">
        </form>
        <h2>Resultado</h2>
        <?php
        if(isset($_GET['valor']) && isset($_GET['conversion'])){
            $valor = $_GET['valor'];
            $conversion = $_GET['conversion'];
            if ($conversion==1) {
              //kilos a libras
              $resultado = $valor * 2.2;
              echo "Son $resultado Libras";
            } else if ($conversion ==2){
              //libras a kilos
              $resultado = $valor * 0.454;
              echo "Son $resultado Kilos";
            } else{
              echo "No puede realizarse la operacion";
            }
        }
        ?>
      </div>
      <footer>
      <div class="separador"></div>
      <p>Copyright 2017</p>
    </footer>
    </div>
  </body>
</html>
