<?php

class Inicio {
    private $db;

    public function __construct(){
        $this -> db = Conectar::conexion();
    }
    
    public function mayorStock(){
        $query = "SELECT nombre FROM productos ORDER BY stock DESC LIMIT 1";
        $resultado = $this->db->query($query);
        $fila = $resultado->fetch_assoc();           
        return $fila;
    }

    public function productoMasVendido(){
        $query = "SELECT productos.nombre, SUM(ventas.cantidad) AS total_ventas
                    FROM ventas
                    INNER JOIN productos ON ventas.id_producto = productos.id
                    GROUP BY productos.nombre
                    ORDER BY total_ventas DESC
                    LIMIT 1;";

        $resultado = $this->db->query($query);
        $fila = $resultado->fetch_assoc();           
        return $fila;
    }
}