<?php

$a = 2;
$b = 1;
$c = "2";

if($a > $b){
    echo 'a es mayor que b';
}else if($a == $b){
    echo 'b es igual que a';
}else{
    echo 'b es mayor que a';
}

echo'<hr>';
echo'<br>';

$nombre ="hola";

echo $nombre ?? "perro";
echo'<hr>';
echo'<br>';

$par = 3;

switch ($par){
    case 1:{
        echo 'enero';
        exit();
    }
    case 2:{
        echo 'febrero';
        exit();
    }
    case 3:{
        echo 'marzo';
        exit();
    }
    default :{
        echo 'xd';
        exit();
    }
}