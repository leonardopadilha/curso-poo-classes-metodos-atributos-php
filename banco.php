<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('Teste teste da silva', '123.456.789-10');
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

//var_dump($primeiraConta);
