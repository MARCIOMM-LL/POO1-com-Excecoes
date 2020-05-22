<?php

require_once 'autoload.php';

#Importação de classes
use Alura\Banco\Modelo\Conta\{Titular, Conta};
use Alura\Banco\Modelo\{Endereco, Cpf};

$primeiraConta = new Conta($marcio);

$primeiraConta->deposita(500);
$primeiraConta->saca(300); 

$marcio = new Titular(
            new Cpf('123.456.789-10'), 'Márcio Miranda', $endereco);

$endereco = new Endereco('SP', 'um bairro', 'minha rua', '87D');            

echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;

$lilian = new Titular(
            new Cpf('698.549.548-10'), 'Lilian', $endereco);

$segundaConta = new Conta($lilian);
var_dump($segundaConta);
unset($segundaConta);

$outraConta = new Conta(
              new Titular(
              new Cpf('123.654.789-01'), 'Abcdefg', $outroEndereco));
              
$outroEndereco = new Endereco('A', 'b', 'c', '1D');

echo Conta::getNumeroDeContas();
