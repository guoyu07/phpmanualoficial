<?php
spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});

$obj  = new Clase1();
echo $obj->var . "<br />";
$obj->mostrarVar();
?>