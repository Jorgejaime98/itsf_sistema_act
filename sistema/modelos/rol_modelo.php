<?php
require_once "conexion.php";

class ModeloRol {
    public $id_rol;
    public $nombre;
    public $descripcion;
    public $estado;

    public function obtener_roles(){
        $stmt = Conexion::conectar()->prepare("SELECT id_rol, nombre, descripcion, estado
            FROM rol
            WHERE estado = 'ACTIVO'
            ORDER BY nombre");

        $stmt->execute();
        
        return $stmt->fetchAll();

        $stmt->close(); 
        $stmt = null;        

    }
    
}