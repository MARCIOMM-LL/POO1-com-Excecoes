<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\ContaCorrente;

require_once "autoload.php";

$contaCorrente = new ContaCorrente(
                 new Titular(
                 new Cpf('123.456.789-10'), 'Márcio Miranda',
                 new Endereco('Cidade', 'bairro', 'rua', 'numero')  
                 ));

try {
    $contaCorrente->deposita(-100);
} catch (InvalidArgumentException $exception) {
    echo "Valor a depositar precisa ser positivo, seu hacker perigoso.";
}                