<h3>()</h3>
<ul>
    <?php if ($_SESSION['novas'] == 1) { ?>
        <li>
            <a href="<?php echo $_SESSION['home'] ?>admin/novas" title="Novas">Novas</a>
        </li>
    <?php } ?>
    <?php if ($_SESSION['usuarios'] == 1) { ?>
        <li>
            <a href="<?php echo $_SESSION['home'] ?>admin/usuarios" title="Usuarios">Usuarios</a>
        </li>
    <?php } ?>
    <li>
        <a href="<?php echo $_SESSION['home'] ?>admin/salir" title="Saír">Salir</a>
    </li>
</ul>