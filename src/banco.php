<?php

require_once 'Conta.php';
require_once 'Titular.php';

$marcos = new Titular('123.456.789-10', 'Marcos Yamashita');
$primeiraConta = new Conta($marcos);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // Isso é OK

echo $primeiraConta->recuperaNomeTitular(). PHP_EOL;
echo $primeiraConta->recuperaCpfTitular(). PHP_EOL;
echo $primeiraConta->recuperarSaldo(). PHP_EOL;

$vinicius = new Titular('987.654.321-00', 'Vinicius');
$segundaConta = new Conta($vinicius);
var_dump($segundaConta);

$outra = new Conta(new Titular('123', 'asdfzxcv'));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();