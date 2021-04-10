<?php
    /**
     * Archivo index: aqui se mostrara la salida de las vistas al usuario
     */

     // indica que el codigo del archivo referencias es obligatirio.
     // require
     // require_once Evita que el codigo se cargue mas de una vez.
     require_once "controladores/base_controlador.php";
     require_once "controladores/formulario_controlador.php";
     

     $base = new ControladorBase();
     $base->ctrTraerBase();
?>