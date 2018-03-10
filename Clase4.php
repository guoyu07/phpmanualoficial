<?php
header ('Content-type: text/html; charset=utf-8');
include "Clase1.php";

$instancia = new Clase1();

$asignada   =  $instancia;
$referencia =& $instancia;

$instancia->var = '$asignada conserva su valor';

$instancia = null; // $instancia y $referencia son null

var_dump($instancia);
var_dump($referencia);
var_dump($asignada);