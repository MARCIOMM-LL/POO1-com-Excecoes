<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{Cpf, Endereco};
use Alura\Banco\Modelo\Conta\SaldoInsuficienteException;
use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular, };


$conta = new ContaCorrente(
         new Titular(
         new Cpf('123.456.789-10'), 'Márcio',
         new Endereco('SP', 'Jardim Kemel', 'Rua Gomes', '82')
    )
);
$conta->deposita(500);

try {
    echo $conta->saca(700);
} catch (SaldoInsuficienteException $exception) {
    echo "Você não tem saldo para reslizar este saque. <br />";
    echo $exception->getMessage() . "<br />";
}

echo $conta->getSaldo();

//echo "<pre>";

//var_dump($conta);