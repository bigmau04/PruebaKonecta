<?php
class Conectar {
    public static function conexion (){
        $conexion = new mysqli("localhost", "root", "", "cafeteria");
        return $conexion;
    }
}

?>