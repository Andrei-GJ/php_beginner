<?php

$paises = array(
    "Argentina",
    "Brasil",
    "Canadá",
    "Chile",
    "Colombia",
    "Costa Rica",
    "Cuba",
    "Ecuador",
    "El Salvador",
    "España",
    "Estados Unidos",
    "Guatemala",
    "Honduras",
    "México",
    "Nicaragua",
    "Panamá",
    "Paraguay",
    "Perú",
    "Puerto Rico",
    "República Dominicana",
    "Uruguay",
    "Venezuela",
    "Bolivia",
    "Haití",
    "Jamaica",
    "Trinidad y Tobago"
);

foreach ($paises as $pais) {
    if(strlen($pais) <= 6) {
        echo "El pais no corresponde a el parametro " . $pais . "<br>";
    }else{
        echo strtoupper($pais) . "<br>";
    }
}