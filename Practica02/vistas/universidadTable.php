<div class="container" style="margin-top: 80px">
    <div class="jumbotron">
        <h2><strong>Registro de universidad</strong></h2>

    </div>
    <div class="container">
        <table class="table table-striped" border="3">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>acción</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($query as $data): ?>
                    <tr>
                        <th><?php echo $data['id_uni']; ?></th>
                        <th><?php echo $data['nombre']; ?></th>
                        <th>
                            <a href="index.php?m=universidad&id_uni=<?php echo $data['id_uni']?>" class="btn btn-primary">Editar</a>
                            <a href="index.php?m=confirmarDeleteUniversidad&id_uni=<?php echo $data['id_uni']?>" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</div>