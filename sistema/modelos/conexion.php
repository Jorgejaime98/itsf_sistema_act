<?php

class Conexion{

    static public function conectar(){
        //PDO objeto de conexión a la base de datos indicada.
        $dbcontext = new PDO("mysql:host=localhost;dbname=mer_sistema", "academico", "0956239545");

        return $dbcontext;
    }
}
?>