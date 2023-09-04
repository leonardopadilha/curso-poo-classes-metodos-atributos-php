<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->depositar(100);
var_dump($primeiraConta);