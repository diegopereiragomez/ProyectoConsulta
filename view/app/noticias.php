<h3>
    <a href="<?php  echo $_SESSION['home']."noticia/".$row->slug ?>"  title="Inicio"> Inicio</a><span>Noticias</span> 
</h3>



<div class="row">
    <?php

foreach($datos as $row) { ?>

<article class="col m12 l6">
<div class="card horizontal small">
    <div class="card-image">
        <img src="<?php echo $_SESSION['public']."img/".$row->imagen ?>" alt="<?php echo $row->titulo ?>">
    </div>
</div>
<div class="card-stacked">
    <div class="card-content">
        <h3><?php echo $row->titulo ?></h3>
        <p><?php echo $row->extracto ?></p>
    </div>
    <div class="card-info">
        <p><?php echo $row->fecha ? date("d/m/Y", strtotime($row->fecha)) : 'Sen data'; ?></p>
    </div>
    <div class="card-action">
        <a href="<?php echo $_SESSION['home']."noticia/".$row->slug ?>">Leer mas</a>
    </div> 
</div>
</div>
</article>

<?php }

    ?>
</div>