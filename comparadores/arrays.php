<?php
$array1 = [1, 2, 3, 4, 5];
$array2 = [3, 4, 5, 6, 7];

$numeroG = []; // Array para almacenar los números iguales

foreach ($array1 as $elemento1) {
    foreach ($array2 as $elemento2) {

        if ($elemento1 == $elemento2) {
            $numeroG[] = $elemento1; // Agrega el número igual al array $numeroG
        }
    }
}

// Imprime los números iguales
foreach ($numeroG as $num) {
    echo $num . " ";
}
