<?php

    class ControladorBase{
        /*
            Metodo para la llamada a la plantilla base.
         */

        public function ctrTraerBase(){
            /**
             * include  Se utiliza para cargar codigo proveniente desde
             * otros archivos.
             */
            include "vistas/base.php";
            // include "vistas/paginas/crud_registros_usuarios.php";
        }
    }
?>