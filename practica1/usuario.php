<?php
/**
 *
 */
class Usuario {
  //atributos private quiere decir que solo pueden ser accedidos por la misma
  private $nombre;
  private $clave;
  function __construct()  {
    $this->nombre = "";
    $this->clave = "";
  }
  public function setNombre($nom){
    $this->nombre = $nom;
  }
  public function getNombre() {
    return $this->nombre;
  }
  public function setClave($clav) {
    $this->clave = $clav;
  }
  public function getClave()  {
    return $this->clave;
  }
  public function saludar()  {
    echo "Hola";
  }
}
 ?>
