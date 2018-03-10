<?php
header ('Content-type: text/html; charset=utf-8');
include "Clase1.php";
class ClaseExtendida extends Clase1
{
    // Redefinición del método padre
    function mostrarVar()
    {
        echo "Clase extendida\n";
        parent::mostrarVar();
    }
}

$extendida = new ClaseExtendida();
$extendida->mostrarVar();
?>