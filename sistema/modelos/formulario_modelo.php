<?php
require_once "conexion.php";

class ModeloFormulario{

    static public function mdlCrearRegistrosUsuarios($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (id_rol, email, clave, estado) values (:id_rol, :email,:clave,:estado)");

        $stmt->bindParam(":id_rol",   $datos["id_rol"], PDO::PARAM_INT);
        $stmt->bindParam(":email",   $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":clave",   $datos["clave"], PDO::PARAM_STR);
        $stmt->bindParam(":estado",   $datos["estado"], PDO::PARAM_STR);

        if ($stmt->execute()){
            return "OK";
        } else {
            return Conexion::conectar()->errorInfo();
        }

       $stmt->close(); 
       $stmt = null;
    }

// Seleccionar todos los registros  de la tabla usuario.
// Se retorna colección con las tuplas seleccionadas.
    static public function mdlSeleccionarRegistrosUsuarios(){
        $stmt = Conexion::conectar()->prepare("SELECT id_usuarios, u.id_rol, r.nombre as rol, email, clave, registro, u.estado 
            FROM usuarios u
            INNER JOIN rol r ON u.id_rol = r.id_rol
            ORDER BY email");

        $stmt->execute();
        
        return $stmt->fetchAll();

        $stmt->close(); 
        $stmt = null;        
    }


    static public function mdlActualizarRegistro($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET
         email = :email,
         clave = :clave,
         estado = :estado
         WHERE id_usuarios = :id_usuarios");

        $stmt->bindParam(":id_usuarios",  $datos["id_usuarios"], PDO::PARAM_INT);
        $stmt->bindParam(":email",   $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":clave",   $datos["clave"], PDO::PARAM_STR);
        $stmt->bindParam(":estado",   $datos["estado"], PDO::PARAM_STR);


        if ($stmt->execute()){
            return "OK";
        } else {
            return Conexion::conectar()->errorInfo();
        }

       $stmt->close(); 
       $stmt = null;
    }

    //Seleccionar el usuario indicado en el parámetro ID.
    static public function mdlSeleccionarRegistro($id_usuarios){
        $stmt = Conexion::conectar()->prepare("SELECT id_usuarios, u.id_rol, r.nombre as rol, 
                email, clave, registro, u.estado 
            FROM usuarios u
            INNER JOIN rol r ON u.id_rol = r.id_rol
            WHERE u.id_usuarios= :id_usuarios"
            );

        $stmt->bindParam(":id_usuarios", $id_usuarios, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();
    
    
    }

}

?> 
<!--        //INSERT INTO `usuarios` (`id_usuarios`, `email`, `clave`, `registro`, `estado`) VALUES (NULL, 'marielam@gmail.com', MD5('12345'), NOW(), 'ACTIVO');
-->
