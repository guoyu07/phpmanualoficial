<?php
header ('Content-type: text/html; charset=utf-8');
include "Clase1.php";

$instancia = new Clase1();

// Esto también se puede hacer con una variable:

$nombreClase = 'Clase1';
$instancia = new $nombreClase(); // new Clase1()
?>