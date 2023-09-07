<?php

// Readonly properties - Dias de Dev
class Usuario
{
    public function __construct(public readonly string $usuario, public readonly string $senha)
    {
        
    }
}

$nomes = ['Teste da Silva', 'Silva Teste'];
$usuario = new Usuario($nomes[1], '123456');
echo $usuario->usuario . ' ' . $usuario->senha;