<h3>
    <a href="<?php echo $_SESSION['home']?>admin" title="Inicio">Inicio</a> <span>| Noticias</span>
</h3>

<div class="row">
    <article class="col s12 l6">
        <div class="card horizontal admin">
            <div class="card-stacked">
                <div class="card-content">
                    <i class="grey-text material-icons medium">imagen</i>
                    <h4 class="grey-text">nueva noticia</h4>
                    <br><br>
                </div>
                <div class="card-action">
                    <a href="<?php echo $_SESSION['home'].'admin/noticias/crear'  ?>" title="Añadir nueva noticia"><i class="material-icons" title="nueva noticia"></i>add_circle</a> 
                </div>
            </div>
        </div>
    </article>

    <?php foreach($datos as $rows){ ?>
        <article class="col s12 l6">
            <div class="card horizontal sticky-action admin">
                <div class="card-stacked">            
                    <?php  if($row->imagen){ ?>
                        <div class="car-image">
                            <img src="<?php echo $_SESSION['public']."img/".$row->imagen ?>" alt="<?php $row->titulo ?>">
                        </div>
                    <?php }  ?>

                    <div class="card-content">
                        <?php  if(!$row->imagen){ ?>
                            <i class="material-icons medium grey-text">imagen</i>
                        <?php }  ?>

                        <h4><?php echo $row->titulo ?> </h4>
                        <strong>
                           URL amigable: 
                        </strong><?php echo $row->slug ?><br>

                        <strong>Fecha</strong><?php 
// echo date(d/m/Y,strtotime( $row->fecha)) 
 echo $row->datapub ? date("d/m/Y", strtotime($row->datapub)) : 'Sen data';

?><br>

                    </div>
                    <div class="card-action">
                        <a href="<?php echo $_SESSION['home'].'admin/noticias/editar'.$row->id  ?>" type="editar"><i class="material-icons">edit</i></a>

                        <div class="card-action">
                            <a href="<?php echo $_SESSION['home'].'admin/noticias/editar';  ?>" title="Editar noticia"><i class="material-icons" title="editar noticia"></i>edit</a> 
                            <?php $title=($row-> activo==1) ? "Desactivar" :"Activar"; ?>
                            <?php $color=($row-> activo==1) ? "green-text" :"red-text"; ?>
                            <?php $icono=($row-> activo==1) ? "mood" :"mood_bad"; ?>

                            <a href="<?php echo $_SESSION['home'].'admin/noticias/activar/'.$row->id;  ?>" title="<?php echo $title;  ?>"><i class="<?php echo $color;  ?> material-icons"><?php echo $icono;  ?></i></a> 
            
                            <?php $title=($row-> home==1) ? "Quitar de inicio" :"Mostrar en inicio"; ?>
                            <?php $color=($row-> home==1) ? "green-text" :"red-text"; ?>
                            <a href="<?php echo $_SESSION['home'].'admin/noticias/home/'.$row->id;  ?>" title="<?php echo $title;  ?>"><i class="<?php echo $color;  ?> material-icons">home</i></a> 


                            <a href="#" class="activator" title="borrar"><i class="material-icons" ></i>delete</a> 

                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">
                                    Borrar usuario <i class="material-icons right">close</i>
                                </span>
                                <p>Estas seguro de elemininar definitivamente a <strong><?php echo $row->titulo;  ?></strong>
                                <br>Esta accion no se puede deshacer</p>

                                <a href="<?php echo $_SESSION['home'].'admin/noticias/borrar/'.$row->id; ?>">
                                    <button class="btn waves-effect waves-light" type="button">Borrar<i class="material-icons right">delete</i></button>    
                                </a>
                            </div>
                        </div>


                <!--Confirmación de borrar-->
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Borrar nova<i class="material-icons right">close</i></span>
                    <p>
                        ¿Está seguro de que quiere borrar la nova<strong><?php echo $row->titulo ?></strong>?<br>
                        Esta acción no se puede deshacer.
                    </p>
                    <a href="<?php echo $_SESSION['home'] . "admin/novas/borrar/" . $row->id ?>" title="Borrar">
                        <button class="btn waves-effect waves-light" type="button">Borrar
                            <i class="material-icons right">delete</i>
                        </button>
                    </a>
                </div>
            </div>
        </article>
    <?php } ?>
</div>