<div class="container">


    <div class="col-md-6 col-md-offset-3" style="background:lightgray;">
    <div class="card-body">
        <h2><strong>Registrar Carrera</strong></h2>
    </div>
    </div>

    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
            <?php if($data['id_carrera']==""){ ?>
            <form action="index.php?m=get_datosCarrera" method="post">
            <?php } ?>
            <?php if($data['id_carrera']!=""){ ?>
            <form action="index.php?m=get_datosCarrera&id_carrera=<?php echo $data['id_carrera'];?>" method="post">
            <?php } ?>
                </div>  
                    <div class="form-group">
                        <label class="control-label" for="txt_nomC">Nombre Carrera:</label>

                            <input type="text" class="form-control" name="txt_nomC" value="<?php echo $data['nombre']; ?>">           
                    </div>

                    <!--BOTONES-->
                    <div class="form-group">
                            <?php if($data['id_carrera']==""){ ?>
                                <input type="submit" class="btn btn-primary form-control" name="" value="Registrar">
                            <?php }  ?>

                            <?php if($data['id_carrera']!=""){ ?>
                            <input type="submit" class="btn btn-primary form-control" name="" value="Actualizar">
                            <?php }  ?>
                    </div>

                </div>
                
                
            </form>
            
        </div>
    </div>
    
</div>