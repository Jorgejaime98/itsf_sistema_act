

<main>
    <div class="container-fluid">
        <ol class="breadcrumb mb-4">
            <div class="d-flex flex-row">
                <i class="fas fa-user-tag lead mt-2 mr-1"></i><h4 class="mt-1 mb-0 mr-2">Clases de docentes</h4>
                <a href="index.php?page=crear_usuarios&id=<?php echo $valor['id_usuario']; ?>" class="btn btn-success"><i class="fas fa-plus-square"></i> Nuevo</a>
                
            </div>
        </ol>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Información</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered display" id="InicioTabla" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($clases_docentes as $key => $valor) : ?>
                                <tr>
                                    <td><?php echo $key + 1;   ?></td>
                                    <td><?php echo $valor["nombre"];   ?></td>
                                    <td><?php echo $valor["descripcion"];   ?></td>
                                    <td><?php echo $valor["estado"];   ?></td>

                                    <td>
                                        <div class="btn-group">
                                            <a href="index.php?page=visualizar_usuarios&id=<?php echo $valor['id_usuario']; ?>" class="btn btn-info"><i class="far fa-eye"></i></a>&nbsp;
                                            <a href="index.php?page=editar_usuarios&id=<?php echo $valor['id_usuario']; ?>" class="btn btn-secondary"><i class="far fa-edit"></i></a>&nbsp;
                                            <a href="index.php?page=eliminar_usuarios&id=<?php echo $valor['id_usuario']; ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach;  ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>