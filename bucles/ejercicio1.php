<?php
echo "Ejercicio 1";
echo "<br>";
$i = 1;

while ($i <= 20) {
    if ($i % 2 != 0) {
        echo "<br>" . $i;
        $i++;
    }else{
        $i++;
    }
}