<?php

for ($i = 20; $i >= 1; $i--) {
    $resultado = $i % 2;
    switch ($resultado) {
        case 0:
            echo $i . "<br>";
        case 1:
            continue;
    }
}