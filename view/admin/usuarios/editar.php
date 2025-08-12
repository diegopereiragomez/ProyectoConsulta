<h3>a<a href="<?php echo $_SESSION['home']?>admin" title="Inicio">Inicio</a> <span>| </span>
<a href="<?php echo $_SESSION['home']?>admin/usuarios" title="Usuarios">Usuarios</a>
<span>| </span>
<?php if($datos->id){?>
    <span>Editar <?php echo $datos->usuario ?></span>
    <?php } else {   ?>
    <span>Nuevo usuario </span>
 <?php } ?>   
</h3>

<div class="row">
    <?php $id=($datos->id) ? $datos->id : "Nuevo"  ?>

    <form action="<?php echo $_SESSION['home']?>admin/usuarios/editar/<?php echo $id?>" class="col m12 l6" method="POST">

    <div class="row">
        <div class="input-field col s12">
            <input type="text" name="usuario" id="usuario" value="<?php echo $datos->usuario ?>">
            <label for="usuario">Usuario</label>
        </div>
        <?php $clase = ($datos->id) ? "hide" : ""  ?>
        <div class="input-field col s12 <?php echo $clase ?>">
            <input type="password" name="clave" id="clave" value="">
            <label for="clave">Contraseña</label>
        </div>
<?php $id=($datos->id) ? $datos->id : "Nuevo"  ?>

<p class="<?php echo $datos->usuario ?>"></p>
<label for="cambiar_clave">
    <input type="checkbox" name="cambiar_clave" id="cambiar_clave">
    <span>Pulsa para cmabiar la clave</span>
</label>

    </div>
    <div class="row">
        <p><strong>Permisos</strong></p>
        <p>
            Noticias
            <label for="noticias"><input type="checkbox" name="noticias" id="noticias" <?php echo ($datos->noticias ==1) ? "checked" : "" ?>></label>
        </p>

        <p>
            Usuarios
<label for="usuarios"><input type="checkbox" name="usuarios" id="usuarios" <?php echo ($datos->usuarios ==1) ? "checked" : "" ?>></label>
        </p>
         <?php $clase = ($datos->id) ? "hide" : ""  ?>
        <p class="<?php echo $clase ?>">
            Ultimo acceso
<strong> <?php 
// echo date("d/m/Y H:i", strtotime($ddatos->fecha_acceso) ) 
echo $datos->data_acceso ? date("d/m/Y H:i", strtotime($datos->data_acceso)) : 'Nunca';
?></strong>
        </p>
        <div class="input-field col s12">
<a href="<?php echo $_SESSION['home']?>admin/usuarios" title="Volver">
    <button type="button" class="btn waves-light waves-effect">
        Volver <i class="material-icons right">replay</i>
    </button>
</a>
 <button type="submit" class="btn waves-light waves-effect" name="guardar">
        Guardas <i class="material-icons right">save</i>
    </button>
        </div>
    </div>
    </form>
</div>