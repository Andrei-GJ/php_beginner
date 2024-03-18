<?php

//Compraradores de edades

$edad_1 = 12;
$edad_2 = 111;

if ($edad_1 == $edad_2){
   print_r('la edad uno: ' .$edad_1 . ' es igual que la edad dos: ' . $edad_2);
}elseif($edad_1 > $edad_2) {
    print_r('la edad uno: ' . $edad_1 . ' es mayor que la edad dos: ' . $edad_2);
}elseif($edad_1 < $edad_2){
    print_r('la edad uno: ' . $edad_1 . ' es menor que la edad dos: ' . $edad_2);
}

