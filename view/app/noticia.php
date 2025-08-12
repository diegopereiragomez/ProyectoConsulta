<h3>
    <a href="<?php  echo $_SESSION['home'] ?>"  title="Inicio"> Inicio</a><span>Noticias</span> 
    <a href="<?php  echo $_SESSION['home'] ?>noticias"  title="Noticia"> Notocias</a>
    <span><?php  echo $datos->titulo ?> </span>
</h3>

<div class="row">
    <article class="col s12">
        <div class="card horizontal large noticia">
            <div class="card-image">
        <img src="<?php echo $_SESSION['public']."public/img/".$row->imagen ?>" alt="<?php echo $row->titulo ?>">
    </div>
    <div class="card-stacked">
    <div class="card-content">
        <h3><?php echo $row->titulo ?></h3>
        <p><?php echo $row->extracto ?></p>
        <p><?php echo $row->texto ?></p>

        <br>
    
        <p><strong> fecha: </strong><?php echo $datos->fecha ? date("d/m/Y", strtotime($datos->fecha)) : 'Sen data'; ?></p>
        <br>
        <p><strong> Autor</strong><?php echo $row->autor ?></p>
    </div>
     
</div>
        </div>
    </article>
</div>

