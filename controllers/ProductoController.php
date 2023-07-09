<?php

class ProductoController
{

  public function __construct()
  {
    require_once "models/Producto.php";
  }

  public function index()
  {
    $productos = new Producto();
    $data["productos"] = $productos->all();
    require_once "views/productos/productos.php";
  }

  public function create()
  {
    $productos = new Producto();
    $data["categorias"] = $productos->categorias();
    require_once "views/productos/create.php";
  }

  public function store()
  {
    $nombre = $_POST['nombre'];
    $referencia = $_POST['referencia'];
    $precio = $_POST['precio'];
    $peso = $_POST['peso'];
    $categoria = $_POST['categoria'];
    $stock = $_POST['stock'];
    $fecha_creacion = date('Y-m-d');

      $productos = new Producto();
      $productos->save($nombre, $referencia, $precio, $peso, $categoria, $stock, $fecha_creacion);
      $this->index();
      echo '<script language="javascript">alert("Producto agregado");</script>';
  }

  public function edit()
  {
    $productos = new Producto();
    $data["categorias"] = $productos->categorias();
    $data["producto"] = $productos->findById($_GET['id']);
    require_once "views/productos/edit.php";
  }

  public function update()
  {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $referencia = $_POST['referencia'];
    $precio = $_POST['precio'];
    $peso = $_POST['peso'];
    $categoria = $_POST['categoria'];
    $stock = $_POST['stock'];

    $productos = new Producto();
    $productos->update($id, $nombre, $referencia, $precio, $peso, $categoria, $stock);
    $this->index();
    echo '<script language="javascript">alert("Producto Actualizado");</script>';
  }

  public function eliminar()
  {
    $productos = new Producto();
    $data["producto"] = $productos->findById($_GET['id']);
    require_once "views/productos/delete.php";
  }

  public function destroy()
  {
    $productos = new Producto();
    $productos->delete($_GET['id']);
    $this->index();
    echo '<script language="javascript">alert("Producto Eliminado");</script>';
  }
}
