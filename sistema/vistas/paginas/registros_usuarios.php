<?php

$usuarios = ControladorFormulario::ctrSeleccionarRegistrosUsuarios();
//var_dump($usuarios);
?>

<main>
    <div class="container-fluid">
        <ol class="breadcrumb mb-4">
            <div class="d-flex flex-row">
                <i class="fas fa-user-tag lead mt-2 mr-1"></i>
                <h4 class="mt-1 mb-0 mr-2">Usuarios</h4>
                <button class="btn btn-success <?php
                                            if (isset($_GET["page"])) {
                                                if ($_GET["page"] == "crud_registros_usuarios") {
                                                    echo "active";
                                                } else {
                                                    echo "";
                                                }
                                            }
                                            ?>" data-toggle="modal" 
                                            data-target="#crearUsuarios"><i class="fas fa-plus-square"></i> Nuevo
                </button>
                <?php include "crud_registros_usuarios.php" ?>
            </div>
        </ol>
        <?php
                // isset() Sirve para saber si una variable esta definida o es null.
                // Se simula lista blanca de enclaces en la URL
                if (isset($_GET["page"])) {
                    if (
                        $_GET["page"] == "crud_registros_usuarios"
                        
                    ) {

                        include "paginas/" . $_GET["page"] . ".php";
                    } else {
                        //include "paginas/404.php";
                    }
                } else {
                    include "crud_registros_usuarios.php";
                }
                ?>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Información</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered display" id="InicioTabla" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Registro</th>
                                <th>Rol</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                                <th style="display:none">rol_id</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($usuarios as $key => $valor): ?>
                                <tr>
                                    <td><?php echo $valor["id_usuarios"];   ?></td>
                                    <td><?php echo $valor["email"];   ?></td>
                                    <td><?php echo $valor["registro"];   ?></td>
                                    <td><?php echo $valor["rol"];   ?></td>
                                    <td><?php echo $valor["estado"];   ?></td>
                                    <td style="display:none"><?php echo $valor["id_rol"];   ?></td>

                                    <td>
                                        <div class="btn-group">
                                            <a href="index.php?page=crud_registros_usuarios&id=<?php echo $valor['id_usuarios']; ?>" class="btn btn-info" data-toggle="modal" data-target="#visualizarUsuarios"><i class="far fa-eye"></i></a>&nbsp;
                                            <a href="index.php?page=crud_registros_usuarios&id=<?php 
                                            echo $valor['id_usuarios']; ?>" class="btn btn-secondary EditarUsuario" 
                                            data-toggle="modal" data-target="#editarUsuarios"><i class="far fa-edit"></i></a>&nbsp;
                                            
                                            <!--
                                            <button  class="btn btn-secondary" data-toggle="modal" data-target="#editarUsuarios"
                                                onclick="editar_usuario_modal(<?php //echo $valor['id_usuarios']; ?>)">
                                                <i class="far fa-printer"></i></button>
                                            -->
                           
                                            <a href="index.php?page=crud_registros_usuarios&id=<?php echo $valor['id_usuarios']; ?>" class="btn btn-danger" data-toggle="modal" data-target="#eliminarUsuarios"><i class="far fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach;  ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Registro</th>
                                <th>Rol</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                                <th style="display:none">rol_id</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>