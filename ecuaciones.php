<?php
/* Fórmula cuadrática */
$a = $_REQUEST['a'];
$b = $_REQUEST['b'];
$c = $_REQUEST['c'];

$raiz = sqrt(($b**2) - 4*$a*$c);
$x1 = (-($b) + $raiz) / (2*$a);
$x2 = (-($b) - $raiz) / (2*$a);

echo"Resultados: <br>";
echo"El valor de x1 es = $x1";
echo"El valor de x2 es = $x2";

?>
