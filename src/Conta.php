<?php

class Conta {
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;
    private static $numeroContas = 0;

    public function __construct(string $nomeTitular, string $cpfTitular)
    {
        $this->validaNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->cpfTitular = $cpfTitular;
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

    public function recuperaCPFTitular() : string
    {
        return $this->cpfTitular;
    }
    
    public function recuperaNomeTitular() : string
    {
        return $this->nomeTitular;
    }

    private function validaNomeTitular(string $nomeTitular) : void {
        if (strlen($nomeTitular) < 5) {
            $this->nomeTitular = $nomeTitular;
            exit();
        }
    }

    public static function recuperaNumeroContas(): int
    {
        return self::$numeroContas;
    }
}