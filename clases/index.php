<?php

 class Usuario {
    public int $id;

    public array $usuarios;
    // el constructor define los parametros obligatorios de la clase
    public function __construct(int $id , array $usuarios) {
        $this->id = $id;
        $this->usuarios = $usuarios;
    }
    public function getNombre() : string {
        return $this->usuarios[$this->id];
    }


    public function recorrerUsuarios() : string {
        $resultado = '';
        foreach ($this->usuarios as $usuario) {
            $resultado .= "<br> {$usuario}";
        }
        return $resultado;
    }

    public function encontrarUsuario($id = null) : string {
        return $this->usuarios[$id ?? $this->id];
    }
 }



$usuarios = ['usuario1', 'usuario2', 'usuario3'];

$usuario = new Usuario(1 , $usuarios);


echo $usuario->id;
echo "<hr>";

echo "<pre>";
var_dump($usuario->usuarios);
echo "<pre>";
echo "<hr>";

echo $usuario->getNombre();
echo "<hr>";

echo $usuario->recorrerUsuarios();
echo "<hr>";
    echo $usuario->encontrarUsuario();