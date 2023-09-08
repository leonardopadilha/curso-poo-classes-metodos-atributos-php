<?php

require_once 'CPF.php';

class Titular
{
    private string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCPF(): string
    {
        return $this->cpf->recuperaNumero();
    }

    private function validaNomeTitular(string $nome) : void {
        if (strlen($nome) < 5) {
            $this->nome = $nome;
            exit();
        }
    }
}