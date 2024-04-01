<?php

$paises = ["colombia","brasil","argentina","cuba"];


$i = 1;

while ($i <= 10){
    echo $i, PHP_EOL;
    $i++;
}
echo "<br>";

$i = 1;

do{
    echo $i, PHP_EOL;
    $i++;
}while($i <= 12);

echo "<br>";

for($i = 0; $i <= 20; $i++){
    echo $i, PHP_EOL;
}
echo "<br>";

for ($i = 0, $t = sizeof($paises); $i < $t; $i++){
    echo $paises[$i] . "<br>";
}

echo "<br>";

foreach ($paises as $pais){
    echo $pais. "<br>";
}