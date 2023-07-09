<?php

class Producto {
    private $db;
    private $productos;

    public function __construct(){
        $this -> db = Conectar::conexion();
        $this -> productos = array();
    }

    public function all(){
        $query = "SELECT p.*, c.nombre as categoria FROM productos AS p INNER JOIN categorias AS c ON c.id = p.id_categoria";
        $resultado = $this->db->query($query);
        while($fila = $resultado->fetch_assoc()){
            $this->productos[]=$fila;
        }
        return $this->productos;
    }

    public function categorias(){
        $categorias = array();
        $query = "SELECT * FROM categorias";
        $resultado = $this->db->query($query);
        while($fila = $resultado->fetch_assoc()){
            $categorias[]=$fila;
        }
        return $categorias;
    }

    public function save($nombre, $referencia, $precio, $peso, $categoria, $stock, $fecha_creacion){
        $resultado = $this->db->query("INSERT into productos (nombre, referencia, precio, peso, id_categoria, stock, fecha_creacion)
        values ('$nombre', '$referencia', $precio, $peso, $categoria, $stock, '$fecha_creacion')");
        return $resultado;
    }

    public function update($id, $nombre, $referencia, $precio, $peso, $categoria, $stock){
        $resultado = $this->db->query("UPDATE productos set nombre = '$nombre', referencia = '$referencia', precio = $precio, peso = $peso, id_categoria = $categoria, stock = $stock where id = '$id'");
        return $resultado;
    }

    public function delete($id){
        $resultado = $this->db->query("DELETE FROM productos WHERE id = $id");
        return $resultado;
    }

    public function findById($id){
        $resultado = $this->db->query("SELECT * from productos where id ='$id'");
        $fila = $resultado->fetch_assoc();        
        return $fila;
    }
}

?>