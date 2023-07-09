<?php

class VenderController
{

    public function __construct()
    {
        require_once "models/Vender.php";
        require_once "models/Producto.php";
    }

    public function index()
    {
        $ventas = new Venta();
        $data["ventas"] = $ventas->ventas();

        if (isset($_POST['id'])) {
            $producto = new Producto();
            $data["id"] = $_POST['id'];
            $data["producto"] = $producto->findById($_POST['id']);
        }

        require_once "views/vender/vender.php";
    }

    public function store()
    {
        $id_produto = $_POST['id'];
        $cantidad = $_POST['cantidad'];

        $producto = new Producto();
        $producto = $producto->findById($id_produto);

        if ($producto['stock'] >= $cantidad) {
            $vender = new Venta();
            $vender->vender($id_produto, $cantidad);
            $vender->setStock($id_produto, $cantidad);
            $this->index();
            echo '<script language="javascript">alert("Venta realizada");</script>';
        } else {
            $this->index();
            echo '<script language="javascript">alert("No se puedo realizar la venta. No hay la cantidad en el stock.");</script>';
        }
    }
}
