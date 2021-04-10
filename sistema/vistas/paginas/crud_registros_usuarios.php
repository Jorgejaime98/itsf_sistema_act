<?php
  require_once "controladores/formulario_controlador.php";
  // require_once "modelos/formulario_modelo.php";

  if (isset($_GET["id"])) {
    $id_usuarios = $_GET["id"];

    $usuarios = ControladorFormulario::ctrSeleccionarRegistro($id_usuarios);
    var_dump($usuarios);
  }  

  $roles = ControladorFormulario::ctrObtenerRoles();  
?>

<!-- Modal -->
<form method="POST" class="p-2">
  <div class="modal fade" id="crearUsuarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user-plus mr-1"></i>Crear Usuarios</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">        
            <div class="form-row">
              <div class="form-group">
                <label for="CrearEmail">Email</label>
                <input type="email" class="form-control" placeholder="Escriba el correo" id="CrearEmail" name="CrearEmailUsuarios" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="CrearUsuarioRol">Rol</label>                
                <select id="CrearUsuarioRol" class="form-control" name="CrearRolUsuarios" required>
                  <option selected value="0">Seleccionar...</option>
                  <?php foreach($roles as $key => $datos):  ?>                    
                    <option value="<?php echo $datos['id_rol']; ?>"><?php echo $datos["nombre"]; ?></option>
                  <?php endforeach;  ?>
                </select>                
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="CrearClave">Contraseña</label>
                <input type="password" class="form-control" placeholder="Escriba la clave" id="CrearClave" name="CrearClaveUsuarios" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="CrearEstado">Estado</label>                
                <select id="CrearEstado" class="form-control" name="CrearEstadoUsuarios" required>
                <option>Seleccione...</option>
                <option>ACTIVO</option>
                <option>INACTIVO</option>
              </select>
              </div>
            </div>
            <input type="hidden" name="CrearId" id="CrearId">        
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-secondary">Guardar</button>
          <!--<button type="button" class="btn btn-primary">Save changes</button>-->
          <?php          
          $registro = ControladorFormulario::ctrCrearRegistrosUsuarios();
          if ($registro == "OK") {
            echo '<div class="row">';
            echo '  <div class="alert alert-success">El usuario ha sido creado con éxito.</div>';
            echo '</div>';
            echo '<script> window.location = "index.php?page=registros_usuarios" </script>';
          }
          ?>        
        </div>
      </div>
    </div>
  </div>
</form>

<!--Modal Editar Usuarios-->
<form method="POST" class="p-2">
<div class="modal fade" id="editarUsuarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user-edit mr-1"></i>Editar Usuarios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="EditarEmail">Email</label>
              <input type="email" class="form-control" id="EditarEmail" placeholder="Escriba el correo" name="EditarEmailUsuarios" value="<?php echo $usuarios["email"]; ?>" required>
            </div>
            <div class="form-group col-md-6">
              <label for="EditarClave">Contraseña</label>
              <input type="password" class="form-control" id="EditarClave" placeholder="Escriba la clave" name="EditarClaveUsuarios" required>
            </div>
          </div>          
          <div class="form-row">
              <div class="form-group">
                <label for="EditarUsuarioRol">Rol</label>
                
                <select id="EditarRol_id" class="form-control" name="EditarRolUsuarios" required'>
                  <?php
                      //var_dump($id_usuarios);
                      foreach($roles as $key => $datos):                        
                          echo "<option  value=".$datos['id_rol'].">".$datos['nombre']."</option>";
                      endforeach;
                  ?>
                </select>
              </div>            
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="EditarEstado">Estado</label>
              <select id="EditarEstado" class="form-control" name="EditarEstadoUsuarios" value="<?php echo $usuarios["estado"]; ?>" required>
                <option>ACTIVO</option>
                <option>INACTIVO</option>
              </select>
            </div>
          </div>
          <input type="hidden" name="EditarPassword" id="EditarPassword" value="<?php echo $usuarios["clave"]; ?>">
          <input type="hidden" name="EditarId" id="EditarId" value="<?php echo $usuarios["id_usuarios"]; ?>">

          <div class="modal-footer">
            <button type="submit" class="btn btn-secondary" data-dismiss="modal">Guardar Cambios</button>
          </div>
      </div>
      <?php
        $registro = ControladorFormulario::ctrActualizarRegistro();
        if ($registro == "OK") {
          echo '<br><div class="alert alert-success">El usuario ha sido actualizado con éxito.</div>';
        }
      ?>
      
    </div>
  </div>
</div>
</form>