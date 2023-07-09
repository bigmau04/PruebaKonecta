<?php

class InicioController
{

  public function __construct()
  {
    require_once "models/Inicio.php";
  }

  public function index()
  {
    $inicio = new Inicio();
    $data["mayor_stock"] = $inicio->mayorStock();
    $data["producto_vendido"] = $inicio->productoMasVendido();
    require_once "views/inicio.php";
  }
}
