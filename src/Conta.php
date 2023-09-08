<?php

require_once 'Titular.php';
require_once 'Cpf.php';

class Conta {
    private Titular $titular;
    private Cpf $cpf;
    private float $saldo;
    private static $numeroContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        
        self::$numeroContas++;
    }

    public function __destruct()
    {
        self::$numeroContas--;
    }

    public function saca(float $valorASacar)
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        
        $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        } 
        
        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        
        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function recuperaSaldo() : float
    {
        return $this->saldo;
    }

    public static function recuperaNumeroContas(): int
    {
        return self::$numeroContas;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCPFTitular(): string
    {
        return $this->cpf->recuperaNumero();
    }
}