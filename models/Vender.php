<?php

class Venta
{
    private $db;

    public function __construct()
    {
        $this->db = Conectar::conexion();
    }

    public function ventas()
    {
        $ventas = array();
        $query = "SELECT v.id AS  id_venta, p.id AS id_producto, p.nombre AS nombre_producto, v.cantidad,  p.precio, (p.precio * v.cantidad) AS valor_venta 
                FROM ventas AS v
                INNER JOIN productos AS p ON p.id = v.id_producto";
        $resultado = $this->db->query($query);
        while ($fila = $resultado->fetch_assoc()) {
            $ventas[] = $fila;
        }
        return $ventas;
    }

    public function vender($id_producto, $cantidad)
    {
        $resultado = $this->db->query("INSERT into ventas(cantidad, id_producto) values ($cantidad,$id_producto)");
        return $resultado;
    }

    public function setStock($id_producto, $cantidad)
    {
        $resultado = $this->db->query("update productos set stock = stock -'$cantidad' where id = '$id_producto'");
        return $resultado;
    }
}
