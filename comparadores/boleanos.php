<?php


//Diseña un validador booleano que verifique si un número entero es divisible por otro número entero dado

$numero1 = 12;
$numero2 = 3;

$resultado = $numero1 % $numero2;
$resultado = ($resultado == 0);
// Version 1
//if($resultado == 0){
//    $resultado = "true";
//}else{
//    $resultado = "false";
//}
echo $resultado ? "true" : "false";