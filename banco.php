<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$cpf = new Cpf('123.456.789-10');
$titular = new Titular('Teste teste da silva', $cpf);

$primeiraConta = new Conta($titular, $cpf);
$primeiraConta->deposita(100);

//echo $primeiraConta->recuperaNomeTitular();

var_dump($primeiraConta);

/* $primeiraConta = new Conta('Teste teste da silva', '123.456.789-10');
$primeiraConta->deposita(100);
$primeiraConta->saca(10);

echo $primeiraConta->recuperaSaldo();
echo PHP_EOL;
echo $primeiraConta->recuperaCPFTitular();
echo PHP_EOL;
echo $primeiraConta->recuperaNomeTitular();

$segundaConta = new Conta('Silva teste do teste', '123.456.789.11');
$primeiraConta->transfere(40, $segundaConta);

echo PHP_EOL;
echo $segundaConta->recuperaSaldo();
echo PHP_EOL;
echo $primeiraConta->recuperaSaldo();
echo PHP_EOL;
echo Conta::recuperaNumeroContas(); */

//var_dump($primeiraConta);
