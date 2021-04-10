<?php
require_once "modelos/formulario_modelo.php";
require_once "modelos/rol_modelo.php";


class ControladorFormulario{

    // Controlador para manejar el registro del usuario al sistema.
    static public function ctrCrearRegistrosUsuarios(){        
        if (isset($_POST["CrearEmailUsuarios"])) {
            $tabla = "usuarios";

            $datos = array(
                "id_rol"  => $_POST["CrearRolUsuarios"],
                "email"  => $_POST["CrearEmailUsuarios"],
                "clave"  => $_POST["CrearClaveUsuarios"],
                "estado"  => $_POST["CrearEstadoUsuarios"]
            );            
            
            //Una vez cargado mis datos desde el formulario web,
            //los paso al modelo respectivo.
            $respuesta = ModeloFormulario::mdlCrearRegistrosUsuarios($tabla, $datos);

            return $respuesta;
        }
    }

// Método para cargar todos los usuarios a la vista respectiva.
    static public function ctrSeleccionarRegistrosUsuarios(){        

        $respuesta = ModeloFormulario::mdlSeleccionarRegistrosUsuarios();

        return $respuesta;
    }



// Controlador para manejar la actualizacion de registro del usuario al sistema.
    static public function ctrActualizarRegistro(){
        if (isset($_POST["EditarEmailUsuarios"])) {
            print_r($_POST["EditarEmailUsuarios"]);
            $tabla = "usuarios";
    
            $datos = array(
                "id_usuarios" => $_POST["EditarId"],
                "email" => $_POST["EditarEmailUsuarios"],
                "clave" => $_POST["EditarPassword"],
                "estado"  => $_POST["EditarEstadoUsuarios"]
            );

            $respuesta = ModeloFormulario::mdlActualizarRegistro($tabla, $datos);
    
            return $respuesta;
        }
    }

    //Método para consultar un registro de la tabla usuario.
    static public function ctrSeleccionarRegistro($id_usuarios){
        

        $respuesta = ModeloFormulario::mdlSeleccionarRegistro($id_usuarios);        
         
        return $respuesta;
        
    }

    static public function ctrObtenerRoles(){
        $roles = new ModeloRol();
        $respuesta  = $roles->obtener_roles();
        return $respuesta;

        $roles = null;
    }
}
?>
