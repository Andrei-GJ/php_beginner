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
//function saludo (string $nombre):string{
//    $nombre = $nombre ?? 'perro';
//    return sprintf('hola %s', $nombre);
//}
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
