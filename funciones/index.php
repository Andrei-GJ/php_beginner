<?php


function hola ():string{
    return "hola mundo";
}

echo hola();
echo '<br>';

$funcion = function (): string {
   return "Hola Mundo";
};

echo $funcion();
echo '<br>';
// Tener en cuenta los parametos para el sprintf
function saludo(string $nombre): string {
    return sprintf('Hola %s', $nombre);
}

echo saludo('aadas');
echo '<br>';

function integer_division(...$ints):int{

    return intdiv(...$ints);
}

echo integer_division(10 , 4 );


function recorrer_usuario(...$usuarios): string {
    $resultado = ''; // Inicializamos la variable $resultado
    foreach ($usuarios as $usuario) {
        $resultado .= "<br>{$usuario}"; // Corregimos el formato de la cadena
    }
    return $resultado;
}

echo recorrer_usuario('usuario1', 'usuario2', 'usuario3'); // Corregimos el formato de los parámetros



echo '<hr>';


function recorrer_cuidades($cuidades):string
{
    foreach ($cuidades as $cuidad) {
        list($pais, $cuidad, $poblacion) = $cuidad;
        $respuesta .= "{$pais}, {$cuidad},{$poblacion}<br>";
    }
    return $respuesta;
}

$ciudades= [
    ["Madrid" , "España", 3.3],  // En millon<br>, es
    ["París" , "Francia", 2.1],
    ["Berlín" ,  "Alemania", 3.6],
    ["Londres",  "Reino Unido", 9.3],
    ["Roma", "Italia", 2.8],
    ["Ciudad de México" , "México", 8.9],
    ["Buenos Aires" , "Argentina", 2.9],
    ["Tokio" ,  "Japón", 37.8],
    ["Pekín" ,  "China", 21.5],
    ["Washington D.C.", "Estados Unidos", 0.7]
];


echo recorrer_cuidades($ciudades);