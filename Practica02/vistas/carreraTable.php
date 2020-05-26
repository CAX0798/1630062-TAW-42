<div class="container" style="margin-top: 80px">

    <div class="container">

        <div class="jumbotron">
            <h2><strong>Lista de carreras</strong></h2>
        </div>

        <table class="table table-striped" border="1">
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
                        <th><?php echo $data['id_carrera']; ?></th>
                        <th><?php echo $data['nombre']; ?></th>
                        <th>
                            <a href="index.php?m=carrera&id_carrera=<?php echo $data['id_carrera']?>" class="btn btn-primary">Editar</a>
                            <a href="index.php?m=confirmarDeleteCarrera&id_carrera=<?php echo $data['id_carrera']?>" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</div>