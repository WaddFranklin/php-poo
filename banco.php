<?php

require_once './src/Conta.php';
require_once './src/Titular.php';
require_once './src/Cpf.php';

$franklin = new Titular(new Cpf('123.456.789-10'), 'Franklin Nascimento');
$primeiraConta = new Conta($franklin);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$larissa = new Titular(new Cpf('111.111.111-11'), 'Larissa Borges');
$segundaConta = new Conta($larissa);

$rafael = new Titular(new Cpf('777.776.445-12'), 'Lucas Rafael');
$terceiraConta = new Conta($rafael);

echo Conta::recuperaNumeroDeContas() . PHP_EOL;

unset($primeiraConta);
echo Conta::recuperaNumeroDeContas() . PHP_EOL;
