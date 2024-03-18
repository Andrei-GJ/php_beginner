<?php

$fecha2 = new datetime('2024-03-17');
$fecha1 = new datetime('3303-03-18');


if($fecha1 == $fecha2){
    print_r("las fechas son iguales");
}elseif ($fecha2 > $fecha1){
    print_r("la fecha 2 es mayor");
}else(print_r("la fecha uno es mayor" ));