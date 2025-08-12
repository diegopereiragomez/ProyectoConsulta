<h3>
    <a href="<?php echo $_SESSION['home']?>admin" title="Inicio">Inicio</a> <span>| Usuarios</span>
</h3>

<div class="row">
    <article class="col s12 l6">
        <div class="card horizontal admin">
            <div class="card-stacked">
                <div class="card-content">
                    <i class="grey-text material-icons medium">person</i>
                    <h4 class="grey-text">nuevo usuario</h4>
                    <br><br>
                </div>
                <div class="card-action">
                    <a href="<?php echo $_SESSION['home'].'admin/usuarios/crear'  ?>" title="Añadir nombre de usuario"><i class="material-icons" title="nuevo usuario"></i>add_circle</a> 
                </div>
            </div>
        </div>
    </article>

<?php foreach($datos as $rows){ ?>
<article class="col s12 l6">
    <div class="card horizontal sticky-action admin">
        <div class="card-stacked">
            <div class="card-content">
                <i class="material-icons medium">person</i>
                <h4><?php echo $row->usuario?></h4>
                <strong>Usuarios:</strong><?php echo ($row->usuario) ?"si" : "No"; ?>
                <strong>Noticias:</strong><?php echo ($row->noticias) ?"si" : "No"; ?>
            </div>

            <div class="card-action">
                <a href="<?php echo $_SESSION['home'].'admin/usuarios/editar';  ?>" title="Editar usuario"><i class="material-icons" title="editar usuario"></i>edit</a> 
                <?php $title=($row-> activo==1) ? "Desactivar" :"Activar"; ?>
                <?php $color=($row-> activo==1) ? "green-text" :"red-text"; ?>
                <?php $icono=($row-> activo==1) ? "mood" :"mood_bad"; ?>

                <a href="<?php echo $_SESSION['home'].'admin/usuarios/activar'.$row->id;  ?>" title="<?php echo $title;  ?>"><i class="<?php echo $color;  ?> material-icons"></i>title="<?php echo $icono;  ?>"</a> 
            
            <a href="#" class="activator" title="borrar"><i class="material-icons" ></i>delete</a> 

            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">
                    Borrar usuario <i class="material-icons right">close</i>
                </span>
                <p>Estas seguro de elemininar definitivamente a <strong><?php echo $row->usuario;  ?></strong>
            <br>Esta accion no se puede deshacer</p>

            <a href="<?php echo $_SESSION['home'].'admin/usuarios/borrar/'.$row->id; ?>"><i class="material-icons right">delete</i></a>
            </div>
            </div>

<!--Confirmación de borrar-->
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Borrar usuario<i class="material-icons right">close</i></span>
                    <p>
                        ¿Estás seguro de que quieres borrar el usuario<strong><?php echo $row->usuario ?></strong>?<br>
                        Esta acción no se puede deshacer.
                    </p>
                    <a href="<?php echo $_SESSION['home'] . "admin/usuarios/borrar/" . $row->id ?>" title="Borrar">
                        <button class="btn waves-effect waves-light" type="button">Borrar
                            <i class="material-icons right">delete</i>
                        </button>
                    </a>
                </div>
            </div>
        </article>
    <?php } ?>
</div>